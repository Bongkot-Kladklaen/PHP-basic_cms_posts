<?php 
    include_once "include/view.php";
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
            <div class="col-2">
                <h4>Welcome : </h4>
                <ul class="list-group">
                    <li class="list-group-item"><a class="navbar-brand link-dark" href="index.php">Home</a></li>
                    <li class="list-group-item"><a class="navbar-brand link-dark" href="view_post.php">View Posts</a></li>
                    <li class="list-group-item"><a class="navbar-brand link-dark" href="insert_post.php">Insert Post</a></li>
                    <li class="list-group-item"><a class="navbar-brand link-dark" href="logout.php">Log out</a></li>
                </ul>
            </div>
            <div class="col-10">
                <h4>View All Posts</h4>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Post No</th>
                            <th>Post Data</th>
                            <th>Post Author</th>
                            <th>Post Title</th>
                            <th>Post Image</th>
                            <th>Post Content</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while ($row = mysqli_fetch_assoc($result)) {
                    
                        ?>
                        <tr>
                            <td><?php echo $row['post_id'] ?></td>
                            <td><?php echo $row['post_date'] ?></td>
                            <td><?php echo $row['post_author'] ?></td>
                            <td><?php echo $row['post_title'] ?></td>
                            <td><img width="50" height="50" src="../img/<?php echo $row['post_image'] ?>" alt=""></td>
                            <td><?php echo substr($row['post_content'],0,50) ?></td>
                            <td><a class="btn btn-danger" href="delete.php?del=<?php echo $row['post_id']; ?>">Delete</a></td>
                            <td><a class="btn btn-primary" href="edit_post.php?edit=<?php echo $row['post_id']; ?>">Edit</a></td>
                        </tr>
                            <?php } ?>
                    </tbody>
                </table>
            
            </div>
        </div>
    </div>
    
    
       
</body>
</html>