<template>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div v-if="success" class="alert alert-success" role="alert">
                    Messaggio inviato correttamente
                </div>
                <form method="post" @submit.prevent="sendForm()">
                    <div>
                        <label for="email">email</label>
                        <input v-model="email" type="email" name="email"/>
                        <!-- errors -->
                        <div v-if="errors && errors.email" >
                            <ul>
                                <li v-for="(errorText,index) in errors.email" :key="'error_name_' + index">
                                    {{errorText}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <label for="name">Name</label>
                        <input v-model="name" type="text" name="name"/>
                        <!-- errors -->
                        <div v-if="errors && errors.name" >
                            <ul>
                                <li v-for="(errorText,index) in errors.name" :key="'error_name_' + index">
                                    {{errorText}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <label for="message">message</label>
                        <textarea v-model="message" name="message"></textarea>
                        <div v-if="errors && errors.message" >
                            <ul>
                                <li v-for="(errorText,index) in errors.message" :key="'error_name_' + index">
                                    {{errorText}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <input type="submit" :disabled="sending" value="Send"/>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:'ContactsComponent',
    data(){
        return{
            email: '',
            name:'',
            message:'',
            sending: false,
            success: false,
            errors: undefined,
        }
    },
    methods:{
        sendForm(){
            console.log('invio il form');
            this.sending = true;
            this.success = false;
            window.axios.post('/api/contacts', {
                name: this.name,
                email: this.email,
                message: this.message
            }).then(({data, status})=>{
                console.log(data);
                this.sending = false;
                if(status === 200){
                    this.success = data.success;
                    if(!data.success){
                        this.errors = data.errors;
                        console.log('lui',this.errors);
                    }
                }
                // this.message = '';
            }).catch(error => console.log(error))

        }
    }
}
</script>

<style>

</style>
