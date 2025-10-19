<!DOCTYPE html>
<html>
<head>
    <title>Age Check</title>
</head>
<body>
    <h1>Masukkan umur Anda</h1>

    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    <form action="{{ route('age.submit') }}" method="POST">
        @csrf
        <input type="number" name="age" placeholder="Umur Anda" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
