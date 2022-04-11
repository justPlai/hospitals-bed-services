<style>
    body {
        font-family: 'Sarabun', sans-serif;
        overflow: hidden;
    }

    #searchdoctor {
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
                <i class="fa fa-user-md" style='font-size:50px; top: 15px; position:relative;'></i>
            </div>
            <div class="col mt-4">
                <input type="text" id="searchdoctor" onkeyup="myFunction()" placeholder="ค้นหา...">

                <input type="hidden" name="controller" value="hospital">
                <input type="hidden" name="action" value="index">
            </div>
            <div class="col mt-4">
                <a class="btn btn-primary" href="?controller=doctor&action=createPage" style='left: 85%; position:relative;'>เพิ่มหมอ</a><br>
            </div>
        </div>

        <table class="table table-hover" id="myTable">
            <thead class="table-dark text-center">
                <tr>
                    <th>ชื่อหมอ</th>
                    <th>โรงพยาบาล</th>
                    <th>เบอร์โทรศัพท์</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
                <!--รอ service ครบค่อยใส่ foreach-->
            </thead>
            <tbody class="text-center">
                <?php
                foreach ($doctorList as $doctorList) {
                    echo "<tr>
                            <td>$doctorList->doctorFirstname $doctorList->doctorLastname</td>
                            <td>$doctorList->hospital_name</td>
                            <td>$doctorList->doctorPhonenumber</td>
                            <td><a type=button style=text-decoration:none;font-size:25px href=?controller=doctor&action=updatePage&id=$doctorList->doctorId >📝</a></td>";
                ?>
                    <td>
                        <form method=POST action="?controller=doctor&action=delete">
                            <input name="id" type="hidden" value="<?php echo "$doctorList->doctorId"; ?>">
                            <a type="button" style="text-decoration:none;font-size:25px" class="show_confirm" data-toggle="tooltip" test="<?php echo "$doctorList->doctorFirstname"; ?> <?php echo "$doctorList->doctorLastname"; ?>">🗑️</a>
                        </form>
                    </td>
                <?php
                    echo "</tr>";
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
        input = document.getElementById("searchdoctor");
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        var test = $(this).attr("test");
        event.preventDefault();
        Swal.fire({
            title: 'แน่ใจว่าคุณต้องการลบ?',
            text: "" + test,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ลบ',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                        'ลบเสร็จสิ้น!',
                        'คุณหมอท่านนี้ได้ถูกลบไปแล้ว',
                        'success'
                    )
                    .then(function() {
                        form.submit(); // <--- submit form programmatically
                    });
            }
        })
    });
</script>