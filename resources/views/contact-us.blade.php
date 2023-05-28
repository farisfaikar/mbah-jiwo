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
            <form action="{{ route('store-contact-us') }}" method="POST" role="form" class="php-email-form">
                @csrf
              <div class="row">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama" required>
                </div>
              </div>
              <div class="form-group mt-3 mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" required>
              </div>
              <label for="perihal">Perihal</label>
              <select class="form-select rounded-0 mb-3" aria-label="Default select example" name="perihal" required>
                <option value="Pelayanan Pelanggan" selected>Pelayanan Pelanggan</option>
                <option value="Umpan Balik">Umpan Balik</option>
              </select>
              <div class="form-group mt-3 mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul" required>
              </div>
              <div class="form-group mt-3 mb-3">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" name="pesan" rows="10" placeholder="Tulis pesan" required></textarea>
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
  </section><!-- End Contact Us Section -->

</section>
@endsection