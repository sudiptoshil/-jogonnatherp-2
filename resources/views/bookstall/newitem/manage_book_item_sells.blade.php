@extends('bookstall.master')
@section('bookstall-home')

<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN BASIC PORTLET-->
        <div class="widget orange">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Manage All Book Item Sells</h4>
            <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
            </span>
            </div>
        <h3 align="center" style="color:red">{{Session::get('message')}}</h3>
            <div class="widget-body">
                <table class="table table-striped table-bordered table-advance table-hover">
                    <thead>
                    <tr>
                        <th><i></i> serial</th>
                        <th><i></i>Item Name</th>
                        <th><i></i> Quantity</th>
                        <th><i> Customer Name</i></th>
                        <th><i> Mobile Number</i></th>
                        <th><i> Date</i></th>
                        <th><i class=" icon-edit"></i> Price</th>
                        <th><i class=" icon-edit"></i> Paid</th>
                        <th><i class=" icon-edit"></i> Due</th>
                        <th><i class=" icon-edit"></i> Action</th>
                        {{-- <th></th> --}}
                    </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                    @foreach($sells_book as $v_book)
                    <tr>
                    <td>{{$i++}}</td>
                    <td class="hidden-phone">{{$v_book->item_name}}</td>
                    <td>{{$v_book->quantity}} Piece</td>
                    <td>{{$v_book->customer_name}}</td>
                    <td>{{$v_book->mobile_number}}</td>
                    <td>{{$v_book->date}}</td>
                    <td>{{$v_book->price}}</td>
                    @if ($v_book->paid == null)
                    <td><span style="color:red">No</span></td>
                    @else
                    <td>{{$v_book->paid}}</td>
                    @endif
                    @if ($v_book->due == null)
                    <td><span style="color:red">No</span></td>
                    @else
                    <td>{{$v_book->due}}</td>
                    @endif
                        <td>


                        <a href="{{route('book-sales-details',['id'=>$v_book->id])}}" class="btn btn-edit"><span style="color:red">DETAILS</span></a>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END BASIC PORTLET-->
    </div>
</div>
@endsection
