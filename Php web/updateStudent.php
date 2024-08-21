<?php

    session_start();
    include_once "./classes/Student.php";

    $s = new Student();

    $student = $s->getById($_GET['id']);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <center>
<section class="vh-100 bg-danger">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <v class="card-body p-4 p-md-5">
          <h1 class=" text-bg-danger text-wrap rounded-4 m-4" style=" font-size: 30px;"> Student Update Form</h1>
            <form action="con_updateStudent.php" method="post">
            <input type="hidden" name="id" value="<?php echo($student["id"])?>"/>
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    <input type="text" name="name" class="form-control form-control-lg" value="<?php echo($student['name'])?>"/>
                    <label class="form-label" for="firstName">Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    <input type="text" name="enrollment_number" class="form-control form-control-lg" value="<?php echo($student['enrollment_number'])?>"/>
                    <label class="form-label" for="lastName">Enrollment Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    <input type="password" name="password" class="form-control form-control-lg" value="<?php echo($student['password'])?>"/>
                    <label class="form-label" for="firstName">Password</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                <select class="select form-control-lg" name="course">
                        <option value="-1" 
                        <?php 
                            if($student['course']==-1) 
                            {
                                echo "selected";
                            }
                        ?>
                        disabled> --select course-- </option>
                        <option value="Mca"
                        <?php 
                            if($student['course']=="MCA") 
                            {
                                echo "selected";
                            }
                        ?>
                        >MCA</option>
                        <option value="Btech"
                        <?php 
                            if($student['course']=="B.tech") 
                            {
                                echo "selected";
                            }
                        ?>
                        >B.Tech</option>
                        <option value="Bca"
                        <?php 
                            if($student['course']=="BCA") 
                            {
                                echo "selected";
                            }
                        ?>
                        >BCA</option>
                        <option value="BscIT"
                        <?php 
                            if($student['course']=="BscIT") 
                            {
                                echo "selected";
                            }
                        ?>
                        >BscIT</option>
                </select>
                <label class="form-label select-label">Course</label>


                </div>
              </div>

              <div class="row">
                <div class="col-12">

                  <select class="select form-control-lg" name="sem">
                    <option value="-1"
                    <?php 
                            if($student['sem']==-1) 
                            {
                                echo "selected";
                            }
                        ?>
                    disabled>Choose option</option>
                        <option value="1"
                        <?php 
                            if($student['sem']==1) 
                            {
                                echo "selected";
                            }
                        ?>
                        >1</option>
                        <option value="2"
                        <?php 
                            if($student['sem']==2) 
                            {
                                echo "selected";
                            }
                        ?>
                        >2</option>
                        <option value="3"
                        <?php 
                            if($student['sem']==3) 
                            {
                                echo "selected";
                            }
                        ?>
                        >3</option>
                        <option value="4"
                        <?php 
                            if($student['sem']==4) 
                            {
                                echo "selected";
                            }
                        ?>
                        >4</option>
                        <option value="5"
                        <?php 
                            if($student['sem']==5) 
                            {
                                echo "selected";
                            }
                        ?>
                        >5</option>
                        <option value="6"
                        <?php 
                            if($student['sem']==6) 
                            {
                                echo "selected";
                            }
                        ?>
                        >6</option>
                        <option value="7"
                        <?php 
                            if($student['sem']==7) 
                            {
                                echo "selected";
                            }
                        ?>
                        >7</option>
                        <option value="8"
                        <?php 
                            if($student['sem']==8) 
                            {
                                echo "selected";
                            }
                        ?>
                        >8</option>
                  </select>
                  <label class="form-label select-label">Semester</label>

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input data-mdb-ripple-init class="btn btn-danger btn-lg" type="submit" value="Save" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>