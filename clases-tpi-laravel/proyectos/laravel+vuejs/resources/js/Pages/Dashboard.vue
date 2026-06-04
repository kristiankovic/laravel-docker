<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
defineProps({
    horasAcumuladas: Number
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                ¡Bienvenido Aleksey!
            </h2>

            <br>

            <p>Tu progreso de horas es <span class="font-bold text-lg"> {{ horasAcumuladas }} </span></p>

        </template>

        <!-- <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900">
                        
                    </div>
                </div>
            </div>
        </div> -->
    </AuthenticatedLayout>
</template>
