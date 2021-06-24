<template>
  <div class="container-fluid px-0">
      <Header/>
      <Hero/>
      <div class="row mx-0">
          <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
              <About/>
          </div>
      </div>
  </div>
</template>

<script>
// @ is an alias to /src
import Hero from "../components/Hero";
import Header from "../components/Header";
import About from "../components/About";

export default {
  name: 'Home',
  components: {
      About,
      Header,
      Hero,
  }
}
</script>
