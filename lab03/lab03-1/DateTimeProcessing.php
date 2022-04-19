<html lang="en">
<head><title>Date Time Processor</title></head>
<body>
<h1>Enter your name and select date and time for the appointment</h1>
<form action="DateTimeProcessing.php" method="POST">
    <table>
        <tbody>
        <tr>
            <td>Your Name:</td>
            <td><input type="text" name="name" value="<?= get_value("name"); ?>"></td>
        </tr>
        <tr>
            <td>Date:</td>
            <td>
                <?php select("day", 1, 31, get_value("day")); ?>
                <?php select("month", 1, 12, get_value("month")); ?>
                <?php select("year", 1970, 2500, get_value("year")); ?>
            </td>
        </tr>
        <tr>
            <td>Time:</td>
            <td>
                <?php select("hour", 0, 23, get_value("hour")); ?>
                <?php select("minute", 0, 59, get_value("minute")); ?>
                <?php select("second", 0, 59, get_value("second")); ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </td>
        </tr>
        </tbody>
    </table>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = get_value("name");
        $month = get_value("month");
        $day = get_value("day");
        $year = get_value("year");
        $hour = get_value("hour");
        $minute = get_value("minute");
        $second = get_value("second");
        $iso_time = sprintf("%04d-%02d-%02d %02d:%02d:%02d", $year, $month, $day, $hour, $minute, $second);
        $timestamp = strtotime($iso_time);

        if (checkdate($month, $day, $year)) {
            print sprintf(sprintf("Hi %s! You choose the date %%s<br />", $name), date('D, d M Y H:i:s', $timestamp));
            print sprintf("There is %s days in %s<br />", cal_days_in_month(CAL_GREGORIAN, $month, $year), date('F Y', $timestamp));
            print sprintf("12 hours from this is %s", date('D, d M Y H:i:s', $timestamp + 12 * 60 * 60));
        } else {
            print "Your date is invalid!";
        }
    }
    ?>
</form>
</body>
</html>
<?php
function select($name, $start, $end, $current)
{
    print sprintf("<select name=\"%s\">", $name);
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $current)
            print sprintf("<option value=\"%s\" selected>%s</option>", $i, $i);
        else
            print sprintf("<option value=\"%s\">%s</option>", $i, $i);
    }
    print "</select>";
}

function get_value($name, $default = null)
{
    return (array_key_exists($name, $_POST) ? $_POST[$name] : $default);
}

?>