@extends('website.usermastering')

@section('content')
    <div class="row">
    <span id="countdown" style="font-size: 10px;color: gray"></span>
    @include('include.messageshow')
<div class="col-md-8" id="body">
        <form class="my-form" action="{{route('message-send')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <h1>Get in touch with your <span style="color: goldenrod">Inquiry!</span></h1>
                <ul>
                    <li>
                        <input type="hidden" class="form-control" id="name" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" readonly>
                        <input type="hidden" class="form-control" id="name" name="user_name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" readonly>
                        <input type="hidden" class="form-control" id="name" name="chat_id" value="{{$show->id}}" readonly>
                    </li>
                    <li>
                        <div class="grid grid-2">
                            <input type="text"  name="pro_name" value="{{\App\product::where('id',$show->pro_id)->first()->title}}" readonly>
                            <input type="number" id="target_price" placeholder="Target price (unit price)" name="target_price" required>
                        </div>
                    </li>
                    <li>
                        <div class="grid grid-2">
                            <input type="number" min="1" id="qty" name="qty" placeholder="Quantity" required>
                            <input type="file" id="image" name="image" accept="image/*">
                        </div>
                    </li>
                    <li>
                        <textarea id="msg" name="message" placeholder="message" required></textarea>
                    </li>
                    <li>
                        <input type="checkbox" id="terms">
                        <label for="terms">I have read and agreed with <a href="">the terms and conditions.</a></label>
                    </li>
                    <li>
                        <div class="grid grid-3">
                            <div class="required-msg">REQUIRED FIELDS</div>
                            <button class="btn-grid" type="submit" disabled>
            <span class="back">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
            </span>
                                <span class="front">SUBMIT</span>
                            </button>
                            <button class="btn-grid" type="reset" disabled>
            <span class="back">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/eraser-icon.svg" alt="">
            </span>
                                <span class="front">RESET</span>
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </form>
</div>
    <div class="col-md-4" style="box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22)">
        @foreach($indxx as $row)
        <div class="card" style="width: 20rem;">



            <div class="card-body">
                <h5 class="font-weight-bold mb-3"><strong>{{$row->pro_name}}</strong> ({{\App\product::where('id',$show->pro_id)->first()->hscode}})</h5>
                @if($row->image)
                    <img style="width: 70px;height: 70px" src="{{asset('files/uploads/chat/'.$row->image)}}">
                @endif
                <p class="mb-0 clearfix">{{$row->message}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Target price: <b>{{$row->target_price}}</b></li>
                <li class="list-group-item">Quantity: <b>{{$row->qty}}</b></li>
                <li class="list-group-item"><span class="time-right">{{date_format($row->created_at,'h-i-a')}}</span></li>
            </ul>

        </div>
        @endforeach

</div>
    </div>
@endsection
