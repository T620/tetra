@extends('layouts.dashboard')


@section('content')
<div class='dashboard_container container_full'>
    <h1 class='dashboard__header'>{{$header}}</h1>

    <table class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2">Product</th>
                <th class="px-4 py-2">Type</th>
                <th class="px-4 py-2">Size</th>
                <th class="px-4 py-2">Avg. Price Range (&pound; / Kg)</th>
                <th class="px-4 py-2">Seller's Price Range (&pound; / Kg)</th>
            </tr>
        </thead>

        <tbody>
            @foreach($products as $marketProduct)
                <tr>
                    <td class="border px-4 py-2">
                        <a href="#0">
                        {{$marketProduct->product->species->name}}
                        </a>
                    </td>
                    <td class="border px-4 py-2">{{$marketProduct->product->size->type}}</td>
                    <td class="border px-4 py-2">{{$marketProduct->product->type}}</td>
                    <td class="border px-4 py-2">{!! $marketProduct->product->priceRange() !!}</td>
                    <td class="border px-4 py-2">{!! $marketProduct->priceRange() !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection