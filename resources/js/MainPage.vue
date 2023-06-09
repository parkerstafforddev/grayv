<template>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">grayvard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Packs</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="fa-solid fa-md fa-cart-shopping"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <body>

    <div class="col-12 text-center pt-5 mt-5 ">
        <div>
        <h1 class="pt-5 mt-5 floating-letters" style="align-content: center">grayvard</h1>
    </div>
    </div>
    </body>

    <br><br><br><br><br><br><br><br><br><br>
    <footer class="pt-5 mt-lg-5 text-center">
        <i class="fab fa-lg fa-discord"></i>&nbsp;
        <a href="https://instagram.com/graywtf/"><i class="fa-brands fa-lg fa-instagram"></i></a>&nbsp;
        <i class="fa-solid fa-gray fa-lg fa-envelope"></i>
    </footer>

</template>

<script>
import 'bootstrap/dist/css/bootstrap.css'


export default {
    name: "MainPage"
}
</script>

<style scoped>


* {
    font-family: Cambria;
}

.floating-letters {
    display: inline-block;
    animation: float-up-down 1.5s ease-in-out infinite;
}

@keyframes float-up-down {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
    100% {
        transform: translateY(0);
    }
}

a {
    color: black;
}

</style>
