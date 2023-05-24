<?php include "../includes/db.php"; ?>
<?php include "../includes/header.php"; ?>
<?php include "../includes/navigation.php"; ?>
       
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Bienvenue sur le blog de devsecops !</h1>
                    <p class="lead mb-0">Vous avez raison d'être ici</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">


                    <?php 
                    
                        $query = "SELECT * FROM posts";
                        $select_all_posts_query = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                        $post_id = $row['post_id'];
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_tags = $row['post_tags'];
                        $post_image = $row['post_image'];
                        $post_content = substr($row['post_content'],0,400);
                        $post_status = $row['post_status'];

                        ?>

                        <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="images/<?php echo "$post_image";?>" alt="..." /></a>
                        <div class="card-body">
                            
                            <div class="small text-muted"><?php echo "$post_author";?></div>
                            <div class="small text-muted"><?php echo "$post_date";?></div>
                            <div class="small text-muted"><?php echo "$post_tags";?></div>
                            <h2 class="card-title"><?php echo "$post_title";?></h2>
                            <p class="card-text"><?php echo "$post_content";?></p>
                            <a class="btn btn-primary" href="#!">Read more →</a>

                        </div>
                        </div>

                       <?php } ?>
                    
                    


                    <!-- Featured blog post-->
                   
                    <!-- Nested row for non-featured blog posts-->
                    
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                
                    <!-- Side widget-->
                    <?php include "../includes/sidebar.php"; ?> 
                    
               
            </div>
        </div>
      
        <?php include "../includes/footer.php"; ?>
