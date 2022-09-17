<?php
    use App\Models\User;
    use App\Models\Publication;

    use Illuminate\Support\Facades\Route;
    use App\Models\Soutienpost;

    $vid=soutienpost::all();

    ?>
@extends('layouts.admin-app')
@section('admin')
<main id="main-container">
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Gallery</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Components</li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
               <!-- Advanced Gallery -->
        <h2 class="content-heading">Advanced</h2>
        <div class="row items-push js-gallery">
            @foreach ($vid as $item)

            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
                    <img width="320" height="240" class="card-img" src="{{ asset('storage') . '/' . $item->path }}" alt="image">
                    <div class="options-overlay bg-black-75">
                        <div class="options-overlay-content">
                            <?php
                            $yebga = User::all()->where('id', $item->user_id);
                            ?>
                            <h3 class="h4 text-white mb-1">@foreach ($yebga as $yeb)
                                {{ $yeb->name }}
                            @endforeach </h3>
                            <h4 class="h6 text-white-75 mb-3">{{ $item->number }}</h4>
                            <a class="btn btn-sm btn-primary img-lightbox" href="{{ asset('storage') . '/' . $item->path }}">
                                <i class="fa fa-search-plus mr-1"></i> View
                            </a>
                        </div>
                    </div>
                </div>
            </div>@endforeach

        </div>
        <!-- END Advanced Gallery -->
    </div>
    <!-- END Page Content -->
</main>
@endsection
