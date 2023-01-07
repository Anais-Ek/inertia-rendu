<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import {Inertia} from "@inertiajs/inertia";



defineProps({
    'projets' : Array,
    'pageTitle': String
})

const toggle = (id) => {
    Inertia.post(route('projets.toggle', id));
}

</script>

<template>
    <Head title="Projets" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Projets</h2>
            <br>

            <a href="/projets/create" title="Creation projet">
            <button class="py-2 px-4 bg-blue-300 text-white rounded">Créer un projet
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
                                Titre
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Client
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Statut
                            </th>

                        </tr>
                        </thead>
                    </table>
                    <tbody>
                        <tr v-for="projet in projets" :key="post">
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ projet.name }}
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ projet.description }}
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ projet.statut }}
                            </th>
                                
                        </tr>
                    </tbody>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>

    
</template>
