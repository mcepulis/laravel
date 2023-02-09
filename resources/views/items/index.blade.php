<h1>ItemController</h1>


<div>
    @foreach($prekes as $product)
        ID: {{$product['id'] }}<br>
        Prekes pavadinimas: {{ $product['name'] }}<br>
        Kaina: {{ $product['price'] }}
    @endforeach
</div>