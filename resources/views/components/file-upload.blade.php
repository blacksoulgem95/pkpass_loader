<div {{$attributes->merge([
    'class' => 'flex flex-col'
])}}>
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">{{$label}}</label>
<input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
       aria-describedby="user_avatar_help" id="{{$id}}_input" name="{{$id}}" type="file" @if (isset($accept)) accept="{{$accept}}" @endif
@if (isset($required)) required @endif
@if (isset($onchange)) onchange="{{$onchange}}" @endif
>
@if (isset($help))
<div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="{{$id}}_help">{{$help}}</div>
@endif
</div>
