<template>
    <section id="services">
        <div class="row">
            <div class="col-12">
                <h2>Mijn diensten</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-4 mb-4 mb-xl-0">
                <div class="card">
                    <div class="image">
                        <img src="~@/assets/images/services/card-1.svg" alt="Development">
                    </div>
                    <h3>Web Development</h3>
                    <h4>Snel en responsive voor elk scherm</h4>
                    <p>Een website moet op elk scherm functioneren en een website moet zo snel mogelijk zijn. Hier houd ik me mee bezig als webdeveloper.</p>
                </div>
            </div>
            <div class="col-12 col-xl-4 mb-4 mb-xl-0">
                <div class="card">
                    <div class="image">
                        <img src="~@/assets/images/services/card-2.svg" alt="Design">
                    </div>
                    <h3>Web Development</h3>
                    <h4>Snel en responsive voor elk scherm</h4>
                    <p>Een website moet op elk scherm functioneren en een website moet zo snel mogelijk zijn. Hier houd ik me mee bezig als webdeveloper.</p>
                </div>
            </div>
            <div class="col-12 col-xl-4 mb-4 mb-xl-0">
                <div class="card">
                    <div class="image">
                        <img src="~@/assets/images/services/card-3.svg" alt="Onderhoud">
                    </div>
                    <h3>Web Development</h3>
                    <h4>Snel en responsive voor elk scherm</h4>
                    <p>Een website moet op elk scherm functioneren en een website moet zo snel mogelijk zijn. Hier houd ik me mee bezig als webdeveloper.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card py-4 text-start">
                    <h3>Beschikbaarheid</h3>
                    <p>Ik ben beschikbaar voor freelance opdrachten en kan na overleg direct aan de slag met je website.</p>
                    <p>Samen met jou maak ik een schatting van het aantal benodigde uren en de geschatte kosten voor mijn diensten. Dit is aan de hand van mijn huidige ervaring.</p>
                    <p>Momenteel ben ik het meest geinteresseerd in het maken van websites voor kleinere (startup) bedrijven, maar aarzel zeker niet om me een berichtje te sturen voor de mogelijkheden!</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Services"
}
</script>

<style scoped>
.row:nth-of-type(2) {
    margin-bottom: 100px;
}

.card {
    border: none;
    background-color: var(--light-grey);
    padding: 15px;
    text-align: center;
    height: 100%;
    -webkit-box-shadow: 5px 5px 6px 0px rgba(0, 0, 0, 0.29);
    -moz-box-shadow: 5px 5px 6px 0px rgba(0, 0, 0, 0.29);
    box-shadow: 5px 5px 6px 0px rgba(0, 0, 0, 0.29);
}

.card img {
    width: 25%;
    max-width: 100px;
    margin: 20px auto;
}

.image {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    min-height: 144px;
}
</style>
