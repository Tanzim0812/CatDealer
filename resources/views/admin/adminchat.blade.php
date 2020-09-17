@extends('layouts.app')

@section('content')

    <div class="col-md-12">



        <div class="outerbg">
            <div class="chatboxout">
                @include('include.messageshow')
                <div class="chatboxin overflow-auto">
                    @foreach($indxx as $row)
                        <div class="chat-container" id="yo">
                            <div class="chat-sender msg"><strong>

                                    <a type="button" onclick="usershow({{$row->user_id}})" data-toggle="modal" data-target="#showusermodal">
                                        {{strtoupper($row->user_name)}}
                                            <i class="fa fa-info-circle" title="Details.."></i>
                                    </a>
                                    </strong>
                                <div class="chatmsg">{{$row->message}}
                                @if($row->image)
                                        <img style="width: 70px;height: 70px" src="{{asset('files/uploads/chat/'.$row->image)}}">
                                @endif

                                </div>
                                <span class="time-right">{{date_format($row->created_at,'h-i-a')}}</span>
                            </div>

                        </div>
                    @endforeach


                </div>
                <form action="{{route('message-sendadmin')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="name" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" readonly>
                        <input type="hidden" class="form-control" id="name" name="chat_id" value="{{$show->id}}" readonly>
                        <input type="hidden" class="form-control" id="name" name="user_name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" readonly>
                        <input type="hidden" class="form-control" id="name" name="token_id" value="{{$show->token}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="msg">Message</label>
                        <textarea class="form-control" id="msg" name="message" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-inline" id="image" name="image" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-success">Send</button>
                </form>
            </div>

        </div>
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
