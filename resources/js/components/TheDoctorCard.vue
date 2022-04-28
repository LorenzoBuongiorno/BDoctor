<template>
<div class="mx-auto p-4">
  <div class="card col-12">
    <div class="card-header bg-info text-white text-end">{{doc.city}}</div>
    <img :src="doc.photo ? doc.photo : 'https://blumagnolia.ch/wp-content/uploads/2021/05/placeholder-126.png'" class="card-img-top" alt="..."  />
    <div class="card-body">
      <h3>{{ doc.name }} {{ doc.surname }}</h3>
      <h5>{{ doc.specialization }}</h5>
      <p>{{doc.medicalService}}</p>
    </div>

    <!-- <button class="btn btn-info text-white text-end">Dettagli dottore ></button> -->
    <div class="btn btn-ouline-info text-white text-end p-2">
      <router-link :to=" { name: 'doctors.show', params: { doc: doc.id } }">Dettagli medico</router-link>
    </div>
  </div>

</div>
</template>

<script>
export default {
  props: { 
    doc: Object 
  },
};
</script>

<style lang="scss" scoped>
.card {
  // width: 400px;
  height: 500px;

  img {
    object-fit: cover;
    width: 100%;
    height: 280px; 
  }

  .card-body {
    height: 250px;
  }

}
</style>