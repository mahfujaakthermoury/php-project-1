<?php
require_once('parts/auth.php');
require_once('parts/header.php');
require_once('lib/db.php');

$sql = 'SELECT * FROM blog';

$result = $db->query($sql);
?>
<section class="blog_grid_section py-5">
    <div class="container">
        <div class="row">
            
            <?php while($blog=$result->fetch_assoc()){ ?>
            <div class="col-sm-4 mt-3">
                <div class="card">
                    <img src="uploads/blog/<?Php echo $blog['image']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?Php echo $blog['title'] ?></h5>
                        <p class="card-text"><?Php echo $blog['description'] ?></p>
                        <a href="#" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>


<?php
require_once('parts/footer.php');
?>