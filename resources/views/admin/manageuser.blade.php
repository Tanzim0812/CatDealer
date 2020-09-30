@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
@include('include.messageshow')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin , Do not change your <b class="text-dark">Role</b> you may lose your access forever.</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Register</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($user as $row)
                    <tr>
                        <td>{{$row->name}}</td>
                        <td><img src="{{asset('files/uploads/avatar/'.$row->image)}}" style="width: 60px;height: 50px"></td>
                        <td>{{$row->issueofreg}}</td>
                        <td>
                            <input type="checkbox" data-toggle="toggle" data-on="Admin" data-off="User" data-onstyle="info" data-offstyle="secondary" id="role_status" data-id="{{$row->id}}" {{$row->role==1 ? 'checked':''}} >
                        </td>
                        <td>
                            <a href="{{route('del-user',$row->id)}}" class="btn btn-danger btn-circle" onclick="return confirm('Do you want to delete user?')">
                                <i class="fas fa-trash" title="Delete"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
