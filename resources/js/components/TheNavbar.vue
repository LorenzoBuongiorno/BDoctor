<template>
<div>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid mx-4 py-2">
      <a class="navbar-brand fs-2" href="/">BDoctor.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item m-1">
            <a class="nav-link btn btn-info" href="/login">Accedi</a>
          </li>
          <li class="nav-item m-1">
            <a class="nav-link btn orange" href="/register">Sei un dottore? <span class="text-white"> Iscriviti! </span></a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
</div>
    
</template>

<script>
export default {}
</script>

<style lang="scss" scoped>
nav {
  background-color: #3a6ea5;
  position: fixed;
  width: 100%;
  z-index: 5;
    
  .btn.orange {
    background-color: #ff6700;
    color: whitesmoke;
  }

  ul {
    li {
      list-style: none;
    }
  }
}
</style>