<template>
    <div class="container">
        <div class="row justify-content-between">
            <h2>{{post.title}}</h2>
            <router-link :to="{ name: 'detail', params:{ slug: post.slug } }"> DETTAGLIO </router-link>
        </div>
    </div>
</template>

<script>
export default {
    name:'BlogCardComponent',
    props:{
        post:Object,
    }

}
</script>

<style>

</style>
