<?php
    require('config/config.php');
    require('config/db.php');  
    

    // check submit

    if (isset($_POST['submit'])) {
        // Get data for querry with ALWAYS NEEDED ESCAPE STRING FOR SECURITY!!!! 
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

        $query = "UPDATE posts SET
                title='$title',
                author='$author',
                body='$body'
                    WHERE id='$update_id'";
        
        if(mysqli_query($conn, $query)){
            header('Location:'.ROOT_URL.'');
        } else {
            echo 'ERROR: '.mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    
    $query = "SELECT * FROM posts WHERE id = '$id'";

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
    <h1>EDIT POST</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value=<?php echo $post['title']; ?>>
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" cols="30" rows="10" class="form-control"><?php echo $post['body']; ?></textarea>
        </div>
        <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        <a href="<?php echo ROOT_URL;?>" class="btn btn-secondary">Back</a>
    </form>

</div>
<?php 
 include('inc/footer.php');
?>