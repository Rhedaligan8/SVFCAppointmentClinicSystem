<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp text-2xl">Make an Appointment</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
              <option disabled selected>Select your grade level</option>
              <option value="general">for testing 1</option>
              <option value="cardiology">for testing 2</option>
              <option value="dental">for testing 3</option>
              <option value="neurology">for testing 4</option>
              <option value="orthopaedics">for testing 5</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>
        @if (auth()->check()) 
    <button type="submit" class="btn btn-primary mt-3 wow zoomIn">
        Submit Request
    </button>
@else
    <button type="button" onclick="showModal('login-modal')" class="px-4 py-2 text-white rounded-md flex items-center gap-2" style="background-color: green;">
        <i class="fa-solid fa-triangle-exclamation text-yellow-400"></i> <!-- Warning Icon -->
        Submit Appointment
    </button>
@endif

      </form>
    </div>
 