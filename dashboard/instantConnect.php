<?php include('./includes/header.php') ?> <section class="home">
    <div class="topHeader sticky-top">
        <h2> Add Patient</h2> <?php include('./includes/topHeader.php') ?>
    </div>
    <div class="padd-wrap">

        <div class="form-bg">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="form-container">
                            <div class="form-icon">
                                <i class="fa fa-user-circle"></i>
                                <span class="signup"><a href="">Add new Patient</a></span>
                            </div>
                            <form class="form-horizontal">
                                <h3 class="title">New Patient</h3>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                    <input class="form-control" type="text" placeholder="Full Name">
                                </div>

                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-envelope"></i></span>
                                    <input class="form-control" type="email" placeholder="Email address">
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                    <input class="form-control" type="text" placeholder="Phone no">
                                </div>
                                <button class="btn signin">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <?php include('./includes/footer.php') ?>