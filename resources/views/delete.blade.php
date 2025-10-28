<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>

    <h2>Delete User</h2>
    <form method="POST" action="/delete">
        @csrf
        Email: <input type="email" name="email"><br><br>
        <button type="submit">Delete</button>
    </form>
    @if(isset($message))
        <p style="color:blue; margin-top:20px;">{{ $message }}</p>
    @endif
    <br>
    <a href="/">Back to Home</a>

</body>
</html>