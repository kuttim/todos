<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

<nav class="relative flex flex-wrap items-center content-between py-3 px-4 text-black bg-gray-100">
    <div class="container mx-auto sm:px-4">
        <a href="/"><span class="inline-block pt-1 pb-1 mr-4 text-lg whitespace-no-wrap mb-0 h1">Todo</span></a>
        <a href="/create"><span class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Create Todo</span></a>
    </div>
</nav>


<div class="container">

    @yield('content')
    @if(session()->has('success'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">

            {{ session()->get('success') }}

        </div>
    @endif
</div>

</body>

</html>
