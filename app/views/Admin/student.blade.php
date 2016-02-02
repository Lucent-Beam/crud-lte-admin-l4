@extends('layout.default')
@section('content')

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
                    <label for="exampleInputEmail1">Name</label>
                    <input type="email" class="form-control" id="studentname" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Gender</label>
                    <input type="password" class="form-control" id="gender" placeholder="Gender">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhone1">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                  </div>

                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary saverecord">Submit</button>
                </div>
              </form>
            </div>


            <!-- /.box -->
            </div>
            <div class="col-md-3">
            </div>
          </div>
      </section>
      <script type="text/javascript" src="js/jquery.js"></script>

      <script type="text/javascript">
          $(function(){
              $('.saverecord').click(function(){
                  var studentname = $('#studentname').val();
                  var gender = $('#gender').val();
                  var phone = $('#phone').val();

                  $.ajax({
                      url : "<?= URL::to('save') ?>",
                      type : "POST",
                      async : false,
                      data : {
                          'studentname' : studentname,
                          'gender': gender,
                          'phone' : phone,


                      },

                      success:function(re){

                      }

                  })

              });
          });
      </script>

@stop
