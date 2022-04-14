@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Notice Upload</h4>

    <div class="mt-5">
        <form name="noticeFrm" id="noticeFrm" method="post" action="{{ route('noticeUpload') }}">
            @csrf
            <div class="list-group ">
                <div class="list-group-item">
                    <input type="text" name="up_title" id="up_title" class="form-control" placeholder="Enter Title" autocomplete="off" />
                </div>
                <div class="list-group-item">
                    <textarea name="up_text" id="up_text" class="form-control" style="min-height: 400px;" placeholder="Enter context"></textarea>
                </div>
            </div>
        </form>
    </div>

    <div class="mt-3">
        <button class="btn btn-primary btn-sm" id="btnPost"><i class="fa fa-save"></i> Post</button>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).on("click","#btnPost",function (){
            if ($("#up_title").val() === ""){
                alert("Enter title");
                return;
            }

            $("#noticeFrm").submit();
        })
    </script>

@endsection
