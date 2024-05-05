
@include('layouts.header')

<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->

    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="assets/media/logos/logo-light.png" />
        </a>

        <!--end::Logo-->

        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>

            <!--end::Aside Mobile Toggle-->

            <!--begin::Header Menu Mobile Toggle-->
            <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>

            <!--end::Header Menu Mobile Toggle-->

            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>

                    <!--end::Svg Icon-->
                </span>
            </button>

            <!--end::Topbar Mobile Toggle-->
        </div>

        <!--end::Toolbar-->
    </div>

    <!--end::Header Mobile-->

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">

            @include('layouts.aside')

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::Header Menu Wrapper-->
                        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                            <!--end::Header Menu-->
                        </div>

                        <!--end::Header Menu Wrapper-->

                        <!--begin::Topbar-->
                        <div class="topbar">
                            <!--begin::Quick panel-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_panel_toggle">
                                    <span class="svg-icon svg-icon-xl svg-icon-primary">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" x="4" y="4" width="7" height="7"
                                                    rx="1.5" />
                                                <path
                                                    d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>

                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                            </div>

                            <!--end::Quick panel-->

                            <!--begin::User-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                    id="kt_quick_user_toggle">
                                    <span
                                        class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                    <span
                                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                                    </span>
                                </div>
                            </div>

                            <!--end::User-->
                        </div>

                        <!--end::Topbar-->
                    </div>

                    <!--end::Container-->
                </div>

                <!--end::Header-->

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
                        <div
                            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <!--begin::Page Heading-->
                                <div class="d-flex align-items-baseline flex-wrap mr-5">
                                    <!--begin::Page Title-->
                                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                                        Dashboard
                                    </h5>

                                    <!--end::Page Title-->
                                </div>

                                <!--end::Page Heading-->
                            </div>

                            <!--end::Info-->
                        </div>
                    </div>

                    <!--end::Subheader-->

                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                          {{ $slot}}
                        </div>

                        <!--end::Container-->
                    </div>

                    <!--end::Entry-->

                    <!-- Modal-->
                    <div class="modal fade" id="claimpopup" data-backdrop="static" tabindex="-1" role="dialog"
                        aria-labelledby="claimpopup" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Claim Now
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        The amount of <strong>$250.00</strong> will be deducted
                                        from your Current Balance.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-primary font-weight-bold"
                                        data-dismiss="modal">
                                        Cancel
                                    </button>
                                    <button type="button" class="btn btn-primary font-weight-bold">
                                        Claim Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end::Content-->
 <!--begin::Footer-->
 <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
    <!--begin::Container-->
    <div
        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold">2024 ©</span>
            <a href="https://www.samantechnosys.com/" target="_blank"
                class="text-dark-75 text-hover-primary">SamanTechnosys</a>
        </div>

        <!--end::Copyright-->

        <!--begin::Nav-->
        <div class="nav nav-dark">
            <a href="#" target="_blank" class="nav-link pl-0 pr-5">Privacy</a>
            <a href="#" target="_blank" class="nav-link pl-0 pr-5">Payment Policy</a>
            <a href="#" target="_blank" class="nav-link pl-0 pr-5">Terms & Condition</a>
        </div>

        <!--end::Nav-->
    </div>

    <!--end::Container-->
</div>

<!--end::Footer-->
</div>

<!--end::Wrapper-->
</div>

<!--end::Page-->
</div>

<!--end::Main-->

<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
<!--begin::Header-->
<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
<h3 class="font-weight-bold m-0">User Profile</h3>
<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
<i class="ki ki-close icon-xs text-muted"></i>
</a>
</div>

<!--end::Header-->

<!--begin::Content-->
<div class="offcanvas-content pr-5 mr-n5">
<!--begin::Header-->
<div class="d-flex align-items-center mt-5">
<div class="symbol symbol-100 mr-5">
    <div class="symbol-label" style="background-image: url('assets/media/users/300_21.jpg')"></div>
    <i class="symbol-badge bg-success"></i>
