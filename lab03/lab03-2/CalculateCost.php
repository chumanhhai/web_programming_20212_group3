<html>
<head><title>Carpet Cost Quote</title></head>
<body>
<h1> Your Estimated Carpet Costs:</h1>
<?php
function carpet_cost($width, $length, $grade): float|int
{
    if ($width > 0 && $length > 0) {
        if ($grade == 1) {
            return $width * $length * 4.99;
        } elseif ($grade == 2) {
            return $width * $length * 3.99;
        } else {
            print "Unknown carpet grade = $grade";
            return 0;
        }
    } else {
        return 0;
    }
}

$width = $_POST["width"];
$length = $_POST["length"];
$grade = $_POST["grade"];
$carpet_cost = 0;
$install_cost = 0;
$ret = carpet_cost($width, $length, $grade);
if ($ret) {
    $room_size = $width * $length;
    $total_cost = $ret + ($ret * .5);
    print "<br>Total square feet = $room_size";
    print "<br>Carpet grade = $grade";
    print "<br>Carpet cost = \$$ret";
    print "<br>Total cost estimate (installed) = \$$total_cost";
} else {
    print "Illegal value received";
}
?>
</body>
</html>