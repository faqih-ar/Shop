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
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="{{ asset('assets/default_photo.jpg')}}" class="rounded">
                    <div class="card-body">
                        <form method="POST" class="mt-1 form-group">
                            <input type="file" name="photo_profile" accept="image/*" class="btn btn-light">
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
                        <form method="POST" class="form-group">
                            <label for="name" class="mt-2">Nama Lengkap :</label>
                            <input type="text" name="name" class="form-control" id="name" value="Faqih Auliyaur R" style="outline: 0; border-width: 0 0 1px; border-color: grey">
                            <label for="email" class="mt-2">Email :</label>
                            <input type="email" name="email" class="form-control" id="email" value="faqih@faqih.com" style="outline: 0; border-width: 0 0 1px; border-color: grey">
                            <label for="password" class="mt-2">Password :</label>
                            <input type="password" name="password" class="form-control" id="password" value="asaulter123" style="outline: 0; border-width: 0 0 1px; border-color: grey">
                            <label for="phone_number" class="mt-2">Nomor Telepon :</label>
                            <input type="text" name="phone" class="form-control" id="phone_number" value="0811111111" style="outline: 0; border-width: 0 0 1px; border-color: grey">
                            <label for="alamat" class="mt-2">Alamat :</label>
                            <textarea id="alamat" name="alamat" row="2" class="form-control" style="outline: 0; border-width: 0 0 1px; border-color: grey; resize:none;">

                            </textarea>
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