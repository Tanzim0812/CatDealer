@extends('website.usermastering')

@section('content')


    <div class="containeer">
        <div class="row">


            <div class="col-sm-9" >

                <!-- Star form compose mail -->
                @foreach($indxx as $row)
                    @if(App\message::where('chat_id',$row->chat_id)->count() <= 1)

                        <div class="container-glass">
                            <div class="glass"></div>
                            <div class="get-hourglass">
                                <svg width="140px" height="250px" viewBox="0 0 14 18">
                                    <defs>
                                    </defs>
                                    <g id="sandclock" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                        <path d="M13.0986667,16.465 L12.7226667,16.465 C12.6796667,16.031 12.5996667,15.6073333 12.4886667,15.1963333 C12.084,13.6953333 11.269,12.3646667 10.352,11.3396667 C9.52833333,10.4183333 8.623,9.74333333 7.859,9.41433333 C7.859,9.41433333 7.56766667,9.20133333 7.56766667,8.97866667 C7.56766667,8.75633333 7.859,8.54533333 7.859,8.54533333 C9.687,7.74033333 12.3786667,4.93333333 12.7223333,1.50133333 L13.0986667,1.50133333 C13.5006667,1.50133333 13.8266667,1.17533333 13.8266667,0.773666667 C13.8266667,0.371666667 13.5006667,0.0456666667 13.0986667,0.0456666667 L0.776,0.0456666667 C0.374,0.0456666667 0.048,0.371666667 0.048,0.773666667 C0.048,1.17533333 0.374,1.50133333 0.776,1.50133333 L1.152,1.50133333 C1.49233333,4.93666667 4.15866667,7.745 6.00533333,8.54733333 C6.00533333,8.54733333 6.31133333,8.737 6.31133333,8.97866667 C6.31133333,9.22033333 6.01566667,9.421 6.01566667,9.421 C5.26233333,9.75266667 4.36333333,10.4246667 3.54166667,11.3396667 C2.62066667,12.3646667 1.79833333,13.6953333 1.389,15.1963333 C1.277,15.6073333 1.196,16.031 1.15266667,16.465 L0.776,16.465 C0.374,16.465 0.048,16.791 0.048,17.1926667 C0.048,17.5946667 0.374,17.9206667 0.776,17.9206667 L13.0986667,17.9206667 C13.5006667,17.9206667 13.8266667,17.5946667 13.8266667,17.1926667 C13.8263333,16.791 13.5006667,16.465 13.0986667,16.465 L13.0986667,16.465 Z M2.47033333,16.4923333 L1.892,16.4923333 C1.92166667,16.023 1.97666667,15.5933333 2.053,15.1963333 C2.273,14.054 2.67366667,13.1896667 3.18666667,12.4753333 C3.47733333,12.0703333 3.80133333,11.6873333 4.14033333,11.3396667 C4.80733333,10.6553333 5.88879069,10.1021427 6.19133333,9.82066667 C6.49387598,9.53919067 6.65833333,9.39266667 6.65833333,8.997 C6.65833333,8.60133333 6.45611593,8.47363293 6.03570577,8.2112428 C5.61529562,7.94885266 4.034,6.69966667 3.17433333,5.49566667 C2.488,4.53433333 2.00533333,3.328 1.891,1.50166667 L11.982,1.50166667 C11.8663333,3.322 11.378,4.52866667 10.687,5.49133333 C9.82466667,6.69266667 8.52740499,7.75976575 7.89733907,8.12268078 C7.26727316,8.48559582 7.22133333,8.61 7.22133333,8.98333333 C7.22133333,9.35666667 7.41784912,9.52330154 7.89733907,9.82066691 C8.37682903,10.1180323 9.08133333,10.6486667 9.75266667,11.3393333 C10.0873333,11.6833333 10.4066667,12.0626667 10.6933333,12.4633333 C11.2053333,13.179 11.6043333,14.0463333 11.823,15.196 C11.8983333,15.5926667 11.9523333,16.0223333 11.9816667,16.492 L11.4053333,16.492 C4.14033338,16.4920002 5.86059567,16.4920002 2.47033333,16.4923333 Z" id="Shape" fill="transparent"></path>

                                        <g id="sand">
                                            <path d="M7.00695799,10.3484497 C7.00695799,10.3484497 6.27532958,10.4129639 7.00695799,10.3484497 C7.73858641,10.2839355 7.00695799,10.3484497 7.00695799,10.3484497 C7.00695799,10.3484497 7.78173827,9.99768063 7.09265135,10.548584 C6.40356444,11.0994873 7.09265137,10.548584 7.09265137,10.548584 L7.09265137,10.5493774 L11.4924319,16.4705197 L2.52148436,16.4705197 L6.87243652,10.5493774 L6.80957031,10.548584 C6.80957031,10.548584 7.1925659,10.737854 6.87243651,10.548584 C6.37234656,10.2529159 7.00695799,10.3484497 7.00695799,10.3484497 Z;
