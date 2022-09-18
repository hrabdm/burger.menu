<?php
if (!empty($_POST)) {
    $sql = "UPDATE `book` SET `username` = '" . $_POST['name'] . "', `email` = '" . $_POST['email'] . "', `userphone` = '" . $_POST['userphone'] . "', `numberofguests` = '" . $_POST['persons'] . "', `bookdate` = '" . $_POST['date'] . "', `status` = '" . $_POST['status'] . "' WHERE `book`.`id` = " . $_GET['id'] . ";";
    if (mysqli_query($conn, $sql)) {
        echo "<h2>Data updated successfully<br><a href='/admin/book.php'><b>Return to Book table</b></a></h2>";
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
        <h6 class="m-0 font-weight-bold text-primary">Edit book item:</h6>
    </div>
    <div class="card-body">
        <form action="?page=edit&id=<?php echo $_GET['id'] ?>" method="POST">
            <div class="mb-3">
                <label>Name:
                    <input class="form-control form-control-lg" type="text" name="name" value="<?php echo $row['username']; ?>">
                </label>
            </div>
            <div class="mb-3">
                <label>Email:
                    <input class="form-control form-control-lg" type="text" name="email" value="<?php echo $row['email']; ?>">
                </label>
            </div>
            <div class="mb-3">
                <label>Userphone:
                    <input class="form-control form-control-lg" type="text" name="userphone" value="<?php echo $row['userphone']; ?>">
                </label>
            </div>
            <div class="mb-3">
                <label>Number of guests:
                    <input class="form-control form-control-lg" type="text" value="<?php echo $row['numberofguests']; ?>" name="persons">
                </label>
            </div>
            <div class="mb-3">
                <label>Book date:
                    <input type="date" class="form-control form-control-lg" value="<?php echo $row['bookdate']; ?>" name="date">
                </label>
            </div>
            <div class="mb-3">
                <label>Status of booking:
                    <select class="form-control nice-select form-control-lg" name="status">
                        <option value="<?php echo $row['status']; ?>" selected><?php echo $row['status']; ?></option>
                        <option value="new"> new </option>
                        <option value="confirmed"> confirmed </option>
                        <option value="rejected"> rejected </option>
                        <option value="not answered"> not answered </option>
                        <option value="need to call back"> need to call back </option>
                    </select>
                </label>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-info btn-lg">Save</button>
            </div>
        </form>
    </div>

</div>