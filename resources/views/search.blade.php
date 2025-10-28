<h2>Search User by Email</h2>
<form method="POST" action="/search">
    @csrf
    Email: <input type="email" name="email">
    <button type="submit">Search</button>
</form>

@if(isset($user))
    <h3>Result:</h3>
    Name: {{ $user->name }} <br>
    Email: {{ $user->email }} <br>
    Password: {{ $user->password }}
@elseif(isset($message))
    <p style="color:red;">{{ $message }}</p>
@endif

<br><br>
<a href="/">Back to Home</a>
