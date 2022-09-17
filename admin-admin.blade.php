<?php

use App\Models\User;

?>
@extends('layouts.admin-app')
@section('admin')

            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">DataTables</h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Tables</li>
                                    <li class="breadcrumb-item active" aria-current="page">AdminTables</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <?php $user = User::all()->where('role', 1 )?>


                <!-- END Hero -->

                                        <!-- Dynamic Table with Export Buttons -->
                                        <div class="block block-rounded">
                                            <div class="block-header block-header-default">
                                                <h3 class="block-title">Il est possible <small>d'exporté les tables</small></h3>
                                            </div>
                                            <div class="block-content block-content-full">
                                                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                                                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" style="width: 80px;">#</th>
                                                            <th>Name</th>
                                                            <th class="d-none d-sm-table-cell" style="width: 30%;">Surname</th>
                                                            <th class="d-none d-sm-table-cell" style="width: 15%;">email</th>
                                                            <th style="width: 15%;">Registered</th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($user as $item)

                                                        <tr>
                                                            <td class="text-center">{{ $item->id }}</td>
                                                            <td class="font-w600">
                                                                <a href="#">{{ $item->name }}</a>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <em class="text-muted">{{ $item->surname }}</em>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="badge badge-success">{{ $item->email }}</span>
                                                            </td>
                                                            <td>
                                                                <em class="text-muted">{{ $item->created_at }}</em>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
@endsection