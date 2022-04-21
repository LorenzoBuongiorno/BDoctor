<template>
<div class="ps-4 pt-4 col-4">
  <div class="card" style="width: 18rem">
    <img :src="doc.photo ? doc.photo : 'https://blumagnolia.ch/wp-content/uploads/2021/05/placeholder-126.png'" class="card-img-top card-img" alt="..."  />
    <div class="card-body">
      <h1>{{ doc.name }} {{ doc.surname }}</h1>
      <h4>{{ doc.specialization }}</h4>
      <h6>{{ doc.medicalService }}</h6>
      <p class="card-text" v-html="doc.curriculum"></p>
    </div>
  </div>
</div>
</template>

<script>
export default {
  props: { doc: Object },
};
</script>

<style>
</style>