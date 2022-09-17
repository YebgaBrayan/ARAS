<?php

use App\Models\User;
use App\Models\Publication;
use App\Models\Soutien;

use Illuminate\Support\Facades\Route;

        $nombre_femme = DB::table('users')->where('sexe', 'F')->count();
        $nombre_homme = DB::table('users')->where('sexe', 'M')->count();
        $ligne = DB::table('users')->count();
        $ligne2 = User::all()->where('status', 'Active now');
        $ligne3 = User::all()->where('status', 'Active now')->count();
        $offligne2 = User::all()->where('status', 'Desactive now');

?>
@extends('layouts.admin-app')
@section('admin')
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="content">
                    <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-left">
                        <div>
                            <h1 class="h2 mb-1">
                                Dashboard
                            </h1>
                            <p class="mb-0">
                                Bienvenue, admin! Vous avez <a class="font-w500" href="javascript:void(0)">5 new notifications</a>.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->
                <div class="content">
                    <!-- Weather -->
                    <h2 class="content-heading">Weather</h2>
                    <div class="row">
                        <div class="col-xl-8">
                            <!-- Multiple Days -->
                            <div class="block block-rounded bg-image" style="background-image: url('assets/media/photos/photo20.jpg');">
                                <div class="block-content d-flex justify-content-between pt-4 pb-7 text-white bg-black-50">
                                    <div>
                                        <p class="font-size-h3 font-w600 mb-0">
                                            Cameroun
                                        </p>
                                        <p class="text-white-75 mb-0">
                                            Yaoundé
                                        </p>
                                    </div>
                                    <p class="font-size-h1 mb-0 text-right">
                                        <strong>21</strong>° <span class="text-white-75">C</span>
                                    </p>
                                </div>
                                <div class="block-content p-0 bg-body-light">
                                    <div class="row no-gutters text-center">
                                        <div class="col-6 col-xl-2 border-right border-bottom p-3">
                                            <p class="font-size-sm font-w600 text-uppercase mb-1">
                                                Mon
                                            </p>
                                            <div class="font-size-lg">
                                                <strong>11° C</strong><br>
                                                <small class="text-muted">Sunny</small>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-2 border-right border-bottom p-3">
                                            <p class="font-size-sm font-w600 text-uppercase mb-1">
                                                Tue
                                            </p>
                                            <div class="font-size-lg">
                                                <strong>14° C</strong><br>
                                                <small class="text-muted">Sunny</small>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-2 border-right border-bottom p-3">
                                            <p class="font-size-sm font-w600 text-uppercase mb-1">
                                                Wed
                                            </p>
                                            <div class="font-size-lg">
                                                <strong>15° C</strong><br>
                                                <small class="text-muted">Cloudy</small>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-2 border-right border-bottom p-3">
                                            <p class="font-size-sm font-w600 text-uppercase mb-1">
                                                Thu
                                            </p>
                                            <div class="font-size-lg">
                                                <strong>16° C</strong><br>
                                                <small class="text-muted">Cloudy</small>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-2 border-right border-bottom p-3">
                                            <p class="font-size-sm font-w600 text-uppercase mb-1">
                                                Fri
                                            </p>
                                            <div class="font-size-lg">
                                                <strong>18° C</strong><br>
                                                <small class="text-muted">Rainy</small>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-2 border-bottom p-3">
                                            <p class="font-size-sm font-w600 text-uppercase mb-1">
                                                Sat
                                            </p>
                                            <div class="font-size-lg">
                                                <strong>26° C</strong><br>
                                                <small class="text-muted">Sunny</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Multiple Days -->
                        </div>
                        <div class="col-xl-4">
                            <!-- Two Days -->
                            <div class="block block-rounded bg-image" style="background-image: url('assets/media/photos/photo4.jpg');">
                                <div class="block-content d-flex justify-content-between pt-4 pb-7 text-white bg-primary-op">
                                    <div>
                                        <p class="font-size-h3 font-w600 mb-0">
                                            Cameroun
                                        </p>
                                        <p class="text-white-75 mb-0">
                                            Douala
                                        </p>
                                    </div>
                                    <p class="font-size-h1 mb-0 text-right">
                                        <strong>27</strong>° <span class="text-white-75">C</span>
                                    </p>
                                </div>
                                <div class="block-content p-0 bg-body-light">
                                    <div class="row no-gutters text-center">
                                        <div class="col-6 border-right border-bottom p-3">
                                            <p class="font-size-sm font-w600 text-uppercase mb-1">
                                                Mon
                                            </p>
                                            <div class="font-size-lg">
                                                <strong>22° C</strong><br>
                                                <small class="text-muted">Cloudy</small>
                                            </div>
                                        </div>
                                        <div class="col-6 border-bottom p-3">
                                            <p class="font-size-sm font-w600 text-uppercase mb-1">
                                                Tue
                                            </p>
                                            <div class="font-size-lg">
                                                <strong>19° C</strong><br>
                                                <small class="text-muted">Rainy</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Two Days -->
                        </div>

                    <!-- END Projects -->
                </div>


                <!-- Page Content -->
                <div class="content">
                    <!-- Overview -->
                    <div class="row row-deck">
                        <div class="col-sm-6 col-xl-3">
                            <div class="block block-rounded text-center d-flex flex-column">
                                <div class="block-content block-content-full flex-grow-1">
                                    <div class="item rounded-lg bg-body-dark mx-auto my-3">
                                        <i class="fa fa-users text-muted"></i>
                                    </div>
                                    <div class="text-black font-size-h1 font-w700">{{ $ligne }}</div>
                                    <div class="text-muted mb-3">All users</div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                                    <a class="font-w500" href="javascript:void(0)">
                                        Voir Tout
                                        <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="block block-rounded text-center d-flex flex-column">
                                <div class="block-content block-content-full flex-grow-1">
                                    <div class="item rounded-lg bg-body-dark mx-auto my-3">
                                        <i class="fa fa-2x fa-female"></i>                                    </div>
                                    <div class="text-black font-size-h1 font-w700">{{ $nombre_femme }}</div>
                                    <div class="text-muted mb-3">Females</div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                                    <a class="font-w500" href="javascript:void(0)">
                                        Voir Tout
                                        <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="block block-rounded text-center d-flex flex-column">
                                <div class="block-content block-content-full flex-grow-1">
                                    <div class="item rounded-lg bg-body-dark mx-auto my-3">
                                        <i class="fa fa-2x fa-male"></i>
                                                                        </div>
                                    <div class="text-black font-size-h1 font-w700">{{ $nombre_homme }}</div>
                                    <div class="text-muted mb-3">Males</div>

                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                                    <a class="font-w500" href="javascript:void(0)">
                                        Voir Tout
                                        <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="block block-rounded text-center d-flex flex-column">
                                <div class="block-content block-content-full">
                                    <div class="item rounded-lg bg-body-dark mx-auto my-3">
                                        <i class="fa fa-2x fa-broadcast-tower"></i>
                                                                        </div>
                                    <div class="text-black font-size-h1 font-w700">{{ $ligne3}}</div>
                                    <div class="text-muted mb-3">En ligne</div>

                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                                    <a class="font-w500" href="javascript:void(0)">
                                        Voir Tout
                                        <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Overview -->



                    <!-- Latest Orders + Stats -->
                    <div class="row">
                        <div class="col-md-8">
                            <!--  Latest Orders -->
                            <div class="block block-rounded block-mode-loading-refresh">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">
                                        Utilisateur Connectée
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <div class="dropdown">
                                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="si si-chemistry"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="far fa-fw fa-dot-circle opacity-50 mr-1"></i> Pending
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="far fa-fw fa-times-circle opacity-50 mr-1"></i> Canceled
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="far fa-fw fa-check-circle opacity-50 mr-1"></i> Completed
                                                </a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="fa fa-fw fa-eye opacity-50 mr-1"></i> View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm">
                                        <thead>
                                            <tr class="text-uppercase">
                                                <th>Noms & Prenoms</th>
                                                <th class="d-none d-xl-table-cell">emails</th>
                                                <th>numeros</th>
                                                <th class="d-none d-sm-table-cell text-right" style="width: 120px;">Sexes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ligne2 as $yeb)
                                            <tr>
                                                <td>
                                                    <span class="font-w600">{{$yeb->name}} {{$yeb->surname}}</</span>
                                                </td>
                                                <td class="d-none d-xl-table-cell">
                                                    <span class="font-size-sm text-muted">{{$yeb->email}}</span>
                                                </td>
                                                <td>
                                                    <span class="font-w600 text-warning">{{$yeb->number}}</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-right font-w500">
                                                    {{$yeb->sexe}}
                                                </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm text-center">
                                    <a class="font-w500" href="javascript:void(0)">
                                        View all orders
                                        <i class="fa fa-arrow-right ml-1 opacity-25"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- END Latest Orders -->
                        </div>
            </main>

@endsection
