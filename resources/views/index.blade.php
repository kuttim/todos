@extends ('app')
@section ('title')
    Todo app
@endsection
@section('content')
    <div class="flex flex-wrap  mt-3 w-full">
        <div class="w-full self-center">
            <ul class="flex flex-col pl-0 mb-0 border rounded border-gray-300 w-full">
                @foreach($todos as $todo)
                <li class="relative block py-3 px-6 -mb-px border border-r-0 border-l-0 border-gray-300 no-underline"><a href="details">{{ $todo->name }}</a></li>
            </ul>
            @endforeach
        </div>
    </div>
@endsection
