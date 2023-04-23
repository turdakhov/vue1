<template>
    <section v-show="assignments.length">
        <h2 class="font-bold mb-2">
            {{ title }}
            <span>
                ({{ assignments.length }})
            </span>
        </h2>

        <div class="flex gap-2">
            <button
                @click="currentTag = tag"
                v-for="tag in tags"
                class="border rounded px-1 py-px text-xs"
                :class="{
                    'border-blue-500 text-blue-500': tag == currentTag
                }"

                >{{ tag }}</button>
        </div>

        <ul class="border border-gray-600 divide-y divide-gray-600 mt-6">
            <assignments-list-item
                v-for="assignment in filteredAssignments"
                :key="assignment.id"
                :assignment="assignment"
            ></assignments-list-item>
        </ul>
    </section>
</template>

<script>
import AssignmentsListItem from './AssignmentsListItem.vue';

export default {
    components: {
        AssignmentsListItem,
    },
    props: {
        assignments: Array,
        title: String,
    },

    data() {
        return {
            currentTag: 'all'
        };
    },

    computed: {
        filteredAssignments() {
            if (this.currentTag == 'all') {
                return this.assignments;
            }
            return this.assignments.filter(a => a.tag == this.currentTag);
        },
        tags() {
            return ['all', ...new Set(this.assignments.map(a => a.tag))];
        }
    }
}
</script>
