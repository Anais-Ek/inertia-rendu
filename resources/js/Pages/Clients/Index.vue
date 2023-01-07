<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import {Inertia} from "@inertiajs/inertia";



defineProps({
    'clients' : Array,
    'pageTitle': String
})

const toggle = (id) => {
    Inertia.post(route('clients.toggle', id));
}
</script>

<template>
    <Head title="Clients" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Clients</h2>
            <br>

            <a href="/clients/create" title="Creation client">
            <button class="py-2 px-4 bg-blue-300 text-white rounded text-right">Créer un client
            </button>            
            </a> 
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Raison sociale
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Projet
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Editer</span>
                            </th>
                        </tr>
                        </thead>
                    </table>
                    <tbody>
                        <tr v-for="client in clients" :key="post">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ client.name }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ client.description }}
                            </td>
                        </tr>

                    </tbody>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>

    
</template>
