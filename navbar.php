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

    #logout {
        position: relative;
  top: 25px;
  right: 50px;
  background-color: #EA4C89;
  border-radius: 8px;
  border-style: none;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  line-height: 20px;
  list-style: none;
  margin: 0;
  outline: none;
  padding: 10px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: color 100ms;
  vertical-align: baseline;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

#logout:hover,
#logout:focus {
  background-color: #F082AC;
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
                    <div style=margin-top: 20px; class=navbar-brand href=#>😃ชื่อผู้ใช้ : ".$_SESSION['firstname']."</div>
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
