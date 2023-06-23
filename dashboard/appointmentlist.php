<?php include('./includes/header.php') ?>
<section class="home">
    <div class="topHeader sticky-top">
        <h2>Care Management</h2>
        <?php include('./includes/topHeader.php') ?>
    </div>
    <div class="padd-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-3">
                    <div class="search">
                        <i class="fa fa-search"></i>
                        <input type="date" class="form-control">
                        <button class=" btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="py-5">
                            <tr class="py-5">
                                <th class="py-3" scope="col">Name</th>
                                <th class="py-3" scope="col">Video Call</th>
                                <th class="py-3" scope="col">Message</th>
                                <th class="py-3" scope="col">Invite SMS</th>
                            </tr>
                        <tbody class="text-center">
                            <tr>
                                <td class="pt-4" scope="row">...
                                </td>
                                <td class="pt-4">...</td>
                                <td class="pt-4">...</td>
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