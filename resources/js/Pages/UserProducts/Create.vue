<script setup>
import AppLayout from '@/Layouts/UserAppLayout.vue';
const glasses1 = 'img/essilor.png';
</script>

<template>
    <AppLayout title="Product">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="grid grid-cols-1 p-6 gap-4 bg-white rounded-lg shadow-md border lg:grid-cols-3">
            <div class="lg:col-span-2 bg-white rounded-lg shadow border border-yellow-200">
             <div class="p-4">Admin Update Post</div>

                <div class="w-full bg-white rounded-lg mb-4">
                    <div class="flex flex-col lg:flex-row bg-white p-6 rounded-lg">
                        <img :src="glasses1" alt="Product Image" class="w-32 h-32 rounded-lg mr-0 lg:mr-6 mb-4 lg:mb-0">
                        <div class="flex-grow">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-bold">Product Name</h3>
                            <span class="text-gray-500">Date Valid</span>
                        </div>
                        <p>Categories</p>
                        <p>Tier</p>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur. In posuere metus accumsan elit massa commodo turpis eget risus. Aliquam leo at leo lectus massa et vulputate nec pulvinar.</p>
                        </div>
                    </div>
                </div>

                <div class="w-full bg-white rounded-lg mb-4">
                    <div class="flex flex-col lg:flex-row bg-white p-6 rounded-lg">
                        <img :src="glasses1" alt="Product Image" class="w-32 h-32 rounded-lg mr-0 lg:mr-6 mb-4 lg:mb-0">
                        <div class="flex-grow">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-bold">Product Name</h3>
                            <span class="text-gray-500">Date Valid</span>
                        </div>
                        <p>Categories</p>
                        <p>Tier</p>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur. In posuere metus accumsan elit massa commodo turpis eget risus. Aliquam leo at leo lectus massa et vulputate nec pulvinar.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg border border-yellow-200">
                <h3 class="text-xl font-bold mb-4">Latest Shared Post</h3>
                <div class="flex flex-col bg-white p-6 rounded-lg">
                    <div class="flex flex-col bg-white p-6 rounded-lg">
  <img :src="glasses1" alt="Product Image" class="w-full h-32 rounded-lg mb-4">
  <div class="flex-grow">
    <h3 class="text-xl font-bold flex items-center">Product Name</h3>
    <p>Categories</p>
    <p>Tier</p>
    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur. In posuere metus accumsan elit massa commodo turpis eget risus. Aliquam leo at leo lectus massa et vulputate nec pulvinar.</p>
    <div class="flex justify-between text-gray-500">
    </div>
  </div>
</div>
                </div></div>
        </div>
    </AppLayout>
</template>
