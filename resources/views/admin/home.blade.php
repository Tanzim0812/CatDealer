@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left shadow h-100 py-2" style="background-color: #3b86ec">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Inquiry (Last 24 hours)</div>
                        <div class="h5 mb-0 font-weight-bold text-light">
                            @if(\App\userchat::chaths())
                                {{\App\userchat::chat24()}}
                            @endif
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar-day fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left shadow h-100 py-2" style="background-color: #1de081">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Inquiry (Last 7 days)</div>
                        <div class="h5 mb-0 font-weight-bold text-light">
                            @if(\App\userchat::chaths())
                                {{\App\userchat::chat7days()}}
                            @endif
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar-week fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left shadow h-100 py-2" style="background-color: #856ae8">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Inquiry (Last 30 days)</div>
                        <div class="h5 mb-0 font-weight-bold text-light">
                            @if(\App\userchat::chaths())
                                {{\App\userchat::chat30days()}}
                            @endif
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow h-100 py-2" style="background-color: #f15340">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Inquiry (Last 60 days)</div>
                            <div class="h5 mb-0 font-weight-bold text-light">
                                @if(\App\userchat::chaths())
                                    {{\App\userchat::chat60days()}}
                                @endif
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-o fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    <div>


    <div class="shadow">
        <table class="table table-hover table-bordered results" id="bodytab">
            <h5 class="text-dark ml-2">Inquiries</h5>
            <thead>
            <tr>
                <th class="bg-info text-light">Type</th>
                <th class="col-md-4 col-xs-4 bg-info text-light">Client Name</th>
                <th class="col-md-5 col-xs-5 bg-info text-light">Product Name</th>
                <th class="col-md-3 col-xs-3 bg-info text-light">Action</th>
            </tr>
            <tr class="warning no-result">
                <td colspan="5"><i class="fa fa-warning"></i> No result</td>
            </tr>
            </thead>
            <tbody style="background-color: #f2f2f2">
            @foreach(\App\message::chatproduct() as $row)
                @if($row->customize == NULL)

                <tr>
                    <th scope="row" class="text-dark">General inquiry</th>
                    <td class="text-dark">{{strtoupper($row->user->name)}}</td>
                    <td class="text-dark">@if(\App\product::where('id',$row->pro_id)->first())
                            {{strtoupper(\App\product::where('id',$row->pro_id)->first()->title)}}
                        @else
                        NOT GIVEN YET
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{route('show',base64_encode($row->id))}}"> Read</a>
                        <a class="btn btn-success" href="{{route('reply',base64_encode($row->id))}}"> Send</a>
                        </td>

                </tr>
                @else
                    <tr>
                        <th scope="row" class="text-dark">Custom Inquiry</th>
                        <td class="text-dark">{{strtoupper($row->user->name)}}</td>
                        <td class="text-dark">
                            @if(\App\message::where('chat_id',$row->id)->first())
                                {{strtoupper(\App\message::where('chat_id',$row->id)->first()->pro_name)}}
                            @else
                                NOT GIVEN YET
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{route('show.customize',base64_encode($row->id))}}"> Read</a>
                            <a class="btn btn-success" href="{{route('reply.customize',base64_encode($row->id))}}"> Send</a>

                        </td>


                    </tr>
                @endif
            @endforeach



            </tbody>
        </table>
    </div>




    </div>
@endsection
