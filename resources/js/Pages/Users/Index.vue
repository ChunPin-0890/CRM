<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import MoreButton from '@/Components/MoreButton.vue'
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'

const props = defineProps({
    confirmsTwoFactorAuthentication: Boolean,
    sessions: Array,
    users: Array,  // Changed from Object to Array to match the usage in the template
    filters: Object
});

// const deleteUser = (user) => {
//     if (confirm("Are you sure to deactivate this user account?")) {
//         Inertia.delete(route('users.destroy', { user: user.id }), { onSuccess: () => {} })
//     }    
// }
</script>

<template>
    <AppLayout title="User">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 p-6 bg-white rounded-lg shadow-md border">
            <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow border border-blue-100">
                <div class="flex flex-col lg:flex-row items-center justify-between mb-4">
                    <!-- Left Side: Search Bar and Dropdown -->
                    <div class="flex flex-col lg:flex-row items-center mb-4 lg:mb-0 lg:mr-4">
                        <div class="relative mt-4 lg:mt-0 w-full lg:w-auto">
                            <input type="text" placeholder="Search Post" class="w-full lg:w-72 pl-4 pr-10 py-3 border-none outline-none bg-blue-50 text-gray-700 text-sm placeholder-blue-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px" class="absolute right-3 top-1/2 transform -translate-y-1/2 fill-blue-400">
                                <path d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z"></path>
                            </svg>
                        </div>
                        <select class="p-3 ml-0 lg:ml-4 border rounded-xl w-full lg:w-52 py-2 text-base text-white bg-blue-500 mt-4 lg:mt-0">
                            <option>Categories</option>
                        </select>
                    </div>
                    <!-- Right Side: New Post Button -->
                    <div class="w-full lg:w-auto mt-4 lg:mt-0">
                        <a :href="route('users.create')" class="block text-center p-3 bg-blue-500 text-white rounded-lg">
                            Add User
                        </a>
                    </div>
                </div>
                
        <!-- User Table -->
        <div class="overflow-x-auto">
            <table class="table-auto min-w-full">
                <tbody>
                    <tr v-for="(user, index) in users" :key="user.id" class="border-b">
                        <td class="px-4 py-2 whitespace-nowrap">
                            <div class="flex items-center justify-center w-8 h-8 bg-blue-500 text-white rounded-full">
                                {{ index + 1 }}
                            </div>
                        </td>
                        <td class="px-4 py-2">{{ user.name }}</td>
                        <td class="px-4 py-2">{{ user.email }}</td>
                        <td class="px-4 py-2">{{ user.password | hash_function }}</td>
                        <td class="px-4 py-2">{{ user.roles?.map(v => v.name)?.join(', ') }}</td>
                        <td class="px-2 p-2 text-blue-500">
                            <!-- Edit Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"></path>
                            </svg>
                        </td>
                        <td class="px-2 p-2 text-blue-500">
                            <!-- Delete Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
                            </svg>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="bg-white p-2 rounded-lg shadow border border-blue-100">
 <div class="p-6 rounded-lg">

    <h3 class="flex justify-between font-bold text-base">All Category <span>11</span></h3>
    <hr class="mt-4 mb-4">
        <ul class="mb-6">
            <li class="flex justify-between py-2 mb-6"><span>Member Tier 1</span><span>10</span></li>
            <li class="flex justify-between py-2 mb-6"><span>Member Tier 2</span><span>12</span></li>
            <li class="flex justify-between py-2 mb-6"><span>Member Tier 3</span><span>23</span></li>
            <li class="flex justify-between py-2 mb-6"><span>Member Tier 4</span><span>31</span></li>
        </ul>
        </div>
        <div class="bg-white p-2 rounded-lg mt-6">
            <h3 class="flex justify-between font-bold text-base">Tier Management</h3>
            <hr class="mt-4 mb-4">

    <!-- Grid layout for dropdown menus -->
    <div class="grid grid-cols-2 gap-4">
        <!-- Dropdown menu 1 -->
        <Menu as="div" class="relative inline-block text-left">
           Tier 1 <div>
                <MenuButton class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                    --Options--
                    <ChevronDownIcon class="-mr-1 h-5 w-5 text-gray-400" aria-hidden="true" />
                </MenuButton>
            </div>
            <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                <MenuItems class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <div class="py-1">
                        <MenuItem v-slot="{ active }">
                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Account settings</a>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Support</a>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">License</a>
                        </MenuItem>
                        <form method="POST" action="#">
                            <MenuItem v-slot="{ active }">
                                <button type="submit" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block w-full px-4 py-2 text-left text-sm']">Sign out</button>
                            </MenuItem>
                        </form>
                    </div>
                </MenuItems>
            </transition>
        </Menu>

        <!-- Dropdown menu 2 -->
        <Menu as="div" class="relative inline-block text-left">
            Tier 2<div>
                <MenuButton class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                    --Options--
                    <ChevronDownIcon class="-mr-1 h-5 w-5 text-gray-400" aria-hidden="true" />
                </MenuButton>
            </div>
            <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                <MenuItems class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <div class="py-1">
                        <MenuItem v-slot="{ active }">
                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Account settings</a>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Support</a>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">License</a>
                        </MenuItem>
                        <form method="POST" action="#">
                            <MenuItem v-slot="{ active }">
                                <button type="submit" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block w-full px-4 py-2 text-left text-sm']">Sign out</button>
                            </MenuItem>
                        </form>
                    </div>
                </MenuItems>
            </transition>
        </Menu>

        <!-- Dropdown menu 3 -->
        <Menu as="div" class="relative inline-block text-left">
           Tier 3 <div>
                <MenuButton class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                    --Options--
                    <ChevronDownIcon class="-mr-1 h-5 w-5 text-gray-400" aria-hidden="true" />
                </MenuButton>
            </div>
            <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                <MenuItems class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <div class="py-1">
                        <MenuItem v-slot="{ active }">
                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Account settings</a>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Support</a>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">License</a>
                        </MenuItem>
                        <form method="POST" action="#">
                            <MenuItem v-slot="{ active }">
                                <button type="submit" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block w-full px-4 py-2 text-left text-sm']">Sign out</button>
                            </MenuItem>
                        </form>
                    </div>
                </MenuItems>
            </transition>
        </Menu>

        <!-- Dropdown menu 4 -->
        <Menu as="div" class="relative inline-block text-left">
           Tier 4 <div>
                <MenuButton class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                    --Options--
                    <ChevronDownIcon class="-mr-1 h-5 w-5 text-gray-400" aria-hidden="true" />
                </MenuButton>
            </div>
            <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                <MenuItems class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                    <div class="py-1">
                        <MenuItem v-slot="{ active }">
                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Account settings</a>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Support</a>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                            <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">License</a>
                        </MenuItem>
                        <form method="POST" action="#">
                            <MenuItem v-slot="{ active }">
                                <button type="submit" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block w-full px-4 py-2 text-left text-sm']">Sign out</button>
                            </MenuItem>
                        </form>
                    </div>
                </MenuItems>
            </transition>
        </Menu>
    </div>
                <button class="w-full p-3 mb-2 bg-gray-300 text-white rounded-lg mt-10">Cancel</button>
                <button class="w-full p-3 bg-blue-500 text-white rounded-lg">Save</button>
</div>
</div>
        </div>

    </AppLayout>
</template>
