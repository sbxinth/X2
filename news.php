<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>NEWS</title>
            <link rel="icon" href="https://www.mytcas.com/favicon.ico">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <style>
          .nav-link {
            color:#1b3e7c!important;
          }
          .nav-link:hover ,.nav-item:hover{
            color:#1b3e7c!important;
          }
          .bg-light {
            background-color:#fff!important;
          }
         </style>
         </head>
        <body style="background-color: whitesmoke;">
            <div class="container-fluid">
            <?php
        session_start();
        if(isset($_SESSION["name"])){
          echo 'LOGGED IN as '.$_SESSION["nameShow"];
      //     echo '<div class="row text-right fixed-top"  style="color:#1b3e7c;font-size:small ;background-color: white;height: 90px;padding-top: 30px;">
      //     <div class="col-1"></div>
      //     <div class="col-2" style="padding-top: -100px;"><a href="index.php"><img class="img-fluid" src="https://www.mytcas.com/img/mytcas-logo.png" width="150px" alt=""></a></div>
      //     <div class="col-2" style="font-size:1vw;font-family:Prompt;"><a href="news.php" style="text-decoration: none;"><span class="topbut">ข่าวประชาสัมพันธ์</span></a></div>
      //     <div class="col-1" style="font-size:1vw;text-align: right;font-family:Prompt;"><span class="topbut">ค้นหาหลักสูตร</span></div>
      //     <div class="col-3" style="font-size:1vw;text-align: left;font-family:Prompt;"><span class="topbut">รายชื่อมหาวิทยาลัยที่เข้าร่วมTCAS63</span></div>
      //     <div class="col-3" style="text-align: left;"><a href="myProf.php"><span class="registbut" style="font-size:1vw;">My Profile</span></a></div>
      // </div>';

      // <!-- navbar  -->
      echo '<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="color:#1b3e7c;font-size:small;background-color: white;height: 90px;padding-top: 0px;padding-left: 150px;padding-right: 150px;">
      <a class="navbar-brand" href="index.php"><img class="img-fluid" src="https://www.mytcas.com/img/mytcas-logo.png" width="150px" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link " href="news.php"><span class="topbut">ข่าวประชาสัมพันธ์</span><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="topbut">ค้นหาหลักสูตร</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="topbut">รายชื่อมหาวิทยาลัยที่เข้าร่วมTCAS63</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="myProf.php"><span class="registbut" style="font-size:1vw;">My Profile</span></a>
          </li>
        </ul>
      </div>
    </nav>';
  //  <!-- ednavbar -->

          // Header("Location: showACCountname.php");
      }else{
          echo 'NOT LOGGED IN';
          echo 'LOGGED IN as '.$_SESSION["nameShow"];
      //     echo '<div class="row text-right fixed-top"  style="color:#1b3e7c;font-size:small ;background-color: white;height: 90px;padding-top: 30px;">
      //     <div class="col-1"></div>
      //     <div class="col-2" style="padding-top: -100px;"><a href="index.php"><img class="img-fluid" src="https://www.mytcas.com/img/mytcas-logo.png" width="150px" alt=""></a></div>
      //     <div class="col-2" style="font-size:1vw;font-family:Prompt;"><a href="news.php" style="text-decoration: none;"><span class="topbut">ข่าวประชาสัมพันธ์</span></a></div>
      //     <div class="col-1" style="font-size:1vw;text-align: right;font-family:Prompt;"><span class="topbut">ค้นหาหลักสูตร</span></div>
      //     <div class="col-3" style="font-size:1vw;text-align: left;font-family:Prompt;"><span class="topbut">รายชื่อมหาวิทยาลัยที่เข้าร่วมTCAS63</span></div>
      //     <div class="col-3" style="text-align: left;"><a href="register.php"><span class="registbut" style="font-size:1vw;">สมัครลงทะเบียน • เข้าสู่ระบบ</span></a></div>
      // </div>';
      // <!-- navbar  -->
      echo '<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="color:#1b3e7c;font-size:small;background-color: white;height: 90px;padding-top: 0px;padding-left: 150px;padding-right: 150px;">
      <a class="navbar-brand" href="index.php"><img class="img-fluid" src="https://www.mytcas.com/img/mytcas-logo.png" width="150px" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
          <a class="nav-link " href="news.php"><span class="topbut">ข่าวประชาสัมพันธ์</span><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="topbut">ค้นหาหลักสูตร</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="topbut">รายชื่อมหาวิทยาลัยที่เข้าร่วมTCAS63</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php"><span class="registbut" style="font-size:1vw;">สมัครลงทะเบียน • เข้าสู่ระบบ</span></a>
          </li>
        </ul>
      </div>
    </nav>';
  //  <!-- ednavbar -->

      }
        ?>

                <div class="row text-center" style="margin-top: 17px;margin-bottom: 10px;">
                    <div class="col-12" style="color: white;background-color: #00a6ce;padding:30px 0 30px 0;font-size: large;">ข่าวประชาสัมพันธ์</div>
                </div>
                
                              <!-- CARD GRID -->
                <div class="album py-5">
                  <div class="container" style="margin-top:-40px">

                    <div class="row">
                      <div class="col-md-4"> <!--1-->
                        <div class="card mb-4 shadow-sm" style="height:;">
                        <div><img class="img-fluid rounded" src="https://cdn.sanity.io/images/r9nl4qjw/production/30b50970cf4f0d47a990b1b2483b369139f91bcc-1200x630.jpg?h=300" alt=""></div>
                          <div class="card-body" style="height: 160px;">
                                  <div class="toppic">TCAS64 เปิดให้ลงทะเบียน 5 มกราคม 2564</div>
                                  <div class="detailtext">วันอาทิตย์ที่ 9 สิงหาคม 2563</div>
                                  <div class="detailtext" style="font-size:smaller;">TCAS64 ระบบเปิดให้ลงทะเบียน 5 มกราคม 2564</div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4"><!--2-->
                        <div class="card mb-4 shadow-sm">
                        <div><img class="img-fluid rounded" src="https://cdn.sanity.io/images/r9nl4qjw/production/b0d7941d74800dbb3d3ef6f51105fd3db32b6861-1200x630.jpg?h=300" alt=""></div>
                          <div class="card-body" style="height: 160px;">
                                      <div class="toppic">การประมวลผล รอบที่ 4</div>
                                      <div class="detailtext">วันอาทิตย์ที่ 10 พฤษภาคม 2563</div>
                                      <div class="detailtext" style="font-size:smaller;">เมื่อปิดระบบรับสมัครรอบ 4 เวลา 23.59 น. วันที่ 20 พ.ค. 63 ระบบจะนำคะแนนการคัดเลือกของผู้สมัครทุกคนของแ…</div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4"> <!--3-->
                        <div class="card mb-4 shadow-sm">
                        <div><img class="img-fluid rounded" src="https://cdn.sanity.io/images/r9nl4qjw/production/6292e0b4d0d47f5da5e290d350f1cc4e4567e4e2-1200x630.jpg?h=300" alt=""></div>
                        <div class="card-body" style="height: 160px;">
                                      <div class="toppic">การยืนยันสิทธิ์รอบที่ 3 (ภายในวันที่ 9 พ.ค. 63)</div>
                                      <div class="detailtext">วันพฤหัสบดีที่ 7 พฤษภาคม 2563</div>
                                      <div class="detailtext" style="font-size:smaller;">ระบบประกาศผลผู้ผ่านการคัดเลือกรอบที่ 3 เพียง สาขาวิชาเดียวที่ดีที่สุด (พิจารณาจากอันดับที่เลือกสาขาวิชาที่ผ่าน…</div>
                            
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4"> <!--4-->
                        <div class="card mb-4 shadow-sm">
                            <div><img class="img-fluid rounded" src="https://cdn.sanity.io/images/r9nl4qjw/production/131e46303a1fa6e2a21d35965bcb1414bba79a45-1200x630.jpg?h=300" alt=""></div>
                            <div class="card-body" style="height: 160px;">
                                <div class="toppic">การสมัครรอบที่ 4 (วันที่ 7 – 20 พ.ค. 63)</div>
                                <div class="detailtext">วันพุทธที่ 6 พฤษภาคม 2563</div>
                                <div class="detailtext" style="font-size:smaller;">ตรวจสอบข้อมูลต่าง ๆ (GPAX6 จำนวนหน่วยกิต/คะแนนเฉลี่ย 8 กลุ่มสาระการเรียนรู้ O-NET GAT PAT 9 วิชาสามั…</div>
                            </div>
                        </div>
                      </div>

                      <div class="col-md-4"> <!--5-->
                        <div class="card mb-4 shadow-sm">
                            <div><img class="img-fluid rounded" src="https://cdn.sanity.io/images/r9nl4qjw/production/975d4a0a6fb5d550980541ef989027a09b459dc3-1200x630.jpg?h=300" alt=""></div>
                            <div class="card-body" style="height: 160px;">
                                <div class="toppic">วันนี้ วันสุดท้ายของการรับสมัคร TCAS63 รอบ 3</div>
                                <div class="detailtext">วันจันทร์ที่ 27 เมษายน 2563</div>
                                <div class="detailtext" style="font-size:smaller;">ระบบจะประมวลผลให้กับผู้ที่ชำระเงิน + ยืนยันสาขาแล้วเท่านั้น</div>
                    
                            </div>
                        </div>
                      </div>

                      <div class="col-md-4"> <!--6-->
                        <div class="card mb-4 shadow-sm">
                            <div><img class="img-fluid rounded" src="https://cdn.sanity.io/images/r9nl4qjw/production/ccd9f3914850f482b745341d6047fadae0ee6d5c-1200x630.jpg?h=300" alt=""></div>
                            <div class="card-body" style="height: 160px;">
                                <div class="toppic">วันที่ 27 เมษายน 2563 วันสุดท้ายของการรับสมัคร TCAS63 รอบ 3</div>
                                <div class="detailtext">วันจันทร์ที่ 27 เมษายน 2563</div>
                                <div class="detailtext" style="font-size:smaller;">สำหรับน้อง ๆ ที่มีปัญหาหรือข้อสงสัยติดต่อพี่แอดมินได้ที่ 02-126-5111</div>
                    
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>
              <!-- ED CARD GRID -->

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