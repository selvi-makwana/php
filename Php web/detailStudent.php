<?php

    session_start();
    include_once "./classes/Student.php";

    $s = new Student();

    $student = $s->getById($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    
    
    
    
    
    

    
    
    <div class="card">
        <h3 class="card-header badge bg-danger text-wrap rounded-4 m-4" style=" font-size: 30px;"> STUDENT PERSONAL DETAILS</h3>
        <div class="card-body">
            <h1 class="badge text-bg-danger  text-wrap rounded-1 p-2 m-2" style=" font-size: 25px; ">Student Name :   <?php echo($student['name']) ?></h1>
            <p class="card-text">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h3><?php echo("<h5>Id :</h5>".$student['id']) ?></h3></li>
                    <li class="list-group-item"><h3><?php echo("<h5>Enrollment-Number : </h5> ".$student['enrollment_number']) ?></h3></li>
                    <li class="list-group-item"><h3><?php echo("<h5>Password :</h5> ".$student['password']) ?></h3></li>
                    <li class="list-group-item"><h3><?php echo("<h5>Course :</h5> ".$student['course']) ?></h3></li>
                    <li class="list-group-item"><h3><?php echo("<h5>Sem :</h5> ".$student['sem']) ?></h3></li>
                </ul>
            </p>
            <a href="listStudent.php" class="btn btn-danger">Back</a>
        </div>
    </div>
    




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>


