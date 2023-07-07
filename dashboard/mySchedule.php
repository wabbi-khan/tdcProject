<?php include('./includes/header.php') ?>
<section class="home">
    <div class="topHeader sticky-top">
        <h2>My Schedule
        </h2>
        <?php include('./includes/topHeader.php') ?>
    </div>
    <div class="padd-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-3 datePicker">
                    <div class="d-flex">
                        <input type="text" id="datepicker" placeholder="Select Start Date" readonly>
                        <input type="text" class="mx-4" id="datepicker" placeholder="Select End Date" readonly>
                    </div>
                </div>
            </div>
            <form action="">

                <div class="row">
                    <div class="col-md-12">
                        <div class="mySchedule">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="py-5">
                                        <tr class="py-5">
                                            <th>#</th>
                                            <th class="py-3" scope="col">Day</th>
                                            <th class="py-3" scope="col">Morning</th>
                                            <th class="py-3" scope="col">Evening</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>
                                                <input class="form-check-input wholeselect mx-1" type="checkbox" value="" />
                                            </td>
                                            <td scope="row">
                                                Monday
                                            </td>
                                            <td>
                                                <input class="form-check-input mx-1 mt-2 morningselect" type="checkbox" value="" />
                                                <input type="text" class="form-control timePicker morningtime" id="morningtime1" disabled placeholder="Select time here" />
                                            </td>
                                            <td>
                                                <input class="form-check-input mx-1 mt-2 eveningselect" type="checkbox" value="" />
                                                <input type="text" class="form-control timePicker eveningtime" id="eveningtime1" disabled placeholder="Select time here" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                                <input class="form-check-input wholeselect mx-1" type="checkbox" value="" />
                                            </td>
                                            <td scope="row">
                                                Tuesday
                                            </td>
                                            <td>
                                                <input class="form-check-input mx-1 mt-2 morningselect" type="checkbox" value="" />
                                                <input type="text" class="form-control timePicker morningtime" id="morningtime1" disabled placeholder="Select time here" />
                                            </td>
                                            <td>
                                                <input class="form-check-input mx-1 mt-2 eveningselect" type="checkbox" value="" />
                                                <input type="text" class="form-control timePicker eveningtime" id="eveningtime1" disabled placeholder="Select time here" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                                <input class="form-check-input wholeselect mx-1" type="checkbox" value="" />
                                            </td>
                                            <td scope="row">
                                                Wednesday
                                            </td>
                                            <td>
                                                <input class="form-check-input mx-1 mt-2 morningselect" type="checkbox" value="" />
                                                <input type="text" class="form-control timePicker morningtime" id="morningtime1" disabled placeholder="Select time here" />
                                            </td>
                                            <td>
                                                <input class="form-check-input mx-1 mt-2 eveningselect" type="checkbox" value="" />
                                                <input type="text" class="form-control timePicker eveningtime" id="eveningtime1" disabled placeholder="Select time here" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                                <input class="form-check-input wholeselect mx-1" type="checkbox" value="" />
                                            </td>
                                            <td scope="row">
                                                Thursday
                                            </td>
                                            <td>
                                                <input class="form-check-input mx-1 mt-2 morningselect" type="checkbox" value="" />
                                                <input type="text" class="form-control timePicker morningtime" id="morningtime1" disabled placeholder="Select time here" />
                                            </td>
                                            <td>
                                                <input class="form-check-input mx-1 mt-2 eveningselect" type="checkbox" value="" />
                                                <input type="text" class="form-control timePicker eveningtime" id="eveningtime1" disabled placeholder="Select time here" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>

                                                <input class="form-check-input wholeselect mx-1" type="checkbox" value="" />
                                            </td>
                                            <td scope="row">
                                                Friday
                                            </td>
                                            <td>
                                                <input class="form-check-input mx-1 mt-2 morningselect" type="checkbox" value="" />
                                                <input type="text" class="form-control timePicker morningtime" id="morningtime1" disabled placeholder="Select time here" />
                                            </td>
                                            <td>
                                                <input class="form-check-input mx-1 mt-2 eveningselect" type="checkbox" value="" />
                                                <input type="text" class="form-control timePicker eveningtime" id="eveningtime1" disabled placeholder="Select time here" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-check-input wholeselect mx-1" type="checkbox" value="" />
                                            </td>
                                            <td scope="row">
                                                Saturday
                                            </td>
                                            <td>
                                                <input class="form-check-input mx-1 mt-2 morningselect" type="checkbox" value="" />
                                                <input type="text" class="form-control timePicker morningtime" id="morningtime1" disabled placeholder="Select time here" />
                                            </td>
                                            <td>
                                                <input class="form-check-input mx-1 mt-2 eveningselect" type="checkbox" value="" />
                                                <input type="text" class="form-control timePicker eveningtime" id="eveningtime1" disabled placeholder="Select time here" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end mx-2 mb-2">

                                <div class=" btn removebtn">
                                    Save
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var wholeSelectCheckboxes = document.querySelectorAll(".wholeselect");
        var morningSelectCheckboxes =
            document.querySelectorAll(".morningselect");
        var eveningSelectCheckboxes =
            document.querySelectorAll(".eveningselect");
        var morningTimeInputs = document.querySelectorAll(".morningtime");
        var eveningTimeInputs = document.querySelectorAll(".eveningtime");

        for (var i = 0; i < wholeSelectCheckboxes.length; i++) {
            wholeSelectCheckboxes[i].addEventListener("click", function() {
                var row = this.parentNode.parentNode;
                var morningSelectCheckbox = row.querySelector(".morningselect");
                var eveningSelectCheckbox = row.querySelector(".eveningselect");
                var morningTimeInput = row.querySelector(".morningtime");
                var eveningTimeInput = row.querySelector(".eveningtime");

                if (this.checked) {
                    row.classList.add("selected");
                    morningSelectCheckbox.checked = true;
                    eveningSelectCheckbox.checked = true;
                    morningTimeInput.disabled = false;
                    eveningTimeInput.disabled = false;
                } else {
                    row.classList.remove("selected");
                    morningSelectCheckbox.checked = false;
                    eveningSelectCheckbox.checked = false;
                    morningTimeInput.disabled = true;
                    eveningTimeInput.disabled = true;
                }
            });
        }

        for (var i = 0; i < morningSelectCheckboxes.length; i++) {
            morningSelectCheckboxes[i].addEventListener("click", function() {
                var row = this.parentNode.parentNode;
                var morningTimeInput = row.querySelector(".morningtime");
                morningTimeInput.disabled = !this.checked;
            });
        }

        for (var i = 0; i < eveningSelectCheckboxes.length; i++) {
            eveningSelectCheckboxes[i].addEventListener("click", function() {
                var row = this.parentNode.parentNode;
                var eveningTimeInput = row.querySelector(".eveningtime");
                eveningTimeInput.disabled = !this.checked;
            });
        }

        flatpickr(".morningtime", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            disableMobile: true,
            onReady: function(selectedDates, dateStr, instance) {
                var input = instance.input;
                input.removeAttribute("readonly");
                input.classList.remove("form-control");
            },
        });

        flatpickr(".eveningtime", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            disableMobile: true,
            onReady: function(selectedDates, dateStr, instance) {
                var input = instance.input;
                input.removeAttribute("readonly");
                input.classList.remove("form-control");
            },
        });
    });
</script>
<?php include('./includes/footer.php') ?>