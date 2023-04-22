<template>
    <section v-show="assignments.length">
        <h2 class="font-bold mb-2">{{ title }}</h2>
        <ul>
            <assignments-list-item
                v-for="assignment in assignments"
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
    components: { AssignmentsListItem }
}
</script>
