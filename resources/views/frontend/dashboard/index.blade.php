@extends('frontend.dashboard.layouts.master')

@section('title', 'Dashboard')

@section('content')
    <!-- welcome balance Content Start -->
    <div class="welcome-balance mt-2 mb-40 flx-between gap-2">
        <div class="welcome-balance__left">
            <h4 class="welcome-balance__title mb-0">Welcome back! Michel</h4>
        </div>
        <div class="welcome-balance__right flx-align gap-2">
            <span class="welcome-balance__text fw-500 text-heading">Available Balance:</span>
            <h4 class="welcome-balance__balance mb-0">$580.00</h4>
        </div>
    </div>
    <!-- welcome balance Content End -->

    <div class="dashboard-body__item-wrapper">

        <!-- dashboard body Item Start -->
        <div class="dashboard-body__item">
            <div class="row gy-4">
                <div class="col-xl-3 col-sm-6">
                    <div class="dashboard-widget green">
                        <span class="dashboard-widget__icon">
                            <i class="ti ti-list-details"></i>
                        </span>
                        <div class="dashboard-widget__content flx-between gap-1 align-items-end">
                            <div>
                                <h4 class="dashboard-widget__number mb-1 mt-3">2M+</h4>
                                <span class="dashboard-widget__text font-14">Total Products</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="dashboard-widget orange">
                        <span class="dashboard-widget__icon">
                            <i class="ti ti-currency-dollar"></i>
                        </span>
                        <div class="dashboard-widget__content flx-between gap-1 align-items-end">
                            <div>
                                <h4 class="dashboard-widget__number mb-1 mt-3">$5289.00</h4>
                                <span class="dashboard-widget__text font-14">Total Earnings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="dashboard-widget blue">
                        <span class="dashboard-widget__icon">
                            <i class="ti ti-download"></i>
                        </span>
                        <div class="dashboard-widget__content flx-between gap-1 align-items-end">
                            <div>
                                <h4 class="dashboard-widget__number mb-1 mt-3">5,2458</h4>
                                <span class="dashboard-widget__text font-14">Total Downloads</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="dashboard-widget red">
                        <span class="dashboard-widget__icon">
                            <i class="ti ti-basket-check"></i>
                        </span>
                        <div class="dashboard-widget__content flx-between gap-1 align-items-end">
                            <div>
                                <h4 class="dashboard-widget__number mb-1 mt-3">2,589</h4>
                                <span class="dashboard-widget__text font-14">Total Sales</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- dashboard body Item End -->

    </div>
@endsection
