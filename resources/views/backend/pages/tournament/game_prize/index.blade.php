@extends('backend.layouts.app')

@section('pageName')
    {{ $game->game_name }} Game
@endsection

@section('styles')
    <!-- Footable CSS -->
    <link href="{{ asset('/assets/backend/plugins/footable/css/footable.core.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Add Prize</h4>
                    <a href="{{ route('tournament.game.index') }}" class="btn btn-sm btn-primary d-flex align-items-center">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('add_prize.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="game_id" value="{{ $game->id }}">
                        <div class="form-group">
                            <label for="prize_name">Price Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="prize_name" placeholder="prize Name"
                                name="prize_name" value="">
                                @error('prize_name')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="position">Position <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="position" placeholder="Prize Position"
                                name="position" value="">
                                @error('position')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="image" name="image">
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $game->game_name }} Game Prize List</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Prize Name</th>
                                    <th>Image</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prizes as $prize)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $prize->prize_name }}</td>
                                        <td>
                                            <img src="{{ asset($prize->image) }}" alt="">
                                        </td>
                                        <td>{{ $prize->position }}</td>
                                        <td class="d-flex align-items-center">
                                            <a href="{{ route('add_prize.edit', $prize->id) }}" class="fa fa-pencil"></a>
                                            <form action="{{ route('add_prize.destroy', $prize->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')" class="btn fa fa-trash text-danger"></button>
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

@section('scripts')
    <!-- Footable -->
    {{-- <script src="{{ asset('/assets/backend/plugins/footable/js/footable.all.min.js') }}"></script> --}}
    <!--FooTable init-->
    {{-- <script src="{{ asset('/assets/backend/js/footable-init.js') }}"></script> --}}
@endsection
