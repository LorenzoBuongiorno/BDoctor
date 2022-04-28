<template>
    <div class="review">

        <h4>
            Lascia una recensione
        </h4>

        <!-- sistema di voto -->
        <div class="vote my-3">
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

        <div class="form-floating my-1">
            <input type="text" class="form-control" id="floatingInput" placeholder="Nome" v-model="newReview.name">
            <label for="floatingInput">Nome</label>
        </div>

        <div class="form-floating my-1">
            <textarea class="form-control" placeholder="Leave a review here" id="floatingTextarea2" style="height: 200px" v-model="newReview.text"></textarea>
            <label for="floatingTextarea2">Scrivi qui la tua recensione...</label>
        </div>
        <button class="btn btn-outline-info my-2 ms-1" @click="openModale(), postReview()">Invia</button>
        <!-- <div class="btn btn success" @click="postReview()">form</div> -->
        <div class="bg-modale">
      <div class="modale-contents">
        <h5>La tua recensione è stata inviata.</h5>
        <button class="close btn btn-outline-info my-2 mt-4" @click="closeModale()">Invia un'altra recensione.</button>
      </div>
    </div>
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

            await axios.post('api/review', this.newReview);

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
         openModale() {
      document.querySelector(".bg-modale").style.display = "flex";
    },

    closeModale() {
      document.querySelector(".bg-modale").style.display = "none";
    },
    }

}
</script>

<style lang="scss" scoped>
    .review {
        position: relative;
}
 .bg-modale {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      display: none;
      justify-content: center;
      align-items: center;
      border-radius: 20px;
    }
    
    .modale-contents {
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

        .vote {

            .fa-star {
                font-size: 30px;
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
