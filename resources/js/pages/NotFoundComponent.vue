<template>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                404 - NOT FOUND
            </div>
            <div class="col-12 text-center">
                <!-- ci permette di definire dove mandare l'utente quando viene cliccato -->
                <router-link :to="{name: 'home'}">Back to Home</router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:'NotFoundComponent',
}
</script>

<style>

</style>
