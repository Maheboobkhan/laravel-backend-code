<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <a href="{{ route('user.create') }}">Add</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
</body>
</html>
