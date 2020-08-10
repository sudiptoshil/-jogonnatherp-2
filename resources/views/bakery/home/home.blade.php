@extends('bakery.master')
@section('bakery-home')
<div class="row-fluid">
    <!--BEGIN METRO STATES-->
    <div class="metro-nav">
        <div class="metro-nav-block nav-block-orange">
            <a data-original-title="" href="#">
                <i class="icon-user"></i>
                <div class="info">321</div>
                <div class="status">New User</div>
            </a>
        </div>
        <div class="metro-nav-block nav-block-yellow">
            <a data-original-title="" href="#">
                <i class="icon-tags"></i>
                <div class="info">+970</div>
                <div class="status">Sales</div>
            </a>
        </div>
        <div class="metro-nav-block nav-block-grey">
        <a data-original-title="" href="">
                <i class="icon-comments-alt"></i>
                <div class="info"></div>
                <div class="status">Add New Book Item</div>
            </a>
        </div>
        <div class="metro-nav-block nav-block-blue double">
        <a data-original-title="" href="">
                <i class="icon-eye-open"></i>
                <div class="info"></div>
                <div class="status">Sales Form</div>
            </a>
        </div>
        <div class="metro-nav-block nav-block-red">
            <a data-original-title="" href="#">
                <i class="icon-bar-chart"></i>
                <div class="info">+288</div>
                <div class="status">Update</div>
            </a>
        </div>
    </div>
    <div class="space10"></div>
    <!--END METRO STATES-->
</div>
<div class="row-fluid">
    <div class="span6">
        <!-- BEGIN CHART PORTLET-->
        <div class="widget ">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Doughnut</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <div class="text-center">
                    <canvas id="doughnut" height="300" width="400"></canvas>
                </div>
            </div>
        </div>
        <!-- END CHART PORTLET-->
    </div>
    <div class="span6">
        <!-- BEGIN CHART PORTLET-->
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"> </i> Line</h4>
                <span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <div class="text-center">
                    <canvas id="line" height="300" width="450"></canvas>
                </div>
            </div>
        </div>
        <!-- END CHART PORTLET-->
    </div>
</div>


@endsection
