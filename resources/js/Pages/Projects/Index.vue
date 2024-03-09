<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Projects
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2">
                    <Link href="/projects/create" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">
                        New Project
                    </Link>
                </div>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Skill
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Project URL
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="bg-white border-b" v-for="project in projects.data" :key="project.id" >
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ project.id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ project.name }}
                            </td>
                            <td class="px-6 py-4">
                                <img :src="project.image" alt="Skill Image" class="h-10 w-10 rounded-full" />
                            </td>
                            <td class="px-6 py-4">
                                <a :href="project.project_url" target="_blank" class="text-indigo-500 hover:underline">
                                    {{ project.project_url }}
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <Link :href="`/projects/${project.id}/edit`" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">
                                    Edit
                                </Link>
                                <Link :href="route('projects.destroy', project.id)" method="delete" class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md p-4 m-2">
                                    Delete
                                </Link>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </AuthenticatedLayout>

</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    projects: Object
})
</script>

<style scoped>

</style>
