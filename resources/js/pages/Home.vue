<template>
<<<<<<< HEAD
    <div class="home-container">
        <div class="jumbotron">

            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="/">BDoctor.it</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">

                            <li class="nav-item active btn orange">
                                <a class="nav-link" href="/register">Sei un dottore? Iscriviti!</a>
                            </li>
                            <li class="nav-item active btn">
                                <a class="nav-link" href="/login">ACCEDI</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="col-6 p-lg-5 mx-auto my-5">
                <div class="d-flex flex-column align-items-center">

                    <p class="lead fw-normal text-white">Trova lo specialista che fa per te</p>
                    <h1 class="display-6 fw-normal text-white">Prenota la tua visita</h1>
                    <form method="get" action="/" class="form-inline d-flex" >
                                <input name="q" class="span5" type="text"  placeholder="Cardiologo" >
                                <input name="loc" class="span5" type="text"  placeholder="Roma">
                                <button type="submit" class="btn orange">Cerca</button>
                    </form>
                </div>
                
            </div>

        </div>
        <!-- end of jumbotron -->

    </div>
=======
    <main>
        ciao da home.vue
    </main>    
>>>>>>> 5217e6c47fdb133bca84d52cb6cc2b44d3620683
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>

.home-container {
    
    .jumbotron {
        height: 100vh;
        width: 100%;
        background-color: #3a6ea5;

        .btn.orange {
                background-color:#ff6700;
                border-radius: 8px;
                color: whitesmoke;
        }

       
    }
    

    


}

</style>