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
                                <div class="d-flex align-items-center flex-wrap">
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
                                    <li> <button data-tab="tab1" class="tab-link current"> Diagnosis</button></li>
                                    <li> <button data-tab="tab2" class="tab-link"> Social</button></li>
                                    <li> <button data-tab="tab3" class="tab-link"> Relative</button></li>
                                    <li> <button data-tab="tab4" class="tab-link"> Medications</button></li>
                                    <li> <button data-tab="tab5" class="tab-link"> Sure Script</button></li>
                                </ul>

                                <div id="tab1" class="tab-content current">
                                    <div class="tableHead">
                                        Data
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-md-6 mt-4 border-end d-flex">
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
                                        <div class="col-md-6 mt-4 d-flex">
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
                                        <div class="col-md-6 mt-4 d-flex">
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
                                        <div class="col-md-6 mt-4 d-flex">
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
                                            <tbody>
                                                <tr>
                                                    <td class="pt-4">
                                                        <input class="form-check-input pl-1" type="checkbox" value=""
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
                                    <div class="tableHead">
                                        Are you on any medications?

                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-md-6 mt-4 border-end ">
                                            <div class="d-flex justify-content-around">

                                                <div>1. Any Medications?
                                                </div>
                                                <div class="d-flex">
                                                    <div>

                                                        <span>Yes</span><input class="form-check-input ms-1"
                                                            type="radio" value="" />
                                                    </div>
                                                    <div class="px-2">

                                                        <span>No</span><input class="form-check-input ms-1" type="radio"
                                                            value="" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-4">
                                            <div class="d-flex justify-content-around">

                                                <div>2. Do you have any allergies?

                                                </div>
                                                <div class="d-flex">
                                                    <div>

                                                        <span>Yes</span><input class="form-check-input ms-1"
                                                            type="radio" value="" />
                                                    </div>
                                                    <div class="px-2">

                                                        <span>No</span><input class="form-check-input ms-1" type="radio"
                                                            value="" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-4">
                                            <div class="d-flex justify-content-around">

                                                <div>
                                                    3. Please list all hospitalizations and surgeries

                                                </div>
                                                <div id="input-container">
                                                    <div>

                                                        <input type="text" name="input-field-1"
                                                            placeholder="Write here">
                                                        <button onclick="removeInput(this)">
                                                            <i class='bx bx-trash'></i>
                                                            Remove
                                                        </button>
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
// if check select whole row
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

// dynamically add remove input field
var counter = 1;

function addInput() {
    counter++;

    var inputContainer = document.getElementById("input-container");

    var newInput = document.createElement("input");
    newInput.type = "text";
    newInput.name = "input-field-" + counter;
    newInput.placeholder = "write here";

    var removeButton = document.createElement("button");
    removeButton.innerHTML = '<i class="bx bx-trash"></i> Remove';
    removeButton.onclick = function() {
        removeInput(this);
    };

    var newDiv = document.createElement("div");
    newDiv.appendChild(newInput);
    newDiv.appendChild(removeButton);

    inputContainer.insertBefore(newDiv, inputContainer.firstChild);
}

function removeInput(button) {
    var divToRemove = button.parentNode;
    divToRemove.parentNode.removeChild(divToRemove);
}
</script>
<?php include('./includes/footer.php') ?>