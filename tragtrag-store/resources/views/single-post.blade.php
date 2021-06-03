@extends('layouts.app-public')

@section('title')
<title>{{ $post->title }}</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('/blog/styles') }}/slide-case-phone.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/blog/styles') }}/post.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/blog/styles') }}/post_responsive.css">
@endsection

@section('home-slide')
<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('/blog/images') }}/post.jpg" data-speed="0.8"></div>
<div class="home_content">
  <div class="post_category trans_200">
    <a href="category.html" class="trans_200">

      <?php foreach ($categorys as $category) { ?>
        <?php if ($category->id == $post->category) { ?>
          <?= $category->name; ?>
        <?php } ?>
      <?php } ?>
    </a></div>
  <div class="post_title">{{ $post->title }}</div>
</div>
@endsection

@section('main-content')
  <div class="post_content">

    <!-- Top Panel -->
    <div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start">
      <div class="author_image"><div><img src="{{ asset('/blog/images') }}/author.jpg" alt=""></div></div>
      <div class="post_meta">
        <a href="#">
          {{ $post->name }}
        </a><span>{{ $post->created_at }}</span></div>
      <div class="post_share ml-sm-auto">
        <span>Chia sẻ</span>
        <ul class="post_share_list">
          <li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>

    <!-- Post Body -->

    <div class="post_body">
      
      <?php echo html_entity_decode( $post->content )?>

      <!-- Post Tags -->
      <div class="post_tags">
        <ul>
          <li class="post_tag"><a href="#">Ốp điện thoại</a></li>
          <li class="post_tag"><a href="#">Đẹp</a></li>
          <li class="post_tag"><a href="#">Rẻ</a></li>
          <li class="post_tag"><a href="#">Review</a></li>
        </ul>
      </div>
    </div>
    
    <!-- Bottom Panel -->
    <div class="post_panel bottom_panel d-flex flex-row align-items-center justify-content-start">
      <div class="post_share ml-sm-auto">
        <span>share</span>
        <ul class="post_share_list">
          <li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>

    <!-- Similar Posts -->
    <div class="similar_posts">
      <div class="grid clearfix">

        <!-- Small Card With Image -->
        <div class="card card_small_with_image grid-item">
          <img class="card-img-top" src="{{ asset('/blog/images') }}/post_25.jpg" alt="https://unsplash.com/@jakobowens1">
          <div class="card-body">
            <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
            <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
          </div>
        </div>

        <!-- Small Card With Image -->
        <div class="card card_small_with_image grid-item">
          <img class="card-img-top" src="{{ asset('/blog/images') }}/post_2.jpg" alt="https://unsplash.com/@jakobowens1">
          <div class="card-body">
            <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
            <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
          </div>
        </div>

        <!-- Small Card With Image -->
        <div class="card card_small_with_image grid-item">
          <img class="card-img-top" src="{{ asset('/blog/images') }}/post_26.jpg" alt="https://unsplash.com/@jakobowens1">
          <div class="card-body">
            <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
            <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
          </div>
        </div>

      </div>

      <!-- Post Comment -->
      <div class="post_comment">
        <div class="post_comment_title">Bình luận</div>
        <div class="row">
          <div class="col-xl-8">
            <div class="post_comment_form_container">
              <form action="#">
                <input type="text" class="comment_input comment_input_name" placeholder="Your Name" required="required">
                <input type="email" class="comment_input comment_input_email" placeholder="Your Email" required="required">
                <textarea class="comment_text" placeholder="Your Comment" required="required"></textarea>
                <button type="submit" class="comment_button">Nhập bình luận</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Comments -->
      <div class="comments">
        <div class="comments_title">Bình luận <span>(12)</span></div>
        <div class="row">
          <div class="col-xl-8">
            <div class="comments_container">
              <ul class="comment_list">
                <li class="comment">
                  <div class="comment_body">
                    <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                      <div class="comment_author_image"><div><img src="{{ asset('/blog/images') }}/facebook-avatar.jpeg" alt=""></div></div>
                      <small class="post_meta"><a href="#">Quốc Anh</a><span>01/03/2021 at 9:48 am</span></small>
                      <button type="button" class="reply_button ml-auto">Reply</button>
                    </div>
                    <div class="comment_content">
                      <p>Đã mua, giá rẻ mà dùng rất thích. Bạn bán ốp cũng rất xinh :"D</p>
                    </div>
                  </div>
                </li>
                <li class="comment">
                  <div class="comment_body">
                    <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                      <div class="comment_author_image"><div><img src="{{ asset('/blog/images') }}/facebook-avatar.jpeg" alt=""></div></div>
                      <small class="post_meta"><a href="#">Linh</a><span>31/02/2021 at 06:12 pm</span></small>
                      <button type="button" class="reply_button ml-auto">Reply</button>
                    </div>
                    <div class="comment_content">
                      <p>Mình muốn mua giá bao nhiêu thế.</p>
                    </div>
                  </div>
                </li>
                <li class="comment">
                  <div class="comment_body">
                    <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                      <div class="comment_author_image"><div><img src="{{ asset('/blog/images') }}/comment_author_1.jpg" alt=""></div></div>
                      <small class="post_meta"><a href="#">Trang</a><span>22/05/2021 at 10:12 pm</span></small>
                      <button type="button" class="reply_button ml-auto">Reply</button>
                    </div>
                    <div class="comment_content">
                      <p>Ốp chất lượng rất tốt phù hợp giá tiền</p>
                    </div>
                  </div>
                </li>

                <li class="comment">
                  <div class="comment_body">
                    <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                      <div class="comment_author_image"><div><img src="{{ asset('/blog/images') }}/facebook-avatar.jpeg" alt=""></div></div>
                      <small class="post_meta"><a href="#">Cường</a><span>09/03/2021 at 08:41 am</span></small>
                      <button type="button" class="reply_button ml-auto">Reply</button>
                    </div>
                    <div class="comment_content">
                      <p>Mua 3 còn đc tặng thêm 1 ốp rất đẹp.</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
  <div class="load_more">
    <div id="load_more" class="load_more_button text-center trans_200">Xem thêm</div>
  </div>
