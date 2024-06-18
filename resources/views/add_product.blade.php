<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .form-input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5);
        }

        .form-input:hover {
            border-color: rgba(59, 130, 246, 0.5);
        }
    </style>
</head>

<body class="bg-zinc-300 dark:bg-zinc-900 text-zinc-900 dark:text-zinc-100">
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
            <h1 class="text-3xl font-bold text-center text-blue-500 dark:text-blue-400">Add a New Product</h1>
        </div>
    </header>
    <main class="container mx-auto p-4">
        <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg shadow-lg">
            <form action="{{ route('store_product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-lg font-medium text-zinc-700 dark:text-zinc-300 mb-2">Product Name</label>
                    <input type="text" name="name" id="name" class="form-input mt-1 block w-full border border-zinc-300 dark:border-zinc-600 p-2 rounded-lg text-lg dark:bg-zinc-700">
                    @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-lg font-medium text-zinc-700 dark:text-zinc-300 mb-2">Product Price</label>
                    <input type="text" name="price" id="price" class="form-input mt-1 block w-full border border-zinc-300 dark:border-zinc-600 p-2 rounded-lg text-lg dark:bg-zinc-700">
                    @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-lg font-medium text-zinc-700 dark:text-zinc-300 mb-2">Product Image</label>
                    <input type="file" name="image" id="image" class="form-input mt-1 block w-full border border-zinc-300 dark:border-zinc-600 p-2 rounded-lg text-lg dark:bg-zinc-700">
                    @error('image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-lg transition-colors duration-300">Add Product</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>