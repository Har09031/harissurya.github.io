<!-- About Section -->
<section class="about container" id="about" style="padding: 20px;">
    <style>
        .about-wrapper {
            display: flex;
            align-items: center;
            gap: 40px;
            flex-direction: row-reverse;
        }

        .about-img img {
            width: 250px;
            height: auto;
            border-radius: 12px;
        }

        .about-text {
            flex: 1;
        }

        .about-text h2 {
            text-align: center;
            margin-bottom: 15px;
        }

        /* RESPONSIVE (HP / Tablet) */
        @media (max-width: 768px) {
            .about-wrapper {
                flex-direction: column;
                text-align: center;
            }

            .about-img img {
                width: 60%;
            }
        }
    </style>

    <div class="about-wrapper">

        <!-- TEKS KIRI/ATAS -->
        <div class="about-text">
            <h2>About Me</h2>
            <p>
                I graduated from the Electronics Engineering Polytechnic
                Institute of Surabaya (PENS) in 2025, majoring in Informatics
                Engineering. I am a disciplined person who values time and 
                always strives to complete tasks responsibly and efficiently.
            </p>

            <p>
                I also have experience as a Basic English tutor and have
                worked in the Food and Beverage (FnB) industry. These
                experiences strengthened my communication skills,
                adaptability, and ability to work well in different
                environments.
            </p>
        </div>

        <!-- GAMBAR BAWAH (Laravel Asset) -->
        <div class="about-img">
            <img src="{{ asset('images/hero/DSCF0915.JPG') }}" alt="My Photo">
        </div>

    </div>
</section>

