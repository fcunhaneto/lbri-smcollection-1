<template>
    <div class="h-16 bg-cyan-900 border-b-1 border-gray-200 shadow">
        <div class="max-w-screen-2xl mx-auto">
            <nav class="flex justify-between h-16">
                <!-- Navigation Left -->
                <div class="hidden md:flex sm:items-center sm:ml-6 2xl:ml-0 space-x-6">
                    <Link
                        :href="route('home')"
                        class="font-display tracking-wide text-lg text-gray-50 leading-5 font-serif subpixel-antialiased
                        border-b-2 border-transparent"
                    >
                        {{ $page.props.appName }}
                    </Link>
                    <NavbarLink
                        :href="route('home', {type: 'series'})"
                        :active="!route().current('admin', {type: 'filmes'})"
                    >
                        Séries
                    </NavbarLink>
                    <NavbarLink
                        :href="route('admin', {type: 'filmes'})"
                        :active="route().current('admin', {type: 'filmes'})"
                    >
                        Filmes
                    </NavbarLink>
                </div>
                <!-- Navigation Right -->
                <div class="hidden md:flex sm:items-center sm:mr-6 2xl:mr-0">
                    <div class="flex">
                        <div class="shrink-0 flex items-center">
                            <BreezeDropdown>
                                <template #trigger>
                                    <button class="flex bg-white text-gray-900 px-3 py-1 rounded">
                                        {{ $page.props.auth.user.name }}&nbsp;
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
                </div>
                <div class="flex justify-between w-full md:hidden">
                    <div class="flex items-center ml-3">
                        <Link
                            :href="route('home')"
                            class="font-display tracking-wide text-lg text-gray-50 leading-5 font-serif subpixel-antialiased
                        border-b-2 border-transparent"
                        >
                            {{ $page.props.appName }}
                        </Link>
                    </div>
                    <div class="flex items-center mr-3">
                        <BreezeDropdown>
                            <template #trigger>
                                <button class="pt-1">
                                    <MenuIcon class="h-10 w-10 bg-white rounded" />
                                </button>
                            </template>
                            <template #content>
                                <BreezeResponsiveNavLink
                                    :href="route('home', {type: 'series'})"
                                    :active="!route().current('home', {type: 'filmes'})"
                                >
                                    Séries
                                </BreezeResponsiveNavLink>
                                <BreezeResponsiveNavLink
                                    :href="route('home', {type: 'filmes'})"
                                    :active="route().current('home', {type: 'filmes'})"
                                >
                                    Filmes
                                </BreezeResponsiveNavLink>
                                <BreezeResponsiveNavLink
                                    :href="route('dashboard')"
                                    :active="route().current('dashboard')"
                                >
                                    Dashboard
                                </BreezeResponsiveNavLink>
                                <BreezeResponsiveNavLink
                                    :href="route('login')"
                                    :active="route().current('login')"
                                >
                                    Login
                                </BreezeResponsiveNavLink>
                                <BreezeResponsiveNavLink
                                    :href="route('register')"
                                    :active="route().current('register')"
                                >
                                    Dashboard
                                </BreezeResponsiveNavLink>
                            </template>
                        </BreezeDropdown>
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