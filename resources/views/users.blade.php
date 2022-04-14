@extends('layouts.app')

@section('content')
<div class="container">
    <h4>User list</h4>

    <div class="mt-5">
        <div class="list-group list-group-horizontal-sm">
            @foreach ($data as $datum)
            <div class="list-group-item">
                <h5>{{ $datum->name }} (<span>{{ $datum->email }}</span>)</h5>
                <p>
                    {{ $datum->updated_at }}
                </p>
                <div class="justify-content-between">

                    <a href="#" class="btn btn-primary btn-sm align-content-end">info</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-3">{{ $data->links('pagination::bootstrap-4') }}</div>
    </div>
</div>
@endsection
