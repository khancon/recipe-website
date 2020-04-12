<!DOCTYPE html>
<html>
  <!-- Shivali Dessai and Ahnaf Khan-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="your name">
        <meta name="description" content="include some description about your page">
        
         <!-- if you choose to use CDN for CSS bootstrap -->
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
    <?php include('header.php') ?>
        <div class="container">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                  <div class="card-body">
                   <form method="post" class="form-signin" action="<?php $_SERVER['PHP_SELF'] ?>">
                      <h1 class="card-title text-center text-uppercase" style="color: #8e44ad">Sign Up</h1>
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
                        <input id="id_firstName" name="firstName" type="text" class="form-control firstName-button" placeholder="firstName" required autofocus/>
                        <label for="id_firstName">First Name</label>
                      </div>
                      <div class="form-label-group">
                        <!-- {{form.password}} -->
                        <input id="id_lastName" name="lastName" type="lastName" class="form-control lastName-button" placeholder="lastName" required/>
                        <label for="id_lastName">Last Name</label>
                      </div>
                      <div class="form-label-group">
                        <!-- {{form.password}} -->
                        <input id="id_email" name="email" type="email" class="form-control email-button" placeholder="email" required/>
                        <label for="id_email">Email</label>
                      </div>
                      <div class="form-label-group">
                        <!-- {{form.username}} -->
                        <input id="id_username" name="username" type="text" class="form-control username-button" placeholder="Username" required autofocus/>
                        <label for="id_username">Username</label>
                      </div>
                      <div class="form-label-group">
                        <!-- {{form.password}} -->
                        <input id="id_password" name="password" type="password" class="form-control password-button" placeholder="Password" required/>
                        <label for="id_password">Password</label>
                      </div>
                      <span class="error" id="input-error"></span>
                      <button class="btn btn-lg btn-block text-uppercase login-button" name="btnaction" value="insertNewUser" type="submit" onclick="validateInfo()">Sign Up</button>
                      <!-- <a href="./index.html" type="button" class="btn btn-lg btn-block text-uppercase login-button" value="insertNewUser" type="submit" onclick="validateInfo()">Sign Up</a> -->
                      <a href="./login.php" type="button" class="btn btn-lg btn-block text-uppercase" style="background-color:white; border-color:#8e44ad; color:#8e44ad; border-width: thin thin thin thin">Made an Account? Login!</a>
                      <!-- <hr class="my-4">
                      <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                      <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php 
            // if (isset($_GET['btnaction']))
            // {	
            //   try 
            //   { 	
            //       switch ($_GET['btnaction']) 
            //       {
            //         // case 'create': createTable(); break;
            //         case 'insertNewUser': insertNewUser();  break;
            //         // case 'select': selectData();  break;
            //         // case 'update': updateData();  break;
            //         // case 'delete': deleteData();  break;
            //         // case 'drop':   dropTable();   break;      
            //       }
            //   }
            //   catch (Exception $e)       // handle any type of exception
            //   {
            //       $error_message = $e->getMessage();
            //       echo "<p>Error message: $error_message </p>";
            //   }   
            // }
              require('connect-db.php');

              $firstName = $lastName = $password = $username = $email = "";

              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $firstName = test_input($_POST["firstName"]);
                $lastName = test_input($_POST["lastName"]);
                $email = test_input($_POST["email"]);
                $username = test_input($_POST["username"]);
                $password = test_input($_POST["password"]);
              }

              function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }

              $query = "INSERT INTO user(firstName, lastName, username, password, email) VALUES (:firstName, :lastName, :username, :password, :email)";
              $statement = $db->prepare($query);
              $statement->bindValue(':firstName', $firstName);
              $statement->bindValue(':lastName', $lastName);
              $statement->bindValue(':username', $username);
              $statement->bindValue(':password', $password);
              $statement->bindValue(':email', $email);
              $statement->execute();
              $statement->closeCursor();
              //header("Location: ", "index.html");

            // echo $firstName;
            // echo "<br>";
            // echo $lastName;
            // echo "<br>";
            // echo $email;
            // echo "<br>";
            // echo $username;
            // echo "<br>";
            // echo $password;
            // function insertData()
            // {
            //    require('connect-db.php');
               
            //    $course_id = "newid_from_insertData";
            //    $course_desc = "newdesc_from_insertData";
               
            //    $query = "INSERT INTO courses (courseID, course_desc) VALUES (:course_id, :course_desc)";
            //    $firstName = "Shahiiiira";
            //    $lastName = "Ali";
            //    $username = "Falling";
            //    $password = "LuvOpenLettersss<3";
            //    $email = "monkeyasss@gmail.com";

            //   $firstName = $lastName = $password = $username = $email = "";

            //   if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //     $firstName = test_input($_POST["firstName"]);
            //     $lastName = test_input($_POST["lastName"]);
            //     $email = test_input($_POST["email"]);
            //     $username = test_input($_POST["username"]);
            //     $password = test_input($_POST["password"]);
            //   }

            //   function test_input($data) {
            //     $data = trim($data);
            //     $data = stripslashes($data);
            //     $data = htmlspecialchars($data);
            //     return $data;
            //   }
               


            //    $query = "INSERT INTO user(firstName, lastName, username, password, email) VALUES (:firstName, :lastName, :username, :password, :email)";
            //    $statement = $db->prepare($query);
            //    $statement->bindValue(':firstName', $firstName);
            //    $statement->bindValue(':lastName', $lastName);
            //    $statement->bindValue(':username', $username);
            //    $statement->bindValue(':password', $password);
            //    $statement->bindValue(':email', $email);
            //    $statement->execute();
            //    $statement->closeCursor();
            // }
          ?>
          <script>
              var validateInfo = function(){
                var fN = document.getElementById("id_firstName").value;
                var lN = document.getElementById("id_lastName").value;
                var em = document.getElementById("id_email").value;
                var us = document.getElementById("id_username").value;
                var pass = document.getElementById("id_password").value;

                if( us == "" || pass == "" || fN == "" || lN == "" || em == ""){
                    document.getElementById("id_firstName").focus();
                    document.getElementById("id_lastName").focus();
                    document.getElementById("id_email").focus();
                    document.getElementById("id_username").focus();
                    document.getElementById("id_password").focus();
                    alert("None of the fields can be left blank");
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