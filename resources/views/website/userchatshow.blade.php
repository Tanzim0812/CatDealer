@extends('website.usermastering')

@section('content')


    <div class="containeer">
        <div class="row">


            <div class="col-sm-9" style="background: ghostwhite">
                <!-- Star form compose mail -->
                @foreach($indxx as $row)
                <form class="form-horizontal" style="background: ghostwhite;border-bottom: 3px solid deepskyblue">

                    <div class="panel mail-wrapper rounded shadow" style="background: ghostwhite">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h3 class="panel-title">{{strtoupper($row->user_name)}}</h3>
                            </div>
                            <div class="pull-right">
                                <h6>{{$loop->index+1}}</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- /.panel-heading -->
                        <div class="panel-sub-heading inner-all">
                            <div class="pull-left">
                                <h3 class="lead no-margin">Drop Inquiry about a Product</h3>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-info btn-sm tooltips" data-container="body" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>
                            </div>

                            <div class="clearfix"></div>
                        </div><!-- /.panel-sub-heading -->
                        <div class="panel-sub-heading inner-all" style="background: ghostwhite">
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-7">
                                    @if(\App\User::where('id',$row->user_id)->first())

                                        <img src="{{asset('files/uploads/avatar/'.\App\User::where('id',$row->user_id)->first()->image)}}" class="img-circle senden-img" alt="media image" >
                                    @else
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle senden-img" alt="media image"  >
                                    @endif
                                        <span>{{($row->user_name)}}</span>

                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-5">
                                    <p class="pull-right"> {{date_format($row->created_at,'d-M-yy')}}</p>
                                </div>
                            </div>
                        </div><!-- /.panel-sub-heading -->
                        <div class="panel-body" style="background: ghostwhite">
                            <div class="view-mail">
                                <p>Hello,</p>
                                <ul class="list-group">
                                    @if($row->pro_name)
                                        <li class="list-group-item list-group-item-light">Product Name : {{$row->pro_name}}</li>
                                    @endif
                                    @if(\App\product::where('id',$show->pro_id)->first())
                                        <li class="list-group-item list-group-item-light">Hscode: {{\App\product::where('id',$show->pro_id)->first()->hscode}}</li>
                                    @endif
                                    @if($row->target_price)
                                        <li class="list-group-item list-group-item-light">Target Price: {{$row->target_price}}</li>

                                    @endif
                                    @if($row->qty)
                                        <li class="list-group-item list-group-item-light">Quantity : {{$row->qty}}</li>
                                    @endif
                                </ul>

                                <p class="clearfix">
                                    {{$row->message}}
                                </p>
                                <p><b>Regards,</b>
                                <br>{{$row->user_name}}
                                </p>

                            </div><!-- /.view-mail -->
                            @if($row->image)
                            <div class="attachment-mail">
                                <p>
                                    <span><i class="fa fa-paperclip"></i> Attachments — </span>
                                    <a href="{{asset('files/uploads/chat/'.$row->image)}}" download style="color: blue">Download all attachments</a>
                                    |

                                </p>
                                <ul>
                                    <li>
                                        <a class="atch-thumb" data-toggle="modal" data-target=".bs-example-modal-photo1">
                                            <img style="border: 1px solid skyblue" src="{{asset('files/uploads/chat/'.$row->image)}}" alt="...">
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- /.attachment mail -->
                            @endif
                        </div><!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="clearfix"></div>
                        </div><!-- /.panel-footer -->
                    </div><!-- /.panel -->

                </form>
            @endforeach
                <!--/ End form compose mail -->
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
@endsection
