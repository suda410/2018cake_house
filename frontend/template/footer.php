<!-- *** FOOTER ***-->
<div id="footer" data-animate="fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">

                <h4>會員專區</h4>

                <ul>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#login-modal">會員登入</a>
                    </li>
                    <li>
                        <a href="register.php">加入會員</a>
                    </li>
                </ul>

                <hr class="hidden-md hidden-lg hidden-sm">

            </div>
            <!-- /.col-md-3 -->

            <div class="col-md-3 col-sm-6">

                <h4>產品分類</h4>
                <?php foreach($categories as $footer_categories){  ?>
                <a href="product_list.php?category_id=<?php echo $footer_categories['product_categories_id']; ?>">
                    <h5>
                        <?php echo $footer_categories['category']; ?>
                    </h5>
                </a>
                <?php } ?>

                <hr class="hidden-md hidden-lg">

            </div>
            <!-- /.col-md-3 -->

            <div class="col-md-3 col-sm-6">

                <h4>門市地點</h4>

                <p>
                    <strong>Cake House Ltd.</strong>
                    <br>320桃園市中壢區健行路229號
                </p>

                <a href="contact.php">前往聯絡我們頁面</a>

                <hr class="hidden-md hidden-lg">

            </div>
            <!-- /.col-md-3 -->



            <div class="col-md-3 col-sm-6">

                <h4>訂閱電子報</h4>

                <form>
                    <div class="input-group">

                        <input type="text" class="form-control">

                        <span class="input-group-btn">

                            <button class="btn btn-default" type="button">Subscribe!</button>

                        </span>

                    </div>
                    <!-- /input-group -->
                </form>

                <hr>

                <h4>追蹤我們</h4>

                <p class="social">
                    <a href="#" class="facebook external" data-animate-hover="shake">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="twitter external" data-animate-hover="shake">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="instagram external" data-animate-hover="shake">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#" class="gplus external" data-animate-hover="shake">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="#" class="email external" data-animate-hover="shake">
                        <i class="fa fa-envelope"></i>
                    </a>
                </p>


            </div>
            <!-- /.col-md-3 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</div>
<!-- /#footer -->

<!-- *** FOOTER END *** -->




<!-- *** COPYRIGHT ***
 _________________________________________________________ -->
<div id="copyright">
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">© 2018 Cake House All Right Reserved.</p>
        </div>
    </div>
</div>
<!-- *** COPYRIGHT END *** -->

</div>
<!-- /#all -->




<!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
<!-- <script src="../js/jquery-1.11.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.cookie.js"></script>
<script src="../js/waypoints.min.js"></script>
<script src="../js/modernizr.js"></script>
<script src="../js/bootstrap-hover-dropdown.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/front.js"></script> -->