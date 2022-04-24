@extends('../layout')

@section('content')
    <div class="bg-light p-5 rounded">
        <h1>@lang('lang.modify_file')</h1>

        <form action="{{route('files.edit')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="control-group col-12" hidden>
                <input type="text" id="id" name="id" value="{{$file->id}}"
                        required>
            </div>
            <div class="form-group mt-4">
                <input type="file" name="file" class="form-control"
                       accept=".doc,.pdf,.zip" value="{{$file->name}}">
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">@lang('lang.submit')</button>
        </form>
    </div>
@endsection


