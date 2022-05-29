<div>
    <section class="py-5 sm:py-7 bg-blue-100">
        <div class="container max-w-screen-xl mx-auto px-4">
            <!-- breadcrumbs start -->
            <h2 class="text-3xl font-semibold mb-2">Shopping cart</h2>

        </div><!-- /.container -->
    </section>

    <section class="py-10">
        <div class="container max-w-screen-xl mx-auto px-4">

            <div class="flex flex-col md:flex-row gap-4">
                <main class="md:w-3/4">

                    <article class="border border-gray-200 bg-white shadow-sm rounded mb-5 p-3 lg:p-5">

                        <!-- item-cart -->
                        @foreach(\App\Facades\MyCart::content()['items'] as $key => $item)
                        <div class="flex flex-wrap lg:flex-row gap-5  mb-4">
                            <div class="w-full lg:w-2/5 xl:w-2/4">
                                <figure class="flex leading-5">
                                    <div>
                                        <div class="block w-16 h-16 rounded border border-gray-200 overflow-hidden">
                                            <img src="/images/items/1.jpg" alt="Title">
                                        </div>
                                    </div>
                                    <figcaption class="ml-3">
                                        <p><a href="#" class="hover:text-blue-600">{{ $item['name'] }}</a></p>
                                        <p class="mt-1 text-gray-400"> Color: Yellow, Type: Jeans </p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="">
                                <!-- selection -->
                                <div class="relative">

                                    <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                        <a class="px-4 py-2 inline-block text-red-600 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100" href="#" wire:click="dec('{{ $key }}')">  - </a>
                                        <input type="number" class="text-center w-20 border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full" placeholder="" value="{{ $item['quantity'] }}" disabled>
                                        <a class="px-4 py-2 inline-block text-red-600 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100" href="#" wire:click="inc('{{ $key }}')">  + </a>
                                    </div>

                                </div>
                                <!-- selection .//end -->
                            </div>
                            <div>
                                <div class="leading-5">
                                    <p class="font-semibold not-italic">{{ $item['price_with_tax_total'] }}</p>
                                    <small class="text-gray-400"> {{ $item['price_with_tax'] }} / per item </small>
                                </div>
                            </div>
                            <div class="flex-auto">
                                <div class="float-right">
                                    <a class="px-4 py-2 inline-block text-red-600 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100" href="#" wire:click="remove('{{ $key }}')">  Remove </a>
                                </div>
                            </div>
                        </div> <!-- item-cart end// -->

                        <hr class="my-4">
                        @endforeach

                        <h6 class="font-bold">Free Delivery within 1-2 weeks</h6>
                        <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>

                    </article> <!-- card end.// -->

                </main>
                <aside class="md:w-1/4">

                    <article class="border border-gray-200 bg-white shadow-sm rounded mb-5 p-3 lg:p-5">

                        <ul class="mb-5">
                            <li class="flex justify-between text-gray-600  mb-1">
                                <span>Total price:</span>
                                <span>{{ \App\Facades\MyCart::total(true) }}</span>
                            </li>
{{--                            <li class="flex justify-between text-gray-600  mb-1">--}}
{{--                                <span>Discount:</span>--}}
{{--                                <span class="text-green-500">- $60.00</span>--}}
{{--                            </li>--}}
                            <li class="flex justify-between text-gray-600  mb-1">
                                <span>TAX:</span>
                                <span>{{ \App\Facades\MyCart::tax() }}</span>
                            </li>
                            <li class="text-lg font-bold border-t flex justify-between mt-3 pt-3">
                                <span>Total price:</span>
                                <span>{{ \App\Facades\MyCart::total(true) }}</span>
                            </li>
                        </ul>

                        <a class="px-4 py-3 mb-2 inline-block text-lg w-full text-center font-medium text-white bg-green-600 border border-transparent rounded-md hover:bg-green-700" href="/checkout"> Checkout </a>

                        <a class="px-4 py-3 inline-block text-lg w-full text-center font-medium text-green-600 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100" href="/"> Back to shop </a>

                    </article> <!-- card end.// -->

                </aside> <!-- col.// -->
            </div> <!-- grid.// -->

        </div>
    </section>
</div>
