@extends('masterlayouts.masterlayout')

@section('content')

<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="pages-profile.html" aria-expanded="false"><i
                            class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb" style="padding: 10px 30px">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                    </nav>
                <h1 class="mb-0 fw-bold">User Profile</h1> 
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid" style="padding: 10px 25px">
        <hr/>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('assets/'.$user->profil->photo)}}" class="rounded">
                    <div class="card-body">
                        <form method="POST" class="mt-1 form-group" enctype="multipart/form-data" action="/profil/{{$user->id}}/updatePhoto">
                            @method('put')
                            @csrf
                            <input type="file" name="file" accept="image/*" class="btn btn-light">
                            <center>
                                <input type="submit" name="submit" class="btn btn-primary mt-2 px-5" value="Update">
                            </center>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" class="form-group" action="/profile/{{ $user->id }}">
                            @method('put')
                            @csrf
                            <label for="name" class="mt-2">Nama Lengkap :</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $user->name  }}" style="outline: 0; border-width: 0 0 1px; border-color: grey">
                            <label for="email" class="mt-2">Email :</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" style="outline: 0; border-width: 0 0 1px; border-color: grey">
                            <label for="phone_number" class="mt-2">Nomor Telepon :</label>
                            <input type="text" name="phone" class="form-control" id="phone_number" value="{{ $user->profil->phone_number }}" style="outline: 0; border-width: 0 0 1px; border-color: grey">
                            <label for="alamat" class="mt-2">Alamat :</label>
                            <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $user->profil->shipping_address }}" style="outline: 0; border-width: 0 0 1px; border-color: grey; resize:none;">
                            <center>
                                <input type="submit" name="update" class="btn btn-primary mt-4 px-5" value="Update">
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>

@endsection