<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <font color="red" style="font-size: 24px;">Welcome to distance calculation page</font>
    <div>The page will calculate distance from Chicago</div>
    <form action="CheckDistance.php" method="GET">
        <select name="destinations[]" size="5" multiple>
            <?php
            $destinations = array("Dallas", "Toronto", "Boston", "Nashville", "Las Vegas", "San Francisco", "Washington, DC", "Miami", "Pittsburgh");
            foreach ($destinations as $e) {
                print("<option value=$e>$e</option>");
            }
            ?>
        </select>
        <br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

</body>

</html>