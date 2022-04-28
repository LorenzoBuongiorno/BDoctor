<template>
  
  <div class="home-container">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
          <a class="navbar-brand" href="/">BDoctor.it</a>
          <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
          >
          <span class="navbar-toggler-icon"></span>
          </button>
          <div
          class="collapse navbar-collapse d-flex justify-content-end"
          id="navbarNav"
          >
          
          <ul class="navbar-nav ms-5 mt-2">
            <li class="nav-item">
            <a class="nav-item active btn orange me-2" href="/register"> Sei un dottore? <span class="text-white"> Iscriviti! </span> </a>
            <a class="btn btn-outline-info" href="/login"> Accedi </a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>
  </div>
    
</template>

<script>

export default {
  
}
</script>

<style lang="scss" scoped>
.home-container {
  .btn.orange {
    background-color: #ff6700;
    color: whitesmoke;
  }

  nav {
    background-color: #3a6ea5;
    position: fixed;
    width: 100%;
    z-index: 5;
  }
}

</style>