@extends('layouts.app')

@section('content')
    <div class="containeer">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <!-- Right Sidebar -->
                            <div class="col-lg-9 col-md-8">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="btn-toolbar" role="toolbar">

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                    </div>
                                </div> <!-- End row -->
                                @foreach($indxx as $row)
                                    <div class="card shadow-none mt-3 border border-light border-bottom-info" id="print-content" style="background-color: ghostwhite">
                                        <div class="card-body">
                                            <div class="media mb-3">
                                                @if(\App\User::where('id',$row->user_id)->first())

                                                    <img src="{{asset('files/uploads/avatar/'.\App\User::where('id',$row->user_id)->first()->image)}}" class="rounded-circle mr-3 mail-img shadow" alt="media image"  width="100" height="100">
                                                @else
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-3 mail-img shadow" alt="media image"  width="100" height="100">
                                                @endif
                                                    <div class="media-body">
                                                    <span class="media-meta float-right"><span class="badge badge-pill badge-info">{{$loop->index+1}}</span></span>
                                                    <h6 class="text-primary m-0">
                                                        <a type="button" onclick="usershow({{$row->user_id}})" data-toggle="modal" data-target="#showusermodal">
                                                            {{strtoupper($row->user_name)}}
                                                            <i class="fa fa-info-circle" title="Details.."></i>
                                                        </a>
                                                    </h6>
                                                    <small class="text-muted">{{date_format($row->created_at,'d-M-yy')}}</small>
                                                </div>
                                            </div> <!-- media -->


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
                                            <br>
                                            <p class="clearfix">{!! $row->message !!}</p>

                                            @if($row->image)
                                                <hr>
                                                <h6> <i class="fa fa-paperclip mr-2"></i> Attachments </h6>
                                                <div class="row">
                                                    <div class="col-sm-4 col-md-3">

                                                        <a target="_blank">
                                                            <img class="img-thumbnail" style="width: 70px;height: 70px" src="{{asset('files/uploads/chat/'.$row->image)}}">
                                                        </a>

                                                    </div>

                                                </div>
                                            @endif

                                        </div>
                                    </div> <!-- card -->
                                @endforeach
                                <button style="margin-top: 2px" class="btn btn-info float-right" onclick="myFunction()">Reply <i class="fa fa-reply"></i></button>
                                @error('message')
                                <strong class="text-bold text-danger">{{$message}}</strong>
                                @enderror
                                <div id="myDIV" style="display:none;">

                                    <form method="post" action="{{route('message-sendadmin')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <textarea id="editor1" class="form-control" name="message" placeholder="Type your message" required></textarea>
                                            @error('message')
                                            <strong class="text-bold text-danger">{{$message}}</strong>
                                            @enderror
                                        </div>

                                        <input type="hidden" class="form-control" id="name" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" readonly>
                                        <input type="hidden" class="form-control" id="name" name="user_name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" readonly>
                                        <input type="hidden" class="form-control" id="name" name="chat_id" value="{{$show->id}}" readonly>
                                        <fieldset>
                                            <label for="image">Image</label>
                                            <input type="file" id="image" name="image" accept="image/*">
                                        </fieldset>
                                        <fieldset>
                                            <button type="submit" class="btn btn-success text-light">Send</button>
                                        </fieldset>



                                    </form>

                                </div>
                            </div>

                            <!-- end Col-9 -->
                            <div class="col-md-3">
                                @foreach($indxx as $row)
                                <div class="sidebar-item">
                                    <div class="make-me-sticky">
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
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div><!-- End row -->


                    </div>

                </div>
            </div>


        </div><!-- End row -->



        <!-- Modal start--->
        <div class="modal fade" id="showusermodal" tabindex="-1" role="dialog" aria-labelledby="showusermodalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLongTitle">Cat Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="clearfix">
                            Hi ! My Name is <span id="nameusr" style="color:#78261f"></span>. Actually I <span style="color: #1c294e" id="issueusr"></span> ,So I came here.
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal end--->
    </div>


@endsection
