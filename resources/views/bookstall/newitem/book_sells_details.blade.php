
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Invoice
                <strong><?php echo date('Y-M-d')?></strong>
                <span class="float-right"> <strong><a href="">Print Invoice</a></strong>  </span>

            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong>Book Stall </strong>
                        </div>
                        <div> 8</div>
                        <div>71-101 Szczecin, Poland</div>
                        <div>Email: info@dotnettec.com</div>
                        <div>Phone: +91 9800000000</div>
                    </div>

                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                        <div>
                        <strong>{{$sells_book->customer_name}}</strong>
                        </div>
                    <div>Phone: {{$sells_book->mobile_number}}</div>
                    </div>
                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Item</th>
                                {{-- <th>Description</th> --}}

                                <th class="right">Unit Cost</th>
                                <th class="center">Qty</th>
                                {{-- <th class="right">Total</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td class="center"></td>
                                <td class="left strong">{{$sells_book->item_name}}</td>
                                {{-- <td class="left">Extended License</td> --}}

                            <td class="right">{{$sells_book->price}}</td>
                                <td class="center">{{$sells_book->quantity}}</td>
                                {{-- <td class="right">$999,00</td> --}}
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong>Paid</strong>
                                    </td>
                                    @if ($sells_book->paid == null)
                                    <td>NO</td>
                                    @else
                                    <td class="right">{{$sells_book->paid}}</td>
                                    @endif

                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Due</strong>
                                    </td>
                                    @if ($sells_book->due == null)
                                    <td>NO</td>
                                    @else
                                    <td class="right">{{$sells_book->due}}</td>
                                    @endif
                                </tr>
                                {{-- <tr>
                                    <td class="left">
                                        <strong>VAT (10%)</strong>
                                    </td>
                                    <td class="right">$679,76</td>
                                </tr> --}}
                                <tr>
                                    <td class="left">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="right">
                                    <strong>{{$sells_book->price}}</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


