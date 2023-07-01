@extends('layouts.main')

@section('container')
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1>I am Super Admin Shithead Asshole</h1>
            </div>
            <div class="row">
                <h2>{{ $data->cool_name }}</h2>
                <h2>{{ $data->cool_level }}</h2>
            </div>
        </div>
    </section>
@endsection
