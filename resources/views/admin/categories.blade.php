@include('admin.layout.menu')
        <div class="page-content">
        <div class="header">
            <h2>Tables <strong>Design</strong></h2>
            <div class="breadcrumb-wrapper">
            <ol class="breadcrumb">
                <li><a href="dashboad.html">Make</a>
                </li>
                <li class="active">Tables</li>
            </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 portlets">
            <div class="panel">
                <div class="panel-header panel-controls">
                <h3><i class="fa fa-table"></i> <strong>Bordered</strong> Table</h3>
                </div>
                <div class="panel-content">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($portfolio as $key=>$value)
                    <tr>
                        <form action="{{route('categories.edit', $value->id)}}" method="post">
                            @csrf
                            <td>{{$key+1}}</td>
                            <td><input style ="width: 100%;border:0px;" type="text" name="name" value="{{$value->name}}"></td>
                            <td class="text-right" style="display: flex;">
                                <input class="edit btn btn-sm btn-default" type="submit" value="Sửa">
                            </td>
                        </form>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            </div>
            <div class="col-md-6 portlets">
            <div class="panel">
                <div class="panel-header">
                <h3><i class="fa fa-table"></i>Ảnh | Video</h3>
                <div class="control-btn">
                    <a href="#" class="panel-reload hidden"><i class="icon-reload"></i></a>
                    <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
                    <i class="icon-settings"></i>
                    </a>
                    <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a>
                    </li>
                    <li><a href="#">Another action</a>
                    </li>
                    <li><a href="#">Something else here</a>
                    </li>
                    </ul>
                    <a href="#" class="panel-popout hidden tt" title="Pop Out/In"><i class="icons-office-58"></i></a>
                    <a href="#" class="panel-maximize hidden"><i class="icon-size-fullscreen"></i></a>
                    <a href="#" class="panel-toggle"><i class="fa fa-angle-down"></i></a>
                    <a href="#" class="panel-close"><i class="icon-trash"></i></a>
                </div>
                </div>
                <div class="panel-content">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Categories Name</th>
                        <th>Image</th>
                        <th>Video</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($portfolios as $key=>$value)    
                    <tr>
                        <form action="{{route('categoriess.edit', $value->id)}}" method="post">
                            @csrf
                            <td>{{$key+1}}</td>
                            <td><input style ="width: 100%;border:0px;" name="name" type="text" value="{{$value->name}}"></td>
                            <td>{{$value->CategoriesPortfolio->name}}</td>
                            <td><input style ="width: 100%;border:0px;" name="img" type="text" value="{{$value->img}}"></td>
                            <td><input style ="width: 100%;border:0px;" name="video" type="text" value="{{$value->video}}"></td>
                            <td class="text-right" style="display: flex;">
                                <input class="edit btn btn-sm btn-default" type="submit" value="Sửa">
                                <a class="delete btn btn-sm btn-danger" href="{{route('mail.delete', $value->id)}}">
                                    <i class="icons-office-52"></i>
                                </a>
                            </td>
                        </form>
                    </tr>
                    @endforeach
                    <hr>
                    <tr>
                        <form action="{{route('categories.add')}}" method="post">
                            @csrf
                            <td>Thêm</td>
                            <td><input required="" style ="width: 100%;" name="name" type="text" value="{{old('name')}}"></td>
                            <td>
                                <select name="categories">
                                    @foreach ($portfolio as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td><input required="" style ="width: 100%;" name="img" type="text" value="{{old('img')}}"></td>
                            <td><input required="" style ="width: 100%;" name="video" type="text" value="{{old('video')}}"></td>
                            <td class="text-right" style="display: flex;">
                                <input class="edit btn btn-sm btn-default" type="submit" value="Thêm">
                            </td>
                        </form>
                    </tr>
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
    <!-- END MAIN CONTENT -->
    <!-- BEGIN BUILDER -->
    @include('admin.layout.footer-table')