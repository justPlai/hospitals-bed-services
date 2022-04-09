<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Sarabun&display=swap');
body {
    font-family: 'Sarabun', sans-serif;
  overflow: hidden;
}

</style>

<?php 
        require_once("../navbar.php")
?>

<body>
    <div class="container mt-5">

        <form method="get" action="">
            <div class="row">
                <div class="col-1">
                    <i class="bi bi-hospital-fill" style='font-size:50px'></i>
                </div>
                <div class="col mt-4">
                        <input type="text"  name="key" value="ชื่อโรงพยาบาล" class="form-control" style="position:relative;right:40px">
                        <input type="hidden" name="controller" value="#">
                </div>
                <div class="col-3 mt-4">
                        <button type="submit" class="btn" name="action" value="search" style="position:relative;right:60px;">
                            <i class="bi bi-search"></i>
                        </button>
                </div>
            </div>
        </form>

        <table class="table table-hover mt-3">
            <thead class="table-dark text-center">
                <tr> 
                    <th>ชื่อโรงพยาบาลสนาม</th>
                    <th>สถานที่ตั้งโรงพยาบาลสนาม</th>
                    <th>เบอร์โทรติดต่อ</th>
                    <th>เตียงคงเหลือ</th>
                    <th>รายละเอียดโรงพยาบาลสนาม</th>
                </tr><!--รอ service ครบค่อยใส่ foreach-->
            </thead>
            <tbody class="text-center">
                    <tr>
                        <td>โรงพยาบาลมหาวิทยาลัยธรรมศาสตร์</td>
                        <td>กรุงเทพ</td>
                        <td>012345678</td>
                        <td>9</td>
                        <td><a  class="btn btn-primary" href="#">📝</a></td>
                    </tr>
            </tbody>
        </table>

    </div>
</body>
</html>
