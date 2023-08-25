@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->

      <!-- content section start-->
      <section class="content">

        <!-- Basic Forms -->
         <div class="box">
           <div class="box-header with-border">
             <h4 class="box-title">Add User</h4>

           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">


                   <form method="post" action="{{ route('users.store') }}">
                    @csrf
                     <div class="row">

                       <div class="col-12">


                        <div class="row"> <!-- row start -->
                            <div class="col-md-6">
                                 <!-- selection1 -->
                        <div class="form-group">
                            <h5>User Role <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="usertype" id="select" required="" class="form-control" aria-invalid="false">
                                    <option value="">Select Your Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>

                                </select>
                            <div class="help-block"></div></div>
                        </div>
                        <!-- selection2 -->
                            </div>  <!-- end col md-6 -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>User Name <span class="text-danger">*</span></h5>
                       <div class="controls">
                         <input type="text" name="name" class="form-control" required="">
                                    </div>
                                </div>

                            </div><!-- end col md-6 -->


                        </div>  <!-- row end -->

                        <div class="row"> <!-- row start -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>User Email <span class="text-danger">*</span></h5>
                       <div class="controls">
                         <input type="email" name="email" class="form-control" required="">
                                    </div>
                                </div>

                            </div><!-- end col md-6 -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>User Password <span class="text-danger">*</span></h5>
                       <div class="controls">
                         <input type="password" name="password" class="form-control" required="">
                                    </div>
                                </div>

                            </div><!-- end col md-6 -->


                        </div>  <!-- row end -->


                       <div class="text-xs-right">
  <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                       </div>
                   </form>

               </div>
               <!-- /.col -->
             </div>
             <!-- /.row -->
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->

       </section>
      <!-- content section end-->

    </div>
</div>
<!-- /.content-wrapper -->

@endsection

