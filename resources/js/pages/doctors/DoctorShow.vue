<template>
    <div>
        <!-- navbar -->
        <!-- <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">BDoctor.it</a>
            <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarNav"
            >
            
            <ul class="navbar-nav ms-5">
                <li class="nav-item" v-if="!doctor">
                <a class="nav-item active btn orange me-2" href="/register"> Sei un dottore? <span class="text-white"> Iscriviti! </span> </a>
                <a class="btn btn-outline-info" href="/login"> Accedi </a>
                </li>
                <li v-else>
                <a class="nav-link" href="/dashboard" > Benvenuto Dr. {{ $doctor.surname }}! </a> 
                </li>
            </ul>
            </div>
        </div>
        </nav> -->
        
        <TheNavbar/>
        <h1>Pagina Dettagli</h1>
        <h1> {{doc.name}} </h1>

    </div>
</template>

<script>
import axios from "axios";
import TheNavbar from "../../components/TheNavbar.vue";

export default {
    components: { TheNavbar },
   data() {
    return {
      doc: {},
    };
  },
  methods: {
    async fetchDoctor() {
        const resp = await axios.get("/api/doctors/" + this.$route.params.doc);
        this.doc = resp.data;
    },
  },
  mounted() {
    console.log(this.$route.params.doc);
    this.fetchDoctor();
  },
   
};
</script>

<style lang="scss" scoped>

</style>