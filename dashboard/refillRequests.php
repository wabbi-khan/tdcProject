<?php include('./includes/header.php') ?> <section class="home">
    <div class="topHeader sticky-top">
        <h2>Refill Requests</h2> 
        <?php include('./includes/topHeader.php') ?>
    </div>
    <div class="padd-wrap">
<div class="medicalDetails">
<div id="MedialHistory">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="tab-link active" id="pills-patRefill-tab" data-bs-toggle="pill" data-bs-target="#pills-patRefill" type="button" role="tab" aria-controls="pills-patRefill" aria-selected="true">Patient Refills</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="tab-link" id="pills-pharRefill-tab" data-bs-toggle="pill" data-bs-target="#pills-pharRefill" type="button" role="tab" aria-controls="pills-pharRefill" aria-selected="false">Pharmacy Refills</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="tab-link" id="pills-unRefill-tab" data-bs-toggle="pill" data-bs-target="#pills-unRefill" type="button" role="tab" aria-controls="pills-unRefill" aria-selected="false">Unknown Refills</button>
                      </li>
                    
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <!-- ? patient refills -->
                      <div class="tab-pane fade show active" id="pills-patRefill" role="tabpanel" aria-labelledby="pills-patRefill-tab">
                      <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead class="py-5">
                                <tr class="py-5">
                                  <th class="py-3">Data</th>
                                  <th class="py-3">Drug</th>
                                  <th class="py-3">Patient</th>
                                  <th class="py-3">Start</th>
                                  <th class="py-3">End</th>
                                  <th class="py-3">Pharmacy</th>
                                </tr>
                              </thead>
                              <tbody class="text-center">
                                <tr>
                                  <td class="pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, soluta?</td>
                                  <td class="pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, soluta?</td>
                                  <td class="pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, soluta?</td>
                                  <td class="pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, soluta?</td>
                                  <td class="pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, commodi.</td>
                                  <td class="pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, commodi.</td>
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
                      <!-- ? pharmacy refill -->
                      <div class="tab-pane fade" id="pills-pharRefill" role="tabpanel" aria-labelledby="pills-pharRefill-tab">
                        <div id="pharRefill">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead class="py-5">
                                <tr class="py-5">
                                  <th class="py-3">Data</th>
                                  <th class="py-3">Drug</th>
                                  <th class="py-3">Patient</th>
                                  <th class="py-3">Start</th>
                                  <th class="py-3">End</th>
                                  <th class="py-3">Pharmacy</th>
                                </tr>
                              </thead>
                              <tbody class="text-center">
                                <tr>
                                  <td class="pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, soluta?</td>
                                  <td class="pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, soluta?</td>
                                  <td class="pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, soluta?</td>
                                  <td class="pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, soluta?</td>
                                  <td class="pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, commodi.</td>
                                  <td class="pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, commodi.</td>
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
                      <!-- ? unknown refill -->
                      <div class="tab-pane fade" id="pills-unRefill" role="tabpanel" aria-labelledby="pills-unRefill-tab">
                        <div id="unRefill">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead class="py-5">
                                <tr class="py-5">
                                  <th class="py-3">Data</th>
                                  <th class="py-3">Drug</th>
                                  <th class="py-3">Patient</th>
                                  <th class="py-3">Start</th>
                                  <th class="py-3">End</th>
                                  <th class="py-3">Pharmacy</th>
                                </tr>
                              </thead>
                              <tbody class="text-center">
                                <tr>
                                  <td class="pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, soluta?</td>
                                  <td class="pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, soluta?</td>
                                  <td class="pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, soluta?</td>
                                  <td class="pt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, soluta?</td>
                                  <td class="pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, commodi.</td>
                                  <td class="pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, commodi.</td>
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