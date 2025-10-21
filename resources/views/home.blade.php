<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | HPZ Crew</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="https://tdr-racing.com/assets/logo-b.svg">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body class="bg-white text-gray-800 flex flex-col min-h-screen">

    <!-- Wrapper -->
    <div class="flex-grow">

        <!-- Navbar -->
        <nav class="w-full bg-white shadow fixed top-0 z-50">
            <div class="container mx-auto px-6 py-4 flex justify-between items-center">
                <a href="{{ url('/') }}">
                    <img src="https://tdr-racing.com/assets/logo-b.svg" alt="TDR Logo" class="h-8">
                </a>

                <ul class="hidden md:flex space-x-8 font-medium">
                    <li><a href="#about" class="hover:text-red-600">About HPZ Crew</a></li>
                    <li><a href="#missions" class="hover:text-red-600">Missions & Rewards</a></li>
                    <li><a href="#gallery" class="hover:text-red-600">Winner's Gallery</a></li>
                    <li><a href="{{ url('/chatbot') }}" class="hover:text-red-600">Chatbot</a></li>
                </ul>

                <div class="flex space-x-3">
                    <a href="{{ url('/login') }}" class="border px-4 py-2 rounded-md hover:bg-gray-100">Login</a>
                    <a href="{{ url('/register') }}" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Join Us</a>
                </div>
            </div>
        </nav>

        <!-- Hero -->
        <section class="relative h-screen flex items-center justify-start bg-cover bg-center"
                style="background-image: url('https://tdr-racing.com/assets/uploads/l/slide-tdr.jpg');">
            <div class="container mx-auto px-6" data-aos="fade-right" data-aos-duration="2000">
                <h1 class="text-5xl font-bold text-white leading-tight">Ride with Pride</h1>
                <p class="mt-4 text-2xl text-red-500 font-semibold">Join the Crew</p>
                <p class="mt-2 text-2xl text-white max-w-xl">Be part of an exclusive rider community. Earn rewards, gain exposure, and get the chance to become the face of TDR.</p>
                <a href="{{ url('/register') }}" class="mt-6 inline-block bg-red-600 text-white px-6 py-3 rounded-md text-lg font-medium hover:bg-red-700">Join Now</a>
            </div>
        </section>

        <!-- Benefits -->
        <section id="benefits" class="py-16 bg-gray-50">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Benefits</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 text-center">
                    <!-- Items Benefit -->
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <img src="https://img.icons8.com/?size=100&id=9334&format=png&color=DD2726" alt="Premium Identity" class="mx-auto mb-4 w-12 h-12">
                        <h3 class="font-bold">Premium Identity</h3>
                        <p class="text-gray-600 text-sm">Be part of TDR, the top performance parts brand in Indonesia.</p>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <img src="https://img.icons8.com/?size=100&id=61830&format=png&color=DD2726" alt="Exclusive Rewards" class="mx-auto mb-4 w-12 h-12">
                        <h3 class="font-bold">Exclusive Rewards</h3>
                        <p class="text-gray-600 text-sm">Earn points, redeem merchandise & premium products.</p>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <img src="https://img.icons8.com/?size=100&id=u3hwP-G9VHC3&format=png&color=DD2726" alt="Social Exposure" class="mx-auto mb-4 w-12 h-12">
                        <h3 class="font-bold">Social Exposure</h3>
                        <p class="text-gray-600 text-sm">Get your content featured on TDR’s social media.</p>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <img src="https://img.icons8.com/?size=100&id=u6hp9uUrbRq5&format=png&color=DD2726" alt="Content Support" class="mx-auto mb-4 w-12 h-12">
                        <h3 class="font-bold">Content Support</h3>
                        <p class="text-gray-600 text-sm">Receive assets (hashtags, templates, etc) to boost your posts.</p>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <img src="https://img.icons8.com/?size=100&id=FlYM1GD1OXq4&format=png&color=DD2726" alt="Recognition" class="mx-auto mb-4 w-12 h-12">
                        <h3 class="font-bold">Recognition</h3>
                        <p class="text-gray-600 text-sm">Stand out in the rider community and build your brand.</p>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <img src="https://img.icons8.com/?size=100&id=uEYO02ekLzVD&format=png&color=DD2726" alt="Gamified Challenges" class="mx-auto mb-4 w-12 h-12">
                        <h3 class="font-bold">Gamified Challenges</h3>
                        <p class="text-gray-600 text-sm">Weekly & monthly missions with prizes for top performers.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Join Us -->
        <section id="why" class="py-16 bg-gradient-to-b from-gray-100 to-gray-200">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Why Join Us?</h2>
                <div class="flex space-x-6 overflow-x-auto" data-aos="fade-down" data-aos-duration="2000">
                    <div class="min-w-[300px] bg-white rounded-lg p-6 shadow">
                        <p>“Being part of HPZ Crew gave me confidence as a rider. My TikTok video even got reposted by TDR!”</p>
                        <p class="mt-4 font-semibold">Sarah, 27 yo</p>
                        <p class="text-sm text-gray-500">Community Rider, Bandung</p>
                    </div>
                    <div class="min-w-[300px] bg-white rounded-lg p-6 shadow">
                        <p>“I love the challenges. They push me to create better content and now I’ve won exclusive merchandise.”</p>
                        <p class="mt-4 font-semibold">Anton, 21 yo</p>
                        <p class="text-sm text-gray-500">Student, Jakarta</p>
                    </div>
                    <div class="min-w-[300px] bg-white rounded-lg p-6 shadow">
                        <p>“The leaderboard motivates me to keep improving my content. Competing with others feels exciting.”</p>
                        <p class="mt-4 font-semibold">Bucky, 24 yo</p>
                        <p class="text-sm text-gray-500">Freelancer, Makassar</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How to Join -->
        <section id="join" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">How to Join</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                    <!-- Left Image -->
                    <div class="space-y-6">
                        <img src="https://statik.tempo.co/data/2012/12/08/id_155177/155177_620.jpg" alt="Riders" class="rounded-lg shadow-lg">
                        <img src="https://statik.tempo.co/data/2012/12/08/id_155181/155181_620.jpg" alt="Riders" class="rounded-lg shadow-lg">
                    </div>

                    <!-- Right Steps -->
                    <ol class="space-y-6">
                        <li class="flex items-start space-x-4" data-aos="fade-right" data-aos-duration="2000">
                            <span class="h-8 w-8 flex items-center justify-center border-2 border-red-600 text-red-600 rounded">1</span>
                            <div>
                                <h3 class="text-xl font-semibold">Register</h3>
                                <p class="text-xl text-gray-600">Fill in the HPZ Crew form.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4" data-aos="fade-right" data-aos-duration="2000">
                            <span class="h-8 w-8 flex items-center justify-center border-2 border-red-600 text-red-600 rounded">2</span>
                            <div>
                                <h3 class="text-xl font-semibold">Selection</h3>
                                <p class="text-xl text-gray-600">TDR team reviews candidates.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4" data-aos="fade-right" data-aos-duration="2000">
                            <span class="h-8 w-8 flex items-center justify-center border-2 border-red-600 text-red-600 rounded">3</span>
                            <div>
                                <h3 class="text-xl font-semibold">Activation</h3>
                                <p class="text-xl text-gray-600">Receive your Digital Welcome Kit.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4" data-aos="fade-right" data-aos-duration="2000">
                            <span class="h-8 w-8 flex items-center justify-center border-2 border-red-600 text-red-600 rounded">4</span>
                            <div>
                                <h3 class="text-xl font-semibold">Create & Share</h3>
                                <p class="text-xl text-gray-600">Join challenges, post content, earn points.</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4" data-aos="fade-right" data-aos-duration="2000">
                            <span class="h-8 w-8 flex items-center justify-center border-2 border-red-600 text-red-600 rounded">5</span>
                            <div>
                                <h3 class="text-xl font-semibold">Level Up</h3>
                                <p class="text-xl text-gray-600">Climb the leaderboard & win rewards.</p>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </section>


        <!-- FAQ Section -->
        <section id="faq" class="py-16 bg-[#221f21] text-white">
            <div class="container mx-auto px-6 max-w-3xl">
                <h2 class="text-3xl font-bold text-center mb-8">FAQ</h2>

                <div class="space-y-4" data-aos="fade-down" data-aos-duration="2000">
                    <!-- FAQ Item -->
                    <div class="border border-gray-600 rounded-md">
                        <button class="w-full flex justify-between items-center px-4 py-3 text-left font-semibold hover:text-red-500 focus:outline-none"
                                onclick="toggleFAQ(1)">
                            Is there any registration fee?
                            <span id="icon1" class="text-gray-400">+</span>
                        </button>
                        <div id="answer1" class="hidden px-4 pb-4 text-gray-300">
                            No, joining HPZ Crew is completely free of charge.
                        </div>
                    </div>

                    <div class="border border-gray-600 rounded-md">
                        <button class="w-full flex justify-between items-center px-4 py-3 text-left font-semibold hover:text-red-500 focus:outline-none"
                                onclick="toggleFAQ(2)">
                            What is inside the Welcome Kit Digital?
                            <span id="icon2" class="text-gray-400">+</span>
                        </button>
                        <div id="answer2" class="hidden px-4 pb-4 text-gray-300">
                            It contains your HPZ Crew ID, guidelines, and exclusive digital assets to start your journey.
                        </div>
                    </div>

                    <div class="border border-gray-600 rounded-md">
                        <button class="w-full flex justify-between items-center px-4 py-3 text-left font-semibold hover:text-red-500 focus:outline-none"
                                onclick="toggleFAQ(3)">
                            How does the points and rewards system work?
                            <span id="icon3" class="text-gray-400">+</span>
                        </button>
                        <div id="answer3" class="hidden px-4 pb-4 text-gray-300">
                            You earn points by completing missions and engaging on social media. Points can be exchanged for merchandise and rewards.
                        </div>
                    </div>

                    <div class="border border-gray-600 rounded-md">
                        <button class="w-full flex justify-between items-center px-4 py-3 text-left font-semibold hover:text-red-500 focus:outline-none"
                                onclick="toggleFAQ(4)">
                            How long does the registration approval take?
                            <span id="icon4" class="text-gray-400">+</span>
                        </button>
                        <div id="answer4" class="hidden px-4 pb-4 text-gray-300">
                            Typically within 3–5 working days after submission.
                        </div>
                    </div>

                    <div class="border border-gray-600 rounded-md">
                        <button class="w-full flex justify-between items-center px-4 py-3 text-left font-semibold hover:text-red-500 focus:outline-none"
                                onclick="toggleFAQ(5)">
                            What kind of missions or challenges will I get?
                            <span id="icon5" class="text-gray-400">+</span>
                        </button>
                        <div id="answer5" class="hidden px-4 pb-4 text-gray-300">
                            You’ll get creative challenges such as making Reels, TikToks, or photos featuring TDR products.
                        </div>
                    </div>

                    <div class="border border-gray-600 rounded-md">
                        <button class="w-full flex justify-between items-center px-4 py-3 text-left font-semibold hover:text-red-500 focus:outline-none"
                                onclick="toggleFAQ(6)">
                            How often are new missions released?
                            <span id="icon6" class="text-gray-400">+</span>
                        </button>
                        <div id="answer6" class="hidden px-4 pb-4 text-gray-300">
                            New missions are released every month with varying difficulty and rewards.
                        </div>
                    </div>

                    <div class="border border-gray-600 rounded-md">
                        <button class="w-full flex justify-between items-center px-4 py-3 text-left font-semibold hover:text-red-500 focus:outline-none"
                                onclick="toggleFAQ(7)">
                            Can I invite my friends to join HPZ Crew?
                            <span id="icon7" class="text-gray-400">+</span>
                        </button>
                        <div id="answer7" class="hidden px-4 pb-4 text-gray-300">
                            Yes! Share the registration link with your friends and grow the community together.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
        function toggleFAQ(id) {
            const answer = document.getElementById(`answer${id}`);
            const icon = document.getElementById(`icon${id}`);
            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                icon.textContent = '-';
            } else {
                answer.classList.add('hidden');
                icon.textContent = '+';
            }
        }
        </script>


        <!-- CTA Section -->
        <section class="bg-white py-20">
            <div class="container mx-auto px-6 text-center md:text-left" data-aos="zoom-in" data-aos-duration="2000">
                <h2 class="text-3xl md:text-4xl font-bold leading-snug mb-6 max-w-2xl">
                    Every great rider starts somewhere.<br>
                    Your journey begins here.
                </h2>
                <a href="{{ url('/register') }}"
                class="bg-red-600 text-white px-6 py-3 rounded-md text-lg font-medium shadow hover:bg-red-700 animate-pulse">
                Join the Crew
                </a>
            </div>
        </section>


    </div> <!-- End of flex-grow -->

    <!-- Footer -->
    <footer class="bg-[#221f21] text-white py-14">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="font-semibold mb-3">About</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#about" class="hover:underline">About HPZ Crew</a></li>
                    <li><a href="#missions" class="hover:underline">Missions & Rewards</a></li>
                    <li><a href="#gallery" class="hover:underline">Winner’s Gallery</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-3">TDR</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:underline">Our Products</a></li>
                    <li><a href="#" class="hover:underline">About TDR</a></li>
                    <li><a href="#" class="hover:underline">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-3">Advertising</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:underline">Advertise With Us</a></li>
                    <li><a href="#" class="hover:underline">Partnerships</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-3">Social Media</h3>
                <div class="flex space-x-4">
                    <a href="mailto:tdr@gmail.com"><img src="https://img.icons8.com/?size=100&id=86840&format=png&color=FFFFFF" class="h-6"></a>
                    <a href="https://instagram.com/tdr_campaign"><img src="https://img.icons8.com/?size=100&id=85154&format=png&color=FFFFFF" class="h-6"></a>
                    <a href="https://tiktok.com/tdr_campaign"><img src="https://img.icons8.com/?size=100&id=123922&format=png&color=FFFFFF" class="h-6"></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
