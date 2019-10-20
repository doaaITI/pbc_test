<!DOCTYPE html>


<html lang="en">

<!-- begin::Head -->
<head>

    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href="#">

    <!--end::Base Path -->
    <meta charset="utf-8"/>
    <title>@yield('title') </title>

    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "de974fef-a500-409b-a4c2-6e9edb4a0e13",
            });
        });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
          type="text/css"/>

    <!--end::Page Vendors Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{asset('assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"
          type="text/css"/>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="{{asset('assets/vendors/general/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/nouislider/distribute/nouislider.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/general/animate.css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/custom/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/custom/vendors/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/custom/vendors/flaticon2/flaticon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet"
          type="text/css"/>

          <link href="{{asset('assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

          <link href="{{asset('assets/css/demo1/pages/invoices/invoice-2.css')}}" rel="stylesheet" type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{asset('assets/css/demo11/style.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}"/>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="{{url("/admin")}}">
            <img alt="Logo" src="{{asset("assets/media/logos/logo-11-sm.png")}}" />
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
    </div>
</div>

<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed" data-ktheader-minimize="on">
                <div class="kt-container  kt-container--fluid ">

                    <!-- begin:: Brand -->
                    <div class="kt-header__brand " id="kt_header_brand">
                        <div class="kt-header__brand-logo">
                            <a href="{{url("/admin")}}">
                                <img alt="Logo" src="{{asset("assets/media/logos/logo-11.png")}}" />
                            </a>
                        </div>
                    </div>

                    <!-- end:: Brand -->

                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar">

                        <!--begin: Search -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                <span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                                <div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
                                    <form method="get" class="kt-quick-search__form">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                                            <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                                            <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
                                        </div>
                                    </form>
                                    <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Search -->

                        <!--begin: Notifications -->
                        <div class="kt-header__topbar-item dropdown">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                <span class="kt-header__topbar-icon"><i class="flaticon2-bell-alarm-symbol"></i></span>
                                <span class="kt-hidden kt-badge kt-badge--danger"></span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                                <!--begin: Head -->
                                <div class="kt-head kt-head--skin-light kt-head--fit-x pt-3 pb-3">
                                    <h3 class="kt-head__title">
                                        Notifications
                                    </h3>
                                </div>

                                <!--end: Head -->

                                <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
                                    <a href="#" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-line-chart kt-font-success"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title">
                                                New order has been received
                                            </div>
                                            <div class="kt-notification__item-time">
                                                2 hrs ago
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!--end: Notifications -->

                        <!--begin: Language bar -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--langs">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
										<span class="kt-header__topbar-icon">
											<img class="" src="{{asset("assets/media/flags/012-uk.svg")}}" alt="" />
										</span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim">
                                <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                                    <li class="kt-nav__item kt-nav__item--active">
                                        <a href="#" class="kt-nav__link">
                                            <span class="kt-nav__link-icon"><img src="{{asset("assets/media/flags/012-uk.svg")}}" alt="" /></span>
                                            <span class="kt-nav__link-text">English</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--end: Language bar -->

                        <!--begin: User bar -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                <span class="kt-header__topbar-welcome kt-visible-desktop">Hi,</span>
                                <span class="kt-header__topbar-username kt-visible-desktop">{{Auth()->user()->name}}</span>
                                <span class="kt-header__topbar-icon kt-bg-brand kt-hidden"><b>S</b></span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

                                <!--begin: Navigation -->
                                <div class="kt-notification">
                                    <a href="#" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                My Profile
                                            </div>
                                            <div class="kt-notification__item-time">
                                                Account settings and more
                                            </div>
                                        </div>
                                    </a>
                                    <div class="kt-notification__custom kt-space-between">
                                        <a href="{{route('admin.logout')}}"  class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                                    </div>
                                </div>

                                <!--end: Navigation -->
                            </div>
                        </div>

                        <!--end: User bar -->
                    </div>

                    <!-- end:: Header Topbar -->
                </div>
            </div>

            <!-- end:: Header -->
@include('admin.include.nav')

                    <!-- end:: Aside -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                        <!-- begin:: Subheader -->
                        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                            <div class="kt-container  kt-container--fluid ">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">
                                        Dashboard </h3>
                                    <span class="kt-subheader__separator kt-hidden"></span>
                                    <div class="kt-subheader__breadcrumbs">
                                        <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                                        <span class="kt-subheader__breadcrumbs-separator"></span>
                                        <a href="" class="kt-subheader__breadcrumbs-link">
                                            Test </a>

                                        <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end:: Subheader -->

                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

                            <!--Begin::Dashboard-->
                            @include('common.notify')

                            @yield('content')

                            <!--End::Dashboard-->
                        </div>

                        <!-- end:: Content -->
                    </div>
                </div>
            </div>

            <!-- begin:: Footer -->
            <div class="kt-footer kt-grid__item" id="kt_footer">
                <div class="kt-container  kt-container--fluid ">
                    <div class="kt-footer__wrapper">
                        <div class="kt-footer__copyright">
                            2019&nbsp;&copy;&nbsp;<a href="http://zadlab.com" target="_blank" class="kt-link">ZadLab</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end:: Footer -->
        </div>
    </div>
</div>

<!-- end:: Page -->

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>

<!-- end::Scrolltop -->





<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin:: Global Mandatory Vendors -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="{{asset('assets/vendors/general/jquery/dist/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/popper.js/dist/umd/popper.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/js-cookie/src/js.cookie.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/moment/min/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/sticky-js/dist/sticky.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/wnumb/wNumb.js')}}" type="text/javascript"></script>

<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="{{asset('assets/vendors/general/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/block-ui/jquery.blockUI.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.j')}}s"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js')}}"
        type="text/javascript"></script>
<script
    src="{{asset('assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}"
    type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/bootstrap-switch.init.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/select2/dist/js/select2.full.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/typeahead.js/dist/typeahead.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/handlebars/dist/handlebars.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/nouislider/distribute/nouislider.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/owl.carousel/dist/owl.carousel.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/autosize/dist/autosize.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/clipboard/dist/clipboard.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/summernote/dist/summernote.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/markdown/lib/markdown.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/bootstrap-markdown.init.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/bootstrap-notify.init.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery-validation/dist/jquery.validate.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery-validation/dist/additional-methods.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/jquery-validation.init.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/toastr/build/toastr.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/raphael/raphael.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/morris.js/morris.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/chart.js/dist/Chart.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/waypoints/lib/jquery.waypoints.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/counterup/jquery.counterup.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/es6-promise-polyfill/promise.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/custom/js/vendors/sweetalert2.init.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery.repeater/src/lib.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery.repeater/src/jquery.input.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/dompurify/dist/purify.js')}}" type="text/javascript"></script>


<script src="{{asset('assets/js/demo1/pages/crud/forms/widgets/form-repeater.js')}}"type="text/javascript"></script>


<script src="{{asset('assets/vendors/custom/js/vendors/sweetalert2.init.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/vendors/general/jquery.repeater/src/lib.js')}}"type="text/javascript"></script>
		<script src="{{asset('assets/vendors/general/jquery.repeater/src/jquery.input.js')}}"type="text/javascript"></script>
        <script src="{{asset('assets/vendors/general/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>


<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{asset('assets/js/demo11/scripts.bundle.js')}}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>


<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('assets/js/demo1/pages/dashboard.js')}}" type="text/javascript"></script>


		<!--begin::Page Vendors(used by this page) -->
		<script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="{{asset('assets/js/demo1/pages/crud/datatables/basic/paginations.js')}}" type="text/javascript"></script>

<!--end::Page Scripts -->

<script src="{{asset('assets/repeater/jquery.repeater.js')}}"></script>
<script src="{{asset('assets/repeater/jquery.repeater.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.repeater').repeater({
            // (Required if there is a nested repeater)
            // Specify the configuration of the nested repeaters.
            // Nested configuration follows the same format as the base configuration,
            // supporting options "defaultValues", "show", "hide", etc.
            // Nested repeaters additionally require a "selector" field.

            repeaters: [{
                // (Required)
                // Specify the jQuery selector for this nested repeater
                selector: '.inner-repeater'
            }]
        });
    });
</script>




</body>

<!-- end::Body -->

</html>

