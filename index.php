<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latino Gamer Nexus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header >
    <div class="header-content">
        <div class="navbar">
            <div class="logo"><a href="#">Web Dev Creative</a></div>
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <a href="#" class="action_btn">Get Started</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>

        </div>
        <div class="dropdown_menu ">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#" class="action_btn">Get Started</a></li>

        </div>
     </div>

    <div data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500" >
        <section id="hero">
            <h1 >Welcome</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit <br> Id nesciunt eveniet omnis
        </section>
    </div>
</header>

<div class="container" data-aos="fade-up" >
    <img class="container-img" src="images/container-1.svg">
    <div class="description">
        <h2>Un lugar al que solo se puede acceder por invitación y con mucho espacio para hablar</h2>
        <p>Los servidores de Discord están organizados en canales temáticos donde puedes colaborar, compartir y simplemente hablar sobre tu día sin obstruir un chat grupal.
        </p>
    </div>
</div>

<div class="container2" data-aos="fade-up">
    <div class="description">
        <h2>Donde pasar el rato es fácil</h2>
        <p>Toma asiento en un canal de voz cuando estés libre. Los amigos en tu servidor pueden ver que estás cerca y entrar instantáneamente para hablar sin tener que llamar..</p>
    </div>
    <img class="container-img" src="images/container-2.svg">
</div>

<div class="container2-mobile" data-aos="fade-up">
    <img class="container-img" src="images/container-2.svg">
    <div class="description">
        <h2>Where hanging out is easy</h2>
        <p>Grab a seat in a voice channel when you’re free. Friends in your server can see you’re around and instantly pop in to talk without having to call.</p>
    </div>
</div>

<div class="container" data-aos="fade-up">
    <img class="container-img" src="images/container-3.svg">
    <div class="description">
        <h2>De unos pocos a un fandom</h2>
        <p>Obtenga una comunidad de cualquier tamaño en funcionamiento con herramientas de moderación y acceso personalizado para miembros. Otorgue a los miembros poderes especiales, configure canales privados y más.                .</p>
    </div>
</div>

<div class="bottom-container" data-aos="fade-up">
    <div class="description">
        <h2>Tecnología confiable para permanecer cerca</h2>
        <p>La voz y el vídeo de baja latencia se sienten como si estuvieran en la misma habitación. Saluda por video, mira cómo tus amigos transmiten sus juegos o reúnete y disfruta de una sesión de dibujo con pantalla compartida.</p>
    </div>
    <img src="images/container-4.svg">
</div>


<footer class="footer">
    <div class="wrap">
        <div class="footer-container">
            <a href="#" class="logo">Footer</a>
            <br>
            <ul class="links" style="cursor: pointer;">
                <img src="images/facebook.svg" alt="">
                <img src="images/github.svg" alt="">
                <img src="images/instagram.svg" alt="">
                <img src="images/linkedin.svg" alt="">

            </ul>
        </div>
        <div class="footer-container">
            <h3>Company</h3>
                <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">our stores</a></li>
                <li><a href="#">Phone</a></li>
                <li><a href="#">E-mail</a></li>
                <li></li>
            </ul>
            </div>
            <div class="footer-container">
                <h3>Get Help</h3>
                <ul>
                    <li><a href="#">Shopping</a></li>
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Payment</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li></li>
                </ul>
            </div>
            <div class="footer-container">
                <h3>Menu</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Promotion</a></li>
                    <li><a href="#">Pre-order</a></li>
                    <li></li>
                </ul>
            </div>
            <div class="footer-container">
                <h3>Account</h3>
                <ul>
                    <li><a href="#">Account</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">credit note</a></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </footer>

    
<script>
const toggleBtn = document.querySelector('.toggle_btn');
const toggleBtnIcon = document.querySelector('.toggle_btn i');
const dropDownMenu = document.querySelector('.dropdown_menu');

toggleBtn.onclick = function(){
    dropDownMenu.classList.toggle('open');
    const isOpen = dropDownMenu.classList.contains('open')
    toggleBtnIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'
};
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
    
</body>
</html>