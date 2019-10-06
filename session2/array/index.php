<script>
    <?php
    $arrNumber = [];
    for ($i = 0; $i < 10; $i++) {
        $inputNum = rand(1, 10);
        array_push($arrNumber, $inputNum);
    }
//    print_r($arrNumber);
    ?>
    document.write(<?php print_r($arrNumber)?>);
</script>