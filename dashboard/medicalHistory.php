<?php include('./includes/header.php') ?>
<section class="home">
    <div class="topHeader sticky-top">
        <h2>
            Medial History</h2>
        <?php include('./includes/topHeader.php') ?>

    </div>
    <div class="padd-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="profileCard">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="d-flex align-items-center">
                                    <div class="px-4">
                                        <img src="./assets/images.png" alt="">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="py-1 name">Karen Delbosquee</span>
                                        <span class="py-1"><span class="info">Marital Status:</span> <span
                                                class="text-black-50">
                                                Married</span></span>
                                        <span class="py-1"><span class="info">Occupation:</span> <span
                                                class="text-black-50"> Student</span></span>
                                        <span class="py-1"><span class="info">Address:</span> <span
                                                class="text-black-50">
                                                House no 1000 unit no
                                                10</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="rightProfile">
                                    <div class="d-flex flex-column">
                                        <span class="py-1"><span class="info">Gender:</span> <span
                                                class="text-black-50">
                                                Male</span></span>
                                        <span class="py-1"><span class="info">Mobile:</span> <span
                                                class="text-black-50"> 111-1111-1111</span></span>
                                        <span class="py-1"><span class="info">Email:</span> <span class="text-black-50">
                                                example@gmail.com
                                            </span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="medicalDetails">
                        <div class="tab">
                            <button class="tablinks my-3" onclick="openCity(event, 'personalDetails')"
                                id="defaultOpen"><i class="mx-2 fa fa-user" aria-hidden="true"></i>
                                Personal
                                Details</button>
                            <button class="tablinks my-3" onclick="openCity(event, 'MedialHistory')"><i
                                    class="mx-2 fa fa-stethoscope" aria-hidden="true"></i>
                                Medical
                                History</button>
                            <button class="tablinks my-3" onclick="openCity(event, 'notes')"><i class="mx-2 fa fa-book"
                                    aria-hidden="true"></i>
                                Notes</button>
                            <button class="tablinks my-3" onclick="openCity(event, 'reports')"><i
                                    class="mx-2 fa fa-sticky-note" aria-hidden="true"></i>
                                Reports</button>
                            <button class="tablinks my-3" onclick="openCity(event, 'medications')"><i
                                    class="mx-2 fa fa-medkit" aria-hidden="true"></i>

                                Medications</button>
                        </div>

                        <div id="personalDetails" class="tabcontent">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead class="py-5">
                                        <tr class="py-5">
                                            <th class="py-3" scope="col">Data</th>
                                            <th class="py-3" scope="col">Data</th>
                                        </tr>
                                    <tbody class="text-center">
                                        <tr>
                                            <td class="pt-4">Chief Complaints:</td>
                                            <td class="pt-4">03/18/2023 00:00:00</td>
                                        </tr>
                                        <tr>
                                            <td class="pt-4">Symptoms:</td>
                                            <td class="pt-4">Urgent Care Visits</td>
                                        </tr>
                                        <tr>
                                            <td class="pt-4">Symptoms Explanation:</td>
                                            <td class="pt-4"></td>
                                        </tr>
                                        <tr>
                                            <td class="pt-4">Condition:</td>
                                            <td class="pt-4"></td>
                                        </tr>
                                        <tr>
                                            <td class="pt-4">Additional information related to your condition:</td>
                                            <td class="pt-4"></td>
                                        </tr>
                                        <tr>
                                            <td class="pt-4">Level of Pain:</td>
                                            <td class="pt-4"></td>
                                        </tr>
                                    </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>

                        <div id="MedialHistory" class="tabcontent">
                            <h3>MedialHistory</h3>
                            <p>MedialHistory is the capital of France.</p>
                        </div>

                        <div id="notes" class="tabcontent">
                            <h3>Tokyo</h3>
                            <p>Tokyo is the capital of Japan.</p>
                        </div>
                        <div id="reports" class="tabcontent">
                            <h3>repo</h3>
                            <p>Tokyo is the capital of Japan.</p>
                        </div>
                        <div id="medications" class="tabcontent">
                            <h3>med</h3>
                            <p>Tokyo is the capital of Japan.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('./includes/footer.php') ?>