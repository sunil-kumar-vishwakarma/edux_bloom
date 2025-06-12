@extends('layouts.app')

@section('content')
<div class="settings-container">
    <h2>Create Webinar</h2>
    <form action="{{ route('webinars.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Type</label>
            <input type="text" name="type" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Title</label>
            <textarea name="title" class="form-control" required></textarea>
        </div>

        <div class="form-group">
    <label>Date</label>
    <input type="text" name="date" class="form-control" required>
</div>

<div class="form-group">
    <label>Time</label>
    <input type="text" name="time" class="form-control" required>
</div>


        <button class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
