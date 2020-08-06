@extends('bookstall.master')
@section('bookstall-home')
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN SAMPLE FORMPORTLET-->
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Book Item  Sells Form</h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
        <h3 align="center" style="color:green">{{Session::get('message')}}</h3>
            <div class="widget-body">
                <!-- BEGIN FORM-->
            <form action="{{route('save-book-item-sales')}}" method="post" class="form-horizontal">
                @csrf
                    <div class="control-group">
                        <label class="control-label">Item Name</label>
                        <div class="controls">
                            <input type="text" name="item_name" placeholder="Enter a item name" class="input-xxlarge" />
                            <span class="help-inline"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Quantity</label>
                        <div class="controls">
                            <input type="number" name="quantity" placeholder="Enter a item quantity" class="input-xxlarge" />
                            <span class="help-inline"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Price</label>
                        <div class="controls">
                            <input type="number" name="price" placeholder="Enter a item price" class="input-xxlarge" />
                            <span class="help-inline"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Customer Name</label>
                        <div class="controls">
                            <input type="text" name="customer_name" placeholder="Enter customer name" class="input-xxlarge" />
                            <span class="help-inline"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Customer Mobile Number</label>
                        <div class="controls">
                            <input type="text" name="mobile_number" placeholder="Enter mobile number" class="input-xxlarge" />
                            <span class="help-inline"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Paid</label>
                        <div class="controls">
                            <input type="text" name="paid" placeholder="Enter paid amount" class="input-xxlarge" />
                            <span class="help-inline"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Due</label>
                        <div class="controls">
                            <input type="text" name="due" placeholder="Enter due amount" class="input-xxlarge" />
                            <span class="help-inline"></span>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Date</label>
                        <div class="controls">
                            <input type="date" name="date" placeholder="Enter a date" class="input-xxlarge" />
                            <span class="help-inline"></span>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                        <button type="reset" class="btn"><i class=" icon-remove"></i> Cancel</button>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>
@endsection
