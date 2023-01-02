<?php
include 'parts/auth.php';
include 'parts/header.php';
include 'lib/db.php';

$sql = "SELECT * FROM blog ORDER BY id DESC";
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
                <h3> Blog list
                    <a href="add-blog.php" class="btn btn-secondary bg-opacity-25 btn-sm float-end">
                        + Add Blog
                    </a>
                </h3>
                <hr>
                <table class="table table-info table-hover">
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    while ($row = $allData->fetch_assoc()) {
                    ?>

                    <tr>
                        <td>
                            <img src="uploads/blog/<?php echo $row['image']; ?>" class="img-fluid" width="150">
                            
                        </td>
                        <td>
                            <?php echo $row['title']; ?>
                        </td>
                        <td>
                            <?php echo date('d,M,Y h:i A',strtotime($row['date']));?>
                        </td>
                        <td>
                            <a href="edit-blog.php?id=<?php echo $row['id']; ?>"
                             class="btn btn-primary bg-opacity-10 btn-sm">Edit</a>

                            <a href="delete.php?id=<?php echo $row['id']; ?>"
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