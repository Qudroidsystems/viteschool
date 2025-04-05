<!DOCTYPE html>
<html lang="en" >
  <!--begin::Head-->
  <head>
    <title>Scroll | Dashboard</title>
    <meta charset="utf-8"/>
    <meta name="description" content=" "/>
    <meta name="keywords" content=""/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" href="<?php echo e(asset('html/assets/assets/media/logos/favicon.ico')); ?>"/>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->
    <style>
      * {
      /* box-sizing: border-box;
      margin: 0;
      padding: 0; */
      }
      .fraction {
      display: inline-flex;
      flex-direction: column;
      align-items: center;
      font-family: Arial, sans-serif;
      font-size: 10px;
      }
      .fraction .numerator {
      border-bottom: 2px solid black;
      padding: 0 5px;
      }
      .fraction .denominator {
      padding-top: 5px;
      }
      tr.rt>th,
      tr.rt>td {
      text-align: center;
      }
      div.grade>span {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 16px;
      font-weight: bold;
      }
      span.text-space-on-dots {
      position: relative;
      width: 500px;
      border-bottom-style: dotted;
      }
      span.text-dot-space2 {
      position: relative;
      width: 300px;
      border-bottom-style: dotted;
      }
      @media print {
      div.print-body {
      background-color: white;
      }
      @page {
      size: 940px;
      margin: 0px;
      }
      div.print-body {
      background-color: white;
      }
      html,
      body {
      width: 940px;
      }
      body {
      margin: 0;
      }
      nav {
      display: none;
      }
      }
      p.school-name1 {
      font-family: 'Times New Roman', Times, serif;
      font-size: 40px;
      font-weight: 500;
      }
      p.school-name2 {
      font-family: 'Times New Roman', Times, serif;
      font-size: 30px;
      font-weight: bolder;
      }
      div.school-logo {
      width: 80px;
      height: 60px;
      }
      div.header-divider {
      width: 100%;
      height: 3px;
      background-color: black;
      margin-bottom: 3px;
      }
      div.header-divider2 {
      width: 100%;
      height: 1px;
      background-color: black;
      }
      span.result-details {
      font-size: 16px;
      font-family: 'Times New Roman', Times, serif;
      font-weight: lighter;
      font-style: italic;
      }
      span.rd1 {
      position: relative;
      width: 86.1%;
      border-bottom-style: dotted;
      }
      span.rd2 {
      position: relative;
      width: 30%;
      border-bottom-style: dotted;
      }
      span.rd3 {
      position: relative;
      width: 30%;
      border-bottom-style: dotted;
      }
      span.rd4 {
      position: relative;
      width: 30%;
      border-bottom-style: dotted;
      }
      span.rd5 {
      position: relative;
      width: 25%;
      border-bottom-style: dotted;
      }
      span.rd6 {
      position: relative;
      width: 28%;
      border-bottom-style: dotted;
      }
      span.rd7 {
      position: relative;
      width: 17.2%;
      border-bottom-style: dotted;
      }
      span.rd8 {
      position: relative;
      width: 12%;
      border-bottom-style: dotted;
      }
      span.rd9 {
      position: relative;
      width: 11%;
      border-bottom-style: dotted;
      }
      span.rd10 {
      position: relative;
      width: 11%;
      border-bottom-style: dotted;
      }
    </style>
    <?php if(Route::is('dashboard')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.dashboard-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('users.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('user.overview')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('user.settings')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('roles.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('permissions.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.permission-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('student.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('studentImageUpload.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('parent.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('session.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('term.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('schoolarm.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('schoolhouse.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('schoolclass.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('classcategories.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('classteacher.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('subject.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('subjectteacher.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('subjectclass.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('subjectoperation.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('subjectinfo.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('myclass.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('mysubject.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('viewstudent*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('myresultroom*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('subjectscoresheet*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('studentresults*')): ?>
    <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('schoolbill*')): ?>
        <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('schoolpayment*')): ?>
        <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('analysis*')): ?>
        <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('exams*')): ?>
        <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('questions*')): ?>
        <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('cbt*')): ?>
        <?php echo $__env->make('layouts.pages-assets.css.users-list-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!--begin::Body-->
  <body  id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"  class="app-default" >
    <!--begin::Theme mode setup on page load-->
    <script>
      var defaultThemeMode = "light";
      var themeMode;
      
      if ( document.documentElement ) {
      	if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
      		themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
      	} else {
      		if ( localStorage.getItem("data-bs-theme") !== null ) {
      			themeMode = localStorage.getItem("data-bs-theme");
      		} else {
      			themeMode = defaultThemeMode;
      		}
      	}
      
      	if (themeMode === "system") {
      		themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
      	}
      
      	document.documentElement.setAttribute("data-bs-theme", themeMode);
      }
    </script>
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
      <!--begin::Header-->
      <div id="kt_app_header" class="app-header ">
        <!--begin::Header container-->
        <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between " id="kt_app_header_container">
          <!--begin::Sidebar mobile toggle-->
          <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
              <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span class="path2"></span></i>		
            </div>
          </div>
          <!--end::Sidebar mobile toggle-->
          <!--begin::Mobile logo-->
          <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="assets/index.html')}}" class="d-lg-none">
            <img alt="Logo" src="<?php echo e(asset('html/assets/assets/media/logos/default-small.svg')); ?>" class="h-30px"/>
            </a>
          </div>
          <!--end::Mobile logo-->
          <!--begin::Header wrapper-->
          <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div
              class="
              app-header-menu
              app-header-mobile-drawer
              align-items-stretch
              "
              data-kt-drawer="true"
              data-kt-drawer-name="app-header-menu"
              data-kt-drawer-activate="{default: true, lg: false}"
              data-kt-drawer-overlay="true"
              data-kt-drawer-width="250px"
              data-kt-drawer-direction="end"
              data-kt-drawer-toggle="#kt_app_header_menu_toggle"
              data-kt-swapper="true"
              data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
              data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}"
              >
            </div>
            <!--end::Menu wrapper-->
            <?php echo $__env->make('layouts.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
              <?php echo $__env->make('layouts.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php echo $__env->yieldContent('content'); ?>
            </div>
            <!--end::Content wrapper-->
            <!--begin::Footer-->
            <div id="kt_app_footer" class="app-footer " >
              <!--begin::Footer container-->
              <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                  <span class="text-muted fw-semibold me-1">2023&copy;</span>
                  <a href="#" target="_blank" class="text-gray-800 text-hover-primary">Powered By Qudroid Systems</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                  <li class="menu-item">
                    <a href="https://keenthemes.com/" target="_blank" class="menu-link px-2">
                    About
                    </a>
                  <li>
                </ul>
                <!--end::Menu-->
              </div>
              <!--end::Footer container-->
            </div>
            <!--end::Footer-->
          </div>
          <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
      <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    <script>
      // var hostUrl = "<?php echo e(asset('html/assets/assets/index.html')); ?>";        
    </script>
    <?php if(Route::is('dashboard')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.dashboard-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('users.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.users-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('user.overview')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.users-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('user.settings')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.users-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('roles.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.role-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('permissions.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.permissions-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('session.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.session-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('term.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.term-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('schoolhouse.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.house-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('schoolclass.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.schoolclass-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('schoolarm.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.arm-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('classcategories.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.classcategory-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('classteacher.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.classteacher-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('subject.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.subject-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('subjectteacher.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.subjectteacher-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('subjectclass.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.subjectclass-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('student.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.student-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('batchindex.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.studentbatch-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('subjectoperation.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.subjectoperation-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('subjectinfo.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.subjectinfo-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('myclass.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.myclass-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('mysubject.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.mysubject-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('viewstudent*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.viewstudent-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('myresultroom*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.myresultroom-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('subjectscoresheet*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.subjectscoresheet-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('studentresults*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.subjectscoresheet-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('schoolbill*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.schoolbill-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('schoolbilltermsession.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.schoolbilltermsession-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('schoolpayment.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.schoolpayment-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('analysis.*')): ?>
    <?php echo $__env->make('layouts.pages-assets.js.analysis-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('exams.*')): ?>
         <?php echo $__env->make('layouts.pages-assets.js.analysis-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('questions.*')): ?>
         <?php echo $__env->make('layouts.pages-assets.js.analysis-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('cbt.*')): ?>
         <?php echo $__env->make('layouts.pages-assets.js.analysis-list-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!--end::Custom Javascript-->
  </body>
</html><?php /**PATH C:\xampp\htdocs\viteschool\resources\views/layouts/master.blade.php ENDPATH**/ ?>