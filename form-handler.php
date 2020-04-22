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
        // 
        // if ($_SERVER['REQUEST_METHOD'] == 'POST')
        // {
        //     # param => value
        //     $recipename = $_POST['recipename'];
        //     $ingredients = $_POST['ingredients'];
        //     $directions = $_POST['directions'];

        //     echo "Thanks for this recipe<br/>";
        //     echo "We will post it to your account ";
        //     echo $_SESSION['username'];
        //     echo "</br>";

        // }
        session_start();
        include('header.php');
        require('connect-db.php');

        $username = $recipename = $ingredients = $directions = $cuisine = $firstName = $lastName = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_SESSION['username'];
            $firstName = $_SESSION['firstName'];
            $lastName = $_SESSION['lastName'];
            $recipename = test_input($_POST["recipename"]);
            $directions = test_input($_POST["directions"]);
            $ingredients = test_input($_POST["ingredients"]);
            $cuisine = test_input($_POST["cuisine"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        echo $username;
        echo "</br>";
        echo $recipename;
        echo "</br>";
        echo $directions;
        echo "</br>";
        echo $ingredients;
        echo "</br>";

        $query = "INSERT INTO recipe(username, recipename, ingredients, directions, cuisine, firstName, lastName) VALUES (:username, :recipename, :ingredients, :directions, :cuisine, :firstName, :lastName)";
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':recipename', $recipename);
        $statement->bindValue(':directions', $directions);
        $statement->bindValue(':ingredients', $ingredients);
        $statement->bindValue(':cuisine', $cuisine);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->execute();
        $statement->closeCursor();
    ?>
</body>