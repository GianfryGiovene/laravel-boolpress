<template>
    <div>
        ciao sono dettaglio
    </div>
</template>

<script>
export default {
    name: 'DetailComponent',

    data(){
        return{
            post: undefined
        }
    },
    mounted(){
        // recupero id con:
        const id = this.$route.params.id;
        window.axios.get('http://127.0.0.1:8000/api/posts/' + id).then(({status, data})=>{
            if(status === 200 && data.success)
            this.post = data.result;
            console.log(this.post);
            }).catch(e=>console.log(e))

    }
}
</script>

<style>

</style>
