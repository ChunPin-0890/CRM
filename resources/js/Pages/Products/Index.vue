<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
const glasses1 = 'img/essilor.png';
</script>

<template>
    <AppLayout title="Product">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="grid grid-cols-1 gap-4 p-6 bg-white rounded-lg shadow-md border lg:grid-cols-3">
            <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow border border-blue-100">
                <div class="flex flex-col lg:flex-row items-center justify-between mb-4">
    <!-- Left Side: Search Bar and Dropdown -->
    <div class="flex flex-col lg:flex-row items-center w-full lg:w-auto">
        <div class="flex items-center mb-4 lg:mb-0 relative w-full lg:w-auto mt-4 lg:mt-0">
            <input type="text" placeholder="Search Post" class="w-full lg:w-72 pl-4 pr-10 py-3 border-none outline-none bg-blue-50 text-gray-700 text-sm placeholder-blue-400">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px" class="absolute right-3 top-1/2 transform -translate-y-1/2 fill-blue-400">
                <path d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z"></path>
            </svg>
        </div>
        <select class="p-3 ml-0 lg:ml-4 border rounded-xl w-full lg:w-36 py-2 text-base text-white bg-blue-500">
            <option>Categories</option>
        </select>
    </div>
    <!-- Right Side: New Post Button -->
    <div class="mt-4 lg:mt-0">
        <a :href="route('products.create')" class="p-3 bg-blue-500 text-white rounded-lg">
            New Post
        </a>
    </div>
</div>

            <div class="scrollable-container overflow-y-auto max-h-[600px]">
                <div class="w-full bg-white rounded-lg mb-4 mt-5">
                    <div class="flex flex-col lg:flex-row bg-white rounded-lg">
                        <img :src="glasses1" alt="Product Image" class="w-32 h-32 rounded-lg mr-0 lg:mr-6 mb-4 lg:mb-0">
                        <div class="flex-grow bg-blue-50">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="text-xl font-bold flex items-center">Product Name
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 size-6 text-blue-500">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"></path>
                                </svg>
                                </h3>
                                <span class="text-gray-500">Date Valid</span>
                            </div>
                            <span class="text-gray-500">Categories</span><br>
                            <span class="text-gray-500">Tier</span>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur. In posuere metus accumsan elit massa commodo turpis eget risus. Aliquam leo at leo lectus massa et vulputate nec pulvinar.</p>
                        </div>
                    </div>
                </div>

                <div class="w-full bg-white rounded-lg mb-4 mt-5">
                    <div class="flex flex-col lg:flex-row bg-white rounded-lg">
                        <img :src="glasses1" alt="Product Image" class="w-32 h-32 rounded-lg mr-0 lg:mr-6 mb-4 lg:mb-0">
                        <div class="flex-grow bg-blue-50">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="text-xl font-bold flex items-center">Product Name
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 size-6 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"></path>
                                    </svg>
                                </h3>
                                <span class="text-gray-500">Date Valid</span>
                            </div>
                            <span class="text-gray-500">Categories</span><br>
                            <span class="text-gray-500">Tier</span>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur. In posuere metus accumsan elit massa commodo turpis eget risus. Aliquam leo at leo lectus massa et vulputate nec pulvinar.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg mb-4 mt-5">
                    <div class="flex flex-col lg:flex-row bg-white rounded-lg">
                        <img :src="glasses1" alt="Product Image" class="w-32 h-32 rounded-lg mr-0 lg:mr-6 mb-4 lg:mb-0">
                        <div class="flex-grow bg-blue-50">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="text-xl font-bold flex items-center">Product Name
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 size-6 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"></path>
                                    </svg>
                                </h3>
                                <span class="text-gray-500">Date Valid</span>
                            </div>
                            <span class="text-gray-500">Categories</span><br>
                            <span class="text-gray-500">Tier</span>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur. In posuere metus accumsan elit massa commodo turpis eget risus. Aliquam leo at leo lectus massa et vulputate nec pulvinar.</p>
                        </div>
                    </div>
                </div>
                
                <div class="w-full bg-white rounded-lg mb-4 mt-5">
                    <div class="flex flex-col lg:flex-row bg-white rounded-lg">
                        <img :src="glasses1" alt="Product Image" class="w-32 h-32 rounded-lg mr-0 lg:mr-6 mb-4 lg:mb-0">
                        <div class="flex-grow bg-blue-50">
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="text-xl font-bold flex items-center">Product Name
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 size-6 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"></path>
                                    </svg>
                                </h3>
                                <span class="text-gray-500">Date Valid</span>
                            </div>
                            <span class="text-gray-500">Categories</span><br>
                            <span class="text-gray-500">Tier</span>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur. In posuere metus accumsan elit massa commodo turpis eget risus. Aliquam leo at leo lectus massa et vulputate nec pulvinar.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow border border-blue-100">
                <h3 class="text-xl font-bold mb-4">All Categories</h3>
                <hr>
                <ul class="mb-6">
                    <li class="flex justify-between py-2 border-b mb-6"><span>Eyezen</span><span>10</span></li>
                    <li class="flex justify-between py-2 border-b mb-6"><span>Varilux</span><span>12</span></li>
                    <li class="flex justify-between py-2 border-b mb-6"><span>Stellest</span><span>23</span></li>
                    <li class="flex justify-between py-2 border-b mb-6"><span>Categories 4</span><span>31</span></li>
                </ul>
                <div class="p-4 rounded-lg mb-6 border border-blue-100">
                    <h4 class="text-lg font-semibold mb-2">Category Name</h4>
                    <input type="text" placeholder="" class="w-full border rounded-lg mb-2">
                    <button class="w-full p-3 mb-2 bg-gray-300 text-white rounded-lg mt-20">Cancel</button>
                    <button class="w-full p-3 bg-blue-500 text-white rounded-lg">Save</button>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style>
    /* Hide scrollbar for Chrome, Safari, and Opera */
    .scrollable-container::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for Firefox */
    .scrollable-container {
        scrollbar-width: none; /* Firefox */
    }
</style>
