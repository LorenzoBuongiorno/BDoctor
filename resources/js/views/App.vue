<template>
  <div>
    <the-navbar></the-navbar>  
    <router-view></router-view>
  </div>
</template>

<script>
import TheNavbar from '../components/TheNavbar.vue'
// import router from '../router'

export default {
  components: { 
      TheNavbar,
    },
    
}
</script>

<style lang="scss" scoped>

</style>