<?php ;
$array1 = array("1" => "one",
    "2" => "two",
    "3" => "three",
    "4" => "four",
    "5" => "five",
    "6" => "six",
    "7" => "seven",
    "8" => "eight",
    "9" => "nine",
    "10" => "ten",
    "11" => "elevent",
    "12" => "twelve",
    "13" => "thirteen",
    "14" => "fourteen",
    "15" => "fifteen",
    "16" => "sixteen",
    "17" => "seventeen",
    "18" => "eighteen",
    "19" => "nineteen",
);
$array2 = array("2" => "twenty",
    "3" => "thirty",
    "4" => "fourty",
    "5" => "fifty",
    "6" => "sixty",
    "7" => "seventy",
    "8" => "eighty",
    "9" => "ninety",
);
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET["number"])) {
        $num = $_GET["number"];
        if ($num < 0) {
            echo "nhap lai";
        } elseif (0 < $num && $num <= 19) {
            foreach ($array1 as $key => $value) {
                if ($key == $num) {
                    echo $value;
                }
            }
        } elseif (20 <= $num && $num <= 999) {
            $numhundreds = floor($num / 100);
            $numtenth = floor(($num - $numhundreds * 100) / 10);
            $numUnit = $num - ($numhundreds * 100) - ($numtenth * 10);

            foreach ($array1 as $keyUnit => $unit) {
                if ($numhundreds == $keyUnit) {
                    echo $unit . " hunderd ";
                }
            }
            if ($numtenth != 0 xor $numUnit != 0) {
                echo "  and ";
            }
            if ($numtenth == 1) {
                foreach ($array1 as $key => $value) {
                    if ($key == $numtenth . $numUnit) {
                        echo $value;
                    }
                }
            } else {
                foreach ($array2 as $keyTenth => $tenth) {
                    if ($numtenth == $keyTenth) {
                        echo $tenth . " ";
                    }
                }
                foreach ($array1 as $keyUnit => $unit) {
                    if ($numUnit == $keyUnit) {
                        echo $unit;
                    }
                }
            }
        }
    }
}
?>