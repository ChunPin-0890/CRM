<script setup>
import { Link } from '@inertiajs/vue3';

const imagePath = '/img/essilor.png'; // Replace with your actual image path

</script>

<template>
    <Link :href="'/'">
        <img :src="imagePath" alt="Logo" class="h-32 mx-auto mb-4">
    </Link>
</template>
