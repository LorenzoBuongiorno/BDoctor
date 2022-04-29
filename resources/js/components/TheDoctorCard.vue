<template>
 <!-- new doctor list -->
      

          <div class="row justify-content-center">

            <!-- foto -->
            <div class="col-10 col-md-3 px-0 img-div">
              <img :src="doctor.photo" :alt="'photo-'+doctor.surname"
              @click="pagePush(doctor)"
              >
            </div>

            <!-- info -->
            <div class="col-10 col-md-7 mt-3 px-0">
              <div class="h-100 info-card">
                <h3 class="">
                  {{doctor.name}} {{doctor.surname}}
                </h3>

                <h5>
                  {{doctor.specialization}}
                </h5>

                <div>Prestazioni:</div>
                <div>
                  {{doctor.medicalService}}
                </div>

                <button 
                class="btn orange"
                @click="pagePush()"
                >
                  Dettaglio dottore
                </button>
              </div>
            </div>
            <!-- end of info -->
    
          </div>
</template>

<script>
import axios from "axios";
import router from '../router';

export default {
  props: { 
    doctor: Object 
  },
  data() {
    return {

    }
  }, // end of data
  methods:{
    pagePush: function(){
      // <router-link :to=" { name: 'doctors.show', params: { doc: doc.id } }">Dettagli medico</router-link>
      router.push({ name: 'doctors.show', params: { doc: this.doctor.id } })
      // router.push({ name: 'user', params: { username: 'eduardo' } })
    },

  },
  mounted() {

  }
};
</script>

<style lang="scss" scoped>
  
      .row {

        height: 200px;
        .img-div {
          border-bottom: #ff6700 3px solid;
          overflow: hidden;
          border-top-left-radius: 20px;
          border-top-right-radius: 20px;
          height: 100%;

          &:hover img {
            transform: scale(1.1);
            transition: 0.3s;
          }
          img {
          width: 100%;
          height: 100%;
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
    
</style>