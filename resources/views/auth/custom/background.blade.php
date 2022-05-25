@extends('layout.app')
@section('title', 'Custom Background')
@section('content')
<!-- BEGIN: Content-->
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">@yield(('title'))</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Custom Layar User</a>
                                </li>
                                <li class="breadcrumb-item active">Background
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                {{-- <div class="card-header">
                                    <h4 class="card-title">Custom Background</h4>
                                </div> --}}
                                <div class="card-body">
                                    <form class="form form-vertical" action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-vertical">Pilih Image</label>
                                                    <input type="file" id="first-name-vertical" class="form-control" name="fname" placeholder="First Name" />
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-secondary me-1">Batal</button>
                                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </section>
                <!-- Basic Vertical form layout section end -->
                </div>
            </div>

        </div>
<!-- END: Content-->
@endsection