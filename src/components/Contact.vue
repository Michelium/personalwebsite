<template>
    <section id="contact">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-md-start">Contact</h2>
                <p>Vul het formulier hieronder in en ik reageer binnen 1 werkdag! <br>
                    Je kunt me ook altijd bellen of een mailtje sturen op het onderstaande adres!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <form class="mt-4" action="mail.php" method="post">
                    <div v-if="success" class="alert alert-success alert-dismissible fade show" role="alert">
                        <p class="text-dark">Uw bericht is verstuurd! We komen zo spoedig mogelijk bij u terug!</p>
                    </div>
                    <div class="form-group mb-3">
                        <label for="name" class="text-uppercase">Naam:</label>
                        <input v-model="name" class="form-control bg-light py-2" type="text" name="name" id="name" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="text-uppercase">E-mail:</label>
                        <input v-model="email" class="form-control bg-light py-2" type="email" name="email" id="email" autocomplete="off" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">TELEFOON: (niet verplicht)</label>
                        <input v-model="phone" class="form-control bg-light py-2" type="text" name="phone" id="phone" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        <label for="message" class="text-uppercase">Hoe kan ik helpen?</label>
                        <textarea v-model="message" class="form-control bg-light py-2" name="message" id="message" autocomplete="off" required rows="5"></textarea>
                    </div>
                    <button  type="submit" class="btn w-100">VERSTUUR</button>
                </form>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card h-100">
                    <div class="row mb-5">
                        <div class="col-12">
                            <h4 class="text-dark">Persoonlijke gegevens</h4>
                            <table class="w-100">
                                <tr>
                                    <th>plaats:</th>
                                    <td class="float-end float-sm-none">Den Haag</td>
                                </tr>
                                <tr>
                                    <th>telefoon:</th>
                                    <td class="float-end float-sm-none"><a href="tel:06-16197852">06-16197852</a></td>
                                </tr>
                                <tr>
                                    <th>e-mail:</th>
                                    <td class="float-end float-sm-none"><a href="mailto:info@michelhamelink.nl" target="_blank">info@michelhamelink.nl</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                        <div class="col-12">
                            <h4 class="text-dark">Zakelijke gegevens</h4>
                            <table class="w-100">
                                <tr>
                                    <th>kvk:</th>
                                    <td class="float-end float-sm-none">80836828</td>
                                </tr>
                                <tr>
                                    <th>btw:</th>
                                    <td class="float-end float-sm-none">NL003501197B41</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</template>

<script>
export default {
    name: "Contact"
}
</script>

<style scoped>
.card {
    padding: 45px 30px;
    border: none;
    height: 100%;
    transition: 0.2s;
}

.card:hover {
    background-color: var(--light-grey);
}

label {
    margin-bottom: 5px;
    color: var(--grey);
}

input, textarea {
    border-radius: unset;
    transition: 0.3s;
}

input:focus, input:hover, textarea:focus, textarea:hover {
    border-color: var(--purple);
    box-shadow: 0 0 0 0.25rem rgba(141, 57, 250, 0.25);
}

button {
    background-color: var(--purple);
    color: white;
    padding: 8px 0;
    transition: 0.3s;
}

button:hover {
    background-color: var(--purple-hover);
    color: white;
    cursor: pointer;
}

th {
    color: var(--grey);
    font-weight: 300;
    width: 146px;
}

a {
    color: var(--purple);
    padding: 8px 0;
}

a:hover {
    color:  var(--purple-hover);
    cursor: pointer;
}
</style>
