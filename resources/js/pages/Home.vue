<template>
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

            <div class="col-6 p-lg-5 mx-auto" style="width: 60%;">
                <div class="srcbar rounded" style="background:rgba(0, 0, 0, 0.274);">
                    <p class="py-2 lead fw-normal text-white d-flex justify-content-center">Trova lo specialista che fa per te</p>
                    <h1 class="display-6 fw-normal text-white d-flex justify-content-center">Prenota la tua visita</h1>
                    <form method="get" action="/" class="py-4 px-4 d-flex justify-content-between" >
                            <input name="q" class="span5 rounded" type="text"  placeholder="Cardiologo" style="width: 45%; border: orange 2px solid;">
                            <input name="loc" class="span5 rounded " type="text"  placeholder="Roma" style="width: 30%; border: orange 2px solid;">
                            <button type="submit" class="btn orange">Cerca</button>
                            <button type="submit" class="btn orange">Ricerca Avanzata</button>

                    </form>
                </div>
            </div>

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
    .jumbotron {
        height: 80px;
        background-color: #3a6ea5;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        .btn.orange {
                background-color:#ff6700;
                border-radius: 8px;
                color: white;
                transition: .5s;
        }       
    }
}

</style>