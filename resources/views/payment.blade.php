@extends('layouts.main')

@section('container')
<section>
    <!-- ======= Contact Us Section ======= -->
 <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
    <div class="section-title">
        <h1>Payment</h1>
        </div>

      <div class="row">
        <div class="d-flex justify-content-center" >
          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="create mb-3">
                    <button type="create"><i class="bi bi-plus-square"></i> Tambah Data</button>
                </div>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Sold</th>
                    <th scope="col">Profit</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">Apple Watch Series 7</td>
                    <td>Electronics</td>
                    <td>Rp3.000.000</td>
                    <td>124</td>
                    <td>42</td>
                    <td>Rp12.000.000</td>
                    <td>
                        <button type="edit">Edit</button>
                        <button type="delete">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td scope="row">Macbook Pro M1</td>
                    <td>Electronics</td>
                    <td>Rp13.000.000</td>
                    <td>32</td>
                    <td>23</td>
                    <td>Rp174.000.000</td>
                    <td>
                        <button type="edit">Edit</button>
                        <button type="delete">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td scope="row">Dell Inspiron 15</td>
                    <td>Electronics</td>
                    <td>Rp8.000.000</td>
                    <td>126</td>
                    <td>12</td>
                    <td>Rp123.000.000</td>
                    <td>
                        <button type="edit">Edit</button>
                        <button type="delete">Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>            
        </div>
      </div>

    </div>
  </section><!-- End Contact Us Section -->
</section>
@endsection