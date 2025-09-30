<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Sri Sri Annapurna Devi Sametha Amrutha Lingeswara Swami Temple</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter for modern readability and Baloo 2 for heading flair -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Custom Tailwind Configuration - New Blue/Pink/Purple Theme */
        :root {
            --color-primary: #a855f7;  /* Violet/Purple for accents */
            --color-secondary: #ec4899; /* Pink for highlights */
            --color-deep: #4c1d95;    /* Deep Purple for text/footer */
        }
        
        body {
            font-family: 'Inter', sans-serif;
            /* Soft background gradient */
            background: linear-gradient(135deg, #f3f4ff 0%, #fae8ff 100%);
            color: var(--color-deep);
        }
        
        h1, h2 {
            font-family: 'Baloo 2', cursive;
            color: var(--color-deep);
            /* Enhanced text shadow for headings */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.15);
        }

        .hero-bg {
            /* Placeholder image */
            /* background-image: url('https://placehold.co/1600x600/dadafe/4c1d95?text=Divine+Temple+Entrance'); */
            background-size: cover;
            background-position: center;
        }

        /* Gradient Button Style (Pink to Violet) */
        .btn-gradient {
            background: linear-gradient(90deg, #ec4899 0%, #a855f7 100%);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.6);
            /* Deeper shadow for CTA */
            box-shadow: 0 4px 15px rgba(168, 85, 247, 0.4);
        }

        .btn-gradient:hover {
            box-shadow: 0 8px 25px rgba(168, 85, 247, 0.8);
            transform: scale(1.05); /* Slight zoom effect */
        }

        /* Glass Effect Class for Navbar/Cards */
        .glass-nav {
            background-color: rgba(255, 255, 255, 0.5); /* Higher opacity for readability */
            backdrop-filter: blur(10px); 
            border-bottom: 1px solid rgba(255, 255, 255, 0.8);
        }

        /* Card Hover Effect */
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(76, 29, 149, 0.15);
        }
         @keyframes fadeUp {
    0% {
      opacity: 0;
      transform: translateY(30px) scale(0.95);
      text-shadow: none;
    }
    100% {
      opacity: 1;
      transform: translateY(0) scale(1);
      text-shadow: 0 0 20px rgba(255, 255, 255, 0.8),
                   0 0 40px rgba(139, 92, 246, 0.8);
    }
  }

  .animate-fadeUp {
    animation: fadeUp 2s ease-out forwards;
  }
    </style>
</head>
<body class="antialiased min-h-screen">

<!-- Navbar - Glass Effect & Fixed Positioning -->
<nav class="sticky top-0 z-50 glass-nav shadow-lg">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-3">
        <!-- Flex container for Brand (Left) and Menu (Right) -->
        <div class="flex items-center justify-between">
            <!-- Brand Logo/Name -->
            <a href="#" class="flex items-center text-violet-800 hover:text-purple-900 transition duration-300 font-bold tracking-wide">
                <span class="text-3xl text-pink-600 mr-2">ॐ</span>
                <span class="text-xl sm:text-2xl font-bold whitespace-nowrap">Annapurna Amma</span>
            </a>
            
            <!-- Navigation Links (Desktop) -->
            <div class="hidden md:flex ml-auto space-x-8 justify-end text-end">
                <a class="text-violet-800 hover:text-pink-600 transition duration-300 font-semibold text-lg" href="#">Home</a>
                <a class="text-violet-800 hover:text-pink-600 transition duration-300 font-semibold text-lg" href="#">About</a>
                <a class="text-violet-800 hover:text-pink-600 transition duration-300 font-semibold text-lg" href="#">Seva</a>
                <a class="text-violet-800 hover:text-pink-600 transition duration-300 font-semibold text-lg" href="#">Events</a>
                <a class="text-violet-800 hover:text-pink-600 transition duration-300 font-semibold text-lg" href="#">Contact</a>
                <a class="px-4 py-2 rounded-full btn-gradient text-white font-bold transition duration-300" href="login.php">Login / Register</a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-violet-800 hover:text-pink-600" id="mobile-menu-button" aria-label="Toggle mobile menu">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div class="md:hidden hidden bg-white/95 border-t border-violet-100" id="mobile-menu">
        <div class="px-5 pt-3 pb-4 space-y-2 flex flex-col items-center">
            <a class="block w-full text-center px-4 py-2 text-violet-800 hover:bg-violet-50 rounded-lg font-medium" href="#">Home</a>
            <a class="block w-full text-center px-4 py-2 text-violet-800 hover:bg-violet-50 rounded-lg font-medium" href="#">About</a>
            <a class="block w-full text-center px-4 py-2 text-violet-800 hover:bg-violet-50 rounded-lg font-medium" href="#">Seva</a>
            <a class="block w-full text-center px-4 py-2 text-violet-800 hover:bg-violet-50 rounded-lg font-medium" href="#">Events</a>
            <a class="block w-full text-center px-4 py-2 text-violet-800 hover:bg-violet-50 rounded-lg font-medium" href="#">Contact</a>
            <a class="block w-4/5 text-center px-4 py-2 btn-gradient text-white rounded-full font-bold mt-4" href="login.php">Login / Register</a>
        </div>
    </div>
