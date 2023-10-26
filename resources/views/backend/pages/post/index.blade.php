@extends('backend.layout.app')
@section('title')
    Post
@endsection

@section('content')

    <div class="row align-items-center ">
        <div class="col-4">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#!">Post Page</a></li>
            </ul>
        </div>
        <div class="col-8 d-flex justify-content-between pb-3">
            <h5 class="alert alert-success" role="alert">{{Session::get('message')}}</h5>
            <a href="{{ route('post.create') }}" class="btn  btn-primary mx-3" >
                <i class="feather icon-user-plus mx-2"></i>Add a New Post
            </a>
        </div>
    </div>

    <!-- [ stiped-table ] start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Post Manage Table</h4>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>SI NO</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Tag</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Thumbnail</th>
                                <th>Slider</th>
                                <th>Header</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->sub_title }}</td>
                                    <td>{{ $item->tag }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td><img src="{{asset('/storage/Post-thumbnails/'.$item->thumbnail)}}" alt="{{$item->thumbnail}}" height="50" width="60"/></td>
                                    <td><img src="{{asset('/storage/Post-slider-images/'.$item->slide_image)}}" alt="{{$item->slide_image}}" height="50" width="60"/></td>
                                    <td><img src="{{asset('/storage/Post-header-images/'.$item->header_image)}}" alt="{{$item->header_image}}" height="50" width="60"/></td>
                                    <td> <label class="badge badge-light-primary" >{{ $item->status }}</label></td>
                                    <td class="d-flex justify-content-center">
                                        <a class="btn btn-outline-success" href="{{ route('post.edit', $item) }}" >
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form id="delete-form" action="{{ route('post.destroy', $item) }}" method="POST" >
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
