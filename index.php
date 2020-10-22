<?php 
  require_once "admin/database/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Posts CMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Basic Posts CMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
       
      </ul>
      <form class="d-flex">
        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav><br>
<div class="container">
    <div class="row justify-content-evenly">

    <?php 
      $sql = "SELECT * FROM posts";
      $result = mysqli_query($conn,$sql);

      while ($row = mysqli_fetch_array($result)) {
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_date = date('y-m-d');
            $post_image = $row['post_image'];
            $post_content = substr($row['post_content'],0,100);
    ?>
        <div class="card mb-3" style="width: 18rem; padding-top: 12px;">
            <img height="200"  src="img/<?php echo $post_image;?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $post_title;?></h5>
                <p>By <strong><?php echo $post_author;?></strong> | Time <strong><?php echo $post_date;?></strong></p>
                <p class="card-text"><?php echo $post_content;?></p>
                <a href="pages.php?id=<?php echo $post_id;?>" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    <?php } ?>
        
    </div>
   
</div>
</body>
</html>