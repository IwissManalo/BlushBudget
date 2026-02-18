<div style= "border: 3px solid black;">
    <h2>Log-in</h2>
    <form action="/login" method="POST">
        @csrf
        <input type="text" name="loginname" placeholder="Name"><br><br>
        <input type="password" name="loginpassword" placeholder="Password"><br><br>
        <button type="submit">Log-in</button>
    </form>
</div>