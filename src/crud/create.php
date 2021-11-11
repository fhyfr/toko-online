<html>

<head>
  <?php
    include('../templates/header.php');
    require('../../config/config_db.php');

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $role_id = 2;

        $query = "INSERT INTO users(username, email, phone, password, role_id) VALUES('$username','$email','$phone', '$password', '$role_id')";
                
        // Insert user data into table
        $result = mysqli_query($mysqli, $query );
    }
  ?>

  <title>Add User</title>
</head>
</head>

<body>
  <div class="container row">
    <div class="col-6 mx-auto">
      <a class="btn btn-primary mb-4" href="../../index.php" role="button">Go to Home</a>
      <h3>Add User</h3>
      <hr>

      <form action="" method="POST">
        <?php if(isset($result)) : ?>
        <div class="alert alert-success" role="alert">
          user added successfully
        </div>
        <?php endif ?>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="enter your email address"
            required>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="number" name="phone" class="form-control" id="phone" placeholder="enter your phone" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="use unique password"
            required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>

</html>