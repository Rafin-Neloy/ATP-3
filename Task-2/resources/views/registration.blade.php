<h1>User Registration</h1>
<form action="registration" method="post">
    @csrf
    <input type="text"name="userfirstname"placeholder="First Name"/><br>
    <span style="color: red">@error('userfirstname'){{$message}}@enderror</span><br>
    <input type="text"name="username"placeholder="User Name"/><br>
    <span style="color: red">@error('username'){{$message}}@enderror</span><br>
    <input type="text"name="useremail"placeholder="Email"/><br>
    <span style="color: red">@error('useremail'){{$message}}@enderror</span><br>
    <input type="password"name="userpassword"placeholder="Enter your password"/><br>
    <span style="color: red">@error('userpassword'){{$message}}@enderror</span><br>
    <input type="password"name="reuserpassword"placeholder="Again enter your password"/><br>
    <span style="color: red">@error('reuserpassword'){{$message}}@enderror</span><br>
    <button type="submit">Register</button>
</form>