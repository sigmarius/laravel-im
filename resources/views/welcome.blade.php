@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <h1 class="mb-2">Install Bootstrap in Laravel with CoderAdvise.com</h1>
    </div>
    <div class="bt-icons fs-1">
        <i class="bi bi-airplane-fill"></i>
        <i class="bi bi-apple"></i>
        <i class="bi bi-balloon-heart"></i>
        <i class="bi bi-alarm-fill text-success"></i>
    </div>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{ Vite::image('hedgehog.png') }}" class="d-block mx-lg-auto img-fluid"
                     alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most
                    popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
            </div>
        </div>
    </div>
@endsection
