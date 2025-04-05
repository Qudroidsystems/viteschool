<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar  flex-column "
  data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
  >
  <!--begin::Logo-->
  <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
    <!--begin::Logo image-->
    <a href="../index.html">
    <img alt="Logo" src="<?php echo e(asset('html/assets/assets/media/logos/rsslogo.png')); ?>"
      class="h-65px app-sidebar-logo-default" style="margin-left: 70px"/>
    </a>
    <!--end::Logo image-->
    <!--begin::Sidebar toggle-->
    <!--begin::Minimized sidebar setup:
      if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
          1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
          2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
          3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
          4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
      }
      -->
    <div
      id="kt_app_sidebar_toggle"
      class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate "
      data-kt-toggle="true"
      data-kt-toggle-state="active"
      data-kt-toggle-target="body"
      data-kt-toggle-name="app-sidebar-minimize"
      >
      <i class="ki-duotone ki-double-left fs-2 rotate-180"><span class="path1"></span><span class="path2"></span></i>        
    </div>
    <!--end::Sidebar toggle-->
  </div>
  <!--end::Logo-->
  <!--begin::sidebar menu-->
  <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div
      id="kt_app_sidebar_menu_wrapper"
      class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
      data-kt-scroll="true"
      data-kt-scroll-activate="true"
      data-kt-scroll-height="auto"
      data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
      data-kt-scroll-wrappers="#kt_app_sidebar_menu"
      data-kt-scroll-offset="5px"
      data-kt-scroll-save-state="true"
      >
      <!-- begin::Menu-->
      <div class="menu menu-column menu-rounded menu-sub-indention px-3"
        id="#kt_app_sidebar_menu"
        data-kt-menu="true"
        data-kt-menu-expand="false">
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('dashboard')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
          Dashboards
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link"  href="/dashboard" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              Dashboard
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  class="menu-item pt-5" >
          <!--begin:Menu content-->
          <div  class="menu-content" >
            <span class="menu-heading fw-bold text-uppercase fs-7">
            USERS & PRIVILEGES
            </span>
          </div>
          <!--end:Menu content-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('users*') ||
          request()->is('roles*') ||
          request()->is('permissions*')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
          User Management
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('users*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('users.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              All Users List
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link <?php echo e(request()->is('roles*')
                ? ' active' : ''); ?>"
                href="<?php echo e(route('roles.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              Roles List
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link <?php echo e(request()->is('permissions*')
                ? ' active' : ''); ?>"
                href="<?php echo e(route('permissions.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span></span>
              <span  class="menu-title" >
              Permissions List
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  class="menu-item pt-5" >
          <!--begin:Menu content-->
          <div  class="menu-content" >
            <span class="menu-heading fw-bold text-uppercase fs-7">
            APPS MANAGEMENT
            </span>
          </div>
          <!--end:Menu content-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('overview*') ||
          request()->is('settings*')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
          My Account
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('user.overview')
                ? ' active' : ''); ?>"  href="<?php echo e(route('user.overview',Auth::user()->id)); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              Overview
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link <?php echo e(request()->is('settings*')
                ? ' active' : ''); ?>"
                href="<?php echo e(route('user.settings',Auth::user()->id)); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              Settings
              </span>
              </a>
              <a class="menu-link  <?php echo e(request()->is('student*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('student.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              All Students
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  class="menu-item pt-5" >
          <!--begin:Menu content-->
          <div  class="menu-content" >
            <span class="menu-heading fw-bold text-uppercase fs-7">
            APPS
            </span>
          </div>
          <!--end:Menu content-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('student*')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
          Students Management
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('student-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('student*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('student.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              All Students
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
            
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('student_bulk-upload')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('student.*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('student.batchindex')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              Batch Student Upload
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('parent*')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
          Parents
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('parent-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('parent*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('parent.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              Parent Management
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('subjectoperation*')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
          Subject Registration
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('subject_operation-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('subjectoperation*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('subjectoperation.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              Student Subjects Reg.
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
            <!--begin:Menu item-->
            
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('schoolpayment*') ||  request()->is('analysis*')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
          School Payments
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('subject_operation-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('schoolpayment*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('schoolpayment.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              Student Payment.
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
            
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('analysis*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('analysis.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              Analysis Book.
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->

          <!--begin:Menu item-->
          <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('exams*')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
            Exams Operations
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('myclass-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('exams*') 
                ? ' active' : ''); ?>"  href="<?php echo e(route('exams.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              Exams 
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
           
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->

          <!--begin:Menu item-->
          <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('myclass*') ||
          request()->is('mysubject*')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
             CBT
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('myclass-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('cbt*') 
                ? ' active' : ''); ?>"  href="<?php echo e(route('cbt.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
                 Exams
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('myclass*') ||
          request()->is('mysubject*')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
          My Classes & subjects
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('myclass-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('myclass*') || request()->is('viewstudent*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('myclass.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              My Classes
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mysubject-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('mysubject*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('mysubject.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              My Subjects
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('myresultroom*') ||
          request()->is('studentresults*')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
          Records and Results
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('myresultroom-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('myresultroom*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('myresultroom.term')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              My Record sheets
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('studentresults-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('studentresults*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('studentresults.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              Students Results
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  class="menu-item pt-5" >
          <!--begin:Menu content-->
          <div  class="menu-content" >
            <span class="menu-heading fw-bold text-uppercase fs-7">
            SCHOOL BASIC SETTINGS
            </span>
          </div>
          <!--end:Menu content-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('session*') ||
          request()->is('term*')  ||
          request()->is('schoolhouse*')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
          School Session & Term & House
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('session-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('session*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('session.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              School Session
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('term-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('term*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('term.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              School Term
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('schoolhouse-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link <?php echo e(request()->is('schoolhouse*')
                ? ' active' : ''); ?>"
                href="<?php echo e(route('schoolhouse.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span></span>
              <span  class="menu-title" >
              School House
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('schoolarm*') ||
          request()->is('schoolclass*')  ||
          request()->is('classcategories*') ||
          request()->is('classteacher*')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
          Class Settings
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('school_arm-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('schoolarm*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('schoolarm.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              Class Arm
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('classcategory-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link <?php echo e(request()->is('classcategory*')
                ? ' active' : ''); ?>"
                href="<?php echo e(route('classcategories.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span></span>
              <span  class="menu-title" >
              Class Category
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('school_class-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('schoolclass*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('schoolclass.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              Class Name
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('class_teacher-list')): ?>
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link <?php echo e(request()->is('classteacher*')
                ? ' active' : ''); ?>"
                href="<?php echo e(route('classteacher.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span></span>
              <span  class="menu-title" >
              Class Teacher
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('subject*') ||
          request()->is('subjectteacher*')  ||
          request()->is('subjectclass*')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
          Subject Settings
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('subject-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('subject*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('subject.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              School Subject
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('subject_teacher-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link  <?php echo e(request()->is('subjectteacher*')
                ? ' active' : ''); ?>"  href="<?php echo e(route('subjectteacher.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span>
              </span>
              <span  class="menu-title" >
              Subject Teacher
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('subject_class-list')): ?>
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link <?php echo e(request()->is('subjectclass*')
                ? ' active' : ''); ?>"
                href="<?php echo e(route('subjectclass.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span></span>
              <span  class="menu-title" >
              Subjects For Classes
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <?php endif; ?>
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="click"  class="menu-item <?php echo e(request()->is('schoolbill*')||
          request()->is('schoolbilltermsession*')
          ? ' here show menu-accordion' : ''); ?>" >
          <!--begin:Menu link-->
          <span class="menu-link" >
          <span  class="menu-icon" >
          <i class="ki-duotone ki-element-11 fs-2">
          <span class="path1">
          </span><span class="path2">
          </span><span class="path3">
          </span><span class="path4">
          </span></i></span>
          <span  class="menu-title" >
          School BIll Settings
          </span>
          <span  class="menu-arrow" >
          </span></span>
          <!--end:Menu link-->
          <!--begin:Menu sub-->
          <div  class="menu-sub menu-sub-accordion" >
            
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link <?php echo e(request()->is('schoolbill*')
                ? ' active' : ''); ?>"
                href="<?php echo e(route('schoolbill.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span></span>
              <span  class="menu-title" >
              School BIlls</span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            
            
            <!--begin:Menu item-->
            <div  class="menu-item" >
              <!--begin:Menu link-->
              <a class="menu-link <?php echo e(request()->is('schoolbill_term_session*')
                ? ' active' : ''); ?>"
                href="<?php echo e(route('schoolbilltermsession.index')); ?>" >
              <span  class="menu-bullet" >
              <span class="bullet bullet-dot">
              </span></span>
              <span  class="menu-title" >
              School Bill for Class, Term & Session
              </span>
              </a>
              <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
      </div>
      <!--end::Menu -->
    </div>
    <!--end::Menu wrapper-->
  </div>
  <!--end::sidebar menu-->
</div>
<!--end::Sidebar--><?php /**PATH C:\xampp\htdocs\viteschool\resources\views/layouts/inc/sidebar.blade.php ENDPATH**/ ?>