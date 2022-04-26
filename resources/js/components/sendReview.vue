<template>
    <form action="POST" class="pt-4" @submit.prevent="">
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

        <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a review here" id="floatingTextarea2" style="height: 200px"></textarea>
        <label for="floatingTextarea2">Scrivi qui la tua recensione...</label>
        </div>
        <button class="btn btn-outline-info my-2">Invia</button>
    </form>
</template>

<script>
export default {
    props: {
        doctor_id: Number,
        
    },
    data(){
        return {
            hoverState: 'false',
            hoverIndex: '',
            vote: ''
        }
    }, // end of data
    methods: {
        mouseOver: function(index) {
            // this.hoverState = true;
            this.hoverIndex = index;
            console.log('index:', this.hoverIndex)
        },
        mouseLeave: function() {
            // this.hoverState = false;
            
        },
       
        voteStars: function(index) {
            this.vote = index
        
            console.log('voto: ', this.vote);
            return index <= this.vote ? true : false

        },
        // colorStars: function(index) {
        //     return index <= this.hoverIndex ? true : false
        // },
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