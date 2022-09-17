@extends('layouts.admin-app')
@section('admin')
<?php

use App\Models\User;
use App\Models\Publication;
use App\Models\Soutien;
use App\Models\Soutienpostsimple;
use App\Models\Soutienpostevent;
use App\Models\Soutienpostv;
use App\Models\Soutienpost;

use Illuminate\Support\Facades\Route;


        $ligne = DB::table('users')->count();
        $ligne2 = User::all()->where('status', 'Active now');
        $ligne3 = User::all()->where('statut', 'Active now')->count();
        $offligne2 = User::all()->where('status', 'Desactive now');
        $simple = Soutienpostsimple::all()->count();
        $event = Soutienpostevent::all()->count();
        $video = Soutienpostv::all()->count();
        $photo = Soutienpost::all()->count();
        $yebga =  $video  + $photo ;
        $yebga1 = $simple + $event ;
        $yebga2 = $simple + $event + $photo + $video ;
        $all = Soutienpostsimple::all();
        $all1 = Soutienpostevent::all();
        $all2 = Soutienpostv::all();
        $all3 = Soutienpost::all();

?>

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
                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Manage All Posts</h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Pages</li>
                                    <li class="breadcrumb-item">Blog</li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content content-full">
                    <!-- Posts Statistics -->
                    <div class="row text-center">
                        <div class="col-6 col-xl-3">
                            <!-- All Posts -->
                            <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                                <div class="block-content block-content-full">
                                    <div class="py-md-3">
                                        <div class="py-3 d-none d-md-block">
                                            <i class="far fa-2x fa-file-alt opacity-50"></i>
                                        </div>
                                        <p class="font-size-h3 font-w700 mb-0">
                                            {{ $yebga2 }}
                                        </p>
                                        <p class="text-muted mb-0">
                                            All Posts
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- END All Posts -->
                        </div>
                        <div class="col-6 col-xl-3">
                            <!-- Active Posts -->
                            <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                                <div class="block-content block-content-full">
                                    <div class="py-md-3">
                                        <div class="py-3 d-none d-md-block">
                                             <i class="far fa-2x fa-eye opacity-50"></i>
                                        </div>
                                        <p class="font-size-h3 font-w700 mb-0">
                                            {{ $yebga }}
                                        </p>
                                        <p class="text-muted mb-0">
                                            Photos & Videos
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- END Active Posts -->
                        </div>
                        <div class="col-6 col-xl-3">
                            <!-- Draft Posts -->
                            <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                                <div class="block-content block-content-full">
                                    <div class="py-md-3">
                                        <div class="py-3 d-none d-md-block">
                                            <i class="fa fa-2x fa-pencil-alt opacity-50"></i>
                                        </div>
                                        <p class="font-size-h3 font-w700 mb-0">
                                            {{ $yebga1 }}
                                        </p>
                                        <p class="text-muted mb-0">
                                            Textes & Evenements                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- END Draft Posts -->
                        </div>
                        <div class="col-6 col-xl-3">
                            <!-- New Post -->
                            <a class="block block-rounded" href="be_pages_blog_post_add.html">
                                <div class="block-content block-content-full">
                                    <div class="py-md-3">
                                        <div class="py-3 d-none d-md-block">
                                            <i class="fa fa-2x fa-plus text-success-light"></i>
                                        </div>
                                        <p class="font-size-h3 font-w700 mb-0">
                                            <i class="fa fa-plus text-success-light mr-1 d-md-none"></i> New Post
                                        </p>
                                        <p class="text-muted mb-0">
                                            by Admin Yebga Brayan
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- END New Post -->
                        </div>
                    </div>
                    <!-- Post Statistics -->

                    <!-- Posts -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Posts ({{ $yebga2 }})</h3>
                        </div>
                        <div class="block-content">
                            <!-- Search Posts -->
                            <form class="push" action="be_pages_blog_post_manage.html" method="POST">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts..">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-fw fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>
                            <!-- END Search Posts -->

                            <!-- Posts Table -->
                            <table class="table table-striped table-borderless table-vcenter">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 60px;">ID</th>
                                        <th style="width: 33%;">libellé</th>
                                        <th class="d-none d-sm-table-cell">Author</th>
                                        <th class="d-none d-xl-table-cell">created_at</th>
                                        <th class="d-none d-xl-table-cell">updated_at</th>
                                        <th style="width: 100px;" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach ($all as $alls )

                                    <tr>
                                        <td>
                                            {{ $all->id }}
                                        </td>
                                        <td>
                                            <i class="fa fa-eye text-success mr-1"></i>
                                            <a href="be_pages_blog_story.html">
                                                {{ $all->libellé }}
                                            </a>
                                        </td>
                                        <?php
                                        $Author = User::all()->where('id', $all->user_id);
                                        ?>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">@foreach ($Author as $item)
                                                {{ $item->name }}
                                            @endforeach</a>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            {{ $all->updated_at }}
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                           {{ $all->created_at }}

                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                                                <?php DB::table('soutienpostsimples')->where('id', '=', $all->id)->delete();?>
                                            </a>
                                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-times text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                                                @foreach ($all1 as $all )

                                    <tr>
                                        <td>
                                            {{ $all->id }}
                                        </td>
                                        <td>
                                            <i class="fa fa-eye text-success mr-1"></i>
                                            <a href="be_pages_blog_story.html">
                                                {{ $all->libellé }}
                                            </a>
                                        </td>
                                        <?php
                                        $Author = User::all()->where('id', $all->user_id);
                                        ?>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">@foreach ($Author as $item)
                                                {{ $item->name }}
                                            @endforeach</a>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            {{ $all->updated_at }}
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                           {{ $all->created_at }}

                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                                                <?php DB::table('soutienpostsimples')->where('id', '=', $all->id)->delete();?>
                                            </a>
                                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-times text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @foreach ($all1 as $all )

                                    <tr>
                                        <td>
                                            {{ $all->id }}
                                        </td>
                                        <td>
                                            <i class="fa fa-eye text-success mr-1"></i>
                                            <a href="be_pages_blog_story.html">
                                                {{ $all->libellé }}
                                            </a>
                                        </td>
                                        <?php
                                        $Author = User::all()->where('id', $all->user_id);
                                        ?>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">@foreach ($Author as $item)
                                                {{ $item->name }}
                                            @endforeach</a>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            {{ $all->updated_at }}
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                           {{ $all->created_at }}

                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                                                <?php DB::table('soutienpostsimples')->where('id', '=', $all->id)->delete();?>
                                            </a>
                                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-times text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @foreach ($all3 as $all )

                                    <tr>
                                        <td>
                                            {{ $all->id }}
                                        </td>
                                        <td>
                                            <i class="fa fa-eye text-success mr-1"></i>
                                            <a href="be_pages_blog_story.html">
                                                {{ $all->libellé }}
                                            </a>
                                        </td>
                                        <?php
                                        $Author = User::all()->where('id', $all->user_id);
                                        ?>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="#">@foreach ($Author as $item)
                                                {{ $item->name }}
                                            @endforeach</a>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            {{ $all->updated_at }}
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                           {{ $all->created_at }}

                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                                                <?php DB::table('soutienpostsimples')->where('id', '=', $all->id)->delete();?>
                                            </a>
                                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-times text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>


                            </table>
                            <!-- END Posts Table -->

                            <!-- Posts Pagincation -->
                            <nav aria-label="Posts Navigation">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                            <span aria-hidden="true">
                                                <i class="fa fa-angle-double-left"></i>
                                            </span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="javascript:void(0)">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                            <span aria-hidden="true">
                                                <i class="fa fa-angle-double-right"></i>
                                            </span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- END Posts Pagincation -->
                        </div>
                    </div>
                    <!-- END Posts -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
@endsection
