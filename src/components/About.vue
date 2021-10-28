<template>
    <section id="about">
        <div class="row">
            <div class="col-12">
                <h2 class="text-uppercase text-center">Over mij</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xxl-8 offset-xxl-2">
                <p class="text-center">
                    Ik ben Michel Hamelink, een freelance webdeveloper. Programmeren is mijn passie, al sinds mijn veertiende. Beginnend met een HTML bestand leerde ik vervolgens CSS en JavaScript. <br><br>

                    Het maken van websites paste zó goed bij me, dat ik in november 2020 heb besloten mezelf in te schrijven bij de Kamer van Koophandel, onder de naam Hamelink Webdevelopment. <br><br>

                    Ik kan je helpen met het maken van een nieuwe website, het toevoegen van nieuwe features aan je huidige website of je bestaande website een nieuw jasje geven. 
                </p> 
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
h2 {
    margin-bottom: 40px;
}

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
