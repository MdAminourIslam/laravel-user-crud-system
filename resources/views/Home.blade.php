<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Home Page</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    <div>
        <a href="/register">Register</a> |
        <a href="/login">Login</a> | 
        <a href="/update">Update</a> | 
        <a href="/show">Show Users</a> | 
        <a href="/search">Search</a> |
        <a href="/delete">Delete</a>
    </div>
</body>
</html>
