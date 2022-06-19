<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-brand col-2">
            <a  href="/">
                <img id="logo" class="w-100" src="assets/logo-boolpress.jpg" alt="">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" v-for='(item,index) in headerNav' :key='index'>
                    <a class="nav-link" :href="item.link" >{{item.name}}</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</template>

<script>
export default {
    name:'NavBarComponent',
    props:{
        headerNav:Array,
    }
}
</script>

<style>

</style>
