<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="responseStyle.css">
</head>
<body id="body">
    <div id="header">Response</div>
    <div>
    <?php
        $name = $_POST["name"];
        $class = $_POST["class"];
        $university = $_POST["university"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $hobby = $_POST["hobby"];

        print "<div>Hello $name </div>";
        print "<div>You are studying class $class, university $university </div>";
        print "<div>You are $gender, $age years old </div>";
        print "<span>Your hobbies are: </span>";
        print "<ol>";
        foreach($hobby as $h) {
            print "<li> $h </li>";
        }
        print "</ol";
    ?>
    </div>
</body>
</html>