<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/inertia-vue3';
import {useForm} from '@inertiajs/inertia-vue3'


const form = useForm({
    name: null,
    sname: null,
    phone: null,
    email: null,
    title: null,
    description: null,
    debut: null,
    fin: null,
    status: null,
    nbjours: null,

})

</script>

<template>
    <Head title="Ajouter un projet"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Créer un projet</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <form class="flex flex-col gap-4" @submit.prevent="form.post(route('projets.store'))">
                        {{ form.errors}}

                        <br>
                        <div>
                            <div class="font-semibold text-xl text-gray-800 leading-tight">Responsable projet
                            </div>
                            <br>
                            <p class="text- text-gray-400">Ces informations serviront à savoir qui dirige le projet du coté du client</p>
                            <br> 
                        </div>


                            <hr>
                            Nom<input placeholder="" type="text" v-model="form.name">
                            <div v-if="form.errors.name">{{ form.errors.name}}</div>

                            <hr>
                            Prénom<input placeholder="" type="text" v-model="form.sname">
                            <div v-if="form.errors.sname">{{ form.errors.sname }}</div>

                            <hr>
                            Téléphone<input placeholder="+33 (0) 660 72 55 02" type="text" v-model="form.phone">
                            <div v-if="form.errors.phone">{{ form.errors.phone }}</div>
                            <hr>

                            Email<input placeholder="you@example.com" type="text" v-model="form.email">
                            <div v-if="form.errors.email">{{ form.errors.email }}</div>
                            <hr>

                            <br>
                        
                        <div>
                            <div class="font-semibold text-xl text-gray-800 leading-tight">Informations du projet</div>
                            <br>
                            <p class="text- text-gray-400">Use a permanent address where you can receive mail.</p>
                            <br> 
                        </div>

                            Titre<input placeholder="" type="text" v-model="form.title">
                            <div v-if="form.errors.title">{{ form.errors.title }}</div>
                            <hr>

                            Description<input placeholder="" type="text" v-model="form.description">
                            <div v-if="form.errors.description">{{ form.errors.description }}</div>
                            <hr>

                            Début du projet<input placeholder="" type="text" v-model="form.debut">
                            <div v-if="form.errors.debut">{{ form.errors.debut }}</div>
                            <hr>

                            Fin du projet estimé<input placeholder="" type="text" v-model="form.fin">
                            <div v-if="form.errors.fin">{{ form.errors.fin }}</div>
                            <hr>


                            Status du projet<input placeholder="" type="text" v-model="form.status">
                            <div v-if="form.errors.status">{{ form.errors.status }}</div>
                            <hr>

                            Nombre de jours vendus<input placeholder="" type="text" v-model="form.nbjours">
                            <div v-if="form.errors.nbjours">{{ form.errors.nbjours }}</div>
                            <hr>

                            <button class="py-2 px-4 bg-green-400 text-white rounded" type="submit"
                                    :disabled="form.processing">Sauvegarder
                            </button>

                            <button class="py-2 px-4 bg-red-300 text-white rounded" value="Go back!" onclick="history.back()"
                            >Annuler
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>

</template>

