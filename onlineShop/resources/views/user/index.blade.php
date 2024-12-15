<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
<h1>Users</h1>
<ul>
    @foreach($users as $user)
        <li>
            ID: {{ $user['id'] }} - First Name: {{ $user['firstName'] }} - Last Name: ${{ $user['lastName'] }}
        </li>
    @endforeach
</ul>
</body>
</html>
