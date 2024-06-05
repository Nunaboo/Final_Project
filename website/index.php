<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <title>Fitness</title>
</head>
<body>
    <header class="header">
        <nav>
            <div class="nav_header">
                <div class="nav_logo">
                    <a href="#"><img src="pictures/logo.png" alt="logo"></a>
                </div>
                <div class="nav_menu_btn" id="menu-btn">
                    <span><i class="ri-menu-line"></i></span>
                </div>
            </div>
            <ul class="nav_links" id="nav-links">
                <li class="link"><a href="#home">Home</a></li>
                <li class="link"><a href="#about">About</a></li>
                <li class="link"><a href="#class">Classes</a></li>
                <li class="link"><a href="#trainer">Trainers</a></li>
                <li class="link"><a href="#price">Pricing</a></li>
                <a href="SignUp.php" class="btn" target="_blank">Join Now</a>
            </ul>
        </nav>
        <div class="section_container header_container" id="home">
            <div class="header_img">
                <img src="pictures/home.png" alt="header">
            </div>
            <div class="header_content">
                <h4>Build Your Body &</h4>
                <h1 class="section_header">Shape Yourself!</h1>
                <p>
                    "This life is yours. Take the power to choose what you want to do and do it well. Run hard, be strong, think big!"
                </p>
            </div>
        </div>
    </header>

    <section class="section_container about_container" id="about">
      <div class="about_image">
        <img src="pictures/about.jpg" alt="about" />
      </div>
      <div class="about_content">
        <h2 class="section_header">Our Story</h2>
        <p class="section_description">
          Led by our team of expert and motivational instructors, "The Class You
          Will Get Here" is a high-energy, results-driven session that combines
          a perfect blend of cardio, strength training, and functional
          exercises.
        </p>
        <div class="about_grid">
          <div class="about_card">
            <span><i class="ri-open-arm-line"></i></span>
            <div>
              <h4>Open Door Policy</h4>
              <p>
                We believe in providing unrestricted access to all individuals,
                regardless of their fitness level, age, or background.
              </p>
            </div>
          </div>
          <div class="about_card">
            <span><i class="ri-shield-cross-line"></i></span>
            <div>
              <h4>Fully Insured</h4>
              <p>
                Your peace of mind is our top priority, and our commitment to
                your safety extends to every aspect of your fitness journey.
              </p>
            </div>
            <div class="about_card">
            <span><i class="ri-p2p-line"></i></span>
          </div>
            <div>
              <h4>Personal Trainer</h4>
              <p>
                With personalized workout plans tailored to your needs, we will
                ensure that you get the most out of your gym experience.
              </p>
            </div>
        </div>
    </section>

    <section class="section_container class_container" id="class">
        <h2 class="section_header">Our Classes</h2>
        <p class="section_description">
          Discover a diverse range of exhilarating classes at our gym designed to
          cater to all fitness levels and interests. Whether you're a seasoned
          athlete or just starting your fitness journey, our classes offer
          something for everyone.
        </p>
        <div class="class_grid">
          <div class="class_card">
            <img src="pictures/dot-bg.png" alt="bg" class="class_bg" />
            <img src="pictures/class-1.jpg" alt="class" />
            <div class="class_content">
              <h4>Strength Training</h4>
              <p>Resistance Training</p>
            </div>
          </div>
          <div class="class_card">
            <img src="pictures/dot-bg.png" alt="bg" class="class_bg" />
            <img src="pictures/class-2.jpg" alt="class" />
            <div class="class_content">
              <h4>Flexibility & Mobility</h4>
              <p>Yoga & Pilates</p>
            </div>
          </div>
          <div class="class_card">
            <img src="pictures/dot-bg.png" alt="bg" class="class_bg" />
            <img src="pictures/class-3.jpg" alt="class" />
            <div class="class_content">
              <h4>HIT</h4>
              <p>Circuit Training</p>
            </div>
          </div>
          <div class="class_card">
            <img src="pictures/dot-bg.png" alt="bg" class="class_bg" />
            <img src="pictures/class-4.jpg" alt="class" />
            <div class="class_content">
              <h4>Group Fitness</h4>
              <p>Zumba or Dance</p>
            </div>
          </div>
        </div>
      </section>

      <section class="section_container trainer_container" id="trainer">
        <h2 class="section_header">Our Trainers</h2>
        <p class="section_description">
          Our trainers are more than just experts in exercise; they are passionate
          about helping you achieve your health and fitness goals. Our trainers
          are equipped to tailor workout programs to meet your unique needs.
        </p>
        <div class="trainer_grid">
          <div class="trainer_card">
            <img src="pictures/trainer-1.jpg" alt="trainer" />
          </div>
          <div class="trainer_card">
            <div class="trainer_content">
              <h4>Dhex Alvaran</h4>
              <h5>Strength and Conditioning</h5>
              <hr />
              <p>
                With a background in competitive sports, he's dedicated to helping
                you reach your peak physical performance.
              </p>
              <div class="trainer_socials">
                <a href="https://www.facebook.com/profile.php?id=100070068864369&mibextid=ZbWKwL"><i class="ri-facebook-fill"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
              </div>
            </div>
          </div>
          <div class="trainer_card">
            <img src="assets/trainer-2.jpg" alt="trainer" />
          </div>
          <div class="trainer_card">
            <div class="trainer_content">
              <h4>Junior Cecilio</h4>
              <h5>HIIT and Functional</h5>
              <hr />
              <p>
                His energetic and dynamic workouts are designed to push your
                limits, boost metabolism, and torch calories.
              </p>
              <div class="trainer_socials">
                <a href="#"><i class="ri-facebook-fill"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
              </div>
            </div>
          </div>
          <div class="trainer_card">
            <img src="assets/trainer-3.jpg" alt="trainer" />
          </div>
          <div class="trainer_card">
            <div class="trainer_content">
              <h4>Rhona Padilla</h4>
              <h5>Yoga and Mindfulness</h5>
              <hr />
              <p>
                Rhona's sessions are about physical postures and also about
                cultivating inner peace and mindfulness.
              </p>
              <div class="trainer_socials">
                <a href="https://www.facebook.com/padillarhonamhay?mibextid=ZbWKwL"><i class="ri-facebook-fill"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section_container price_container" id="price">
        <h2 class="section_header">Our Pricing</h2>
        <p class="section_description">
          Our pricing plan comes with various membership tiers, each tailored to
          cater to different preferences and fitness aspirations.
        </p>
        <div class="price_grid">
          <div class="price_card">
            <div class="price_content">
              <h4>Basic Plan</h4>
              <img src="pictures/price-1.png" alt="price" />
              <p>
                Our Basic Plan is the perfect starting point for individuals
                looking to kickstart their fitness journey or maintain an active
                lifestyle.
              </p>
              <hr />
              <h4>Key Features</h4>
              <p>Smart workout plan</p>
              <p>At home workouts</p>
            </div>
            <button class="btn" onclick="window.location.href='SignUp.php '">Join Now</button>
          </div>
          <div class="price_card">
            <div class="price_content">
              <h4>Weekly Plan</h4>
              <img src="pictures/price-2.png" alt="price" />
              <p>
                Our weekly plan is designed to provide structure and variety to
                your workouts, ensuring you stay motivated and on track.
              </p>
              <hr />
              <h4>Key Features</h4>
              <p>PRO Gyms</p>
              <p>Smart workout plan</p>
              <p>At home workouts</p>
            </div>
            <button class="btn" onclick="window.location.href='SignUp.php'">Join Now</button>
          </div>
          <div class="price_card">
            <div class="price_content">
              <h4>Monthly Plan</h4>
              <img src="pictures/price-3.png" alt="price" />
              <p>
                With this flexible membership, you'll have access to our
                state-of-the-art gym facilities, expert trainers, and a vibrant
                fitness community
              </p>
              <hr />
              <h4>Key Features</h4>
              <p>ELITE Gyms & Classes</p>
              <p>PRO Gyms</p>
              <p>Smart workout plan</p>
              <p>At home workouts</p>
              <p>Personal Training</p>
            </div>
            <button class="btn" onclick="window.location.href='SignUp.php'">Join Now</button>
          </div>
        </div>
      </section>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
    
    <!-- Include JavaScript code -->
    <script>
        // Define the hideJoinButton function
        function hideJoinButton() {
            const joinButton = document.getElementById("join-now-button");
            if (joinButton) {
                joinButton.style.display = "none"; // Hide the button
            }
        }
    </script>
</body>
</html>