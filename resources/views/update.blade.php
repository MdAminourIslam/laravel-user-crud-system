<h2>Update User Info</h2>
<form method="POST" action="/update">
    @csrf
    Email (to find user): <input type="email" name="email"><br><br>
    New Name: <input type="text" name="name"><br><br>
    New Password: <input type="text" name="password"><br><br>
    <button type="submit">Update</button>
</form>
<a href="/">Back to Home</a>
