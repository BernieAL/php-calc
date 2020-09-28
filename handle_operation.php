<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Calculation Result</title>
</head>
<body>
<?php # handle_form.php




//retrieve the data by using $_REQUEST or $_POST and name of the textboxes
$num1 = (int)$_POST['number1'];
$num2 = (int)$_POST['number2'];
$operation = $_POST['operation'];
$result = 0;

//validate not NULL
if(empty($num1) OR (empty($num2))){
     echo "<p>Cannot have null values for num1 or num2<p>";
} else {
    $result = arithmaticOperation($num1,$num2,$operation,$result);
}

function arithmaticOperation($num1In,$num2In,$operationIn,$result){

    
    if($operationIn == 'add'){
        $result = ($num1In + $num2In);
    } else if ($operationIn =='subtract'){
        $result = ($num1In - $num2In);
    } else if($operationIn == 'multiply'){
        $result = ($num1In * $num2In);
    } else if($operationIn == 'divide'){
        if($num2In === 0){
            echo "<p> No division by zero <p>";
        } else {
            $result = ($num1In / $num2In);
        }
    }
    return $result;
}
echo "The result is " . $result


?>
</body>
</html>