@extends('website.usermastering')

@section('content')
    <div class="col-md-12" id="bodytab">
@include('include.messageshow')
        <div class="col-md-8" style="border-right: 1px solid lightgreen">
            <form class="form-group" method="post" enctype="multipart/form-data" action="{{route('user.update')}}">
                @csrf
                <input type="hidden" name="id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                <div class="form-group">
                <img name="image" class="img-thumbnail" src="{{asset('files/uploads/avatar/'.\Illuminate\Support\Facades\Auth::user()->image)}}" style="width: 120px;height: 100px;border-radius: 50%">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" id="name" required>
                    @error('name')
                    <strong class="text-bold text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input class="form-control" type="tel" name="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" id="phone">
                    @error('phone')
                    <strong class="text-bold text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                <label for="country">Country</label>
                    <input class="form-control" type="text" name="country" value="{{\Illuminate\Support\Facades\Auth::user()->country}}" id="country">
                    @error('country')
                    <strong class="text-bold text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="location_add">Address</label>
                    <textarea class="form-control" name="location_add" id="location_add">{{\Illuminate\Support\Facades\Auth::user()->location_add}}</textarea>
                    @error('location_add')
                    <strong class="text-bold text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update <i class="fa fa-check-circle"></i></button>
                </div>


            </form>

        </div>
        <div class="col-md-4">
            <div style="padding: 5px">
            <legend>Make Inquiry</legend>
            <form action="{{route('custom-chat-start')}}" class="form-group" method="post">

                @csrf
                <div class="form-group">
                    <input type="hidden" class="form-control" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" readonly>
                </div>
                <button type="submit" onclick="return confirm('Few Coins will taken off from your account')" class="btn btn-info">Make inquiry <i class="fa fa-envelope"></i></button>
            </form>
                <p style="color: #1c294e;font-family: 'open sans'">Click the button to make inquiry about your product.</p>
            </div>
<br><br>


            <div class="conntainer">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="laptop-wrapper">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/9UnVF6vWQHA" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <p style="text-align: center">Make your journey with us ease by following the tutorial 🖤</p>
                    </div>
                </div>
            </div>








        </div>

    </div>

@endsection


