@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Statistics</h2>
        <a href="{{ route('stats.edit', $stat->id) }}" class="btn btn-primary">Edit Stats</a>

        <ul>
            <li><strong>Students Helped:</strong> {{ $stat->students_helped }}</li>
            <li><strong>Programs Offered:</strong> {{ $stat->programs_offered }}</li>
            <li><strong>Institutions:</strong> {{ $stat->institutions }}</li>
            <li><strong>Countries:</strong> {{ $stat->countries }}</li>
        </ul>
    </div>
@endsection
