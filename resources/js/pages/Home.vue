<template>
    <div class="home-container">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="/">BDoctor.it</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <!-- <ul class="navbar-nav">

                        <li class="nav-item active btn orange me-2">
                        </li>
                        <li class="btn btn-outline-info">
                            <a class="nav-link text-white" href="/login">ACCEDI</a>
                        </li>
                    </ul> -->

                    <ul class="navbar-nav ms-5">
                        <li class="nav-item" v-if="!doctor">
                            <a class="nav-item active btn orange me-2" href="/register"> Sei un dottore? <span class="text-white"> Iscriviti! </span> </a>
                            <a class="btn btn-outline-info" href="/login"> Accedi </a>
                        </li>
                        <li v-else>
                            <a class="nav-link" href="/dashboard" > Benvenuto Dr. {{ $doctor.surname }}! </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- end of navbar -->
      
        <!-- jumbotron -->
        <div class="jumbotron d-flex justify-content-center align-items-center py-4">
            <div class="text-search col-lg-6 d-flex flex-column justify-content-center align-items-center">
                
                <p class="fw-normal text-white">Trova lo specialista che fa per te</p>
                <h1 class="fw-normal text-white">Prenota la tua visita</h1>
                
                <form method="get" action="/" class="text-center p-2" >
                    <input name="q" class="col-7 rounded" type="text"  placeholder="Cardiologo">
                    <input name="loc" class="col-4 rounded " type="text"  placeholder="Roma">
                </form>
                <div class="py-2">
                    <button type="submit" class="btn orange">Cerca</button>
                    <button type="submit" class="btn orange">Ricerca Avanzata</button>
                </div>


            </div>
            
        </div>
        <!-- end of jumbotron -->
      
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data() {
        return {
            doctor: null,
        };
    },
    
}
</script>

<style lang="scss" scoped>

.home-container {
   
    .btn.orange {
        background-color: #ff6700;
        color: whitesmoke;
    }  
    
    nav {
        height: 80px;
        background-color: #3a6ea5; 
    }

    .jumbotron {
        height: 91.5vh;
        background-image: url('https://www.juniordoctors.eu/themes/custom/ejd/images/ejd-home-header.jpg');
        // filter: blur(8px);
        // -webkit-filter: blur(8px);
        background-size: cover;
        background-position: center;

        
        .text-search {
            height: 200px;
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background:rgba(0, 0, 0, 0.274);

            input {
                border: 2px solid orange;
                // border-radius: 8px;
                // background: rgba(0, 0, 0, 0.274);
            }
        }
    }
}

</style>