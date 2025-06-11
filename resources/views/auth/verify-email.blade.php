@include('frontent_partials.userdash_sidebar')
@section('content')
    <div class="container">
        <h1>Verify Your Email Address</h1>

        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <p>Please check your email and click the verification link.</p>

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Resend Verification Email</button>
        </form>
    </div>
@endsection
