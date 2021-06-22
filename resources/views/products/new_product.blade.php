<!DOCTYPE html>
<html>
<x-head/>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <x-nav/>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <x-sidebar/>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Condensed Full Width Table</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <form action="{{url("/products/save")}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="{{old("name")}}" placeholder="Tên sản phẩm">
                                     @error('name')<div class="alert alert-danger">{{$message}}</div>@enderror
                                    <label>Image</label>
                                    <input type="file" name="image" value="{{old("image")}}" class="form-control" placeholder="link ảnh">
                                    @error('image')<div class="alert alert-danger">{{$message}}</div>@enderror
                                    <label>Description</label>
                                    <textarea type="text" name="description" class="form-control">{{old("description")}}</textarea>
                                    @error('description')<div class="alert alert-danger">{{$message}}</div>@enderror
                                    <label>Price</label>
                                    <input type="number" value="{{old("price")}}" min="0" name="price" class="form-control" placeholder="Giá">
                                    @error('price')<div class="alert alert-danger">{{$message}}</div>@enderror
                                    <label>Qty</label>
                                    <input type="number" value="{{old("qty")}}" min="0" name="qty" class="form-control" placeholder="Số lượng">
                                    @error('qty')<div class="alert alert-danger">{{$message}}</div>@enderror
                                    <label>Category ID</label>
                                    <select  name="categoryId" class="form-control">
                                        <option value="0">Select a category</option>
                                        @foreach($categories as $item)
                                            <option @if(old("categoryId") == $item->__get("id")) selected @endif value="{{$item->__get("id")}}">{{$item->__get("name")}}</option>
                                        @endforeach
                                    </select>
                                    @error('categoryId')<div class="alert alert-danger">{{$message}}</div>@enderror
                                    <select  name="brandId" class="form-control">
                                        <option value="0">Select a category</option>
                                        @foreach($brands as $item)
                                            <option @if(old("brandId") == $item->__get("id")) selected @endif value="{{$item->__get("id")}}">{{$item->__get("name")}}</option>
                                        @endforeach
                                    </select>
                                    @error('brandId')<div class="alert alert-danger">{{$message}}</div>@enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                                </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
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
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
