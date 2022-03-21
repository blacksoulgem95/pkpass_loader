<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ URL::current() }}">
    @if (isset($page))
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
    @else
        <title>{{config('app.name')}}</title>
    @endif
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script defer src="{{ mix('js/app.js') }}"></script>
</head>

@include('layouts.navigation')

<body class="text-gray-900 bg-gray-100 dark:bg-gray-900 dark:bg-gray-100 font-sans antialiased">
{{$slot}}
</body>

@stack('scripts')
</html>
