@extends('layouts.main')

@section('container')
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1>I am Guest Gayface</h1>
            </div>
            <div class="row">
                <h2>{{ $data->name }}</h2>
                <h2>{{ $data->username }}</h2>
                <h2>{{ $data->hobby }}</h2>
            </div>
        </div>
    </section>
@endsection
