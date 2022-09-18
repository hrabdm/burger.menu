<?php

if (!empty($_POST)) {
    $sql = "INSERT INTO `book` (`username`, `email`, `userphone`, `numberofguests`, `bookdate`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['userphone'] . "', '" . $_POST['persons'] . "', '" . $_POST['date'] . "')";
    if (mysqli_query($conn, $sql)) {
        echo "<h2>Дані оновлено<br><a href='/admin/book.php'>Повернутись</a></h2>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Book list</h6>
    </div>
    <div class="card-body">
        <form action="?page=add" method="POST">
            <label>Name: <input class="form-control form-control-lg" type="text" name="name"></label>
            <br>
            <label>Email: <input class="form-control form-control-lg" type="email" name="email"></label><br>
            <label>Userphone: <input class="form-control form-control-lg" type="tel" name="userphone" required></label><br>
            <select multiple class="form-control nice-select form-control-lg" name="persons">
                <option value="1" selected required>How many persons? (default "1 person")</option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
            </select>

    </div>
    <div>
        <input type="date" class="form-control form-control-lg" name="date" required>
    </div>
    <button type="submit" class="btn btn-info btn-lg">Save</button>
    </form>

</div>
</div>