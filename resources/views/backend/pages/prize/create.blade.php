@extends('backend.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Create Prize</h4>
                    <a href="{{ route('prize.index') }}" class="btn btn-sm btn-primary d-flex align-items-center">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('prize.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name <span class="text-danger">(required)</span></label>
                            <input type="text" class="form-control" id="name" placeholder="prize Name"
                                name="name" value="">
                                @error('name')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Image <span class="text-danger">(required)</span></label>
                            <input type="file" class="form-control" id="image"name="image">
                            @error('image')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