</div>
<div class="d-flex flex-column">
    <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">James
        Jones</a>
    <div class="navi mt-2">
        <a href="#" class="navi-item">
            <span class="navi-link p-0 pb-2">
                <span class="navi-icon mr-1">
                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                            viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                    fill="#000000" />
                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5"
                                    r="2.5" />
                            </g>
                        </svg>

                        <!--end::Svg Icon-->
                    </span>
                </span>
                <span class="navi-text text-muted text-hover-primary">jm@softplus.com</span>
            </span>
        </a>
        <a href="login.html" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign
            Out</a>
    </div>
</div>
</div>

<!--end::Header-->

<!--begin::Separator-->
<div class="separator separator-dashed mt-8 mb-5"></div>

<!--end::Separator-->

<!--begin::Nav-->
<div class="navi navi-spacer-x-0 p-0">
<!--begin::Item-->
<a href="pages/personal-information.html" class="navi-item">
    <div class="navi-link">
        <div class="symbol symbol-40 bg-light mr-3">
            <div class="symbol-label">
                <span class="svg-icon svg-icon-md svg-icon-success">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                fill="#000000" />
                            <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5"
                                r="2.5" />
                        </g>
                    </svg>

                    <!--end::Svg Icon-->
                </span>
            </div>
        </div>
        <div class="navi-text">
            <div class="font-weight-bold">My Profile</div>
            <div class="text-muted">Account Settings and more</div>
        </div>
    </div>
</a>

<!--end:Item-->

<!--begin::Item-->
<a href="pages/user-management.html" class="navi-item">
    <div class="navi-link">
        <div class="symbol symbol-40 bg-light mr-3">
            <div class="symbol-label">
                <span class="svg-icon svg-icon-md svg-icon-info">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </div>
        </div>
        <div class="navi-text">
            <div class="font-weight-bold">User Management</div>
            <div class="text-muted">Add/Edit User</div>
        </div>
    </div>
</a>

<!--end:Item-->
<!--begin::Item-->
<a href="pages/support.html" class="navi-item">
    <div class="navi-link">
        <div class="symbol symbol-40 bg-light mr-3">
            <div class="symbol-label">
                <span class="svg-icon svg-icon-md svg-icon-danger">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Files/Selected-file.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>

                    <!--end::Svg Icon-->
                </span>
            </div>
        </div>
        <div class="navi-text">
            <div class="font-weight-bold">Support</div>
            <div class="text-muted">FAQ/Get in Touch/User Guide</div>
        </div>
    </div>
</a>

<!--end:Item-->
</div>

<!--end::Nav-->
</div>

<!--end::Content-->
</div>

<!-- end::User Panel-->

<!--begin::Quick Cart-->
<div id="kt_quick_cart" class="offcanvas offcanvas-right p-10">
<!--begin::Header-->
<div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
<h4 class="font-weight-bold m-0">Shopping Cart</h4>
<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_cart_close">
<i class="ki ki-close icon-xs text-muted"></i>
</a>
</div>

<!--end::Header-->

<!--begin::Content-->
<div class="offcanvas-content">
<!--begin::Wrapper-->
<div class="offcanvas-wrapper mb-5 scroll-pull">
<!--begin::Item-->
<div class="d-flex align-items-center justify-content-between py-8">
    <div class="d-flex flex-column mr-2">
        <a href="#"
            class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">iBlender</a>
        <span class="text-muted">The best kitchen gadget in 2020</span>
        <div class="d-flex align-items-center mt-2">
            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 350</span>
            <span class="text-muted mr-1">for</span>
            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">5</span>
            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                <i class="ki ki-minus icon-xs"></i>
            </a>
            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                <i class="ki ki-plus icon-xs"></i>
            </a>
        </div>
    </div>
    <a href="#" class="symbol symbol-70 flex-shrink-0">
        <img src="assets/media/stock-600x400/img-1.jpg" title="" alt="" />
    </a>
</div>

<!--end::Item-->

<!--begin::Separator-->
<div class="separator separator-solid"></div>

<!--end::Separator-->

