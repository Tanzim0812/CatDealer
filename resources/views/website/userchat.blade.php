@extends('website.usermastering')

@section('content')
    <div class="col-md-12">
        <span id="countdown" style="font-size: 10px;color: gray"></span>




            <div class="outerbg">
                <div class="chatboxout">
                    @include('include.messageshow')
                    <div class="chatboxin">
                        @foreach($indxx as $row)
                        <div class="chat-container overflow-auto" id="yo">
                            <div class="chat-sender msg"><strong>{{strtoupper($row->user_name)}}</strong>
                                <div class="chatmsg">
                                    <h5>Hello, My Name is {{strtoupper($row->user_name)}}.</h5>
                                    I'm looking for <b>{{$row->pro_name}}</b> product. Which HScode is <u>{{\App\product::where('id',$show->pro_id)->first()->hscode}}</u>.<br>
                                    My Target price is: <b>{{$row->target_price}}</b><br>
                                    I need, <b>{{$row->qty}}</b> pieces.<br>

                                    {{$row->message}}
                                    @if($row->image)
                                        <img style="width: 70px;height: 70px" src="{{asset('files/uploads/chat/'.$row->image)}}">
                                    @endif

                                </div>
                                <span class="time-right">{{date_format($row->created_at,'h-i-a')}}</span>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <form action="{{route('message-send')}}" class="form-check-inline" method="post" enctype="multipart/form-data" style="max-width: 380px">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="name" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" readonly>
                            <input type="hidden" class="form-control" id="name" name="user_name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" readonly>
                            <input type="hidden" class="form-control" id="name" name="chat_id" value="{{$show->id}}" readonly>
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" id="name" name="pro_name" value="{{\App\product::where('id',$show->pro_id)->first()->title}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="target_price">Target Price (unit price)</label>
                            <input type="number" class="form-control" id="target_price" name="target_price" required>
                        </div>
                        <div class="form-group">
                            <label for="qty">Quantity</label>
                            <input type="number" min="1" class="form-control" id="qty" name="qty" required>
                        </div>
                        <div class="form-group">
                            <label for="msg">Message</label>
                            <textarea class="form-control" id="msg" name="message" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-inline" id="image" name="image" accept="image/*">
                        </div>

                        <button type="submit" class="btn btn-success">Send</button>
                    </form>

                </div>

            </div>
    </div>

@endsection
