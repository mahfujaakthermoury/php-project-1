<?php
include 'parts/header.php';
?>
<section class="content-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php
                    require_once 'parts/sidebar.php';
                    ?>
            </div>
            <div class="col-sm-9">
                <h3> Product list
                    <a href="add-product.php" class="btn btn-success btn-sm float-end">
                        + Add Product
                    </a>
                </h3>
                <hr>
                <table class="table table-dark table-striped">
                    <tr>
                        <th>SI No.</th>
                        <th>Product name</th>
                        <th>Product price</th>
                        <th>product pieces</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td> 01 </td>
                        <td>Tarmasin</td>
                        <td>5000</td>
                        <td>5</td>
                        <td>
                            <a href="" class="btn btn-success btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>

                        </td>

                    </tr>
                </table>

            </div>
        </div>
    </div>
</section>
<?php
 include 'parts /footer.php';
 ?>