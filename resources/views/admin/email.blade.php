@include('admin.layout.menu')
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
                <p>Here you can manage your table easily: add new row, edit or remove existing data. You can export your table in PDF, Excel, CSV or just print it.</p>
                <div class="m-b-20">
                    <div class="btn-group">
                    <button id="table-edit_new" class="btn btn-sm btn-dark"><i class="fa fa-plus"></i> Add New Line</button>
                    </div>
                </div>
                @include('error')
                <table class="table table-hover dataTable" id="table-editable">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Liên hệ</th>
                        <th>Nội dung</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($contact_suscess as $value)
                        <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->information}}</td>
                            <td>{{$value->content}}</td>
                            <td class="text-right" style="display: flex;">
                                <a class="edit btn btn-sm btn-default" href="{{route('mail.status', $value->id)}}">
                                    <i class="icon-note"></i>
                                </a>
                                <a class="delete btn btn-sm btn-danger" href="{{route('mail.delete', $value->id)}}">
                                    <i class="icons-office-52"></i>
                                </a>
                            </td>
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