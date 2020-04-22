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
    <?php 
        session_start();
        include('header.php');
    ?>
    <div class="container">
        <br>
        <?php 
            require('connect-db.php');
            echo "<h4><strong class=\"d-inline-block mb-2\" style=\"color:#b154d8\">" . $_GET['cuisine'] . "</strong></h4>";
            echo "<h1>".$_GET['recipename']."</h1><hr>";
            echo "<div class=\"mb-1 text-muted\">By " . $_GET['firstName'] . " " . $_GET['lastName'] . "</div>";
            echo "<br>";
            echo "<h5>INGREDIENTS</h5>";
            echo $_GET['ingredients'];
            echo "<br><br>";
            echo "<h5>DIRECTIONS</h5>";
            echo $_GET['directions'];
        ?>
    </div>
</body>