@extends('layouts.app')
@section('title', 'EduX | Create Partner')
@section('content')
<div class="settings-container">
    <header class="edit-student-header">
        <h1>Create Partner</h1>
        <a href="{{ route('partners.index') }}" class="back-btn"><i class="fas fa-arrow-left"></i> Back to Partner List</a>
    </header>
    <br>
    <br>
    <form class="create-form" action="{{ route('partners.store') }}" method="POST">
        @csrf
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" placeholder="Enter full name" required>
    
        <label for="company_name">Company Name:</label>
        <input type="text" id="company_name" name="company_name" placeholder="Enter company name" required>
    
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="Enter email address" required>
    
        <label for="contact">Contact:</label>
        <input type="tel" id="contact" name="contact" placeholder="Enter contact number" pattern="[0-9]{10}" required>
    
        <label for="category">Category:</label>
        <input type="text" id="category" name="category" placeholder="Enter category" required>
    
        <label for="joined_date">Joined Date:</label>
        <input type="date" id="joined_date" name="joined_date" required>
    
        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select>
    
        <button type="submit">Create Partner</button>
    </form>
</div>
@endsection
