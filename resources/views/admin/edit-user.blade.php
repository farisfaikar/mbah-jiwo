@extends('layouts.main')

@section('container')
    <section>
        <!-- ======= Edit User Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h1>Edit User</h1>
                </div>

                <div class="row">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                            <form action="{{ route('update-user', ['user' => $user]) }}" method="post" class="php-email-form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group mt-3 mb-3">
                                    <input type="text" name="id" class="form-control" id="id" value="{{ $user->id }}" hidden required>
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        value="{{ $user->name }}" required>
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        value="{{ $user->email }}" min="0" step="1000" required>
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="photo">Photo</label>
                                    <input type="file" class="form-control" name="photo" id="photo" accept="image/*">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Contact Us Section -->
    </section>
