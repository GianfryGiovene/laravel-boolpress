<template>
    <div class="container">
        <div class="row justify-content-between">
            <router-link class="text-decoration-none text-dark" :to="{ name: 'detail', params:{ slug: post.slug } }">
                <h2>{{post.title}}</h2>
            </router-link>
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

<style lang="scss" scoped>
    div.container{

    }
</style>
