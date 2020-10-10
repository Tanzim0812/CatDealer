@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Product</h1>

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
                Add Product
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="{{route('save-product')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="cat_name">Category</label>
                                    <select id="cat_name" class="form-control" name="cat_id">
                                        <option class="alert-danger" disabled="true" selected="true">-Select-</option>
                                        @foreach($getcat as $key => $value)
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">SuBCategory</label>
                                    <select class="form-control" name="subcat_id">
                                        <option class="alert-danger" disabled="true" selected="true">-Select-</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="title">Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="Enter Product Name" name="title" autofocus>
                                        @error('title')
                                        <strong class="text-bold text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="hscode">HSCODE:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="hscode" placeholder="Enter hscode" name="hscode">
                                        @error('hscode')
                                        <strong class="text-bold text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="details">Details:</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="details" name="details"></textarea>
                                        @error('details')
                                        <strong class="text-bold text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="previous_price">Previous price:</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="previous_price" placeholder="Enter previous_price" name="previous_price">
                                        @error('previous_price')
                                        <strong class="text-bold text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="offer_price">Offer price:</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="offer_price" placeholder="Enter offer_price" name="offer_price">
                                        @error('offer_price')
                                        <strong class="text-bold text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="image">Image:</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image" name="image">
                                        @error('image')
                                        <strong class="text-bold text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="qty">qty:</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="qty" name="qty">
                                        @error('qty')
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
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
                <th>Created date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($show as $row)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td><img src="{{asset('files/uploads/'.$row->image)}}" style="width: 50px;height: 50px"></td>
                    <td>{{$row->title}} ({{$row->hscode}})</td>
                    <td><strike>{{$row->previous_price}}</strike>->{{$row->offer_price}}</td>
                    <td><input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" data-onstyle="success" data-offstyle="danger" id="product_status" data-id="{{$row->id}}" {{$row->status==1 ? 'checked':''}} ></td>
                    <td>
                        <a href="{{route('del-product',$row->id)}}"  title="Delete" onclick="return confirm('Are you Want to delete it?')"><i class="fas fa-trash-alt" style='font-size:22px;color:red'></i></a>
                        <a type="button" onclick="promoda({{$row->id}})" data-toggle="modal" data-target="#updateModalCenter" style="padding: 2px">
                            <i class="fa fa-edit" style="font-size:22px;color:deepskyblue" title="Edit"></i>
                        </a>
                    </td>


                        <!-- Modal -->
                        <div class="modal fade" id="updateModalCenter" tabindex="-1" role="dialog" aria-labelledby="updateModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateModalLongTitle">Edit Product</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="{{route('update-product')}}" method="post">
                                            @csrf


                                                <input type="hidden" class="form-control" id="cat_id" name="cat_id">


                                                <input type="hidden" class="form-control" id="subcat_id" name="subcat_id">





                                                    <input type="hidden" name="id" id="proid">
                                                    <input type="hidden" class="form-control" id="tit" name="title">
                                                    <input type="hidden" class="form-control" id="det" name="details">
                                                    <input type="hidden" class="form-control" id="hscd" name="hscode">

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="prprice">Previous Price</label>
                                                <input type="number" class="form-control" id="prprice" name="previous_price">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="ofprice">New Price</label>
                                                <input type="number" class="form-control" id="ofprice" name="offer_price">

                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="qty">qty</label>
                                                <input type="number" class="form-control" id="qtyy" name="qty">

                                            </div>


                                                <input type="hidden" class="form-control" id="imge" name="image">


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

                    <td>{{date_format($row->created_at,'d-M-Y')}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


