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
  <a class="nav-link" href="/blog-manager">
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
  <a class="nav-link active" href="/user">
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
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">User Profile</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="rounded-circle" src="<?= asset('src/images/');?>/avatars/0.jpg" alt="User Avatar" width="110"> </div>
                    <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                    <span class="text-muted d-block mb-2">Project Manager</span>
                    <span class="text-muted d-block mb-2">Ngày tạo: {{ Auth::user()->created_at }}</span>
                    <button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                      <i class="material-icons mr-1">person_add</i>Follow</button>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4">
                      <div class="progress-wrapper">
                        <strong class="text-muted d-block mb-2">Workload</strong>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%;">
                            <span class="progress-value">74%</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item p-4">
                      <strong class="text-muted d-block mb-2">Description</strong>
                      <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Account Details</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">First Name</label>
                                <input type="text" class="form-control" id="feFirstName" placeholder="First Name" value=""> </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Last Name</label>
                                <input type="text" class="form-control" id="feLastName" placeholder="Last Name" value="{{ Auth::user()->name }}"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" class="form-control" id="feEmailAddress" placeholder="Email" value="{{ Auth::user()->email }}"> </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Password</label>
                                <input type="password" class="form-control" id="fePassword" placeholder="Password"> </div>
                            </div>
                            <div class="form-group">
                              <label for="feInputAddress">Address</label>
                              <input type="text" class="form-control" id="feInputAddress" placeholder="1234 Main St"> </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feInputCity">City</label>
                                <input type="text" class="form-control" id="feInputCity"> </div>
                              <div class="form-group col-md-4">
                                <label for="feInputState">State</label>
                                <select id="feInputState" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">Description</label>
                                <textarea class="form-control" name="feDescription" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</textarea>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-accent">Update Account</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
          </div>
@endsection