<!--begin::Item-->
<div class="d-flex align-items-center justify-content-between py-8">
    <div class="d-flex flex-column mr-2">
        <a href="#"
            class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">SmartCleaner</a>
        <span class="text-muted">Smart tool for cooking</span>
        <div class="d-flex align-items-center mt-2">
            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
            <span class="text-muted mr-1">for</span>
            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">4</span>
            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                <i class="ki ki-minus icon-xs"></i>
            </a>
            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                <i class="ki ki-plus icon-xs"></i>
            </a>
        </div>
    </div>
    <a href="#" class="symbol symbol-70 flex-shrink-0">
        <img src="assets/media/stock-600x400/img-2.jpg" title="" alt="" />
    </a>
</div>

<!--end::Item-->

<!--begin::Separator-->
<div class="separator separator-solid"></div>

<!--end::Separator-->

<!--begin::Item-->
<div class="d-flex align-items-center justify-content-between py-8">
    <div class="d-flex flex-column mr-2">
        <a href="#"
            class="font-weight-bold text-dark-75 font-size-lg text-hover-primary">CameraMax</a>
        <span class="text-muted">Professional camera for edge cutting shots</span>
        <div class="d-flex align-items-center mt-2">
            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 150</span>
            <span class="text-muted mr-1">for</span>
            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">3</span>
            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                <i class="ki ki-minus icon-xs"></i>
            </a>
            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                <i class="ki ki-plus icon-xs"></i>
            </a>
        </div>
    </div>
    <a href="#" class="symbol symbol-70 flex-shrink-0">
        <img src="assets/media/stock-600x400/img-3.jpg" title="" alt="" />
    </a>
</div>

<!--end::Item-->

<!--begin::Separator-->
<div class="separator separator-solid"></div>

<!--end::Separator-->

<!--begin::Item-->
<div class="d-flex align-items-center justify-content-between py-8">
    <div class="d-flex flex-column mr-2">
        <a href="#" class="font-weight-bold text-dark text-hover-primary">4D Printer</a>
        <span class="text-muted">Manufactoring unique objects</span>
        <div class="d-flex align-items-center mt-2">
            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 1450</span>
            <span class="text-muted mr-1">for</span>
            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                <i class="ki ki-minus icon-xs"></i>
            </a>
            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                <i class="ki ki-plus icon-xs"></i>
            </a>
        </div>
    </div>
    <a href="#" class="symbol symbol-70 flex-shrink-0">
        <img src="assets/media/stock-600x400/img-4.jpg" title="" alt="" />
    </a>
</div>

<!--end::Item-->

<!--begin::Separator-->
<div class="separator separator-solid"></div>

<!--end::Separator-->

<!--begin::Item-->
<div class="d-flex align-items-center justify-content-between py-8">
    <div class="d-flex flex-column mr-2">
        <a href="#" class="font-weight-bold text-dark text-hover-primary">MotionWire</a>
        <span class="text-muted">Perfect animation tool</span>
        <div class="d-flex align-items-center mt-2">
            <span class="font-weight-bold mr-1 text-dark-75 font-size-lg">$ 650</span>
            <span class="text-muted mr-1">for</span>
            <span class="font-weight-bold mr-2 text-dark-75 font-size-lg">7</span>
            <a href="#" class="btn btn-xs btn-light-success btn-icon mr-2">
                <i class="ki ki-minus icon-xs"></i>
            </a>
            <a href="#" class="btn btn-xs btn-light-success btn-icon">
                <i class="ki ki-plus icon-xs"></i>
            </a>
        </div>
    </div>
    <a href="#" class="symbol symbol-70 flex-shrink-0">
        <img src="assets/media/stock-600x400/img-8.jpg" title="" alt="" />
    </a>
</div>

<!--end::Item-->
</div>

<!--end::Wrapper-->

<!--begin::Purchase-->
<div class="offcanvas-footer">
<div class="d-flex align-items-center justify-content-between mb-4">
    <span class="font-weight-bold text-muted font-size-sm mr-2">Total</span>
    <span class="font-weight-bolder text-dark-50 text-right">$1840.00</span>
