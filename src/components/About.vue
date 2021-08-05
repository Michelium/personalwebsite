<template>
    <section id="about">
        <div class="row">
            <div class="col-12">
                <h2 class="text-uppercase text-center text-md-start">Over mij</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-7 bg-d">
                <p>
                    Ik ben Michel Hamelink, een freelance webdeveloper. Programmeren is mijn passie, al sinds mijn veertiende. Beginnend met een HTML bestand leerde ik vervolgens CSS en JavaScript. <br><br>

                    Ik ontdekte dat het maken van websites zó goed bij me paste, dat ik me in november 2020 heb ingeschreven bij de Kamer van Koophandel, onder de naam Hamelink
                    Webdevelopment. <br><br>

                    Ik kan je helpen met het maken van een nieuwe website, het toevoegen van nieuwe features aan je huidige website of je bestaande website een nieuw jasje geven.
                </p>
            </div>
            <div class="col-12 col-xl-5">
                <img src="~@/assets/images/about/michelhamelink.jpg" alt="Michel Hamelink" loading="lazy" class="float-end mt-5 mt-xl-0">
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "About"
}
</script>

<style scoped>
img {
    border-radius: 15px;
    -webkit-box-shadow: 5px 5px 6px 0px rgba(0,0,0,0.29);
    -moz-box-shadow: 5px 5px 6px 0px rgba(0,0,0,0.29);
    box-shadow: 5px 5px 6px 0px rgba(0,0,0,0.29);
    width: 75%;
}

@media (max-width: 1200px) {
    img {
        width: 100%!important;
    }
}
</style>
