<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</head>
<body>
    
    
<div class="container">
<form action="con_p1.php" method="POST">
    <h1>LogIn</h1>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">UserName</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="uname">
    </div>
    
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="pass">
    </div><br/>
  </div>
  <div>
  <button type="submit" class="btn btn-primary" action="con_p1.php">Sign in</button>
  </div>
  
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>