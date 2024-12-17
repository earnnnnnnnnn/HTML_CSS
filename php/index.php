<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $StudentID = 6606021631017;
    $firstNname = "กชกร ";
    $LastName = "เมืองโพธิ์";
    $nickname = "เอิร์น";
    $age = 19;
    $Date_birth = "30/08/2547";
    $branch = "IT";
    $University = "มหาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ";

    echo "ชื่อ = "; echo $StudentID ." ". $LastName; echo "<br />";
    echo "ชื่อเล่น = ";echo $nickname; echo "<br />";
    echo "อายุ = ";echo $age; echo "<br />";
    echo "วัน/เดือน/ปีเกิด = ";echo $Date_birth; echo "<br />";
    echo "กำลังศึกษาอยู่ที่ = ";echo $University; echo "<br />";
    echo "สาขา = ";echo $branch; echo "<br />";
    
?>
</body>
</html>