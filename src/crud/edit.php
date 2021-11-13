<html>

<head>
  <?php
    include('../templates/header.php');
    require('../../config/config_db.php');

    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = $id";

    $users = mysqli_query($mysqli, $query);

    if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      $username = $_POST['username'];
      $phone = $_POST['phone'];
      $password = $_POST['password'];

      $query = "UPDATE users SET email='$email',username = '$username', phone = '$phone', password = '$password' WHERE id = '$id'";

      $result = mysqli_query($mysqli, $query);
    }
  ?>

  <title>Edit User</title>
</head>
</head>

<body>
  <div class="container row">
    <div class="col-6 mx-auto">
      <a class="btn btn-primary mb-4" href="../../index.php" role="button">Go to Home</a>

      <h3>Edit User</h3>
      <hr>

      <form action="" method="POST">
        <?php if(isset($result) && $result === true) : ?>
        <div class="alert alert-success" role="alert">
          successfully edit user
        </div>
        <?php endif ?>

        <?php foreach($users as $user) : ?>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="enter your email address"
            value="<?= $user['email']?>" required>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" id="username" placeholder="username"
            value="<?= $user['username']?>" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="phone" name="phone" class="form-control" id="phone" placeholder="enter your phone"
            value="0<?= $user['phone']?>" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" value="<?= $user['password']?>"
            placeholder="use unique password" required>
        </div>

        <?php endforeach ?>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>

</html>