<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Post;

class PageController extends Controller
{
    public function home()
    {
            // Ambil semua data post dari database
        $posts = Post::all();

        // Kirim ke view
        return view('home', compact('posts'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSubmit(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);

        // Simpan ke database
        Contact::create($request->only('name', 'email', 'message'));

        return redirect('/contact')->with('success', 'Pesan berhasil dikirim!');
    }
    
    // form umur
    public function ageForm()
    {
        return view('age-form');
    }

    // submit umur
    public function ageSubmit(Request $request)
    {
        $age = (int) $request->input('age');

        if ($age < 18) {
            return redirect()->back()->with('error', 'Umur minimal 18 tahun untuk mengakses contact.');
        }

        // simpan umur di session agar middleware CheckAge bisa pakai
        session(['age' => $age]);

        return redirect()->route('contact');
    }
}
