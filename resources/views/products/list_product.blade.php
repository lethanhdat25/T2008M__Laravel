@extends("layout")
@section("main")
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Simple Tables</h1>
                        <a href="{{url("/products/new")}}">Thêm Sản Phẩm Mới</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Simple Tables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Fixed Header Table</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Category_ID</th>
                                        <th>Brand_ID</th>
                                        <th>Create_At</th>
                                        <th>Update_At</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($product as $prod)
                                        <tr>
                                            <td>{{$prod->__get("id")}}</td>
                                            <td>{{$prod->__get("name")}}</td>
                                            <td><img width="50px" src="{{$prod->GetImage()}}"></td>
                                            <td>{{$prod->description}}</td>
                                            <td>{{$prod->price}}</td>
                                            <td>{{$prod->qty}}</td>
                                            <td>{{$prod->Category->__get("name")}}</td>
                                            <td>{{$prod->Brand->__get("name")}}</td>
                                            <td>{{$prod->created_at}}</td>
                                            <td>{{$prod->updated_at}}</td>
                                            <td>
                                                <a href="{{url("/products/edit",["id"=>$prod->id])}}">Sửa</a> &ensp;
                                                <a href="{{url("/products/delete",["id"=>$prod->id])}}">Xóa</a> &ensp;
                                                <a href="">Thêm vào giỏ hàng</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{}}
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.0-rc.5
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
@endsection


