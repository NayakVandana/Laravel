<h1>Add New Member</h1>
@if(session('user'))
<h3>Data saved for {{session('user')}}</h3>
@endif
<form action="storecontroller" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter User Name"/><br><br>
    <input type="password" name="password" placeholder="Enter User Password"/><br><br>
    <input type="text" name="email" placeholder="Enter User Email"/><br><br>
    <button type="submit">Add User</button>
</form>