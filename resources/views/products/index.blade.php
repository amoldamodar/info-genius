<!-- products/index.blade.php -->

<h1>Product Listing</h1>

<ul>
    @foreach ($products as $product)
        <li>{{ $product->name }}</li>
    @endforeach
</ul>
