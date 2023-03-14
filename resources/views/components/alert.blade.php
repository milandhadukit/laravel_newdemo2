{{-- used in contact and layout --}}


{{-- <div class="alert alert-{{ $type }}">
    {{ $message }}
</div> --}}

{{-- 
<div {{ $attributes->merge(['class' => 'alert alert-'.$type]) }}>
    {{ $message }}
</div> --}}


{{-- <div class="alert alert-{{ $type }}">
    {{ $message }}
</div> --}}

<div class=" alert alert-{{$type}}">
    {{$slot}}
</div>  

