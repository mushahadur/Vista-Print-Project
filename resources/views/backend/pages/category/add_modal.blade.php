<div class="card-body">
    <div id="categoryAddModal" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLiveLabel">Add a New Categoary</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="floating-label" for="name">Category Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Category Name">
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputState">Status</label>
                                    <select id="inputState" class="form-control" name="status" value="{{ old('status') }}">
                                        <option value="Active">Active</option>
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
                            <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn  btn-primary">Save Categoary</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>