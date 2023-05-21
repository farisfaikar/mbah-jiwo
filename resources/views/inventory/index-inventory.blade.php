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
                            <a href="{{ route('create-inventory') }}" class="btn-create"><i
                                    class="bi bi-plus-square"></i> Tambah Data</a>
                        </div>
                        <div class="col-lg-12 mt-lg-0 d-flex align-items-stretch mx-auto" data-aos="fade-up"
                            data-aos-delay="200">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Harga Beli</th>
                                        <th scope="col">Harga Jual</th>
                                        <th scope="col">Jumlah Stok</th>
                                        <th scope="col">Jumlah Terjual</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventory as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nama_barang }}</td>
                                            <td>{{ $item->kategori }}</td>
                                            <td>{{ $item->harga_beli }}</td>
                                            <td>{{ $item->harga_jual }}</td>
                                            <td>{{ $item->jumlah_stok }}</td>
                                            <td>{{ $item->jumlah_terjual }}</td>
                                            <td>
                                                <a href="{{ route('edit-inventory', ['id' => $item->id]) }}" class="btn-edit">Edit</a>
                                                <a href="{{ route('delete-inventory', ['id' => $item->id]) }}" class="btn-delete">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
