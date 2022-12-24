<?php
session_start();

if(isset($_SESSION['log_status']) and $_SESSION['log_status']==true){
    //The user can access
}
else{
    header('Location:login.php');
}
?>

<?php
include 'parts/header.php';
include 'lib/db.php';

$sql = "SELECT * FROM product  ";
$allData = $db->query($sql);
?>
<section class="content-section py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php
                require_once 'parts/sidebar.php';
                ?>
            </div>
            <div class="col-sm-9">
                <h3> Product list
                    <a href="add-product.php" class="btn btn-secondary bg-opacity-25 btn-sm float-end">
                        + Add Product
                    </a>
                </h3>
                <hr>
                <table class="table table-info table-hover">
                    <tr>
                        <th>SI No.</th>
                        <th>Product name</th>
                        <th>Product price</th>
                        <th>product pieces</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    while ($product = $allData->fetch_assoc()) {
                    ?>

                    <tr>
                        <td>
                            <?php echo $product['si_no']; ?>
                        </td>
                        <td>
                            <?php echo $product['product_name']; ?>
                        </td>
                        <td>
                            <?php echo $product['product_price']; ?>
                        </td>
                        <td>
                            <?php echo $product['product_piece']; ?>
                        </td>
                        <td>
                            <a href="edit.php?si_no=<?php echo $product['si_no']; ?>"
                             class="btn btn-primary bg-opacity-10 btn-sm">Edit</a>

                            <a href="delete.php?si_no=<?php echo $product['si_no']; ?>"
                                onclick="return confirm('Do you went to delete this data? ')"
                                class="btn btn-danger btn-sm">Delete</a>

                        </td>

                    </tr>

                    <?php
                    }
                    ?>
                </table>

            </div>
        </div>
    </div>
</section>
<?php
include 'parts /footer.php';
?>