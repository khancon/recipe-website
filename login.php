<!DOCTYPE html>
<html>
  <!-- Shivali Dessai and Ahnaf Khan-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="your name">
        <meta name="description" content="include some description about your page">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./logincss.css">
        <style>
          body {
            background: #f2defc;
            /* background: linear-gradient(to right, #ff7979, #ffbe76, #f6e58d); */
          }
        </style>
        <title>ReciBlog</title>
    </head>
    <body>
      <!-- <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8e44ad;">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html">ReciBlog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">    
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Recipes</a>    
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">        
                          <a class="dropdown-item" href="#">Categories</a>        
                          <a class="dropdown-item" href="#">Favorited</a>        
                          <div class="dropdown-divider"></div>        
                            <a class="dropdown-item" href="./newrecipe.html">+ Add Recipe</a>    
                          </div>
                      </li>
                      <li class="nav-item">    
                        <a class="nav-link" href="./calorie.html">Calorie Tracker</a>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0"><input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav d-none d-lg-flex ml-2 order-3"><li class="nav-item">    <a class="nav-link" href="./login.php">Sign in</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> -->
        <?php 
          // $stat = (session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE);
          // if($stat == TRUE){
          //   echo "BEFORE TRUE \n";
          // } else {
          //   echo "BEFORE FALSE \n";
          // }
        ?>
        <?php
          require('connect-db.php');
          global $db;

          if($_SERVER['REQUEST_METHOD'] == 'POST')
          {
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            $query = "SELECT * FROM user WHERE email=:email";
            $statement = $db->prepare($query);
            $statement->bindValue(':email', $email);
            // $statement->bindValue(':due', $due);
            // $statement->bindValue(':priority', $priority);
            // $statement->bindValue(':id', $id);
            $statement->execute();

            session_start();
            if($statement->rowCount() > 0){
              $t = $statement->fetch();
              $p = $t[3];
              // print_r($t);
              // echo "\n";
              // echo $p;
              // echo "\n";
              // echo $password;
              // echo "\n";
              //echo $t;
              if ($password == $p){
                $firstName = $t[0];
                $lastName = $t[1];
                $username = $t[2];
                $_SESSION['email'] = $email;
                $_SESSION['firstName'] = $firstName;
                $_SESSION['lastName'] = $lastName;
                $_SESSION['username'] = $username;
                // echo "<br>";
                // echo "Successfully signed in as ";
                // echo $_SESSION['username'];
                // echo "!";
                //header("Location: ./index.php");
              } else {
                $_SESSION['failure'] = "Incorrect password";
                // echo "<br>";
                // echo "Incorrect password";
              } 
            } else {
              // echo "<br>";
              // echo "Incorrect email";
              $_SESSION['failure'] = "Incorrect email";
            }
            $statement->closeCursor();
          } 
          include('header.php') 
        ?>
        <?php 
          // $stat = (session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE);
          // if($stat == TRUE){
          //   echo "AFTER TRUE \n";
          // } else {
          //   echo "AFTER FALSE \n";
          // }
        ?>
        <div class="container">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                  <div class="card-body">
                    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" class="form-signin">
                      <h1 class="card-title text-center text-uppercase" style="color: #8e44ad">Sign In</h1>
                      <!-- <div class="form-label-group">
                        <input type="username" id="{{form.username.auto_id}}" class="form-control" placeholder="Username" required autofocus>
                        <label for="{{form.username.auto_id}}">Username</label>
                      </div>
                      <div class="form-label-group">
                        <input type="password" id="{{form.password.auto_id}}" class="form-control" placeholder="Password" required>
                        <label for="{{form.password.auto_id}}">Password</label>
                      </div> -->
        
                      <!-- <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                      </div> -->
                      <!-- {{ form.password }} -->
                      <div class="form-label-group">
                        <!-- {{form.username}} -->
                        <input id="id_email" name="email" type="text" class="form-control email-button" placeholder="email" required autofocus/>
                        <label for="id_email">Email</label>
                      </div>
                      <div class="form-label-group">
                        <!-- {{form.password}} -->
                        <input id="id_password" name="password" type="password" class="form-control password-button" placeholder="Password" required/>
                        <label for="id_password">Password</label>
                      </div>
                      <span class="error" id="input-error"></span>
                      <button class="btn btn-lg btn-block text-uppercase login-button" type="submit" onclick="validateInfo()">Sign in</button>
                      <a href="./signup.php" type="button" class="btn btn-lg btn-block text-uppercase" style="background-color:white; border-color:#8e44ad; color:#8e44ad; border-width: thin thin thin thin">New User? Signup!</a>                      <!-- <hr class="my-4">
                      <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                      <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
                    </form>
                    <?php 
                      if(isset($_SESSION['username'])){
                        echo "<br>";
                        echo "Successfully signed in as ";
                        echo $_SESSION['username'];
                        echo "!";
                      } else if(isset($_SESSION['failure'])){
                        echo "<br>";
                        echo $_SESSION['failure'];
                      } 
                      // require('connect-db.php');
                      // global $db;

                      // if($_SERVER['REQUEST_METHOD'] == 'POST')
                      // {
                      //   $email = htmlspecialchars($_POST['email']);
                      //   $password = htmlspecialchars($_POST['password']);

                      //   $query = "SELECT * FROM user WHERE email=:email";
                      //   $statement = $db->prepare($query);
                      //   $statement->bindValue(':email', $email);
                      //   // $statement->bindValue(':due', $due);
                      //   // $statement->bindValue(':priority', $priority);
                      //   // $statement->bindValue(':id', $id);
                      //   $statement->execute();

                      //   if($statement->rowCount() > 0){
                      //     $t = $statement->fetch();
                      //     $p = $t[3];
                      //     // print_r($t);
                      //     // echo "\n";
                      //     // echo $p;
                      //     // echo "\n";
                      //     // echo $password;
                      //     // echo "\n";
                      //     //echo $t;
                      //     if ($password == $p){
                      //       $firstName = $t[0];
                      //       $lastName = $t[1];
                      //       $username = $t[2];
                      //       $_SESSION['email'] = $email;
                      //       $_SESSION['firstName'] = $firstName;
                      //       $_SESSION['lastName'] = $lastName;
                      //       $_SESSION['username'] = $username;
                      //       echo "<br>";
                      //       echo "Successfully signed in as ";
                      //       echo $_SESSION['username'];
                      //       echo "!";
                      //       //header("Location: ./index.php");
                      //     } else {
                      //       echo "<br>";
                      //       echo "Incorrect password";
                      //     } 
                      //   } else {
                      //     echo "<br>";
                      //     echo "Incorrect email";
                      //   }
                      //   $statement->closeCursor();
                      // }
                      // echo "\n";
                      // echo $_SESSION['email'];
                      // echo "\n";
                      // echo $_SESSION['firstName'];
                      // echo "\n";
                      // echo $_SESSION['lastName'];
                      // echo "\n";
                      // echo $_SESSION['username'];
                      // echo "\n";
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <script>
              var validateInfo = function(){
                  var us = document.getElementById("id_username").value;
                  var pass = document.getElementById("id_password").value;

                  if( us == "" || pass == "" ){
                        document.getElementById("id_username").focus();
                        document.getElementById("id_password").focus();
                        alert("Neither username nor password can be left blank");
                        //document.getElementById("input-error").innerHTML = "Neither username nor password can be left blank";
                  } 
                //   else if( us = "" && pass != ""){
                //         document.getElementById("id_username").focus();
                //         document.getElementById("username-error").innerHTML = "Username cannot be blank";
                //   } else if( pass = "" && us != ""){
                //         document.getElementById("id_password").focus();
                //         document.getElementById("password-error").innerHTML = "Password cannot be blank";
                //   } else {
                //         document.getElementById("id_username").focus();
                //         document.getElementById("id_password").focus();
                //         document.getElementById("username-error").innerHTML = "";
                //         document.getElementById("password-error").innerHTML = "";
                //   }
              }
          </script>
    </body>