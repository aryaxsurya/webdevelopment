<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    public function handle(Request $request, Closure $next): Response
    {
        // cek session
        $age = $request->session()->get('age');

        if ($age === null) {
            // belum input umur → redirect ke form
            return redirect()->route('age.form');
        }

        if ((int)$age < 18) {
            return response('Akses ditolak. Umur minimal 18 tahun.', 403);
        }

        return $next($request);
    }
}
