@extends('layouts.app')

@section('content')
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="container text-center">
                    <div>
                        {{ config('app.name', 'Site Title') }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
