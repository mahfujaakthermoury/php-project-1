<?php
include 'parts/header.php';
include 'lib/db.php';

//Data update
if (isset($_POST['form_submit'])) {
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $piece = $_POST['product_piece'];

    $id = $_GET['si_no'];
    $sql = "UPDATE product SET product_name ='$name', product_price = '$price', product_piece = '$piece'
    WHERE si_no=" . $id;
    $status = $db->query($sql);

    if ($status) {
        echo   '<div class="container p-4 text-center">
                    <div class="alert alert-success" role="alert">
                       <h5> Data updated successfully.</h5>
                    </div>
                </div>';
    }
}


//Dats select
$id = $_GET['si_no'];
$sql = 'SELECT * FROM product WHERE si_no=' . $id;
$result = $db->query($sql);

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
                <h3> Edit Product Information
                    <a href="index.php" class="btn btn-success btn-sm float-end">
                        Home
                    </a>
                </h3>
                <hr>

                <?php
                while ($product = $result->fetch_assoc()) {
                ?>
                <form action="edit.php?si_no=<?php echo $product['si_no']; ?>" method="post">
                    <div class="md-3">
                        <label for="name" class="form-lavel">Product name</label>

                        <input name="product_name" type="text" class="form-control" id="name" placeholder="Type name"
                            value="<?php echo $product['product_name']; ?>">
                    </div><br>

                    <div class="md-3">
                        <label for="price" class="form-lavel">Product price</label>

                        <input name="product_price" type="number" class="form-control" id="price"
                            placeholder="Type price" value="<?php echo $product['product_price']; ?>">
                    </div><br>

                    <div class="md-3">
                        <label for="piece" class="form-lavel">Product piece</label>

                        <input name="product_piece" type="number" class="form-control" id="piece"
                            placeholder="Type piece" value="<?php echo $product['product_piece']; ?>">
                    </div><br>

                    <div class="md-3">
                        <input type="submit" value="Submit" class="btn btn-primary" name="form_submit">
                    </div>
                </form>

                <?php } ?>

            </div>
        </div>
    </div>
</section>
<?php
include 'parts /footer.php';
?>