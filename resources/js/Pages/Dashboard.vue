<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { ref } from 'vue';

const isChecked = ref(false);

const handleCheckboxChange = () => {
  isChecked.value = !isChecked.value;
};
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow border border-blue-200">
                    <div class="flex items-baseline">
                        <div class="text-7xl font-semibold mr-2">319</div>
                        <div class="text-base text-gray-600">last month</div>
                    </div>
                    <div class="mt-4 text-2xl flex items-center">
                        <span class="rounded-full bg-blue-100 p-6 text-blue-600 mr-3">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                fill="none" 
                                viewBox="0 0 24 24" 
                                stroke-width="1.5" 
                                stroke="currentColor" 
                                class="w-6 h-6"
                            >
                                <path 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" 
                                />
                            </svg>
                        </span>
                        Post Shared
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow  border border-blue-200">
                    <div class="flex items-baseline">
                        <div class="text-7xl font-semibold mr-2">69</div>
                        <div class="text-base text-gray-600">last month</div>
                    </div>
                    <div class="mt-4 text-2xl flex items-center">
                        <span class="rounded-full bg-blue-100 p-6 text-blue-600 mr-3">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"
                                />
                            </svg>
                        </span>
                        Total Post
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow border border-blue-200">
                    <div class="flex items-baseline">
                        <div class="text-7xl font-semibold mr-2">21</div>
                        <div class="text-base text-gray-600">last month</div>
                    </div>
                    <div class="mt-4 text-2xl flex items-center">
                        <span class="rounded-full bg-blue-100 p-6 text-blue-600 mr-3">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                fill="none" 
                                viewBox="0 0 24 24" 
                                stroke-width="1.5" 
                                stroke="currentColor" 
                                class="w-6 h-6">
                               <path stroke-linecap="round" 
                               stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" 
                                />
                            </svg>
                        </span>
                        Total New User
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
                <div class="bg-white p-6 rounded-lg lg:col-span-2 shadow border border-blue-200">
                    <div class="text-lg mb-2">Latest Post</div>
                    <hr class="mb-2">
                   
                    <div class="space-y-2 mb-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <div>Eyezen 123</div>
                                <div class="text-xs">Name</div>
                            </div>
                            <div> 
                                <div class="text-sm">Eyezen</div>
                                <div class="text-gray-600 text-xs">Categories</div>
                            </div>
                            <div>  
                                <div class="text-sm">Member Tier 1</div>
                                <div class="text-gray-600 text-xs">Member Tier</div>
                            </div>
                            <div>
                                <div class="text-sm">20-06-2024</div>
                                <div class="text-gray-600 text-xs">Date Valid</div>
                            </div>
                        </div>

                    </div>
                    <div class="space-y-2 mb-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <div>Eyezen 123</div>
                                <div class="text-xs">Name</div>
                            </div>
                            <div> 
                                <div class="text-sm">Eyezen</div>
                                <div class="text-gray-600 text-xs">Categories</div>
                            </div>
                            <div>  
                                <div class="text-sm">Member Tier 1</div>
                                <div class="text-gray-600 text-xs">Member Tier</div>
                            </div>
                            <div>
                                <div class="text-sm">20-06-2024</div>
                                <div class="text-gray-600 text-xs">Date Valid</div>
                            </div>
                        </div>

                    </div>
                    <div class="space-y-2 mb-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <div>Eyezen 123</div>
                                <div class="text-xs">Name</div>
                            </div>
                            <div> 
                                <div class="text-sm">Eyezen</div>
                                <div class="text-gray-600 text-xs">Categories</div>
                            </div>
                            <div>  
                                <div class="text-sm">Member Tier 1</div>
                                <div class="text-gray-600 text-xs">Member Tier</div>
                            </div>
                            <div>
                                <div class="text-sm">20-06-2024</div>
                                <div class="text-gray-600 text-xs">Date Valid</div>
                            </div>
                        </div>

                    </div>
                    <div class="space-y-2 mb-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <div>Eyezen 123</div>
                                <div class="text-xs">Name</div>
                            </div>
                            <div> 
                                <div class="text-sm">Eyezen</div>
                                <div class="text-gray-600 text-xs">Categories</div>
                            </div>
                            <div>  
                                <div class="text-sm">Member Tier 1</div>
                                <div class="text-gray-600 text-xs">Member Tier</div>
                            </div>
                            <div>
                                <div class="text-sm">20-06-2024</div>
                                <div class="text-gray-600 text-xs">Date Valid</div>
                            </div>
                        </div>

                    </div>
                    <div class="space-y-2 mb-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <div>Eyezen 123</div>
                                <div class="text-xs">Name</div>
                            </div>
                            <div> 
                                <div class="text-sm">Eyezen</div>
                                <div class="text-gray-600 text-xs">Categories</div>
                            </div>
                            <div>  
                                <div class="text-sm">Member Tier 1</div>
                                <div class="text-gray-600 text-xs">Member Tier</div>
                            </div>
                            <div>
                                <div class="text-sm">20-06-2024</div>
                                <div class="text-gray-600 text-xs">Date Valid</div>
                            </div>
                        </div>

                    </div>
                    
                </div>
                <div class="bg-white p-6 rounded-lg lg:col-span-1 shadow border border-blue-200">
                    <div class="text-lg mb-2">New User</div>
                    <hr class="mb-2">
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <div>
                                <div>Aaron Yong Yip Seng</div>
                                <div class="text-xs text-gray-600">Member Tier 1</div>
                            </div>
                            <div>
                                <div>email@gmail.com</div>
                                <div class="text-xs text-gray-600">email</div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <div>Aaron Yong Yip Seng</div>
                                <div class="text-xs text-gray-600">Member Tier 1</div>
                            </div>
                            <div>
                                <div>email@gmail.com</div>
                                <div class="text-xs text-gray-600">email</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- {{ $page.props }} -->
    </AppLayout>
</template>