</div>
<div class="d-flex align-items-center justify-content-between mb-7">
    <span class="font-weight-bold text-muted font-size-sm mr-2">Sub total</span>
    <span class="font-weight-bolder text-primary text-right">$5640.00</span>
</div>
<div class="text-right">
    <button type="button" class="btn btn-primary text-weight-bold">
        Place Order
    </button>
</div>
</div>

<!--end::Purchase-->
</div>

<!--end::Content-->
</div>

<!--end::Quick Cart-->

<!--begin::Quick Panel-->
<div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
<!--begin::Header-->
<div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
<ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10"
role="tablist">
<li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Alerts</a>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
</li>
</ul>
<div class="offcanvas-close mt-n1 pr-5">
<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
    <i class="ki ki-close icon-xs text-muted"></i>
</a>
</div>
</div>

<!--end::Header-->

<!--begin::Content-->
<div class="offcanvas-content px-10">
<div class="tab-content">
<!--begin::Tabpane-->
<div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
    <!--begin::Section-->
    <div class="mb-5">
        <!--begin: Item-->
        <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-5">
            <span class="svg-icon svg-icon-danger mr-5">
                <span class="svg-icon svg-icon-lg">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                fill="#000000" />
                            <path
                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                fill="#000000" opacity="0.3" />
                        </g>
                    </svg>

                    <!--end::Svg Icon-->
                </span>
            </span>
            <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="#"
                    class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Account
                    balance is about to reach the minimum threshold.</a>
            </div>
        </div>

        <!--end: Item-->

        <!--begin: Item-->
        <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-5">
            <span class="svg-icon svg-icon-warning mr-5">
                <span class="svg-icon svg-icon-lg">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                fill="#000000" />
                            <rect fill="#000000" opacity="0.3"
                                transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)"
                                x="16.3255682" y="2.94551858" width="3" height="18"
                                rx="1" />
                        </g>
                    </svg>

                    <!--end::Svg Icon-->
                </span>
            </span>
            <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="#"
                    class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">10 new
                    Leads added today for personal Injury in texas</a>
            </div>
        </div>

        <!--end: Item-->

        <!--begin: Item-->
        <div class="d-flex align-items-center bg-light-success rounded p-5 mb-5">
            <span class="svg-icon svg-icon-success mr-5">
                <span class="svg-icon svg-icon-lg">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                                d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                fill="#000000" fill-rule="nonzero"
                                transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                            <path
                                d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        </g>
                    </svg>

                    <!--end::Svg Icon-->
                </span>
            </span>
            <div class="d-flex flex-column flex-grow-1 mr-2">
                <a href="#"
                    class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">
                    5 new leads added today for Real Estate in New York</a>
            </div>
        </div>

        <!--end: Item-->
    </div>

    <!--end::Section-->
</div>

<!--end::Tabpane-->

<!--begin::Tabpane-->
<div class="tab-pane fade pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">
    <!--begin::Nav-->
    <div class="navi navi-icon-circle navi-spacer-x-0">
        <!--begin::Item-->
        <a href="#" class="navi-item">
            <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                    <div class="symbol-label">
                        <i class="flaticon-bell text-success icon-lg"></i>
                    </div>
                </div>
                <div class="navi-text">
                    <div class="font-weight-bold font-size-lg">
                        New Lead Claimed today.
                    </div>
                    <div class="text-muted">Reports based on sales</div>
                </div>
            </div>
        </a>

        <!--end::Item-->

        <!--begin::Item-->
        <a href="#" class="navi-item">
            <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                    <div class="symbol-label">
                        <i class="flaticon-safe-shield-protection text-danger icon-lg"></i>
                    </div>
                </div>
                <div class="navi-text">
                    <div class="font-weight-bold font-size-lg">
                        Return request accepted and refund initiated.
                    </div>
                    <div class="text-muted">by Grog John</div>
                </div>
            </div>
        </a>

        <!--end::Item-->

        <!--begin::Item-->
        <a href="#" class="navi-item">
            <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                    <div class="symbol-label">
                        <i class="flaticon-users-1 text-warning icon-lg"></i>
                    </div>
                </div>
                <div class="navi-text">
                    <div class="font-weight-bold font-size-lg">
                        Follow up sequence stopped.
                    </div>
                    <div class="text-muted">after customer made the call</div>
                </div>
            </div>
        </a>

        <!--end::Item-->
    </div>

    <!--end::Nav-->
