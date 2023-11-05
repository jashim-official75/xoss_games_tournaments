@extends('backend.layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">All Prizes</h4>
                    <a href="{{ route('prize.create') }}" class="btn btn-sm btn-primary d-flex align-items-center">Add New</a>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                    <th>Date & Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prizes as $prize)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $prize->name }}</td>
                                        <td>
                                            <img src="{{ asset($prize->image) }}" alt="">
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ route('prize.edit', $prize->id) }}"
                                                class="btn fa fa-pencil text-primary"></a>
                                            <form action="{{ route('prize.destroy', $prize->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class=" btn fa fa-trash text-danger"
                                                    onclick="return confirm('Are you sure to delete this Pirze ?')"></button>
                                            </form>
                                        </td>
                                        <td>{{ $prize->created_at->format('Y-m-d') }},
                                            {{ $prize->created_at->format('h:i A') }}</td>
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
