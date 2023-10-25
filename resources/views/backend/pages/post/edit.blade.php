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
                <h4>User Update</h4>
            </div>
            <div class="card-body ">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="floating-label" for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}"
                                    placeholder="Enter Your Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="floating-label" for="name">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $user->email }}"
                                    placeholder="Enter Your Email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="floating-label" for="name">Password</label>
                                <input type="text" class="form-control" name="password" value="{{ $user->password }}"
                                    placeholder="Enter Your Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="floating-label" for="name">Confirm Password </label>
                                <input type="text" class="form-control" name="password_confirmation" deactive
                                    value="{{ old('password_confirmation') }}" placeholder="Enter Your Confirm Password ">
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputState">Role</label>
                                <select id="inputState" class="form-control" name="role">
                                    <option selected value="{{ $user->role }}">{{ $user->role }}</option>
                                    <option value="admin">Admin</option>
                                    <option value="manager">Manager</option>
                                    <option value="operator">Operator</option>
                                </select>
                                @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="floating-label" for="name">Captacha</label>
                                <input type="text" class="form-control" name="captacha" aria-describedby="emailHelp"
                                    placeholder="Enter Your Captacha">
                                @error('captacha')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn  btn-primary">Update User</button>
                    </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    <!-- [ stiped-table ] end -->
@endsection
