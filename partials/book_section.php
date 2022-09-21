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
          <form id="ajaxForm" action="" method="POST">
            <div>
              <input type="text" class="form-control" placeholder="Your Name" name="name" required>
            </div>
            <div>
              <input type="tel" class="form-control" placeholder="Phone Number" name="phone" required>
            </div>
            <div>
              <input type="email" class="form-control" placeholder="Your Email" name="email">
            </div>
            <div>
              <select class="form-control nice-select wide" name="persons" required>
                <option value="" selected disabled>
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
              <input type="date" class="form-control" name="date">
            </div>
            <div class="btn_box">
              <button type="submit">
                Book Now
              </button>
            </div>
          </form>
          <!-- message about result from server -->
          <div id="my_message">

          </div>
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