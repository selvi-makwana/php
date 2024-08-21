<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>File Uplode demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        img{
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-top: 100px;
        }
        h1{
          margin-top: 100px;
        }
    </style>
</head>

<body>

  <form action="" method="POST" enctype="multipart/form-data">
    <div class="container mt-5 ">
      <h1 class="text-center mb-5">File Uplode Demo</h1>
      <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02" name="file_chose">
        <input type="submit" value="Uplode" class="btn btn-primary" name="submit">
      </div>
    </div>
  </form>

  <?php
  if (isset($_FILES["file_chose"])) {
    $file = $_FILES["file_chose"]["name"];
    $file_temp = $_FILES["file_chose"]["tmp_name"];
    $file_size = $_FILES["file_chose"]["size"];
    $file_type = $_FILES["file_chose"]["type"];

    if (move_uploaded_file($file_temp, "Server/" . $file)) {
      echo "<center> <img src=\"./Server/$file\"> </center>";
      echo "<center> <h1> File uploaded successfully </h1> </center>";
    }
    else {
      echo "<center> <img src=\"./Server/Krushnam_Sada_Sahayate.jpg\"> </center>";
      echo "<center> <h1> Default File upload</h1> </center>";
    }
  }
  else {
    echo "<center> <img src=\"./Server/Krushnam_Sada_Sahayate.jpg\"> </center>";
      echo "<center> <h1> Page load File upload</h1> </center>";
  }

  ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>

</html>
