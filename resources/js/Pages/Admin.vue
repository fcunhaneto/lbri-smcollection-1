<template>
    <NavbarAdmin></NavbarAdmin>
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 2xl:pl-6">
        <header class="border-b border-gray-400 mt-6 mb-7 pb-2">
            <h1 class="text-4xl font-serif font-semibold">{{ page }}</h1>
            <PaginationLink :links="titles.links" />
        </header>
        <main class="flex flex-wrap justify-center sm:gap-6">
            <CardAdmin :titles="titles.data" :posters_path="posters_path" />
        </main>
        <footer class="max-w-screen-2xl mb-6 sm:mt-6 sm:mb-12 mx-auto px-4 sm:px-12">
            <PaginationLink :links="titles.links" />
        </footer>
    </div>
</template>

<script>
import NavbarAdmin from "@/Components/NavbarAdmin.vue";
import PaginationLink from "@/Components/PaginationLink.vue";
import CardAdmin from "@/Components/CardAdmin.vue";

export default {
    name: "Admin",
    components: {
        NavbarAdmin, PaginationLink, CardAdmin
    },
    props: {
        titles: Object,
        type: String,
        posters_path: String,
    },
}
</script>

<style scoped>

</style>