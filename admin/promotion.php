<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Promotion';
    $promotion_page = 'active';
    require_once('../include/head.php');
?>
<body>
    <?php
        require_once('../include/header.admin.php')
    ?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php
                    require_once('../include/sidepanel.php')
                ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <h2 class="h3 brand-color pt-3 pb-2">Promotion</h2>
                    <div class="table-responsive overflow-hidden">
                        <div class="row g-2 mb-2 m-0">
                            <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
                            <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0 ms-lg-auto">
                                <select name="discount-type" id="discount-type" class="form-select me-md-2">
                                    <option value="">All Discount Types</option>
                                    <option value="Manager">Fixed</option>
                                    <option value="Staff">Percentage</option>
                                </select>
                            </div>
                            <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
                                <div class="input-group">
                                    <input type="text" name="keyword" id="keyword" placeholder="Search Voucher" class="form-control">
                                    <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class="fa fa-search color-white" aria-hidden="true"></i></button>
                                </div>
                                <button class="btn btn-outline-secondary btn-add" type="button" data-bs-toggle="modal" data-bs-target="#addPromotionModal"><i class="fa fa-plus brand-color" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <div id="table-container">
                        <table id="promotion" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Voucher Name</th>
                                    <th scope="col">Discount Type</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Minimum Spend</th>
                                    <th scope="col">Slot</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Updated at</th>
                                    <th scope="col" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="promotionTableBody">
                            <!-- The promotion data will be loaded here via AJAX -->
                            </tbody>
                        </table>
                            
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="addPromotionModal" tabindex="-1" aria-labelledby="addPromotionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPromotionModalLabel">Add Voucher</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        <div class="mb-2">
                            <label for="voucherName" class="form-label">Voucher Name</label>
                            <input type="text" class="form-control" id="voucherName" name="voucherName" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="discountType" class="form-label">Discount Type</label>
                            <select name="discountType" id="discountType" class="form-select">
                                <option value="">Select Discount Type</option>
                                <option value="Fixed">Fixed</option>
                                <option value="Percentage">Percentage</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="amount" name="amount" required>
                        </div>
                        <div class="mb-2">
                            <label for="minimumSpend" class="form-label">Minimum Spend</label>
                            <input type="number" class="form-control" id="minimumSpend" name="minimumSpend" required>
                        </div>
                        <div class="mb-2">
                            <label for="slots" class="form-label">Slots</label>
                            <input type="number" class="form-control" id="slots" name="slots" required>
                        </div>
                        <div class="mb-2">
                            <label for="duration" class="form-label">Duration</label>
                            <input type="date" class="form-control" id="duration" name="duration" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 brand-bg-color" id="addPromotionButton">Add voucher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        require_once('../include/js.php')
    ?>
    <script src="../js/staff.js"></script>
</body>
</html>