</div>

<!--end::Tabpane-->

<!--begin::Tabpane-->
<div class="tab-pane fade pt-3 pr-5 mr-n5" id="kt_quick_panel_settings" role="tabpanel">
    <form class="form">
        <!--begin::Section-->
        <div>
            <h5 class="font-weight-bold mb-3">Email</h5>
            <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Enable Notifications:</label>
                <div class="col-4 d-flex justify-content-end">
                    <span class="switch switch-success switch-sm">
                        <label>
                            <input type="checkbox" checked="checked" name="select" />
                            <span></span>
                        </label>
                    </span>
                </div>
            </div>
            <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">New Lead Notification:</label>
                <div class="col-4 d-flex justify-content-end">
                    <span class="switch switch-success switch-sm">
                        <label>
                            <input type="checkbox" name="quick_panel_notifications_2" />
                            <span></span>
                        </label>
                    </span>
                </div>
            </div>
            <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Follow Up Notification:</label>
                <div class="col-4 d-flex justify-content-end">
                    <span class="switch switch-success switch-sm">
                        <label>
                            <input type="checkbox" checked="checked" name="select" />
                            <span></span>
                        </label>
                    </span>
                </div>
            </div>

            <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Payment Notification:</label>
                <div class="col-4 d-flex justify-content-end">
                    <span class="switch switch-success switch-sm">
                        <label>
                            <input type="checkbox" checked="checked" name="select" />
                            <span></span>
                        </label>
                    </span>
                </div>
            </div>
        </div>

        <!--end::Section-->
        <div class="separator separator-dashed my-6"></div>

        <!--begin::Section-->
        <div class="pt-2">
            <h5 class="font-weight-bold mb-3">SMS</h5>
            <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Enable Notifications:</label>
                <div class="col-4 d-flex justify-content-end">
                    <span class="switch switch-sm switch-danger">
                        <label>
                            <input type="checkbox" checked="checked" name="select" />
                            <span></span>
                        </label>
                    </span>
                </div>
            </div>
            <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">New Lead Notification:</label>
                <div class="col-4 d-flex justify-content-end">
                    <span class="switch switch-sm switch-danger">
                        <label>
                            <input type="checkbox" name="select" />
                            <span></span>
                        </label>
                    </span>
                </div>
            </div>
            <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Follow Up Notification:</label>
                <div class="col-4 d-flex justify-content-end">
                    <span class="switch switch-sm switch-danger">
                        <label>
                            <input type="checkbox" checked="checked" name="select" />
                            <span></span>
                        </label>
                    </span>
                </div>
            </div>
            <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Payment Notification:</label>
                <div class="col-4 d-flex justify-content-end">
                    <span class="switch switch-sm switch-danger">
                        <label>
                            <input type="checkbox" checked="checked" name="select" />
                            <span></span>
                        </label>
                    </span>
                </div>
            </div>
        </div>

        <!--end::Section-->
        <div class="separator separator-dashed my-6"></div>

        <!--begin::Section-->
        <div class="pt-2">
            <h5 class="font-weight-bold mb-3">Notification</h5>
            <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Enable Notifications:</label>
                <div class="col-4 d-flex justify-content-end">
                    <span class="switch switch-sm switch-primary">
                        <label>
                            <input type="checkbox" checked="checked" name="select" />
                            <span></span>
                        </label>
                    </span>
                </div>
            </div>
            <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">New Lead Notification:</label>
                <div class="col-4 d-flex justify-content-end">
                    <span class="switch switch-sm switch-primary">
                        <label>
                            <input type="checkbox" name="select" />
                            <span></span>
                        </label>
                    </span>
                </div>
            </div>
            <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Follow Up Notification:</label>
                <div class="col-4 d-flex justify-content-end">
                    <span class="switch switch-sm switch-primary">
                        <label>
                            <input type="checkbox" checked="checked" name="select" />
                            <span></span>
                        </label>
                    </span>
                </div>
            </div>
            <div class="form-group mb-0 row align-items-center">
                <label class="col-8 col-form-label">Payment Notification:</label>
                <div class="col-4 d-flex justify-content-end">
                    <span class="switch switch-sm switch-primary">
                        <label>
                            <input type="checkbox" checked="checked" name="select" />
                            <span></span>
                        </label>
                    </span>
                </div>
            </div>
        </div>

        <!--end::Section-->
    </form>
