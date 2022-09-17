<?php

use App\Models\User;
use App\Models\Publication;
use App\Models\Soutien;
use Illuminate\Support\Facades\Route;

    $homme= User::all()->where('sexe', 'M');
    $femme= User::all()->where('sexe', 'F');
    $soutien= User::all()->where('role', '2');

?>
@extends('layouts.admin-app')
@section('admin')
            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-image" style="background-image: url('assets/media/photos/photo17@2x.jpg');">
                    <div class="bg-black-25">
                        <div class="content content-full">
                            <div class="py-5 text-center">
                                <a class="img-link" href="be_pages_generic_profile.html">
                                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ asset('storage') . '/' . Auth::user()->path }}" alt="">
                                </a>
                                <h1 class="font-w700 my-2 text-white">Admin : {{Auth::user()->name}}</h1>
                                <h2 class="h4 font-w700 text-white-75">
                                    Product Manager <a class="text-primary-lighter" href="javascript:void(0)">@Arasdesign</a>
                                </h2>
                                <button type="button" class="btn btn-hero-primary"> <a href="/admin-add_Soutien" style="color: white">
                                    <i class="fa fa-fw fa-user-plus mr-1"></i> Add</a>
                                </button>
                                <button type="button" class="btn btn-hero-dark"><a href="/message" style="color: white">
                                    <i class="fa fa-fw fa-envelope mr-1"></i> Message</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content content-full content-boxed">
                    <!-- Latest All Users -->
                    <h2 class="content-heading">
                        <i class="si si-users mr-1"></i> All Users
                    </h2>

                    <div class="row">
                        @foreach ($homme as $yeb)

                        <div class="col-md-6 col-xl-3">
                            <div class="block block-rounded text-center">
                                <div class="block-content block-content-full bg-image" style="background-image: url('assets/media/photos/photo15.jpg');">
                                    <img class="img-avatar img-avatar-thumb" src="{{ asset('storage') . '/' . $yeb->path }}" alt="">
                                </div>
                                
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="font-w600">{{ $yeb -> name }}</div>
                                    <div class="font-size-sm text-muted">{{ $yeb -> email}}</div>
                                </div>
                                <div class="block-content block-content-full">
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-plus text-muted mr-1"></i> Add
                                    </a>
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-user-circle text-muted mr-1"></i> Profiles
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($femme as $yeb)

                        <div class="col-md-6 col-xl-3">
                            <div class="block block-rounded text-center">
                                <div class="block-content block-content-full bg-image" style="background-image: url('assets/media/photos/photo4.jpg');">
                                    <img class="img-avatar img-avatar-thumb" src="$yeb->path" alt="">
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="font-w600">{{ $yeb -> name }}</div>
                                    <div class="font-size-sm text-muted">{{ $yeb -> email}}</div>
                                </div>
                                <div class="block-content block-content-full">
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-plus text-muted mr-1"></i> Add
                                    </a>
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-user-circle text-muted mr-1"></i> Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    <!-- END All Users -->
                  <!-- Soutien -->

                    <!-- END Latest Projects -->

                    <!-- Latest Posts -->
                                <!-- END Main Container -->
</div>
<section>
    <h2 class="content-heading">
        <i class="fa fa-2x fa-hands-helping"></i> Soutien
    </h2>
    <div class="row">
        @foreach ( $soutien as $soutiens )
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded text-center">
                <div class="block-content block-content-full bg-info">
                    <div class="my-3">
                        <img class="img-avatar img-avatar-thumb" src="{{ asset('storage') . '/' . $soutiens->path }}" alt="Photo {{ $soutiens->name }}">
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600">{{ $soutiens->name }}</div>
                    <div class="font-size-sm text-muted">{{ $soutiens->email}}</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                        <i class="fa fa-briefcase text-muted mr-1"></i> Détails
                    </a>
                </div>
            </div>
        </div>                        @endforeach

      </div>
</section>
            <!-- Footer -->
@endsection
