<?php 
    require_once "include/edit.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>   
</head>
<body>
    <header class="container-fluid">
        <div class="bg-light pt-4 pb-4">
            <h1 align="center">Admin Page System</h1>
        </div>
    </header><br>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h4>Welcome : </h4>
                <ul class="list-group">
                    <li class="list-group-item"><a class="navbar-brand link-dark" href="index.php">Home</a></li>
                    <li class="list-group-item"><a class="navbar-brand link-dark" href="view_post.php">View Posts</a></li>
                    <li class="list-group-item"><a class="navbar-brand link-dark" href="insert_post.php">Insert Post</a></li>
                    <li class="list-group-item"><a class="navbar-brand link-dark" href="logout.php">Log out</a></li>
                </ul>
            </div>
            <div class="col-9">
                <h4>Edit Post</h4>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="edit_form" value="<?php echo $post_id;?>">
                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-2">
                            <label class="col-form-label">Post Title</label>
                        </div>
                        <div class="col-10">
                            <input type="text" class="form-control" name="title" value="<?php echo $post_title;?>">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-2">
                            <label class="col-form-label">Post Author</label>
                        </div>
                        <div class="col-10">
                            <input type="text" class="form-control" name="author" value="<?php echo $post_author;?>">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-2">
                            <label class="col-form-label">Post Keywords</label>
                        </div>
                        <div class="col-10">
                            <input type="text" class="form-control" name="keywords" value="<?php echo $post_keywords;?>">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-2">
                            <label class="col-form-label">Post Image</label>
                        </div>
                        <div class="col-10">
                            <div class="row">
                                <div class="col-9 pt-5">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" name="image" />
                                        <label class="form-file-label">
                                            <span class="form-file-text">Choose file...</span>
                                            <span class="form-file-button">Browse</span>
                                        </label>
                                    </div>
                                </div>  
                                <div class="col-3">
                                    <img width="150" height="150" src="../img/<?php echo $post_image;?>" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                        <div class="col-2">
                            <label class="col-form-label">Post Content</label>
                        </div>
                        <div class="col-10">
                            <textarea class="form-control" rows="6" name="content"><?php echo $post_content;?></textarea>
                        </div>
                    </div>
                    <input type="submit" name="update" class="btn btn-primary" value="Insert">
                </form>
            </div>
        </div>
    </div>
           
</body>
</html>