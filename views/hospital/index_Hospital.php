<style>
    body {
        font-family: 'Sarabun', sans-serif;
        overflow: hidden;
    }

    #searchHospital {
        position: relative;
        right: 40px;
        width: 500px;
        font-size: large;

    }
</style>

<body>
    <div class="container mt-5">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-1">
                <i class="bi bi-hospital-fill" style='font-size:50px; top: 15px; position:relative;'></i>
            </div>
            <div class="col">
                <input type="text" id="searchHospital" onkeyup="myFunction()" placeholder="ชื่อโรงพยาบาล">

                <input type="hidden" name="controller" value="hospital">
                <input type="hidden" name="action" value="index">
            </div>
            <div class="col">
                <a class="btn btn-primary" href="?controller=hospital&action=createPage" style='left: 60%; position:relative;'>เพิ่มโรงพยาบาล</a><br>
            </div>
        </div>


        <table class="table table-hover" id="myTable">
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
                foreach ($hospitalList as $hospital) {
                    echo "<tr>
                        <td>$hospital->hospital_name</td>
                        <td>$hospital->hospital_location</td>
                        <td>$hospital->hospital_phonenumber</td>
                        <td>จำนวนผู้ป่วยคงเหลือ</td>
                        <td><a type=button href=?controller=bedDetail&action=index&hospital_id=$hospital->hospital_id >📝</a></td>
                        <td><a type=button href=?controller=hospital&action=updatePage&id=$hospital->hospital_id  >📝</a></td>
                        </tr>";
                }

                ?>
            </tbody>
        </table>

    </div>
</body>

</html>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchHospital");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            td2 = tr[i].getElementsByTagName("td")[1];
            let x = 1;
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    x = 0;
                }
            }

            if (x === 1) {
                if (td2) {
                    txtValue = td2.textContent || td2.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }


    }
</script>