<?php

if (!empty($_POST)) {
    $sql = "INSERT INTO `users` (`username`, `email`, `userphone`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['userphone'] . "')";
    if (mysqli_query($conn, $sql)) {
        // echo "<h2>Дані оновлено<br><a href='/admin/users.php'>Повернутись</a></h2>";
        echo "<script>window.location.href='/admin/users.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add new user</h6>
    </div>
    <div class="card-body">
        <form action="?page=add" method="POST">
            <label>Name: <input class="form-control form-control-lg" type="text" name="name"></label>
            <br>
            <label>Email: <input class="form-control form-control-lg" type="email" name="email"></label><br>
            <label>Userphone: <input class="form-control form-control-lg" type="tel" name="userphone"></label><br>
            <button type="submit" class="btn btn-info btn-lg">Save</button>
        </form>

    </div>
</div>