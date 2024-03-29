@props(['product'])

<article {{ $attributes->merge(['class' => 'bg-black bg-opacity-70 text-gray-200 pt-2 mb-6 shadow-black shadow-md rounded-2xl']) }}>
    <div class="py-6 px-5">
        <div class="">
            <img src="/images/{{ $product->slug }}.jpg" alt="Blog Post illustration" class="rounded-xl mx-auto">
        </div>

        <div class="mt-8 flex flex-col justify-end">
            <header>
                <div class="space-x-2">
                    <a href="/gallery/?category={{ $product->category->slug }}" class="rounded-full border border-gray-300 px-3 py-1 text-xs font-semibold uppercase text-gray-300" style="font-size: 10px">{{ $product->category->name }}
                    </a>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/gallery/{{ $product->slug }}">
                            {{ ucwords($product->title) }}
                        </a>
                    </h1>

                    <span class="mt-2 block text-xs text-gray-400">
                        Published <time>{{ $product->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="mt-4 text-sm space-y-4">
                {!! $product->excerpt !!}
            </div>

            <footer class="mt-8 items-center justify-between">
                <div>
                    <a href="/gallery/{{ $product->slug }}" class="shadow-md shadow-black bg-opacity-70 bg-white hover:bg-opacity-70 hover:bg-gray-800 hover:text-gray-200 text-gray-800 font-semibold px-2 py-1 border border-gray-400 rounded">Read
                        More</a>
                </div>
            </footer>
        </div>
    </div>
</article>