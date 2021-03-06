@extends("layout")
@section("title")
    <h1> Edit CLASS </h1>
@endsection
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT CLASS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">EDIT CLASS</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Class ID</label>
                        <input type="text" class="form-control" id="exampleID" placeholder="Enter Id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Class Name</label>
                        <input type="text" class="form-control" id="exampleName" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Room Name</label>
                        <input type="text" class="form-control" id="exampleDescription" placeholder="Enter Room Name">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
