    @include('admin.layout.menu')
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
            <div class="page-content">
            <div class="header">
                <h2>Tables <strong>Dynamic</strong></h2>
                <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li><a href="dashboard.html">Make</a>
                    </li>
                    <li><a href="tables.html">Tables</a>
                    </li>
                    <li class="active">Tables Dynamic</li>
                </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 portlets">
                <div class="panel">
                    <div class="panel-header panel-controls">
                    <h3><i class="fa fa-table"></i> <strong>Sorting </strong> table</h3>
                    </div>
                    <div class="panel-content pagination2 table-responsive">
                    @include('error')
                    <table class="table table-hover table-dynamic">
                        <thead>
                        <tr>
                            <th style="width:25%;">Title Blog</th>
                            <th style="width:15%;">Create admin</th>
                            <th style="width:25%;">Image</th>
                            <th style="width:5%;">View</th>
                            <th style="width:20%;">Time created at</th>
                            <th style="width:10%;">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($blogs as $value)
                        <tr>
                            <td><a href="">{{$value->name}}</a></td>
                            <td>{{$value->Users->name}}</td>
                            <td>{{Str::substr($value->img, 0, 30)}}...</td>
                            <td>{{$value->view}}</td>
                            <td>{{Carbon\Carbon::parse($value->created_at)->toFormattedDateString()}}</td>
                            <td><a class="delete btn btn-sm btn-danger" href="{{route('blog.delete', $value->id)}}">Xóa</a></td>
                        </tr>
                        @endforeach
        
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            <table>
            <form action="{{route('blog.add')}}" method="post">
                @csrf
                    <input required style="width: 100%;border:1px solid rgb(230, 230, 230);padding: 5px;margin: 5px 0px 5px 0px;" placeholder="Tiêu đề" type="text" name="name" value="{{old('name')}}">
                    <input required style="width: 100%;border:1px solid rgb(230, 230, 230);padding: 5px;margin: 5px 0px 5px 0px;" placeholder="Ảnh" type="text" name="img" value="{{old('img')}}">
                    <input required style="width: 100%;border:1px solid rgb(230, 230, 230);padding: 5px;margin: 5px 0px 5px 0px;" placeholder="View :))" type="number" name="view" value="{{old('view')}}">
                    <textarea name="editor1">{{old('editor1')}}</textarea>
                    <script>
                            CKEDITOR.replace( 'editor1' );
                    </script>
                    <input class="edit btn btn-sm btn-default" type="submit" value="Thêm">

              </form>

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