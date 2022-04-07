<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Bed Services</title>
</head>
<body>
    <div>
        <center>
        <form method="get" action="">
            <input type="text" name="key" value="ชื่อโรงพยาบาล">
            <input type="hidden" name="controller" value="#">
            <button type="submit" name="action" value="search">
                search</button>
        </form>
        <table border = 1>
            <tr> 
            <th>หมายเลขเตียง</th>
            <th>ชื่อ-สกุล ผู้ป่วย</th>
            <th>วันที่เข้ารับการรักษา</th>
            <th>ผลการตรวจ</th>
            <th>แก้ไข</th>
            </tr><!--รอ service ครบค่อยใส่ foreach-->
                <tr>
                    <td>100000</td>
                    <td>กลมชนมก ศรีหาย</td>
                    <td>9 ต.ค. 2543</td>
                    <td>พบว่าสมองหายไป</td>
                    <td><button href="#">✍️</button></td>
                </tr>
        </center>
    </div>
</body>
</html>