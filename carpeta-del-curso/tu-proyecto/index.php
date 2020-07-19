<?php require ('init.php'); ?>
<?php require ('templates/header.php'); ?>

<?php 

    $all_post = get_all_posts();

    //Funcion para encontrar un post 
    $post_found = false;
    if(isset( $_GET['view'])){
        $post_found = get_post($_GET['view']);
        if( $post_found){
            $all_post = [ $post_found ];
        }
        
    }


    
?>

        <div class="posts">
            <?php foreach ($all_post as $post): ?>
            <article>
                <header>
                   <a href="?view=<?php echo $post['id']; ?>"> <h2><?php echo $post['title'] ?></h2> </a>
                </header>
                <div class="post-content">
                    <?php if($post_found): ?>
                        <?php  echo $post['content']; ?>
                    <?php else:  ?>
                        <?php echo $post['excerpt'];  ?>
                    <?php endif;  ?>

                </div>
                <footer>
                    <span>Publicada en: </span>
                    <?php echo strftime('%d %b %Y',strtotime($post['published_on'])); echo '<br>';?>

                </footer>
            </article>
            <?php endforeach; ?>
        </div>

        <?php require ('templates/footer.php'); ?>