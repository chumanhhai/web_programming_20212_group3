<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>From Chicago to:</div>
    <table
    border="1px solid black">
        <tr>
            <th>No.</th>
            <th>Destination</th>
            <th>Distance</th>
            <th>Driving time</th>
            <th>Walking time</th>
        </tr>
        <?php
        $cities = array('Dallas' => 803, 'Toronto' => 435, 'Boston' => 848, 'Nashville' => 406, 'Las Vegas' => 1526, 'San Francisco' => 1835, 'Washington, DC' => 595, 'Miami' => 1189, 'Pittsburgh' => 409);
        $destinations = $_GET["destinations"];
        foreach($destinations as $i=>$e) {
            print("<tr>");
            $distance = $cities[$e];
            $drivingTime = round($distance/60, 2);
            $walkingTime = round($distance/5, 2);
            print("<td>$i</td>");
            print("<td>$e</td>");
            print("<td>$distance</td>");
            print("<td>$drivingTime</td>");
            print("<td>$walkingTime</td>");
            print("</tr>");
        }
        ?>
    </table>
</body>

</html>