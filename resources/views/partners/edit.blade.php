@extends('layouts.app')
@section('title', 'EduX | Edit Partner')
@section('content')
<div class="settings-container">
    <header class="edit-student-header">
        <h1>Edit Partner Details</h1>
        <a href="{{ route('partners.index') }}" class="back-btn"><i class="fas fa-arrow-left"></i> Back to Partner List</a>
    </header>
    <br>
    <br>
    <form class="edit-form" action="{{ route('partners.update', $partner->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" value="{{ $partner->full_name }}" required>
        </div>

        <div class="form-group">
            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" value="{{ $partner->company_name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $partner->email }}" required>
        </div> 

        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" value="{{ $partner->contact }}" required>
        </div> 

        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" value="{{ $partner->category }}" required>
        </div> 
        

        <div class="form-group">
            <label for="joined_date">Joined Date:</label>
            <input type="date" id="joined_date" name="joined_date" value="{{ old('joined_date', $partner->joined_date->format('Y-m-d')) }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="Active" {{ $partner->status == 'Active' ? 'selected' : '' }}>Active</option>
                <option value="Inactive" {{ $partner->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit">Update Partner</button>
    </form>
</div>
@endsection
