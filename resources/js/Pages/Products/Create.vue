<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="Product">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="flex flex-wrap bg-white p-6 rounded-lg shadow-md border">
            <div class="w-full lg:w-2/3 p-3">
                <div class="bg-white p-6 rounded-lg shadow-md border mb-4">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-white-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Drop photo/video</span> to upload</p>
                            <!-- <p class="textsm text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p> -->
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>

            <div class="flex space-x-6 mt-6">
                <div class="flex-1 pr-4">
                    <label for="ProductName" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input
                        type="text"
                        id="ProductName"
                        placeholder="Enter product name"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm px-2 py-2"
                    />
                </div>
                <div class="flex-1 pl-4">
                    <label for="Category" class="block text-sm font-medium text-gray-700">Choose Category</label>
                    <div class="relative">
                        <button id="dropdownHoverButton" aria-haspopup="true" aria-expanded="false" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full">
                            - Category -
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownHover" class="z-10 hidden absolute bg-white divide-y divide-gray-100 rounded-lg shadow w-44 mt-1 dark:bg-gray-700" aria-labelledby="dropdownHoverButton">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

                    <div class="flex space-x-6 mt-6">
                        <div class="flex-1 pr-4">
                            <label for="Tier" class="block text-sm font-medium text-gray-700">Choose Tier</label>
                            <input
                                type="text"
                                id="Tier"
                                placeholder="Select tier"
                                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm px-2 py-2"
                            />
                        </div>
                        <div class="flex-1 pl-4">
                            <label for="DateValid" class="block text-sm font-medium text-gray-700">Date Valid</label>
                            <input
                                type="text"
                                id="DateValid"
                                placeholder="dd/mm/yy"
                                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm px-2 py-2"
                            />
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="Caption" class="block text-sm font-medium text-gray-700">Caption</label>
                        <textarea id="Caption" placeholder="Enter caption..." class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm px-2 py-2 resize-none" rows="4"></textarea>
                    </div>

                    <div class="mt-6 flex justify-start">
                        <button class="p-2 px-4 bg-gray-300 text-white rounded-lg mr-2 text-sm">Cancel</button>
                        <button class="p-2 px-4 bg-blue-500 text-white rounded-lg text-sm">Save</button>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/3 p-3">
                <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                    <h3 class="text-xl font-bold mb-4">All Categories</h3>
                    <ul class="mb-6">
                        <li class="flex justify-between py-2 border-b mb-6"><span>Eyezen</span><span>10</span></li>
                        <li class="flex justify-between py-2 border-b mb-6"><span>Varilux</span><span>12</span></li>
                        <li class="flex justify-between py-2 border-b mb-6"><span>Stellest</span><span>23</span></li>
                        <li class="flex justify-between py-2 border-b mb-6"><span>Categories 4</span><span>31</span></li>
                    </ul>
                    <input type="text" placeholder="Category Name" class="w-full p-3 border rounded-lg mb-4">
                    <button class="w-full p-3 mb-2 bg-gray-300 text-white rounded-lg">Cancel</button>
                    <button class="w-full p-3 bg-blue-500 text-white rounded-lg">Save</button>
                </div>
            </div>
        </div>
    </AppLayout>
</template>



