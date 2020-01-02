<?php
    // //Połączenie do SQL
    // $conn = mysqli_connect('localhost', 'root', '', 'phpblog');

    // //Sprawdź połączenie
    // if (mysqli_connect_errno()){
    //     echo 'Brak połączenia z SQL'. mysqli_connect_errno();
    //     die();
    // }
    require('config/config.php');
    require('config/db.php');

    $query = 'SELECT * FROM posts ORDER BY created_at DESC';

    $result = mysqli_query($conn, $query);

    // Złap dane :) tablica asocjacyjna

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //Usuń zasoby z pamieci

    mysqli_free_result($result);

    // Zamknij połączenie z bazą

    mysqli_close($conn);
    include('inc/header.php');

?>
    <div class="container md4">
    
    <h1>Posty</h2>
        <?php foreach($posts as $post) : ?>
            <div class="card border-success p-3">
                <h3 class="card-tiitle">Post title: <?php echo $post['title'] ?> </h3>
                <small class="card-subtitle text-muted">Created at: <?php echo ($post['created_at'].' by '.$post['author']) ?> by </small>
                <p class="card-text"><?php echo $post['body'] ?> </p>
                <a href="<?php echo ROOT_URL;?>post.php?id=<?php echo $post['id'] ?>" class="btn btn-light" >Post details</a>
                <a href="<?php echo ROOT_URL;?>addpost.php" class="btn btn-light" >Add post</a>
            </div>
            
            <br>

        <?php endforeach; ?>
        </div>

    </div>
    
    </div>
<?php 
 include('inc/footer.php');
?>
