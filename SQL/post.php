<?php
    require('config/config.php');
    require('config/db.php');

    if (isset($_POST['delete'])) {
        // Get data for querry with ALWAYS NEEDED ESCAPE STRING FOR SECURITY!!!! 
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    $query = "DELETE FROM posts WHERE id = {$delete_id}";
        
        if(mysqli_query($conn, $query)){
            header('Location:'.ROOT_URL.'');
        } else {
            echo 'ERROR: '.mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $query = 'SELECT * FROM posts WHERE id = '.$id;

    $result = mysqli_query($conn, $query);

    // Złap dane :) tablica asocjacyjna

    $post = mysqli_fetch_assoc($result);

    //Usuń zasoby z pamieci

    mysqli_free_result($result);

    // Zamknij połączenie z bazą

    mysqli_close($conn);
    
    include('inc/header.php');

?>

    <div class="container md4">
    
        <h1>Posty</h2>

        <div class="card border-warning p-3">
            <h3 class="card-title">Post title: <?php echo $post['title'] ?> </h3>
            <small class="card-subtitle text-muted">Created at: <?php echo ($post['created_at'].' by '.$post['author']) ?> by </small>
            <p class="card-text"><?php echo $post['body'] ?> </p>
            
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <a href="<?php echo ROOT_URL;?>" class="btn btn-light">BACK</a>
                <a href="<?php echo ROOT_URL;?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-warning">EDIT</a>
                <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
                <input type="submit" name="delete" value="DELETE" class="btn btn-danger">

            </form>
        </div>
        <br>

    </div>
<?php 
 include('inc/footer.php');
?>