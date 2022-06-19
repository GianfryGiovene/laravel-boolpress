<template>
    <header class="container ">
        <div class="row justify-content-center align-items-center col-12 ">
            <NavBarComponent  :headerNav="navBar" />
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
                },
                {
                    name:'Contacts',
                    link:'/contacts',
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
    border-bottom: 2px solid red;
}
</style>
