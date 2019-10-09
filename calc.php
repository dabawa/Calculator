
    <?php
        include 'cal_include.php';
        $num1 = $_POST['firstnum'];
        $num2 = $_POST['secondnum'];
        $cal = $_POST['operation'];
        $calculator = new Calc($num1, $num2, $operation);
        echo $calculator->calcMethod();
    ?>
