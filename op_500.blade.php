@extends('layouts.admin-app')
@section('admin')
<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo20@2x.jpg');">
            <div class="hero bg-gd-sublime-op align-items-sm-end">
                <div class="hero-inner">
                    <div class="content content-full">
                        <div class="px-3 py-5 text-center text-sm-right">
                            <div class="display-1 text-black font-w300">500</div>
                            <h1 class="h2 font-w700 text-white mt-5 mb-3">Oops.. You just found an error page..</h1>
                            <h2 class="h3 font-w400 text-white-75 mb-5">We are sorry but your request contains bad syntax and cannot be fulfilled..</h2>
                            <a class="btn btn-hero-dark" href="/Admin-All_error">
                                <i class="fa fa-arrow-left mr-1"></i> Back to all Errors
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->
@endsection