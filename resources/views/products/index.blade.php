@extends('layouts.app')
@section('content')
<div class="container mx-auto ...">
    <input id="searchInput" class="..." placeholder="Search produk...">
    <div id="product-list" class="grid ..."></div>
</div>
@endsection

@push('scripts')
<script>
    const productListContainer = document.getElementById('product-list');
    const searchInput = document.getElementById('searchInput');

    async function fetchProducts(searchTerm = '') {
        productListContainer.innerHTML = '<p>Loading...</p>';
        const apiUrl = `/api/products?search=${searchTerm}`;
        try {
            const response = await fetch(apiUrl);
            const result = await response.json();
            const products = result.data || result;
            productListContainer.innerHTML = '';
            if (products.length === 0) { productListContainer.innerHTML = '<p>Produk tidak ditemukan.</p>'; return; }
            products.forEach(product => {
                const formattedPrice = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(product.price);
                const productCardHTML = `
                    <div class="product-card">
                        <img src="${product.image_url || 'https://via.placeholder.com/300x200?text=No+Image'}" alt="${product.name}">
                        <div><h3>${product.name}</h3><p>${formattedPrice}</p><a href="/produk/${product.slug}">Detail</a></div>
                    </div>
                `;
                productListContainer.innerHTML += productCardHTML;
            });
        } catch (error) { productListContainer.innerHTML = '<p style="color: red;">Gagal memuat data.</p>'; }
    }
    searchInput.addEventListener('input', e => fetchProducts(e.target.value));
    fetchProducts();
</script>
@endpush