<h1>user Login</h1>

<!-- <form action="users" method="GET">
    <input type="text" name="user" placeholder="Enter user name"/><br><br>
    <input type="password" name="password" placeholder="Enter user password"/><br><br>
    <button>Login</button>
</form> -->

<!-- <h1>post method </h1> -->

<!-- <form action="users" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter user name"/><br><br>
    <input type="password" name="password" placeholder="Enter user password"/><br><br>
    <button>Login</button>
</form> -->

<!-- <h1>put(update) method  </h1> -->
<!-- <form action="users" method="POST">
     @csrf
    {{@method_field('PUT')}} 
    <input type="text" name="user" placeholder="Enter user name"/><br><br>
    <input type="password" name="password" placeholder="Enter user password"/><br><br>
    <button>Login</button>
</form> -->

<!-- <h1>Delete method  </h1> -->
<form action="users" method="POST">
@csrf
    {{@method_field('DELETE')}} 
    <input type="text" name="user" placeholder="Enter user name"/><br><br>
    <input type="password" name="password" placeholder="Enter user password"/><br><br>
    <button>Login</button>
</form>
