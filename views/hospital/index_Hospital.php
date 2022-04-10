<style>
    body {
        font-family: 'Sarabun', sans-serif;
        overflow: hidden;
    }
    #searchHospital{
        position:relative;
        right:40px; 
        font-size:large;

    }
</style>

<body>
    <div class="container mt-5">

        <form method="get" action="">
            <div class="row">
                <div class="col-1">
                    <i class="bi bi-hospital-fill" style='font-size:50px; top: 15px; position:relative;'></i>
                </div>
                <div class="col mt-4">
                    <input id="searchHospital" type="text" name="key" value="" placeholder="ชื่อโรงพยาบาล" class="form-control" >
                    <input type="hidden" name="controller" value="hospital">
                    <input type="hidden" name="action" value="index">
                </div>
                <div class="col-3 mt-4">
                    <button type="submit" class="btn" name="action" value="search" style="position:relative; right:185%; top:10px">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <table class="table table-hover">
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
                <?php 
                    foreach($hospitalList as $hospital){
                        echo "<tr>
                        <td>$hospital->hospital_name</td>
                        <td>$hospital->hospital_location</td>
                        <td>$hospital->hospital_phonenumber</td>
                        <td>จำนวนผู้ป่วยคงเหลือ</td>
                        <td><a type=button href=?controller=bedDetail&action=index&id=$hospital->hospital_id >📝</a></td>
                        <td><a type=button href=?controller=hospital&action=updateForm&id=$hospital->hospital_id  >📝</a></td>
                        </tr>";
                    }
                
                
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>