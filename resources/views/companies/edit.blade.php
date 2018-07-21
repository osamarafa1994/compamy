
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
                 <div class="row">
                    <div class="col-md-12">
                      <form action="{{asset('company/'.$company->id)}}" method="post">

                          <fieldset>

                              {{csrf_field()}}
                              <input name='_method' value='PUT' type="hidden" />

                             <!-- Text input-->
                             <div class="col-md-6 form-group">
                                <label class="control-label">اسم الشركة</label>
                                <input type="text" name="name" value="{{$company->name}}" placeholder="اسم الشركة" required class="form-control">
                             </div>
                             <div class="col-md-6 form-group">
                                <label class="control-label">رقم التليفون</label>
                                <input type="text" name="tel" value="{{$company->tel}}" placeholder="رقم التليفون" class="form-control" required>
                             </div>
                             <!-- Text input-->
                             <div class="col-md-6 form-group">
                                <label class="control-label">البريد الالكتروني</label>
                                <input type="email" name="email" value="{{$company->email}}" placeholder="البريد الالكتروني" class="form-control" required>
                             </div>
                             <div class="col-md-6 form-group">
                                <label class="control-label">العنوان</label>
                                <input type="text" name="address" value="{{$company->address}}" placeholder="العنوان" class="form-control" required>
                             </div>
                             <div class="col-md-12 form-group user-form-group">
                                <div class="pull-right">
                                  <button type="submit" class="btn btn-add btn-sm">حفظ</button>
                                </div>
                             </div>
                          </fieldset>
                       </form>
                    </div>
                 </div>

               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- delete user Modal2 -->
<div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header modal-header-primary">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
           <h3><i class="fa fa-building m-r-5"></i>  تنبيه</h3>
        </div>
        <div class="modal-body">
           <div class="row">
              <div class="col-md-12">
                 <form class="form-horizontal">
                    <fieldset>
                       <div class="col-md-12 form-group user-form-group">
                          <label class="control-label">تاكيد اجراء الحذف؟</label>
                          <div class="pull-right">
                             <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">لا</button>
                             <button type="submit" class="btn btn-add btn-sm">نعم</button>
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
