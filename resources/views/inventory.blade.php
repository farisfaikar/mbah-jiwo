@extends('layouts.main')

@section('container')
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title mt-5">
                <h1>Inventory</h1>
            </div>

            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="php-email-form">
                        <div class="create mb-3">
                            <button type="create"><i class="bi bi-plus-square"></i> Tambah Data</button>
                        </div>
                        <div class="col-lg-12 mt-lg-0 d-flex align-items-stretch mx-auto" data-aos="fade-up"
                            data-aos-delay="200">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Barang</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Harga Kategori</th>
                                        <th scope="col">Harga Beli</th>
                                        <th scope="col">Harga Jual</th>
                                        <th scope="col">Jumlah Stok</th>
                                        <th scope="col">Jumlah Terjual</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Nike Court Low Vision</td>
                                        <td>Sepatu</td>
                                        <td>Rp700.000</td>
                                        <td>Rp800.000</td>
                                        <td>10</td>
                                        <td>23</td>
                                        <td>
                                            <button type="edit">Edit</button>
                                            <button type="delete">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">002</th>
                                        <td>Macbook Pro M1</td>
                                        <td>Elektronik</td>
                                        <td>Rp18.000.000</td>
                                        <td>Rp20.000.000</td>
                                        <td>5</td>
                                        <td>7</td>
                                        <td>
                                            <button type="edit">Edit</button>
                                            <button type="delete">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">003</th>
                                        <td>H&M White Shirt</td>
                                        <td>Baju</td>
                                        <td>Rp400.000</td>
                                        <td>Rp500.000</td>
                                        <td>20</td>
                                        <td>32</td>
                                        <td>
                                            <button type="edit">Edit</button>
                                            <button type="delete">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
