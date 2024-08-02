<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import { Head, router } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import { CaIbmDataProductExchange, BxSolidDashboard, FaUserGear, FlSettingsCogMultiple } from '@kalimahapps/vue-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faBars, faTimes } from '@fortawesome/free-solid-svg-icons';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);
const isSidebarOpen = ref(false);
const isMobileView = ref(window.innerWidth < 1000);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};

const toggleSidebar = () => {
    isSidebarOpen.value = !isSidebarOpen.value;
};

const handleResize = () => {
    isMobileView.value = window.innerWidth < 1000;
    if (!isMobileView.value) {
        isSidebarOpen.value = false;
    }
};

onMounted(() => {
    window.addEventListener('resize', handleResize);
});

onUnmounted(() => {
    window.removeEventListener('resize', handleResize);
});

const imagePath = '/img/essilor.png'; // Replace with your actual image path
</script>

<template>
    <div>
        <Head :title="title" />

        <Banner />

        <div class="min-h-screen bg-gray-100 relative">
            <!-- Sidebar Button for Mobile View -->
            <button v-if="isMobileView" @click="toggleSidebar" class="fixed left-0 top-1/2 transform -translate-y-1/2 z-50 bg-yellow-500 text-white p-3 rounded-r-md">
                <FontAwesomeIcon :icon="isSidebarOpen ? faTimes : faBars" />
            </button>

            <!-- Sidebar Overlay -->
            <div v-if="isSidebarOpen && isMobileView" class="fixed inset-0 z-40 bg-black opacity-50" @click="toggleSidebar"></div>

            <!-- Sidebar -->

            <aside
             :class="{
                'fixed z-50 inset-y-0 left-0 transform transition-transform duration-300 ease-in-out': true,
                'translate-x-0': isSidebarOpen,
                '-translate-x-full': !isSidebarOpen && isMobileView,
                'translate-x-0': isSidebarOpen && !isMobileView,
                'ml-4': !isMobileView,
                'mt-6': !isMobileView,
                'rounded-lg': !isMobileView,
                'mb-6': !isMobileView,
                'p-4': !isMobileView,
                'w-80': !isMobileView,
                'bg-white shadow-md': true
            }"
            > 
            <div class="p-4">
                <a :href="route('userproducts.create')" class="flex items-center p-2 mt-2 text-gray-600 hover:bg-yellow-100 hover:text-yellow-900 rounded-md">
                    <img :src="imagePath" alt="Logo" class="h-16 mx-auto mb-4">
                </a>
                <hr class="border-b-2 border-yellow-600 w-full block m-1"> <!-- Added bottom line -->
                <nav>
                    <a :href="route('userproducts.create')" class="flex items-center p-3 mt-7 rounded-md hover:bg-yellow-100 hover:text-yellow-900"
                    :class="{ 'bg-yellow-500 text-white': route().current('userproducts.create'), 'text-yellow-600': !route().current('userproducts.create') }">
                        <BxSolidDashboard :class="{ 'text-white': route().current('userproducts.create'), 'text-yellow-600': !route().current('userproducts.create') }" class="transform scale-150 mr-5"/>
                        <span class="flex-1" :class="{ 'text-white': route().current('userproducts.create'), 'text-yellow-600': !route().current('userproducts.create') }">Dashboard</span>
                    </a>
                    <a :href="route('userproducts.index')" class="flex items-center p-3 mt-2 rounded-md hover:bg-yellow-100 hover:text-yellow-900"
                    :class="{ 'bg-yellow-500 text-white': route().current('userproducts.index'), 'text-yellow-600': !route().current('userproducts.index') }">
                        <CaIbmDataProductExchange :class="{ 'text-white': route().current('userproducts.index'), 'text-yellow-600': !route().current('userproducts.index') }" class="transform scale-150 mr-5"/>
                        <span class="flex-1" :class="{ 'text-white': route().current('userproducts.index'), 'text-yellow-600': !route().current('userproducts.index') }">Available Post</span>
                    </a>
                    <a :href="route('userpost.index')" class="flex items-center p-3 mt-2 rounded-md hover:bg-yellow-100 hover:text-yellow-900"
                    :class="{ 'bg-yellow-500 text-white': route().current('userpost.index'), 'text-yellow-600': !route().current('userpost.index') }">
                        <FlSettingsCogMultiple :class="{ 'text-white': route().current('userpost.index'), 'text-yellow-600': !route().current('userpost.index') }" class="transform scale-150 mr-5"/>
                        <span class="flex-1" :class="{ 'text-white': route().current('userpost.index'), 'text-yellow-600': !route().current('userpost.index') }">Setting</span>
                    </a>
                </nav>
            </div>
        </aside>

            <!-- Main Content -->
            <div class="flex-1 p-6" :class="{'ml-85': !isMobileView}">
                <!-- Header -->
                <div class="bg-white p-6 rounded-lg shadow mb-6">
                    <header class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                            <div class="ml-4 text-lg font-semibold">
                                <div>Chan Ting Hui</div>
                                <div class="text-xs">Master Admin</div>
                            </div>
                        </div>
                        <form @submit.prevent="logout">
                            <DropdownLink as="button" class="bg-yellow-500 text-white rounded-lg">
                                Log Out
                            </DropdownLink>
                        </form>
                    </header>
                </div>

                <!-- Page Content -->
                <slot />
            </div>
        </div>
    </div>
</template>

<style>
@media (max-width: 1000px) {
    aside {
        transform: translateX(-100%);
    }
}
</style>
