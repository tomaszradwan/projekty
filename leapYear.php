
<!DOCTYPE html>

<html>
    <head>
        <title>Is Leap Year</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="POST" action="#">
            Put year:<br/>
            <input type="text" name="year"><br/>
            <input type="submit">
        </form>
    </body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if ($_POST['year']) {
        $year = $_POST['year'];
        isLeapYear($year);
    } else {
        die("No data! <br/>");
    }
}

function isLeapYear($year) {

    if ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0))) {
        echo "Is leap year! </br>";
        return true;
    } else {
        echo "Is <strong>not</strong> a leap year!</br>";
        return false;
    }
}
?>