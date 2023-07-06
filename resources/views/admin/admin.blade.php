@extends('layouts.main')

@section('container')
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title mt-5">
                <h1>Admin Data</h1>
            </div>

            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="php-email-form">
                        <div class="col-lg-12 mt-lg-0 d-flex align-items-stretch mx-auto" data-aos="fade-up"
                            data-aos-delay="200">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Job</th>
                                        <th scope="col">Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $data['name'] }}</td>
                                        <td>{{ $data['email'] }}</td>
                                        <td>{{ $data['job'] }}</td>
                                        <td>{{ $data['salary'] }}</td>
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
