@extends('website.usermastering')

@section('content')
        <div class="col-md-8" style="border-right: 1px solid lightgreen">
            <form class="form-group" method="post">
                @csrf
                <input type="hidden" name="id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" id="name" readonly>
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="email" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" id="email" readonly>
                    @error('email')
                    <strong class="text-bold text-danger">{{$message}}</strong>
                    @enderror
                </div>


            </form>
        </div>
        <div class="col-md-4" >
            @if($chat!= NULL)
                To Check your messages..
            @foreach($chat as $ch)
                <p>Go to Your <a href="{{route('show.user',base64_encode($ch->id))}}">Inbox</a></p>
                @endforeach


            @else
                <h4>Start Chat with Admin</h4>
                <form action="{{route('chat-start')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Start Chat with Admin</button>
                </form>
            @endif


        </div>
@endsection


