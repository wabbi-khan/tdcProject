<?php include('./includes/header.php') ?>
<section class="home">
    <div class="topHeader sticky-top">
        <h2>
            Completed Patient Care</h2>
        <?php include('./includes/topHeader.php') ?>

    </div>
    <div class="padd-wrap">
        <div class="container">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="py-5">
                            <tr class="py-5">
                                <th class="py-3" scope="col">#</th>
                                <th class="py-3" scope="col">Date/Time</th>
                                <th class="py-3" scope="col">Patient Name</th>
                                <th class="py-3" scope="col">Message</th>
                                <th class="py-3" scope="col">Video Call</th>
                                <th class="py-3" scope="col">Remove</th>
                            </tr>
                        <tbody class="text-center">

                            <tr>
                                <td class="pt-4 patientImg" scope="row">

                                    <img src="./assets/images.png" alt="">
                                </td>
                                <td class="pt-4">03/09/2023 10:57</td>
                                <td class="pt-4">Karen Delbosquee </td>
                                <td class="pt-4">
                                    <button class="border-0 ">

                                        <img src="./assets/comments.png" alt="message">
                                    </button>

                                </td>
                                <td class="pt-4">
                                    <img src="./assets/video-camera.png" alt="video call">
                                </td>
                                <td class="pt-4">
                                    <a href="#" class="removebtn text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="">Patient Care
                                            <i class="bx bx-chevron-down" id="icon"></i>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/">Encounter Notes</a></li>
                                        <hr class="dropdown-divider" />
                                        <li><a class="dropdown-item" href="/TDCPROJECT/dashboard/medicalHistory.php">Medical History</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                        </thead>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>

<?php include('./includes/footer.php') ?>