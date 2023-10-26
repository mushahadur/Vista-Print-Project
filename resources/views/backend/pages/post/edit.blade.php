@extends('backend.layout.app')
@section('title')
    Post Edit
@endsection

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Post Update Page</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ stiped-table ] start -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Post Update</h4>
            </div>
            <div class="card-body ">
                <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="floating-label" for="name">Title Name</label>
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}"
                                    placeholder="Please Enter the Titel">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="floating-label" for="name">Sub Title</label>
                                <input type="text" class="form-control" name="sub_title" value="{{ $post->sub_title }}"
                                    placeholder="Please Enter the Sub Titel">
                                @error('sub_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="floating-label" for="name">Tag</label>
                                <input type="text" class="form-control" name="tag" value="{{ $post->tag }}"
                                    placeholder="Please Enter the Tag">
                                @error('tag')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputState">Category</label>
                                <select id="inputState" class="form-control" name="category_id"  >
                                    <option selected  value="{{ $post->category_id }}">{{ $post->category->name }}</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="floating-label" for="name">Thumbnail</label>
                                <img src="{{asset('/storage/Post-thumbnails/'.$post->thumbnail)}}" alt="{{$post->thumbnail}}" height="100" width="120"/>
                                <input type="file" class="form-control" name="thumbnail">
                                @error('thumbnail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="floating-label" for="name">Slider Image</label>
                                <img src="{{asset('/storage/Post-slider-images/'.$post->slide_image)}}" alt="{{$post->slide_image}}" height="100" width="120"/>
                                <input type="file" class="form-control" name="slide_image">
                                @error('slide_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="floating-label" for="name">Header Image</label>
                                <img src="{{asset('/storage/Post-header-images/'.$post->header_image)}}" alt="{{$post->header_image}}" height="100" width="120"/>
                                <input type="file" class="form-control" name="header_image" aria-describedby="emailHelp"
                                    placeholder="Enter Your Captacha">
                                @error('header_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputState">Status</label>
                                <select id="inputState" class="form-control" name="status" value="{{ $post->status }}">
                                    <option selected value="{{ $post->status }}">{{ $post->status }}</option>
                                    <option value="Draft">Draft</option>
                                    <option value="Painding">Painding</option>
                                    <option value="Processing">Processing</option>
                                    <option value="Observetion">Observetion</option>
                                    <option value="Checking">Checking</option>
                                    <option value="Done">Done</option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Post Description</label>
                                <textarea class="form-control" name="description"  rows="4">
                                    {{ $post->description }}
                                </textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn  btn-primary">Update Post</button>
            </div>
            </form>
        </div>
    </div>
 
    <!-- [ stiped-table ] end -->
@endsection
