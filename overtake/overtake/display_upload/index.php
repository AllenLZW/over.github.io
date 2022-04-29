
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
       
          <div class="container">
               <h1 class="text-white bg-dark text-center ">
                    register form for events
               </h1>
               <div class="col-lg-8 m-auto d-block"></div>
               <form action="upload.php" method="post" enctype="multipart/form-data" >
               <div class="form-group">
                       <labe for='user'>Student ID:</label>
                       <input type="text" name="student_id" id="stu_id" class="form-control">
                       
                   </div>    
               
               
               
               <div class="form-group">
                       <labe for='user'>username:</label>
                       <input type="text" name="username" id="user" class="form-control">
    
                       
                   </div>
                   <div class="form-group">
                       <label for="file">Pictures</label>
                       <input type="file" name="file" id="file" class="form-control">
                   </div>
                   <input type="submit" name="submit" id="Submit" class="btn btn-success">
               </form>
          </div>

    </body>
</html>