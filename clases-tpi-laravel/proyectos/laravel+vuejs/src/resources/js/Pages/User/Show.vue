<script setup>
import { Head } from "@inertiajs/vue3";
import { Switch } from '@/components/ui/switch'
defineProps({
    user: Object
})
</script>

<template>

    <Head title="Welcome" />

    <h1>Welcome</h1>
    <p>Mi primera página Inertia</p>
    <p>Avla cabeza de {{ user.name }}</p>

    <div>
        <Switch />
    </div>

    <div>
        <Button variant="outline">
            Button
        </Button>
    </div>
</template>