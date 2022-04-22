<template>
    <div>
        <TheNavbar/>

        <div class="container">
            <div class="row">
                <h1 class="pt-4 px-4 pb-2"><span style="color: #ff6700;">Pagina dettagli</span> Dott. {{doc.surname}}</h1>

                <!-- colonna informazioni -->
                <div class="col-12 col-md-8 px-4">

                    <div class="infos d-flex flex-column justify-content-between p-4">

                        <img class="align-self-center" :src="doc.photo"/>
                        
                        <h2 class="py-4"> {{doc.name}} {{doc.surname}}</h2>
                       
                        <!-- <h4>{{ doc.specialization["specialization"]}}</h4>  -->

                        <h5>{{ doc.medicalService }}</h5>
                        <p class="card-text" v-html="doc.curriculum"></p>

                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center py-4">
                            <span class="text-center px-2">
                                <i class="fa-solid fa-at"></i>
                                {{doc.email}}
                            </span>

                            <span class="text-center px-2">
                                <i class="fa-solid fa-phone"></i>
                                {{doc.number}}
                            </span>

                            <span class="text-center px-2">
                                <i class="fa-solid fa-map-location-dot"></i>
                               {{doc.address}}, {{doc.city}}
                            </span>
                        </div>
                    </div>

                </div>
                <!-- end of colonna informazioni -->

                <!-- colonna form -->
                <div class="col-12 col-md-4 p-4">
                     <!-- sezione messaggi -->
                    <form action="">
                        <h4>Contatta il tuo medico!</h4>
                        <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Scrivi qui il tuo messaggio...</label>
                        </div>
                        <button class="btn btn-outline-info my-2">Invia</button>
                    </form>
                     <!-- end of sezione messaggi -->        

                    <!-- sezione recensioni -->
                    <send-review
                    :doctor_id="doc.id"
                    />
                    <!-- end of sezione recensioni -->
                </div>
                <!-- end of colonna form -->
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import TheNavbar from "../../components/TheNavbar.vue";
import SendReview from '../../components/sendReview.vue';

export default {
    components: { TheNavbar, SendReview },
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
.container {
    .row {
        .infos {
            img {
                object-fit: cover;
                width: 440px;
                height: 320px;
                border-radius: 50px; 
                box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
            }
        }
    }
}
</style>