" id="Path-26" fill="#C62626" sketch:type="MSShapeGroup">

                                                <animate
                                                    attributeName="d"
                                                    dur="20s"
                                                    repeatCount="once"
                                                    keyTimes="0;
                       .01;
											 .2;
											 .4;
											 .7;
											 .8;
											 .99;
                       1"

                                                    values="M2.33630371,3.07006836 C2.33630371,3.07006836 5.43261719,3.33813477 6.80957031,3.33813477 C8.18652344,3.33813477 11.3754883,3.07006836 11.3754883,3.07006836 C11.3754883,3.07006836 10.8122559,4.96514893 9.58630371,6.16516113 C8.36035156,7.36517334 7.09265137,8.2623291 7.09265137,8.2623291 L7.09265137,8.35028076 L7.09265137,8.46459961 L6.87243652,8.46459961 L6.87243652,8.35028076 L6.80957031,8.2623291 C6.80957031,8.2623291 4.9704053,7.27703707 3.96130371,5.96057129 C2.5045166,4.06005859 2.33630371,3.07006836 2.33630371,3.07006836 Z;


							 									M2.375,3.11462402 C2.375,3.11462402 5.71569824,3.44421387 7.09265137,3.44421387 C8.46960449,3.44421387 11.4150391,3.31262207 11.4150391,3.31262207 C11.4150391,3.31262207 10.8122559,4.96514893 9.58630371,6.16516113 C8.36035156,7.36517334 7.09265137,8.2623291 7.09265137,8.2623291 L7.09265137,15.5496216 L7.09265137,16.47052 L6.87243652,16.47052 L6.87243652,15.5496216 L6.80957031,8.2623291 C6.80957031,8.2623291 4.9704053,7.27703707 3.96130371,5.96057129 C2.5045166,4.06005859 2.375,3.11462402 2.375,3.11462402 Z;

							 									M2.49230957,3.31262207 C2.49230957,3.31262207 5.71569824,3.66851807 7.09265137,3.66851807 C8.46960449,3.66851807 11.3153076,3.53222656 11.3153076,3.53222656 C11.3153076,3.53222656 10.8122559,4.96514893 9.58630371,6.16516113 C8.36035156,7.36517334 7.09265137,8.2623291 7.09265137,8.2623291 L7.09265137,15.149231 L7.9152832,16.47052 L6.10144043,16.47052 L6.87243652,15.149231 L6.80957031,8.2623291 C6.80957031,8.2623291 4.9704053,7.27703707 3.96130371,5.96057129 C2.5045166,4.06005859 2.49230957,3.31262207 2.49230957,3.31262207 Z;

							                M2.98474121,4.37164307 C2.98474121,4.37164307 5.49548338,4.7074585 6.87243651,4.7074585 C8.24938963,4.7074585 10.8119509,4.64428711 10.8119509,4.64428711 C10.8119509,4.64428711 10.8122559,4.96514893 9.58630371,6.16516113 C8.36035156,7.36517334 7.09265137,8.2623291 7.09265137,8.2623291 L7.09265137,12.5493774 L9.36248779,16.47052 L4.5581665,16.47052 L6.87243652,12.5493774 L6.80957031,8.2623291 C6.80957031,8.2623291 4.9704053,7.27703707 3.96130371,5.96057129 C2.5045166,4.06005859 2.98474121,4.37164307 2.98474121,4.37164307 Z;

										 M4.49743651,6.36560059 C4.49743651,6.36560059 5.63000487,6.72412109 7.00695799,6.72412109 C8.38391112,6.72412109 9.56188963,6.36560059 9.56188963,6.36560059 C9.56188963,6.36560059 9.48870848,6.54571533 8.79962157,7.09661865 C8.11053465,7.64752197 7.09265137,8.2623291 7.09265137,8.2623291 L7.09265137,10.5493774 L11.4924319,16.4705197 L2.52148436,16.4705197 L6.87243652,10.5493774 L6.80957031,8.2623291 C6.80957031,8.2623291 6.01727463,8.16043491 4.82800292,6.81622307 C4.42932128,6.36560059 4.49743651,6.36560059 4.49743651,6.36560059 Z;

										 M5.87017821,7.51904297 C5.87017821,7.51904297 6.14080809,7.70904542 6.87243651,7.64453126 C7.60406493,7.5800171 7.47180174,7.51904297 7.47180174,7.51904297 C7.47180174,7.51904297 8.51336669,7.23876953 7.82427977,7.78967285 C7.13519286,8.34057617 7.09265137,8.2623291 7.09265137,8.2623291 L7.09265137,10.5493774 L11.4924319,16.4705197 L2.52148436,16.4705197 L6.87243652,10.5493774 L6.80957031,8.2623291 C6.80957031,8.2623291 6.66632079,8.14239502 6.34619139,7.953125 C5.84610144,7.65745695 5.87017821,7.51904297 5.87017821,7.51904297 Z;

										 M7.00695799,8.06219482 C7.00695799,8.06219482 6.27532958,8.12670898 7.00695799,8.06219482 C7.73858641,7.99768066 7.00695799,8.06219482 7.00695799,8.06219482 C7.00695799,8.06219482 7.78173827,7.71142576 7.09265135,8.26232908 C6.40356444,8.8132324 7.09265137,8.2623291 7.09265137,8.2623291 L7.09265137,10.5493774 L11.4924319,16.4705197 L2.52148436,16.4705197 L6.87243652,10.5493774 L6.80957031,8.2623291 C6.80957031,8.2623291 7.1925659,8.45159912 6.87243651,8.2623291 C6.37234656,7.96666105 7.00695799,8.06219482 7.00695799,8.06219482 Z;

										 M7.00695799,10.3484497 C7.00695799,10.3484497 6.27532958,10.4129639 7.00695799,10.3484497 C7.73858641,10.2839355 7.00695799,10.3484497 7.00695799,10.3484497 C7.00695799,10.3484497 7.78173827,9.99768063 7.09265135,10.548584 C6.40356444,11.0994873 7.09265137,10.548584 7.09265137,10.548584 L7.09265137,10.5493774 L11.4924319,16.4705197 L2.52148436,16.4705197 L6.87243652,10.5493774 L6.80957031,10.548584 C6.80957031,10.548584 7.1925659,10.737854 6.87243651,10.548584 C6.37234656,10.2529159 7.00695799,10.3484497 7.00695799,10.3484497 Z;"
                                                />

                                                <animate
                                                    attributeName="fill"
                                                    dur="20s"
                                                    repeatCount="once"
                                                    keyTimes="0;
                       .5;
                       1"

                                                    values="#e2cba5;#e2cba5;#C62626;"
                                                />
                                            </path>
                                        </g>
                                    </g>
                                </svg></div>

                            <div class="txt-center">
  <span id="timer">
    <span id="time">20 Seconds</span>
  </span>
                            </div>
                            <div class="txt-center">
                                <a href="{{route('usermessage')}}" class="btn btn-primary">Go back <i class="fa fa-arrow-circle-left"></i></a>
                            </div>

                        </div>


