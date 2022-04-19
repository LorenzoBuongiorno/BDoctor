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
                    <ul class="navbar-nav">

                        <li class="btn orange me-2">
                            <a class="nav-link" href="/register">Sei un dottore? <span class="text-white"> Iscriviti! </span></a>
                        </li>
                        <li class="btn btn-outline-info">
                            <a class="nav-link" href="/login">Accedi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end of navbar -->

        <!-- jumbotron -->
        <div class="jumbotron py-4">
            <div class="text-box d-flex flex-column align-items-center">
                <p class="fw-normal text-white">Trova lo specialista che fa per te</p>
                <h1 class="fw-normal text-white">Prenota la tua visita</h1>
            </div>

            <form method="get" action="/" class="p-4" >
                <input name="q" class="col-8 rounded" type="text"  placeholder="Cardiologo">
                <input name="loc" class="col-3 rounded " type="text"  placeholder="Roma">
            </form>
            <button type="submit" class="btn orange">Cerca</button>
        </div>
        <!-- end of jumbotron -->

    </div>
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>

.home-container {

    width: 100%;
    height: 100vh;
    background-image: url('https://www.juniordoctors.eu/themes/custom/ejd/images/ejd-home-header.jpg');
    // filter: blur(8px);
    // -webkit-filter: blur(8px);
    background-size: cover;
    background-position: center;

    .btn.orange {
        background-color: #ff6700;
        color: whitesmoke;
    }  
    
    nav {
        height: 80px;
        background-color: #3a6ea5; 
    }

    .jumbotron {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background:rgba(0, 0, 0, 0.274);
        height: 200px;
        // margin-top: 50px;

        form {
            input {
                border: 2px solid orange;
                // border-radius: 8px;
                // background: rgba(0, 0, 0, 0.274);
            }
        }
    }
}

</style>