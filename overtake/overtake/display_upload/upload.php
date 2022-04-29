<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center text-white bg-dark">Registerd name with pictures</h1>
        <br>
        <div class="table-responsive">
        <table class="table table-bordered table-striped">

           <thead>
               <th>Id</th>
               <th>Student name</th>
               <th>Picture</th>
               </thead>
            <tbody>
             
               <?php

                 $conn = mysqli_connect('localhost','root');
                 mysqli_select_db($conn,'mission');

                 $errors = array('student_id'=>'', 'username'=>'', 'file'=>'');

                 if(isset($_POST['submit'])){
                       

                      

                       $student_id = $_POST['student_id'];
                       $username = $_POST['username'];
                       $files = $_FILES['file'];

                       print_r($username);
                       echo "<br>";
                       //print_r($files);

                       $filename = $files['name'];
                       $fileerror = $files['error'];
                       $filetmp = $files['tmp_name'];

                       $fileext = explode('.', $filename);
                       $filecheck = strtolower(end($fileext));

                       $flieextstored = array('png', 'jpg', 'jpeg');

                       if(in_array($filecheck,$flieextstored)){
                           $destinationfile = 'upload/'.$filename;
                           move_uploaded_file($filetmp,$destinationfile);

                           $q = "INSERT INTO `imgupload`(`stu_id`, `student_name`, `image`) VALUES ('$student_id','$username', '$destinationfile')";

                           $query = mysqli_query($conn, $q);
                           
                           $displayquery = " select * from imgupload ";
                           $querydisplay = mysqli_query($conn,$displayquery);

                           //$row = mysqli_num_rows($querydisplay);

                           while($result = mysqli_fetch_array($querydisplay)){
                                     ?>

                                     <tr>
                                         <td><?php echo $result['stu_id']; ?></td>
                                         <td><?php echo $result['student_name']; ?></td>
                                         <td> <img src="<?php echo $result['image']; ?>" height="100px" weight="100px"></td>
                                     </tr>

                             <?php
                           }
                       }

                 }
            ?>

            </tbody>
            </table>
    </div>
    </div>
</body>
</html>