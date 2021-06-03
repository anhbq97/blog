@extends('layouts.app-public')

@section('title')
<title>Welcome</title>
@endsection

@section('home-slide')
<div class="home_slider_container">
      <div class="owl-carousel owl-theme home_slider">
        
        @foreach ($postsSlide as $slide)
        <!-- Slider Item -->
        <div class="owl-item">
          <div class="home_slider_background" style="background-image:url({{ asset('/blog/images') }}/{{ $slide->image }})"></div>
          <div class="home_slider_content_container">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="home_slider_content">
                    <div class="home_slider_item_category trans_200"><a href="/category/" class="trans_200">Trò chơi</a></div>
                    <div class="home_slider_item_title">
                      <a href="post.html">{{ $slide->title }}</a>
                    </div>
                    <div class="home_slider_item_link">
                      <a href="/post/{{ $slide->id }}" class="trans_200">Đọc tiếp
                        <svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
                          <polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>

      <div class="custom_nav_container home_slider_nav_container">
        <div class="custom_prev custom_prev_home_slider">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
            <polyline fill="#FFFFFF" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
          </svg>
        </div>
            <ul id="custom_dots" class="custom_dots custom_dots_home_slider">
          <li class="custom_dot custom_dot_home_slider active"><span></span></li>
          <li class="custom_dot custom_dot_home_slider"><span></span></li>
          <li class="custom_dot custom_dot_home_slider"><span></span></li>
        </ul>
        <div class="custom_next custom_next_home_slider">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
            <polyline fill="#FFFFFF" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
          </svg>
        </div>
      </div>

    </div>
@endsection

