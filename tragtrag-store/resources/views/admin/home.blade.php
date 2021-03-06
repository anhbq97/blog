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
  <a class="nav-link active" href="/home">
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
  <a class="nav-link" href="/user">
    <i class="material-icons">person</i>
    <span>Trang cá nhân</span>
  </a>
</li>
@endsection

@section('auth-content')
<!-- Main Sidebar -->
<!-- End Main Sidebar -->
  
  <!-- / .main-navbar -->
  <div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Dashboard</span>
        <h3 class="page-title">Tổng Quan</h3>
      </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
      <div class="col-lg col-md-6 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Bài viết</span>
                <h6 class="stats-small__value count my-3">{{ $allPost }}</h6>
              </div>
              <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">4.7%</span>
              </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-1"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-6 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Bài viết công khai</span>
                <h6 class="stats-small__value count my-3">{{ $publicPosts }}</h6>
              </div>
              <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
              </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-2"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-4 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Bài viết riêng tư</span>
                <h6 class="stats-small__value count my-3">{{ $privatePosts }}</h6>
              </div>
              <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">3.8%</span>
              </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-3"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-4 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Tác giả</span>
                <h6 class="stats-small__value count my-3">{{ $countAuthor }}</h6>
              </div>
              <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
              </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-4"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-4 col-sm-12 mb-4">
        <div class="stats-small stats-small--1 card card-small">
          <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
              <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Tài khoản</span>
                <h6 class="stats-small__value count my-3">Ẩn</h6>
              </div>
              <div class="stats-small__data">
                <span class="stats-small__percentage stats-small__percentage--increase">0%</span>
              </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-5"></canvas>
          </div>
        </div>
      </div>
    </div>
    <!-- End Small Stats Blocks -->
    <div class="row">
      <!-- Users Stats -->
      <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
          <div class="card-header border-bottom">
            <h6 class="m-0">Tài khoản</h6>
          </div>
          <div class="card-body pt-0">
            <div class="row border-bottom py-2 bg-light">
              <div class="col-12 col-sm-6">
                <div id="blog-overview-date-range" class="input-daterange input-group input-group-sm my-auto ml-auto mr-auto ml-sm-auto mr-sm-0" style="max-width: 350px;">
                  <input type="text" class="input-sm form-control" name="start" placeholder="Ngày bắt đầu" id="blog-overview-date-range-1">
                  <input type="text" class="input-sm form-control" name="end" placeholder="Ngày kết thúc" id="blog-overview-date-range-2">
                  <span class="input-group-append">
                    <span class="input-group-text">
                      <i class="material-icons"></i>
                    </span>
                  </span>
                </div>
              </div>
              <div class="col-12 col-sm-6 d-flex mb-2 mb-sm-0">
                <button type="button" class="btn btn-sm btn-white ml-auto mr-auto ml-sm-auto mr-sm-0 mt-3 mt-sm-0">Chi tiết &rarr;</button>
              </div>
            </div>
            <canvas height="130" style="max-width: 100% !important;" class="blog-overview-users"></canvas>
          </div>
        </div>
      </div>
      <!-- End Users Stats -->
      <!-- Users By Device Stats -->
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card card-small h-100">
          <div class="card-header border-bottom">
            <h6 class="m-0">Người truy cập theo thiết bị</h6>
          </div>
          <div class="card-body d-flex py-0">
            <canvas height="220" class="blog-users-by-device m-auto"></canvas>
          </div>
          <div class="card-footer border-top">
            <div class="row">
              <div class="col">
                <select class="custom-select custom-select-sm" style="max-width: 130px;">
                  <option selected>Tuần trước</option>
                  <option value="1">Hôm nay</option>
                  <option value="2">Tháng trước</option>
                  <option value="3">Năm trước</option>
                </select>
              </div>
              <div class="col text-right view-report">
                <a href="#">Chi tiết &rarr;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Users By Device Stats -->
      <!-- New Draft Component -->
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <!-- Quick Post -->
        <div class="card card-small h-100">
          <div class="card-header border-bottom">
            <h6 class="m-0">Bản nháp Mới</h6>
          </div>
          <div class="card-body d-flex flex-column">
            <form class="quick-post-form">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tiêu đề"> </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Nội dung..."></textarea>
              </div>
              <div class="form-group mb-0">
                <button type="submit" class="btn btn-accent">Tạo</button>
              </div>
            </form>
          </div>
        </div>
        <!-- End Quick Post -->
      </div>
      <!-- End New Draft Component -->
      <!-- Discussions Component -->
      <div class="col-lg-5 col-md-12 col-sm-12 mb-4">
        <div class="card card-small blog-comments">
          <div class="card-header border-bottom">
            <h6 class="m-0">Thảo luận</h6>
          </div>
          <div class="card-body p-0">
            <div class="card-body p-0">
              <div class="blog-comments__item d-flex p-3">  
                <div class="blog-comments__avatar mr-3">
                  <img src="<?= asset('src/images');?>/avatars/1.jpg" alt="User avatar" /> </div>
                <div class="blog-comments__content">
                  <div class="blog-comments__meta text-muted">
                    <a class="text-secondary" href="#">Tùng</a> on
                    <a class="text-secondary" href="#">Xin chào!</a>
                    <span class="text-muted">– 3 ngày trước</span>
                  </div>
                  <p class="m-0 my-1 mb-2 text-muted">Có ai ở đây không</p>
                  <div class="blog-comments__actions">
                    <div class="btn-group btn-group-sm">
                      <button type="button" class="btn btn-white">
                        <span class="text-success">
                          <i class="material-icons">check</i>
                        </span> Duyệt </button>
                      <button type="button" class="btn btn-white">
                        <span class="text-danger">
                          <i class="material-icons">clear</i>
                        </span> Bỏ qua </button>
                      <button type="button" class="btn btn-white">
                        <span class="text-light">
                          <i class="material-icons">more_vert</i>
                        </span> Sửa </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="blog-comments__item d-flex p-3">
              <div class="blog-comments__avatar mr-3">
                <img src="<?= asset('src/images');?>/avatars/3.jpg" alt="User avatar" /> </div>
              <div class="blog-comments__content">
                <div class="blog-comments__meta text-muted">
                  <a class="text-secondary" href="#">Admin</a> on
                  <a class="text-secondary" href="#">Hello World!</a>
                  <span class="text-muted">– 5 ngày trước</span>
                </div>
                <p class="m-0 my-1 mb-2 text-muted">Im mồm k tao kíck giờ</p>
                <div class="blog-comments__actions">
                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-white">
                      <span class="text-success">
                        <i class="material-icons">check</i>
                      </span> Duyệt </button>
                    <button type="button" class="btn btn-white">
                      <span class="text-danger">
                        <i class="material-icons">clear</i>
                      </span> Bỏ qua </button>
                    <button type="button" class="btn btn-white">
                      <span class="text-light">
                        <i class="material-icons">more_vert</i>
                      </span> Sửa </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer border-top">
            <div class="row">
              <div class="col text-center view-report">
                <button type="submit" class="btn btn-white">Xem tất cả</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Discussions Component -->
      <!-- Top Referrals Component -->
      <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
        <div class="card card-small">
          <div class="card-header border-bottom">
            <h6 class="m-0">Top Referrals</h6>
          </div>
          <div class="card-body p-0">
            <ul class="list-group list-group-small list-group-flush">
              <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">GitHub</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">19,291</span>
              </li>
              <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Stack Overflow</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">11,201</span>
              </li>
              <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Hacker News</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">9,291</span>
              </li>
              <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Reddit</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">8,281</span>
              </li>
              <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">The Next Web</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">7,128</span>
              </li>
              <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Tech Crunch</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">6,218</span>
              </li>
              <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">YouTube</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">1,218</span>
              </li>
              <li class="list-group-item d-flex px-3">
                <span class="text-semibold text-fiord-blue">Adobe</span>
                <span class="ml-auto text-right text-semibold text-reagent-gray">827</span>
              </li>
            </ul>
          </div>
          <div class="card-footer border-top">
            <div class="row">
              <div class="col">
                <select class="custom-select custom-select-sm">
                  <option selected>Last Week</option>
                  <option value="1">Today</option>
                  <option value="2">Last Month</option>
                  <option value="3">Last Year</option>
                </select>
              </div>
              <div class="col text-right view-report">
                <a href="#">Full report &rarr;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Top Referrals Component -->
    </div>
  </div>
@endsection

@section('script')

@endsection
