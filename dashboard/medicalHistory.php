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
                            <button class="tablinks mb-3" onclick="openCity(event, 'personalDetails')"
                                id="defaultOpen"><i class="mx-2 fa fa-user" aria-hidden="true"></i>
                                Personal
                                Details</button>
                            <button class="tablinks mb-3" onclick="openCity(event, 'MedialHistory')"><i
                                    class="mx-2 fa fa-stethoscope" aria-hidden="true"></i>
                                Medical
                                History</button>
                            <button class="tablinks mb-3" onclick="openCity(event, 'notes')"><i class="mx-2 fa fa-book"
                                    aria-hidden="true"></i>
                                Notes</button>
                            <button class="tablinks mb-3" onclick="openCity(event, 'reports')"><i
                                    class="mx-2 fa fa-sticky-note" aria-hidden="true"></i>
                                Reports</button>
                            <button class="tablinks mb-3" onclick="openCity(event, 'medications')"><i
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
                                    <tbody class="ml-3">
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
                            <div class="tabs-container">
                                <ul class="tabs">
                                    <li class="tab-link current" data-tab="tab1">Diagnosis</li>
                                    <li class="tab-link" data-tab="tab2">Social</li>
                                    <li class="tab-link" data-tab="tab3">Relative</li>
                                    <li class="tab-link" data-tab="tab4">Medications</li>
                                    <li class="tab-link" data-tab="tab5">Sure Script</li>
                                </ul>

                                <div id="tab1" class="tab-content current">
                                    <div class="tableHead">
                                        Data
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-6 border-end d-flex">
                                            <span> <input class="form-check-input" type="checkbox" value="" />
                                            </span>
                                            <span class="inputText">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit.
                                                Cupiditate incidunt qui commodi maiores, obcaecati molestias minima quod
                                                dolorum, voluptatum iusto ut quam saepe fugit voluptatibus velit
                                                possimus
                                                sint dolore! Temporibus.
                                            </span>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <span> <input class="form-check-input" type="checkbox" value="" />
                                            </span>
                                            <span class="inputText">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit.
                                                Cupiditate incidunt qui commodi maiores, obcaecati molestias minima quod
                                                dolorum, voluptatum iusto ut quam saepe fugit voluptatibus velit
                                                possimus
                                                sint dolore! Temporibus.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
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
                                            <tbody class="">
                                                <tr>
                                                    <td class="pt-4">Are you a?
                                                    </td>
                                                    <td class="pt-4">
                                                        <div>

                                                            <input class="form-check-input" type="radio" value="" />
                                                            <span> Current Smoker
                                                            </span>
                                                        </div>
                                                        <div>

                                                            <input class="form-check-input" type="radio" value="" />
                                                            <span> Former Smoker
                                                            </span>
                                                        </div>
                                                        <div>

                                                            <input class="form-check-input" type="radio" value="" />
                                                            <span> Social History

                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Do you drink alcohol?
                                                    </td>
                                                    <td>
                                                        <div>

                                                            <input class="form-check-input" type="radio" value="" />
                                                            <span> Yes
                                                            </span>
                                                        </div>
                                                        <div>

                                                            <input class="form-check-input" type="radio" value="" />
                                                            <span> No
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>


                                            </tbody>
                                            </thead>
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
                                            <tbody class="">
                                                <tr>
                                                    <td class="pt-4">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            onclick="toggleRowSelection(this)" />
                                                        <span> Social History
                                                    </td>
                                                    <td class="pt-4">
                                                        <input type="text" class="form-control" id="exampleInput"
                                                            placeholder="Enter a value" disabled>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="tab4" class="tab-content">
                                    Content for Tab 4
                                </div>
                                <div id="tab5" class="tab-content">
                                    Content for Tab 5
                                </div>
                            </div>
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

<script>
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
function toggleRowSelection(checkbox) {
    var row = checkbox.closest('tr');
    var inputField = row.querySelector('input[type="text"]');

    if (checkbox.checked) {
        row.classList.add('selected-row');
        inputField.disabled = false;
    } else {
        row.classList.remove('selected-row');
        inputField.disabled = true;
    }
}
</script>
<?php include('./includes/footer.php') ?>