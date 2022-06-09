<template>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                Blog
                <div :key='index' v-for="(post,index) in posts"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:'BlogComponent',
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
