<?php

    session_start();
    include_once "./classes/Student.php";

    $s = new Student();

    $students = $s->getall();

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
    <?php  
        if(isset($_SESSION['msg'])){
            echo("<label style='color:green'>".$_SESSION['msg']."</label>");
            unset($_SESSION['msg']);
        }
    ?>
    <center>
    <section class="vh-100 gradient-custom">
    <table>
        <h1 class=" text-bg-danger text-wrap rounded-4 m-4" style=" font-size: 30px;"> STUDENT PERSONAL DETAILS</h1>
            <div class="container m-5  p-2 text-dark bg-opacity-25" >
                <table class="table table-danger table-hover  rounded-4" >
                    <tr>
                        <td><h2 class="badge bg-danger text-wrap m-2 p-2" style=" font-size: large;">Id</h2></td>
                        <td><h2 class="badge bg-danger text-wrap m-2 p-2" style=" font-size: large;">Name</h2></td>
                        <td><h2 class="badge bg-danger text-wrap m-2 p-2" style=" font-size: large;">Enroll</h2></td>
                        <td><h2 class="badge bg-danger text-wrap m-2 p-2" style=" font-size: large;">Course</h2></td>
                        <td><h2 class="badge bg-danger text-wrap m-2 p-2" style=" font-size: large;">Sem</h2></td>
                        <td><h3 class="badge bg-danger text-wrap m-2 p-2" style=" font-size: large;">View Details</h3></td>
                        <td><h3 class="badge bg-danger text-wrap m-2 p-2" style=" font-size: large;">Update Details</h3></td>
                        <td><h3 class="badge bg-danger text-wrap m-2 p-2" style=" font-size: large;">Delete Details</h3></td>

                    </tr>
                    <?php 
                        foreach($students as $stu){

                        
                    ?>
                    <tr>
                        <td><?php echo($stu['id']) ?></td>
                        <td><?php echo($stu['name']) ?></td>
                        <td><?php echo($stu['enrollment_number']) ?></td>
                        <td><?php echo($stu['course']) ?></td>
                        <td><?php echo($stu['sem']) ?></td>
                        <td>
                            <a href = "detailStudent.php?id=<?php echo($stu['id']) ?>"class="btn btn-success m-2">Read More</a>
                        </td>
                        <td>
                            <a href = "updateStudent.php?id=<?php echo($stu['id']) ?>"class="btn btn-warning m-2">Update</a>
                        </td>
                        <td>
                            <a href = "deleteStudent.php?id=<?php echo($stu['id']) ?>"class="btn btn-danger m-2">Delete</a>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
                </table>
            </div>
        </table>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </center>                  
    
</body>
</html>