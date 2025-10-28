<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
</head>
<body>

    <h2> User Login</h2>

    <!-- Success or Error Message -->
    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    <!-- Login Form -->
    <form method="POST" action="/login">
        @csrf
        <label>Email:</label><br>
        <input type="email" name="email" placeholder="Enter your email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" placeholder="Enter your password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <br>
    <a href="/"> Home</a> |
    <a href="/register">Register</a>

</body>
</html>