</div>

<!--end::Tabpane-->
</div>
</div>

<!--end::Content-->
</div>

<!--end::Quick Panel-->

<!--begin::Chat Panel-->
<div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog"
data-backdrop="false">
<div class="modal-dialog" role="document">
<div class="modal-content">
<!--begin::Card-->
<div class="card card-custom">
    <!--begin::Header-->
    <div class="card-header align-items-center px-4 py-3">
        <div class="text-left flex-grow-1">
            <!--begin::Dropdown Menu-->
            <div class="dropdown dropdown-inline">
                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-lg">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none"
                                fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                    d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path
                                    d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                    fill="#000000" fill-rule="nonzero" />
                            </g>
                        </svg>

                        <!--end::Svg Icon-->
                    </span>
                </button>
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                    <!--[html-partial:begin:{"id":"demo1/dist/inc/view/partials/content/dropdowns/dropdown-4","page":"index"}]/-->

                    <!--begin::Navigation-->
                    <ul class="navi navi-hover py-5">
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-drop"></i>
                                </span>
                                <span class="navi-text">New Group</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-list-3"></i>
                                </span>
                                <span class="navi-text">Contacts</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-rocket-1"></i>
                                </span>
                                <span class="navi-text">Groups</span>
                                <span class="navi-link-badge">
                                    <span
                                        class="label label-light-primary label-inline font-weight-bold">new</span>
                                </span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-bell-2"></i>
                                </span>
                                <span class="navi-text">Calls</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-gear"></i>
                                </span>
                                <span class="navi-text">Settings</span>
                            </a>
                        </li>
                        <li class="navi-separator my-3"></li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-magnifier-tool"></i>
                                </span>
                                <span class="navi-text">Help</span>
                            </a>
                        </li>
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="navi-icon">
                                    <i class="flaticon2-bell-2"></i>
                                </span>
                                <span class="navi-text">Privacy</span>
                                <span class="navi-link-badge">
                                    <span
                                        class="label label-light-danger label-rounded font-weight-bold">5</span>
                                </span>
                            </a>
                        </li>
                    </ul>

                    <!--end::Navigation-->

                    <!--[html-partial:end:{"id":"demo1/dist/inc/view/partials/content/dropdowns/dropdown-4","page":"index"}]/-->
                </div>
            </div>

            <!--end::Dropdown Menu-->
        </div>
        <div class="text-center flex-grow-1">
            <div class="text-dark-75 font-weight-bold font-size-h5">
                Matt Pears
            </div>
            <div>
                <span class="label label-dot label-success"></span>
                <span class="font-weight-bold text-muted font-size-sm">Active</span>
            </div>
        </div>
        <div class="text-right flex-grow-1">
            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"
                data-dismiss="modal">
                <i class="ki ki-close icon-1x"></i>
            </button>
        </div>
    </div>

    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Scroll-->
        <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
            <!--begin::Messages-->
            <div class="messages">
                <!--begin::Message In-->
                <div class="d-flex flex-column mb-5 align-items-start">
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-circle symbol-40 mr-3">
                            <img alt="Pic" src="assets/media/users/300_12.jpg" />
                        </div>
                        <div>
                            <a href="#"
                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                Pears</a>
                            <span class="text-muted font-size-sm">2 Hours</span>
                        </div>
                    </div>
                    <div
                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                        How likely are you to recommend our company to your
                        friends and family?
                    </div>
                </div>

                <!--end::Message In-->

                <!--begin::Message Out-->
                <div class="d-flex flex-column mb-5 align-items-end">
                    <div class="d-flex align-items-center">
                        <div>
                            <span class="text-muted font-size-sm">3 minutes</span>
                            <a href="#"
                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                        </div>
                        <div class="symbol symbol-circle symbol-40 ml-3">
                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                        </div>
                    </div>
                    <div
                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                        Hey there, we’re just writing to let you know that you’ve
                        been subscribed to a repository on GitHub.
                    </div>
                </div>

                <!--end::Message Out-->

                <!--begin::Message In-->
                <div class="d-flex flex-column mb-5 align-items-start">
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-circle symbol-40 mr-3">
                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                        </div>
                        <div>
                            <a href="#"
                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                Pears</a>
                            <span class="text-muted font-size-sm">40 seconds</span>
                        </div>
                    </div>
                    <div
                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                        Ok, Understood!
                    </div>
                </div>

                <!--end::Message In-->

                <!--begin::Message Out-->
                <div class="d-flex flex-column mb-5 align-items-end">
                    <div class="d-flex align-items-center">
                        <div>
                            <span class="text-muted font-size-sm">Just now</span>
                            <a href="#"
                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                        </div>
                        <div class="symbol symbol-circle symbol-40 ml-3">
                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                        </div>
                    </div>
                    <div
                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                        You’ll receive notifications for all issues, pull
                        requests!
                    </div>
                </div>

                <!--end::Message Out-->

                <!--begin::Message In-->
                <div class="d-flex flex-column mb-5 align-items-start">
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-circle symbol-40 mr-3">
                            <img alt="Pic" src="assets/media/users/300_12.jpg" />
                        </div>
                        <div>
                            <a href="#"
                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                Pears</a>
                            <span class="text-muted font-size-sm">40 seconds</span>
                        </div>
                    </div>
                    <div
                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                        You can unwatch this repository immediately by clicking
                        here:
                        <a href="#">https://github.com</a>
                    </div>
                </div>

                <!--end::Message In-->

                <!--begin::Message Out-->
                <div class="d-flex flex-column mb-5 align-items-end">
                    <div class="d-flex align-items-center">
                        <div>
                            <span class="text-muted font-size-sm">Just now</span>
                            <a href="#"
                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                        </div>
                        <div class="symbol symbol-circle symbol-40 ml-3">
                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                        </div>
                    </div>
                    <div
                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                        Discover what students who viewed Learn Figma - UI/UX
                        Design. Essential Training also viewed
                    </div>
                </div>

                <!--end::Message Out-->

                <!--begin::Message In-->
                <div class="d-flex flex-column mb-5 align-items-start">
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-circle symbol-40 mr-3">
                            <img alt="Pic" src="assets/media/users/300_12.jpg" />
                        </div>
                        <div>
                            <a href="#"
                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt
                                Pears</a>
                            <span class="text-muted font-size-sm">40 seconds</span>
                        </div>
                    </div>
                    <div
                        class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                        Most purchased Business courses during this sale!
                    </div>
                </div>

                <!--end::Message In-->

                <!--begin::Message Out-->
                <div class="d-flex flex-column mb-5 align-items-end">
                    <div class="d-flex align-items-center">
                        <div>
                            <span class="text-muted font-size-sm">Just now</span>
                            <a href="#"
                                class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                        </div>
                        <div class="symbol symbol-circle symbol-40 ml-3">
                            <img alt="Pic" src="assets/media/users/300_21.jpg" />
                        </div>
                    </div>
                    <div
                        class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                        Company BBQ to celebrate the last quater achievements and
                        goals. Food and drinks provided
                    </div>
                </div>

                <!--end::Message Out-->
            </div>

            <!--end::Messages-->
        </div>

        <!--end::Scroll-->
    </div>

    <!--end::Body-->

   @include('layouts.footer')
