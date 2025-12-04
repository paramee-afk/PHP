<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Handling POST</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            padding: 40px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #007bff;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Get method</h2>

    <form action="welcome.php" method="post">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>E-mail:</label>
        <input type="text" name="email" required>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
:thumbsup:
คลิกเพื่อตอบสนอง
:weary:
คลิกเพื่อตอบสนอง
:eyes:
คลิกเพื่อตอบสนอง
เพิ่มรีแอคชั่น
ตอบกลับ
ส่งต่อ
เพิ่มเติม
[21:43]วันพฤหัสบดีที่ 4 ธันวาคม 2568 21:43
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php Array (เรียนวันที่ 4/12/2568)</title>
</head>
<body>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
    <h1> ทดสอบ Array แบบ Associative Arrays</h1>
    <?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); echo "Peter is " . $age['Peter'] . " years old.";
    echo "Peter is " . $age['Peter'] . " years old," . "<br>";
    echo "Ben is " . $age['Ben'] . " years old," . "<br>";
    echo "Joe is " . $age['Joe'] . " years old," . "<br>";
    echo "Mon is " . $age['Mon'] . " years old," . "<br>";
?>
<h1> การใช้ For กับ Index Arrays </h1>
<?php
$fruits = array("แอบเปิ้ล","มะละกอ", "กล้วย","ส้ม","องุ่น","มังคุด","ทุเรียน");
$arrlen = count($fruits);

for($x = 0; $x < $arrlen; $x++){
    echo $fruits[$x]; 
    echo "<br>\n";
}
?>
<h1> การใช้ Foreach กับ Index Arrays </h1>
<?php
$fruits = array("แอบเปิ้ล","มะละกอ", "กล้วย","ส้ม","องุ่น","มังคุด","ทุเรียน");
foreach($fruits as $value){
    echo $value;
    echo "<br>\n";
}
?>
<h1> การใช้ Foreach กับ Associative Arrays </h1>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43", "Bas"=>"19");

foreach($age as $x => $x_value){
    echo $x . " มีอายุ " . $x_value . " ปี";
    echo "<br>\n";
}
?>
<h1> การใช้ Array 2 มิติ (Two Dimensional Arrays)</h1>
<?php
$cars = array(
    array("Volvo",22,18),
    array("BMW",15,13,30,75),
    array("Saab",5,2),
    array("Land Rover",17,15,180)
);

$rows = count($cars);
for($row = 0; $row < $rows; $row++){
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    $cols = count($cars[$row]);
    for($col = 0; $col < $cols; $col++){
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>
