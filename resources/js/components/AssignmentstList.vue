<template>

    <panel v-show="assignments.length" class="w-60">
        <template #heading>
            This is heading!
        </template>

        <div class="flex justify-between items-start">
            <h2 class="font-bold mb-2">
                {{ title }}
                <span>
                    ({{ assignments.length }})
                </span>
            </h2>
            <button v-show="canToggle" @click="$emit('toggle')">&times;</button>
        </div>

        <AssignmentsTags
            v-model:currentTag="currentTag"
            :initial-tags="assignments.map(a => a.tag)"
        ></AssignmentsTags>

        <ul class="border border-gray-600 divide-y divide-gray-600 mt-6">
            <assignments-list-item
                v-for="assignment in filteredAssignments"
                :key="assignment.id"
                :assignment="assignment"
            ></assignments-list-item>
        </ul>
        <slot></slot>
    </panel>
</template>

<script>
import AssignmentsTags from './AssignmentsTags.vue';
import AssignmentsListItem from './AssignmentsListItem.vue';
import Panel from './Panel.vue';

export default {
    components: {
        AssignmentsTags, AssignmentsListItem, Panel
    },
    props: {
        assignments: Array,
        title: String,
        canToggle: {type: Boolean, default: false }
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
