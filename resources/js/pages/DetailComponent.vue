<template>
    <div>
        <h2>{{ post.title }}</h2>
    </div>
</template>

<script>
export default {
    name: 'DetailComponent',

    data(){
        return{
            post: {}
        }
    },
    mounted(){
        // recupero id con:
        const slug = this.$route.params.slug;
        window.axios.get('http://127.0.0.1:8000/api/posts/' + slug)
        .then(({status, data})=>{
            console.log('data?', data)
            if(status === 200 && data.success)

            this.post = data.result;
            console.log(this.post);
            }).catch(e=>console.log(e))

    }
}
</script>

<style>

</style>
