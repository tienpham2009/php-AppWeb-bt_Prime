<form method="post">
    Nhap so : <input type="number" name="number">
    <br/>
    <input type="submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $countNum = $_POST["number"];
    $number = 2;
    function checkPrime($number)
    {
        $flag = false;
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $flag = true;
            }
        }
        if ($flag == false) {
            echo $number . " ";
        }
    }

    while ($number < $countNum) {
        checkPrime($number);
        $number++;
    }
}