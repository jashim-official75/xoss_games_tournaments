@extends('backend.layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">All Banners</h4>
                    <a href="{{ route('banner.create') }}" class="btn btn-sm btn-primary d-flex align-items-center">Add
                        New</a>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $banner)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $banner->title }}</td>
                                        <td>
                                            <img src="{{ asset($banner->banner_image) }}" alt="">
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ route('banner.edit', $banner->id) }}"
                                                class="btn fa fa-pencil text-primary"></a>
                                            <form action="{{ route('banner.destroy', $banner->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class=" btn fa fa-trash text-danger"
                                                    onclick="return confirm('Are you sure to delete this Pirze ?')"></button>
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
    </div>
@endsection
