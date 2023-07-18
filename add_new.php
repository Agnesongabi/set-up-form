<?php
include"db_conn.php";
if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $sql="INSERT INTO `crud`(`first_name`,`last_name`,`email`,`gender`)
    VALUES('$first_name','$last_name','$email','$gender')";

    $result = mysqli_query($conn,$sql);

    if($result) {
        header("location:index.php?msg=new record created successfully");
    }else{
        echo"failed: " .mysqli_error($conn);
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWTRP Service Desk | User Registration Form</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <style>
        
    </style>

    <!--bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
        <nav class="navbar navbar-light justify-content-center fs-3 mb-5"style="background-color: #00ff5573;">
            LOGIN APPLICATION FORM
             </nav>

            <div class="container">
                <div class="text-center mb-4">
                    <h3>Add new user </h3>
                    <p class="text-muted">complete the form below to add a new user</p>
                </div>
                <div class="container d-flex justify-content-center">
                    <form action=""method="post"style="width:50vw;min-width:300px;">
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">First Name:</label>
                                    <input type="text" class="form-control"name="first_name"placeholder="Albert">
                                </div>

                                <div class="col">
                                    <label class="form-label">Last Name:</label>
                                    <input type="text" class="form-control"name="last_name"placeholder="Einsten">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email:</label>
                                    <input type="email" class="form-control"name="email"placeholder="name@example.com">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Gender:</label> &nbsp;
                                    <input type="radio" class="form-checkk-input"name="gender"id="male"value="male">
                                    <label for="male"class="form-input-label">Male</label>
                                    &nbsp;
                                    <input type="radio" class="form-checkk-input"name="gender"id="female"value="female">
                                    <label for="female"class="form-input-label">female</label>

                                </div>
                                <div>
                                    <button type="submit"class="btn btn-success"name="submit">save</button>
                                    <a href="index.php" class="btn btn-danger">Cancel</a>
                                </div>



                            </div>
                    </form>

                </div>
                

            </div>




        <!--bootsrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
       
        
