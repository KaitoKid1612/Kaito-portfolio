<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Frontend from "@/Layouts/Frontend.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import Promote from "@/Components/Frontend/Promote.vue";
import About from "@/Components/Frontend/About.vue";

</script>

<template>
    <Head title="Welcome to my Portfolio" />
    <Frontend>
        <!-- Hero primary -->
        <Hero />
        <!-- Promote tail-100 -->
        <Promote />
        <!-- About secondary -->
        <About />
        <!-- Skills tail-100 -->
        <!-- Portfolio primary -->
        <!-- Services secondary -->
        <!-- Contact primary -->
    </Frontend>
</template>

<style>
</style>
