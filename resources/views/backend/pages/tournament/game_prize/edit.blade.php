@extends('backend.layouts.app')
@section('pageName')
    Edit game Prize
@endsection

@section('styles')
    <!-- Footable CSS -->
    <link href="{{ asset('/assets/backend/plugins/footable/css/footable.core.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Edit Game Prize</h4>
                    <a href="{{ route('add_prize.show', $game_prize->tournament_game_id) }}"
                        class="btn btn-sm btn-primary d-flex align-items-center">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('add_prize.update', $game_prize->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="prize_name">Price Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="prize_name" placeholder="prize Name"
                                name="prize_name" value="{{ $game_prize->prize_name }}">
                            @error('prize_name')
                                <p class="text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="position">Position <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="position" placeholder="Prize Position"
                                name="position" value="{{ $game_prize->position }}">
                            @error('position')
                                <p class="text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if ($game_prize->image)
                                <img src="{{ asset($game_prize->image) }}" width="120" height="100" class="mt-2">
                            @endif
                            @error('image')
                                <p class="text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
