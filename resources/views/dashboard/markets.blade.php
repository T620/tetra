@extends('layouts.dashboard')


@section('content')
<div class='dashboard_container container_full'>
    <h1 class='dashboard__header'>{{$header}}</h1>

    <table class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Town</th>
                <th class="px-4 py-2">Size</th>
                <th class="px-4 py-2">Type</th>
            </tr>
        </thead>

        <tbody>
            @foreach($markets as $market)
                <tr>
                    <td class="border px-4 py-2">
                        <a href="/markets/{{$market->slug()}}">
                            {{$market->name}}
                        </a>
                    </td>
                    <td class="border px-4 py-2">{{$market->town}}</td>
                    <td class="border px-4 py-2">{{$market->size()}}</td>
                    <td class="border px-4 py-2">{{$market->type()}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection