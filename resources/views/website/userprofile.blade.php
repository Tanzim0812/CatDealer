@extends('website.usermastering')

@section('content')
        <div class="col-md-8" style="border-right: 1px solid lightgreen">
            <form class="form-group" method="post">
                @csrf
                <input type="hidden" name="id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                <img src="{{asset('files/uploads/avatar/'.\Illuminate\Support\Facades\Auth::user()->image)}}" style="width: 120px;height: 100px">
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

@endsection


