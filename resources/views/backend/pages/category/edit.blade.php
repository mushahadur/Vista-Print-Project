@extends('backend.layout.app')
@section('title')
    User
@endsection

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">User Edit Page</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- [ demo-modal ] start -->




    <!-- [ demo-modal ] end -->

    <!-- [ stiped-table ] start -->
    <div class="col-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h4>Category Update</h4>
            </div>
            <div class="card-body ">
                <form action="{{ route('category.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="floating-label" for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $category->name }}"
                                    placeholder="Enter Your Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputState">Status</label>
                                <select id="inputState" class="form-control" name="status" value="{{ old('status') }}">
                                    <option selected value="{{ $category->status }}">{{ $category->status }}</option>
                                    <option value="Deactive">Deactive</option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn  btn-primary">Update Category</button>
                    </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    <!-- [ stiped-table ] end -->
@endsection
