<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form action="Con_RegistearStudent.php" method="get">
            <h1>Student Registration</h1>
            <br><br>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Name</label>
              <input type="text" class="form-control" placeholder="Enter Name" name="name" >
            </di>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Image</label>
              <input type="text" class="form-control" placeholder="Enter Image Path" name="img" id="img">
            </di>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email address</label>
              <input type="email" class="form-control"  placeholder="name@example.com" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">PhoneNumber</label>
              <input type="text" class="form-control" placeholder="Enter PhoneNumber" name="pn">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">RollNumber</label>
              <input type="text" class="form-control" placeholder="Enter RollNumber" name="rn">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Department</label>
              <input type="text" class="form-control" placeholder="Enter Department" name="dp">
            </div>          
            </div>
            <br><br>
            <input type="submit" class="btn btn-primary" name="submit"></input>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>