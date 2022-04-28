<template>
  <div>

    <TheNavbar />

    <div class="container">
      <div class="row my-5">

        <!-- colonna informazioni -->
        <div class="col-12 col-md-8 info-container">
          <div class="container ">
              <!-- titolo -->
              <div class="row justify-content-center my-4">
                <h2 class="col-12 title">
                   {{doc.name}} {{doc.surname}}
                </h2>
              </div>
              <!-- end of titolo -->

              <!-- img + info -->
              <div class="row my-3">
                <div class="col-12 col-md-6">
                  <img class="profile-img" :src="doc.photo ? doc.photo : 'https://blumagnolia.ch/wp-content/uploads/2021/05/placeholder-126.png'" alt="">

                </div>

               <div class="col-12 col-md-4">

                <table class="table">
                  <tbody>
                    <tr>
                      
                      <td>
                        <i class="fa-solid fa-at"></i>
                      </td>
                      <td> {{doc.email}} </td>
                      
                    </tr>
                    <tr>
                      <td>
                        <i class="fa-solid fa-phone"></i>
                      </td>
                      <td> {{doc.number}}</td>
                    </tr>
                    <tr>
                      <td>
                        <i class="fa-solid fa-map-location-dot"></i>
                      </td>
                      <td> {{doc.address}}, {{doc.city}}</td>
                    </tr>
                  
                  </tbody>
                </table>
                
               </div>
              </div>
              <!-- end of img + info -->

              <!-- medical info -->
              <div class="row my-4 flex-wrap">
                <div class="col-12">
                  <h4>
                    Prestazioni:
                  </h4>
                  <div>
                    {{doc.medicalService}}
                  </div>
                </div>
                <div class="col-12 my-4">
                  <h4>Curriculum:</h4>
                  <div>
                    {{doc.curriculum}}  
                  </div>
                </div>
              </div>
              <!-- end of medical info -->

          </div>
        </div>
        <!-- end of colonna informazioni -->

        <!-- colonna interazioni -->
        <div class="col-12 col-md-4 interaction-container">
          
          <!-- sezione messaggi -->
          <send-message
          class="my-3"
          :doctor_id="doc.id"
          />
          <!-- sezione recensioni -->
          <send-review
          class="my-3"
          :doctor_id="doc.id"
          />
        </div>
        <!-- end of colonna interazioni -->


      </div>
    </div>

  </div>
</template>

<script>
import axios from "axios";
import TheNavbar from "../../components/TheNavbar.vue";
import SendReview from "../../components/sendReview.vue";
import SendMessage from '../../components/sendMessage.vue';

export default {
  components: { 
    TheNavbar,
    SendReview,
    SendMessage,
  },
  data() {
    return {
      doc: {},
      message: {},
    };
  }, // end of data
  methods: {
    async fetchDoctor() {
      const resp = await axios.get("/api/doctor/" + this.$route.params.doc);
      this.doc = resp.data;
    },
   
  }, // end of methods
  mounted() {
    console.log(this.$route.params.doc);
    this.fetchDoctor();
  }, // end of mounted
}; 
</script>

<style lang="scss" scoped>

.profile-img {
    width: 80%;
    object-fit: cover;
    border-radius: 50px;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
}



</style>