<?php include('./includes/header.php') ?> <section class="home">
    <div class="topHeader sticky-top">
        <h2>Prescriptions</h2> 
        <?php include('./includes/topHeader.php') ?>
    </div>
    <div class="padd-wrap">
<div class="medicalDetails">
<div id="MedialHistory">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="tab-link active" id="pills-prescription-tab" data-bs-toggle="pill" data-bs-target="#pills-prescription" type="button" role="tab" aria-controls="pills-prescription" aria-selected="true">Prescription by Doc</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="tab-link" id="pills-req-tab" data-bs-toggle="pill" data-bs-target="#pills-req" type="button" role="tab" aria-controls="pills-req" aria-selected="false">De Active/Canceled Prescription Req</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="tab-link" id="pills-cp-tab" data-bs-toggle="pill" data-bs-target="#pills-cp" type="button" role="tab" aria-controls="pills-cp" aria-selected="false">Prescription CP</button>
                      </li>
                    
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <!-- ? By Doc -->
                      <div class="tab-pane fade show active" id="pills-prescription" role="tabpanel" aria-labelledby="pills-prescription-tab">
                      <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead class="py-5">
                                <tr class="py-5">
                                  <th class="py-3">Data</th>
                                  <th class="py-3">Patient</th>
                                  <th class="py-3">Medication</th>
                                  <th class="py-3">Status</th>
                                  <th class="py-3">Action</th>
                                </tr>
                              </thead>
                              <tbody class="text-center">
                                <tr>
                                  <td class="pt-4">27/07/2023</td>
                                  <td class="pt-4">Wahab Khan</td>
                                  <td class="pt-4">...</td>
                                  <td class="pt-4">Active</td>
                                  <td class="pt-3 d-flex justify-content-center align-items-center">
                                    <a href="#" class="removebtn text-decoration-none d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>Action
                                            </span>
                                            <i class="bx bx-chevron-down" id="icon"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Cancel</a></li>
                                        <!-- <hr class="dropdown-divider" /> -->
                                        <!-- <li><a class="dropdown-item" href="#">Messages</a> -->
                                        <!-- </li> -->
                                    </ul>
                                </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        <div class="row mt-4">
                          <div class="col-md-12">
                            <div class="btn removebtn">Save</div>
                          </div>
                        </div>
                      </div>
                      <!-- ? Req -->
                      <div class="tab-pane fade" id="pills-req" role="tabpanel" aria-labelledby="pills-req-tab">
                        <div id="req">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead class="py-5">
                                <tr class="py-5">
                                  <th class="py-3">Data</th>
                                  <th class="py-3">Patient</th>
                                  <th class="py-3">Medication</th>
                                  <th class="py-3">Status</th>
                                  <th class="py-3">Action</th>
                                </tr>
                              </thead>
                              <tbody class="text-center">
                                <tr>
                                  <td class="pt-4">27/07/2023</td>
                                  <td class="pt-4">Wahab Khan</td>
                                  <td class="pt-4">...</td>
                                  <td class="pt-4">Active</td>
                                  <td class="pt-3 d-flex justify-content-center align-items-center">
                                    <a href="#" class="removebtn text-decoration-none d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>Action
                                            </span>
                                            <i class="bx bx-chevron-down" id="icon"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Cancel</a></li>
                                        <!-- <hr class="dropdown-divider" /> -->
                                        <!-- <li><a class="dropdown-item" href="#">Messages</a> -->
                                        <!-- </li> -->
                                    </ul>
                                </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        <div class="row mt-4">
                          <div class="col-md-12">
                            <div class="btn removebtn">Save</div>
                          </div>
                        </div>
                        </div>
                      </div>
                      <!-- ? CP -->
                      <div class="tab-pane fade" id="pills-cp" role="tabpanel" aria-labelledby="pills-cp-tab">
                        <div id="cp">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead class="py-5">
                                <tr class="py-5">
                                  <th class="py-3">Data</th>
                                  <th class="py-3">Patient</th>
                                  <th class="py-3">Medication</th>
                                  <th class="py-3">Status</th>
                                  <th class="py-3">Action</th>
                                </tr>
                              </thead>
                              <tbody class="text-center">
                                <tr>
                                  <td class="pt-4">27/07/2023</td>
                                  <td class="pt-4">Wahab Khan</td>
                                  <td class="pt-4">...</td>
                                  <td class="pt-4">Active</td>
                                  <td class="pt-3 d-flex justify-content-center align-items-center">
                                    <a href="#" class="removebtn text-decoration-none d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>Action
                                            </span>
                                            <i class="bx bx-chevron-down" id="icon"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Cancel</a></li>
                                        <!-- <hr class="dropdown-divider" /> -->
                                        <!-- <li><a class="dropdown-item" href="#">Messages</a> -->
                                        <!-- </li> -->
                                    </ul>
                                </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        <div class="row mt-4">
                          <div class="col-md-12">
                            <div class="btn removebtn">Save</div>
                          </div>
                        </div>
                        </div>
                      </div>
                     
                    </div>
                  </div>
</div>
   
    </div>
</section> <?php include('./includes/footer.php') ?>