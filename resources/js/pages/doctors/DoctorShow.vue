<template>
  <div class="container">
    <div class="row">

      <!-- colonna informazioni -->
      <div class="col-12 info-container margin-top-nav">
        <div class="container">
          <!-- titolo -->
          <div class="row justify-content-center my-4">
            <h2 class="col-12 fw-bold text-white p-3 mt-2 mb-4" style="background-color:#ff6600b3;">{{doc.name}} {{doc.surname}}</h2>
          </div>
          <!-- end of titolo -->

          <!-- img + info -->
          <div class="row my-3">
            <div class="col-12 col-md-8">
              <img class="profile-img" :src="doc.photo ? doc.photo : 'https://blumagnolia.ch/wp-content/uploads/2021/05/placeholder-126.png'" alt="">

            </div>

            <div class="col-12 col-md-4 align-self-center py-4">

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
          <div class="row py-4 flex-wrap">
            <div class="col-12">
              <h4 class="fw-bold">Prestazioni:</h4>
              <div>
                {{doc.medicalService}}
              </div>
            </div>
            <div class="col-12 mt-4">
              <h4 class="fw-bold">Curriculum:</h4>
              <div>
                {{doc.curriculum}}  
              </div>
            </div>
          </div>
          <!-- end of medical info -->

          <!-- colonna interazioni -->
          <div class="interaction-container pb-4 d-flex flex-wrap justify-content-between align-items-center">
              
            <!-- sezione messaggi -->
            <send-message
            :doctor_id="doc.id"
            class="col-12 col-lg-6 pe-2 pb-2"
            />
            <!-- sezione recensioni -->
            <send-review
            :doctor_id="doc.id"
            class="col-12 col-lg-6 ps-2"
            />
          </div>
          <!-- end of colonna interazioni -->

        </div>
      </div>
      <!-- end of colonna informazioni -->

    </div>
  </div>
</template>

<script>
import axios from "axios";
import SendReview from "../../components/sendReview.vue";
import SendMessage from '../../components/sendMessage.vue';

export default {
  components: { 
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
.container {
  .margin-top-nav{
    margin-top: 100px;
    
    .profile-img {
        width: 80%;
        object-fit: cover;
        border-radius: 50px;
        box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    }
  }
}

</style>