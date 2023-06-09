@extends('admin.admin_dashboard')
@section('admin')
    {{-- @if ($users->address == $users->phone)
        @php
            Mail::send(new App\Mail\OrderShiping());
        @endphp
    @endif
    <div>
        <script>
            var date = new Date();
            var current_date = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + (date.getDate() + 30);
            document.write(current_date);
        </script>
    </div> --}}
@endsection
