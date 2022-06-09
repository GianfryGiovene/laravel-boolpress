<template>
    <ul class="row list-unstyled ">
        <li class="px-2" v-for='(item,index) in headerNav' :key='index'><a :href="item.link">{{item.name}}</a></li>
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
