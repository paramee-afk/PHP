<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การใช้ User-define function</title>
</head>
<body>
    <h1>การใช้ User-define function ฟังก์ชันสร้างขึ้นเอง</h1>
    <?php
    echo"ผลบวกของ 10 กับ 20 คือ". sum(10,20) . "<br>";
    echo"ผลบวกของ 15 กับ 25 คือ". sum(15,25) . "<br>";
    $a=30; $b = 45;
    echo"ผลบวกของ $a กับ $b คือ". sum($a,$b) . "<br>";
    echo"<hr>";
    $num = 50;
    echo"ค่าของ num ก่อนเรียกใช้ฟังก์ชั่น add_five() คือ $num<br>";
    add_five($num);
    echo"ค่าของ num หลังเรียกใช้ฟังก์ชั่น add_five() คือ $num<br>";


?>
</body>
</html>

<?php
function sum($num1, $num2){
    $result = $num1 + $num2;
    return $result;
}
function add_five($num){
    $value = $num + 5;
    echo"ค่าภายในฟังก์ชั่น add_five() คือ $value<br>";
}
?>