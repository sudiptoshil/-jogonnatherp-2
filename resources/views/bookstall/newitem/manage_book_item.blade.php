@extends('bookstall.master')
@section('bookstall-home')

<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN BASIC PORTLET-->
        <div class="widget orange">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Manage All Item</h4>
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
                        <th><i class="icon-bullhorn"></i> serial</th>
                        <th class="hidden-phone"><i class="icon-question-sign"></i> Item Code</th>
                        <th><i class="icon-bookmark"></i>Item Name</th>
                        <th><i class=" icon-edit"></i> Quantity</th>
                        <th><i class=" icon-edit"></i> Price</th>
                        <th><i class=" icon-edit"></i> Action</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                    @foreach($book as $v_book)
                    <tr>
                    <td>{{$i++}}</td>
                    <td class="hidden-phone">{{$v_book->item_code}}</td>
                    <td>{{$v_book->item_name}}</td>
                    <td>{{$v_book->quantity}} Piece</td>
                    <td>{{$v_book->price}}</td>

                        <td>


                        <a href="{{route('edit-item',['id'=>$v_book->id])}}" class="btn btn-edit"><span style="color:red">EDIT</span></a>

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
