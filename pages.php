<?php 
  require_once "database/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Basic Posts CMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
       
      </ul>
      <form action="search.php" method="post" class="d-flex">
          <input class="form-control mr-2" name="search" type="text" placeholder="Search">
          <input class="btn btn-outline-success" name="search_submit" type="submit" value="Search">
        </form>
    </div>
  </div>
</nav><br>

<div class="container">
    <div class="row justify-content-evenly">
    <?php 

      if ($_GET['id']) {
        # code...
        $id = $_GET['id'];
        $sql = "SELECT * FROM posts where post_id = '$id' ";
        $result = mysqli_query($conn,$sql);

        while ($row = mysqli_fetch_array($result)) {
              $post_title = $row['post_title'];
              $post_author = $row['post_author'];
              $post_date = date('y-m-d');
              $post_image = $row['post_image'];
              $post_content = $row['post_content'];
        }

      }
    ?>
        <figure class="figure">
            <img src="img/<?php echo $post_image;?>" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption">
                <h5 class="card-title"><?php echo $post_title;?></h5>
                <p>Posted By <strong><?php echo $post_author;?></strong> | Published on <strong><?php echo $post_date;?></strong></p>
                <?php echo $post_content;?>
            </figcaption>
        </figure>   
    </div> 
</div>

</body>
</html>
