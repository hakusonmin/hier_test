<div class="container">
    <h1>{{ $product->name }}</h1>

    @if ($selectedSku)
        <img src="{{ asset('images/' . $selectedSku->product_number . '.jpg') }}" width="300">
        <p>価格: {{ number_format($selectedSku->price) }}円</p>
        <p>在庫: {{ $selectedSku->stock }}</p>
    @else
        <p>この組み合わせのSKUは存在しません</p>
    @endif

    <form method="GET" action="{{ route('user.product.index', ['product' => $product->id]) }}">
        @foreach ($skuOptions as $key => $values)
            <label>{{ $key }}:</label>
            <select name="{{ $key }}" onchange="this.form.submit()">
                @foreach ($values as $value)
                    <option value="{{ $value }}" {{ $selectedOptions[$key] == $value ? 'selected' : '' }}>
                        {{ $value }}
                    </option>
                @endforeach
            </select>
        @endforeach
    </form>
</div>
