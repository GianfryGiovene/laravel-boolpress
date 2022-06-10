<template>
    <div>
        <div class="border" :key='post.id' v-for="post in posts">
            <h2>{{post.title}}</h2>
            <p>{{post.content}}</p>
        </div>
    </div>
</template>

<script>
export default {
    name:'BlogCardComponent',
    props:{
        posts:Array,
    }

}
</script>

<style>

</style>
