<?php
    $name = "นางสาว กชกร เมืองโพธิ์";
    $nickname = "เอิร์น";
    $age = 19;
    $birthdate = "30/08/2547"; // Note: Check the year if it was meant to be 2547 (Buddhist year) or 2004 (Gregorian year).
    $university = "มหาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ";
    $major = "IT";
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติส่วนตัว</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
    <p class="big">ประวัติส่วนตัว</p>
    <p align="center">
        <img src="download.jpg" alt="Me" width="400" height="400">
    </p>
    
    <p class="normal">
        ชื่อ: <?php echo $name; ?><br><br>
        ชื่อเล่น: <?php echo $nickname; ?> อายุ: <?php echo $age; ?><br><br>
        วัน/เดือน/ปีเกิด: <?php echo $birthdate; ?><br><br>
        กำลังศึกษาอยู่ที่: <?php echo $university; ?><br><br>
        สาขา: <?php echo $major; ?><br>
    </p>
</body>
</html>
