@props(['active'=>false])
<a {{$attributes}}class="{{$active ? 'bg-red-900 text-white':'text-red-300 hover:bg-red-700 hover:text-white'}} rounded-md  px-3 py-2 text-sm font-medium" aria-current="{{ $active ? 'page': false}}">{{$slot}}</a>
