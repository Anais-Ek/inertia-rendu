<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/inertia-vue3';
import {useForm} from '@inertiajs/inertia-vue3'


const form = useForm({
    name: null,
    description: null,
    statut: null,
    capital: null,
    siret: null,
    naf: null,
    country: null,
    adress: null,
    postal: null,
    city: null,

})

</script>

<template>
    <Head title="Ajouter un client"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Créer un client</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <form class="flex flex-col gap-4" @submit.prevent="form.post(route('clients.store'))">

                        <br>
                        <div>
                            <div class="font-semibold text-xl text-gray-800 leading-tight">Information société
                            </div>
                            <br>
                            <p class="text- text-gray-400">Information légal de l'entreprise</p>
                            <br> 
                        </div>


                            <hr>
                            Description<input placeholder="" type="text" v-model="form.description">
                            <div v-if="form.errors.description">{{ form.errors.description}}</div>

                            <hr>
                            Raison social<input placeholder="" type="text" v-model="form.name">
                            <div v-if="form.errors.name">{{ form.errors.name }}</div>

                            <hr>
                            Statut juridique<input placeholder="" type="text" v-model="form.statut">
                            <div v-if="form.errors.statut">{{ form.errors.statut }}</div>
                            <hr>

                            Capital<input placeholder="" type="text" v-model="form.capital">
                            <div v-if="form.errors.capital">{{ form.errors.capital }}</div>
                            <hr>

                            Numéro de siret<input placeholder="" type="text" v-model="form.siret">
                            <div v-if="form.errors.siret">{{ form.errors.siret }}</div>
                            <hr>

                            Code NAF (APE)<input placeholder="" type="text" v-model="form.naf">
                            <div v-if="form.errors.naf">{{ form.errors.naf }}</div>
                            <hr>

                            <br>
                        
                        <div>
                            <div class="font-semibold text-xl text-gray-800 leading-tight">Adresse</div>
                            <br>
                            <p class="text- text-gray-400">Localisation du siège social</p>
                            <br> 
                        </div>

                            Pays<input placeholder="" type="text" v-model="form.country">
                            <div v-if="form.errors.country">{{ form.errors.country }}</div>
                            <hr>

                            Adresse<input placeholder="" type="text" v-model="form.adress">
                            <div v-if="form.errors.adress">{{ form.errors.adress }}</div>
                            <hr>

                            Code postal<input placeholder="" type="text" v-model="form.postal">
                            <div v-if="form.errors.postal">{{ form.errors.postal }}</div>
                            <hr>

                            Ville<input placeholder="" type="text" v-model="form.city">
                            <div v-if="form.errors.city">{{ form.errors.city }}</div>
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

