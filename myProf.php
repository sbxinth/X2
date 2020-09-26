<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>My Account</title>
            <link rel="icon" href="https://www.mytcas.com/favicon.ico">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        </head>
        <body style="background-color: whitesmoke;">

            <div class="container-fluid">
            <?php
        session_start();
        if(isset($_SESSION["name"])){
          echo 'LOGGED IN as '.$_SESSION["nameShow"];
          echo '<div class="row text-right fixed-top"  style="color:#1b3e7c;font-size:small ;background-color: white;height: 90px;padding-top: 30px;">
          <div class="col-1"></div>
          <div class="col-2" style="padding-top: -100px;"><a href="index.php"><img class="img-fluid" src="https://www.mytcas.com/img/mytcas-logo.png" width="150px" alt=""></a></div>
          <div class="col-2" style="font-size:1vw;font-family:Prompt;"><a href="news.php" style="text-decoration: none;"><span class="topbut">ข่าวประชาสัมพันธ์</span></a></div>
          <div class="col-1" style="font-size:1vw;text-align: right;font-family:Prompt;"><span class="topbut">ค้นหาหลักสูตร</span></div>
          <div class="col-3" style="font-size:1vw;text-align: left;font-family:Prompt;"><span class="topbut">รายชื่อมหาวิทยาลัยที่เข้าร่วมTCAS63</span></div>
          <div class="col-3" style="text-align: left;"><a href="myProf.php"><span class="registbut" style="font-size:1vw;">My Profile</span></a></div>
      </div>';
          // Header("Location: showACCountname.php");
      }else{
          echo 'NOT LOGGED IN';
          echo 'LOGGED IN as '.$_SESSION["nameShow"];
          echo '<div class="row text-right fixed-top"  style="color:#1b3e7c;font-size:small ;background-color: white;height: 90px;padding-top: 30px;">
          <div class="col-1"></div>
          <div class="col-2" style="padding-top: -100px;"><a href="index.php"><img class="img-fluid" src="https://www.mytcas.com/img/mytcas-logo.png" width="150px" alt=""></a></div>
          <div class="col-2" style="font-size:1vw;font-family:Prompt;"><a href="news.php" style="text-decoration: none;"><span class="topbut">ข่าวประชาสัมพันธ์</span></a></div>
          <div class="col-1" style="font-size:1vw;text-align: right;font-family:Prompt;"><span class="topbut">ค้นหาหลักสูตร</span></div>
          <div class="col-3" style="font-size:1vw;text-align: left;font-family:Prompt;"><span class="topbut">รายชื่อมหาวิทยาลัยที่เข้าร่วมTCAS63</span></div>
          <div class="col-3" style="text-align: left;"><a href="register.php"><span class="registbut" style="font-size:1vw;">สมัครลงทะเบียน • เข้าสู่ระบบ</span></a></div>
      </div>';

      }
      
        ?>
        
                <!-- header  -->
                <!-- <div class="row text-right fixed-top"  style="color:#1b3e7c;font-size:small ;background-color: white;height: 90px;padding-top: 30px;">
                    <div class="col-1"></div>
                    <div class="col-2" style="padding-top: -100px;"><a href="index.php"><img class="img-fluid" src="https://www.mytcas.com/img/mytcas-logo.png" width="150px" alt=""></a></div>
                    <div class="col-2" style="font-size:1vw;font-family:Prompt;"><a href="news.php" style="text-decoration: none;"><span class="topbut">ข่าวประชาสัมพันธ์</span></a></div>
                    <div class="col-1" style="font-size:1vw;text-align: right;font-family:Prompt;"><span class="topbut">ค้นหาหลักสูตร</span></div>
                    <div class="col-3" style="font-size:1vw;text-align: left;font-family:Prompt;"><span class="topbut">รายชื่อมหาวิทยาลัยที่เข้าร่วมTCAS63</span></div>
                    <div class="col-3" style="text-align: left;"><a href="register.php"><span class="registbut" style="font-size:1vw;">สมัครลงทะเบียน • เข้าสู่ระบบ</span></a></div>
                </div> -->
                    <!-- end header -->
                    
                    <?php
                    session_start();
                    include("condb.php");
                    echo '<div style="margin:100px 0 0 0;"></div>';
                    // echo $_SESSION["name"].'<br>';
                    echo '<div class="alert alert-danger" style="font-family:Prompt; margin:20px 20px 20px 20px;" role="alert">
                    เว็บไซต์กำลังปิดปรับปรุงเกี่ยวกับเนื้อหาที่แสดงในหน้าโปรไฟลชั่วคราว
                    </div>';
                    echo 'Your username is '.$_SESSION["username"].'<br><br>';
                    echo 'Your name is '.$_SESSION["firstname"].'<br><br>';
                    // echo '<br><a href="input_to_update.html">EDIT NAME</a><br><BR>';
                    //                   include("condb.php");
                    echo '<a href="logout.php">Logout</a>';
                    
                    ?>
                    
                <div class="row" style="margin: 450px 0 0 0;"></div>
                <div class="row" style="background-color: #1b3e7c;padding:20px 0 0px 0;">
                    <!-- <div class="col-12" style="padding-left: 0;padding-right: 0; margin-top: 30px;"><div class="ft"></div></div> -->
                    <div class="col-1"></div>
                    <div class="col-2"><span class="txtw">ติดต่อเรา</span></div>
                </div>
                <div class="row" style="background-color: #1b3e7c;padding:10px 0 20px 0;">
                    <!-- <div class="col-12" style="padding-left: 0;padding-right: 0; margin-top: 30px;"><div class="ft"></div></div> -->
                    <div class="col-1"></div>
                    <div class="col-2"><img class="img-fluid" src="https://www.mytcas.com/img/cupt-logo.png" alt=""></div>
                    <div class="col-2"><div class="txtw" style="font-size: 8pt;">โทร: 02-126-5111 เวลาทำการ 8:30-17:00น.
                        อีเมล: student@myTCAS.com</div>
                    </div>
                    <div class="col-5"></div>
                    <div class="col-2"><div class="txtw">FB TW</div></div>
                </div>

            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
        </body>
</html>

