<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add User</title>
</head>
<body>
<form action="/user/create" method="post">
    @csrf
    <h1>Add User</h1>
    <div>
        firstName:<input type="text" name="firstName">
    </div>
    <br>
    <div>
        lastName:<input type="text" name="lastName">
    </div>
    <br>
    <div>
        userName:<input type="text" name="userName">
    </div>
    <br>
    <div>
        password:<input type="text" name="password">
    </div>
    <br>
    <input type="submit" value="SUBMIT" class="btn">
</form>
</body>
</html>
