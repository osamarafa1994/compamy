<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
   <!-- sidebar -->
   <div class="sidebar">
      <!-- sidebar menu -->
      <ul class="sidebar-menu">
         <li class="active">
            <a href="{{asset('dash')}}"><i class="fa fa-tachometer"></i><span>لوحة التحكم</span>
            <span class="pull-right-container">
            </span>
            </a>
         </li>
         
         <li class="treeview">
            <a href="#">
            <i class="fa fa-users"></i><span>الموظفين</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="{{asset('employee')}}">اضافة موظف</a></li>
            </ul>
         </li>
         <li class="treeview">
            <a href="#">
            <i class="fa fa-building-o"></i><span>الشركات</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="{{asset('company')}}">اضافة شركه</a></li>
            </ul>
         </li>
         


      </ul>
   </div>
   <!-- /.sidebar -->
</aside>
<!-- =============================================== -->
