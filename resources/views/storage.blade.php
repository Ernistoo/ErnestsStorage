<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storage</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-zinc-100 dark:bg-zinc-900 text-zinc-900 dark:text-zinc-100">
    <nav class="bg-zinc-800 p-4 mb-6 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">

                <a href="{{ route('add_product') }}" class="text-blue-600 ml-4 text-lg hover:text-blue-900 transition-colors duration-300">Add Product</a>
                <a href="{{ route('storage') }}" class="text-zinc-300 ml-4 text-lg hover:text-blue-300 transition-colors duration-300">Storage</a>
            </div>
        </div>
    </nav>
    <header class="bg-white dark:bg-zinc-800 shadow p-4 mb-6">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold text-center text-blue-500 dark:text-blue-400">Storage</h1>
        </div>
    </header>
    <main class="container mx-auto p-4">
        <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg shadow-lg">
            @if($products->isEmpty())
            <p class="text-lg text-center">No products added yet.</p>
            @else
            <ul class="space-y-6">
                @foreach($products as $product)
                <li class="flex items-center bg-white dark:bg-zinc-700 p-4 rounded-lg shadow-md">
                    <img src="{{ asset($product->image_path) }}" alt="Product Image" class="h-20 w-20 object-cover rounded-md mr-4" />
                    <div>
                        <p class="text-lg font-semibold">Name: {{ $product->name }}</p>
                        <p class="text-lg">Price: ${{ $product->price }}</p>
                    </div>
                </li>
                @endforeach
            </ul>
            @endif
        </div>
    </main>
</body>

</html>