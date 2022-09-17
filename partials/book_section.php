<section class="book_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        Book A Table
      </h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form_container">
          <form action="#" method="POST" id="formBook">
            <div>
              <input type="text" class="form-control" placeholder="Your Name" name="name" required />
            </div>
            <div>
              <input type="tel" class="form-control" placeholder="Phone Number" name="phone" required />
            </div>
            <div>
              <input type="email" class="form-control" placeholder="Your Email" name="email" />
            </div>
            <div>
              <select class="form-control nice-select wide" name="persons" required>
                <option value="0" selected>
                  How many persons?
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
              </select>
            </div>
            <div>
              <input type="date" class="form-control" name="date" required>
            </div>
            <div class="btn_box">
              <button type="submit">
                Book Now
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="map_container ">
          <div id="googleMap"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['date'])) {

  $sql =
    "INSERT INTO `book` (`username`, `userphone`, `email`, `numberofguests`, `bookdate`) VALUES ('" . $_POST['name'] . "', '" . $_POST['phone'] . "', '" . $_POST['email'] . "', '" . $_POST['persons'] . "', '" . $_POST['date'] . "')";


  if (mysqli_query($conn, $sql)) {
    echo 'Your request has been received';
  } else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
    echo 'Please, fill all fields before sending';
  }
}
?>