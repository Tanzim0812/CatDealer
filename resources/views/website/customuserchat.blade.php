@extends('website.usermastering')

@section('content')
    <div class="row">

        @include('include.messageshow')
        <div class="coontainer">
            <div class="envelope">
                <div class="inner">
            <form action="{{route('message-send')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" id="name" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" readonly>
                <input type="hidden" class="form-control" id="name" name="user_name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" readonly>
                <input type="hidden" class="form-control" id="name" name="chat_id" value="{{$show->id}}" readonly>

                <label>Product Name</label>
                <div class="box">
                    <select class="selectpicker des" data-show-subtext="false" data-live-search="true" style="-webkit-appearance: none;" name="pro_name">
                        @foreach(\App\product::allproduct() as $row)
                            <option value="{{$row->title}}">{{$row->title}}</option>
                        @endforeach
                    </select>

                </div><br>

                <label for="newpro_name">Custom Product Name</label>
                <input type="text" id="newpro_name" name="newpro_name" placeholder="Your Custom product name">

                <label for="target_price">Target Price</label>
                <input type="number" id="target_price" placeholder="Target price (unit price)" name="target_price" required>

                <label for="qty">Quantity</label>
                <input type="number" min="1" id="qty" name="qty" placeholder="Quantity" required>

                @if(\Illuminate\Support\Facades\Auth::user()->issueofreg == 'Have_Company')
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" accept="image/*">
                @endif

                <label for="msg">Additional Message</label>
                <textarea id="summernote" name="message" required></textarea>
                @error('message')
                <strong class="text-bold text-danger">{{$message}}</strong>
                @enderror

                <input type="submit" value="Submit">
            </form>
                </div></div>
        </div>





        </div>

@endsection
