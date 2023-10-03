@extends('admin.layouts.app')

@section('pageTitle')
Dashboard
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-xl-4 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>{{$totalProducts}}</h2>
                    <div class="sub-title">
                        <span class="mr-1">Total Products</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                            <div id="spline-area-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>{{$totalDistributors}}</h2>
                    <div class="sub-title">
                        <span class="mr-1">Total Distributors</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                            <div id="spline-area-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card card-default card-mini">
                <div class="card-header">
                    <h2>{{$totalCompletedOrders}}</h2>
                    <div class="sub-title">
                        <span class="mr-1">Total Delivered Orders</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        <div>
                            <div id="spline-area-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection