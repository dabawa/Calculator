<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>calculator</title>
</head>
<body>
    <form action="calc.php" method="POST">
    First num:<br>
    <input type="text" name="firstnum">
    <br>
    Second num:<br>
    <input type="text" name="secondnum"><br><br>

    <label>Select Operation</label>
        <select name="operation">
            <option value = "add">addition</option>
            <option value = "sub">subtraction</option>
            <option value = "mul">multiplication</option>
            <option value = "div">division</option>
        </select>
    <br><br>
    <input type="submit" value="Calculate">

    </form> 

</body>
</html>
