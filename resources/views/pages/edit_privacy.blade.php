@extends('layouts.app')
@section('title', 'EduX | Edit Page')
@section('content')
    <div class="settings-container">
        <header class="edit-student-header">
            <h1>Privacy Policy</h1>
        </header>
        <br><br>

        <form action="#" method="POST">
            @csrf
            @method('PUT')

            <!-- Title Field -->
            <div class="section-form">
                <label for="Title">Title*</label>
                <input type="text" id="Title" name="title"  placeholder="Enter Title" required>
            </div>

            <!-- Description Field -->
            <div class="input-textarea">
                <label for="description">Description*</label>
                <textarea id="description" name="content" cols="10" rows="5"></textarea>
            </div>
            <br><br>

            <button type="submit">Update Page</button>
        </form>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                editor.editing.view.change(writer => {
                    writer.setStyle('height', '300px', editor.editing.view.document.getRoot());
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
