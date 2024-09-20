<!-- resources/views/user/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <h1>Create User</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" required>
            @error('first_name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" required>
            @error('last_name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Submit</button>
    </form>
    <a href="{{ route('home') }}">Back to Home</a>
</body>
</html>
