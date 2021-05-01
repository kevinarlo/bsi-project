@extends('layouts.admin')
@section('title', 'Admin')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Bumi Sukasari Indah</h1>
                    </div>
                    
                    <!-- Content Row -->
                    <div class="row">

                        {{-- Data Foto --}}
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-comment-dots fa-2x text-gray-300"></i>
                                        </div>
                                        <div class="col ml-4">
                                            <div class="text-xs font-weight-bold text-info text-uppercase"><h5>Data Pesan</h5></div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $items }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
@endsection