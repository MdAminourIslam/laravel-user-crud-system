<h2>Register User</h2>
<form method="POST" action="/register">
    @csrf
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Password: <input type="text" name="password"><br><br>
    <button type="submit">Register</button> 
    <a href="/login">Have an account</a>

</form>
<br>
<a href="/">Back to Home</a>
