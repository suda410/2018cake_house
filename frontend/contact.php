<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cake House 帶給你最天然健康的幸福滋味">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Cake House : 帶給你最天然健康的幸福滋味
    </title>

    <meta name="keywords" content="">

    <?php require_once('template/head_files.php'); ?>



</head>

<body>
    <?php require_once('template/navbar.php'); ?>

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="../index.php">首頁</a>
                        </li>
                        <li>聯絡我們</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** PAGES MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">聯絡我們</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="about.php">關於我們</a>
                                </li>
                                <li>
                                    <a href="contact.php">聯絡我們</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- *** PAGES MENU END *** -->


                    <div class="banner">
                        <a href="#">
                            <img src="../images/ad-banner.jpg" alt="sales 2017" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">


                    <div class="box" id="contact">
                        <h1>連絡我們</h1>

                        <p class="lead">如有任何問題歡迎與我們聯繫.</p>

                        <hr>

                        <div class="row">
                            <div class="col-sm-4">
                                <h3>
                                    <i class="fa fa-map-marker"></i> 門市地點</h3>
                                <p>320桃園市中壢區健行路229號</p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3>
                                    <i class="fa fa-phone"></i> 客服中心</h3>
                                <p class="text-muted">如有任何指教，請來電至以下專線</p>
                                <p>
                                    <strong>882 5252</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3>
                                    <i class="fa fa-envelope"></i> 線上客服</h3>
                                <p class="text-muted">來信請寄到以下電子信箱</p>
                                <ul>
                                    <li><strong><a href="mailto:">cakehouse@fakeemail.com</a></strong></li>
                                </ul>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->

                        <hr>

                        <div id="map">

                        </div>

                        <hr>
                        <h2>聯絡表單</h2>

                        <form action="template/send_mail.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">姓名</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="mobile">聯絡電話</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">標題</label>
                                        <input type="text" class="form-control" id="subject" name="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">訊息</label>
                                        <textarea id="message" class="form-control" name="message"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> 確定送出</button>

                                </div>
                            </div>
                            <!-- /.row -->
                        </form>


                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <?php require_once('template/footer.php'); ?>


<?php
  if(isset($_GET['Send']) && $_GET['Send'] != null){
    if($_GET['Send'] == 'true'){ ?>
     <script>
        $(function(){
            $('.modal-body>p').html('表單已送出，我們會盡快回覆您');
            $('#info-modal').modal();            
        });
     </script> 
    <?php } 
    }?>


        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

        <script>
            function initialize() {
                var mapOptions = {
                    zoom: 15,
                    center: new google.maps.LatLng(49.1678136, 16.5671893),
                    mapTypeId: google.maps.MapTypeId.ROAD,
                    scrollwheel: false
                }
                var map = new google.maps.Map(document.getElementById('map'),
                    mapOptions);

                var myLatLng = new google.maps.LatLng(49.1681989, 16.5650808);
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>


</body>

</html>