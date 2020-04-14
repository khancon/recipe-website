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
        <style>
            
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
        <?php include('header.php') ?>
        <div class="container-fluid">
            <!-- Jumbo Tron Top Card -->
            <br>
            
            <div class="row">
                <aside class="col-md-2 blog-sidebar">
                    <!-- <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="font-italic">About</h4>
                        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    </div> -->
              
                    <div class="p-4">
                        <h4 class="font-italic">Cuisine</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">East Asian</a></li>
                            <li><a href="#">South Asian</a></li>
                            <li><a href="#">East African</a></li>
                            <li><a href="#">West African</a></li>
                            <li><a href="#">American</a></li>
                            <li><a href="#">Mediterranean</a></li>
                            <li><a href="#">European</a></li>
                            <li><a href="#">Latin American</a></li>
                            <li><a href="#">Arab/North African</a></li>
                            <li><a href="#"">...more</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="font-italic">Diet Type</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">Vegetarian</a></li>
                            <li><a href="#">Vegan</a></li>
                            <li><a href="#">Paleo</a></li>
                            <li><a href="#">Protein/Meat</a></li>
                            <li><a href="#">Keto</a></li>
                            <li><a href="#">Bulking</a></li>
                            <li><a href="#"">...more</a></li>
                        </ol>
                    </div>
              
                    <div class="p-4">
                        <h4 class="font-italic">Share</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </aside>
                <div class="col-md-8 blog-main">
                    <!-- <div class="jumbotron p-4 p-md-5 text-white rounded" style="background-color: #b154d8;">
                        <div class="col-md-6 px-0">
                          <h1 class="display-4 font-italic">Veganismssss</h1>
                          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
                          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
                        </div>
                    </div> -->
                    
                    <div id="blogPosts" class="row mb-2">
                        <!-- <div class="col-md-6">
                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2" style="color:#b154d8">South Asian</strong>
                                    <h3 class="mb-0">Featured post</h3>
                                    <div class="mb-1 text-muted">Shivali Dessai</div>
                                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="stretched-link">Continue reading</a>
                                </div>
                            </div>
                        </div> -->
                        <?php 
                            require('connect-db.php');

                            // To prepare a SQL statement, use the prepare() method of the PDO object
                            //    syntax:   prepare(sql_statement)
                         
                            // To execute a SQL statement, use the bindValue() method of the PDO statement object
                            // to bind the specified value to the specified param in the prepared statement 
                            //    syntax:   bindValue(param, value)
                            // then use the execute() method to execute the prepared statement
                         
                            // Excute a SQL statement that doesn't have params
                            $query = "SELECT * FROM recipe";
                            $statement = $db->prepare($query); 
                            $statement->execute();
                         
                            // fetchAll() returns an array for all of the rows in the result set
                            $results = $statement->fetchAll();
                         
                            // closes the cursor and frees the connection to the server so other SQL statements may be issued 
                            $statement->closecursor();
                         
                            foreach ($results as $result)
                            {	
                                //echo $result['firstName'] . ": " . substr($result['directions'], 0, 75) . "...<br/>";
                                echo "<div class=\"col-md-6\">";
                                    echo "<div class=\"row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative\">";
                                        echo "<div class=\"col p-4 d-flex flex-column position-static\">";
                                            echo "<strong class=\"d-inline-block mb-2\" style=\"color:#b154d8\">" . $result['cuisine'] . "</strong>";
                                            echo "<h3 class=\"mb-0\">" . $result['recipename'] . "</h3>";
                                            echo "<div class=\"mb-1 text-muted\">" . $result['firstName'] . " " . $result['lastName'] . "</div>";
                                            echo "<p class=\"card-text mb-auto\">" . substr($result['directions'], 0, 50) . "...</p>";
                                            echo "<a href=\"blog-post-view.php?recipename=" .$result['recipename']. "&firstName=" .$result['firstName']. "&lastName=" .$result['lastName']. "&directions=" .$result['directions']. "&ingredients=" .$result['ingredients']. "&cuisine=" .$result['cuisine']. "\" class=\"stretched-link\">Continue reading</a>";
                                        echo "</div>";
                                    echo "</div>";   
                                echo "</div>"; 
                            }
                         
                         
                            // Execute a SQL statement that has a param, use a colon followed by a param name
                            // $someid = "id1";
                            // $query = "SELECT * FROM courses WHERE test_id = :someid";
                            // $statement = $db->prepare($query);
                            // $statement->bindValue(':someid', $someid);
                            // $statement->execute();
                         
                            // // fetchAll() returns an array for all of the rows in the result set
                            // $results = $statement->fetchAll();
                         
                            // // closes the cursor and frees the connection to the server so other SQL statements may be issued
                            // $statement->closecursor();
                         
                            // foreach ($results as $result)
                            // {
                            //    echo "select a row where courseID=id1 --->" . $result['courseID'] . ":" . $result['course_desc'] . "<br/>";
                            // }
                        ?>
                        <!-- <div class="col-md-6">
                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2" style="color:#b154d8">American</strong>
                                    <h3 class="mb-0">Post title</h3>
                                    <div class="mb-1 text-muted">Nov 11</div>
                                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="stretched-link">Continue reading</a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c"></rect>
                                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2" style="color:#b154d8">East Asian</strong>
                                    <h3 class="mb-0">Post title</h3>
                                    <div class="mb-1 text-muted">Nov 11</div>
                                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="stretched-link">Continue reading</a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2" style="color:#b154d8">European</strong>
                                    <h3 class="mb-0">Post title</h3>
                                    <div class="mb-1 text-muted">Nov 11</div>
                                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="stretched-link">Continue reading</a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2" style="color:#b154d8">East African</strong>
                                    <h3 class="mb-0">Post title</h3>
                                    <div class="mb-1 text-muted">Nov 11</div>
                                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="stretched-link">Continue reading</a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2" style="color:#b154d8">East Asian</strong>
                                    <h3 class="mb-0">Post title</h3>
                                    <div class="mb-1 text-muted">Nov 11</div>
                                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="stretched-link">Continue reading</a>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- <a id="new_posts" class="btn btn-outline-primary" href="#">New Posts</a> -->
                    <!-- <button id="new_posts" class="btn btn-outline-primary" onclick="">New Posts</button> -->
                    <!-- <input type="button" class="btn btn-outline-primary" id="newPosts" value="Load More" onclick="addRows()"/> -->
                </div>
            </div>
            <br>
            <footer class="blog-footer">
                <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                <p>
                  <a href="#">Back to top</a>
                </p>
            </footer>
            <br>
        </div>
        <script>
            // document.getElementById("new_posts").onClick = function(){
            //     document.getElementById("new_posts").innerHTML = "Old Posts";
            // };
            // addRows = () =>
            // {
            //     var categories = [
            //         'East Asian', 'South Asian', 'East African', 'West African', 'African',
            //         'American', 'European', 'Latin American', 'Mediterranean', 'Arab/North African', 'Other'
            //     ];
            //     var blogPost = "";
            //     for(var i = 0; i < 6; i++){
            //         //this will be updated once back end functionality is 
            //         //set up properly so we can retrieve data from there
            //         //to continuously load in more blog posts but for now 
            //         //we just randomly spawn concept posts based on category
            //         //of food
            //         var ind1 = Math.floor(Math.random() * Math.floor(categories.length));
            //         blogPost += "<div class='col-md-6'><div class='row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>    <div class='col p-4 d-flex flex-column position-static'>        <strong class='d-inline-block mb-2' style='color:#b154d8'>"+ categories[ind1]+"</strong>        <h3 class='mb-0'>Post title</h3>        <div class='mb-1 text-muted'>Nov 11</div>        <p class='mb-auto'>This is a wider card with supporting text below as a natural lead-in to additional content.</p>        <a href='#' class='stretched-link'>Continue reading</a>    </div>    <div class='col-auto d-none d-lg-block'>        <svg class='bd-placeholder-img' width='200' height='250' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid slice' focusable='false' role='img' aria-label='Placeholder: Thumbnail'><title>Placeholder</title><rect width='100%' height='100%' fill='#55595c'></rect><text x='50%' y='50%' fill='#eceeef' dy='.3em'>Thumbnail</text></svg>    </div></div></div>";
            //     }
            //     //var ind2 = Math.floor(Math.random() * Math.floor(categories.length));
            //     document.getElementById("blogPosts").innerHTML += blogPost;
            // }
        </script>
    </body>
</html>