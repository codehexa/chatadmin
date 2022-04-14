@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Notice list</h4>

    <div class="mt-5">
        <div class="list-group list-group-horizontal-sm">
            @foreach ($data as $datum)
            <div class="list-group-item">
                <h5>{{ $datum->notice_title }} (<span>{{ $datum->updated_at }}</span>)</h5>
                <p>
                    {!! nl2br($datum->notice_text) !!}
                </p>
                <div class="justify-content-between">
                    <a href="#" class="btn btn-primary btn-sm align-content-end">info</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-3">{{ $data->links('pagination::bootstrap-4') }}</div>
    </div>

    <div class="mt-3">
        <a href="/notice_post" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> New</a>
    </div>
</div>
@endsection
