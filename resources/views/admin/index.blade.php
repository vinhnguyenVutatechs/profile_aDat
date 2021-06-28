@include('admin.layout.menu')
      <!-- END SIDEBAR -->
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content page-thin">
          <div class="row">
            <div class="col-xlg-7 col-lg-7">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel bg-dark widget-map">
                    <div class="panel-header">
                      <h3><i class="icon-globe-alt"></i>Làm màu :))</h3>
                    </div>
                    <div class="panel-content widget-full">
                      <div class="row">
                        <div class="col-md-12">
                          <div id="map"></div>
                        </div>
                        <div class="col-md-3 c-white">
                          <div id="listdiv"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xlg-3 col-lg-5 col-visitors">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel no-bd bd-3 panel-stat">
                    <div class="panel-header">
                      <h3><i class="icon-graph"></i>SỐ LIỆU THỐNG KÊ VỀ KHÁCH TRUY CẬP</h3>
                      <div class="control-btn">
                        <a href="#" class="panel-reload hidden"><i class="icon-reload"></i></a>
                      </div>
                    </div>
                    <div class="panel-body p-15 p-b-0">
                      <div class="row m-b-10">
                        <div class="col-xs-3 big-icon">
                          <i class="icon-users"></i>
                        </div>
                        <div class="col-xs-9">
                          <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="60">
                            <div>
                              <small class="stat-title">Lượt truy cập website</small>
                              <h1 class="f-40 m-0 w-300">{{$settings['count_view_web'][0]}}</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel-stat-chart">
                      <canvas id="visitors-chart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row" style="display:none">
                <div class="col-md-12">
                  <div class="panel no-bd bd-3 panel-stat">
                    <div class="panel-body bg-red p-15">
                      <div class="row m-b-10">
                        <div class="col-xs-3 big-icon">
                          <i class="icon-equalizer"></i>
                        </div>
                        <div class="col-xs-9">
                          <small class="stat-title">ORDERS THIS MONTH</small>
                          <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="56">
                            <div>
                              <h1 class="f-40 m-0 w-300">148</h1>
                            </div>
                            <div>
                              <h1 class="f-40 m-0 w-300">+28%</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-6">
                          <small class="stat-title">Last month</small>
                          <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="23">
                            <div>
                              <h3 class="f-20 m-0 w-300">126</h3>
                            </div>
                            <div>
                              <h3 class="f-20 m-0 w-300">$12,545</h3>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <small class="stat-title">Last week</small>
                          <div class="live-tile f-right" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="23">
                            <div>
                              <h3 class="t-right f-20 m-0 w-500">43</h3>
                            </div>
                            <div>
                              <h3 class="t-right f-20 m-0 w-500">$4,237</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xlg-2 hidden-lg col-clock">
              <div class="row">
                <div class="col-md-12">
                  <ul class="jquery-clock small" data-jquery-clock="">
                    <li class="jquery-clock-pin"></li>
                    <li class="jquery-clock-sec"></li>
                    <li class="jquery-clock-min"></li>
                    <li class="jquery-clock-hour"></li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="widget-progress-bar">
                    <div class="progress">
                      <progress class="progress-bar-primary stat1" value="82" max="100" data-animation-delay="600"></progress>
                      <div class="progress-info">
                        <span class="progress-name">Profil Complete</span>
                        <span class="progress-value">82%</span>
                      </div>
                    </div>
                    <div class="progress">
                      <progress class="progress-bar-primary stat1" value="43" max="100" data-animation-delay="800"></progress>
                      <div class="progress-info">
                        <span class="progress-name">Answer Emails</span>
                        <span class="progress-value">43%</span>
                      </div>
                    </div>
                    <div class="progress">
                      <progress class="progress-bar-primary stat1" value="93" max="100" data-animation-delay="1000"></progress>
                      <div class="progress-info">
                        <span class="progress-name">Server availability</span>
                        <span class="progress-value">93%</span>
                      </div>
                    </div>
                    <div class="progress">
                      <progress class="progress-bar-primary stat1" value="76" max="100" data-animation-delay="1200"></progress>
                      <div class="progress-info">
                        <span class="progress-name">CPU Usage</span>
                        <span class="progress-value">76%</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xlg-4 col-financial-stocks">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="icon-graph"></i>Thống kế sơ lượt</h3>
                </div>
                <div class="panel-content widget-full widget-stock stock1">
                  <div class="tabs tabs-linetriangle">
                    <ul class="nav nav-tabs nav-4" role="tablist">
                      <li class="nav-item lines-4" role="tab" data-toggle="tab">
                        <a href="#microsoft-tab" id="microsoft" data-toggle="tab">
                        <span class="title">Khách hàng liên hệ</span>
                        <span class="c-gray"><strong>+{{ App\Contact::whereMonth('created_at', now())->count()}}</strong></span>
                        <span class="c-green">{{App\Contact::count()}}</span>
                        </a>
                      </li>
                      <li class="nav-item active lines-4" role="tab" data-toggle="tab">
                        <a href="#sony-tab" id="sony" data-toggle="tab">
                        <span class="title">Bài viết đã tạo</span>
                        <span class="c-gray"><strong>+{{App\Blog::whereMonth('created_at', now())->count()}}</strong></span>
                        <span class="c-red">{{App\Blog::count()}}</span>
                        </a>
                      </li>
                      <li class="nav-item lines-4" role="tab" data-toggle="tab">
                        <a href="#samsung-tab"  id="samsung" data-toggle="tab">
                        <span class="title">Ảnh đã thêm </span>
                        <span class="c-gray"><strong>+{{App\Portfolios::whereMonth('created_at', now())->count()}}</strong></span>
                        <span class="c-green">{{App\Portfolios::count()}}</span>
                        </a>
                      </li>
                      <li class="nav-item lines-4" role="tab" data-toggle="tab">
                        <a href="#apple-tab"  id="apple" data-toggle="tab">
                        <span class="title">Chưa có thông tin</span>
                        <span class="c-gray"><strong>Chưa có thông tin</strong></span>
                        <span class="c-green">Chưa có thông tin</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
         @include('admin.layout.footer')