@extends('layouts.main')

@section('container')
<section>
        <!-- ======= Inventory Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="d-flex justify-content-center" >
            <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="section-title">
                    <h1>Inventory</h1>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Id Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Beli</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Jumlah Stok</th>
                        <th scope="col">Jumlah Terjual</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td >Apple Watch Series 7</td>
                        <td>Rp3.000.000</td>
                        <td>Rp4.000.000</td>
                        <td>Electronics</td>
                        <td>42</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td >Macbook Pro M1</td>
                        <td>Rp13.000.000</td>
                        <td>Rp15.000.000</td>
                        <td>Electronics</td>
                        <td>32</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td >Dell Inspiron 15</td>
                        <td>Rp6.500.000</td>
                        <td>Rp8.000.000</td>
                        <td>Electronics</td>
                        <td>126</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td >Iphone 13 Pro</td>
                        <td>Rp13.000.000</td>
                        <td>Rp15.000.000</td>
                        <td>Electronics</td>
                        <td>50</td>
                        <td>25</td>
                    </tr>
                    </tbody>
                </table>
                <div class="text-center"><button type="submit">Add data</button></div>
                </form>
            </div>            
            </div>
        </div>

        </div>
    </section><!-- End Inventory Section -->
</section>
@endsection