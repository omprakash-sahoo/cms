<?php include 'includes/header.php' ;?>
<?php include 'includes/database.php' ;?>

<body>

    <!-- Navigation -->
 <?php include 'includes/navigation.php' ?>


 <?php 
if(isset($_POST['submit']))
{
    $search = $_POST['search'];
    $query = "SELECT * FROM posts where post_tags LIKE '%$search%'";
    $searchQuery = mysqli_query($conn,$query);
    if(!$searchQuery)
    {
        die("Query Faild" . mysqli_error($conn));
    }else{
        echo 'result found';
    }
    
}
?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

            <?php 
            $query = "SELECT * FROM posts";
            $selectAllPostQuery = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($selectAllPostQuery))
            {
                $post_title = $row['post_title'];
                $post_author= $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];
                $post_tags = $row['post_tags'];

                ?>

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title ; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ; ?></p>
                <hr>
                <img class="img-responsive" height="1200px" width="2000px" src="images/<?php echo $post_image;?>" alt="">
                <hr>
                <p> <?php echo $post_content ; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

            <?php } ?>
            </div>
            <?php include "includes/sidebar.php";?>
            <!-- Blog Sidebar Widgets Column -->


        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
 <?php include 'includes/footer.php';?>
