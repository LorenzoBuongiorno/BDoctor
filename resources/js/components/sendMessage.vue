<template>
   
    <div class="message">
        <h4>Contatta il medico per un appuntamento</h4>

        <div class="form-floating my-1">
            <input type="text" class="form-control" id="floatingInput" placeholder="Nome" v-model="newMessage.name">
            <label for="floatingInput">Nome</label>
        </div>

        <div class="form-floating my-1">
            <input type="email" class="form-control" id="floatingInput2" placeholder="email" v-model="newMessage.email">
            <label for="floatingInput2">email</label>
        </div>

        <div class="form-floating my-1">
            <textarea class="form-control" id="floatingTextarea2" style="height: 200px" placeholder="Scrivi qui il tuo" v-model="newMessage.text"></textarea>
            <label for="floatingTextarea2">Scrivi qui il tuo messaggio</label>
        </div>

        <button class="btn btn-outline-info my-2" @click="postMessage()">Invia</button>

    </div>
</template>

<script>
import axios from 'axios';

export default {
    props: {
        doctor_id: Number,
    },
    data(){
        return {
            newMessage: {
                name: '',
                email:'',
                text: '',
                doctor_id: '',
            }
        }
    }, // end of data
    methods: {
        postMessage: async function() {
            this.newMessage.doctor_id = this.doctor_id;
            await axios.post('api/message', this.newMessage);

        },
    }

}
</script>

<style lang="scss" scoped>
    
</style>