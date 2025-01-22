<h2>Hello form test admin dashboard.</h2>

<form action="{{ route('admin.auth.logout') }}" method="POST">
    @csrf
    <button type="submit">Admin Logout</button>
</form>
