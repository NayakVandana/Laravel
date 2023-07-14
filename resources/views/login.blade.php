<h1>User Login</h1>
<form action="/user" method="POST">
    @csrf
    <!-- {{@method_field('DELETE')}}  -->
    <input type="text" name="user" placeholder="Enter user name"/><br><br>
    <input type="password" name="password" placeholder="Enter user password"/><br><br>
    <button>Login</button>
</form>