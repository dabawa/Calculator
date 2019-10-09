<?php
    include 'Calculator.php';
    
    $addresult = $subresult = $mulresult = $divresult = '';
    
    if(isset($_POST['submit'])){

        $calculator = new Calculator();
        switch ( $_POST['operation']) {
            case 'add':
                $addresult = $calculator->addition($_POST['firstnum'], $_POST['secondnum']);
                break;

            case 'sub':
                $subresult = $calculator->subtraction($_POST['firstnum'], $_POST['secondnum']);
                break;

            case 'mul':
                $mulresult = $calculator->multiplication($_POST['firstnum'], $_POST['secondnum']);
                break;    
            
            case 'div':
                $divresult = $calculator->division($_POST['firstnum'], $_POST['secondnum']);
                break;        
            default:
                echo "No operation selected";

        }
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>calculator</title>
</head>
<body>
    <form action="index.php" method="POST">
    First num:<br>
    <input type="text" name="firstnum">
    <br>
    Second num:<br>
    <input type="text" name="secondnum"><br><br>

    <label>Select Operation</label>
        <select name="operation">
            <option value = "add" name="add">addition</option>
            <option value = "sub" name="sub">subtraction</option>
            <option value = "mul" name="mul">multiplication</option>
            <option value = "div" name="div">division</option>
        </select>
    <br><br>
    <input type="submit" name="submit" value="Calculate">

    <h2> Answer: 
        <?php echo $addresult; ?>
        <?php echo $subresult; ?>
        <?php echo $mulresult; ?>
        <?php echo $divresult; ?>
    </h2>
    </form> 

</body>
</html>
