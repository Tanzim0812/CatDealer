@extends('website.usermastering')

@section('content')
    <div class="col-md-12" style="border-right: 1px solid lightgreen" id="bodytab">

        <form action="{{route('custom-chat-start')}}" class="form-group" method="post">
            @csrf
            <div class="form-group">
                <input type="hidden" class="form-control" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" readonly>
            </div>
            <button type="submit" onclick="return confirm('Few Coins will taken of from your account')" class="btn btn-info">Make Custom inquiry</button>
        </form>

        <div class="form-group pull-right">
            <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
        <span class="counter pull-right"></span>
        <div class="card-header border-0">
            <h3 class="mb-0">Product tables</h3>
        </div>
        <table class="table table-hover table-bordered results">
            <thead class="bg-primary">
            <tr>
                <th>HScode</th>
                <th class="col-md-5 col-xs-5">Image</th>
                <th class="col-md-4 col-xs-4">Name</th>
                <th class="col-md-3 col-xs-3">Price</th>
                <th class="col-md-3 col-xs-3">Action</th>
            </tr>
            <tr class="warning no-result">
                <td colspan="5"><i class="fa fa-warning"></i> No result</td>
            </tr>
            </thead>
            <tbody>
            @foreach(\App\product::allproduct() as $row)
            <tr>
                <th scope="row">{{$row->hscode}}</th>
                <td><img src="{{asset('files/uploads/'.$row->image)}}" style="width: 50px;height: 50px"></td>
                <td>{{strtoupper($row->title)}}</td>
                <td>{{$row->offer_price}}</td>
                <td>
                    @if(! in_array($row->id,$userpr_ids))

                        <form action="{{route('chat-start')}}" class="form-group" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="pro_id" value="{{$row->id}}">
                                <input type="hidden" class="form-control" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" readonly>
                            </div>
                            <button type="submit" onclick="return confirm('Few Coins will taken of from your account')" class="btn btn-info">Start Chat</button>
                        </form>

                    @else

                        <a href="{{route('chat.show.user',base64_encode(App\userchat::where('user_id','=',auth()->user()->id)
                                                                    ->where('pro_id','=',$row->id)
                                                                   ->first()->id) )}}"><button class="btn btn-default" style="background-color: #40bf80"><i class="fa fa-envelope-open"></i> Inbox</button></a>

                    @endif


                </td>
            </tr>
            @endforeach


            </tbody>
        </table>
    </div>

@endsection


