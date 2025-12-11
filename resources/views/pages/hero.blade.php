<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-container">
        <!-- Left Side -->
        <div class="hero-content">
            <div class="hero-text">
                <h2>Hi, I'm <span class="hero-name">Haris Surya Nugraha</span></h2>
                <p class="hero-subtitle">Web Developer & Designer</p>
                <p class="hero-description">
                    I create beautiful and functional web experiences. 
                    Passionate about clean code and modern design.
                </p>
                <div class="hero-cta">
                    <a href="#contact" class="cta-button">Get In Touch</a>
                </div>
            </div>
        </div>

        <!-- Right Side - Image Slider -->
        <div class="hero-slider">
            <div class="slider-container">
                <div class="slider-item active" style="background-image: url('{{ asset('images/hero/IMG_3322.JPG') }}');">
                </div>
                <div class="slider-item" style="background-image: url('{{ asset('images/hero/IMG_3349.JPG') }}');">
                </div>
                <div class="slider-item" style="background-image: url('{{ asset('images/hero/IMG_3363.jpg') }}');">
                </div>
            </div>
            <div class="slider-dots">
                <span class="dot active" onclick="currentSlide(0)"></span>
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
            </div>
        </div>
    </div>
</section>

<script>
    let currentSlideIndex = 0;
    const slides = document.querySelectorAll('.slider-item');
    const dots = document.querySelectorAll('.dot');

    function showSlide(index) {
        if (index >= slides.length) {
            currentSlideIndex = 0;
        } else if (index < 0) {
            currentSlideIndex = slides.length - 1;
        } else {
            currentSlideIndex = index;
        }

        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            dots[i].classList.remove('active');
        });

        slides[currentSlideIndex].classList.add('active');
        dots[currentSlideIndex].classList.add('active');
    }

    function currentSlide(index) {
        showSlide(index);
    }

    // Auto slide every 5 seconds
    setInterval(() => {
        currentSlideIndex++;
        showSlide(currentSlideIndex);
    }, 5000);
</script>
