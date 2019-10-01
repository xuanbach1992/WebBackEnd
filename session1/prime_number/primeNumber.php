<?php
function isPrimeNumber($num)
{
    if ($num < 2) {
        return false;
    } elseif ($num == 2) {
        return true;
    } elseif ($num % 2 == 0) {
        return false;
    } else {
        for ($i = 3; $i <= sqrt($num); $i = $i + 2) {
            if ($num % $i == 0) {
                return false;
                break;
            }
        }
    }
    return true;
}
?>

