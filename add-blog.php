<?php
include 'parts/auth.php';
include 'parts/header.php';
include 'lib/db.php';
?>

<?php
if (isset($_POST['form_submit'])) {
   
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST[''];

    if(isset($_FILES['image'])){
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],'./upload/blog/'.$image );
    }

    $sql = "INSERT INTO blog (title , description,image) VALUES ('$title', '$description' ,'$image')";

    $status = $db->query($sql);

    if ($status) {
        header('Location:blog-list.php');
    } else {
        echo '<div class="container p-4 text-center">
                    <div class="alert alert-success" role="alert">
                       <h5>Somthing wromg please try again.</h5>
                    </div>
                </div>';
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
                <h3> + Add Blog
                    <a href="blog-list.php" class="btn btn-primary bg-opacity-10 btn-sm float-end">
                        Blog list
                    </a>
                </h3>
                <hr>
                <form action="add-blog.php" method="post" enctype="multipart/form-data">

                    <div class="md-3">
                        <label for="title" class="form-lavel">Title</label>

                        <input name="title" type="text" class="form-control" id="title" placeholder="Type title">
                    </div><br>

                    <div class="md-3">
                        <label for="description" class="form-lavel">Description</label>

                        <textarea name="description" id="description" cols="30" rows="10" class="form-controll"
                            placeholder="Type description"></textarea>
                    </div><br>
                    <div class="md-3">
                        <label for="image" class="form-lavel">Image</label>

                        <input name="image" type="file" class="form-control" id="image" placeholder="Type name">
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