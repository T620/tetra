<h1>{{$market->name}}</h1>

<h3>Products on offer today</h3>

<ul>
    @foreach($products as $marketProduct)

        <ul>
            <li>{{$marketProduct->product->species->name}}</li>
            <li>{{$marketProduct->product->size->type}}</li>
            <li>{!! $marketProduct->product->priceRange() !!}
        </ul>
    @endforeach
</ul>