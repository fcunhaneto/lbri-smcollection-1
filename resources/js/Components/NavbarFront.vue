<template>
    <div class="h-16 bg-gray-900 border-b-1 border-gray-200 shadow">
        <div class="max-w-screen-2xl mx-auto">
            <nav class="flex justify-between h-16">
                <!-- Navigation Left -->
                <div class="hidden sm:flex sm:items-center space-x-6">
                    <Link
                        :href="route('home')"
                        class="font-display tracking-wide text-lg text-gray-50 leading-5 font-serif subpixel-antialiased
                        border-b-2 border-transparent"
                    >
                        {{ $page.props.appName }}
                    </Link>
                    <NavbarLink
                        :href="route('home', {type: 'series'})"
                        :active="!route().current('home', {type: 'filmes'})"
                    >
                        Séries
                    </NavbarLink>
                    <NavbarLink
                        :href="route('home', {type: 'filmes'})"
                        :active="route().current('home', {type: 'filmes'})"
                    >
                        Filmes
                    </NavbarLink>
                </div>
                <!-- Navigation Right -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <div v-if="name" class="flex">
                        <div class="shrink-0 flex items-center">
                            <BreezeDropdown>
                                <template #trigger>
                                    <button class="flex bg-white text-gray-900 px-3 py-1 rounded">
                                        {{ name }}&nbsp;
                                        <ChevronDownIcon class="h-5 w-5 mt-0.5 text-gray-900" />
                                    </button>
                                </template>
                                <template #content>
                                    <BreezeResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                        Dashboard
                                    </BreezeResponsiveNavLink>
                                    <BreezeDropdownLink :href="route('logout')" method="post" as="button">
                                        Log Out
                                    </BreezeDropdownLink>
                                </template>
                            </BreezeDropdown>
                        </div>
                    </div>
                    <div v-else class="flex">
                        <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-3">
                            <NavbarLink :href="route('login')" :active="route().current('login')">
                                Entrar
                            </NavbarLink>
                            <NavbarLink :href="route('register')" :active="route().current('register')">
                                Registrar
                            </NavbarLink>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import NavbarLink from "@/Components/NavbarLink.vue";
import BreezeDropdown from '@/BreezeComponents/Dropdown.vue';
import BreezeDropdownLink from '@/BreezeComponents/DropdownLink.vue';
import BreezeResponsiveNavLink from '@/BreezeComponents/ResponsiveNavLink.vue';
import { ChevronDownIcon, MenuIcon } from '@heroicons/vue/solid';

export default {
    name: "NavbarFront",
    components: {
        Link, NavbarLink, BreezeDropdown, BreezeDropdownLink, BreezeResponsiveNavLink, ChevronDownIcon, MenuIcon,
    }
}
</script>

<style scoped>

</style>