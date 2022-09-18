<?php

if (!empty($_POST)) {
    $sql = "UPDATE `book` SET `username` = '" . $_POST['name'] . "', `email` = '" . $_POST['email'] . "', `userphone` = '" . $_POST['userphone'] . "' WHERE `book`.`id` = " . $_GET['id'] . ";";
    if (mysqli_query($conn, $sql)) {
        echo "<h2>Дані оновлено<br><a href='/admin/book.php'>Повернутись</a></h2>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
$sql = "SELECT * FROM book WHERE id = " .  $_GET['id'];
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Book list</h6>
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