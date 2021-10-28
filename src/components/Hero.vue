<template>
    <section id="hero">
        <div class="row mx-0 w-100 vh-100 d-flex align-items-center">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <div class="row">
                    <div class="col-12 col-lg-6 my-auto">
                        <h3 class="text-white fw-light">Hallo, ik ben</h3>
                        <h1 class="text-purple text-uppercase fw-bolder">Michel Hamelink</h1>
                        <h3 class="text-white fw-light">Freelance webdeveloper en ik kan je helpen met <wbr> het ontwikkelen van jouw nieuwe website.</h3>
                        <button type="button" class="btn px-4 py-2 mt-md-5 text-white" @click="scrollTo('#contact', -120)" ><span>Contact me</span></button>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                        <img class="float-lg-end" src="~@/assets/images/hero/michelhamelink.jpg" alt="">
                    </div>
                </div>
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
    min-height: 100vh;
    background-color: black;
}

img {
    border-radius: 50%;;
    width: 70%;
}

button {
    background-color: #333333;
}
button span {
    font-style: normal;
    font-weight: normal;
    font-size: 17px;
    line-height: 22px;
    letter-spacing: 0.0043em;
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

    img {
        width: 55%;
        margin-top: 120px;
    }
}

@media (max-width: 425px) {
    section {
        background-position: center 75%;
    }
}
</style>
