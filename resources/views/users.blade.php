<h1>User Login</h1>
<!-- {{$errors}} -->
<!-- @if($errors->any())
@foreach ($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif -->
<form action="users" method="POST">
      @csrf
      <input type="text" name="username" placeholder="enter user id"/>
      <span style="color:red">@error('username'){{$message}}@enderror</span>
      <br><br>
      <input type="password" name="userpassword" placeholder="enter user password"/>
      <span style="color:red">@error('userpassword'){{$message}}@enderror</span>
      <br><br>
      <button type="submit">Login</button>
</form>