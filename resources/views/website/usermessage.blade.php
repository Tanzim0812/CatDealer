@extends('website.usermastering')

@section('content')
    @include('include.messageshow')
    <div style="text-align:right; margin:0px auto 0px auto">
        <form action="{{route('custom-chat-start')}}" class="form-group" method="post">
            @csrf
            <div class="form-group">
                <input type="hidden" class="form-control" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" readonly>
            </div>
            <button type="submit" onclick="return confirm('Few Coins will taken off from your account')" class="btn btn-info">Make New Inquiry <i class="fa fa-envelope"></i></button>
        </form>
    </div>
    <table class="table table-hover table-bordered results">
        <h4 class="text-center" style="color: #1c294e">Inquiries</h4>
        <thead class="bg-primary">
        <tr>
            <th>Si no</th>
            <th>Title</th>
            <th>Last Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <tr class="warning no-result">
            <td colspan="5"><i class="fa fa-warning"></i> No result</td>
        </tr>
        </thead>
        <tbody>
        @foreach(\App\userchat::usermsgs() as $row)
            <tr>
                <th scope="row">
                    @if(App\message::where('chat_id',$row->id)->first())
                        {{$loop->index+1}}
                        @if(\App\message::where('chat_id',$row->id)->where('user_name','admin')->where('seen',0)->count()>0)

                            <span class="dot">{{\App\message::where('chat_id',$row->id)->where('user_name','admin')->where('seen',0)->count()}}</span>
                        @endif
                    @else
                        {{$loop->index+1}} <span class="label label-warning">New</span>
                    @endif
                </th>
                <td>@if(App\message::where('chat_id',$row->id)->first())
                        {{strtoupper(App\message::where('chat_id',$row->id)->first()->pro_name)}}
                    @else
                        <span style="color: red">Inquiry hasn't done yet !</span>
                    @endif
                </td>
                <td>@if(App\message::where('chat_id',$row->id)->latest()->take(1)->first())
                        {!! substr(App\message::where('chat_id',$row->id)->latest()->take(1)->first()->message,0,25).'.....'!!}
                    @else
                        <span style="color: orangered"> No Chat history </span>
                    @endif
                </td>
                <td>{{date_format($row->created_at,'d-M-yy (h:i A)')}}</td>
                <td>
                    @if(\App\message::where('chat_id',$row->id)->count() >0)
                        <a class="btn btn-success" href="{{route('chat.show.user',base64_encode($row->id))}}"><i class="fa fa-envelope-open"></i> Inbox</a>
                    @else
                        <a style="margin-left: 4px" class="btn btn-info" href="{{route('cusshow.user',base64_encode($row->id))}}"><i class="fa fa-envelope"> </i>  Send </a>
                    @endif
                    <a href="{{route('chat.user.del',base64_encode($row->id))}}" class="btn btn-danger btn-circle" onclick="return confirm('Do you want to delete the inquiry?')">
                        <i class="fa fa-trash" title="Delete"></i>
                    </a>
                </td>

            </tr>

        @endforeach



        </tbody>
    </table>


@endsection
