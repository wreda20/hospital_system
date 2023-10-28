{{--1--}}
<div class="header-area">
    <div class="row align-items-center">
        <!-- nav and search button -->
        <div class="col-md-6 col-sm-8 clearfix">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>
        <!-- profile info & task notification -->
        <div class="col-md-6 col-sm-4 clearfix">
            <ul class="notification-area pull-right">
                <li id="full-view"><i class="ti-fullscreen"></i></li>
                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>

                <!-- Notification bell -->
                @if(auth('admin')->check())
                    <li class="dropdown">
                        <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                            <span>0</span>
                        </i>
                        <div class="dropdown-menu bell-notify-box notify-box">
                            <span class="notify-title">لديك 0 <b>طلبات</b></span>

                            <div class="notify-list">
                                <a href="#" class="notify-item">
                                    <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                    <div class="notify-text">
                                        <p><b><br/>
                                            </b> تم تقديم طلب للحصول على اجازة</p>
                                        <span></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                @endif

            </ul>
            <!-- notification ends -->
        </div>
    </div>
</div>

{{--2--}}

@if(auth('admin')->check())
    {{-- Header Admin --}}
    <div class="page-title-area">
        <div class="row align-items-center">

            {{--1--}}
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">لوحة التحكم</h4>
                    <ul class="breadcrumbs pull-left">
                    </ul>
                </div>
            </div>

            {{--1--}}
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="{{asset('assets/images/admin.png')}}" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">المسؤول <i class="fa fa-angle-down"></i></h4>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('logout','admin') }}">تسجيل خروج</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    {{-- Header User --}}
    <div class="page-title-area">
        <div class="row align-items-center">

            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">التقدم بطلب للحصول على  اجازة</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><span>طلب اجازة</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="{{asset('assets/images/avatar.jpg')}}" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">0<i class="fa fa-angle-down"></i></h4>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">عرض الملف الشخصي</a>
                        <a class="dropdown-item" href="#">كلمة المرور</a>
                        <a class="dropdown-item" href="{{ route('logout','web') }}">تسجيل خروج</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endif
