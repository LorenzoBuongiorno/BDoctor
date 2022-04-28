<template>

  <div class="home-container">

    <!-- jumbotron -->
    <div class="main-content">
      <div class="jumbotron d-flex justify-content-center align-items-center flex-column py-4">
        <div class="text-search col-lg-6 d-flex flex-column justify-content-center align-items-center">
          <p class="fw-normal text-white">Trova lo specialista che fa per te</p>
          <h1 class="fw-normal text-white">Prenota la tua visita</h1>

          <form method="get" action="/" class="text-center p-2">
            <input
              name="specialization"
              class="col-7 rounded"
              type="text"
              placeholder="Cardiologo"
              v-model="specialization"
            />
            <input
              name="city"
              class="col-4 rounded"
              type="text"
              placeholder="Roma"
              v-model="city"
            />
          </form>
          <div class="py-2">
            <button
              type="submit"
              class="btn orange"
              @click="search(city, specialization)"
              href="/search"
            >
              Cerca
            </button>
          </div>
        </div>
      </div>
      <!-- end of jumbotron -->

      <!-- doctors list -->
      <div class="container">
          <div class="row">
              <div class="d-flex flex-wrap">
              <TheDoctorCard v-for="doc in filteredDoc" :key="doc.id" :doc="doc" />
              </div>
          </div>
      </div>
    </div>
  </div>

</template>

<script>
import axios from "axios";
import TheDoctorCard from "../components/TheDoctorCard.vue";

export default {
  components: { 
    TheDoctorCard 
  }, 
  data() {
    return {
      doctors: [],
      city: "",
      specialization: "",
    };
  }, // end of data
  mounted() {

  },
  methods: {
    search(city, specialization) {
      axios.get("/api/doctor?city=" +
            city +
            "&specialization=" +
            specialization
        ).then((element) => {
          this.doctors = element.data;
        });
    },
  }, // end of methods
  computed: {
    filteredDoc () {
      return this.doctors.filter((v,i,a)=>a.findIndex(t=>(t.id===v.id))===i)
    }
  }, // end of computed
};
</script>

<style lang="scss" scoped>
.main-content{

    background: rgb(58,110,165);

  .jumbotron {
    background: linear-gradient(0deg, rgba(58,110,165,1) 65%, rgba(255,255,255,0) 91%);
    height: 100vh;
    background: linear-gradient(to top, rgba(58,110,165,1) 0%, rgba(255,255,255,0) 15%), url("https://www.juniordoctors.eu/themes/custom/ejd/images/ejd-home-header.jpg");  
    // filter: blur(8px);
    // -webkit-filter: blur(8px);
    background-size: cover;
    background-position: center;


  .btn.orange {
    background-color: #ff6700;
    color: whitesmoke;
  }

    .btn.orange {
      background-color: #ff6700;
      color: whitesmoke;
    }
      .btn.orange {
        background-color: #ff6700;
        color: whitesmoke;
      }

      .text-search {
        height: 200px;
        border-radius: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
          0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background: rgba(0, 0, 0, 0.274);

        input {
          border: 2px solid orange;
          // border-radius: 8px;
          // background: rgba(0, 0, 0, 0.274);
        }
      }
  }
}

</style>