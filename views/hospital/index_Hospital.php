<style>
    body {
        font-family: 'Sarabun', sans-serif;
        overflow: hidden;
    }
</style>

<body>
    <div class="container mt-5">

        <form method="get" action="">
            <div class="row">
                <div class="col-1">
                    <i class="bi bi-hospital-fill" style='font-size:50px'></i>
                </div>
                <div class="col mt-4">
                    <input type="text" name="key" value="ชื่อโรงพยาบาล" class="form-control" style="position:relative;right:40px">
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
                    <th>รายละเอียด</th>
                    <th>แก้ไข</th>
                </tr>
                <!--รอ service ครบค่อยใส่ foreach-->
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>โรงพยาบาลมหาวิทยาลัยธรรมศาสตร์</td>
                    <td>กรุงเทพ</td>
                    <td>012345678</td>
                    <td>9</td>
                    <td><a class="btn btn-primary" href="http://localhost/hospitals-bed-services/views/detailbed/index_Detailbed.php">📝</a></td>
                    <td><a class="btn btn-primary" href="http://localhost/hospitals-bed-services/views/hospital/updateHospital.php">📝</a></td>
                </tr>
            </tbody>
        </table>

    </div>
</body>

</html>