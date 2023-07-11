@extends('layouts.main')

@section('container')
    <section>
        <!-- ======= Create User Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h1>Create User</h1>
                </div>

                <div class="row">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                            <form action="{{ route('store-user') }}" method="post" class="php-email-form" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-3 mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Masukkan nama" required>
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Masukkan email" required>
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Masukkan password" required>
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="photo">Photo</label>
                                    <input type="file" class="form-control" name="photo" id="photo" accept="image/*">
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="role">Role</label>
                                    <select class="form-control" name="role" id="role" required>
                                        <option disabled selected>-- Pilih Role --</option>
                                        <option value="admin">Admin</option>
                                        <option value="client">Client</option>
                                    </select>
                                </div>
                                <div id="additionalForms"></div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Simpan Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Contact Us Section -->
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#role').change(function() {
                var role = $(this).val();
                $('#additionalForms').empty(); // Clear previously added forms

                if (role === 'admin') {
                    var jobForm = `
    <div class="form-group mt-3 mb-3">
    <label for="job">Job</label>
    <input type="text" class="form-control" name="job" id="job" placeholder="Enter job" required>
    </div>
    `;
                        var salaryForm = `
    <div class="form-group mt-3 mb-3">
    <label for="salary">Salary</label>
    <input type="text" class="form-control" name="salary" id="salary" placeholder="Enter salary" required>
    </div>
    `;
                        $('#additionalForms').append(jobForm + salaryForm);
                    } else if (role === 'client') {
                        var addressForm = `
    <div class="form-group mt-3 mb-3">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="Enter address" required>
    </div>
    `;
                        var phoneForm = `
    <div class="form-group mt-3 mb-3">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone" required>
    </div>
    `;
                    $('#additionalForms').append(addressForm + phoneForm);
                }
            });
        });
    </script>
@endsection
