@include('admin.layout.menu')
@php
if ($slug == 'cong-dong') {
    $settings = get_settings(['facebook', 'twitter', 'instagram', 'dribbble', 'tik-tok']);
}elseif ($slug == 'cau-hinh') {
    $settings = get_settings(['content-demo', 'adriano-smith-photographer', 'content-about', 'faicon', 'logo']);
}
@endphp
        <div class="page-content">
        <div class="header">
            <h2>Cấu hình website</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 portlets">
            <div class="panel">
                <div class="panel-header panel-controls">
                <h3><i class="fa fa-table"></i>Tài khoản cộng động</h3>
                </div>
                <div class="panel-content pagination2 table-responsive">
                @include('error')
                <table class="table table-hover table-dynamic">
                    <thead>
                        <tr>
                            <th style="width: 20%;">Name</th>
                            <th style="width: 70%;">URL</th>
                            <th style="width: 7%;">Sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($settings as $key=>$value)
                        
                            <tr>
                                <form method="post" action="{{route('PostEdit', $key)}}">
                                    @csrf
                                    <td><input style ="width: 100%;
                                        border: 0.1px solid #d6d6d6;
                                        padding: 10px;
                                        margin: 15px;" name="name" type="text" value="{{$value[1]}}"></td>
                                    <td><input style="width: 100%;
                                        border: 0.1px solid #d6d6d6;
                                        padding: 10px;
                                        margin: 15px;" name="value" type="text" value="{{$value[0]}}"></td>
                                    <td><input type="submit" class="btn btn-info" value="Sửa"></td>
                                </form>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        <div class="footer">
            <div class="copyright">
            <p class="pull-left sm-pull-reset">
                <span>Copyright <span class="copyright">©</span> 2016 </span>
                <span>THEMES LAB</span>.
                <span>All rights reserved. </span>
            </p>
            <p class="pull-right sm-pull-reset">
                <span><a href="#" class="m-r-10">Support</a> | <a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
            </p>
            </div>
        </div>
        </div>
        <!-- END PAGE CONTENT -->
    </div>

@include('admin.layout.footer-table')