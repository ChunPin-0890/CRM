<script setup>
import AppLayout from '@/Layouts/UserAppLayout.vue';
import { AkChevronLeft } from '@kalimahapps/vue-icons';
const glasses1 = '/mnt/data/image.png'; // Updated to use the uploaded image
</script>

<template>
    <AppLayout title="Product">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <div class="w-full bg-white p-6 rounded-lg shadow">
            <button class="mb-4 text-yellow-500 flex items-center">
                <AkChevronLeft class="w-5 h-5 mr-2"/>Back
            </button>

            <div class="flex flex-col lg:flex-row bg-white p-6 rounded-lg">
                <img :src="glasses1" alt="Product Image" class="w-full lg:w-1/3 rounded-lg mb-4 lg:mb-0 lg:mr-6 object-cover">
                <div class="flex-grow">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-xl font-bold">Name: Eyezen 123</h3>
                    </div>
                    <span class="text-gray-500">Category: Eyezen</span>
                    <p>Date Valid: 20-06-2024</p>
                    <p class="font-bold mt-4">Caption:</p>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur. Non duis turpis bibendum lectus lacus amet
                        massa sed. Ipsum nunc felis odio ullamcorper libero aliquam massa. Lacus nulla eu
                        donec integer pellentesque. Magna urna odio ac a suspendisse. Etiam quis faucibus
                        facilisis sollicitudin. Accumsan neque vestibulum arcu pharetra aliquam consequat non.
                        Semper eu sit ipsum adipiscing lectus volutpat urna. Pellentesque amet quis amet ut
                        habitasse eget. Nibh nisi egestas tristique duis gravida. Venenatis purus commodo
                        varius quam condimentum faucibus vestibulum congue. Lectus cursus magnis cras
                        tortor eget fermentum ac feugiat. Nisi pulvinar tortor tempor dictum ipsum. Tortor
                        euismod sed dolor pellentesque auctor elementum donec tellus.</p>

                    <p class="text-gray-600 mt-4">
                        Suscipit lorem faucibus magna porttitor in est sit. Egestas pharetra dolor quam non eu in
                        venenatis. Bibendum pretium cras nec eget quam. Natoque euismod mauris mattis sed
                        lacinia morbi tortor. Elit mus malesuada elementum arcu felis volutpat velit. Risus in duis
                        fermentum lacus urna. Eu volutpat dictumst leo fusce purus sed tempus. Est ante
                        blandit.</p>
                </div>
            </div>

            <div class="flex justify-end space-x-4 mt-6">
                <button class="bg-white  border border-yellow-500 text-yellow-500 py-2 px-4 rounded">Copy</button>
                <button class="bg-yellow-500 text-white py-2 px-4 rounded">Post</button>
            </div>
        </div>
    </AppLayout>
</template>
