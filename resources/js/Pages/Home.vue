<template>
    <div>
        <NavbarFront></NavbarFront>
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 2xl:pl-6">
            <header class="border-b border-gray-400 mt-6 mb-7 pb-2">
                <h1 class="text-4xl font-serif font-semibold">{{ page }}</h1>
            </header>
            <main class="flex flex-wrap justify-center sm:gap-6">
                <Card :titles="titles.data" :posters_path="posters_path" />
            </main>
            <footer class="max-w-screen-2xl mb-6 sm:mt-6 sm:mb-12 mx-auto px-4 sm:px-12">
                <PaginationLink :links="titles.links" />
            </footer>
        </div>
    </div>
</template>

<script>
import NavbarFront from "@/Components/NavbarHome.vue";
import NavLink from "@/BreezeComponents/NavLink.vue";
import Card from "@/Components/Card.vue";
import PaginationLink from "@/Components/PaginationLink.vue";

export default {
    name: "Home",
    components: {
        NavLink,
        NavbarFront,
        Card,
        PaginationLink,
    },
    props: {
        titles: Object,
        type: String,
        canLogin: Boolean,
        canRegister: Boolean,
        posters_path: String,
    },
    computed: {
        page() {
            if(this.type === 'series') {
                return 'Séries';
            } else if(this.type === 'filmes') {
                return 'Filmes';
            } else {
                return 'Home';
            }
        }
    },
}
</script>

<style scoped>

</style>