<style media="screen">
 {
  background: #009688;
  color: #fbfbfb !important;
  border: 1px solid #009688;
  margin-bottom: 10px !important;
}
</style>

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-dashboard"></i>
               </div>
               <div class="header-title">
                  <h1 style=" line-height: 1.7;">{{$title}}</h1>

               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                 @if(!isset($controllers) && empty($controllers))

                   <div class="alert alert-danger fade in">
                       لا يوجد ادارات متاحة لعرضها
                   </div>

                   <div class="table-responsive">
                      <table id="Example1" class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                               <th>مسلسل</th>
                               <th>اسم الموظف</th>
                               <th>اسم الشركه التابع لها</th>
                               <th>البريد الالكتروني</th>
                               <th>النوع</th>

                            </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <td>1</td>
                             <td>{{$user->name}}</td>
                             <td>{{($company_name)? $company_name : 'لم تحدد بعد'}}</td>
                             <td>{{$user->email}}</td>
                             <td><span class="label-primary label label-default">{{"موظف"}}
                             </span></td>
                           </tr>
                         </tbody>
                       </table>

                 @elseif(isset($controllers) && !empty($controllers))

                       @foreach($controllers as $key=>$controller)
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-user-plus fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number">11</span>
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <a href='{{asset("$key")}}'><h3>{{$controller}}</h3></a>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  @endif
               </div>
          </section>
    </div>
