<script>
    <!--    --><?php
    //    $arrNumber = [];
    //    for ($i = 0; $i < 10; $i++) {
    //        $inputNum = rand(1, 10);
    //        array_push($arrNumber, $inputNum);
    //    }
    ////    print_r($arrNumber);
    //    ?>
    //    document.write(<?php //print_r($arrNumber)?>//);
</script>
<?php
$arraySum = [];
$arrayFirst = [];
$arraySecond = [];
for ($i = 0; $i < 5; $i++) {
    array_push($arrayFirst, rand(1, 10));
}
for ($j = 0; $j < 5; $j++) {
    array_push($arraySecond, rand(1, 10));
}
print_r($arrayFirst);
echo "<br>";
print_r($arraySecond);
echo "<br>";
$arraySum=array_merge($arrayFirst,$arraySecond);
print_r($arraySum);
?>