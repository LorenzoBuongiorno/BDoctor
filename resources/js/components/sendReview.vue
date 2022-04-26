<template>
    <form action="" class="pt-4">
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
        
            :class="colorStars(index)"></i>
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
        <button class="btn my-2" @click="postReview()">Invia</button>
        <div class="btn btn success" @click="postReview()">form</div>
    </form>
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
            }


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
    }

}
</script>

<style lang="scss" scoped>
    form {

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
    }
</style>