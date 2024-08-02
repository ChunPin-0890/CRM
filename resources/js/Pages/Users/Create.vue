<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'

const props = defineProps({
    confirmsTwoFactorAuthentication: Boolean,
    sessions: Array,
    users: Array,
    filters: Object
});
</script>

<template>
    <AppLayout title="User">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="p-6 grid grid-cols-1 lg:grid-cols-3 gap-4 bg-white rounded-lg shadow-md border">
    <div class="p-6 lg:col-span-2 bg-white rounded-lg border border-blue-200">
            <label for="Name" class="block text-sm font-medium text-gray-700">Name</label>
            <input
                type="text"
                id="Name"
                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm px-2 py-2 mb-6"
            />
            <label for="Email" class="block text-sm font-medium text-gray-700">Email</label>
            <input
                type="email"
                id="Email"
                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm px-2 py-2 mb-6"
            />
            <label for="tier" class="block text-sm font-medium text-gray-700">Choose Tier</label>
            <input
                type="text"
                id="tier"
                placeholder="--Select--"
                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm px-2 py-2 mb-6"
            />
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input
                type="password"
                id="password"
                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm px-2 py-2 mb-6"
            />
            <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input
                type="password"
                id="confirm_password"
                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm px-2 py-2 mb-6"
            />
            <div class="flex justify-start mb-20">
                <button class="px-4 py-2 mr-2 bg-gray-300 text-white rounded-lg">Cancel</button>
                <button class="px-4 py-2 bg-blue-500 text-white rounded-lg">Save</button>
        </div>
    </div>
    <div class="bg-white p-2 rounded-lg border border-blue-200">
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

    <h3 class="flex justify-between text-xl font-bold mb-4 border-b">Tier Management<span></span></h3>
    <!-- Grid layout for dropdown menus -->
    <div class="grid grid-cols-2 gap-4">
        <!-- Dropdown menu 1 -->
        <Menu as="div" class="relative inline-block text-left">
            Tier 1<div>
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
           Tier 2 <div>
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
          Tier 4  <div>
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
</div>
</div>
        </div>

    </AppLayout>
</template>
