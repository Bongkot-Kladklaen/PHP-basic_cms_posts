<?php
require_once "admin/database/database.php";
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
    <h5 class="card-title">Result:</h5>
    <div class="row justify-content-evenly">
      <?php
        if ($_POST['search_submit']) {
          $value = $_REQUEST['search'];
        }

        if (empty($value)) {
          echo "<div class='alert alert-danger' align='center' role='alert'>Empty find</div>";
          exit();
        } 

        $sql = "SELECT * FROM posts where post_keywords LIKE '%$value%' ";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);
        if (!$value == $row['post_keywords']) {
          echo "<div class='alert alert-danger' align='center' role='alert'>No result</div>";
        } else {
          $data = mysqli_query($conn, $sql);
          while ($row_data = mysqli_fetch_array($data)) {
            $post_id = $row_data['post_id'];
            $post_title = $row_data['post_title'];
            $post_author = $row_data['post_author'];
            $post_date = date('y-m-d');
            $post_image = $row_data['post_image'];
            $post_content = substr($row_data['post_content'], 0, 100);
          ?>
            <div class="card mb-3" style="width: 18rem; padding-top: 12px;">
              <img height="200" src="img/<?php echo $post_image; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $post_title; ?></h5>
                <p>By <strong><?php echo $post_author; ?></strong> | Time <strong><?php echo $post_date; ?></strong></p>
                <p class="card-text"><?php echo $post_content; ?></p>
                <a href="pages.php?id=<?php echo $post_id; ?>" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          <?php  
          } 
        }
        ?>
    </div>
  </div>

</body>
</html>