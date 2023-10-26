<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Product';
    $products_page = 'active';
    require_once('../includes/head.php')
?>
<body>
<?php
    require_once('../includes/header.admin.php')
?>
    <main>
        <div class="container-fluid">
            <div class="row">
            <?php
                require_once('../includes/sidebar.php')
            ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-light">
                    <h2 class="h3 brand-color pt-3 pb-2">Product</h2>
                    <div class="table-responsive overflow-hidden">
                        <div class="row g-2 mb-2 m-0">
                            <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
                            <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0 ms-lg-auto">
                                <select name="staff-role" id="staff-role" class="form-select me-md-2">
                                    <option value="">All Category</option>
                                    <option value="Main Course">Main Course</option>
                                    <option value="Salad">Salad</option>
                                    <option value="Dips">Dips</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0">
                                <select name="staff-status" id="staff-status" class="form-select me-md-2">
                                    <option value="">All Status</option>
                                    <option value="Available">Available</option>
                                    <option value="Out of Stock">Out of Stock</option>
                                </select>
                            </div>
                            <div class="search-keyword col-12 flex-lg-grow-0 d-flex">
                                <div class="input-group">
                                    <input type="text" name="keyword" id="keyword" placeholder="Search Product" class="form-control">
                                    <button class="btn btn-outline-secondary brand-bg-color" type="button"><i class="fa fa-search color-white" aria-hidden="true"></i></button>
                                </div>
                                <button class="btn btn-outline-secondary btn-add" type="button"><i class="fa fa-plus brand-color" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <table id="staff" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $product_array = array(
                                        array(
                                            'p_name' => 'Baby Back Ribs',
                                            'category' => 'Main Course',
                                            'price' => '$224',
                                            'status' => 'Out of Stock'
                                        ),
                                        array(
                                            'p_name' => "Ceasar's Salad",
                                            'category' => 'Salad',
                                            'price' => '$125',
                                            'status' => 'Out of Stock'
                                        ),
                                        array(
                                            'p_name' => 'Egg Guacamole with Caviar',
                                            'category' => 'Dips',
                                            'price' => '$200',
                                            'status' => 'Out of Stock'
                                        ),
                                        array(
                                            'p_name' => "Denison's Beef Wellington",
                                            'category' => 'Main Course',
                                            'price' => '$300',
                                            'status' => 'Available'
                                        ),
                                        array(
                                            'p_name' => "Sinsuan's Burger with Silverswan Soy Sauce",
                                            'category' => 'Dips',
                                            'price' => '$500',
                                            'status' => 'Available'
                                        )
                                    );
                                ?>
                                <?php
                                    $counter = 1;
                                    foreach($product_array as $item){
                                ?>
                                        <tr>
                                            <td><?= $counter ?></td>
                                            <td><?= $item['p_name'] ?></td>
                                            <td><?= $item['category'] ?></td>
                                            <td><?= $item['price'] ?></td>
                                            <td><?= $item['status'] ?></td>
                                            <td class="text-center"><a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                        </tr>
                                <?php
                                    $counter++;
                                    }
                                ?>
                               
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </main>
    <?php
        require_once('../includes/js.php')
    ?>
    <script src="../js/staff.js"></script>
</body>
</html>