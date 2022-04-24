<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <font size=16, color="red">Welcome to Tuna Cafe</font>
    <form action="TunaCafeSurveyReceiver.php" method="POST">
        <?php
        $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');
        $bestseller = 2;
        print 'Please indicate all your favorite dishes.<br>';
        for ($i = 0; $i < count($menu); $i++) {
            print "<input type=\"checkbox\" name=\"prefer[]\" value=$i > $menu[$i]";
            if ($i == $bestseller) {
                print '<font color="red"> Our Best Seller!!!! </font>';
            }
            print '<br/>';
        } 
        ?>
        <input type="submit" value="Click To Submit"> <input type="reset" value="Erase and Restart">
    </form>
</body>

</html>