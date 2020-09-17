@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage SuBCategories</h1>
    </div>
    <div class="container">
        @include('include.messageshow')
        @if($errors->any())
            @foreach($errors->all() as $err)
                <div class="alert alert-danger text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{$err}}</strong>
                </div>
            @endforeach
        @endif
        <div class="float-right">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                Add SuBCategory
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add SuBCategory</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="{{route('save-subcat')}}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="cat_name">Category</label>
                                    <select id="cat_name" class="form-control" name="cat_id">
                                        <option class="alert-danger" value="0">Select</option>
                                        @foreach($show0 as $row)
                                            <option value="{{$row->id}}">{{ucwords($row->category_name)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" placeholder="Enter SuBCategory Name" name="subcat_name" autofocus>
                                        @error('subcat_name')
                                        <strong class="text-bold text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Cat-Name</th>
                <th>SubCat-Name</th>
                <th>Status</th>
                <th>Action</th>
                <th>Created date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($show as $row)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$row->categories->category_name}}</td>
                    <td>{{$row->subcat_name}}</td>
                    <td>{{$row->subcat_status}}</td>
                    <td>
                        <a href="{{route('del-subcat',$row->id)}}"  title="Delete" onclick="return confirm('Are you Want to delete it?')"><i class="fas fa-trash-alt" style='font-size:22px;color:red'></i></a>
                        <a type="button" onclick="submoda({{$row->id}})" data-toggle="modal" data-target="#updateModalCenter" style="padding: 2px">
                            <i class="fa fa-edit" style="font-size:22px;color:deepskyblue" title="Edit"></i>
                        </a>


                        <!-- Modal -->
                        <div class="modal fade" id="updateModalCenter" tabindex="-1" role="dialog" aria-labelledby="updateModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateModalLongTitle">Edit Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="{{route('update-subcat')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="cat_name">Category</label>
                                                <select id="cat_name" class="form-control" name="cat_id" required>
                                                    <option class="alert-danger" disabled="true" selected="true">Select</option>
                                                        @foreach($show0 as $w)
                                                        <option value="{{$w->id}}">{{ucwords($w->category_name)}}</option>
                                                    @endforeach
                                                </select>
                                                @error('cat_id')
                                                <strong class="text-bold text-danger">{{$message}}</strong>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="email">Name:</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" name="id" id="subid">
                                                    <input type="text" class="form-control" id="subname" name="subcat_name">
                                                    @error('subcat_name')
                                                    <strong class="text-bold text-danger">{{$message}}</strong>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                    <td>{{date_format($row->created_at,'d-M-Y')}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

