<?php include('./includes/header.php') ?>
<section class="home">
    <div class="topHeader sticky-top">
        <h2>Appointment List</h2>
        <?php include('./includes/topHeader.php') ?>
    </div>
    <div class="padd-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-3 datePicker">
                    <div class="d-flex">
                        <input type="text" id="datepicker" placeholder="Select Date Here" readonly>
                        <button> <i class="fa fa-search px-1"></i> Search</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="py-5">
                            <tr class="py-5">
                                <th class="py-3" scope="col">Date</th>
                                <th class="py-3" scope="col">Patient</th>
                                <th class="py-3" scope="col">Symptop</th>
                                <th class="py-3" scope="col">Condition</th>
                                <th class="py-3" scope="col">From Time</th>
                                <th class="py-3" scope="col">To Time</th>
                                <th class="py-3" scope="col">Status</th>
                            </tr>
                        <tbody class="text-center">
                            <tr>
                                <td class="pt-4" scope="row">...
                                </td>
                                <td class="pt-4">...</td>
                                <td class="pt-4">...</td>
                                <td class="pt-4">...
                                </td>
                                <td class="pt-4">...
                                </td>
                                <td class="pt-4">...
                                </td>
                                <td class="pt-4">...
                                </td>
                            </tr>
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('./includes/footer.php') ?>