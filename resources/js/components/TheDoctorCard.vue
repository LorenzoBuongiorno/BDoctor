<template>
<div class="mx-auto p-4">
  <div class="card col-xl-4 col-md-6 col-sm-8 col-xs-12">
    <div class="card-header bg-info text-white text-end">{{doc.city}}</div>
    <img :src="doc.photo ? doc.photo : 'https://blumagnolia.ch/wp-content/uploads/2021/05/placeholder-126.png'" class="card-img-top" alt="..."  />
    <div class="card-body">
      <h1>{{ doc.name }} {{ doc.surname }}</h1>
      <h4>{{ doc.specialization }}</h4>
      <h6>{{ doc.medicalService }}</h6>
      <p class="card-text" v-html="doc.curriculum"></p>
    </div>

    <!-- <button class="btn btn-info text-white text-end">Dettagli dottore ></button> -->
    <div class="btn btn-info text-white text-end">
      <router-link :to=" { name: 'doctors.show' }" title="Mostra dettagli del medico">Dettagli medico > </router-link>
    </div>
  </div>

</div>
</template>

<script>
export default {
  props: { doc: Object },
};
</script>

<style lang="scss" scoped>
.card {

  width: 400px;
  height: 500px;

  img {
    object-fit: fill;
    height: 280px; 
  }

  .card-body {
    height: 250px;
    overflow-y: auto;
  }

}
</style>