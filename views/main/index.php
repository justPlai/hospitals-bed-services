<style>
    #search {
        margin-left: 10%;
        margin-top: 20%;
    }

    input[type=text] {
        width: 40%;
        font-size: 250%;
        padding: 10px;
        border-radius: 10px;
    }

    #magnify {
        margin-left: 2%;
        margin-bottom: 1%;
        border-style: solid;
        border-color: #0094FF;
        background-color: BlanchedAlmond;
        border-radius: 20px;
        padding: 10px;
    }
    #search-button{
        font-size: 200%;
        margin-left: 10px;
        border-radius: 20px;
        padding: 10px;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Bed Services</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/feather-icons"></script>


    <!-- <script src="sweetalert2.all.min.js"></script> -->

</head>
<?php
require_once("../navbar.php")
?>

<body>
    <div id="search">
        <form id="search-form">
            <input type="text" value="" placeholder="ชื่อโรงพยาบาลสนาม..." />
            <button type="submit" id="search-button">ค้นหา</button>
            <!-- <img type="submit" id="magnify" src="../img/magnify.png" /> -->
        </form>
    </div>
</body>

</html>