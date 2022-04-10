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
                    <i class="fa fa-bed" style='font-size:60px;position:relative;top:10px'></i>
                </div>
                <div class="col mt-4">
                    <input type="text" name="key" value="ชื่อโรงพยาบาล" class="form-control" style="position:relative;right:30px">
                    <input type="hidden" name="controller" value="#">
                </div>
                <div class="col-3 mt-4">
                    <button type="submit" class="btn" name="action" value="search" style="position:relative;right:50px;">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <table class="table table-hover mt-3">
            <thead class="table-dark text-center">
                <tr>
                    <th>หมายเลขเตียง</th>
                    <th>ชื่อ-สกุล ผู้ป่วย</th>
                    <th>วันที่เข้ารับการรักษา</th>
                    <th>ผลการตรวจ</th>
                    <th>ชื่อ-สกุล หมอ</th>
                    <th>แก้ไข</th>
                </tr>
                <!--รอ service ครบค่อยใส่ foreach-->
            </thead>
            <tbody class="text-center">
                <?php 
                    foreach($bedDetailList as $bedDetail){
                        echo "<tr>
                            <td>$bedDetail->bedDetail_id</td>
                            <td>$bedDetail->firstName $bedDetail->lastName</td>
                            <td>data</td>
                            <td>result</td>
                            <td>$bedDetail->doctorFirstname $bedDetail->doctorLastname</td>
                            <td><a class=btn btn-primary href=>✍️</a></td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>