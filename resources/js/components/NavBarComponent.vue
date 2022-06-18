<template>
    <ul class="row list-unstyled">
        <li class="px-2 mx-2 btn btn-primary align-self-center" v-for='(item,index) in headerNav' :key='index'><a class="text-decoration-none text-dark " :href="item.link">{{item.name}}</a></li>
    </ul>
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
