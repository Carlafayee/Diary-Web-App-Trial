<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('127.0.0.1:3306','root','','blog_database') or die('Unable To connect');

        $user_first_name = $_POST["user_first_name"];
        $user_last_name = $_POST["user_last_name"];

        $email = $_POST["user_email"];

        $password = $_POST["password"];
        $user_name = $_POST["user_name"];
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql_query = "SELECT * FROM user_name='$user_name' or email='$email'";
        $sql = "INSERT INTO `login_user` (`user_name`, `first_name`, `last_name`, `email`, `password`,`full_name`) VALUES ('$user_name', '$user_first_name', '$user_last_name', '$email', '$hash','$user_first_name $user_last_name ');";
        if($con->query($sql_query) === TRUE){
            echo "There is existing email or username ";
        }
        else{
            if ($con->query($sql) === TRUE) {
                echo "New record created successfully";
                } else {
                echo "Error: " . $sql . "<br>" . $con->error;
                }
        }       

        $con->close();
    }
    
    if(isset($_SESSION["id"])) {
        header("Location:login.php");
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <style>
             
             /* {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
             }  */
             body{
              background-image: url(./bg5.jpg);
             }
             .row{
                background: rgb(255, 183, 178);
                border-radius: 30px;
                box-shadow: 12px 12px 22px grey;
             }
             img{
                border-top-left-radius: 30px;
                border-bottom-left-radius: 30px;
             }
             .btn1{
                border:none;
                outline: none;
                height: 50px;
                width: 100%;
                background-color:#E84A58;
                color: rgb(199, 206, 234);
                border-radius: 4px;
                font-weight: bold;
             }
             .btn1:hover{
                background: white;
                border: 1px solid;
                color: black;
             }


         </style>
  </head>
  <body>

        <section class="Form my-4 mx-5">
            <div class="container-fluid">
                <div class ="row no-gutters">
                    <div class="col-lg-5">
                        <img src="./lili.jpg" class="img-fluid" alt="">
                    </div><br>
                    <div class="col-lg-7 px-5 pt-5">
                        <h1 class="font-weigth-bold py-3">REGISTER NOW!</h1>
                        <h4>Fill out the form</h4>
                        <form>
                            <div class="form-row">
                                <div  class="col-lg-7">
                                    <input type="text" placeholder="First Name" class="form-control my-3 p-4">  
                                </div>
                            </div>
                            <div class="form-row">
                                <div  class="col-lg-7">
                                    <input type="text" placeholder="Last Name" class="form-control my-3 p-4">  
                                </div>
                            </div>
                            <div class="form-row">
                                <div  class="col-lg-7">
                                    <input type="text" placeholder="Username" class="form-control my-3 p-4">  
                                </div>
                            </div>
                            <div class="form-row">
                                <div  class="col-lg-7">
                                    <input type="tel" placeholder="Cellphone Number" class="form-control my-3 p-4">  
                                </div>
                            </div>
                            <div class="form-row">
                                <div  class="col-lg-7">
                                    <input type="email" placeholder="Email Address" class="form-control my-3 p-4">  
                                </div>
                            </div>
                            <div class="form-row">
                                <div  class="col-lg-7">
                                    <input type="password" placeholder="********" class="form-control my-3 p-4">  
                                </div>
                            </div>
                            <div class="form-row">
                                <div  class="col-lg-7">
                                    <button type="button" class="btn1">Sign Up</button>
                                </div>
                            </div>
                            <p>Have an account already? <a href="login.html">Login Here</a></p>
                        </form>
                </div>
            </div>

        </section>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>