@extends('layouts.app')

@section('content')
    <div class="settings-container">
        <h2>Edit Webinar</h2>
        <form action="{{ route('webinars.update', $webinar->id) }}" method="POST">
            @csrf 
            @method('PUT')

            <div class="form-group">
                <label>Type</label>
                <input type="text" name="type" class="form-control" value="{{ $webinar->type }}" required>
            </div>

            <div class="form-group">
                <label>Title</label>
                <textarea name="title" class="form-control" required>{{ $webinar->title }}</textarea>
            </div>

            <div class="form-group">
                <label>Date</label>
                <input type="text" name="date" class="form-control" value="{{ $webinar->date }}" required>
            </div>

            <div class="form-group">
                <label>Time</label>
                <input type="text" name="time" class="form-control" value="{{ $webinar->time }}" required>
            </div>

            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
