
<h1>Markets</h1>
<ul>
@foreach ($markets as $market)
    {{-- use url helper --}}
    <li><a href="/markets/{{$market->id}}">{{ $market->name }} </a></li>
@endforeach
</ul>

