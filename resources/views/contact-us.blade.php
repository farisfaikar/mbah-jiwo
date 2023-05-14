@extends('layouts.main')

@section('container')
<section>
 <!-- ======= Contact Us Section ======= -->
 <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h1>Contact Us</h1>
      </div>

      <div class="row">
        <div class="d-flex justify-content-center" >
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">First Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter your first name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Last name</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter your last name" required>
                </div>
              </div>
              <div class="form-group mt-3 mb-3">
                <label for="name">Email</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter your email address" required>
              </div>
              <label for="selectExample mt-3">Subject</label>
              <select class="form-select rounded-0 mb-3" aria-label="Default select example">
                <option selected>Select subject</option>
                <option value="1">Customer Service</option>
              </select>
              <div class="form-group mt-3 mb-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Type your subject" required>
              </div>
              <div class="form-group mt-3 mb-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" placeholder="Write your massage" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Submit</button></div>
            </form>
          </div>            
        </div>
      </div>

    </div>
  </section>

</section>
@endsection