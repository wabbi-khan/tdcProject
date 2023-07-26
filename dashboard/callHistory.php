<?php include('./includes/header.php') ?> <section class="home">
    <div class="topHeader sticky-top">
        <h2>Patient Call History</h2>
     <?php include('./includes/topHeader.php') ?>
    </div>
    <div class="padd-wrap">

       <div class="docTodoc">
        <div class="container">
            <div class="table-responsive">
                         <table class="table table-hover table-bordered">
                             <thead class="py-5">
                                 <tr class="py-5">
                                     <th class="py-3" scope="col">Name</th>
                                     <th class="py-3" scope="col">Date/Time</th>
                                     <th class="py-3" scope="col">End-Time</th>
                                     <th class="py-3" scope="col">Duration</th>
                                     <th class="py-3" scope="col">Action</th>
                                 </tr>
                             <tbody class="text-center">
                                 <tr>
                                     <td class="pt-4" scope="row">Wahab Khan</td>
                                     <td class="pt-4">09/22/2022 13:42</td>
                                     <td class="pt-4">09/22/2022 13:43</td>
                                     <td class="pt-4">00:00:19</td>
                                     <td class="pt-3 d-flex justify-content-center align-items-center">
                                    <a href="#" class="removebtn text-decoration-none d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>Action
                                            </span>
                                            <i class="bx bx-chevron-down" id="icon"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/">Encounter Notes</a></li>
                                        <hr class="dropdown-divider" />
                                        <li><a class="dropdown-item" href="/TDCPROJECT/dashboard/medicalHistory.php">Medical History</a>
                                        </li>
                                    </ul>
                                </td>
                                 </tr>

                                 <tr>
                                     <td class="pt-4" scope="row">Wahab Khan</td>
                                     <td class="pt-4">09/22/2022 13:42</td>
                                     <td class="pt-4">09/22/2022 13:43</td>
                                     <td class="pt-4">00:00:19</td>
                                     <td class="pt-3 d-flex justify-content-center align-items-center">
                                    <a href="#" class="removebtn text-decoration-none d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>Action
                                            </span>
                                            <i class="bx bx-chevron-down" id="icon"></i>
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
</section> <?php include('./includes/footer.php') ?>