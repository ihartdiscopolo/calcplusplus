<?php
$number1 = 0;
$number2 = 0;
$result = 0;

$resultString = "The result will be shown here.";

if($_SERVER['REQUEST_METHOD'] === "POST")
{

    $number1 = $_POST['number_1'];
    $number2 = $_POST['number_2'];
    $Operator = $_POST['Operator'];
//if both numberboxes are empty, show this string.
if($number1 == "" && $number2 == "")
{
    $resultString = "0";
}
//If the first numbrbox is empty, show this string.
elseif ($number1 == "") 
{
    $resultString = "Box number 1 is empty";
}
//IF the operator is root, do this calculation!
elseif($Operator == "root")
{
    if($number2 != "") 
     {
            $resultString = "Numberbox 2 needs to be empty.";
     }
    else
    {
    if($number1 < "0")
        {
            $result = "not work :'(";
        }
    else
        {
            $result = sqrt($number1);
        }
    }
}
elseif($Operator == "eudkrn")
{
    $result = $number1 * 7.46;
}
elseif($Operator == "dkrneu")
{
    $result = $number1 / 7.46;
}
//If the second numberbox is empty, show this string.
elseif($number2 == "")
{
    $resultString = "Boxnumber 2 is empty.";
}
//If there is no operator chosen, show this string.
elseif($Operator == 0)
{
    $resultString = "No operator chosen.";
}
else
{
    //If all the numberboxes and operators are full, then it does else.
    echo $Operator;
    //If the operator is add, then do the calculation and show the result.
    if($Operator == "add")
    {
        $result = $number1 + $number2;
    }
    //If the operator is minus, then do the calculations and show the result.
    elseif($Operator == "minus")
    {
        $result = $number1 - $number2;
    }
    //If the operator is divide, then do the calculation and show the result.
    elseif($Operator == "devide")
    {
        if($number2 = "0")
        {
        $result ="Cant devide by 0!!";
        }
        else
        {
        $result = $number1 / $number2;
        }
    }
    //If the operator is times, then do the calculation and show the result.
    elseif($Operator == "times")
    {
        $result = $number1 * $number2;
    }
    //If the operator is power, then do the calculation and show the result.
    elseif($Operator == "power")
    {
        $result = $number1 ** $number2;
    }
    elseif($Operator == "BMI")
    {
        $result = $number1 / $number2 ** 2;
    }
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <!--Character Set-->
    <meta charset="UTF-8" />
    <!--Page description-->
    <meta name="description" content="Calculator with PHP" />
    <!--CSS Stylesheet-->
    <link href="css\style.css" rel="stylesheet">
    <!--Titel of the page-->
    <title>Calculator</title>
</head>
<body class="wesite-background">
    <form action="calculator.php" method="POST">
        <div class="websitePaths">
            <a href="Index.php">Homepage</a>
            <a href="calculator.php">Calculator</a>
            <a href="Projects.php">Projects</a>
            <a href="Contact.php">Contact</a>
        </div>
    <div class="containerCalculator">
        <div class="top-part">
        <p>
        <?php
        if($_SERVER['REQUEST_METHOD'] === "POST")
            {
                if($resultString == "The result will be shown here.")
                {
                echo $result;
                }
                else
                {
                echo $resultString;
                }
            }
        ?>
        </p>
        </div>

        <div class="bottom-part">

        <ul>
            <li>
                <label>Number 1</label>
                <input type="text" name="number_1">
            </li>
            <li>
                <label>Operator</label>
                <select name="Operator">
                    <option value="add">+</option>
                    <option value="minus">-</option>
                    <option value="devide">/</option>
                    <option value="times">*</option>
                    <option value="power">^</option>
                    <option value="root">√</option?>
                    <option value="eudkrn">eudkrn</option>
                    <option value="dkrneu">dkrneu</option>
                    <option value="BMI">BMI</option?>
                </select>
            </li>
            <li>
                <label>Number 2</label>
                <input type="text" name="number_2">
            </li>
            <li>
                <input type="submit" value="Calulate">
                <div></div>
                <input type="submit" value="Reset">
            </li>
        </ul>
        </div>
    </div>
    </form>
</body>
</html>