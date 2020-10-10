@extends('layouts.app')

@section('content')

    <div class="col-md-12">
        @include('include.messageshow')



            <div class="envelope">
                <div class="inner">

            <form method="post" action="{{route('message-sendadmin')}}" enctype="multipart/form-data">
                @csrf
                <h5 class="text-center">Drop User a reply on his inquiry</h5>

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
                    <button type="submit" class="btn btn-success text-light">Send Inquiry</button>
                </fieldset>



            </form>
        </div>
            </div>



    </div>

@endsection

