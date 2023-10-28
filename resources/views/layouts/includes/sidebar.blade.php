<nav>
    @if(auth('admin')->check())
        <ul class="metismenu" id="menu">
            <li><a href="#"><i class="ti-dashboard"></i> <span>الرئيسية</span></a></li>

            <li ><a href="#"><i class="ti-id-badge"></i> <span>قسم الموظفين</span></a></li>

            <li ><a href="#"><i class="fa fa-th-large"></i> <span>الاقسام</span></a></li>

            <li ><a href="#"><i class="fa fa-sign-out"></i> <span>الاجازات</span></a></li>

            <li>
                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span>ادارة الاجازات</span></a>

                <ul class="collapse">
                    <li ><a href="#"><i class="fa fa-spinner"></i> قيد الانتظار</a></li>
                    <li ><a href="#"><i class="fa fa-check"></i> المقبولة</a></li>
                    <li ><a href="#"><i class="fa fa-times-circle"></i> المرفوضة</a></li>
                    <li ><a href="#"><i class="fa fa-history"></i> جميع الطلبات</a></li>
                </ul>

            </li>

            <li><a href="#"><i class="fa fa-lock"></i> <span>ادارة المسؤولين</span></a></li>

        </ul>
    @else
        <nav>
            <ul class="metismenu" id="menu">

                <li class="#">
                    <a href="#" aria-expanded="true"><i class="ti-user"></i><span>طلب اجازة</span></a>
                </li>

                <li class="active">
                    <a href="#" aria-expanded="true"><i class="ti-agenda"></i><span>عرض جميع اجازاتي</span></a>
                </li>
            </ul>
        </nav>
    @endif

</nav>