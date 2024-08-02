<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

</script>

<template>
    <Head title="Log in" />

    <AuthenticationCard>
        <template #logo>
            <AuthenticationCardLogo />
        </template>

        <!-- <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div> -->
        <h3 class="mb-6 text-2xl" style="text-align: center;">Welcome Back</h3>
        <form>
            <div>
                <InputLabel for="email" />
                <TextInput
                    placeholder="Email Address"
                     class="mt-1 block w-full bg-yellow-50"
                />
            </div>

            <div class="mt-4">
                <InputLabel for="password"/>
                <TextInput
                   placeholder="Password"
                   class="mt-1 block w-full bg-yellow-50"
                />
            </div>

            <div class="block mt-4">
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <Checkbox name="remember" />
                        <span class="ms-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <Link>
                        Forgot password?
                    </Link>
                </div>
            </div>
            
            <div class="flex items-center justify-center mt-4">
                
                <PrimaryButton class="ms-4 bg-orange-400">
                    Log in
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
</template>
