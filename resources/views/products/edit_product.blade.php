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
                                <form action="{{url("/products/update",["id"=>$product->id])}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name"  class="form-control" value="{{$product->name}}">
                                        <label>Image</label>
                                        <input type="text" name="image" class="form-control"  value="{{$product->image}}">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control"  value="{{$product->description}}">
                                        <label>Price</label>
                                        <input type="text" name="price" class="form-control" value="{{$product->price}}">
                                        <label>Qty</label>
                                        <input type="text" name="qty" class="form-control"  value="{{$product->qty}}">
                                        <label>Category ID</label>
                                        <select  name="categoryId" class="form-control">
                                            <option value="0">Select a category</option>
                                            @foreach($category as $item)
                                                <option @if($item->__get("id") == $product->__get("category_id")) selected @endif value="{{$item->__get("id")}}">{{$item->__get("name")}}</option>
                                            @endforeach
                                        </select>
                                        <label>Brand ID</label>
                                        <select  name="categoryId" class="form-control">
                                            <option value="0">Select a category</option>
                                            @foreach($brand as $item)
                                                <option @if($item->__get("id") == $product->__get("brand_id")) selected @endif value="{{$item->__get("id")}}">{{$item->__get("name")}}</option>
                                            @endforeach
                                        </select>
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
