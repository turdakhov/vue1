<template>
    <form @submit.prevent="add" >
        <div class="flex border border-gray-600 text-black">
            <input v-model="newAssignment" placeholder="New assignment..." class="p-2 w-3/4" />
            <button type="submit" class="bg-white p-2 border-l w-1/4">Add</button>
        </div>
    </form>
</template>
<script>
export default {
    data() {
        return {
            newAssignment: ''
        };
    },

    methods: {
        add() {
            this.$emit('add', this.newAssignment);
            this.newAssignment = '';
        }
    }
}
</script>
