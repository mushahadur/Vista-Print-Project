<div class="card-body">
    <div id="userAddModal" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLiveLabel">Add a New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="floating-label" for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Your Name">
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="floating-label" for="name">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                                    @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="floating-label" for="name">Password</label>
                                    <input type="text" class="form-control" name="password" value="{{ old('password') }}" placeholder="Enter Your Password">
                                    @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="floating-label" for="name">Confirm Password </label>
                                    <input type="text" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Enter Your Confirm Password ">
                                    @error('password_confirmation')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputState">Role</label>
                                    <select id="inputState" class="form-control" name="role" value="{{ old('role') }}">
                                        <option>--- Select Role Name ---</option>
                                        <option value="admin">Admin</option>
                                        <option value="manager">Manager</option>
                                        <option value="operator">Operator</option>
                                    </select>
                                    @error('role')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="floating-label" for="name">Captacha</label>
                                    <input type="text" class="form-control" name="captacha" aria-describedby="emailHelp" placeholder="Enter Your Captacha">
                                    @error('captacha')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                       
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn  btn-primary">Save User</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>