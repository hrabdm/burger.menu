<?php

if (!empty($_POST)) {
    $sql = "UPDATE `users` SET `username` = '" . $_POST['name'] . "', `email` = '" . $_POST['email'] . "', `userphone` = '" . $_POST['userphone'] . "' WHERE `users`.`id` = " . $_GET['id'] . ";";
    if (mysqli_query($conn, $sql)) {
        // echo "<h2>Дані оновлено<br><a href='/admin/users.php'>Повернутись</a></h2>";
        echo "<script>window.location.href='/admin/users.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
$sql = "SELECT * FROM users WHERE id = " .  $_GET['id'];
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit User, ID <?php echo $row['id']; ?></h6>
    </div>
    <div class="card-body">
        <form action="?page=edit&id=<?php echo $_GET['id'] ?>" method="POST">
            <label>Name: <input class="form-control form-control-lg" type="text" name="name" value="<?php echo $row['username']; ?>"></label>
            <br>
            <label>Email: <input class="form-control form-control-lg" type="text" name="email" value="<?php echo $row['email']; ?>"></label><br>
            <label>Userphone: <input class="form-control form-control-lg" type="text" name="userphone" value="<?php echo $row['userphone']; ?>"></label><br>
            <button type="submit" class="btn btn-info btn-lg">Save</button>
        </form>

    </div>
</div>