</nav>
<!-- Hero Section -->
<section class="hero-bg h-[70vh] sm:h-[80vh] flex items-center relative shadow-xl">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/50 bg-gradient-to-t from-violet-900/70 to-transparent"></div>

  <!-- Content wrapper -->
  <div class="relative container mx-auto flex flex-col md:flex-row items-center justify-between px-4 sm:px-6 md:px-10 z-10">
    
    <!-- Left: Text -->
    <div class="text-center md:text-left md:w-1/2 p-4 sm:p-6">
      <h3 class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl font-extrabold text-white mb-4 sm:mb-6 leading-tight drop-shadow-lg animate-fadeUp">
        శ్రీ శ్రీ శ్రీ అన్నపూర్ణాదేవి సమేత<br class="hidden lg:inline">
        అమృత లింగేశ్వర స్వామి వారి దేవాలయము మండపేట
      </h3>

      <p class="text-xs sm:text-sm md:text-base lg:text-lg text-violet-200 mb-6 sm:mb-8 md:mb-10 font-medium italic drop-shadow-md">
        <!-- Optional subtext can go here -->
      </p>
    </div>

    <!-- Right: Image -->
    <div class="md:w-1/2 flex justify-center p-4">
      <img src="images/copy1.png" alt="Devi img" class="w-1/2 sm:w-1/3 md:w-2/3 lg:w-full object-contain drop-shadow-2xl">
    </div>


  </div>
</section>


