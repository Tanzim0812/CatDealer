@extends('website.usermastering')

@section('content')
    <div class="row">

        @include('include.messageshow')
        <div class="coontainer">
            <div class="envelope">
                <div class="inner">
            <form action="{{route('message-send')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" class="form-control" id="name" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" readonly>
                <input type="hidden" class="form-control" id="name" name="user_name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" readonly>
                <input type="hidden" class="form-control" id="name" name="chat_id" value="{{$show->id}}" readonly>

                <label for="pro_name">Product Name</label>
                <input type="text" id="pro_name" name="pro_name" placeholder="Your product name">


                <label for="target_price">Target Price</label>
                <input type="number" id="target_price" placeholder="Target price (unit price)" name="target_price" required>

                <label for="qty">Quantity</label>
                <input type="number" min="1" id="qty" name="qty" placeholder="Quantity" required>

                <label for="image">Image</label>
                <input type="file" id="image" name="image" accept="image/*">

                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select>

                <label for="msg">Subject</label>
                <textarea id="editor1" name="message" placeholder="Write something.."></textarea>

                <input type="submit" value="Submit">
            </form>
                </div></div>
        </div>





        </div>

@endsection
