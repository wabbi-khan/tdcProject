<?php include('./includes/header.php') ?>
<section class="home">
    <div class="topHeader sticky-top">


        <h2>Dashboard</h2>
        <div class="dektopIcons">
            <div class="allmesages">
                <div class="bell">
                    <i class="bx bx-bell"></i>
                    <span>2</span>
                </div>
                <div class="showMes"></div>
            </div>
            <div class="bell pencil">
                <i class="bx bx-pencil"></i>
            </div>
            <div class="bell envelope">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="logout">
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class=""><img src="./assets/images.png" alt="img" /></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="icons">
            <!-- Example split danger button -->
            <div class="btn-group">
                <button type="button" class="btn btn-info text-white dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Messages</a></li>
                    <li><a class="dropdown-item" href="#">Notifications</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="padd-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pb-3">
                    <h3 class="">Heading</h3>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 col-md-6">
                    <div class="box--wrap">
                        <div>
                            <span>Patients</span>
                            <h2>300</h2>
                        </div>
                        <div><img src="./assets/patient.png" alt="patien" /></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 col-md-6">
                    <div class="box--wrap">
                        <div>
                            <span>Appointments</span>
                            <h2>3</h2>
                        </div>
                        <div><img src="./assets/appointment.png" alt="patien" /></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 col-md-6">
                    <div class="box--wrap">
                        <div>
                            <span>New Message</span>
                            <h2>10</h2>
                        </div>
                        <div><img src="./assets/comments.png" alt="patien" /></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-3 col-md-6">
                    <div class="box--wrap">
                        <div>
                            <span>Patient Care</span>
                            <h2>300</h2>
                        </div>
                        <div><img src="./assets/healthcare.png" alt="patien" /></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pb-3">
                    <h3 class="">Heading</h3>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="box--wrap box--wrap2">
                        <div><img src="./assets/elivecare.png" alt="patien" /></div>
                        <div>
                            <span>Patients Care</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="card1 text-center">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <h3>Patient Care</h3>
                        <div class="go-corner" href="#">
                            <div class="go-arrow">→</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- custom script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script defer src="./js/script.js"></script>
</body>

</html>