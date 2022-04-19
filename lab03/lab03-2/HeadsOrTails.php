<html lang="en">
<head>
    <title>Coin Flip!</title>
<body>
<h1>Please Pick Heads or Tails!</h1>
<form action="GotFlip.php" method="POST">
    <?php
    print "<INPUT TYPE = \"radio\" NAME = \"pick\" VALUE = 0 > HEADS";
    print "<INPUT TYPE = \"radio\" NAME = \"pick\" VALUE = 1 > TAILS";
    print "<BR>";
    ?>
    <INPUT TYPE="SUBMIT" value="Submit">
    <INPUT TYPE="RESET" value="Restart">
</form>
</body>
</html>