<?php include('./includes/header.php') ?> <section class="home">
  <div class="topHeader sticky-top">
    <h2>Medial History</h2> <?php include('./includes/topHeader.php') ?>
  </div>
  <div class="padd-wrap">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="profileCard">
            <div class="row">
              <div class="col-md-12 col-lg-8">
                <div class="d-flex align-items-center flex-wrap">
                  <div class="px-4">
                    <img src="./assets/images.png" alt="">
                  </div>
                  <div class="d-flex flex-column">
                    <span class="py-1 name">Karen Delbosquee</span>
                    <span class="py-1">
                      <span class="info">Marital Status:</span>
                      <span class="text-black-50">Married</span>
                    </span>
                    <span class="py-1">
                      <span class="info">Occupation:</span>
                      <span class="text-black-50">Student</span>
                    </span>
                    <span class="py-1">
                      <span class="info">Address:</span>
                      <span class="text-black-50">House no 1000 unit no 10</span>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-4">
                <div class="rightProfile">
                  <div class="d-flex flex-column">
                    <span class="py-1">
                      <span class="info">Gender:</span>
                      <span class="text-black-50">Male</span>
                    </span>
                    <span class="py-1">
                      <span class="info">Mobile:</span>
                      <span class="text-black-50">111-1111-1111</span>
                    </span>
                    <span class="py-1">
                      <span class="info">Email:</span>
                      <span class="text-black-50">example@gmail.com</span>
                    </span>
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
            <div class="d-flex align-items-start tabOnMob">
              <div class="nav flex-column nav-pills me-3 tabShowMob" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="tablinks mb-3 active" id="v-pills-personal-tab" data-bs-toggle="pill" data-bs-target="#v-pills-personal" type="button" role="tab" aria-controls="v-pills-personal" aria-selected="true">
                  <i class="mx-2 fa fa-user" aria-hidden="true"></i>Personal Details </button>
                <button class="tablinks mb-3" id="v-pills-history-tab" data-bs-toggle="pill" data-bs-target="#v-pills-history" type="button" role="tab" aria-controls="v-pills-history" aria-selected="false">
                  <i class="mx-2 fa fa-stethoscope" aria-hidden="true"></i>Medical History </button>
                <button class="tablinks mb-3" id="v-pills-notes-tab" data-bs-toggle="pill" data-bs-target="#v-pills-notes" type="button" role="tab" aria-controls="v-pills-notes" aria-selected="false">
                  <i class="mx-2 fa fa-book" aria-hidden="true"></i>Notes </button>
                <button class="tablinks mb-3" id="v-pills-reports-tab" data-bs-toggle="pill" data-bs-target="#v-pills-reports" type="button" role="tab" aria-controls="v-pills-reports" aria-selected="false">
                  <i class="mx-2 fa fa-sticky-note" aria-hidden="true"></i>Reports </button>
                <button class="tablinks mb-3" id="v-pills-medications-tab" data-bs-toggle="pill" data-bs-target="#v-pills-medications" type="button" role="tab" aria-controls="v-pills-medications" aria-selected="false">
                  <i class="mx-2 fa fa-medkit" aria-hidden="true"></i>Medications </button>
              </div>
              <div class="tab-content" id="v-pills-tabContent">
                <!-- ? Personal details -->
                <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                  <div id="personalDetails">
                    <div class="table-responsive">
                      <table class="table table-hover table-bordered">
                        <thead class="py-5">
                          <tr class="py-5">
                            <th class="py-3" scope="col">Data</th>
                            <th class="py-3" scope="col">Data</th>
                          </tr>
                        </thead>
                        <tbody class="ml-3">
                          <tr>
                            <td class="pt-4">Chief Complaints:</td>
                            <td class="pt-4">03/18/2023 00:00:00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- ? Medical History -->
                <div class="tab-pane fade" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab">
                  <div id="MedialHistory">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="tab-link active" id="pills-diagnos-tab" data-bs-toggle="pill" data-bs-target="#pills-diagnos" type="button" role="tab" aria-controls="pills-diagnos" aria-selected="true">Diagnosis</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="tab-link" id="pills-social-tab" data-bs-toggle="pill" data-bs-target="#pills-social" type="button" role="tab" aria-controls="pills-social" aria-selected="false">Social</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="tab-link" id="pills-relative-tab" data-bs-toggle="pill" data-bs-target="#pills-relative" type="button" role="tab" aria-controls="pills-relative" aria-selected="false">Relative</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="tab-link" id="pills-medi-tab" data-bs-toggle="pill" data-bs-target="#pills-medi" type="button" role="tab" aria-controls="pills-medi" aria-selected="false">Medications</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="tab-link" id="pills-sureScript-tab" data-bs-toggle="pill" data-bs-target="#pills-sureScript" type="button" role="tab" aria-controls="pills-sureScript" aria-selected="false">Sure Script</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <!-- ? Diagnosis -->
                      <div class="tab-pane fade show active" id="pills-diagnos" role="tabpanel" aria-labelledby="pills-diagnos-tab">
                        <div class="multiDrop">
                          <form class="container" method="GET" id="form">
                            <div class="row">
                              <div class="col-2"></div>
                              <div class="col-10" id="notifications">&nbsp;</div>
                            </div>
                            <div class="form-group row">
                              <label class="col-lg-2 col-md-12 col-form-label" for="Diagnosis">Diagnosis</label>
                              <div class="col-lg-10 col-md-12">
                                <select multiple="multiple" name="Diagnosis" id="Diagnosis" class="filter-multi-select">
                                  <option class="px-4" value="bear">Bear</option>
                                  <option class="px-4" value="ant">Ant</option>
                                  <option class="px-4" value="salamander">Salamander </option>
                                  <option class="px-4" value="owl">Owl</option>
                                  <option class="px-4" value="frog">Frog</option>
                                  <option class="px-4" value="shark">Shark</option>
                                </select>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="tableHead mt-3">ICD Codes</div>
                        <div class="row pt-4 tabRow1">
                          <div class="col-md-6 mt-4 border-end d-flex">
                            <span>
                              <input class="form-check-input" type="checkbox" value="">
                            </span>
                            <span class="inputText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate incidunt qui commodi maiores, obcaecati molestias minima quod dolorum, voluptatum iusto ut quam saepe fugit voluptatibus velit possimus sint dolore! Temporibus.</span>
                          </div>
                          <div class="col-md-6 mt-4 d-flex">
                            <span>
                              <input class="form-check-input" type="checkbox" value="">
                            </span>
                            <span class="inputText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate incidunt qui commodi maiores, obcaecati molestias minima quod dolorum, voluptatum iusto ut quam saepe fugit voluptatibus velit possimus sint dolore! Temporibus.</span>
                          </div>
                          <div class="col-md-6 mt-4 d-flex">
                            <span>
                              <input class="form-check-input" type="checkbox" value="">
                            </span>
                            <span class="inputText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate incidunt qui commodi maiores, obcaecati molestias minima quod dolorum, voluptatum iusto ut quam saepe fugit voluptatibus velit possimus sint dolore! Temporibus.</span>
                          </div>
                          <div class="col-md-6 mt-4 d-flex">
                            <span>
                              <input class="form-check-input" type="checkbox" value="">
                            </span>
                            <span class="inputText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate incidunt qui commodi maiores, obcaecati molestias minima quod dolorum, voluptatum iusto ut quam saepe fugit voluptatibus velit possimus sint dolore! Temporibus.</span>
                          </div>
                          <div class="col-md-6 mt-4 d-flex">
                            <span>
                              <input class="form-check-input" type="checkbox" value="">
                            </span>
                            <span class="inputText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate incidunt qui commodi maiores, obcaecati molestias minima quod dolorum, voluptatum iusto ut quam saepe fugit voluptatibus velit possimus sint dolore! Temporibus.</span>
                          </div>
                          <div class="col-md-6 mt-4 d-flex">
                            <span>
                              <input class="form-check-input" type="checkbox" value="">
                            </span>
                            <span class="inputText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate incidunt qui commodi maiores, obcaecati molestias minima quod dolorum, voluptatum iusto ut quam saepe fugit voluptatibus velit possimus sint dolore! Temporibus.</span>
                          </div>
                        </div>
                        <div class="row mt-4">
                          <div class="col-md-12">
                            <div class="btn removebtn">Save</div>
                          </div>
                        </div>
                      </div>
                      <!-- ? Social -->
                      <div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab">
                        <div id="social">
                          <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                              <thead class="py-5">
                                <tr class="py-5">
                                  <th class="py-3" scope="col">Social History</th>
                                  <th class="py-3" scope="col">Data</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="pt-4">Are you a?</td>
                                  <td class="pt-4">
                                    <div>
                                      <input class="form-check-input" type="radio" value="">
                                      <span>Current Smoker</span>
                                    </div>
                                    <div>
                                      <input class="form-check-input" type="radio" value="">
                                      <span>Former Smoker</span>
                                    </div>
                                    <div>
                                      <input class="form-check-input" type="radio" value="">
                                      <span>Social History</span>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Do you drink alcohol?</td>
                                  <td>
                                    <div>
                                      <input class="form-check-input" type="radio" value="">
                                      <span>Yes</span>
                                    </div>
                                    <div>
                                      <input class="form-check-input" type="radio" value="">
                                      <span>No</span>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <!-- ? Relative -->
                      <div class="tab-pane fade" id="pills-relative" role="tabpanel" aria-labelledby="pills-relative-tab">
                        <div id="relative">
                          <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                              <thead class="py-5">
                                <tr class="py-5">
                                  <th class="py-3" scope="col">Has any of your relatives had:</th>
                                  <th class="py-3" scope="col">Data</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="pt-4">
                                    <input class="form-check-input pl-1" type="checkbox" value="" onclick="toggleRowSelection(this)">
                                    <span>Social History
                                  </td>
                                  <td class="pt-4">
                                    <input type="text" class="form-control" id="exampleInput" placeholder="Enter a value" disabled="disabled">
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <!-- ? medi -->
                      <div class="tab-pane fade" id="pills-medi" role="tabpanel" aria-labelledby="pills-medi-tab">
                        <div id="medi">
                          <div class="tableHead">Are you on any medications?</div>
                          <div class="row pt-4">
                            <div class="col-md-6 mt-4 border-end">
                              <div class="d-flex justify-content-around">
                                <div>1. Any Medications?</div>
                                <div class="d-flex">
                                  <div>
                                    <span>Yes</span>
                                    <input class="form-check-input ms-1" type="radio" value="">
                                  </div>
                                  <div class="px-2">
                                    <span>No</span>
                                    <input class="form-check-input ms-1" type="radio" value="">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 mt-4">
                              <div class="d-flex justify-content-around">
                                <div>2. Do you have any allergies?</div>
                                <div class="d-flex">
                                  <div>
                                    <span>Yes</span>
                                    <input class="form-check-input ms-1" type="radio" value="">
                                  </div>
                                  <div class="px-2">
                                    <span>No</span>
                                    <input class="form-check-input ms-1" type="radio" value="">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12 mt-4 border-top">
                              <div class="mt-3 d-flex justify-content-around">
                                <div>3. Please list all hospitalizations and surgeries </div>
                                <div id="input-container">
                                  <div>
                                    <input type="text" name="input-field-1" placeholder="Write here">
                                    <button onclick="removeInput(this)">
                                      <i class="bx bx-trash"></i>Remove </button>
                                  </div>
                                  <button onclick="addInput()">Add Field</button>
                                </div>
                              </div>
                            </div>
                            <div class="row mt-4">
                              <div class="col-md-12">
                                <div class="btn removebtn">Save</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- ? sureScript -->
                      <div class="tab-pane fade" id="pills-sureScript" role="tabpanel" aria-labelledby="pills-sureScript-tab">
                        <div id="sureScript">
                          <div class="container">
                            <div class="row">
                              <div class="col-12">
                                <div class="sureScriptForm">
                                  <form>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        <label class="form-label">Insurance</label>
                                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Write here">
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label class="form-label">From Date</label>
                                        <input type="text" id="datepicker" class="form-control" placeholder="Select Date Here">
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label class="form-label">To Date</label>
                                        <input type="text" id="datepicker" class="form-control" placeholder="Select Date Here">
                                      </div>
                                    </div>
                                    <button type="submit" class="btn removebtn">Submit</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Notes -->
                <div class="tab-pane fade" id="v-pills-notes" role="tabpanel" aria-labelledby="v-pills-notes-tab">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="tab-link active" id="pills-encounter-tab" data-bs-toggle="pill" data-bs-target="#pills-encounter" type="button" role="tab" aria-controls="pills-encounter" aria-selected="true">Encounter</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="tab-link" id="pills-soap-tab" data-bs-toggle="pill" data-bs-target="#pills-soap" type="button" role="tab" aria-controls="pills-soap" aria-selected="false">Soap</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <!-- ? Encounters -->
                    <div class="tab-pane fade show active" id="pills-encounter" role="tabpanel" aria-labelledby="pills-encounter-tab">
                      <div id="encounterNotes">
                        <div class="table-responsive">
                          <table class="table table-hover table-bordered">
                            <thead class="py-5">
                              <tr class="py-5">
                                <th class="py-3 fw-normal" scope="col">Notes by</th>
                                <th class="py-3 fw-normal" scope="col">Patient</th>
                                <th class="py-3 fw-normal" scope="col">Call Start Time </th>
                                <th class="py-3 fw-normal" scope="col">Call End Time </th>
                                <th class="py-3 fw-normal" scope="col">Duration</th>
                                <th class="py-3 fw-normal" scope="col">Forward</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="pt-4">Dr. Ken West</td>
                                <td class="pt-4">Kharofk Wasilk</td>
                                <td class="pt-4">Kharofk Wasilk</td>
                                <td class="pt-4">09:32:11</td>
                                <td class="pt-4">00:00:22</td>
                                <td class="pt-4">
                                  <span class="forwareToPatient">
                                    <i class="bx bxs-send px-1"></i>Forward to Patient </span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <!-- ? Soap -->
                    <div class="tab-pane fade" id="pills-soap" role="tabpanel" aria-labelledby="pills-soap-tab">
                      <div id="soap">
                        <div class="mb-4 mt-2 search">
                          <input placeholder="Search..." type="text">
                          <button type="submit">Go</button>
                        </div>
                        <div class="soapBox">
                          <div class="tableHead mt-1 mb-2">Soap Notes Add by Wahab Khan</div>
                          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="tab-link active" id="pills-subjective-tab" data-bs-toggle="pill" data-bs-target="#pills-subjective" type="button" role="tab" aria-controls="pills-subjective" aria-selected="true">Subjective</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="tab-link" id="pills-objective-tab" data-bs-toggle="pill" data-bs-target="#pills-objective" type="button" role="tab" aria-controls="pills-objective" aria-selected="false">Objective</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="tab-link" id="pills-assessment-tab" data-bs-toggle="pill" data-bs-target="#pills-assessment" type="button" role="tab" aria-controls="pills-assessment" aria-selected="false">Assessment</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="tab-link" id="pills-plan-tab" data-bs-toggle="pill" data-bs-target="#pills-plan" type="button" role="tab" aria-controls="pills-plan" aria-selected="false">Plav</button>
                            </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <!-- Subjective -->
                            <div class="tab-pane fade show active" id="pills-subjective" role="tabpanel" aria-labelledby="pills-subjective-tab">
                              <div id="subjective">
                                <div class="container">
                                  <div class="row">
                                    <div class="table-responsive">
                                      <table class="table table-hover custom-table table-bordered">
                                        <!-- <thead class="py-5"><tr class="py-5"><th class="py-3" scope="col">
                                                                                            Data</th><th class="py-3" scope="col">
                                                                                            Data</th></tr></thead> -->
                                        <tbody class="ml-3">
                                          <tr>
                                            <th class="w-50 pt-4">Chief Complaints:</th>
                                            <td class="w-50 pt-4">ABC</td>
                                          </tr>
                                          <tr>
                                            <th class="w-50 pt-4"> Additional Symptom Explanation:</th>
                                            <td class="w-50 pt-4">ABC</td>
                                          </tr>
                                          <tr>
                                            <th class="w-50 pt-4"> Symptoms: </th>
                                            <td class="pt-4">ABC</td>
                                          </tr>
                                          <tr>
                                            <th class="w-50 pt-4">Subjective :</th>
                                            <td class="w-50 pt-4">ABC</td>
                                          </tr>
                                          <tr>
                                            <th class="w-50 pt-4"> Level of Pain:</th>
                                            <td class="w-50 pt-4">ABC</td>
                                          </tr>
                                          <tr>
                                            <th class="w-50 pt-4"> Area of Pain:</th>
                                            <td class="w-50 pt-4">ABC</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <!-- <div class="tableHead mt-1 mb-2">Soap Notes
                                                                                Add by Wahab Khan</div> -->
                                    </div>
                                    <div class="table-responsive">
                                      <div class="tableHead mt-3">Medical History </div>
                                      <table class="table table-hover custom-table table-bordered">
                                        <!-- <thead class="py-5"><tr class="py-5"><th class="py-3" scope="col">
                                                                                            Data</th><th class="py-3" scope="col">
                                                                                            Data</th></tr></thead> -->
                                        <tbody class="ml-3">
                                          <tr>
                                            <th class="w-50 pt-4">Medical: </th>
                                            <td class="w-50 pt-4">ABC</td>
                                          </tr>
                                          <tr>
                                            <th class="w-50 pt-4"> Social </th>
                                            <td class="w-50 pt-4">ABC</td>
                                          </tr>
                                          <tr>
                                            <th class="w-50 pt-4"> Other: </th>
                                            <td class="pt-4">ABC</td>
                                          </tr>
                                          <tr>
                                            <th class="w-50 pt-4">Family History :</th>
                                            <td class="w-50 pt-4">ABC</td>
                                          </tr>
                                          <tr>
                                            <th class="w-50 pt-4"> Medicaltions:</th>
                                            <td class="w-50 pt-4">ABC</td>
                                          </tr>
                                          <tr>
                                            <th class="w-50 pt-4"> Allergies:</th>
                                            <td class="w-50 pt-4">ABC</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- objective -->
                            <div class="tab-pane fade show " id="pills-objective" role="tabpanel" aria-labelledby="pills-objective-tab"> objective </div>
                            <!-- assessment -->
                            <div class="tab-pane fade show " id="pills-assessment" role="tabpanel" aria-labelledby="pills-assessment-tab"> assessment </div>
                            <!-- objective -->
                            <div class="tab-pane fade show " id="pills-plan" role="tabpanel" aria-labelledby="pills-plan-tab"> plan </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Reports -->
                <div class="tab-pane fade" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
                  <div id="reports" class="tabcontent">
                    <form class="container">
                      <div class="row">
                        <div class=" multiDrop">
                          <div class="col-lg-5">
                            <input type="text" class="form-control" placeholder="Enter folder name">
                          </div>
                          <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </div>
                    </form>
                    <div class="table-responsive mt-2">
                      <table class="table table-hover table-bordered">
                        <thead class="py-5">
                          <tr class="py-5">
                            <th class="py-3" scope="col">Name</th>
                            <th class="py-3" scope="col">Kind</th>
                          </tr>
                        </thead>
                        <tbody class="ml-3">
                          <tr>
                            <td class="pt-4">...</td>
                            <td class="pt-4">...</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- Medications -->
                <div class="tab-pane fade" id="v-pills-medications" role="tabpanel" aria-labelledby="v-pills-medications-tab">
                  <div id="medications" class="tabcontent">
                    <div class="table-responsive">
                      <table class="table table-hover table-bordered">
                        <thead class="py-5">
                          <tr class="py-5">
                            <th class="py-3" scope="col">Vitals</th>
                            <th class="py-3" scope="col">Diagnosis</th>
                            <th class="py-3" scope="col">Treatment</th>
                          </tr>
                        </thead>
                        <tbody class="ml-3">
                          <tr>
                            <td class="pt-4">...</td>
                            <td class="pt-4">...</td>
                            <td class="pt-4">...</td>
                          </tr>
                          <tr>
                            <td class="pt-4">...</td>
                            <td class="pt-4">...</td>
                            <td class="pt-4">...</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<script>
  // ? JS for whole select row selected 
  function toggleRowSelection(e) {
    var t = e.closest("tr"),
      n = t.querySelector('input[type="text"]');
    e.checked ? (t.classList.add("selected-row"), n.disabled = !1) : (t.classList.remove("selected-row"), n.disabled = !0)
  }
  //  ? JS for dynamic input field add or remove
  var counter = 1;

  function addInput() {
    counter++;
    var e = document.getElementById("input-container"),
      t = document.createElement("input");
    t.type = "text", t.name = "input-field-" + counter, t.placeholder = "write here";
    var n = document.createElement("button");
    n.innerHTML = ' < i class = "bx bx-trash" >< script / i > Remove ', n.onclick = function() {
      removeInput(this)
    };
    var r = document.createElement("div");
    r.appendChild(t), r.appendChild(n), e.insertBefore(r, e.firstChild)
  }

  function removeInput(e) {
    var t = e.parentNode;
    t.parentNode.removeChild(t)
  }
</script> <?php include('./includes/footer.php') ?>