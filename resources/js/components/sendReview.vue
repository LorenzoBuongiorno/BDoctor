<template>
    <div class="review">

        <div class="d-flex align-self-center " >
            <h4 style="color:#ff6600b3;">Lascia una recensione</h4>

            <!-- sistema di voto -->
            <div class="vote px-2 ms-auto">
                <i
                v-for="index in 5"
                :key="index" 
                @click="voteStars(index)"
                @mouseover="mouseOver(index)"
                @mouseleave="mouseLeave()"
                class="fa-solid fa-star mx-1"
                :class="colorStars(index)"
                >
                </i>
            </div>
            <!-- end of sistema di voto -->
        </div>

        <div class="form-floating my-1">
            <input type="text" class="form-control" id="floatingInput" placeholder="Nome" v-model="newReview.name">
            <label for="floatingInput">Nome</label>
        </div>

        <div class="form-floating my-1">
            <textarea class="form-control" placeholder="Leave a review here" id="floatingTextarea2" style="height: 262px" v-model="newReview.text"></textarea>
            <label for="floatingTextarea2">Scrivi qui la tua recensione...</label>
        </div>
        <button class="btn btn-outline-info my-2 ms-1" @click="postReview()">Invia</button>
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
            hoverState: 'false',
            hoverIndex: '',
            vote: '',
            newReview: {
                name: '',
                vote: '',
                text: '',
                doctor_id: '',
            },

        }
    }, // end of data
    methods: {
        postReview: async function() {
            this.newReview.vote = this.vote;
            this.newReview.doctor_id = this.doctor_id;

            console.log(this.newReview);

            if(this.newReview.vote == ''){
                 alert("Selezionare il voto della review");
             } else if (this.newReview.name == ''){
                alert("Nome mancante nella review");
             } else {
                alert("La review è stata inviata");
             }


            await axios.post('api/review', this.newReview);

            this.newReview.name = '';
            this.newReview.email = '';
            this.newReview.text = '';
            this.newReview.vote = '';
            this.vote = '';

        },
        mouseOver: function(index) {
            // this.hoverState = true;
            this.hoverIndex = index;
        },
        mouseLeave: function() {
            // this.hoverState = false;
            
        },
       
        voteStars: function(index) {
            this.vote = index
            return index <= this.vote ? true : false

        },
        colorStars: function(index) {
            if(index <= this.vote) {
                return 'selected'
            } else if (index <= this.hoverIndex) {
                return 'active'
            } 
        },
    }

}
</script>

<style lang="scss" scoped>
        .vote {

            .fa-star {
                font-size: 15px;
                color: #ccc;
                cursor: pointer;

            }
            .fa-star.active {
                color: rgb(253, 242, 116);
            }
            .fa-star.selected {
                color: #ff6700;
            }

        }
    
</style>
