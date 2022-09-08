@extends ('app')

@section('title')
    Create Todo
@endsection

@section('content')

    <form action="store-data" method="post" class="mt-4 p-6">
        @csrf
        <div class="mb-4 m-6">
            <label for="name">Todo Name</label>
            <input type="text" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" name="name">
        </div>
        <div class="mb-4 m-6">
            <label for="description">Todo Description</label>
            <textarea class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" name="description" rows="3"></textarea>
        </div>
        <div class="mb-4 m-6">
            <input type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 float-end" value="Submit">
        </div>
    </form>
    @if (count($errors) > 0)
        <div class = "p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
