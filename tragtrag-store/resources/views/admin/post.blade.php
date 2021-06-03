@extends('layouts.app')

@section('sidebar')
<li class="nav-item">
  <a class="nav-link" href="/">
    <i class="material-icons">store</i>
    <span>Trang Chủ</span>
  </a>
</li>
<h6 class="main-sidebar__nav-title">Blog</h6>
<li class="nav-item">
  <a class="nav-link" href="/home">
    <i class="material-icons">dashboard</i>
    <span>Dashboard</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link active" href="/blog-manager">
    <i class="material-icons">vertical_split</i>
    <span>Quản lý bài viết</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link " href="/add-new-post">
    <i class="material-icons">note_add</i>
    <span>Thêm bài viết</span>
  </a>
</li>
<h6 class="main-sidebar__nav-title">Giao diện</h6>
<li class="nav-item">
  <a class="nav-link " href="form-components.html">
    <i class="material-icons">view_module</i>
    <span>Mẫu &amp; Các thành phần</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link " href="tables.html">
    <i class="material-icons">table_chart</i>
    <span>Bảng mẫu</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link " href="/error">
    <i class="material-icons">error</i>
    <span>Danh sách lỗi</span>
  </a>
</li>
<h6 class="main-sidebar__nav-title">Công cụ</h6>
<li class="nav-item">
  <a class="nav-link " href="/fabric">
    <i class="material-icons">photo_camera</i>
    <span>Fabric</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link " href="/fabric">
    <i class="material-icons">note_add</i>
    <span>Ghi chú</span>
  </a>
</li>
<h6 class="main-sidebar__nav-title">Cài đặt</h6>
<li class="nav-item">
  <a class="nav-link" href="/user">
    <i class="material-icons">person</i>
    <span>Trang cá nhân</span>
  </a>
</li>
@endsection

@section('auth-content')
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Components</span>
                <h3 class="page-title">Quản lý bài viết thành viên</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <?php foreach ($posts as $post) { ?>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                  <div class="card card-small card-post card-post--1">
                    <div class="card-post__image" style="background-image: url('<?= asset('src/images/');?>/content-management/1.jpeg');">
                      <a href="#" class="card-post__category badge badge-pill badge-dark">Business</a>
                      <div class="card-post__author d-flex">
                        <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('<?= asset('src/images/');?>/avatars/0.jpg');">Written by Anna Kunis</a>
                      </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">
                        <a class="text-fiord-blue" href="#">Conduct at an replied removal an amongst</a>
                      </h5>
                      <p class="card-text d-inline-block mb-3">However venture pursuit he am mr cordial. Forming musical am hearing studied be luckily. But in for determine what would see...</p>
                      <span class="text-muted">28 February 2019</span>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
@endsection

@section('script')
@endsection
