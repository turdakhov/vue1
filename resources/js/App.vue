<template>
    <h2>Assignments</h2>
    <ul>
        <li>Finish project</li>
        <li>Read chapter 4</li>
        <li>Turn in homework</li>
    </ul>
</template>
<script>
export default {
    data() {
        return {
            active: false,
        };
    },

    methods: {
        toggle() {
            this.active = ! this.active;
        }
    }
}
</script>
<style>
    .text-red {
        color: red;
    }
    .text-green {
        color: green;
    }
</style>
