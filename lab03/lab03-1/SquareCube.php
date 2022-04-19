<html lang="en">
<head>
    <title>Square and Cube</title>
</head>
<body>
<h1 style="font-size: large; color: blue; ">Generate Square and Cube Values </h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
    <table>
        <tr>
            <td>Select Start Number:</td>
            <td><label>
                    <select name="start">
                        <?php
                        for ($i = 0; $i <= 10; $i++) {
                            print ("<option>$i</option>");
                        }
                        ?>
                    </select>
                </label>
            </td>
        </tr>
        <tr>
            <td>Select End Number:</td>
            <td><label>
                    <select name="end">
                        <?php
                        for ($i = 0; $i <= 20; $i++) {
                            print ("<option>$i</option>");
                        }
                        ?>
                    </select>
                </label>
            </td>
        </tr>
        <tr>
            <td><input type="SUBMIT" value="Submit"></td>
            <td><input type="RESET" value="Reset"></td>
        </tr>
    </table>
    <table>
        <tr>
            <th>Number</th>
            <th>Square</th>
            <th>Cube</th>
        </tr>
        <?php
        if (array_key_exists("start", $_GET)) {
            $start = $_GET["start"];
            $end = $_GET["end"];
            $i = $start;
            while ($i <= $end) {
                $sqr = $i * $i;
                $cubed = $i * $i * $i;
                print "<TR><TD>$i</TD><TD>$sqr</TD><TD>$cubed</TD></TR>";
                $i = $i + 1;
            }
        }
        ?>
    </table>
</form>
</body>
</html>