{{--                        <h5>Wait until admin reply back</h5>--}}
{{--                        <div id="timer">--}}
{{--                            <span id="days"></span>days--}}
{{--                            <span id="hours"></span>hours--}}
{{--                            <span id="minutes"></span>minutes--}}
{{--                            <span id="seconds"></span>seconds--}}
{{--                        </div>--}}

                    @else
                        <form class="form-horizontal" style="background: ghostwhite;border-bottom: 3px solid deepskyblue;margin-bottom: 3px">
                            @if(\App\User::where('id',$row->user_id)->first()->role == 1)
                                <div class="panel mail-wrapper rounded shadow" style="background: rgba(39,170,225, .1);border: 1px solid skyblue">

                                    <div class="panel-heading bg-primary">
                                        <div class="pull-left">
                                            <h3 class="panel-title">{{strtoupper($row->user_name)}}</h3>
                                        </div>
                                        <div class="pull-right">
                                            <span class="badge badge-pill badge-danger">{{$loop->index+1}}</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div><!-- /.panel-heading -->
                                    <div class="panel-sub-heading inner-all" style="background: rgba(39,170,225, .1);">

                                        <div class="pull-right">
                                            <input type="checkbox" data-toggle="toggle" data-size="mini" data-on="Seen" data-off="Unseen" data-onstyle="success" data-offstyle="danger" id="seen_status" data-id="{{$row->id}}" {{$row->seen==1 ? 'checked':''}}>

                                            <button class="btn btn-info btn-sm tooltips" data-container="body" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>

                                        </div>

                                        <div class="clearfix"></div>
                                    </div><!-- /.panel-sub-heading -->
                                    <div class="panel-sub-heading inner-all" style="background: rgba(39,170,225, .1)">
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
                                                <p class="pull-right"> {{date_format($row->created_at,'h:i-A')}}</p>
                                            </div>
                                        </div>
                                    </div><!-- /.panel-sub-heading -->
                                    <div class="panel-body" style="background: rgba(39,170,225, .1)">
                                        <div class="view-mail">
                                            <p>Hello,</p>
                                            <ul class="list-group">
                                                @if($row->pro_name)
                                                    <li class="list-group-item list-group-item-light">Product Name : {{$row->pro_name}}</li>
                                                @endif
                                                @if($row->newpro_name)
                                                    <li class="list-group-item list-group-item-light">Custom Product Name : {{$row->newpro_name}}</li>
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

                                            <article>
                                                {!! $row->message !!}
                                            </article>
                                            <br>
                                            <p><b>Regards,</b>
                                                <br>{{$row->user_name}}<br>
                                                {{date_format($row->created_at,'d-M-yy')}}
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
                            @else
                                <div class="panel mail-wrapper rounded shadow" style="background: ghostwhite">

                                    <div class="panel-heading">
                                        <div class="pull-left">
                                            <h3 class="panel-title">{{strtoupper($row->user_name)}}</h3>
                                        </div>
                                        <div class="pull-right">
                                            <span class="badge badge-pill badge-info">{{$loop->index+1}}</span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div><!-- /.panel-heading -->
                                    <div class="panel-sub-heading inner-all">

                                        <div class="pull-right">
                                            <button style="display: inline-block" class="btn btn-info btn-sm tooltips" data-container="body" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>

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
                                                <p class="pull-right"> {{date_format($row->created_at,'h:i-A')}}</p>
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
                                                @if($row->newpro_name)
                                                    <li class="list-group-item list-group-item-light">Custom Product Name : {{$row->newpro_name}}</li>
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

                                            <article>
                                                {!! $row->message !!}
                                            </article>
                                            <br>
                                            <p><b>Regards,</b>
                                                <br>{{$row->user_name}}<br>
                                                {{date_format($row->created_at,'d-M-yy')}}
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
                            @endif
                        </form>
                        <button style="margin-top: 1px;margin-bottom: 8px;" class="btn btn-info float-right" onclick="myFunction()">Reply <i class="fa fa-reply"></i></button>

                        @error('message')
                        <strong class="text-bold text-danger">{{$message}}</strong>
                    @enderror
                @endif

            @endforeach
            <!--/ End form compose mail -->

                <div class="content">



                    <div id="myDIV" style="display:none;">
                        <form action="{{route('message-send')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" class="form-control" id="name" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" readonly>
                            <input type="hidden" class="form-control" id="name" name="user_name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" readonly>
                            <input type="hidden" class="form-control" id="name" name="chat_id" value="{{$show->id}}" readonly>


                            <label for="msg">Additional Message</label>
                            <textarea id="summernote" name="message" required></textarea>
                            @error('message')
                            <strong class="text-bold text-danger">{{$message}}</strong>
                            @enderror

                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-3"></div>
        </div>
    </div>
@endsection

