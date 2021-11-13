<?php
// Create database connection using config file
require("./config/config_db.php");
 
// Fetch all users data from database
$query = "SELECT * FROM users ORDER BY created_at DESC";
$users = mysqli_query($mysqli, $query);

// READ -> OK

?>

<!doctype html>
<html lang="en">

<head>
  <?php
    include('./src/templates/header.php');
  ?>

  <title>Home - Users</title>
</head>

<body>
  <div class="container row">
    <div class="col-8 mx-auto">
      <a class="btn btn-primary mb-4" href="./src/crud/create.php" role="button">Add New User</a>

      <?php if( isset($_GET['delete'])) : ?>
      <div class="alert alert-success" role="alert">
        user deleted successfully
      </div>
      <?php endif ?>

      <table class="table">
        <h2 class="mb-2">Tabel Users</h2>
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $key => $user) :?>
          <tr>
            <th scope="row"><?= $key+1?>.</th>
            <td>@<?= $user['username']?></td>
            <td><?= $user['email']?></td>
            <td>0<?= $user['phone']?></td>
            <td>
              <a class="btn btn-info" href="./src/crud/edit.php?id=<?= $user['id']?>" role=" button">Edit</a>

              <a class="btn btn-danger" href="./src/crud/delete.php?id=<?= $user['id']?>" role="button"
                onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>