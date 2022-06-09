<template>
    <header class="container">
        <div class="row">
            <div class="col-12 text-center">
                <NavBarComponent :headerNav="navBar" />
            </div>
        </div>
    </header>
</template>

<script>
import NavBarComponent from './NavBarComponent.vue'

export default {
    name:'HeaderComponent',
    data(){
        return{
            navBar: [
                {
                    name:'Home',
                    link:'/',
                },
                {
                    name:'Posts',
                    link:'/blog',
                }
            ]
        }
    },
    components:{
        NavBarComponent,
    }
}
</script>

<style lang='scss' scoped>
header{
    border-bottom: 1px solid red;
}
</style>
