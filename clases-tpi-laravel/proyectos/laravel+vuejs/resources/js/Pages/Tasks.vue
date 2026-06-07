<script setup>

import { Head, useForm, router } from '@inertiajs/vue3';

defineProps({
    tasks: Array
});

const form = useForm({
    task: ''
});

// enviar tarea
const sendTask = () => {
    form.post(route('tasks.store'), {
        onSuccess: () => {
            form.reset;
            form.task = ''
        }
    });
}

const changeStateTask = (task) => {
    // se envia un PUT con Inertia de forma asíncrona
    router.put(route('tasks.update', task.id), {
        completed: !task.completed
    })
}

const deleteTask = (id) => {
    if (confirm('¿Seguro que deseas eliminar esta tarea?')) {
        router.delete(route('tasks.delete', id))
    }
}
</script>

<template>

    <Head title="Gestor de tareas" />
    <!-- <div class="container">

        <div class="section">
            <input type="text" placeholder="Ingrese una nueva tarea">
            <button @click="sendTask">Guardar</button>
        </div>
        <ul class="list">
            <li v-for="task in tasks">{{ task.task }}</li>
        </ul>
    </div> -->

    <div class="tasks-container">
        <h1>Gestor de Tareas</h1>

        <form @submit.prevent="sendTask" class="task-form">
            <input v-model="form.task" type="text" placeholder="Escribe una nueva tarea..."
                :class="{ 'input-error': form.errors.task }" />
            <button type="submit" :disabled="form.processing">Agregar</button>
        </form>

        <span v-if="form.errors.task" class="error-text">
            {{ form.errors.task }}
        </span>

        <ul class="task-list">
            <li v-for="item in tasks" :key="item.id" class="task-item">
                <div class="task-content">
                    <input type="checkbox" :checked="item.completed" @change="changeStateTask(item)" />
                    <span :class="{ 'line-through': item.completed }">
                        {{ item.task }}
                    </span>
                </div>

                <button @click="deleteTask(item.id)" class="delete-btn">
                    Eliminar
                </button> 
            </li>
        </ul>

        <p v-if="tasks.length === 0" class="empty-text">No hay tareas pendientes. ¡Buen trabajo!</p>
    </div>
</template>

<style scoped>

    .section{
        display: grid;

        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr;
    }

    .container{
        display: flex;
        flex-direction: column;

        justify-content: center;
        align-items: center;
    }

    .list{
        padding: 10px;
    }

        /* Un diseño limpio y moderno */
        .tasks-container {
            max-width: 600px;
            margin: 40px auto;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }
    
        h1 {
            color: #1e293b;
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-align: center;
        }
    
        .task-form {
            display: flex;
            gap: 10px;
            margin-bottom: 5px;
        }
    
        input[type="text"] {
            flex: 1;
            padding: 10px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 1rem;
            outline: none;
        }
    
        input[type="text"]:focus {
            border-color: #6366f1;
        }
    
        .input-error {
            border-color: #ef4444 !important;
        }
    
        .error-text {
            color: #ef4444;
            font-size: 0.85rem;
            display: block;
            margin-bottom: 15px;
        }
    
        button[type="submit"] {
            padding: 10px 20px;
            background: #6366f1;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
        }
    
        button[type="submit"]:hover {
            background: #4f46e5;
        }
    
        .task-list {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }
    
        .task-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
            border-bottom: 1px solid #f1f5f9;
        }
    
        .task-content {
            display: flex;
            align-items: center;
            gap: 12px;
        }
    
        input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }
    
        .line-through {
            text-decoration: line-through;
            color: #94a3b8;
        }
    
        .delete-btn {
            padding: 6px 12px;
            background: #fee2e2;
            color: #ef4444;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
        }
    
        .delete-btn:hover {
            background: #fca5a5;
        }
    
        .empty-text {
            text-align: center;
            color: #64748b;
            margin-top: 20px;
        }
</style>