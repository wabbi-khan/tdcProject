<?php include('./includes/header.php') ?>
<section class="home">
    <div class="topHeader sticky-top">
        <h2>Current Patient</h2>
        <?php include('./includes/topHeader.php') ?>

    </div>
    <div class="padd-wrap">
        <div class="container">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="py-5">
                            <tr class="py-5 text-nowrap">
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
                                    <button class="border-0 " data-bs-toggle="modal" data-bs-target="#exampleModal">

                                        <img src="./assets/comments.png" alt="message">
                                    </button>

                                    <!-- <i class='bx bxs-chat message'></i> -->
                                </td>
                                <td class="pt-4">
                                    <!-- <i class='bx bxs-video-plus message'></i> -->
                                    <img src="./assets/video-camera.png" alt="video call">
                                </td>
                                <td class="pt-4">
                                    <span class="removebtn">
                                        <i class='bx bx-trash'></i>

                                        Remove
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                        </thead>
                    </table>


                </div>
            </div>
        </div>
    </div>
    <!-- Model -->
</section>
<div class="modal fade customModal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Text Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">

                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Wrtie your messase here" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Send</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<?php include('./includes/footer.php') ?>