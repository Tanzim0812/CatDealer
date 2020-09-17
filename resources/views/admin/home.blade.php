@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div>
        <h5>Message</h5>
        @if(\App\message::messagehas())
           <h4> <span class="badge badge-secondary">
            You Have Got total
            <span class="badge badge-danger badge-counter">{{\App\message::messagehas()->count()}}</span>
            Messages!!<i class="fas fa-envelope fa-fw"></i>
                   </span>
           </h4>
        @endif
        <br>

        <ul class="list-group">
        @foreach(\App\message::chat() as $row)
            <li class="list-group-item list-group-item-secondary">{{$row->user->name}} Has opened a conversation with you.
               To read Message <a class="btn btn-dark" href="{{route('show',base64_encode($row->id))}}">Click</a></li>

            <br>
        @endforeach
        </ul>
    </div>
@endsection
