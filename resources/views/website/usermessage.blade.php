@extends('website.usermastering')

@section('content')

    <table class="table table-hover table-bordered results">
        <h4 class="text-center" style="color: #1c294e">PRODUCT inquiry SECTION</h4>
        <thead class="bg-primary">
        <tr>
            <th>Type</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        <tr class="warning no-result">
            <td colspan="5"><i class="fa fa-warning"></i> No result</td>
        </tr>
        </thead>
        <tbody>
        @foreach(\App\userchat::usermsgs() as $row)
            @if($row->customize == NULL)
            <tr>
                <th scope="row">General inquiry</th>
                <td>
                    @if(App\message::where('chat_id',$row->id)->first())
                        {{App\message::where('chat_id',$row->id)->first()->pro_name}}
                    @else
                        <span style="color: red">PRODUCT NAME NOT GIVEN YET</span>
                    @endif
                </td>
                <td>
                    <a class="btn btn-info" href="{{route('show.user',base64_encode($row->id))}}"><i class="fa fa-envelope"></i> Send</a>
                    <a class="btn btn-success" href="{{route('chat.show.user',base64_encode($row->id))}}"><i class="fa fa-envelope-open"></i> View</a>

                </td>
            </tr>
            @else
                <tr>
                    <th scope="row" style="color:rebeccapurple;">Custom Inquiry</th>
                    <td>@if(App\message::where('chat_id',$row->id)->first())
                            {{App\message::where('chat_id',$row->id)->first()->pro_name}}
                        @else
                            <span style="color: red">PRODUCT NAME NOT GIVEN YET</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{route('cusshow.user',$row->id)}}"><i class="fa fa-envelope"></i> Send</a>
                        <a class="btn btn-success" href="{{route('chat.show.user',base64_encode($row->id))}}"><i class="fa fa-envelope-open"></i> View</a>
                    </td>

                </tr>
            @endif
            @endforeach



        </tbody>
    </table>


@endsection
