@include('admin.layout.menu')
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content">
          <div class="header">
            <h2>Tables <strong>Editable</strong></h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li><a href="dashboard-2.html">Make</a>
                </li>
                <li><a href="tables-2.html">Tables</a>
                </li>
                <li class="active">Tables Editable</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="fa fa-table"></i> <strong>Editable</strong> Tables</h3>
                </div>
                <div class="panel-content">
                  @include('error')
                  <table class="table table-hover dataTable" id="table-editable">
                    <thead>
                      <tr>
                        <th>Tên thông tin</th>
                        <th>Thông tin</th>
                        <th class="text-right">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <form action="{{route('profile.add')}}" method="post">
                        @csrf
                      <tr>
                        <td><input required style="width: 100%;border:1px solid rgb(230, 230, 230);padding: 2px;" placeholder="Tên thông tin" type="text" name="name" value="{{old('name')}}"></td>
                        <td><input required style="width: 100%;border:1px solid rgb(230, 230, 230);padding: 2px;" placeholder="Thông tin" type="text" name="value" value="{{old('value')}}"></td>
                        <td class="text-right">
                          <input class="edit btn btn-sm btn-default" type="submit" value="Thêm">
                        </td>
                      </tr>
                      </form>
                      @foreach ($profile as $value)
                      <form action="{{route('profile.edit', $value->id)}}" method="get">
                        @csrf
                      <tr>
                        <td><input style="width: 100%;border:0px;" type="text" name="name" value="{{$value->key_name}}"></td>
                        <td><input style="width: 100%;border:0px;" type="text" name="value" value="{{$value->value_name}}"></td>
                        <td class="text-right">
                          <input class="edit btn btn-sm btn-default" type="submit" value="Sửa">
                          <a class="delete btn btn-sm btn-danger" href="{{route('profile.delete', $value->id)}}">Xóa</a>
                        </td>
                      </tr>
                      </form>
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
      <!-- END MAIN CONTENT -->
@include('admin.layout.footer-table')