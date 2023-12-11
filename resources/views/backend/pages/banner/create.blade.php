@extends('backend.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Create Banner</h4>
                    <a href="{{ route('banner.index') }}" class="btn btn-sm btn-primary d-flex align-items-center">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="">
                        </div>

                        <div class="form-group">
                            <label for="title_font_size">Title Font Size</label>
                            <input type="text" class="form-control" id="title_font_size" name="title_font_size"
                                value="">
                        </div>

                        <div class="form-group">
                            <label for="sub_title">Sub Title</label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title" value="">
                        </div>

                        <div class="form-group">
                            <label for="sub_title_font_size">Sub Title Font Size</label>
                            <input type="text" class="form-control" id="sub_title_font_size" name="sub_title_font_size"
                                value="">
                        </div>

                        <div class="form-group">
                            <label for="btn_text">Button Text</label>
                            <input type="text" class="form-control" id="btn_text" name="btn_text" value="">
                        </div>

                        <div class="form-group">
                            <label for="btn_link">Button Link</label>
                            <input type="text" class="form-control" id="btn_link" name="btn_link" value="">
                        </div>

                        <div class="form-group">
                            <label for="banner_image">Banner Image</label>
                            <input type="file" class="form-control" id="banner_image" name="banner_image">
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
