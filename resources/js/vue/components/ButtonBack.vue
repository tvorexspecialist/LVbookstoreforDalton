<template>
    <a @click="goBack()" href="#"
        class="btn btn-primary"
        :title="title"
    >
        &laquo; {{ title }}
    </a>
</template>

<script>
export default {
    props: ['title'],
    methods: {
        goBack() {
            window.history.back();
        }
    }
}
</script>