<x-main-layout>
    <x-navbar/>

    <!-- Hero Start -->
    <section class="relative overflow-hidden md:h-screen flex items-center md:py-0 py-36 bg-cyan-100 dark:bg-cyan-500/20 bg-[url('../../public/assets/images/bg/bg3.png')] bg-no-repeat bg-top bg-cover">
        <div class="container relative">
            <div class="grid grid-cols-1 items-center mt-10">
                <div class="md:text-start text-center">
                    <h1 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">We will find a perfect <br> home for you</h1>
                    <p class="text-xl max-w-xl">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>

                    <div class="relative flex mt-8">
                        <div class="lg:w-5/6 w-full">
                            <ul class="inline-block sm:w-fit w-full flex-wrap justify-center text-center p-4 bg-white dark:bg-slate-900 rounded-t-xl border-b dark:border-gray-800" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                                <li role="presentation" class="inline-block">
                                    <button class="px-6 py-2 text-base font-medium rounded-md w-full hover:text-green-600 transition-all duration-500 ease-in-out" id="buy-home-tab" data-tabs-target="#buy-home" type="button" role="tab" aria-controls="buy-home" aria-selected="true">Buy</button>
                                </li>
                                <li role="presentation" class="inline-block">
                                    <button class="px-6 py-2 text-base font-medium rounded-md w-full transition-all duration-500 ease-in-out" id="sell-home-tab" data-tabs-target="#sell-home" type="button" role="tab" aria-controls="sell-home" aria-selected="false">Sell</button>
                                </li>
                                <li role="presentation" class="inline-block">
                                    <button class="px-6 py-2 text-base font-medium rounded-md w-full transition-all duration-500 ease-in-out" id="rent-home-tab" data-tabs-target="#rent-home" type="button" role="tab" aria-controls="rent-home" aria-selected="false">Rent</button>
                                </li>
                            </ul>

                            <div id="StarterContent" class="p-6 bg-white dark:bg-slate-900 rounded-ss-none rounded-se-none md:rounded-se-xl rounded-xl shadow-md dark:shadow-gray-700">
                                <div class="" id="buy-home" role="tabpanel" aria-labelledby="buy-home-tab">
                                    <form action="#">
                                        <div class="registration-form text-dark text-start">
                                            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                                <div>
                                                    <label class="form-label font-medium text-slate-900 dark:text-white">Search : <span class="text-red-600">*</span></label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-search icons"></i>
                                                        <input name="name" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Search your keaywords">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="buy-properties" class="form-label font-medium text-slate-900 dark:text-white">Select Categories:</label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-estate icons"></i>
                                                        <select class="form-select z-2" data-trigger name="choices-catagory" id="choices-catagory-buy" aria-label="Default select example">
                                                            <option>Houses</option>
                                                            <option>Apartment</option>
                                                            <option>Offices</option>
                                                            <option>Townhome</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="buy-min-price" class="form-label font-medium text-slate-900 dark:text-white">Budget :</label>
                                                    <div class="filter-search-form relative mt-2">
                                                        <i class="uil uil-usd-circle icons"></i>
                                                        <select class="form-select" data-trigger name="choices-min-price" id="choices-min-price-buy" aria-label="Default select example">
                                                            <option>Budget</option>
                                                            <option>500</option>
                                                            <option>1000</option>
                                                            <option>2000</option>
                                                            <option>3000</option>
                                                            <option>4000</option>
                                                            <option>5000</option>
                                                            <option>6000</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="md:mt-8">
                                                    <input type="submit" id="search-buy" name="search" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-[60px] rounded lg:rounded-none" value="Search">
                                                </div>
                                            </div><!--end grid-->
                                        </div><!--end container-->
                                    </form>
                                </div>

                                <div class="hidden" id="sell-home" role="tabpanel" aria-labelledby="sell-home-tab">
                                    <form action="#">
                                        <div class="registration-form text-dark ltr:text-start rtl:text-end">
                                            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                                <div>
                                                    <label class="form-label font-medium text-slate-900 dark:text-white">Search : <span class="text-red-600">*</span></label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-search icons"></i>
                                                        <input name="name" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Search your keaywords">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="buy-properties" class="form-label font-medium text-slate-900 dark:text-white">Select Categories:</label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-estate icons"></i>
                                                        <select class="form-select z-2" data-trigger name="choices-catagory" id="choices-catagory-sell" aria-label="Default select example">
                                                            <option>Houses</option>
                                                            <option>Apartment</option>
                                                            <option>Offices</option>
                                                            <option>Townhome</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="buy-min-price" class="form-label font-medium text-slate-900 dark:text-white">Budget :</label>
                                                    <div class="filter-search-form relative mt-2">
                                                        <i class="uil uil-usd-circle icons"></i>
                                                        <select class="form-select" data-trigger name="choices-min-price" id="choices-min-price-sell" aria-label="Default select example">
                                                            <option>Budget</option>
                                                            <option>500</option>
                                                            <option>1000</option>
                                                            <option>2000</option>
                                                            <option>3000</option>
                                                            <option>4000</option>
                                                            <option>5000</option>
                                                            <option>6000</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="md:mt-8">
                                                    <input type="submit" id="search-sell" name="search" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-[60px] rounded lg:rounded-none" value="Search">
                                                </div>
                                            </div><!--end grid-->
                                        </div><!--end container-->
                                    </form>
                                </div>

                                <div class="hidden" id="rent-home" role="tabpanel" aria-labelledby="rent-home-tab">
                                    <form action="#">
                                        <div class="registration-form text-dark ltr:text-start rtl:text-end">
                                            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                                <div>
                                                    <label class="form-label font-medium text-slate-900 dark:text-white">Search : <span class="text-red-600">*</span></label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-search icons"></i>
                                                        <input name="name" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Search your keaywords">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="buy-properties" class="form-label font-medium text-slate-900 dark:text-white">Select Categories:</label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-estate icons"></i>
                                                        <select class="form-select z-2" data-trigger name="choices-catagory" id="choices-catagory-rent" aria-label="Default select example">
                                                            <option>Houses</option>
                                                            <option>Apartment</option>
                                                            <option>Offices</option>
                                                            <option>Townhome</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="buy-min-price" class="form-label font-medium text-slate-900 dark:text-white">Budget :</label>
                                                    <div class="filter-search-form relative mt-2">
                                                        <i class="uil uil-usd-circle icons"></i>
                                                        <select class="form-select" data-trigger name="choices-min-price" id="choices-min-price-rent" aria-label="Default select example">
                                                            <option>Budget</option>
                                                            <option>500</option>
                                                            <option>1000</option>
                                                            <option>2000</option>
                                                            <option>3000</option>
                                                            <option>4000</option>
                                                            <option>5000</option>
                                                            <option>6000</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="md:mt-8">
                                                    <input type="submit" id="search-rent" name="search" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-[60px] rounded lg:rounded-none" value="Search">
                                                </div>
                                            </div><!--end grid-->
                                        </div><!--end container-->
                                    </form>
                                </div>
                            </div>
                        </div><!--end grid-->
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Start -->
    <section class="relative lg:py-24 py-16">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-5">
                    <div class="relative">
                        <img src="assets/images/about.jpg" class="rounded-xl shadow-md" alt="">
                        <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                               class="lightbox size-20 rounded-full shadow-md dark:shadow-gyay-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-green-600">
                                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="md:col-span-7">
                    <div class="lg:ms-4">
                        <h4 class="mb-6 md:text-3xl text-2xl lg:leading-normal leading-normal font-semibold">Efficiency. Transparency. <br> Control.</h4>
                        <p class="text-slate-400 max-w-xl">Hously developed a platform for the Real Estate marketplace that allows buyers and sellers to easily execute a transaction on their own. The platform drives efficiency, cost transparency and control into the hands of the consumers. Hously is Real Estate Redefined.</p>

                        <div class="mt-4">
                            <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md mt-3">Learn More </a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container relative lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">How It Works</h3>

                <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <!-- Content -->
                <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="size-32 fill-green-600/5 mx-auto"></i>
                        <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-estate"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Evaluate Property</h5>
                        <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="size-32 fill-green-600/5 mx-auto"></i>
                        <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-bag"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Meeting with Agent</h5>
                        <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="size-32 fill-green-600/5 mx-auto"></i>
                        <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-key-skeleton"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Close the Deal</h5>
                        <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
                <!-- Content -->
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start CTA -->
    <section class="relative py-24 bg-[url('../../public/assets/images/bg/01.jpg')] bg-no-repeat bg-center bg-fixed bg-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="container relative">
            <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                <div class="lg:col-start-2 lg:col-span-10">
                    <div class="grid md:grid-cols-3 grid-cols-1 items-center">

                        <div class="counter-box text-center">
                            <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value" data-target="1548">1010</span>+</h1>
                            <h5 class="counter-head text-white text-lg font-medium">Properties Sell</h5>
                        </div><!--end counter box-->


                        <div class="counter-box text-center">
                            <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value" data-target="25">2</span>+</h1>
                            <h5 class="counter-head text-white text-lg font-medium">Award Gained</h5>
                        </div><!--end counter box-->


                        <div class="counter-box text-center">
                            <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value" data-target="9">0</span>+</h1>
                            <h5 class="counter-head text-white text-lg font-medium">Years Experience</h5>
                        </div><!--end counter box-->
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End CTA -->

    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Listing Categories</h3>

                <p class="text-slate-400 max-w-xl">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 mt-8 md:gap-[30px] gap-3">
                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <img src="assets/images/property/residential.jpg" alt="">
                    <div class="p-4">
                        <a href="" class="text-xl font-medium hover:text-green-600">Residential</a>
                        <p class="text-slate-400 text-sm mt-1">46 Listings</p>
                    </div>
                </div><!--end content-->

                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <img src="assets/images/property/land.jpg" alt="">
                    <div class="p-4">
                        <a href="" class="text-xl font-medium hover:text-green-600">Land</a>
                        <p class="text-slate-400 text-sm mt-1">124 Listings</p>
                    </div>
                </div><!--end content-->

                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <img src="assets/images/property/commercial.jpg" alt="">
                    <div class="p-4">
                        <a href="" class="text-xl font-medium hover:text-green-600">Commercial</a>
                        <p class="text-slate-400 text-sm mt-1">265 Listings</p>
                    </div>
                </div><!--end content-->

                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <img src="assets/images/property/industrial.jpg" alt="">
                    <div class="p-4">
                        <a href="" class="text-xl font-medium hover:text-green-600">Industrial</a>
                        <p class="text-slate-400 text-sm mt-1">452 Listings</p>
                    </div>
                </div><!--end content-->

                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <img src="assets/images/property/investment.jpg" alt="">
                    <div class="p-4">
                        <a href="" class="text-xl font-medium hover:text-green-600">Investment</a>
                        <p class="text-slate-400 text-sm mt-1">12 Listings</p>
                    </div>
                </div><!--end content-->
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container relative lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Featured Properties</h3>

                <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px] mt-8">
                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 w-full mx-auto">
                    <div class="md:flex">
                        <div class="relative md:shrink-0">
                            <img class="size-full object-cover md:w-48" src="assets/images/property/5.jpg" alt="">
                            <div class="absolute top-4 end-4">
                                <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                            </div>
                        </div>
                        <div class="p-6 w-full">
                            <div class="md:pb-4 pb-6">
                                <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">710 BOYD DR, Unit #1102, Baton Rouge, LA 70808, USA</a>
                            </div>

                            <ul class="md:py-4 py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center me-4">
                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center me-4">
                                    <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="md:pt-4 pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$5000</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 w-full mx-auto">
                    <div class="md:flex">
                        <div class="relative md:shrink-0">
                            <img class="size-full object-cover md:w-48" src="assets/images/property/6.jpg" alt="">
                            <div class="absolute top-4 end-4">
                                <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                            </div>
                        </div>
                        <div class="p-6 w-full">
                            <div class="md:pb-4 pb-6">
                                <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">5133 MCLAIN WAY, Baton Rouge, LA 70809, USA</a>
                            </div>

                            <ul class="md:py-4 py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center me-4">
                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center me-4">
                                    <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="md:pt-4 pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$5000</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 w-full mx-auto">
                    <div class="md:flex">
                        <div class="relative md:shrink-0">
                            <img class="size-full object-cover md:w-48" src="assets/images/property/7.jpg" alt="">
                            <div class="absolute top-4 end-4">
                                <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                            </div>
                        </div>
                        <div class="p-6 w-full">
                            <div class="md:pb-4 pb-6">
                                <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">2141 Fiero Street, Baton Rouge, LA 70808</a>
                            </div>

                            <ul class="md:py-4 py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center me-4">
                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center me-4">
                                    <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="md:pt-4 pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$5000</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 w-full mx-auto">
                    <div class="md:flex">
                        <div class="relative md:shrink-0">
                            <img class="size-full object-cover md:w-48" src="assets/images/property/8.jpg" alt="">
                            <div class="absolute top-4 end-4">
                                <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                            </div>
                        </div>
                        <div class="p-6 w-full">
                            <div class="md:pb-4 pb-6">
                                <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">9714 Inniswold Estates Ave, Baton Rouge, LA 70809</a>
                            </div>

                            <ul class="md:py-4 py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center me-4">
                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center me-4">
                                    <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="md:pt-4 pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$5000</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 w-full mx-auto">
                    <div class="md:flex">
                        <div class="relative md:shrink-0">
                            <img class="size-full object-cover md:w-48" src="assets/images/property/9.jpg" alt="">
                            <div class="absolute top-4 end-4">
                                <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                            </div>
                        </div>
                        <div class="p-6 w-full">
                            <div class="md:pb-4 pb-6">
                                <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">1433 Beckenham Dr, Baton Rouge, LA 70808, USA</a>
                            </div>

                            <ul class="md:py-4 py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center me-4">
                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center me-4">
                                    <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="md:pt-4 pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$5000</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 w-full mx-auto">
                    <div class="md:flex">
                        <div class="relative md:shrink-0">
                            <img class="size-full object-cover md:w-48" src="assets/images/property/10.jpg" alt="">
                            <div class="absolute top-4 end-4">
                                <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                            </div>
                        </div>
                        <div class="p-6 w-full">
                            <div class="md:pb-4 pb-6">
                                <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">1574 Sharlo Ave, Baton Rouge, LA 70820, USA</a>
                            </div>

                            <ul class="md:py-4 py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center me-4">
                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center me-4">
                                    <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="md:pt-4 pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$5000</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 w-full mx-auto">
                    <div class="md:flex">
                        <div class="relative md:shrink-0">
                            <img class="size-full object-cover md:w-48" src="assets/images/property/11.jpg" alt="">
                            <div class="absolute top-4 end-4">
                                <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                            </div>
                        </div>
                        <div class="p-6 w-full">
                            <div class="md:pb-4 pb-6">
                                <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">2528 BOCAGE LAKE DR, Baton Rouge, LA 70809, USA</a>
                            </div>

                            <ul class="md:py-4 py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center me-4">
                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center me-4">
                                    <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="md:pt-4 pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$5000</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 w-full mx-auto">
                    <div class="md:flex">
                        <div class="relative md:shrink-0">
                            <img class="size-full object-cover md:w-48" src="assets/images/property/12.jpg" alt="">
                            <div class="absolute top-4 end-4">
                                <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                            </div>
                        </div>
                        <div class="p-6 w-full">
                            <div class="md:pb-4 pb-6">
                                <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">1533 NICHOLSON DR, Baton Rouge, LA 70802, USA</a>
                            </div>

                            <ul class="md:py-4 py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center me-4">
                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                    <span>8000sqf</span>
                                </li>

                                <li class="flex items-center me-4">
                                    <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                    <span>4 Beds</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                    <span>4 Baths</span>
                                </li>
                            </ul>

                            <ul class="md:pt-4 pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">$5000</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--en grid-->

            <div class="md:flex justify-center text-center mt-6">
                <div class="md:w-full">
                    <a href="list.html" class="btn btn-link text-green-600 hover:text-green-600 after:bg-green-600 transition duration-500">View More Properties <i class="uil uil-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div><!--end container-->

        <div class="container relative lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Client Say ?</h3>

                <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
            </div><!--end grid-->

            <div class="flex justify-center relative mt-16">
                <div class="relative lg:w-1/3 md:w-1/2 w-full">
                    <div class="absolute -top-20 md:-start-24 -start-0">
                        <i class="mdi mdi-format-quote-open text-9xl opacity-5"></i>
                    </div>

                    <div class="absolute bottom-28 md:-end-24 -end-0">
                        <i class="mdi mdi-format-quote-close text-9xl opacity-5"></i>
                    </div>

                    <div class="tiny-single-item">
                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl text-slate-400 italic"> " Hously made the processes so easy. Hously instantly increased the amount of interest and ultimately saved us over $10,000. " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/01.jpg" class="size-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl text-slate-400 italic"> " I highly recommend Hously as the new way to sell your home "by owner". My home sold in 24 hours for the asking price. Best $400 you could spend to sell your home. " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/02.jpg" class="size-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl text-slate-400 italic"> " My favorite part about selling my home myself was that we got to meet and get to know the people personally. This made it so much more enjoyable! " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/03.jpg" class="size-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl text-slate-400 italic"> " Great experience all around! Easy to use and efficient. " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/04.jpg" class="size-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl text-slate-400 italic"> " Hously made selling my home easy and stress free. They went above and beyond what is expected. " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/05.jpg" class="size-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl text-slate-400 italic"> " Hously is fair priced, quick to respond, and easy to use. I highly recommend their services! " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/06.jpg" class="size-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container relative lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Meet The Agent Team</h3>

                <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
            </div><!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                <div class="lg:col-span-3 md:col-span-6">
                    <div class="group text-center">
                        <div class="relative inline-block mx-auto size-52 rounded-full overflow-hidden">
                            <img src="assets/images/client/04.jpg" class="" alt="">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black size-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out"></div>

                            <ul class="list-none absolute start-0 end-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                <li class="inline"><a href="" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="facebook" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="instagram" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="linkedin" class="size-4"></i></a></li>
                            </ul><!--end icon-->
                        </div>

                        <div class="content mt-3">
                            <a href="agent-profile.html" class="text-xl font-medium hover:text-green-600 transition-all duration-500 ease-in-out">Jack John</a>
                            <p class="text-slate-400">Property Broker</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3 md:col-span-6">
                    <div class="group text-center">
                        <div class="relative inline-block mx-auto size-52 rounded-full overflow-hidden">
                            <img src="assets/images/client/05.jpg" class="" alt="">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black size-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out"></div>

                            <ul class="list-none absolute start-0 end-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                <li class="inline"><a href="" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="facebook" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="instagram" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="linkedin" class="size-4"></i></a></li>
                            </ul><!--end icon-->
                        </div>

                        <div class="content mt-3">
                            <a href="agent-profile.html" class="text-xl font-medium hover:text-green-600 transition-all duration-500 ease-in-out">Krista John</a>
                            <p class="text-slate-400">Property Broker</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3 md:col-span-6">
                    <div class="group text-center">
                        <div class="relative inline-block mx-auto size-52 rounded-full overflow-hidden">
                            <img src="assets/images/client/06.jpg" class="" alt="">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black size-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out"></div>

                            <ul class="list-none absolute start-0 end-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                <li class="inline"><a href="" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="facebook" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="instagram" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="linkedin" class="size-4"></i></a></li>
                            </ul><!--end icon-->
                        </div>

                        <div class="content mt-3">
                            <a href="agent-profile.html" class="text-xl font-medium hover:text-green-600 transition-all duration-500 ease-in-out">Roger Jackson</a>
                            <p class="text-slate-400">Property Broker</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3 md:col-span-6">
                    <div class="group text-center">
                        <div class="relative inline-block mx-auto size-52 rounded-full overflow-hidden">
                            <img src="assets/images/client/07.jpg" class="" alt="">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black size-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out"></div>

                            <ul class="list-none absolute start-0 end-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                <li class="inline"><a href="" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="facebook" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="instagram" class="size-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i data-feather="linkedin" class="size-4"></i></a></li>
                            </ul><!--end icon-->
                        </div>

                        <div class="content mt-3">
                            <a href="agent-profile.html" class="text-xl font-medium hover:text-green-600 transition-all duration-500 ease-in-out">Johnny English</a>
                            <p class="text-slate-400">Property Broker</p>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container relative lg:mt-24 mt-16">
            <div class="grid grid-cols-1 text-center">
                <h3 class="mb-6 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Have Question ? Get in touch!</h3>

                <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>

                <div class="mt-6">
                    <a href="contact.html" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md"><i class="uil uil-phone align-middle me-2"></i> Contact us</a>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <x-footer/>
</x-main-layout>
