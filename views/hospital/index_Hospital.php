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
            <th>ชื่อโรงพยาบาลสนาม</th>
            <th>สถานที่ตั้งโรงพยาบาลสนาม</th>
            <th>เบอร์โทรติดต่อ</th>
            <th>เตียงคงเหลือ</th>
            <th>รายละเอียดโรงพยาบาลสนาม</th>
            </tr><!--รอ service ครบค่อยใส่ foreach-->
                <tr>
                    <td>โรงพยาบาลมหาวิทยาลัยธรรมศาสตร์</td>
                    <td>กรุงเทพ</td>
                    <td>012345678</td>
                    <td>9</td>
                    <td><button href="#">📝</button></td>
                </tr>
        </center>
    </div>
</body>
</html>