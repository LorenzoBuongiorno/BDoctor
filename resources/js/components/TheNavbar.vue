<template>
    <div class="home-container">
        <div class="jumbotron">

            <nav class="navbar navbar-expand-lg navbar-dark">

                <div class="container-fluid">
                    <a class="navbar-brand" href="#">BDoctor.it</a>
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

        </div>

    </div>
    
    
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>
.home-container {
    
    .jumbotron {
        height: 100vh;
        background-color: #3a6ea5;
        nav {

            .nav-item.orange {
                background-color:#ff6700;
                border-radius: 8px;
            }   
        }
    }
    

    


}

</style>