@section('main-content')
<!-- Blog Section - Don't Miss -->
<div class="main_content">
    <div class="blog_section">
      <div class="section_panel d-flex flex-row align-items-center justify-content-start">
        <div class="section_title">Hay Nhất</div>
        <div class="section_tags ml-auto">
          <ul>
            <li class="active"><a href="category.html">all</a></li>
            <li><a href="category.html">style hunter</a></li>
            <li><a href="category.html">vogue</a></li>
            <li><a href="category.html">health & fitness</a></li>
            <li><a href="category.html">travel</a></li>
          </ul>
        </div>
        <div class="section_panel_more">
          <ul>
            <li>more
              <ul>
                <li><a href="category.html">new look 2018</a></li>
                <li><a href="category.html">street fashion</a></li>
                <li><a href="category.html">business</a></li>
                <li><a href="category.html">recipes</a></li>
                <li><a href="category.html">sport</a></li>
                <li><a href="category.html">celebrities</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="section_content">
        <div class="grid clearfix">
          <?php foreach ($postsDontMiss as $key => $post) { ?>
              
                <?php if ($key == 0) { ?>
                  <!-- Largest Card With Image -->
                  <div class="card card_largest_with_image grid-item">
                    <img class="card-img-top" src="{{ asset('/blog/images') }}/<?= $post->image; ?>" alt="https://unsplash.com/@cjtagupa">
                    <div class="card-body">
                      <div class="card-title"><a href="/post/<?= $post->id ?>"><?= $post->title; ?></a></div>
                      <p class="card-text"><?= $post->summary; ?></p>
                      <small class="post_meta">
                        <a href="#">
                          <?php foreach ($users as $user) { ?>
                            <?php if ($user->id == $post->author) { ?>
                              <?= $user->name; ?>
                            <?php } ?>
                          <?php } ?>
                        </a><span><?= $post->created_at; ?></span></small>
                    </div>
                  </div>
                <?php } else { ?>
                <!-- Small Card With Background -->
                <div class="card card_default card_small_with_background grid-item">
                  <div class="card_background" style="background-image:url({{ asset('/blog/images') }}/<?= $post->image; ?>)"></div>
                  <div class="card-body">
                    <div class="card-title card-title-small"><a href="/post/<?= $post->id ?>"><?= $post->title; ?></a></div>

                    <small class="post_meta">
                      <a href="#">
                        <?php foreach ($users as $user) { ?>
                          <?php if ($user->id == $post->author) { ?>
                            <?= $user->name; ?>
                          <?php } ?>
                        <?php } ?>
                      </a><span><?= $post->created_at; ?></span></small>
                  </div>
                </div>
                <?php } ?>

          <?php } ?>
          
        </div>
      </div>
    </div>

    <!-- Blog Section - What's Trending -->

    <div class="blog_section">
      <div class="section_panel d-flex flex-row align-items-center justify-content-start">
        <div class="section_title">Trending</div>
        <div class="section_tags ml-auto">
          <ul>
            <li class="active"><a href="category.html">all</a></li>
            <li><a href="category.html">style hunter</a></li>
            <li><a href="category.html">vogue</a></li>
            <li><a href="category.html">health & fitness</a></li>
            <li><a href="category.html">travel</a></li>
          </ul>
        </div>
        <div class="section_panel_more">
          <ul>
            <li>more
              <ul>
                <li><a href="category.html">new look 2018</a></li>
                <li><a href="category.html">street fashion</a></li>
                <li><a href="category.html">business</a></li>
                <li><a href="category.html">recipes</a></li>
                <li><a href="category.html">sport</a></li>
                <li><a href="category.html">celebrities</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="section_content">
        <div class="grid clearfix">
          
          <?php foreach ($postsTrending as $key => $post) { ?>

              <?php if ($key == 0) { ?>
                <!-- Large Card With Image -->
                <div class="card grid-item card_large_with_image">
                  <img class="card-img-top" src="{{ asset('/blog/images') }}/<?= $post->image; ?>" alt="">
                  <div class="card-body">
                    <div class="card-title"><a href="/post/<?= $post->id ?>"><?= $post->title; ?></a></div>
                    <p class="card-text"><?= $post->summary; ?></p>
                    <small class="post_meta">
                      <a href="#">
                        <?php foreach ($users as $user) { ?>
                          <?php if ($user->id == $post->author) { ?>
                            <?= $user->name; ?>
                          <?php } ?>
                        <?php } ?>
                      </a><span><?= $post->created_at; ?></span></small>
                  </div>
                </div>

              <?php } else { ?>
                <?php if ($key < 3) { ?>
                  <!-- Default Card With Image -->
                  <div class="card card_small_with_image grid-item">
                    <img class="card-img-top" src="{{ asset('/blog/images') }}/post_5.jpg" alt="">
                    <div class="card-body">
                      <div class="card-title card-title-small"><a href="/post/<?= $post->id ?>"><?= $post->title; ?></a></div>
                      <small class="post_meta">
                        <a href="#">
                          <?php foreach ($users as $user) { ?>
                            <?php if ($user->id == $post->author) { ?>
                              <?= $user->name; ?>
                            <?php } ?>
                          <?php } ?>
                        </a><span><?= $post->created_at; ?></span></small>
                    </div>
                  </div>
                <?php } else { ?>
                  <!-- Small Card With Background -->
                  <div class="card card_default card_small_with_background grid-item">
                    <div class="card_background" style="background-image:url({{ asset('/blog/images') }}/<?= $post->image; ?>)"></div>
                    <div class="card-body">
                      <div class="card-title card-title-small"><a href="/post/<?= $post->id; ?>"><?= $post->title; ?></a></div>
                      <small class="post_meta">
                        <a href="#">
                          <?php foreach ($users as $user) { ?>
                            <?php if ($user->id == $post->author) { ?>
                              <?= $user->name; ?>
                            <?php } ?>
                          <?php } ?>
                        </a><span><?= $post->created_at; ?></span></small>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
          <?php } ?>

        </div>
        
      </div>
    </div>

    <!-- Blog Section - Latest -->

    <div class="blog_section">
      <div class="section_panel d-flex flex-row align-items-center justify-content-start">
        <div class="section_title">Bài Mới Nhất</div>
      </div>
      <div class="section_content">
        <div class="grid clearfix">
          
          <?php foreach ($postsLatest as $key => $post) { ?>

            <?php if ($post->id % 2 == 0) { ?>
              <!-- Small Card With Image -->
              <div class="card card_small_with_image grid-item">
                <img class="card-img-top" src="{{ asset('/blog/images') }}/<?= $post->image; ?>" alt="">
                <div class="card-body">
                  <div class="card-title card-title-small"><a href="post.html"><?= $post->title; ?></a></div>
                  <small class="post_meta">
                    <a href="#">
                      <?php foreach ($users as $user) { ?>
                        <?php if ($user->id == $post->author) { ?>
                          <?= $user->name; ?>
                        <?php } ?>
                      <?php } ?>
                    </a><span><?= $post->created_at; ?></span></small>
                </div>
              </div>
            <?php } else { ?>
              <!-- Small Card Without Image -->
              <div class="card card_default card_small_no_image grid-item">
                <div class="card-body">
                  <div class="card-title card-title-small"><a href="post.html"><?= $post->title; ?></a></div>
                  <small class="post_meta">
                    <a href="#">
                      <?php foreach ($users as $user) { ?>
                        <?php if ($user->id == $post->author) { ?>
                          <?= $user->name; ?>
                        <?php } ?>
                      <?php } ?>
                    </a><span><?= $post->created_at; ?></span></small>
                </div>
              </div>
            <?php } ?>
          <?php } ?>
          
        </div>
        
      </div>
    </div>
</div>
<div class="load_more">
    <div id="load_more" class="load_more_button text-center trans_200">Xem thêm</div>
  </div>
@endsection

@section('advertising')
<div class="sidebar_section">
  <div class="advertising">
    <div class="advertising_background" style="background-image:url({{ asset('/blog/images') }}/casephone/87896811_214466739674300_7740089584939171840_n.jpg)"></div>
    <div class="advertising_content d-flex flex-column align-items-start justify-content-end">
      <div class="advertising_perc">-15%</div>
      <div class="advertising_link"><a href="#">Mua ngay</a></div>
    </div>
  </div>
</div>
<br>
<div class="sidebar_section">
  <div class="advertising">
    <div class="advertising_background" style="background-image:url({{ asset('/blog/images') }}/casephone/118646843_672620373634314_3480455493985776948_n.jpg)"></div>
    <div class="advertising_content d-flex flex-column align-items-start justify-content-end">
      <div class="advertising_perc">-15%</div>
      <div class="advertising_link"><a href="#">Mua ngay</a></div>
    </div>
  </div>
</div>
@endsection

@section('newest-video')
<!-- <div class="sidebar_section newest_videos">
  
</div> -->
@endsection

@section('advertising-2')
<!-- <div class="sidebar_section">
  <div class="advertising_2">
    <div class="advertising_background" style="background-image:url({{ asset('/blog/images') }}/casephone/118646843_672620373634314_3480455493985776948_n.jpg)"></div>
    <div class="advertising_2_content d-flex flex-column align-items-center justify-content-center">
      <div class="advertising_2_link"><a href="#">Mua ngay <span>Mind</span></a></div>
    </div>
  </div -->>
</div>
@endsection

@section('future-events')
<!-- <div class="sidebar_section future_events">
  
</div> -->
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
                      
                      <?php foreach ($postsStories as $key => $postsStorie) { ?>
                        <?php if ($key == 0 || $key == 4) { ?>
                        <div class="owl-item">

                        <?php foreach ($postsStories as $k => $postsStorie) { ?>
                            <?php if ($k >= $key && $k < $key+4) { ?>
                            
                                  <div class="side_post">
                                    <a href="/post/<?= $postsStorie->id; ?>">
                                      <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                        <div class="side_post_image"><div><img src="{{ asset('/blog/images') }}/top_1.jpg" alt=""></div></div>
                                        <div class="side_post_content">
                                          <div class="side_post_title"><?= $postsStorie->title; ?></div>
                                          <small class="post_meta">
                                            <?php foreach ($users as $user) { ?>
                                              <?php if ($user->id == $post->author) { ?>
                                                <?= $user->name; ?>
                                              <?php } ?>
                                            <?php } ?>
                                            <span><?= $postsStorie->created_at; ?></span>
                                          </small>
                                        </div>
                                      </div>
                                    </a>
                                  </div>

                            <?php } ?>

                        <?php } ?>
                        
                        </div>
                        <?php } ?>
                      <?php } ?>

                  </div>
                </div>
              </div>
            </div>
@endsection
