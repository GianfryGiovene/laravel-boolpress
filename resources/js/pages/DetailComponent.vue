<template>
    <div class="container">
        <div class="col-12 text-center">
            <h2>{{ post.title }}</h2>
        </div>
        <div>
            <img :src=" '/storage/' + post.image_cover " alt="" />
        </div>
        <p class="text-center">
            {{post.content}}
        </p>
        <div class="row">
            <div class="mr-3">
                <h5>Tags:</h5>
                <ul class="row list-unstyled">
                    <li :key="tag.id" v-for="tag in post.tags">{{ tag.name }}</li>
                </ul>
            </div>
            <div>
                <h5>Category</h5>
                <span>{{ post.category.name }}</span>
            </div>
        </div>

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
            if(status === 200 && data.success)
            this.post = data.result;
            console.log(this.post);
            }).catch(e=>console.log(e))

    }
}
</script>

<style lang="scss" scoped>
.container{
    img{
        width: 100%;
    }
}
</style>
