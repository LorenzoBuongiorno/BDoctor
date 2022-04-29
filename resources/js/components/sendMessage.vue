<template>
  <div class="message">
    <h4 style="color:#ff6600b3;">Contatta il medico per un appuntamento</h4>


    <div class="form-floating my-1">
      <input
        type="text"
        class="form-control"
        id="floatingInput"
        placeholder="Nome"
        v-model="newMessage.name"
      />
      <label for="floatingInput">Nome</label>
    </div>

    <div class="form-floating my-1">
      <input
        type="email"
        class="form-control"
        id="floatingInput2"
        placeholder="email"
        v-model="newMessage.email"
        required
      />
      <label for="floatingInput2">email</label>
    </div>

    <div class="form-floating my-1">
      <textarea
        class="form-control"
        id="floatingTextarea2"
        style="height: 200px"
        placeholder="Scrivi qui il tuo messaggio"
        v-model="newMessage.text"
      ></textarea>
      <label for="floatingTextarea2">Scrivi qui il tuo messaggio</label>
    </div>
   
    <!-- 
    <button class="btn btn-outline-info my-2" @click="postMessage()">Invia</button>
        

    <button class="btn btn-outline-info my-2" @click="openModal()">
      Invia
    </button> -->

    <button class="btn btn-outline-info my-2 ms-1" @click="postMessage()">Invia</button>

  </div>

</template>

<script>
import axios from "axios";

export default {
  props: {
    doctor_id: Number,
  },
  data() {
    return {
      reg: /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
      newMessage: {
        name: "",
        email: "",
        text: "",
        doctor_id: "",
      },
    };
  }, // end of data
  methods: {
    postMessage: async function () {
      this.newMessage.doctor_id = this.doctor_id;

      if(this.newMessage.name == ''){
                  alert("Inserire il nome mittente del messaggio");
              } else if (this.newMessage.text == ''){
                alert("Inserire il testo del messaggio");
              } else if (this.newMessage.email == ''){
                alert("Inserire l'E-mail per il messaggio");
              } else if (!this.reg.test(this.newMessage.email)){
                alert("E-mail non valida");
                } else {
                  alert("Messaggio inviato!");
              }


          await axios.post("api/message", this.newMessage);

          this.newMessage.name = '';
          this.newMessage.email = '';
          this.newMessage.text = '';


    },
  },
};
</script>

<style lang="scss" scoped>

</style>
