<?php
//session_start();
require 'dbcon.php';


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>



    <div class="container">
      <?php ?>
      <div class="row">
        <div class="cal-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Student Details
                <a href="student.create.php" class="btn btn-primary float-end ">Add Student</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $query = "SELECT * FROM students";
                  $query_run = mysqli_query($con,$query);


                  if(mysqli_num_rows($query_run)>0){

                    foreach($query_run as $student){
                      //echo 
                      ?>
                      
                      <tr>
                        <td> <?= $student["Id"] ; ?></td>
                        <td> <?= $student["name"] ; ?></td>
                        <td> <?= $student["email"] ; ?></td>
                        <td> <?= $student["phone"] ; ?></td>
                        <td> <?= $student["course"] ; ?></td>
                        <td>
                          <a href="student-view.php?Id=<?=$student["Id"] ; ?>" class="btn btn-info btn-sm">View</a>
                          <a href="student-edit.php?Id=<?=$student["Id"] ; ?>" class="btn btn-success btn-sm">Edit</a>
                          <a href="" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                    <?php
  

                    }

                  }
                  else{
                    echo "<h4> no data found</h4>";
                  }
                  ?>
                  
                </tbody>

              </table>

            </div>
          </div>
        </div>
         
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>