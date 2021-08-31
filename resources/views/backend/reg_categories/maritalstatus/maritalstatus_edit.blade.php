@extends('layouts.backend.backend_master')
@section('title', 'Edit||Maritalstatus Category')
@push('css')
@endpush
@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Dashboard</h4>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Edit Marital Status</h4>
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2">
                                @include('error')
                                <form method="POST" action="{{ route('admin.maritalstatus.update', $data->id) }}">
                                    @csrf
                                    @method('put')
                                    <fieldset class="form-group">
                                        <label for="">Citizenship</label>
                                        <input type="text" class="form-control" id=""
                                            name="maritalstatus" value="{{ $data->maritalstatus }}">
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary">Save Data</button>
                                </form>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->
</div>
@endsection

@push('js')
 



@endpush
    
