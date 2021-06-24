<template>
    <section>
        <nav class="navbar navbar-expand-lg navbar-light custom_navbar custom-navbar-light mx-0 px-0 pt-2 pb-0 mb-2 mb-sm-5 navbar-fixed-top" id="custom-navbar">
            <div class="container-fluid">
                <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand d-block d-lg-none" href="">Hamelink Webdevelopment</a>
                <div class="row navbar-row mt-1">
                    <div class="col-12 col-md-8 offset-md-1 col-lg-4 offset-lg-2 d-none d-lg-block">
                        <a class="navbar-brand" href="">Hamelink Webdevelopment</a>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item"><a class="nav-link">Home</a></li>
                                <li class="nav-item"><a class="nav-link">Over mij</a></li>
                                <li class="nav-item"><a class="nav-link">Diensten</a></li>
                                <li class="nav-item"><a class="nav-link">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style scoped>
.navbar-brand {
    color: var(--grey)!important;
}

.custom-navbar-light {
    background: transparent !important;
    left: 0;
    right: 0;
    z-index: 15;
    position: fixed;
}

.scrolled {
    background: rgb(0, 0, 0) !important;
    background: linear-gradient(180deg, rgba(0, 0, 0, 1) 0%, rgba(0, 212, 255, 0) 100%) !important;
}

.row {
    flex-grow: 1;
}

.custom-navbar-light .navbar-nav > .nav-item > .nav-link {
    font-size: 12px;
    padding: .9rem 20px;
    letter-spacing: 1px;
    color: var(--grey);
    font-weight: 500;
    text-transform: uppercase;
    opacity: 1 !important;
}

.custom-navbar-light .navbar-nav > .nav-item > .nav-link:hover {
    color: var(--purple);
    cursor: pointer;
}
@media (max-width: 991.98px) {
    .row {
        width: 102% !important;
    }

    .navbar-brand {
        color: white!important;
        padding-left: 18px;
    }

    .nav-link {
        color: white!important;
    }

    .custom-navbar-light .navbar-nav > .nav-item > .nav-link:hover {
        color: var(--grey);
    }

    .custom-navbar-light {
        background: var(--purple) !important;
        top: 0;
        padding-bottom: 14px !important;
    }

    .custom-navbar-light .row:first-of-type {
        background: var(--purple) !important;
    }

    .custom-navbar-light .navbar-nav {
        padding-bottom: 10px;
    }

    .custom-navbar-light .navbar-nav > .nav-item > .nav-link {
        padding: .5em .9em;
        text-align: start;
    }
}

@media (max-width: 766px) {


    .col-12 {
        text-align: center;
    }

    .navbar-nav {
        float: none !important;
        justify-content: center;
    }
}

@media (max-width: 455px) {
    a.nav-link {
        padding: .5em .5em;
    }
}
</style>
