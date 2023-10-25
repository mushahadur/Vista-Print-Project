@extends('backend.layout.app')
@section('title')
    Categoary
@endsection

@section('content')
    <div class="row align-items-center ">
        <div class="col-4">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#!">Categoary Page</a></li>
            </ul>
        </div>
        <div class="col-8 d-flex justify-content-between">
            <h5 class="alert alert-success" role="alert">{{Session::get('message')}}</h5>
            <button type="button" class="btn  btn-primary mx-3" data-toggle="modal" data-target="#categoryAddModal">
                <i class="feather icon-user-plus mx-2"></i>Add Categoary
            </button>
        </div>
    </div>

    <!-- [ demo-modal ] start -->
    

        @include('backend.pages.category.add_modal') 

    <!-- [ demo-modal ] end -->

    <!-- [ stiped-table ] start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Categoary Manage Table</h4>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>SI NO</th>
                                <th> Category Name</th>
                                <th>Category Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $item->name }}</td>
                                    <td> <label class="badge badge-light-primary" >{{ $item->status }}</label></td>
                                    <td class="d-flex justify-content-center">
                                        <a class="btn btn-outline-success" href="{{ route('category.edit', $item) }}" >
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form id="delete-form" action="{{ route('category.destroy', $item) }}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                               <button  class="btn btn-outline-danger mx-2" type="submit"><i class="fa fa-trash"></i></button>
                                        </form> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ stiped-table ] end -->
@endsection
