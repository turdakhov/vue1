<template>
    <section v-show="assignments.length">
        <h2 class="font-bold mb-2">
            {{ title }}
            <span>
                ({{ assignments.length }})
            </span>
        </h2>

        <assignments-tags
            v-model:currentTag="currentTag"
            :initial-tags="assignments.map(a => a.tag)"
        ></assignments-tags>

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
import AssignmentsTags from './AssignmentsTags.vue';
import AssignmentsListItem from './AssignmentsListItem.vue';

export default {
    components: {
        AssignmentsTags, AssignmentsListItem
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
    }
}
</script>
