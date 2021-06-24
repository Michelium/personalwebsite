<template>
  <div class="container-fluid px-0">
      <Header/>
      <Hero/>
      <div class="row">
          <div class="col-12 col-md-8 offset-md-1 offset-lg-1 col-xl-6 offset-xl-2 ">

          </div>
      </div>
  </div>
</template>

<script>
// @ is an alias to /src
import Hero from "../components/Hero";
import Header from "../components/Header";

export default {
  name: 'Home',
  components: {
      Header,
      Hero,
  }
}
</script>
