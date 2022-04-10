<style>
    body {
        font-family: 'Sarabun', sans-serif;
        overflow: hidden;
    }

    #searchDetail {
        position: relative;
        right: 40px;
        font-size: large;

    }
</style>
<body>
    <div class="container mt-5">

        <div class="container mt-5">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-1">
                <i class="fa fa-bed" style='font-size:50px; top: 15px; position:relative;'></i>
            </div>
            <div class="col mt-4">
                <input type="text" id="searchDetail" onkeyup="myFunction()" value="" placeholder="ค้นหา">

                <input type="hidden" name="controller" value="hospital">
                <input type="hidden" name="action" value="index">
            </div>
        </div>

        <table class="table table-hover" id="myTable">
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
                            <td>$bedDetail->date</td>
                            <td>$bedDetail->result</td>
                            <td>$bedDetail->doctorFirstname $bedDetail->doctorLastname</td>
                            <td><a href=?controller=bedDetail&action=updatePage&id=$bedDetail->bedDetail_id >✍️</a></td>
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
        input = document.getElementById("searchDetail");
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