@endsection

@section('top-stories')
<div class="sidebar_section">
              <div class="sidebar_title_container">
                <div class="sidebar_title">Top Stories</div>
                <div class="sidebar_slider_nav">
                  <div class="custom_nav_container sidebar_slider_nav_container">
                    <div class="custom_prev custom_prev_top">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                        <polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
                      </svg>
                    </div>
                        <ul id="custom_dots" class="custom_dots custom_dots_top">
                      <li class="custom_dot custom_dot_top active"><span></span></li>
                      <li class="custom_dot custom_dot_top"><span></span></li>
                      <li class="custom_dot custom_dot_top"><span></span></li>
                    </ul>
                    <div class="custom_next custom_next_top">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                        <polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sidebar_section_content">

                <!-- Top Stories Slider -->
                <div class="sidebar_slider_container">
                  <div class="owl-carousel owl-theme sidebar_slider_top">

                    <!-- Top Stories Slider Item -->
                    <div class="owl-item">

                      <!-- Sidebar Post -->
                      <div class="side_post">
                        <a href="post.html">
                          <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                            <div class="side_post_image"><div><img src="{{ asset('/blog/images') }}/top_1.jpg" alt=""></div></div>
                            <div class="side_post_content">
                              <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                              <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                            </div>
                          </div>
                        </a>
                      </div>

                      <!-- Sidebar Post -->
                      <div class="side_post">
                        <a href="post.html">
                          <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                            <div class="side_post_image"><div><img src="{{ asset('/blog/images') }}/top_2.jpg" alt=""></div></div>
                            <div class="side_post_content">
                              <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                              <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                            </div>
                          </div>
                        </a>
                      </div>

                      <!-- Sidebar Post -->
                      <div class="side_post">
                        <a href="post.html">
                          <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                            <div class="side_post_image"><div><img src="{{ asset('/blog/images') }}/top_3.jpg" alt=""></div></div>
                            <div class="side_post_content">
                              <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                              <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                            </div>
                          </div>
                        </a>
                      </div>

                      <!-- Sidebar Post -->
                      <div class="side_post">
                        <a href="post.html">
                          <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                            <div class="side_post_image"><div><img src="{{ asset('/blog/images') }}/top_4.jpg" alt=""></div></div>
                            <div class="side_post_content">
                              <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                              <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                            </div>
                          </div>
                        </a>
                      </div>

                    </div>

                    <!-- Top Stories Slider Item -->
                    <div class="owl-item">

                      <!-- Sidebar Post -->
                      <div class="side_post">
                        <a href="post.html">
                          <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                            <div class="side_post_image"><div><img src="{{ asset('/blog/images') }}/top_1.jpg" alt=""></div></div>
                            <div class="side_post_content">
                              <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                              <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                            </div>
                          </div>
                        </a>
                      </div>

                      <!-- Sidebar Post -->
                      <div class="side_post">
                        <a href="post.html">
                          <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                            <div class="side_post_image"><div><img src="{{ asset('/blog/images') }}/top_2.jpg" alt=""></div></div>
                            <div class="side_post_content">
                              <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                              <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                            </div>
                          </div>
                        </a>
                      </div>

                      <!-- Sidebar Post -->
                      <div class="side_post">
                        <a href="post.html">
                          <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                            <div class="side_post_image"><div><img src="{{ asset('/blog/images') }}/top_3.jpg" alt=""></div></div>
                            <div class="side_post_content">
                              <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                              <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                            </div>
                          </div>
                        </a>
                      </div>

                      <!-- Sidebar Post -->
                      <div class="side_post">
                        <a href="post.html">
                          <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                            <div class="side_post_image"><div><img src="{{ asset('/blog/images') }}/top_4.jpg" alt=""></div></div>
                            <div class="side_post_content">
                              <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                              <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                            </div>
                          </div>
                        </a>
                      </div>

                    </div>

                    <!-- Top Stories Slider Item -->
                    <div class="owl-item">

                      <!-- Sidebar Post -->
                      <div class="side_post">
                        <a href="post.html">
                          <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                            <div class="side_post_image"><div><img src="{{ asset('/blog/images') }}/top_1.jpg" alt=""></div></div>
                            <div class="side_post_content">
                              <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                              <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                            </div>
                          </div>
                        </a>
                      </div>

                      <!-- Sidebar Post -->
                      <div class="side_post">
                        <a href="post.html">
                          <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                            <div class="side_post_image"><div><img src="{{ asset('/blog/images') }}/top_2.jpg" alt=""></div></div>
                            <div class="side_post_content">
                              <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                              <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                            </div>
                          </div>
                        </a>
                      </div>

                      <!-- Sidebar Post -->
                      <div class="side_post">
                        <a href="post.html">
                          <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                            <div class="side_post_image"><div><img src="{{ asset('/blog/images') }}/top_3.jpg" alt=""></div></div>
                            <div class="side_post_content">
                              <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                              <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                            </div>
                          </div>
                        </a>
                      </div>

                      <!-- Sidebar Post -->
                      <div class="side_post">
                        <a href="post.html">
                          <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                            <div class="side_post_image"><div><img src="{{ asset('/blog/images') }}/top_4.jpg" alt=""></div></div>
                            <div class="side_post_content">
                              <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                              <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                            </div>
                          </div>
                        </a>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>
@endsection

@section('advertising')
<div class="sidebar_section">
  <div class="advertising">
    <div class="advertising_background" style="background-image:url({{ asset('/blog/images/casephone') }}/168968273_909363219898168_7600530369161907711_n.jpg)"></div>
    <div class="advertising_content d-flex flex-column align-items-start justify-content-end">
      <div class="advertising_perc">-30%</div>
      <div class="advertising_link"><a href="#" style="color:black;">Mua , giá ưu đãi</a></div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="{{ asset('/blog/js') }}/slide-case-phone.js"></script>
<script src="{{ asset('/blog/plugins') }}/parallax-js-master/parallax.min.js"></script>
<script src="{{ asset('/blog/js') }}/post.js"></script>
@endsection