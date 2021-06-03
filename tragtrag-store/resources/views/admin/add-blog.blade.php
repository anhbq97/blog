@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{ asset('/src/styles/quill-editor.css') }}">
@endsection

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
  <a class="nav-link" href="/blog-manager">
    <i class="material-icons">vertical_split</i>
    <span>Quản lý bài viết</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link active" href="/add-new-post">
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

@section('script')
<script src="{{ asset('/src/scripts/quil-editor.js') }}"></script>
<script src="{{ asset('/src/scripts/app/app-blog-new-post.1.1.0.js') }}"></script>
@endsection

@section('auth-content')
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Blog Posts</span>
                <h3 class="page-title">Bài viết mới</h3>
                <input type="text" name="author" hidden value="{{ Auth::user()->id }}">
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body" style="height:800px;">
                    <form class="add-new-post" style="height:580px;">
                      <input class="form-control form-control-lg mb-3" name="title-post" type="text" placeholder="Tiêu đề">
                      <input class="form-control form-control-lg mb-3" name="tags" type="text" placeholder="Thẻ tags, Phải cách nhau bởi dấu phẩy, ví dụ: thời sự, tin nóng hổi, toàn thế giới">
                      <div id="editor-container" class="add-new-post__editor mb-1"></div>
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
              <div class="col-lg-3 col-md-12">
                <!-- Post Overview -->
                <div class='card card-small mb-3'>
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Actions</h6>
                  </div>
                  <div class='card-body p-0'>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item p-3">
                        <!-- <span class="d-flex mb-2">
                          <i class="material-icons mr-1">flag</i>
                          <strong class="mr-1">Trạng thái:</strong>
                          <strong class="text-success">
                            <select name="" id="">
                              <option value=""></option>
                            </select>
                          </strong>
                        </span> -->
                        <span class="d-flex mb-2">
                          <i class="material-icons mr-1">visibility</i>
                          <strong class="mr-1">Hiển thị:</strong>
                          <strong class="text-success">
                            <select name="visibility" id="visibility">
                              <option value="1">Bất cứ ai</option>
                              <option value="2">Thành viên</option>
                              <option value="0">Chỉ mình tôi</option>
                            </select>
                          </strong>
                        </span>
                        <!-- <span class="d-flex mb-2">
                          <i class="material-icons mr-1">calendar_today</i>
                          <strong class="mr-1">Thời gian đăng:</strong> Ngay
                          <a class="ml-auto" href="#">Sửa</a>
                        </span> -->
                        <span class="d-flex">
                          <i class="material-icons mr-1">score</i>
                          <strong class="mr-1">Lượt xem:</strong>
                          <strong class="text-success">Bật</strong>
                        </span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <button class="btn btn-sm btn-outline-accent">
                          <i class="material-icons">save</i> Lưu tạm</button>
                        <button class="btn btn-sm btn-accent ml-auto" id="btn-public-post">
                          <i class="material-icons">file_copy</i> Đăng</button>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- / Post Overview -->
                <!-- Post Overview -->
                <div class='card card-small mb-3'>
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Danh mục</h6>
                  </div>
                  <div class='card-body p-0'>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item px-3 pb-2" id="list-category">
                        {{ csrf_field() }}
                        @foreach ($category as $category)
                        <div class="custom-control custom-checkbox mb-1 checked-category">
                          <input type="checkbox" name="checkbox-category" class="custom-control-input ck-category" value="{{ $category->id }}">
                          <label class="custom-control-label">{{ $category->name }}</label>
                        </div>
                        @endforeach
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <!-- form create new category -->
                        <div class="input-group create-category">
                          <input type="text" class="form-control" name="category" placeholder="Thêm danh mục" aria-label="Add new category" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-white px-2" id="btn-add-category" type="button">
                              <i class="material-icons">add</i>
                            </button>
                          </div>
                        </div>
                        <!-- end form -->
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- / Post Overview -->
                <div class='card card-small mb-3'>
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Section</h6>
                  </div>
                  <div class='card-body p-0'>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item px-3 pb-2" id="list-section">
                        <div class="custom-control custom-checkbox mb-1 checked-section">
                          <input type="checkbox" name="checkbox-section" class="custom-control-input ck-section" value="storie">
                          <label class="custom-control-label">Storie</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1 checked-section">
                          <input type="checkbox" name="checkbox-section" class="custom-control-input" value="dontmiss">
                          <label class="custom-control-label">DontMiss</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1 checked-section">
                          <input type="checkbox" name="checkbox-section" class="custom-control-input" value="whattrending">
                          <label class="custom-control-label">Whattrending</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1 checked-section">
                          <input type="checkbox" name="checkbox-section" class="custom-control-input" value="latest">
                          <label class="custom-control-label">Latest</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1 checked-section">
                          <input type="checkbox" name="checkbox-section" class="custom-control-input" value="slide">
                          <label class="custom-control-label">Slide</label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
