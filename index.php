<?php
error_reporting(0);
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if($_SESSION["name"]) {
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <style>
         body{
                background: rgb(255, 154, 162);
            }

         body {
                background-image: linear-gradient(rgba(47, 23, 15, 0.25), rgba(47, 23, 15, 0.25)), url("./bg5.jpg");
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
              }

        #mainNav{
                background: black;
                color: white; !important
                }

        #mainNav .navbar-brand {
                color: #e6a756;
                }

        #mainNav .navbar-nav .nav-item .nav-link {
                color: rgb(255, 154, 162);
                font-weight: 800;
                }

        #mainNav .navbar-nav .nav-item.active .nav-link {
                color: rgb(213, 65, 119);
                }

        @media screen and (min-width: 992px) {
                #mainNav {
                position: relative;
                }
              }
    </style>
    

<body>
      <nav class="navbar navbar-expand-lg py-lg-4" id="mainNav">
         <div class="container-fluid">
        <a class="navbar-brand" href="#">Diary Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">My Entries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="entry.html">Write New Entry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Account</a>
            </li>
          </ul>
        </div>
      </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
}else {
	header("Location:login.php");
}

?>
</body>
</html>