<!-- Main Content Wrapper -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 mt-12 mb-16">

    <!-- About Section - Enhanced Card UI and Responsiveness -->
    <section class="mb-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl sm:text-5xl font-bold mb-4 text-violet-800">The Divine Sanctuary</h2>
            <div class="w-24 h-1.5 bg-pink-500 mx-auto rounded-full"></div>
        </div>
        
        <!-- About Content Card -->
        <div class="flex flex-col lg:flex-row gap-8 bg-white/80 glass-nav p-6 sm:p-8 md:p-12 rounded-3xl shadow-2xl shadow-violet-300 border border-violet-100 card-hover transition duration-300">
            <div class="lg:w-2/3">
                <!-- Highlight Title -->
                <h3 class="text-2xl font-bold mb-4 text-pink-600">Goddess Annapurna & Lord Amrutha Lingeswara</h3>

                <p class="text-base sm:text-lg leading-relaxed mb-4 text-gray-700">
                    Sri Sri Sri Annapurna Devi Sametha Amrutha Lingeswara Swami Temple stands as a beacon of devotion and tradition. Dedicated primarily to <strong>Goddess Annapurna</strong> (the benevolent giver of food and nourishment) and <strong>Lord Shiva</strong> in the form of Amrutha Lingeswara (The Lord of Divine Nectar), the temple offers a unique spiritual experience of abundance and eternity.
                </p>
                <p class="text-base sm:text-lg leading-relaxed mb-4 text-gray-700">
                    The temple architecture reflects ancient Vedic styles, inspiring awe and serenity in every visitor. The sanctuary is meticulously maintained, fostering a strong community rooted in *dharma* and selfless service. We invite all devotees to partake in daily *poojas*, sacred ceremonies, and festivals, experiencing the divine presence firsthand.
                </p>
                <a href="#" class="inline-block mt-4 text-pink-600 hover:text-pink-800 font-semibold border-b-2 border-pink-500 transition duration-200">
                    Explore the Temple History &gt;
                </a>
            </div>

            <!-- Image/Visual Column -->
            <div class="lg:w-1/3 flex justify-center items-center mt-6 lg:mt-0 order-first lg:order-last">
                <div class="w-full max-w-sm h-56 sm:h-80 bg-violet-100 rounded-2xl shadow-inner flex flex-col items-center justify-center text-4xl text-violet-600 font-bold border-4 border-pink-300/50 p-4">
                    <!-- Placeholder with better structure -->
                    <span class="text-6xl text-pink-500 mb-2">🙏</span>
                    <span class="text-lg text-violet-700 font-semibold">Divine Deities</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Events & Poojas Section - New Section with Grid for Responsiveness -->
    <section class="mb-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl sm:text-5xl font-bold mb-4 text-violet-800">Upcoming Events & Sevas</h2>
            <div class="w-24 h-1.5 bg-pink-500 mx-auto rounded-full"></div>
        </div>

        <!-- Responsive 1/2/3 Column Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Event Card 1 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-violet-100 card-hover transition duration-300">
                <h3 class="text-2xl font-bold mb-2 text-primary">Maha Shivaratri</h3>
                <p class="text-pink-600 font-semibold mb-3">February 28, 2026 | 6:00 AM onwards</p>
                <p class="text-gray-700 mb-4">A special all-night *jagarana* and *abhishekam* for Lord Amrutha Lingeswara Swami. Join us for four *kaala poojas*.</p>
                <a href="#" class="text-sm font-semibold text-violet-600 hover:text-pink-600">Register for Seva →</a>
            </div>

            <!-- Event Card 2 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-violet-100 card-hover transition duration-300">
                <h3 class="text-2xl font-bold mb-2 text-primary">Annapurna Jayanti</h3>
                <p class="text-pink-600 font-semibold mb-3">April 14, 2026 | 10:00 AM</p>
                <p class="text-gray-700 mb-4">Celebration of the birth of Goddess Annapurna Devi. Grand *annadanam* (food distribution) for all devotees.</p>
                <a href="#" class="text-sm font-semibold text-violet-600 hover:text-pink-600">Volunteer Today →</a>
            </div>

            <!-- Event Card 3 -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-violet-100 card-hover transition duration-300">
                <h3 class="text-2xl font-bold mb-2 text-primary">Monthly Satyanarayana Vratham</h3>
                <p class="text-pink-600 font-semibold mb-3">Every Full Moon | 5:00 PM</p>
                <p class="text-gray-700 mb-4">Participate in the sacred Vratham for prosperity and well-being. Please contact the temple office to book your spot.</p>
                <a href="#" class="text-sm font-semibold text-violet-600 hover:text-pink-600">Book Your Slot →</a>
            </div>
        </div>
    </section>

    <!-- Final Call to Action -->
    <section class="text-center py-16 bg-violet-100/50 rounded-2xl shadow-inner border border-violet-200">
        <h2 class="text-3xl sm:text-4xl font-extrabold mb-4 text-violet-900">Support Our Sacred Mission</h2>
        <p class="text-lg sm:text-xl text-gray-700 mb-8 max-w-2xl mx-auto">
            Your generous contribution helps us maintain the sanctity of the temple and continue our charitable activities, including Annadanam.
        </p>
        <a href="donation.php" class="inline-block px-10 py-3 text-lg rounded-full btn-gradient text-white font-bold shadow-2xl uppercase tracking-widest transition duration-300">
            Donate Now
        </a>
    </section>

</main>


<!-- Footer - Darker Theme -->
<footer class="bg-violet-900/95 text-white shadow-xl mt-16 py-8 sm:py-10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="mb-4 space-x-6 text-lg">
            <a href="#" class="text-violet-300 hover:text-pink-500 transition duration-300">FAQs</a>
            <a href="#" class="text-violet-300 hover:text-pink-500 transition duration-300">Privacy Policy</a>
            <a href="#" class="text-violet-300 hover:text-pink-500 transition duration-300">Directions</a>
        </div>
        
        <p class="mb-2 text-violet-200 text-sm sm:text-base">
            <span class="font-bold">Address:</span> Temple Marg, Spiritual Nagar, Devotion District, 500001
        </p>
        <p class="text-xs sm:text-sm text-violet-300/80 mt-4">
            &copy; 2025 Sri Sri Sri Annapurna Devi Temple. All Rights Reserved.
        </p>
    </div>
</footer>


<script>
    // JavaScript for Mobile Menu Toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
