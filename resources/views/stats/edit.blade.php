@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Statistics</h2>

        <form action="{{ route('stats.update', $stat->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label>Students Helped</label>
                <input type="number" name="students_helped" value="{{ $stat->students_helped }}">
            </div>

            <div>
                <label>Programs Offered</label>
                <input type="number" name="programs_offered" value="{{ $stat->programs_offered }}">
            </div>

            <div>
                <label>Institutions</label>
                <input type="number" name="institutions" value="{{ $stat->institutions }}">
            </div>

            <div>
                <label>Countries</label>
                <input type="number" name="countries" value="{{ $stat->countries }}">
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
@endsection
