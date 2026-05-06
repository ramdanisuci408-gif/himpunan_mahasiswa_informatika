<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
<div class="card p-4 shadow" style="width:350px;">

<h4 class="text-success text-center">Login Admin</h4>

<form method="POST">
@csrf
<input class="form-control mb-2" name="username">
<input class="form-control mb-3" type="password" name="password">
<button class="btn btn-success w-100">Login</button>
</form>

</div>
</div>

</body>
</html>