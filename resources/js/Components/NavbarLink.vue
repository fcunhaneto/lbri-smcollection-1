<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    name: "NavbarLink",
    components: {Link},
    props: {
        href: String,
        active: Boolean,
    },
    computed: {
        classes() {
            return this.active
                ? 'inline-flex items-center px-1 pt-1 border-b-2 border-gray-100 text-base subpixel-antialiased leading-5 ' +
                'text-white focus:outline-none focus:border-gray-100 transition  duration-150 ease-in-out'
                : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-base subpixel-antialiased leading-5 ' +
                'text-gray-200 hover:text-gray-100 hover:border-gray-100 focus:outline-none focus:text-gray-300 ' +
                'focus:border-gray-300 transition duration-150 ease-in-out'
        }
    }
}
</script>

<style scoped>

</style>