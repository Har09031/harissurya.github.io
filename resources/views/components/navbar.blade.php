<!-- Navigation -->
<nav>
    <div class="container">
        <div class="logo">Haris Surya Nugraha</div>
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="nav-links" id="navLinks">
            <a href="#home">Home</a>
            <a href="#about">About Me</a>
            <a href="#education">Education</a>
            <a href="#experience">Experience</a>
            <a href="#skills">Technical Skills</a>
            <a href="#contact">Get In Touch</a>
        </div>
    </div>
</nav>

<script>
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        hamburger.classList.toggle('active');
    });

    // Close menu ketika link diklik
    document.querySelectorAll('#navLinks a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
            hamburger.classList.remove('active');
        });
    });
</script>
