<?php

use App\Models\User;
use App\Models\Publication;
use App\Models\Soutien;
use App\Models\Soutienpostevent;

use Illuminate\Support\Facades\Route;

        $nombre_femme = DB::table('users')->where('sexe', 'F')->count();
        $nombre_homme = DB::table('users')->where('sexe', 'M')->count();
        $ligne = DB::table('users')->count();
        $ligne2 = User::all()->where('status', 'Active now');
        $ligne3 = User::all()->where('status', 'Active now')->count();
        $offligne2 = User::all()->where('status', 'Desactive now');
        $allevent = Soutienpostevent::all();
        $allevents = User::all()->count();

?>
@extends('layouts.admin-app')
@section('admin')
            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-image" style="background-image: url('assets/media/photos/photo13@2x.jpg');">
                    <div class="bg-black-50">
                        <div class="content content-full">
                            <div class="d-flex justify-content-between align-items-center">
                                <h1 class="flex-fill font-size-h2 text-white my-2">
                                    <i class="fa fa-boxes text-white-50 mr-1"></i> All Evenements
                                </h1>
                                <a class="btn btn-primary my-2" href="be_pages_projects_create.html">
                                    <i class="fa fa-fw fa-plus"></i>
                                    <span class="d-none d-sm-inline ml-1">New Evenements</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    @if ($message = Session::get('success'))
                    <div class=".alert alert-success">
                        <P>{{$message }}</P>
                    </div>
                    @endif
                    <form action="be_pages_projects_dashboard.html" method="POST" onsubmit="return false;">
                        <div class="form-group row items-push mb-0">
                            <div class="col-sm-6 col-xl-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-white">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control border-left-0" id="dm-projects-search" name="dm-projects-search" placeholder="Search Projects..">
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3 offset-xl-6">
                                <select class="custom-select" id="dm-projects-filter" name="dm-projects-filter">
                                    <option value="all">All ({{ $allevents }})</option>
                                    {{-- <option value="active">Active (3)</option>
                                    <option value="pending">Desactive (1)</option> --}}

                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="row row-deck">
                        @foreach ($allevent as $item)

                        <div class="col-md-6 col-xl-4">
                            <!-- Project #1 -->
                            <div class="block block-rounded">
                                <div class="block-header">
                                    <div class="flex-fill text-muted font-size-sm font-w600">
                                        <i class="fa fa-clock mr-1"></i> {{ $item->date }}
                                    </div>
                                    <div class="block-options">
                                        <div class="dropdown">
                                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="fa fa-fw fa-users mr-1"></i> People
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="fa fa-fw fa-bell mr-1"></i> Alerts
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="fa fa-fw fa-check-double mr-1"></i> Tasks
                                                </a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="be_pages_projects_edit.html">
                                                    <i class="fa fa-fw fa-pencil-alt mr-1"></i> Edit Project
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content bg-body-light text-center">
                                    <h3 class="font-size-h4 font-w700 mb-1">
                                        <a href="#">{{ $item->email }}</a>
                                    </h3>
                                    <?php
                                    $Author = User::all()->where('id', $item->user_id);
                                    $orders = DB::table('soutienpostevents')
                                    ->select('personne_attending')
                                    ->where('id', $item->id)
                                    ->get()
                                    ?>
                                    <h4 class="font-size-h6 text-muted mb-3">@foreach ($Author as $yeb)
                                        {{ $yeb->name }}
                                    @endforeach</h4>
                                    <div class="push">
                                        <img width="320" height="240" class="card-img" src="{{ asset('storage') . '/' . $item->path }}" alt="Post">
                                    </div>
                                </div>
                                <div class="block-content text-center">
                                    <a class="img-link m-1" href="javascript:void(0)">
                                        +@foreach ($orders as $item)
                            {{ $item->personne_attending }}
                          @endforeach
                                        <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="row gutters-tiny">
                                        <div class="col-6">
                                            <a class="btn btn-block btn-alt-primary" href="be_pages_projects_tasks.html">
                                                <i class="fa fa-eye mr-1 opacity-50"></i> View
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a class="btn btn-block btn-alt-primary" href="javascript:void(0)">
                                                <i class="fa fa-archive mr-1 opacity-50"></i> Archive
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- END Project #1 -->
                        </div> @endforeach
                                                </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
@endsection