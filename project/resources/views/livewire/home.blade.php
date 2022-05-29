<section class="py-12">
    <div class="container max-w-screen-xl mx-auto px-4">

        <div class="flex flex-col md:flex-row -mx-4">
            <aside class="md:w-1/3 lg:w-1/4 px-4">
                <!-- filter wrap -->

                <a class="md:hidden mb-5  w-full text-center px-4 py-2 inline-block text-lg text-gray-700 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-600" href="#">
                    Filter by
                </a>

                <div class="hidden md:block px-6 py-4 border border-gray-200 bg-white rounded shadow-sm">
                    <h3 class="font-semibold mb-2">Category</h3>

                    <ul class="text-gray-500 space-y-1">
                        @foreach($categories as $category)
                        <li><a class="hover:text-blue-600 hover:underline" wire:click="$set('category', '{{ $category->id}}')">{{$category->name}} </a></li>
                        @endforeach
                    </ul>

                    <hr class="my-4">

                    <h3 class="font-semibold mb-2">Filter by</h3>
                    <ul class="space-y-1">
                        @foreach($brands as $brand)
                        <li>
                            <label class="flex items-center">
                                <input name="brands" wire:model="filterBrands" type="checkbox" value="{{ $brand->id }}" class="h-4 w-4">
                                <span class="ml-2 text-gray-500"> {{ $brand->name }} </span>
                            </label>
                        </li>
                        @endforeach
                    </ul>

                    <hr class="my-4">

                    <h3 class="font-semibold mb-2">Sort by</h3>
                    <ul class="space-y-1">
                        <li>
                            <label class="flex items-center">
                                <input name="myselection" type="radio" class="h-4 w-4">
                                <span class="ml-2 text-gray-500"> Name </span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center">
                                <input name="myselection" type="radio" class="h-4 w-4">
                                <span class="ml-2 text-gray-500"> Price </span>
                            </label>
                        </li>
                    </ul>

                </div>
                <!-- filter wrap -->
            </aside> <!-- col.// -->
            <main class="md:w-2/3 lg:w-3/4 px-3">


                <!-- COMPONENT: PRODUCT ITEM -->
                @foreach($products as $product)
                <article class="border border-gray-200 overflow-hidden bg-white shadow-sm rounded mb-5">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/4">
                            <img class="mx-auto" src="images/items/6.jpg" alt="Product name text">
                        </div> <!-- col.// -->
                        <div class="md:w-2/4">
                            <div class="p-4">
                                <a href="/product/{{ $product->slug }}" class="hover:text-blue-600">
                                    {{ $product->name }}
                                </a>
                                <div class="flex flex-wrap items-center space-x-2 mb-2">
                                    <img src="images/misc/stars-active.svg" alt="">
                                    <b class="text-gray-300">•</b>
                                    <span class="ml-1 text-yellow-500">9.3</span>
                                </div>
                                <p class="text-gray-500 mb-2">
                                    The largest Canon Camera display yet. Electrical heart sensor. Re-engineered Digital Crown with haptic feedback. Entirely familiar, yet completely redesigned
                                </p>
                                <p class="space-y-2">
                                    <span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Leather  </span>
                                    <span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Pink Color </span>
                                    <span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Retina Screen </span>
                                    <span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Original </span>
                                </p>
                            </div>
                        </div> <!-- col.// -->
                        <div class="md:w-1/4 border-t lg:border-t-0 lg:border-l border-gray-200">
                            <div class="p-5">
                                <p>
                                    <span class="text-xl font-semibold text-black">{{$product->product_price}}</span>
{{--                                    <del class="line-through text-sm text-gray-400"> $230.00</del>--}}
                                </p>
{{--                                <p class="text-green-500">Free Shipping</p>--}}
                                <div class="my-3">
                                    <a class="px-4 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700" href="#"> Buy now </a>
                                    <a class="px-3 py-2 inline-block text-blue-600 border border-gray-300 rounded-md hover:bg-gray-100" href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>

{{--                                <a class="font-medium text-blue-600 hover:text-blue-700" href="#">+ Add to compare</a>--}}
                            </div>
                        </div> <!-- col.// -->
                    </div> <!-- flex.// -->
                </article>
                @endforeach
                <!-- COMPONENT: PRODUCT ITEM //END -->

            </main>  <!-- col.// -->
        </div> <!-- grid.// -->

    </div> <!-- container .// -->
</section>
