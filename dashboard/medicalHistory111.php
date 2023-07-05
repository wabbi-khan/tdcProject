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
                        <div class="tab">
                            <button class="tablinks mb-3" onclick='openCity(event,"personalDetails")' id="defaultOpen">
                                <i class="mx-2 fa fa-user" aria-hidden="true"></i>Personal Details </button>
                            <button class="tablinks mb-3" onclick='openCity(event,"MedialHistory")'>
                                <i class="mx-2 fa fa-stethoscope" aria-hidden="true"></i>Medical History </button>
                            <button class="tablinks mb-3" onclick='openCity(event,"notes")'>
                                <i class="mx-2 fa fa-book" aria-hidden="true"></i>Notes </button>
                            <button class="tablinks mb-3" onclick='openCity(event,"reports")'>
                                <i class="mx-2 fa fa-sticky-note" aria-hidden="true"></i>Reports </button>
                            <button class="tablinks mb-3" onclick='openCity(event,"medications")'>
                                <i class="mx-2 fa fa-medkit" aria-hidden="true"></i>Medications </button>
                        </div>
                        <div id="personalDetails" class="tabcontent">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead class="py-5">
                                        <tr class="py-5">
                                            <th class="py-3" scope="col">Data</th>
                                            <th class="py-3" scope="col">Data</th>
                                        </tr>
                                    <tbody class="ml-3">
                                        <tr>
                                            <td class="pt-4">Chief Complaints:</td>
                                            <td class="pt-4">03/18/2023 00:00:00</td>
                                        </tr>
                                        <tr>
                                            <td class="pt-4">Chief Complaints:</td>
                                            <td class="pt-4">03/18/2023 00:00:00</td>
                                        </tr>
                                        <tr>
                                            <td class="pt-4">Chief Complaints:</td>
                                            <td class="pt-4">03/18/2023 00:00:00</td>
                                        </tr>
                                        <tr>
                                            <td class="pt-4">Chief Complaints:</td>
                                            <td class="pt-4">03/18/2023 00:00:00</td>
                                        </tr>
                                        <tr>
                                            <td class="pt-4">Chief Complaints:</td>
                                            <td class="pt-4">03/18/2023 00:00:00</td>
                                        </tr>
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
                                </table>
                            </div>
                        </div>
                        <div id="MedialHistory" class="tabcontent">
                            <div class="tabs-container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="tabs">
                                            <li>
                                                <button data-tab="tab1" class="tab-link current">Diagnosis</button>
                                            </li>
                                            <li>
                                                <button data-tab="tab2" class="tab-link">Social</button>
                                            </li>
                                            <li>
                                                <button data-tab="tab3" class="tab-link">Relative</button>
                                            </li>
                                            <li>
                                                <button data-tab="tab4" class="tab-link">Medications</button>
                                            </li>
                                            <li>
                                                <button data-tab="tab5" class="tab-link">Sure Script</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="tab1" class="tab-content current">
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
                                                        <option class="px-4" value="salamander">Salamander</option>
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
                                            <span class="inputText">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Cupiditate incidunt qui commodi maiores, obcaecati molestias
                                                minima quod dolorum, voluptatum iusto ut quam saepe fugit voluptatibus
                                                velit possimus sint dolore! Temporibus.</span>
                                        </div>
                                        <div class="col-md-6 mt-4 d-flex">
                                            <span>
                                                <input class="form-check-input" type="checkbox" value="">
                                            </span>
                                            <span class="inputText">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Cupiditate incidunt qui commodi maiores, obcaecati molestias
                                                minima quod dolorum, voluptatum iusto ut quam saepe fugit voluptatibus
                                                velit possimus sint dolore! Temporibus.</span>
                                        </div>
                                        <div class="col-md-6 mt-4 d-flex">
                                            <span>
                                                <input class="form-check-input" type="checkbox" value="">
                                            </span>
                                            <span class="inputText">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Cupiditate incidunt qui commodi maiores, obcaecati molestias
                                                minima quod dolorum, voluptatum iusto ut quam saepe fugit voluptatibus
                                                velit possimus sint dolore! Temporibus.</span>
                                        </div>
                                        <div class="col-md-6 mt-4 d-flex">
                                            <span>
                                                <input class="form-check-input" type="checkbox" value="">
                                            </span>
                                            <span class="inputText">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Cupiditate incidunt qui commodi maiores, obcaecati molestias
                                                minima quod dolorum, voluptatum iusto ut quam saepe fugit voluptatibus
                                                velit possimus sint dolore! Temporibus.</span>
                                        </div>
                                        <div class="col-md-6 mt-4 d-flex">
                                            <span>
                                                <input class="form-check-input" type="checkbox" value="">
                                            </span>
                                            <span class="inputText">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Cupiditate incidunt qui commodi maiores, obcaecati molestias
                                                minima quod dolorum, voluptatum iusto ut quam saepe fugit voluptatibus
                                                velit possimus sint dolore! Temporibus.</span>
                                        </div>
                                        <div class="col-md-6 mt-4 d-flex">
                                            <span>
                                                <input class="form-check-input" type="checkbox" value="">
                                            </span>
                                            <span class="inputText">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Cupiditate incidunt qui commodi maiores, obcaecati molestias
                                                minima quod dolorum, voluptatum iusto ut quam saepe fugit voluptatibus
                                                velit possimus sint dolore! Temporibus.</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <div class="btn btn-primary">Save</div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab2" class="tab-content">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead class="py-5">
                                                <tr class="py-5">
                                                    <th class="py-3" scope="col">Social History</th>
                                                    <th class="py-3" scope="col">Data</th>
                                                </tr>
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
                                <div id="tab3" class="tab-content">
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
                                <div id="tab4" class="tab-content">
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
                                                <div>3. Please list all hospitalizations and surgeries</div>
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
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <div class="btn btn-primary">Save</div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab5" class="tab-content">
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
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="notes" class="tabcontent">
                            <div class="tabs-container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="tabs">
                                            <li>
                                                <button data-tab="encounterNotes" class="tab-link current">Encounter
                                                    Notes</button>
                                            </li>
                                            <li>
                                                <button data-tab="soapNotes" class="tab-link">Soap Notes</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="encounterNotes" class="tab-content current">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead class="py-5">
                                                <tr class="py-5">
                                                    <th class="py-3 fw-normal" scope="col">Notes by</th>
                                                    <th class="py-3 fw-normal" scope="col">Patient</th>
                                                    <th class="py-3 fw-normal" scope="col">Call Start Time</th>
                                                    <th class="py-3 fw-normal" scope="col">Call End Time</th>
                                                    <th class="py-3 fw-normal" scope="col">Duration</th>
                                                    <th class="py-3 fw-normal" scope="col">Forward</th>
                                                </tr>
                                            <tbody>
                                                <tr>
                                                    <td class="pt-4">Dr. Ken West</td>
                                                    <td class="pt-4">Kharofk Wasilk</td>
                                                    <td class="pt-4">Kharofk Wasilk</td>
                                                    <td class="pt-4">09:32:11</td>
                                                    <td class="pt-4">00:00:22</td>
                                                    <td class="pt-4">
                                                        <span class="forwareToPatient">
                                                            <i class="bx bxs-send"></i>Forward to Patient </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="soapNotes" class="tab-content">
                                    <div class="tabs-container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="tabs">
                                                    <li>
                                                        <button data-tab="subjective" class="tab-link current">Subjective</button>
                                                    </li>
                                                    <li>
                                                        <button data-tab="tab2" class="tab-link">Objective</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="subjective" class="tab-content current">
                                            <div class="row pt-4 tabRow1">
                                                <div class="col-md-6 mt-4 border-end d-flex">
                                                    <span>
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </span>
                                                    <span class="inputText">Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Cupiditate incidunt qui commodi maiores,
                                                        obcaecati molestias minima quod dolorum, voluptatum iusto ut
                                                        quam saepe fugit voluptatibus velit possimus sint dolore!
                                                        Temporibus.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <tbody class="ml-3">
                                        <tr>
                                            <td class="pt-4">...</td>
                                            <td class="pt-4">...</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="medications" class="tabcontent">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead class="py-5">
                                        <tr class="py-5">
                                            <th class="py-3" scope="col">Vitals</th>
                                            <th class="py-3" scope="col">Diagnosis</th>
                                            <th class="py-3" scope="col">Treatment</th>
                                        </tr>
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
</section>
<script>
    // tabs
    document.addEventListener("DOMContentLoaded", function() {
        const tabLinks = document.querySelectorAll(".tab-link");
        const tabContents = document.querySelectorAll(".tab-content");
        tabLinks.forEach(function(tabLink) {
            tabLink.addEventListener("click", function() {
                const tabId = this.getAttribute("data-tab");
                // Remove 'current' class from all tabs and tab contents
                tabLinks.forEach(function(link) {
                    link.classList.remove("current");
                });
                tabContents.forEach(function(content) {
                    content.classList.remove("current");
                });
                // Add 'current' class to the clicked tab and corresponding tab content
                this.classList.add("current");
                document.getElementById(tabId).classList.add("current");
            });
        });
    });
</script>
<script>
    function toggleRowSelection(e) {
        var t = e.closest("tr"),
            n = t.querySelector('input[type="text"]');
        e.checked ? (t.classList.add("selected-row"), n.disabled = !1) : (t.classList.remove("selected-row"), n.disabled = !
            0)
    }
    var counter = 1;

    function addInput() {
        counter++;
        var e = document.getElementById("input-container"),
            t = document.createElement("input");
        t.type = "text", t.name = "input-field-" + counter, t.placeholder = "write here";
        var n = document.createElement("button");
        n.innerHTML = ' < i class = "bx bx-trash" > < /i> Remove', n.onclick = function() {
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