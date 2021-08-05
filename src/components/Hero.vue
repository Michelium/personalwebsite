<template>
    <section id="hero">
        <div class="row mx-0">
            <div class="col-12 col-md-8 offset-md-1 offset-lg-1 col-xl-6 offset-xl-2 col-xxl-4 text-section">
                <h2 class="text-white">Hallo, ik ben</h2>
                <h1 class="text-purple text-uppercase fw-bolder">Michel Hamelink</h1>
                <h3 class="text-white fw-normal w-100">Freelance webdeveloper en ik kan je helpen met <wbr> het ontwikkelen van jouw nieuwe website.</h3>
                <a class="btn btn-outline-light px-4 fw-light mt-md-5" @click="scrollTo('#contact', -120)" >CONTACT ME</a>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'Hero',
    methods: {
        scrollTo(selector, yOffset = 0) {
            const el = document.querySelector(selector);
            const y = el.getBoundingClientRect().top + window.pageYOffset + yOffset;

            window.scrollTo({top: y, behavior: 'smooth'});
        }
    },
}
</script>

<style scoped>
section {
    background-image: url("~@/assets/images/hero/hero.png");
    background-size: 60%;
    background-position: right 75%;
    background-repeat: no-repeat;
    min-height: 100vh;
    background-color: black;
}

h2 {
    text-transform: unset;
    margin-bottom: unset;
}

@media (min-width: 991px) {
    .text-section {
        white-space: nowrap;
        margin-top: 200px;
    }
}

@media (max-width: 991px) {
    section {
        background-size: 110%;
        background-position: bottom;
    }

    .text-section {
        margin-top: 150px;
    }
}

@media (max-width: 425px) {
    section {
        background-position: center 75%;
    }
}
</style>
