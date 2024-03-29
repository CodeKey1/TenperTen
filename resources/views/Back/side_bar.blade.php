   <!-- Right Icon menu Sidebar -->


   <!-- Left Sidebar -->
   <aside id="leftsidebar" class="sidebar">
       <div class="navbar-brand">
           <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
           <a href="index.html"><img src="assets/images/logo.svg" width="25" alt="Aero"><span
                   class="m-l-10">Aero</span></a>
       </div>
       <div class="menu">
           <ul class="list">
               <li>
                   <div class="user-info">
                       <a class="image" href="profile.html"><img src="assets/images/profile_av.jpg"
                               alt="User"></a>
                       <div class="detail">
                           <h4>{{ Auth::user()->name }}</h4>
                           <small>Super Admin</small>
                       </div>
                   </div>
               </li>
               <li class="active open"><a href="{{ route('admin') }}"><i
                           class="zmdi zmdi-home"></i><span>الرئيسية</span></a></li>
               <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i
                           class="zmdi zmdi-copy"></i><span>الطلبات</span></a>
                   <ul class="ml-menu">
                       <li><a href="{{ route('appointment.service') }}">طلب خدمة</a></li>
                       <li><a href="{{ route('appointment.product') }}">طلبية منتاجات</a></li>
                       <li><a href="profile.html">Profile</a></li>
                       <li><a href="timeline.html">Timeline</a></li>
                       <li><a href="pricing.html">Pricing</a></li>
                       <li><a href="invoices.html">Invoices</a></li>
                       <li><a href="invoices-list.html">Invoices List</a></li>
                       <li><a href="search-results.html">Search Results</a></li>
                   </ul>
               </li>
               <li><a href="javascript:void(0);" class="menu-toggle"><i
                           class="zmdi zmdi-apps"></i><span>الأقسام</span></a>
                   <ul class="ml-menu">
                       <li><a href="{{ route('category_list') }}">الأقسام الرئيسية</a></li>
                       <li><a href="chat.html">الخدمات</a></li>
                       <li><a href="events.html">المنتاجات</a></li>
                       <li><a href="contact.html">الارشيف</a></li>
                   </ul>
               </li>
               <li> <a href="javascript:void(0);" class="menu-toggle"><i
                           class="zmdi zmdi-assignment"></i><span>الخدمات</span></a>
                   <ul class="ml-menu">
                       <li><a href="project-list.html">Projects List</a></li>
                       <li><a href="taskboard.html">Taskboard</a></li>
                       <li><a href="ticket-list.html">Ticket List</a></li>
                       <li><a href="ticket-detail.html">Ticket Detail</a></li>
                   </ul>
               </li>
               <li> <a href="javascript:void(0);" class="menu-toggle"><i
                           class="zmdi zmdi-folder"></i><span>الفني</span></a>
                   <ul class="ml-menu">
                       <li><a href="file-dashboard.html">All File</a></li>
                       <li><a href="file-documents.html">Documents</a></li>
                       <li><a href="file-images.html">Images</a></li>
                       <li><a href="file-media.html">Media</a></li>
                   </ul>
               </li>
               <li> <a href="javascript:void(0);" class="menu-toggle"><i
                           class="zmdi zmdi-blogger"></i><span>الموردون</span></a>
                   <ul class="ml-menu">
                       <li><a href="blog-dashboard.html">Dashboard</a></li>
                       <li><a href="blog-post.html">Blog Post</a></li>
                       <li><a href="blog-list.html">List View</a></li>
                       <li><a href="blog-grid.html">Grid View</a></li>
                       <li><a href="blog-details.html">Blog Details</a></li>
                   </ul>
               </li>
               <li><a href="javascript:void(0);" class="menu-toggle"><i
                           class="zmdi zmdi-shopping-cart"></i><span>المنتاجات</span></a>
                   <ul class="ml-menu">
                       <li><a href="ec-dashboard.html">Dashboard</a></li>
                       <li><a href="ec-product.html">Product</a></li>
                       <li><a href="ec-product-List.html">Product List</a></li>
                       <li><a href="ec-product-detail.html">Product detail</a></li>
                   </ul>
               </li>
               <li><a href="javascript:void(0);" class="menu-toggle"><i
                           class="zmdi zmdi-swap-alt"></i><span>الاشتراك</span></a>
                   <ul class="ml-menu">
                       <li><a href="ui_kit.html">Aero UI KIT</a></li>
                       <li><a href="alerts.html">Alerts</a></li>
                       <li><a href="collapse.html">Collapse</a></li>
                       <li><a href="colors.html">Colors</a></li>
                       <li><a href="dialogs.html">Dialogs</a></li>
                       <li><a href="list-group.html">List Group</a></li>
                       <li><a href="media-object.html">Media Object</a></li>
                       <li><a href="modals.html">Modals</a></li>
                       <li><a href="notifications.html">Notifications</a></li>
                       <li><a href="progressbars.html">Progress Bars</a></li>
                       <li><a href="range-sliders.html">Range Sliders</a></li>
                       <li><a href="sortable-nestable.html">Sortable & Nestable</a></li>
                       <li><a href="tabs.html">Tabs</a></li>
                       <li><a href="waves.html">Waves</a></li>
                   </ul>
               </li>

               <li><a href="javascript:void(0);" class="menu-toggle"><i
                           class="zmdi zmdi-assignment"></i><span>الحسابات</span></a>
                   <ul class="ml-menu">
                       <li><a href="basic-form-elements.html">Basic Form</a></li>
                       <li><a href="advanced-form-elements.html">Advanced Form</a></li>
                       <li><a href="form-examples.html">Form Examples</a></li>
                       <li><a href="form-validation.html">Form Validation</a></li>
                       <li><a href="form-wizard.html">Form Wizard</a></li>
                       <li><a href="form-editors.html">Editors</a></li>
                       <li><a href="form-upload.html">File Upload</a></li>
                       <li><a href="form-summernote.html">Summernote</a></li>
                   </ul>
               </li>
               <li><a href="javascript:void(0);" class="menu-toggle"><i
                           class="zmdi zmdi-grid"></i><span>الفواتير</span></a>
                   <ul class="ml-menu">
                       <li><a href="normal-tables.html">Normal Tables</a></li>
                       <li><a href="jquery-datatable.html">Jquery Datatables</a></li>
                       <li><a href="editable-table.html">Editable Tables</a></li>
                       <li><a href="footable.html">Foo Tables</a></li>
                       <li><a href="table-color.html">Tables Color</a></li>
                   </ul>
               </li>
               <li><a href="javascript:void(0);" class="menu-toggle"><i
                           class="zmdi zmdi-chart"></i><span>الإشعارات</span></a>
                   <ul class="ml-menu">
                       <li><a href="c3.html">C3 Chart</a></li>
                       <li><a href="morris.html">Morris</a></li>
                       <li><a href="flot.html">Flot</a></li>
                       <li><a href="chartjs.html">ChartJS</a></li>
                       <li><a href="sparkline.html">Sparkline</a></li>
                       <li><a href="jquery-knob.html">Jquery Knob</a></li>
                   </ul>
               </li>
               <li><a href="javascript:void(0);" class="menu-toggle"><i
                           class="zmdi zmdi-delicious"></i><span>التقييم</span></a>
                   <ul class="ml-menu">
                       <li><a href="widgets-app.html">أعلي تقييمات</a></li>
                       <li><a href="widgets-data.html">المحظوريين</a></li>
                   </ul>
               </li>
               <li><a href="javascript:void(0);" class="menu-toggle"><i
                           class="zmdi zmdi-lock"></i><span>العروض</span></a>
                   <ul class="ml-menu">
                       <li><a href="sign-in.html">Sign In</a></li>
                       <li><a href="sign-up.html">Sign Up</a></li>
                       <li><a href="forgot-password.html">Forgot Password</a></li>
                       <li><a href="404.html">Page 404</a></li>
                       <li><a href="500.html">Page 500</a></li>
                       <li><a href="page-offline.html">Page Offline</a></li>
                       <li><a href="locked.html">Locked Screen</a></li>
                   </ul>
               </li>
               <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i
                           class="zmdi zmdi-map"></i><span>المستخدمين</span></a>
                   <ul class="ml-menu">
                       <li><a href="google.html">Google Map</a></li>
                       <li><a href="yandex.html">YandexMap</a></li>
                       <li><a href="jvectormap.html">jVectorMap</a></li>
                   </ul>
               </li>
               <li><a href="javascript:void(0);" class="menu-toggle"><i
                           class="zmdi zmdi-flower"></i><span>الإعدادات</span></a>
                   <ul class="ml-menu">
                       <li><a href="icons.html">Material Icons</a></li>
                       <li><a href="icons-themify.html">Themify Icons</a></li>
                       <li><a href="icons-weather.html">Weather Icons</a></li>
                   </ul>
               </li>
               <li>
                   <div class="progress-container progress-primary m-t-10">
                       <span class="progress-badge">Traffic this Month</span>
                       <div class="progress">
                           <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67"
                               aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                               <span class="progress-value">67%</span>
                           </div>
                       </div>
                   </div>
                   <div class="progress-container progress-info">
                       <span class="progress-badge">Server Load</span>
                       <div class="progress">
                           <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86"
                               aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                               <span class="progress-value">86%</span>
                           </div>
                       </div>
                   </div>
               </li>
           </ul>
       </div>
   </aside>

   <!-- Right Sidebar -->

