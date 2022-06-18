<template>
    <header class="container ">
        <div class="container row align-items-center justify-content-between">
            <div class="col-3">
                <img id="logo" src="assets/logo-boolpress.jpg" alt="">
            </div>
            <div class="p-2">
                <NavBarComponent  :headerNav="navBar" />
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
    max-height: 80px;
    border-bottom: 1px solid red;
    #logo{
        width: 100px;
    }
}
</style>
