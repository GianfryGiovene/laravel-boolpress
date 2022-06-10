<template>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                Blog
                <div class="border " :key='post.id' v-for="post in posts">
                    <div v-if="post">
                        <BlogCardComponent :post="post" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import BlogCardComponent from '../components/BlogCardComponent.vue'
export default {
    name:'BlogComponent',
    components:{
        BlogCardComponent,
    },
    data(){
        return {
            posts: [],
        }
    },

    mounted(){

            window.axios.get('http://127.0.0.1:8000/api/posts').then(({status,data})=>{
                if(status === 200 && data.success)
                this.posts = data.result;
                }).catch(e=>console.log(e))

    },
}

</script>

<style>

</style>
