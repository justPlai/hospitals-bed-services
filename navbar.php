<style>
    
    .navbar {
        background-color: #0094FF;
        height: 100px;
    }
    
    .navbar-mid{
        display: inline-flex;
    }

    .navbar-brand {
        color: white;
        font-size: 150%;
        padding: 20px;
        margin-top: 3px;
        font-family: sans-serif;
    }

    #line {
        text-align: left;
        background-color: #000000;
        height: 80px;
        width: 2px;
        
    }

    .navbar-brand-right{
        text-align: center;
        color: white;
        font-size: 150%;
        padding: 10px;
        float: right;
        text-decoration: none;
    }

    #admin-only{
        font-size: 80%;
        font-family: sans-serif;
    }

    .main-button{
        color: white;
        font-size: 150%;
        padding: 10px;
        text-decoration: none;
        font-family: sans-serif;
    }

    #logout{
        margin-top: 10px;
        background-color: #DCDCDC;
        color: #000000;
        border-radius: 20px;
        padding-top: 20px;
    }

</style>

<div id="navbar-main">
    <nav class="navbar">
        <div class="navbar-mid">
            <a class="main-button" href="?controller=pages&action=home">
                <img src="img/hospitalsBedServicesIcon.png" height="65px" style="margin-right: 10px;">
                Hospitals Bed Services
            </a>
            <div id="line"></div>
            <a class="navbar-brand" href="?controller=hospital&action=index">
                รายชื่อทั้งหมด
            </a>
            <?php 
            if($_SESSION['token'] == 1){
                echo "
                <a class=navbar-brand href=?controller=bed&action=index>
                เตียงทั้งหมด
                </a>
                <a class=navbar-brand href=?controller=doctor&action=index>
                รายชื่อหมอทั้งหมด
                </a>";
            }else{
                echo "
                <div class=navbar-brand href=#></div>
                <div class=navbar-brand href=#></div>
                <div class=navbar-brand href=#></div>
                <div class=navbar-brand href=#></div>
                <div class=navbar-brand href=#></div>
                <div class=navbar-brand href=#></div>
                <div class=navbar-brand href=#></div>
                <div class=navbar-brand href=#></div>
                ";
            }
            
            ?>

            <div class="navbar-brand" href="#"></div>
            <div class="navbar-brand" href="#"></div>
            <div class="navbar-brand" href="#"></div>
            <div class="navbar-brand" href="#"></div>
            <div class="navbar-brand" href="#"></div>
            <div class="navbar-brand" href="#"></div>
            <div class="navbar-brand" href="#"></div>
            <div class="navbar-brand" href="#"></div>
            <div class="navbar-brand" href="#"></div>
            <div class="navbar-brand" href="#"></div>
            <div class="navbar-brand" href="#"></div>
            
            
            <?php
                if($_SESSION['token'] != 1){
                    echo "
                    <div class=navbar-brand href=#></div>
                    <div class=navbar-brand href=#></div>
                    <a class=navbar-brand-right href=?controller=account&action=index>
                    Login
                    <div id=admin-only>admin only</div>
                    </a>
                    ";
                }else{
                    echo "
                    <div style=margin-top: 20px; class=navbar-brand href=#>".$_SESSION['firstname']."</div>
                    <div class=navbar-brand href=#></div>
                    <a id=logout style=margin-top: 10px; class=navbar-brand-right href=?controller=account&action=logout>
                    Logout
                    </a>
                    ";
                }
            ?>
            

        </div>
        
    </nav>
</div>