</div>

<!--end::Card-->
</div>
</div>
</div>

<!--end::Chat Panel-->

<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
<span class="svg-icon">
<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <polygon points="0 0 24 0 24 24 0 24" />
    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10"
        rx="1" />
    <path
        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
        fill="#000000" fill-rule="nonzero" />
</g>
</svg>

<!--end::Svg Icon-->
</span>
</div>

<!--end::Scrolltop-->

<!--begin::Demo Panel-->
<div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
<!--begin::Header-->
<div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
<h4 class="font-weight-bold m-0">Select A Demo</h4>
<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
<i class="ki ki-close icon-xs text-muted"></i>
</a>
</div>

<!--end::Header-->

<!--begin::Content-->
<div class="offcanvas-content">
<!--begin::Wrapper-->
<div class="offcanvas-wrapper mb-5 scroll-pull">
<h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo1.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="index.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
            target="_blank">Default</a>
        <a href="index&amp;rtl=1.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
            target="_blank">RTL Version</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo2.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="index.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
            target="_blank">Default</a>
        <a href="index&amp;rtl=1.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
            target="_blank">RTL Version</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo3.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="index.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
            target="_blank">Default</a>
        <a href="index&amp;rtl=1.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
            target="_blank">RTL Version</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo4.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="index.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
            target="_blank">Default</a>
        <a href="index&amp;rtl=1.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
            target="_blank">RTL Version</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo5.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="index.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
            target="_blank">Default</a>
        <a href="index&amp;rtl=1.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
            target="_blank">RTL Version</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo6.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="index.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
            target="_blank">Default</a>
        <a href="index&amp;rtl=1.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
            target="_blank">RTL Version</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo7.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="index.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
            target="_blank">Default</a>
        <a href="index&amp;rtl=1.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
            target="_blank">RTL Version</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo8.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="index.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
            target="_blank">Default</a>
        <a href="index&amp;rtl=1.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
            target="_blank">RTL Version</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo9.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="index.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
            target="_blank">Default</a>
        <a href="index&amp;rtl=1.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
            target="_blank">RTL Version</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo10.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="index.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
            target="_blank">Default</a>
        <a href="index&amp;rtl=1.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
            target="_blank">RTL Version</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo11.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="index.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
            target="_blank">Default</a>
        <a href="index&amp;rtl=1.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
            target="_blank">RTL Version</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo12.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="index.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
            target="_blank">Default</a>
        <a href="index&amp;rtl=1.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
            target="_blank">RTL Version</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo13.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="index.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow"
            target="_blank">Default</a>
        <a href="index&amp;rtl=1.html"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow ml-3"
            target="_blank">RTL Version</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo14.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 15</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo15.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 16</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo16.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 17</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo17.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 18</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo18.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 19</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo19.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 20</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo20.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 21</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo21.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 22</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo22.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 23</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo23.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 24</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo24.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 25</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo25.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 26</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo26.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 27</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo27.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 28</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo28.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 29</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo29.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
<h5 class="font-weight-bold mb-4 text-center">Demo 30</h5>
<div class="overlay rounded-lg mb-8 offcanvas-demo">
    <div class="overlay-wrapper rounded-lg">
        <img src="assets/media/demos/demo30.png" alt="" class="w-100" />
    </div>
    <div class="overlay-layer">
        <a href="#"
            class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming
            soon</a>
    </div>
</div>
</div>

<!--end::Wrapper-->

<!--begin::Purchase-->
<div class="offcanvas-footer">
<a href="https://1.envato.market/EA4JP" target="_blank"
    class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Metronic
    Now!</a>
</div>

<!--end::Purchase-->
</div>

<!--end::Content-->
</div>

<!--end::Demo Panel-->

<!--end::Global Config-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{asset ('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{asset ('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{asset ('assets/js/scripts.bundle.js') }}"></script>

<!--end::Global Theme Bundle-->

<!--begin::Page Vendors(used by this page)-->
<script src="{{asset ('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>

<!--end::Page Vendors-->

<!--begin::Page Scripts(used by this page)-->
<script src="{{asset ('assets/js/pages/widgets.js') }}"></script>

<!--end::Page Scripts-->
</body>

<!--end::Body-->

</html>


