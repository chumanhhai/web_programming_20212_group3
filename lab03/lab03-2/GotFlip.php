<html>
<head><title>Coin Flip Results</title></head>
<body>
<?php
srand((double)microtime() * 10000000);
$flip = rand(0, 1);
$pick = $_POST["pick"];

$correct = '<span style="padding: 20px;background-color: forestgreen;color: white"> You got it right!<span>';
$wrong = '<span style="padding: 20px;background-color: darkred;color: white"> You got it wrong!</span>';

if ($flip == 0 && $pick == 0) {
    print sprintf("The flip = %s, which is heads! <br>", $flip);
    print $correct;
} elseif ($flip == 0 && $pick == 1) {
    print sprintf("The flip = %s, which is heads! <br>", $flip);
    print $wrong;
} elseif ($flip == 1 && $pick == 1) {
    print sprintf("The flip = %s, which is tails! <br>", $flip);
    print $correct;
} elseif ($flip == 1 && $pick == 0) {
    print sprintf("The flip = %s, which is tails! <br>", $flip);
    print $wrong;
} else {
    print "<br>Illegal state error!";
}
?>
</body>
</html>
