<template>
    <div>
        <NavbarFront></NavbarFront>
        <div>
            <ul>
                <li v-for="title in titles.data">
                    {{ title.title }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import NavbarFront from "@/Components/NavbarFront.vue";
import NavLink from "@/BreezeComponents/NavLink.vue";
export default {
    name: "Home",
    components: {
        NavLink,
        NavbarFront,
    },
    props: {
        titles: Object,
        type: String,
        canLogin: Boolean,
        canRegister: Boolean,
    }
}
</script>

<style scoped>

</style>