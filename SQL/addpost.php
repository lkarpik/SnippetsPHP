<?php
    require('config/config.php');
    require('config/db.php');  
    include('inc/header.php');

    // check submit

    if (isset($_POST['submit'])) {
        // Get data for querry with ALWAYS NEEDED ESCAPE STRING FOR SECURITY!!!! 
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

        if(mysqli_query($conn, $query)){
            header('Location:'.ROOT_URL.'');
        } else {
            echo 'ERROR: '.mysql_error($conn);
        }
        mysqli_close($conn);
    }

?>

<div class="container md4">
    <h1>Add post</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        <a href="<?php echo ROOT_URL;?>" class="btn btn-secondary">Back</a>
    </form>

</div>
<?php 
 include('inc/footer.php');
?>