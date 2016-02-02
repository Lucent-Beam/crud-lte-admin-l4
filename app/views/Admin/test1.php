@extends('layout.default')
@section('content')
<!-- general form elements -->
<section class="content">
       <div class="row">
         <!-- left column -->
         <div class="col-md-3">

         </div>
         <div class="col-md-6">

            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Student</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Gender</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhone1">Phone</label>
                    <input type="text" class="form-control" id="exampleInputPhone1" placeholder="Phone">
                  </div>

                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->
            </div>
            <div class="col-md-3">
            </div>
          </div>
      </section>

@stop
