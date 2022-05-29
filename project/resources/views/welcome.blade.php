@extends('layouts.app')

@section('content')
<section class="bg-gray-50 py-10">
    <div class="container max-w-screen-xl mx-auto px-4">

        <div class="flex flex-wrap -mx-4">
            <main class="md:w-3/4 px-4">

                <!--  COMPONENT: ITEM -->
                <article class="border border-gray-200 overflow-hidden bg-white shadow-sm rounded mb-5">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/4 border-r border-gray-200">
                            <img class="mx-auto" src="../images/items/1.jpg" alt="Product name text">
                        </div> <!-- col.// -->
                        <div class="md:w-3/4">
                            <div class="p-4">
                                <a class="float-right px-3 py-2 inline-block text-gray-400 border border-gray-300 rounded-md hover:bg-gray-100" href="#">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a href="#" class="hover:text-blue-600">
                                    GoPro HERO6 4K Action Camera - Black
                                </a>
                                <p class="mb-1">
                                    <span class="text-lg font-semibold text-black">$590.50</span>
                                    <del class="line-through text-sm text-gray-400"> $1128.00</del>
                                </p>

                                <div class="flex flex-wrap items-center space-x-2 mb-2">
                                    <img src="../images/misc/stars-active.svg" alt="">
                                    <b class="text-gray-300">•</b>
                                    <span class="ml-1 text-yellow-500">9.3</span>
                                    <b class="text-gray-300">•</b>
                                    <span class="text-green-500">Free shipping</span>
                                </div>

                                <p class="text-gray-500 mb-2">
                                    The largest GoPro Camera display yet. Electrical heart sensor. Re-engineered Digital Crown with haptic feedback. Entirely familiar, yet completely redesigned
                                </p>
                                <a class="text-blue-600 hover:text-blue-700" href="#">Details</a>

                            </div>
                        </div> <!-- col.// -->
                    </div> <!-- flex.// -->
                </article>
                <!--  COMPONENT: ITEM //END -->


                <!--  COMPONENT: ITEM -->
                <article class="border border-gray-200 overflow-hidden bg-white shadow-sm rounded mb-5">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/4 border-r border-gray-200">
                            <img class="mx-auto" src="../images/items/2.jpg" alt="Product name text">
                        </div> <!-- col.// -->
                        <div class="md:w-3/4">
                            <div class="p-4">
                                <a class="float-right px-3 py-2 inline-block text-gray-400 border border-gray-300 rounded-md hover:bg-gray-100" href="#">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a href="#" class="hover:text-blue-600">
                                    Canon Cmera EOS 2000, Black 10x zoom
                                </a>
                                <p class="mb-1">
                                    <span class="text-lg font-semibold text-black">$590.50</span>
                                    <del class="line-through text-sm text-gray-400"> $1128.00</del>
                                </p>

                                <div class="flex flex-wrap items-center space-x-2 mb-2">
                                    <img src="../images/misc/stars-active.svg" alt="">
                                    <b class="text-gray-300">•</b>
                                    <span class="ml-1 text-yellow-500">9.3</span>
                                    <b class="text-gray-300">•</b>
                                    <span class="text-green-500">Free shipping</span>
                                </div>

                                <p class="text-gray-500 mb-2">
                                    The largest Canon Camera display yet. Electrical heart sensor. Re-engineered Digital Crown with haptic feedback. Entirely familiar, yet completely redesigned
                                </p>
                                <a class="text-blue-600 hover:text-blue-700" href="#">Details</a>

                            </div>
                        </div> <!-- col.// -->
                    </div> <!-- flex.// -->
                </article>
                <!--  COMPONENT: ITEM //END -->


                <hr class="my-5">


                <!--  COMPONENT: ITEM 2 -->
                <article class="border border-gray-200 overflow-hidden bg-white shadow-sm rounded mb-5">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/4">
                            <img class="mx-auto" src="../images/items/10.jpg" alt="Product name text">
                        </div> <!-- col.// -->
                        <div class="md:w-2/4">
                            <div class="p-4">
                                <a href="#" class="hover:text-blue-600">
                                    Canon Cmera EOS 2000, Black 10x zoom
                                </a>
                                <div class="flex flex-wrap items-center space-x-2 mb-2">
                                    <img src="../images/misc/stars-active.svg" alt="">
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
                                    <span class="text-xl font-semibold text-black">$120.50</span>
                                    <del class="line-through text-sm text-gray-400"> $230.00</del>
                                </p>
                                <p class="text-green-500">Free Shipping</p>
                                <div class="my-3">
                                    <a class="px-4 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700" href="#"> Buy now </a>
                                    <a class="px-3 py-2 inline-block text-blue-600 border border-gray-300 rounded-md hover:bg-gray-100" href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>

                                <a class="font-medium text-blue-600 hover:text-blue-700" href="#">+ Add to compare</a>
                            </div>
                        </div> <!-- col.// -->
                    </div> <!-- flex.// -->
                </article>
                <!--  COMPONENT: ITEM 2 //END -->

                <!--  COMPONENT: ITEM 2 -->
                <article class="border border-gray-200 overflow-hidden bg-white shadow-sm rounded mb-5">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/4">
                            <img class="mx-auto" src="../images/items/12.jpg" alt="Product name text">
                        </div> <!-- col.// -->
                        <div class="md:w-2/4">
                            <div class="p-4">
                                <a href="#" class="hover:text-blue-600">
                                    Mens T-shirt Cotton Base Layer Slim
                                </a>
                                <div class="flex flex-wrap items-center space-x-2 mb-2">
                                    <img src="../images/misc/stars-active.svg" alt="">
                                    <b class="text-gray-300">•</b>
                                    <span class="ml-1 text-yellow-500">9.3</span>
                                </div>
                                <p class="text-gray-500 mb-2">
                                    The largest Canon Camera display yet. Electrical heart sensor. Re-engineered Digital Crown with haptic feedback. Entirely familiar, yet completely redesigned
                                </p>
                                <p class="space-y-2">
                                    <span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Cotton  </span>
                                    <span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Blue Color </span>
                                    <span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Summer wear </span>
                                    <span class="inline-block px-3 text-sm py-1 border border-gray-300 text-gray-400 rounded-full"> Original </span>
                                </p>
                            </div>
                        </div> <!-- col.// -->
                        <div class="md:w-1/4 border-t lg:border-t-0 lg:border-l border-gray-200">
                            <div class="p-5">
                                <p>
                                    <span class="text-xl font-semibold text-black">$190.99</span>
                                    <del class="line-through text-sm text-gray-400"> $890.00</del>
                                </p>
                                <p class="text-green-500">Free Shipping</p>
                                <div class="my-3">
                                    <a class="px-4 py-2 inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700" href="#"> Buy now </a>
                                    <a class="px-3 py-2 inline-block text-blue-600 border border-gray-300 rounded-md hover:bg-gray-100" href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                                <a class="font-medium text-blue-600 hover:text-blue-700" href="#">+ Add to compare</a>
                            </div>
                        </div> <!-- col.// -->
                    </div> <!-- flex.// -->
                </article>
                <!--  COMPONENT: ITEM 2 //END -->

            </main> <!-- col .// -->
            <aside class="md:w-1/4 px-3">

                <!--  COMPONENT: SIDEBAR -->
                <div class="px-6 py-4 border border-gray-200 bg-white rounded shadow-sm">
                    <h3 class="font-semibold mb-2">Category</h3>

                    <ul class="text-gray-500 space-y-1">
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Electronics </a></li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Watches </a></li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Cinema </a></li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Clothes </a></li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Home items </a></li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Smartwatches </a></li>
                    </ul>
                    <hr class="my-4">

                    <h3 class="font-semibold mb-2">Filter by</h3>
                    <ul class="space-y-1">
                        <li>
                            <label class="flex items-center">
                                <input name="" type="checkbox" checked="" class="h-4 w-4">
                                <span class="ml-2 text-gray-500"> Samsung </span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center">
                                <input name="" type="checkbox" checked="" class="h-4 w-4">
                                <span class="ml-2 text-gray-500"> Huawei </span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center">
                                <input name="" type="checkbox" class="h-4 w-4">
                                <span class="ml-2 text-gray-500"> Tesla model </span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center">
                                <input name="" type="checkbox" class="h-4 w-4">
                                <span class="ml-2 text-gray-500"> Best brand </span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center">
                                <input name="" type="checkbox" class="h-4 w-4">
                                <span class="ml-2 text-gray-500"> Other brands </span>
                            </label>
                        </li>
                    </ul>
                    <hr class="my-4">
                    <h3 class="font-semibold mb-2">Sort by</h3>
                    <ul class="space-y-1">
                        <li>
                            <label class="flex items-center">
                                <input name="myselection" type="radio" checked="" class="h-4 w-4">
                                <span class="ml-2 text-gray-500"> Lightblue </span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center">
                                <input name="myselection" type="radio" class="h-4 w-4">
                                <span class="ml-2 text-gray-500"> Orange </span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center">
                                <input name="myselection" type="radio" class="h-4 w-4">
                                <span class="ml-2 text-gray-500"> Silver </span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center">
                                <input name="myselection" type="radio" class="h-4 w-4">
                                <span class="ml-2 text-gray-500"> Darkblue </span>
                            </label>
                        </li>

                    </ul>
                </div>
                <!--  COMPONENT: SIDEBAR //END -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->

    </div> <!-- container.// -->
</section>
@endsection
