<template>
    <section id="services">
        <div class="background-pattern"></div>
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-md-start text-uppercase">Mijn <br class="d-none d-lg-block"> diensten</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-xl-4 mb-4 mb-xl-0">
                <div class="card">
                    <div class="image">
                        <img src="~@/assets/images/services/card-1.svg" alt="Development"> <h3 class="d-block d-lg-none">Web <br> Development</h3>
                    </div>
                    <h3 class="d-none d-lg-block">Web <br> Development</h3>
                    <h4>Snel en responsive voor elk scherm</h4>
                    <p>Een website moet op elk scherm functioneren en een website moet zo snel mogelijk zijn. Hier houd ik me mee bezig als webdeveloper.</p>
                </div>
            </div>
            <div class="col-12 col-xl-4 mb-4 mb-xl-0">
                <div class="card">
                    <div class="image">
                        <img src="~@/assets/images/services/card-2.svg" alt="Design"> <h3 class="d-block d-lg-none">Web <br> Design</h3>
                    </div>
                    <h3 class="d-none d-lg-block">Web <br> Design</h3>
                    <h4>Design voor doelgroep van de website</h4>
                    <p>De website wordt ontwikkeld voor de gebruikers hiervan. Het is belangrijk dat de informatie op je website jouw specifieke doelgroep aanspreekt.</p>
                </div>
            </div>
            <div class="col-12 col-xl-4 mb-4 mb-xl-0">
                <div class="card">
                    <div class="image">
                        <img src="~@/assets/images/services/card-3.svg" alt="Onderhoud"> <h3 class="d-block d-lg-none">Web <br> Onderhoud</h3>
                    </div>
                    <h3 class="d-none d-lg-block">Web <br> Onderhoud</h3>
                    <h4>Ook na oplevering up to date</h4>
                    <p>Ook na oplevering van de website moeten er soms nog enkele dingen worden aangepast. Ik zorg dat ook na oplevering je website up to date blijft!</p>
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
.background-pattern {
    position: absolute;;
    background: linear-gradient(180deg, #C550FC 0%, rgba(111, 194, 255, 0.46) 100%);
    filter: blur(200px);
    transform: rotate(233deg);
    opacity: 0.2;
    height: 500px; 
    width: 100%;
    left: 0;
    top: 50px;
    z-index: 1;
}
section {
    position: relative;
    z-index: 3;
}

h2 {
    margin-bottom: 45px;
}

h3 {
    font-size: 36px;
    font-weight: 400;
    letter-spacing: unset;
    color: var(--grey);
}

p {
    opacity: 0.6;
}

.card {
    position: relative;
    z-index: 3;
    background-color: white;;
    border: none;
    padding: 20px;
    height: 100%;
    transition: 0.2s;
}

.card:hover {
    background-color: #ececec;
}

.card img {
    width: 25%;
    max-width: 65px;
}

.card p {
    font-size: 17px;
}
.card p:first-of-type {
    margin-top: 15px;
}

.image {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    min-height: 144px;
}

@media (max-width: 991px) {
    .background-pattern {
        transform: unset;
        height: 1500px;
        pointer-events: none; 
    }

    h3 {
        font-size: 26px;
        margin-left: 25px;
    }
}
</style>
