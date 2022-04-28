<template>
  <div class="message">
    <h4>Contatta il medico per un appuntamento</h4>

  

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

<<<<<<< HEAD
<<<<<<< HEAD
        <button class="btn btn-outline-info my-2" @click="postMessage()">Invia</button>
        <h2>prova</h2>
=======
    <button class="btn btn-outline-info my-2" @click="openModal()">
      Invia
    </button>
>>>>>>> origin/modals
=======
      <button class="btn btn-outline-info my-2 ms-1" @click="openModal(), postMessage()">Invia</button>
>>>>>>> 2789bc5f328003ceaf630c39d0ece895e97d582c

    <div class="bg-modal">
      <div class="modal-contents">
        <h5>Il tuo messaggio è stato inviato.</h5>
        <button class="close btn btn-outline-info my-2 mt-4" @click="closeModal()">Invia un altro messaggio.</button>
      </div>
    </div>
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
      await axios.post("api/message", this.newMessage);
    },
    openModal() {
      document.querySelector(".bg-modal").style.display = "flex";
    },

    closeModal() {
      document.querySelector(".bg-modal").style.display = "none";
    },
  },
};
</script>

<style lang="scss" scoped>
.message{
    position: relative;
}
 .bg-modal {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      display: none;
      justify-content: center;
      align-items: center;
      border-radius: 20pxpx;
    }
    
    .modal-contents {
      width: 100%;
      height: 100%;
      background-color: white;
      text-align: center;
      padding: 20px;
      position: relative;
      border-radius: 4px;
      background-color: #3A6EA5;
      overflow: auto;
    }
    
    .close {
        width: 190px;
        margin: 50px auto;
        bottom: 0;
        font-size: 14px;
    }
</style>
