<template>
  <div  v-if="total > 3" class="mt-4">
    <ul>
      <li v-for="(page, i) in links" class="inline-block border border-blue-600 rounded-sm ml-px py-2 px-3"
          :class="{ 'bg-blue-700 text-white': page.active }">
        <Link v-if="i === 0" :href="page.url" v-html="'&laquo;'"></Link>
        <Link v-else-if="i === total" :href="page.url" v-html="'&raquo;'"></Link>
        <Link v-else :href="page.url" v-html="page.label"></Link>
      </li>
    </ul>
  </div>
</template>
<script>
import {Link} from "@inertiajs/inertia-vue3";
export default {
  name: "PaginationLink",
  components: {Link},

  props: {
    links: Array
  },

  data() {
    return {
      total: this.links.length - 1
    }
  }
}
</script>