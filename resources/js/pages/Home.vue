<template>

  <div class="home-container">

    <!-- jumbotron -->
    <div class="main-content">
      <div class="jumbotron d-flex justify-content-center align-items-center flex-column py-4">
        <div class="text-search col-lg-8 d-flex flex-column justify-content-center align-items-center">
          <p class="fw-normal text-white">Trova lo specialista che fa per te</p>
          <h1 class="fw-normal text-white">Prenota la tua visita</h1>

          <div class="container my-3">
            <div class="row g-3 align-items-center">

            <!-- select specializzazioni -->
            <div class="col-12 col-md-6 offset-md-1">
              <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
              <select class="form-select" id="inlineFormSelectPref" name="specialization" v-model="specialization">
                  <option selected :value="''">Cerca per specializzazione</option>
                  <option v-for="item in specializations" :key="item.id" :value="item.specialization">
                      {{item.specialization}}
                  </option>
              </select>
            </div>

            <!-- campo città -->
            <div class="col-6 col-md-3">
              <label class="visually-hidden" for="inlineFormInputGroupUsername">Città</label>
              <div class="input-group">
                <div class="input-group-text">Città</div>
                <input 
                type="text" 
                class="form-control" 
                id="inlineFormInputGroupUsername" 
                placeholder="es. Milano"
                v-model="city"
                >
              </div>
            </div>

            <div class="col-6 col-md-1">
              <button  
              class="btn orange"
              @click="search(city, specialization)"
              >
                Cerca
              </button>
            </div>
          </div>
          </div>
          

        </div>
      </div>
      <!-- end of jumbotron -->

      <!-- doctor list -->
      <div class="d-flex flex-column doctor-list">
       
        <div class="container py-3"
        v-for="doctor in filteredDoc"
        :key="doctor.id"
        >
          <the-doctor-card
          :doctor="doctor"
          />

        </div>
      </div>
      <!-- end of doctor list -->

    </div>

  </div> 
  <!-- end of home-container -->

</template>

<script>
import router from '../router';
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
      specializations: [],
      reviews: [],
      averageVote: '',
    };
  }, // end of data
  mounted() {
    // chiamata API per specializzazioni
    axios.get("/api/specialization").then((resp) => {
      this.specializations = resp.data;
      console.log(this.specializations)
    });

    
    
  },
  methods: {
    pagePush: function(doctor){
      // <router-link :to=" { name: 'doctors.show', params: { doc: doc.id } }">Dettagli medico</router-link>
      router.push({ name: 'doctors.show', params: { doc: doctor.id } })
      // router.push({ name: 'user', params: { username: 'eduardo' } })
    },
    console: function(test) {
      console.log(test)
    },
    search: function(city, specialization) {
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

.btn.orange {
  background-color: #ff6700;
  color: whitesmoke;        
}
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

        .text-search {
          height: 200px;
          border-radius: 20px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
            0 6px 20px 0 rgba(0, 0, 0, 0.19);
          background: rgba(0, 0, 0, 0.274);

      }
    }

    .doctor-list {
      .row {

        .img-div {
          border-bottom: #ff6700 3px solid;
          overflow: hidden;
          border-top-left-radius: 20px;
          border-top-right-radius: 20px;

          &:hover img {
            transform: scale(1.2);
            transition: 0.3s;
          }
          img {
          width: 100%;
          height: 200px;
          object-fit: cover;
          border-top-left-radius: 20px;
          border-top-right-radius: 20px;
          cursor: pointer;
          transition: 0.3s;

          
        }
        }
        
        .info-card {
          padding-left: 24px;
          position: relative;
          padding-bottom: 5px;
          border-bottom: 3px #ff6700 solid;

          color: whitesmoke;
         
          button {
            background-color: #ff6700;
            color: whitesmoke;
            width: 160px;
            justify-self: flex-end;
            position: absolute;
            right: 0;
            bottom: 0;

            border-radius: 0px;
            border-top-right-radius: 15px;
            border-top-left-radius: 15px;

            transition: 0.3s;

            &:hover {
            //  background-color: #004e98;
            //  right: -5px;
            font-size: 16px;
            width: 180px;
             transition: 0.3s;
            }
          }
          
        }


      }
    }
}

</style>