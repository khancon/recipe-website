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

    <title>Calorie Tracker</title>
</head>

<body>
    <?php 
        session_start();
        include('header.php');
    ?>
    <div class="container">


        <h1>Count Your Calories</h1>
        <hr>
        <form method="post" enctype="multipart/form-data" onsubmit="return validateInfo()">
            <label for="meal_1">Meal 1:</label><br>
            <input type="number" id="meal_1" name="meal_1"><br>
            <!-- <span class = "error" id="meal_1-note"></span> -->
            <br>
            <label for="meal_2">Meal 2:</label><br>
            <input type="number" id="meal_2" name="meal_2"><br>
            <!-- <span class = "error" id="meal_2-note"></span> -->
            <br>
            <label for="meal_3">Meal 3:</label><br>
            <input type="number" id="meal_3" name="meal_3"><br>
            <span class = "error" id="meal_1-note"></span>
            <br>
            <input type="submit" value="Submit">
            <br>
            <span class = "result" id="cal_sum"></span>
        </form>
        <style>
            .error {
               color: red;
               font-style: italic;
            }
          </style>
        
        <script>
            document.getElementById("meal_2");
            function validateInfo() {
                console.log("Hello");
                if (document.getElementById("meal_1").value == '' | document.getElementById("meal_2").value == '' | document.getElementById("meal_3").value == '') {
                    document.getElementById("meal_1").focus();
                    document.getElementById("cal_sum").innerHTML = "";
                    //document.getElementById("meal_1") = "";
                    document.getElementById("meal_1-note").innerHTML = "Please enter whole number calories for all three meals";
                    return false;
                }
                else{
                    document.getElementById("meal_1-note").innerHTML = "";
                    var val1 = parseInt(document.getElementById("meal_1").value);
                    var val2 = parseInt(document.getElementById("meal_2").value);
                    var val3 = parseInt(document.getElementById("meal_3").value);
                    var sum = val1 + val2 + val3;
                    document.getElementById("cal_sum").innerHTML = "" + sum;
                    return false;
                }
                return true;
            }
        </script>
    </div>
    <?php 
        echo "\n";
        echo $_SESSION['email'];
        echo "\n";
        echo $_SESSION['firstName'];
        echo "\n";
        echo $_SESSION['lastName'];
        echo "\n";
    ?>
</body>

</html>