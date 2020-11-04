<?php include "include/admin_header.php"; ?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "include/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>
                        <div class="col-xs-6">

<?php
if(isset($_POST['submit'])){
    $catTitle = $_POST['cat_title'];
    if($catTitle=='' || empty($catTitle)){
        echo "Field should not be empty";
    }else{
        $query="INSERT INTO categories(cat_title) VALUE('{$catTitle}')";
        $creat_category=mysqli_query($conn,$query);
        if(!$creat_category){
            die('Query failed'.mysqli_errno($conn));
        }
    }
}
?>


                            <form action="" method="post">
                                <label for="cat-title">Add Category</label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add-Category">
                                </div>
                            </form>
                        </div>
<?php 
$query = "SELECT cat_id,cat_title from categories";
$selectCatagories = mysqli_query($conn,$query);
?>
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <th class="text-center">Id</th>
                                    <th class="text-center">Category</th>
                            </thead>
                            <tbody class="text-center">
<?php 
while($row = mysqli_fetch_assoc($selectCatagories))
{
$catId = $row['cat_id'];
$catTitle = strtoupper($row['cat_title']);
echo "<tr>";
echo "<td>{$catId}</td>";
echo "<td>{$catTitle}</td>";
echo "</tr>";
}   
?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php include "include/admin_footer.php"; ?>

