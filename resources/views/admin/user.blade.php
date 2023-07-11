@extends('layouts.main')

@section('container')
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title mt-5">
                <h1>Users</h1>
            </div>

            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="php-email-form">
                        <div class="create mb-3">
                            <a href="{{ route('create-user') }}" class="btn-create"><i class="bi bi-plus-square"></i>
                                Tambah User</a>
                        </div>
                        <div class="col-lg-12 mt-lg-0 d-flex align-items-stretch mx-auto" data-aos="fade-up"
                            data-aos-delay="200">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>
                                                <a href="{{ route('admin-inventory', ['id' => $user->id]) }}"
                                                    class="btn-edit">Inventory</a>
                                                <a href="{{ route('admin-finance', ['id' => $user->id]) }}"
                                                    class="btn-edit">Finance</a>
                                                <a href="{{ route('edit-user', ['user' => $user]) }}"
                                                    class="btn-edit">Edit</a>
                                                <a href="{{ route('delete-user', ['user' => $user]) }}"
                                                    class="btn-delete">Delete</a>
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
