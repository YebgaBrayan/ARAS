@extends('layouts.admin-app')
@section('admin')
<!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-header-dark">
                    <div class="bg-white-10">
                        <div class="content-header">
                            <div class="w-100 text-center">
                                <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero Section -->
                <div class="bg-image" style="background-image: url('assets/media/photos/photo23@2x.jpg');">
                    <div class="bg-gd-white-op-rl text-center">
                        <div class="content content-boxed content-full py-5 py-md-7">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-xl-6">
                                    <h1 class="h2 mb-2">
                                        Find your dream job <span class="text-primary">today</span>.
                                    </h1>
                                    <p class="font-size-lg font-w400 text-muted">
                                        We offer the most complete job platform to publish your job offers and apply for your dream job.
                                    </p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-sm-10 col-lg-8 col-xl-6">
                                    <div class="p-2 rounded bg-white shadow-sm">
                                        <form class="form-inline" action="be_pages_jobs_dashboard.html" method="POST" onclick="return false;">
                                            <label class="sr-only" for="example-job-search">Search Job</label>
                                            <input type="text" class="form-control form-control-alt p-4 mb-2 mr-sm-2 mb-sm-0 flex-grow-1" id="example-job-search" name="example-job-search" placeholder="Search Jobs..">
                                            <button type="submit" class="btn btn-hero-lg btn-hero-primary flex-grow-1 flex-sm-grow-0">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-5">
                                <div>
                                    <p class="px-2 px-sm-4 font-size-h3 text-dark mb-0">6,584</p>
                                    <p class="text-muted mb-0">
                                        Active Jobs
                                    </p>
                                </div>
                                <div class="px-2 px-sm-4 ml-2 ml-sm-4 border-left">
                                    <p class="font-size-h3 text-dark mb-0">2,960</p>
                                    <p class="text-muted mb-0">
                                        Freelancers
                                    </p>
                                </div>
                                <div class="px-2 px-sm-4 ml-2 ml-sm-4 border-left">
                                    <p class="font-size-h3 text-dark mb-0">980</p>
                                    <p class="text-muted mb-0">
                                        Companies
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero Section -->

                
            </main>
            <!-- END Main Container -->

@endsection



