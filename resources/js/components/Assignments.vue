<template>
    <section class="flex gap-8">
        <assignments-list :assignments="filters.inProgress" title="In Progress">
            <assignments-create-form @add="add"></assignments-create-form>
        </assignments-list>
        <div v-show="showCompleted">
            <assignments-list

                :assignments="filters.completed"
                title="Completed"
                can-toggle
                @toggle="showCompleted = !showCompleted"
            ></assignments-list>
        </div>
        <!-- <assignments-create-form @add="add"></assignments-create-form> -->
        <!-- div>{{ assignments }}</div -->
    </section>
</template>

<script>
import AssignmentsList from './AssignmentstList.vue';
import AssignmentsCreateForm from './AssignmentsCreateForm.vue';
import { getTransitionRawChildren } from 'vue';
export default {
    components: {
        AssignmentsList, AssignmentsCreateForm
    },
    // data() {
    //     return {
    //         assignments: [
    //             { name: 'Finish prject', complete: false, id: 1, tag: 'math' },
    //             { name: 'Read chapter 4', complete: false, id: 2, tag: 'science' },
    //             { name: 'Turn in homework', complete: false, id: 3, tag: 'math' }
    //         ],
    //     };
    // },

    data() {
        return {
            assignments: [],
            showCompleted: true,
        }
    },
    /*
    // data() {
    //      return {
    //         assignments: this.assignments ? JSON.parse(this.assignments) : '',
    //     }
    // },
    // */

    props: {
        assignmentsProp: {
            type: Object,
            defaut: function() {}
        }
    },

    computed: {
        filters() {
            return {
                inProgress: this.assignments.filter(assignment => !assignment.complete),
                completed: this.assignments.filter(assignment => assignment.complete)
            }
        }
    },

    created() {
        fetch('http://localhost:48091/tasks')
            .then(response => response.json())
            .then(assignments => {
                this.assignments = assignments;
                console.log(assignments);
            });
    },

    methods: {
        add(name) {
            this.assignments.push({
                name: name,
                complete: false,
                id: this.assignments.length + 1,
            });
        }
    }
}
</script>
