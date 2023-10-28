@extends('layouts.master')
@section('title')
   لوحة تحكم الادارة
@stop
@section('content')
    {{--1--}}
    <div class="sales-report-area mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-briefcase"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">انواع الاجازات المتاحة</h4>

                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h1></h1>
                            <span>انواع الاجازات</span>
                        </div>
                    </div>
                    <!-- <canvas id="coin_sales1" height="100"></canvas> -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">جميع الموظفين</h4>

                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h1></h1>
                            <span>الموظفين الناشطين</span>
                        </div>
                    </div>
                    <!-- <canvas id="coin_sales2" height="100"></canvas> -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-report">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-th-large"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">الاقسام المتاحة</h4>

                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h1></h1>
                            <span>اقسام الموظفين</span>
                        </div>
                    </div>
                    <!-- <canvas id="coin_sales3" height="100"></canvas> -->
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-spinner"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">طلبات الاجازة المعلقة</h4>

                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h1></h1>
                            <span>قيد الانتظار</span>
                        </div>
                    </div>
                    <!-- <canvas id="coin_sales1" height="100"></canvas> -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-times"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">طلبات مرفوضة</h4>

                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h1></h1>
                            <span>تم الرفض</span>
                        </div>
                    </div>
                    <!-- <canvas id="coin_sales2" height="100"></canvas> -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-report">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-check-square-o"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">طلبات مقبولة</h4>

                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <h1></h1>
                            <span>تم قبولها</span>
                        </div>
                    </div>
                    <!-- <canvas id="coin_sales3" height="100"></canvas> -->
                </div>
            </div>
        </div>
    </div>
    {{--2--}}
    <div class="row">

        <!-- trading history area start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <!-- <h4 class="header-title">Employee Leave History</h4> -->
                        <div class="trd-history-tabs">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#" role="tab">الطلبات الاخيرة</a>
                                </li>
                            </ul>
                        </div>
                        <select class="custome-select border-0 pr-3">
                            <option selected>أخر 24 ساعه</option>
                        </select>
                    </div>
                    <!-- <h4 class="header-title"></h4> -->
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped progress-table text-center">
                                <thead class="text-uppercase">

                                <tr>
                                    <td>التسلسل</td>
                                    <td>رقم الموظف</td>
                                    <td width="120">الاسم الكامل</td>
                                    <td>نوع الاجازة</td>
                                    <td>تاريخ الطلب</td>
                                    <td>حالة الطلب</td>
                                    <td></td>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td> <b></b></td>
                                    <td></td>
                                    <td><a href="#"></a></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <span style="color: green">تم  الموافقة <i class="fa fa-check-square-o"></i></span>

                                        <span style="color: red">مرفوضة <i class="fa fa-times"></i></span>

                                        <span style="color: blue">قيد الانتظار <i class="fa fa-spinner"></i></span>
                                    </td>


                                    <td><a href="#" class="btn btn-secondary btn-sm">عرض تفاصيل اكثر</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trading history area end -->
    </div>
@endsection