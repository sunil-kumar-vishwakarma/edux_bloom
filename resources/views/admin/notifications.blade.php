@extends('layouts.app')
@section('title', 'EduX | Notification')
@section('content')
    <!-- Add/Edit Notification Form -->
    <div id="add-notification-form" class="form-container">
        <h1>Manage Notifications</h1>
        <h2>Add/Edit Notification</h2>
        <form action="{{ route('notifications.store') }}" method="POST">
            @csrf
            <label for="title">Notification Title</label>
            <input type="text" id="title" name="title" placeholder="Enter notification title" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Enter notification message" required></textarea>

            <label for="audience">Audience</label>
            <select id="audience" name="audience" required>
                <option value="all">All Users</option>
                <option value="admins">Admins</option>
                <option value="partners">Partners</option>
                <option value="users">Users</option>
            </select>

            <label for="date">Date</label>
            <input type="date" id="date" name="date" required>

            <button type="submit">Send Notification</button>
        </form>
    </div>

    <style>
        /* Form Container */
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Form Heading */
        .form-container h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        /* Label Styles */
        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #555;
        }

        /* Input & Textarea Styles */
        input[type="text"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            background-color: #fafafa;
        }

      
        /* Submit Button Styles */
        button[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Button Hover Effect */
        button[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
@endsection
