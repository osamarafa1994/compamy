{{!! session()->get('status')  !!}}
<style media="screen">
.btn-add {
  background: #009688;
  color: #fbfbfb !important;
  border: 1px solid #009688;
  margin-bottom: 7px;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="header-icon">
         <i class="fa fa-building-o"></i>
      </div>
      <div class="header-title">
         <h1 style=" line-height: 1.7;">{{$title}}</h1>

      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonexport">
                     <a href="#">
                        <h4>{{$title}}</h4>
                     </a>
                  </div>
               </div>
               <div class="panel-body">

                <a href="#" class="btn btn-add" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"></i> اٍضافة شركات </a>
                <!-- Add Model -->
                <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-plus m-r-5"></i> اضافة شركة جديدة</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                <form action="{{asset('company')}}" method="post">

                                    <fieldset>

                                        {{csrf_field()}}

                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">اسم الشركة</label>
                                          <input type="text" name="name" placeholder="اسم الشركة" required class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">رقم التليفون</label>
                                          <input type="text" name="tel" placeholder="رقم التليفون" class="form-control" required>
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">البريد الالكتروني</label>
                                          <input type="email" name="email" placeholder="البريد الالكتروني" class="form-control" required>
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">العنوان</label>
                                          <input type="text" name="address" placeholder="العنوان" class="form-control" required>
                                       </div>
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                            <button type="submit" class="btn btn-success btn-sm">اضافه</button>
                                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">تراجع</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" style="margin-right: 520px">غلق</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- end Add Model -->

                  <div class="table-responsive">


                @if(isset($companies) && !empty($companies) && count($companies) != 0)
                    <table id="Example1" class="table table-bordered table-striped table-hover">
                        <thead>
                           <tr class="info">
                              <th>مسلسل</th>
                              <th>اسم الشركة</th>
                              <th>البريد الالكتروني</th>
                              <th>اٍجراء</th>
                           </tr>

                        </thead>
                        <tbody>


                              <?php $x=1; ?>
                                @foreach($companies as $company)
                               <tr>
                                  <td>{{$x}} </td>
                                  <td>{{$company->name}}</td>
                                  <td>{{$company->email}}</td>
                                  <td>
                                    <a href="{{asset('company/'.$company->id).'/edit'}}" class="btn btn-success btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$company->id}}"><i class="fa fa-trash-o"></i> </button>
                                  </td>

                               </tr>
                               <?php $x++; ?>

                           @endforeach


                        </tbody>
                     </table>
                     @else(!isset($companies) && empty($companies) count($companies) == 0)
                    <div class="alert alert-danger fade in">
                            لا يوجد شركات لعرضها
                        </div>
                      @endif
                  </div>


               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@foreach($companies as $company)
<!-- delete user Modal2 -->
<div class="modal fade" id="delete{{$company->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header modal-header-primary">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
           <h3><i class="fa fa-building m-r-5"></i>  تنبيه</h3>
        </div>
        <div class="modal-body">
           <div class="row">
              <div class="col-md-12">
                 <form method="post" action="{{asset('company/'.$company->id)}}" class="form-horizontal">
                    <fieldset>
                       <div class="col-md-12 form-group user-form-group">
                          <label class="control-label">تاكيد اجراء الحذف؟</label>
                          <div class="pull-right">
                            {{csrf_field()}}
                            <input name='_method' value='DELETE' type="hidden" />
                             <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">لا</button>
                             <button type="submit" class="btn btn-success btn-sm">نعم</button>
                          </div>
                       </div>
                    </fieldset>
                 </form>
              </div>
           </div>
        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" style="margin-right: 520px">غلق</button>
        </div>
     </div>
     <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endforeach
