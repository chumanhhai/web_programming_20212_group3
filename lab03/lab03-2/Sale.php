<html>
<head><title>Our shop</title></head>
<body>
<font size=4 color="blue">
    <?php
    $today = date('l, F d, Y');
    print "Welcome on $today to our huge blowout sale! </font>";
    $month = date('m');
    $year = date('Y');
    $day_of_year = date('z');
    if ($month == 12 & $year == 2001) {
        $days_left = (365 - $day_of_year + 10);
        print "<br> There are $days_left sales days left";
    } elseif ($month == 01 & $year == 2002) {
        if ($day_of_year <= 10) {
            $days_left = (10 - $day_of_year);
            print "<br> There are $days_left sales days left";
        } else {
            print "<br> Sorry, our sale is over.";
        }
    } else {
        print "<br> Sorry, our sale is over.";
    }
    print "<br> Our Sale Ends January 10,2002";
    ?>
</font>
</body>
</html>