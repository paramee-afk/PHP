<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welcome <?php echo $_GET["name"]; ?><br>
    Your email address is: <?php echo $_GET["email"]; ?>
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
[21:45]วันพฤหัสบดีที่ 4 ธันวาคม 2568 21:45
--------------
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
[21:45]วันพฤหัสบดีที่ 4 ธันวาคม 2568 21:45
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e8f0fe;
            padding: 40px;
        }
        .box {
            max-width: 400px;
            background: white;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        .title {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
        }
        .info {
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="box">
    <div class="title">Form Result</div>

    <div class="info">
        Welcome <strong><?php echo htmlspecialchars($_POST["name"]); ?></strong><br><br>
        Your email address is: <strong><?php echo htmlspecialchars($_POST["email"]); ?></strong>
    </div>
</div>

</body>
</html>