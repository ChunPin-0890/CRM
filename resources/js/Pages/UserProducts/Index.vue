<script setup>
import { ref } from 'vue';
import AppLayout from '@/Layouts/UserAppLayout.vue';
const imagePath = '/mnt/data/image.png'; // Path to the uploaded image
</script>

<template>
    <AppLayout title="Latest Post">
        <div class="w-full bg-white p-6 rounded-lg shadow">
            <div class="flex justify-between items-center mb-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Latest Post
                </h2>
                <div class="flex items-center">
                    <div class="flex items-center mb-4 lg:mb-0 relative mt-4 lg:mt-0">
                            <input type="text" placeholder="Search Post" class="w-full lg:w-72 pl-4 pr-10 py-3 border-none outline-none bg-yellow-50 text-gray-700 text-sm placeholder-yellow-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px" class="absolute right-3 top-1/2 transform -translate-y-1/2 fill-yellow-400">
                                <path d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z"></path>
                            </svg>
                     </div>
                    <button class="bg-yellow-500 text-white py-2 px-4 rounded ml-4 flex-shrink-0 flex items-center">
                        <span>Categories</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="grid gap-6">
                <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                    <img :src="imagePath" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4 flex-grow">
                        <h3 class="text-xl font-bold">Product Name</h3>
                        <span class="text-gray-500">Categories</span>
                        <p class="text-gray-500">Date Valid</p>
                        <p class="text-gray-600 mt-4">Lorem ipsum dolor sit amet consectetur. In posuere metus accumsan elit massa commodo turpis eget risus. Aliquam leo at leo lectus massa et vulputate nec pulvinar. Maecenas amet fames condimentum at quam. Vel enim aliquet mollis molestie.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                    <img :src="imagePath" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4 flex-grow">
                        <h3 class="text-xl font-bold">Product Name</h3>
                        <span class="text-gray-500">Categories</span>
                        <p class="text-gray-500">Date Valid</p>
                        <p class="text-gray-600 mt-4">Lorem ipsum dolor sit amet consectetur. In posuere metus accumsan elit massa commodo turpis eget risus. Aliquam leo at leo lectus massa et vulputate nec pulvinar. Maecenas amet fames condimentum at quam. Vel enim aliquet mollis molestie.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                    <img :src="imagePath" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4 flex-grow">
                        <h3 class="text-xl font-bold">Product Name</h3>
                        <span class="text-gray-500">Categories</span>
                        <p class="text-gray-500">Date Valid</p>
                        <p class="text-gray-600 mt-4">Lorem ipsum dolor sit amet consectetur. In posuere metus accumsan elit massa commodo turpis eget risus. Aliquam leo at leo lectus massa et vulputate nec pulvinar. Maecenas amet fames condimentum at quam. Vel enim aliquet mollis molestie.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
                    <img :src="imagePath" alt="Product Image" class="w-full h-48 object-cover">
                    <div class="p-4 flex-grow">
                        <h3 class="text-xl font-bold">Product Name</h3>
                        <span class="text-gray-500">Categories</span>
                        <p class="text-gray-500">Date Valid</p>
                        <p class="text-gray-600 mt-4">Lorem ipsum dolor sit amet consectetur. In posuere metus accumsan elit massa commodo turpis eget risus. Aliquam leo at leo lectus massa et vulputate nec pulvinar. Maecenas amet fames condimentum at quam. Vel enim aliquet mollis molestie.</p>
                    </div>
                </div>
                <!-- Repeat the above block for other products -->
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
.search-input {
    background-color: #FFF9F2; /* Light yellow background */
    border: none; /* Remove default border */
    border-radius: 0.5rem; /* Rounded corners */
}

.search-input::placeholder {
    color: #B0BEC5; /* Light gray placeholder color */
}

.search-icon {
    color: #FBC02D; /* Yellow color for the icon */
}

.grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-auto-rows: minmax(100px, auto);
    gap: 1.5rem;
    grid-auto-flow: dense;
}

@media (min-width: 768px) {
    .grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.flex-grow {
    flex-grow: 1;
}
</style>

