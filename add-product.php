<?php
include 'parts/header.php';
?>
<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'php-project-1';

    //Database Connection
    $db = new mysqli($hostname, $username, $password, $dbname);

?>

<?php
if (isset($_POST['form_submit'])) {

    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $piece = $_POST['product_piece'];

   /*  $sql = "INSERT INTO  students ( name, roll, reg) VALUES('$name', '$price', '$piece',)";

    $status = $db->query($sql);

    if($status){
        echo ('Data submited successfully.');
    }
    else{
        echo ('Data submited failed.');
    } */

    $sql = "INSERT INTO product (product_name, product_price, product_piece) VALUES ('$name', '$price', '$piece')";

    $status = $db->query($sql);

    if($status){
        echo 'Data submited successfully.';
    }else{
        echo 'Data submited failed.';
    }


}
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
                <h3> + Add Product
                    <a href="index.php" class="btn btn-success btn-sm float-end">
                        Home
                    </a>
                </h3>
                <hr>
                <form action="add-product.php" method="post">
                    <div class="md-3">
                        <label for="name" class="form-lavel">Product name</label>

                        <input name="product_name" type="text" class="form-control" id="name" placeholder="Type name">
                    </div><br>

                    <div class="md-3">
                        <label for="price" class="form-lavel">Product price</label>

                        <input name="product_price" type="number" class="form-control" id="price"
                            placeholder="Type price">
                    </div><br>

                    <div class="md-3">
                        <label for="piece" class="form-lavel">Product piece</label>

                        <input name="product_piece" type="number" class="form-control" id="piece"
                            placeholder="Type piece">
                    </div><br>

                    <div class="md-3">
                        <input type="submit" value="Submit" class="btn btn-primary" name="form_submit">
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<?php
include 'parts /footer.php';
?>