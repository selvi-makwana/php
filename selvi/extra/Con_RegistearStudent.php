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
      <div class="card m-5">
        <div class="card-header">
          STUDENT REGISTRATION FORM(data)
        </div>
        <?php if(isset($_GET['submit'])){ ?>
            <div class="card-body">
                <h5 class="card-title">Student Details</h5>
                <p class="card-text">
                    <div class="container">
                      <img src="<?php $url = $_GET['img']; echo $url; ?>" class="img-thumbnail" alt="...">
                        <h1><?php $name = $_GET['name']; echo $name; ?></h1>
                        <h2><?php $mail = $_GET['email']; echo $mail; ?></h2>
                        <h2><?php $phone = $_GET['pn']; echo $phone; ?></h2>
                        <h2><?php $rn = $_GET['rn']; echo $rn; ?></h2>
                        <h2><?php $dp = $_GET['dp']; echo $dp; ?></h2>
                        
                    </div>
                </p>
            </div>
            <div class="card-footer text-body-secondary">
                RECENTLY ADDED DATA
            </div>
        </div>
    </div>
<?php } ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>