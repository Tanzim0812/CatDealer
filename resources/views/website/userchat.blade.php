
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

                        <label for="pro_name">Product Name</label>
                        <input type="text"  name="pro_name" value="{{\App\product::where('id',$show->pro_id)->first()->title}}" readonly>

                        <label for="target_price">Target Price</label>
                        <input type="number" id="target_price" placeholder="Target price (unit price)" value="{{\App\product::where('id',$show->pro_id)->first()->offer_price}}" name="target_price" required>

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






@endsection


