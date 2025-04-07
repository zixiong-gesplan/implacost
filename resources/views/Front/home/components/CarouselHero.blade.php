<!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/gsap.min.js" integrity="sha512-f6bQMg6nkSRw/xfHw5BCbISe/dJjXrVGfz9BSDwhZtiErHwk7ifbmBEtF9vFW8UNIQPhV2uEFVyI/UHob9r7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="relative overflow-hidden h-[360px]">
    <div class="carousel-container h-full shadow-lg">
        <div class="carousel-slide absolute inset-0 w-full shadow-lg h-full opacity-0" style="display: none;">
            <img src="/images/HERO_1.jpg" alt="Carousel Image" class="w-full h-full shadow-lg object-cover rounded-md">
        </div>
        <div class="carousel-slide absolute inset-0 w-full shadow-lg h-full opacity-0" style="display: none;">
            <img src="/images/HERO_2.jpg" alt="Carousel Image" class="w-full h-full shadow-lg object-cover rounded-md">
        </div>
        <div class="carousel-slide absolute inset-0 w-full shadow-lg h-full opacity-0" style="display: none;">
            <img src="/images/HERO_3.jpg" alt="Carousel Image" class="w-full h-full shadow-lg object-cover rounded-md">
        </div>
        <div class="carousel-slide absolute inset-0 w-full shadow-lg h-full opacity-0" style="display: none;">
            <img src="/images/HERO_4.jpg" alt="Carousel Image" class="w-full h-full shadow-lg object-cover rounded-md">
        </div>
        <div class="carousel-slide absolute inset-0 w-full shadow-lg h-full opacity-0" style="display: none;">
            <img src="/images/HERO_5.jpg" alt="Carousel Image" class="w-full h-full shadow-lg object-cover rounded-md">
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.carousel-slide');
    let index = 0;

    // Iniciar el primer slide visible
    gsap.set(slides[index], { display: 'block' });

    function animateSlides() {
        gsap.to(slides[index], { duration: 1.8, autoAlpha: 0 });

        index = (index + 1) % slides.length;

        gsap.fromTo(slides[index], { autoAlpha: 0 }, { duration: 1.8, autoAlpha: 1, display: 'block', onComplete: () => {
            setTimeout(animateSlides, 1.8); // Ciclo cada 700ms
        } });
    }

    // Iniciar animación
    setTimeout(animateSlides, 1.8);
});
</script>