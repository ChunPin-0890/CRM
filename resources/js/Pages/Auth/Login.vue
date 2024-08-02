<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in" />

    <AuthenticationCard>
        <template #logo>
            <AuthenticationCardLogo />
        </template>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <h3 class="mb-6 text-2xl" style="text-align: center;">Master Admin</h3>
        <!-- <div>Are you user?? Click here
            <a :href="route('userlogin')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-blue focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
               Login as user
            </a>
        </div> -->
        <form @submit.prevent="submit" class="blue-text">
            <div>
                <InputLabel for="email" />
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    placeholder="Email Address"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="username"
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password"/>
                <TextInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    placeholder="Password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="current-password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <Checkbox v-model:checked="form.remember" name="remember" />
                        <span class="ms-2 text-sm">Remember me</span>
                    </label>
                    <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Forgot password?
                    </Link>
                </div>
            </div>

            <div class="flex items-center justify-center mt-4">
                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
</template>

<style scoped>
.blue-text {
    color: blue;
}

h3 {
    color: black; /* Excludes "Master Admin" from being blue */
}
</style>
