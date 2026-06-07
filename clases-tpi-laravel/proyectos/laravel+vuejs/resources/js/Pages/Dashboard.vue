<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
<<<<<<< HEAD
defineProps({
    horasAcumuladas: Number
});
=======
>>>>>>> 3692ddf073f0b9d93c6092cd0c0e02528b032b9e
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
<<<<<<< HEAD
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                ¡Bienvenido Aleksey!
            </h2>

            <br>

            <p>Tu progreso de horas es <span class="font-bold text-lg"> {{ horasAcumuladas }} </span></p>

        </template>

        <!-- <div class="py-12">
=======
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Dashboard
            </h2>
        </template>

        <div class="py-12">
>>>>>>> 3692ddf073f0b9d93c6092cd0c0e02528b032b9e
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900">
<<<<<<< HEAD
                        
                    </div>
                </div>
            </div>
        </div> -->
=======
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
>>>>>>> 3692ddf073f0b9d93c6092cd0c0e02528b032b9e
    </AuthenticatedLayout>
</template>
