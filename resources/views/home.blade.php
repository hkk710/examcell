@extends('layouts.admin')

@section('content')

    <body style="background-image: url(/images/admin.jpg);">
        <h2 class="ad-text-center" style="color:#900000;"><center>Welcome to Admin Panel<center></h2>
            <form method="get" action="{{ url('/home/allocate') }}">
                <input type="submit" value="Allocate" class="btn btn-primary">
            </form>
    </body>

@endsection
