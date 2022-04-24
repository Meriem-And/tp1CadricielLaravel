@extends('../layout')

@section('content')
    <div class="bg-light p-5 rounded">
        <h1>@lang('lang.files')</h1>
        <a href="{{ route('files.create') }}" class="btn btn-primary float-right mb-3">@lang('lang.add_file')</a>


        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">@lang('lang.file_name')</th>
                <th scope="col">@lang('lang.owner')</th>
                <th scope="col">@lang('lang.size')</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($files as $file)
                <tr>
                    <td width="3%">{{ $file->file_id }}</td>
                    <td>{{ $file->file_name }}</td>
                    <td>{{ $file->user_name }}</td>


                    <td width="10%">{{ $file->size }}</td>
                    <td width="10%">{{ $file->type }}</td>
                    <td width="5%">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">

                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @if(auth()->user()->id == $file->user_id)

                                <li><a class="dropdown-item"
                                       href="/files/modifier/{{ $file->file_id}}">@lang('lang.modify') </a></li>
                                <li><a class="dropdown-item"
                                       href="/files/supprimer/{{ $file->file_id}}">@lang('lang.delete')</a></li>
                                @endif
                                <li><a class="dropdown-item" href="/files/telecharger/{{ $file->file_id}}">@lang('lang.download')</a>
                                </li>
                            </ul>
                        </div>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


