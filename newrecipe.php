<!DOCTYPE html>
<html>
<!-- Shivali Dessai and Ahnaf Khan-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="your name">
    <meta name="description" content="include some description about your page">

    <!-- if you choose to use CDN for CSS bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <title>Add New Recipe</title>
</head>

<body>
    <!-- <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8e44ad;">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html">ReciBlog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> My
                                Recipes </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item"
                                    href="#">Categories</a> <a class="dropdown-item" href="#">Favorited</a>
                                <div class="dropdown-divider"></div> <a class="dropdown-item" href="./newrecipe.html">+
                                    Add Recipe</a>
                            </div>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="./calorie.html">Calorie Tracker</a></li>
                        
                    </ul>
                    <form class="form-inline my-2 my-lg-0"><input class="form-control mr-sm-2" type="search"
                            placeholder="Search" aria-label="Search"><button class="btn btn-outline-light my-2 my-sm-0"
                            type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
                        <li class="nav-item"> <a class="nav-link" href="./login.php">Sign in</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> -->
    <?php 
        session_start();
        include('header.php');
    ?>
    <div class="container">
        <br>
        <h1>Add New Recipe...</h1>
        <hr>
        <form action="form-handler.php" method="post" enctype="multipart/form-data" onsubmit="return validateInfo()">
            <label for="recipename">Recipe Name:</label><br>
            <input type="text" id="recipename" name="recipename"><br>
            <span class = "error" id="recipename-note"></span>
            <br>
            <label for="ingredients">Ingredients List:</label><br>
            <input type="text" id="ingredients" name="ingredients"><br><br>
            <label for="cuisine">Cuisine Type:</label><br>
            <input type="text" id="cuisine" name="cuisine" value="i.e. Italian, Indian, etc."><br><br>

            <!-- Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload"> -->
            
            <br><br>
            Recipe Directions : <br />
            <textarea rows="5" cols="50" name="directions">Enter directions here...</textarea>
            <br><br>
            <input type="submit" value="Submit">
        </form>
        <style>
            .error {
               color: red;
               font-style: italic;
            }
          </style>
        
        <script>
            document.getElementById("ingredients");
            function validateInfo() {
                console.log("Hello");
                if (document.getElementById("recipename").value === '') {
                    document.getElementById("recipename").focus();
                    document.getElementById("recipename-note").innerHTML = "Please enter recipe's name";
                    return false;
                }
                else{
                    document.getElementById("recipename-note").innerHTML = "";
                    return true;
                }
            }
        </script>
    </div>
</body>

</html>