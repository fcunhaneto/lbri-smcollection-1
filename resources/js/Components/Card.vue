<template>
    <article v-for="(title, index) in titles" class="w-[28em] h-full rounded-md mb-6" :key="title.id">
        <div class="flex bg-gray-900 border-b border-gray-400 rounded-t-md">
            <div class="shrink-0">
                <div class="flex">
                    <img :src="posters_path + '/' + title.poster" class="align-top rounded-t-md" width="110"
                         height="165" alt="poster">
                </div>
            </div>
            <div class="flex flex-col text-white py-3 px-3">
                <div>
                    <h1 class="text-2xl font-semibold">{{ title.title }}</h1>
                </div>
                <div>
                    <p class="text-[.9em] text-zinc-200 pt-1 pb-2">
                        {{ title.year }}
                        <span v-if="title.is_movie" class="ml-6">
                            {{ title.movie_duration.slice(0, -3) }}
                        </span>
                        <span v-else class="ml-6">
                            Temporadas: {{ title.series_seasons }} - {{ title.series_situation }}
                        </span>
                    </p>
                    <p class="text-[.9em] text-zinc-200 pb-2">
                        {{ arrToString(title.title_categories) }}
                    </p>
                    <p class="text-[.9em] text-zinc-200 pb-2">
                        {{ arrToString(title.title_channels) }}
                    </p>
                </div>
            </div>
        </div>
        <div class="flex bg-gray-900 py-2" :class="{'rounded-b-md': !open[index],}">
            <button
                class="flex items-center bg-white border border-gray-400 rounded-md ring-2 ring-gray-200 mx-3 px-3 py-2"
                :class="{'hover:ring-green-400': open, 'focus:ring-green-400': open,}"
                @click="openSummary(index)"
            >
                Resumo
                <ChevronUpIcon v-if="open[index]" class="h-5 w-5"></ChevronUpIcon>
                <ChevronDownIcon v-else class="h-5 w-5"></ChevronDownIcon>
            </button>
        </div>
        <transition
            enter-active-class="transition ease-out duration-200"
            enter-from-class="transform opacity-0 scale-95"
            enter-to-class="transform opacity-100 scale-100"
            leave-active-class="transition ease-in duration-75"
            leave-from-class="transform opacity-100 scale-100"
            leave-to-class="transform opacity-0 scale-95">
            <div v-show="open[index]" class="flex border-l border-b border-r border-gray-300 text-md leading-7 py-4 px-3">
                {{ title.summary }}
            </div>
        </transition>
    </article>
</template>

<script>
import {ChevronDownIcon, ChevronUpIcon} from "@heroicons/vue/solid";

export default {
    name: "Card",
    components: {ChevronDownIcon, ChevronUpIcon},
    props: {
        titles: Object,
        posters_path: String,
    },
    data() {
        return {
            open: [],
            old_index: null,
        }
    },
    methods: {
        openSummary(index) {
            if(index !== this.old_index) {
                this.open[this.old_index] = false;
                this.old_index = index;
            }
            this.open[index] = !this.open[index]
        },
        arrToString(a) {
            if (a) {
                let str = '';
                const arr = a.split(',');
                const total = arr.length - 1;
                for (let i = 0; i <= total; i++) {
                    if (arr[i] !== 'DVD Blu-ray') {
                        if (i === total) {
                            str += arr[i]
                        } else {
                            str += arr[i] + ' | '
                        }
                    }

                }
                return str;
            }
        },
    }
}
</script>

<style scoped>

</style>