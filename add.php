<?php
include 'parts/header.php';
require_once('lib/db.php');
?>

<?php
 if(isset($_POST['form-submit'])){
    
$product_name = $_POST["product_name"];
$price = $_POST["product_price"];
$pieces = $_POST["product_pieces"];

   
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
                    <a href="index.php" class="btn btn-primary btn-sm float-end mx-3">
                        Home
                    </a>
                </h3>
                <hr>
                <form action="add-product.php" method="post">
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Product name</label>
                        <input name="product_name" type="text" class="form-control" id="product_name"placeholder="Type name">                    
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Product price</label>
                        <input name="product_price" type="number" class="form-control" id="price"placeholder="Type price"> 
                    </div>
                    <div class="mb-3">

                        <label for="pieces" class="form-label">Product pieces</label>
                        <input name="product_pieces" type="number" class="form-control" id="pieces"placeholder="Type pieces">
                        
                    </div>
                    <div class="mb-3">
                       <input type="submit" value="submit" class="btn btn-primary" name="form-submit">
                    </div>
                </form> 
            </div>
        </div>
    </div>
</section>
<?php
 include 'parts /footer.php';
 ?>