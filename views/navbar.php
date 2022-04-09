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


    
</style>

<div id="navbar-main">
    <nav class="navbar">
        <div class="navbar-mid">
            <a class="main-button" href="#">
                <div class="row">
                    <div class="col">
                        <img src="https://sv1.picz.in.th/images/2022/04/09/8jsMgW.png" height="65px" style="margin-right: 10px;">  
                    </div>
                    <div class="col" style="position:relative;right:220px;width:500px;top:15px">
                        <p>Hospitals Bed Services</p>
                    </div>
                </div>
            </a>
            <div id="line"></div>
            <a class="navbar-brand" href="#">
                รายชื่อทั้งหมด
            </a>
            <a class="navbar-brand-right"href="#">
                <div  style="position:relative;left:920px;">Login</div>
                <div id="admin-only" style="position:relative;left:905px;">admin only</div>
            </a>

        </div>
        
    </nav>
</div>

</html>