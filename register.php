<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Register</title>
            <link rel="icon" href="https://www.mytcas.com/favicon.ico">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/formRegist.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <style>
                a{
                    text-decoration: none;
                    padding: 10px;
                }
        
                a:hover{
                    background-color:rgb(255, 255, 255) ;
                    transition: 0.5s;
                    color: red;
                }
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
                <!-- header  -->
                <!-- <div class="row text-right fixed-top"  style="color:#1b3e7c;font-size:small ;background-color: white;height: 90px;padding-top: 30px;">
                    <div class="col-1"></div>
                    <div class="col-2" style="padding-top: -100px;"><a href="index.php"><img class="img-fluid" src="https://www.mytcas.com/img/mytcas-logo.png" width="150px" alt=""></a></div>
                    <div class="col-2" style="font-size:1vw;font-family:Prompt;"><a href="news.php" style="text-decoration: none;"><span class="topbut">ข่าวประชาสัมพันธ์</span></a></div>
                    <div class="col-1" style="font-size:1vw;text-align: right;font-family:Prompt;"><span class="topbut">ค้นหาหลักสูตร</span></div>
                    <div class="col-3" style="font-size:1vw;text-align: left;font-family:Prompt;"><span class="topbut">รายชื่อมหาวิทยาลัยที่เข้าร่วมTCAS63</span></div>
                    <div class="col-3" style="text-align: left;"><a href="register.php"><span class="registbut" style="font-size:1vw;">สมัครลงทะเบียน • เข้าสู่ระบบ</span></a></div>
                </div> -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="color:#1b3e7c;font-size:small;background-color: white;height: 90px;padding-top: 0px;padding-left: 150px;padding-right: 150px;">
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
                      </nav>
                    <!-- end header -->
                <div class="row text-center" style="margin-top: 90px;margin-bottom: 10px;">
                     <div class="col-12" style="color: white;background-color: #00a6ce;padding:30px 0 30px 0;font-size: large;">REGISTER</div>
                 </div>
                 <div class="row">
                     <div class="col-1"></div>
                     <div class="col-10">
                     
                        <div class="container2">
                            <div class="FORMST">
                                <form method="POST" action="insert.php" autocomplete="on">
                                <!-- <form method="GET" action="process.php"> -->
                                    <fieldset>
                                    <legend>Register</legend>
                                        <div style="text-align:left;margin:0 0 5px 5px;">USERNAME</div>
                                        <input type="text" name="F_username" placeholder="USERNAME" required>
                                        <div style="text-align:left;margin:0 0 5px 5px;">EMAIL</div>
                                        <input type="email" name="F_email" placeholder="EMAIL" required>
                                        <div style="text-align:left;margin:0 0 5px 5px;">PASSWORD</div>
                                        <input type="password" name="F_password" placeholder="PASSWORD" required>
                                        <div style="text-align:left;margin:0 0 5px 5px;">First-name</div>
                                        <input type="text" name="F_firstname" placeholder="First-Name" required>
                                        <div style="text-align:left;margin:0 0 5px 5px;">Last-name</div>
                                        <input type="text" name="F_lastname" placeholder="Last-Name" required >
                                        <div style="text-align:left;margin:0 0 5px 5px;">Age</div>
                                        <input type="number" name="F_age"  placeholder="Age" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;" required/>
                                        <div style="text-align:left;margin:0 0 5px 5px;">วันเกิด(ค.ศ.)</div>
                                        <input type="date" name="F_dob" require>
                                        <div style="text-align:left;margin:0 0 5px 5px;">เบอร์โทรศัพท์</div>
                                        <input type="number" name="F_phone"  placeholder="Phone-number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" required/>
                                        
                                    </fieldset>
                                    <input type="submit" value="Submit" />
                                </form>
                                <br><span>Already has account ?</span><br>
                                <div style="margin-top: 30px;"><a  href="login.html">Login<a></div>
                            </div>
                        </div>

                        
                     </div>
                 </div>

            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
        </body>
</html>