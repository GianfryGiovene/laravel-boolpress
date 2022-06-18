<template>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Blog</h1>
                <div class="border " :key='post.id' v-for="post in posts">
                    <div v-if="post">
                        <BlogCardComponent :post="post" />
                    </div>
                    <div v-else>
                        Caricamento in corso
                    </div>
                </div>
                <div class="mt-2">
                    <button v-if="prevPageLink" class="btn btn-dark" @click="prevPage()">Prev</button>
                    <span>{{currentPage}}</span> / <span>{{lastPage}}</span>
                    <button v-if="nextPageLink" class="btn btn-dark" @click="nextPage()">Next</button>
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
            currentPage:1,
            lastPage: undefined,
            prevPageLink: undefined,
            nextPageLink: undefined,
        }
    },

    mounted(){
        this.loadPage('http://127.0.0.1:8000/api/posts')
    },
    methods:{
        loadPage(url){
            window.axios.get(url)
            .then(({status,data})=>{
                if(status === 200 && data.success)
                this.posts = data.result.data;
                this.currentPage = data.result.current_page;
                this.lastPage= data.result.last_page;
                this.prevPageLink = data.result.prev_page_url;
                this.nextPageLink = data.result.next_page_url;
                console.log(data.result);
                }).catch(e=>console.log(e))
        },
        prevPage(){
            this.loadPage(this.prevPageLink);
        },
        nextPage(){
            this.loadPage(this.nextPageLink);
        }

    }
}

</script>

<style>

</style>
