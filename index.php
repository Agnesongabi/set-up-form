
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWTRP Service Desk | User Registration Form</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />


    <!--bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
        <nav class="navbar navbar-light justify-content-center fs-3 mb-3"style="background-color: #00ff5573;">
            LOGIN APPLICATION FORM
             </nav>
             <div class="container">
                <?php
                if(isset($_GET['msg'])){
                    $msg = $_GET['msg'];
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    '.$msg.'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div> ' ;

                } 
                ?>
                <a href="add_new.php"class="btn btn-dark mb-5">Add New</a>
                <table class="table table table-hover text-center">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "db_conn.php";
                    $sql = "SELECT * FROM `crud`";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        ?>

                        <tr>
                            <td> <?php echo $row['id']?></td>
                            <td> <?php echo $row['first_name']?></td>
                            <td> <?php echo $row['last_name']?></td>
                            <td> <?php echo $row['email']?></td>
                            <td> <?php echo $row['gender']?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id'] ?>"class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>"class="link-dark"><i class="fa-solid fa-trash fs-5 "></i></a>
                            </td>
    
                        </tr>

                        <?php
                        
                    }
                    ?>
                   
                    
                </tbody>
                </table>

             </div>
            


        <!--bootsrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
       
</body>
</html>      
