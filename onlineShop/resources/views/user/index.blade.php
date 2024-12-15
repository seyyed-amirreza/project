<!-- resources/views/users/index.blade.php -->

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
<h1>List</h1>
<table border="1">
    <thead>
    <tr>
        <th>Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Password</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->firstName }}</td>
            <td>{{ $user->lastName }}</td>
            <td>{{ $user->userName }}</td>
            <td>{{$user->password}}</td>
        </tr>
    @endforeach
    </tbody>
    <a href="/user/create">create new user</a>
</table>
</body>
</html>
