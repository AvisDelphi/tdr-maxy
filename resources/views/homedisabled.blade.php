<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | HPZ Crew</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="https://tdr-racing.com/assets/logo-b.svg">
</head>

<body class="bg-black text-white font-sans">

    <header class="absolute top-0 left-0 w-full flex justify-end p-6 z-10">
        <a href="{{ route('dashboard') }}"
            class="bg-red-600 hover:bg-red-700 text-white font-semibold px-5 py-2 rounded-full text-sm md:text-base transition-all shadow-lg">
            Log In
        </a>

    </header>

    <section
        class="relative min-h-screen flex flex-col justify-center items-center text-center bg-gradient-to-b from-black to-red-900">
        <h1 class="text-5xl md:text-7xl font-extrabold text-red-500 drop-shadow-lg">
            JOIN HPZ CREW
        </h1>
        <p class="mt-4 text-lg md:text-xl max-w-2xl">
            Ride with Pride 🚀 Gabung komunitas <span class="font-bold text-red-400">High Performance Zone</span>
            dan dapatkan pengalaman eksklusif bersama TDR!
        </p>
        <a href="#daftar"
            class="mt-8 bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-full text-lg transition-all">
            Daftar Sekarang
        </a>
    </section>

    <section class="py-16 px-6 md:px-20 bg-black">
        <h2 class="text-3xl font-bold text-center text-white mb-12">Kenapa Gabung?</h2>
        <div class="grid md:grid-cols-3 gap-8 text-center">
            <div class="p-6 bg-zinc-900 rounded-2xl shadow-lg hover:scale-105 transition-all">
                <h3 class="text-red-500 text-xl font-bold mb-4">Eksklusif</h3>
                <p>Akses langsung ke event, promo, dan informasi terbaru produk TDR.</p>
            </div>
            <div class="p-6 bg-zinc-900 rounded-2xl shadow-lg hover:scale-105 transition-all">
                <h3 class="text-red-500 text-xl font-bold mb-4">Reward</h3>
                <p>Kumpulkan poin dari challenge, menangkan hadiah & merchandise keren.</p>
            </div>
            <div class="p-6 bg-zinc-900 rounded-2xl shadow-lg hover:scale-105 transition-all">
                <h3 class="text-red-500 text-xl font-bold mb-4">Komunitas</h3>
                <p>Terhubung dengan rider muda & komunitas motor di seluruh Indonesia.</p>
            </div>
        </div>
    </section>

    <section class="py-16 bg-zinc-900">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-red-500 mb-12">Upcoming Event 🔥</h2>

            <div class="relative flex items-center justify-center group">

                <button id="prev-btn"
                    class="absolute left-0 -translate-x-1/2 md:translate-x-0 md:left-4 bg-red-600/70 hover:bg-red-600 p-3 rounded-full shadow-lg z-20 transition-all opacity-0 group-hover:opacity-100 disabled:opacity-20 disabled:cursor-not-allowed">
                    ◀
                </button>

                <div class="overflow-hidden w-full">
                    <div id="event-carousel" class="flex transition-transform duration-500 ease-in-out gap-6">

                        <!-- Card Event 1 -->
                        <div class="flex-shrink-0 w-[calc((100%-48px)/3)] bg-black rounded-2xl shadow-lg text-center">
                            <img src="https://rockomotif.com/wp-content/uploads/2023/09/rockomotif-komunitas-motor-prediksi-696x392.jpg" alt="Riding Bareng"
                                class="w-full h-72 object-cover rounded-t-2xl">
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-white mb-3">Riding Bareng</h3>
                                <p class="text-zinc-300">Join touring bareng komunitas HPZ Crew dan rasakan brotherhood
                                    sejati di jalanan.</p>
                                <span class="block mt-4 text-sm text-red-400">📅 15 Oktober 2025</span>
                            </div>
                        </div>

                        <!-- Card Event 2 -->
                        <div class="flex-shrink-0 w-[calc((100%-48px)/3)] bg-black rounded-2xl shadow-lg text-center">
                            <img src="https://busam.id/wp-content/uploads/2023/08/IMG-20230824-WA0206-scaled.jpg" alt="Nobar Timnas"
                                class="w-full h-72 object-cover rounded-t-2xl">
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-white mb-3">Nobar Timnas</h3>
                                <p class="text-zinc-300">Kumpul seru nonton bareng pertandingan Timnas sambil bawa vibes
                                    komunitas motor!</p>
                                <span class="block mt-4 text-sm text-red-400">📅 20 Oktober 2025</span>
                            </div>
                        </div>

                        <!-- Card Event 3 -->
                        <div class="flex-shrink-0 w-[calc((100%-48px)/3)] bg-black rounded-2xl shadow-lg text-center">
                            <img src="https://cdn.autogear.id/dynamic/2024/08/28/4745/KJawSVZD1n.jpg?w=500" alt="Workshop"
                                class="w-full h-72 object-cover rounded-t-2xl">
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-white mb-3">Workshop Sparepart</h3>
                                <p class="text-zinc-300">Belajar langsung dari expert TDR tentang modifikasi, perawatan,
                                    dan upgrade motor.</p>
                                <span class="block mt-4 text-sm text-red-400">📅 25 Oktober 2025</span>
                            </div>
                        </div>

                        <!-- Card Event 4 -->
                        <div class="flex-shrink-0 w-[calc((100%-48px)/3)] bg-black rounded-2xl shadow-lg text-center">
                            <img src="https://rockomotif.com/wp-content/uploads/2023/09/rockomotif-komunitas-motor-prediksi-696x392.jpg"
                                alt="Riding Bareng 2" class="w-full h-72 object-cover rounded-t-2xl">
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-white mb-3">Riding Bareng #2</h3>
                                <p class="text-zinc-300">Touring edisi kedua dengan rute yang lebih panjang dan
                                    pengalaman lebih seru.</p>
                                <span class="block mt-4 text-sm text-red-400">📅 10 November 2025</span>
                            </div>
                        </div>

                        <!-- Card Event 5 -->
                        <div class="flex-shrink-0 w-[calc((100%-48px)/3)] bg-black rounded-2xl shadow-lg text-center">
                            <img src="https://busam.id/wp-content/uploads/2023/08/IMG-20230824-WA0206-scaled.jpg" alt="Nobar Final"
                                class="w-full h-72 object-cover rounded-t-2xl">
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-white mb-3">Nobar Timnas Final</h3>
                                <p class="text-zinc-300">Dukung Timnas di final bersama HPZ Crew, lebih ramai dan lebih
                                    seru!</p>
                                <span class="block mt-4 text-sm text-red-400">📅 15 November 2025</span>
                            </div>
                        </div>

                        <!-- Card Event 6 -->
                        <div class="flex-shrink-0 w-[calc((100%-48px)/3)] bg-black rounded-2xl shadow-lg text-center">
                            <img src="https://cdn.autogear.id/dynamic/2024/08/28/4745/KJawSVZD1n.jpg?w=500"
                                alt="Workshop Advance" class="w-full h-72 object-cover rounded-t-2xl">
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-white mb-3">Workshop Advance</h3>
                                <p class="text-zinc-300">Level lanjutan untuk upgrade sparepart premium dan teknik
                                    maintenance profesional.</p>
                                <span class="block mt-4 text-sm text-red-400">📅 20 November 2025</span>
                            </div>
                        </div>

                    </div>
                </div>

                <button id="next-btn"
                    class="absolute right-0 translate-x-1/2 md:translate-x-0 md:right-4 bg-red-600/70 hover:bg-red-600 p-3 rounded-full shadow-lg z-20 transition-all opacity-0 group-hover:opacity-100 disabled:opacity-20 disabled:cursor-not-allowed">
                    ▶
                </button>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-16 px-6 md:px-20 bg-black">
        <h2 class="text-3xl font-bold text-center text-white-500 mb-12">Gallery 📸</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <img src="https://picsum.photos/600/400" alt="Gallery 1"
                class="rounded-xl shadow-lg object-cover w-full h-48">
            <img src="https://picsum.photos/600/400" alt="Gallery 2"
                class="rounded-xl shadow-lg object-cover w-full h-48">
            <img src="https://picsum.photos/600/400" alt="Gallery 3"
                class="rounded-xl shadow-lg object-cover w-full h-48">
            <img src="https://picsum.photos/600/400" alt="Gallery 4"
                class="rounded-xl shadow-lg object-cover w-full h-48">
            <img src="https://picsum.photos/600/400" alt="Gallery 5"
                class="rounded-xl shadow-lg object-cover w-full h-48">
            <img src="https://picsum.photos/600/400" alt="Gallery 6"
                class="rounded-xl shadow-lg object-cover w-full h-48">
            <img src="https://picsum.photos/600/400" alt="Gallery 7"
                class="rounded-xl shadow-lg object-cover w-full h-48">
            <img src="https://picsum.photos/600/400" alt="Gallery 8 asdfasdfasd"
                class="rounded-xl shadow-lg object-cover w-full h-48">
        </div>
    </section>

    <!-- About Us Section -->
        <!-- About Us Section -->
        <section class="py-16 px-6 md:px-20 bg-zinc-900 text-white">
            <h2 class="text-3xl font-bold text-center text-red-500 mb-12">About Us</h2>

            <div class="grid md:grid-cols-2 gap-12 items-start">
                <!-- Bagian Kiri -->
                <div>
                    <h3 class="text-2xl font-bold mb-4">TDR High Performance Technology</h3>
                    <p class="text-zinc-300 mb-6">
                        TDR believes that High Performance Technology in the Automotive industry will improve human life.
                        We adopt values of Discipline, Responsiveness and Team Spirit in all that we do, providing
                        high-quality solutions for various needs and ensuring customer satisfaction.
                    </p>
                </div>

                <!-- Bagian Kanan -->
                <div>
                    <h3 class="text-2xl font-bold mb-4">Vision</h3>
                    <p class="italic text-zinc-300 mb-6">
                        “To be the world's leading High Performance Technology for Human Personal Mobility Vehicles and
                        Components.”
                    </p>
                </div>
            </div>

            <!-- OUR DNA -->
            <h3 class="text-2xl font-bold text-center text-white mt-16 mb-12">OUR DNA</h3>

            <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">
                <!-- Kiri -->
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <img src="https://img.icons8.com/?size=100&id=64776&format=png&color=000000" alt="Safety Icon"
                            class="w-10 h-10 bg-red-600 rounded-full p-2">
                        <div>
                            <p class="font-bold">SAFETY</p>
                            <p class="text-zinc-300">Developing technologies with safety in mind</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <img src="https://img.icons8.com/?size=100&id=34981&format=png&color=000000" alt="Durability Icon"
                            class="w-10 h-10 bg-red-600 rounded-full p-2">
                        <div>
                            <p class="font-bold">DURABILITY</p>
                            <p class="text-zinc-300">High design standards to withstand the harshest conditions</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <img src="https://img.icons8.com/?size=100&id=85618&format=png&color=000000" alt="Reliability Icon"
                            class="w-10 h-10 bg-red-600 rounded-full p-2">
                        <div>
                            <p class="font-bold">RELIABILITY</p>
                            <p class="text-zinc-300">Globally proven quality</p>
                        </div>
                    </div>
                </div>

                <!-- Kanan -->
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <img src="https://img.icons8.com/?size=100&id=e7hTB8DPcGtB&format=png&color=000000" alt="Fast Icon"
                            class="w-10 h-10 bg-red-600 rounded-full p-2">
                        <div>
                            <p class="font-bold">FAST</p>
                            <p class="text-zinc-300">Pushing the boundaries of innovation and performance</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <img src="https://img.icons8.com/?size=100&id=60985&format=png&color=000000" alt="Style Icon"
                            class="w-10 h-10 bg-red-600 rounded-full p-2">
                        <div>
                            <p class="font-bold">STYLE</p>
                            <p class="text-zinc-300">Empowerment through design</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <img src="https://img.icons8.com/?size=100&id=108268&format=png&color=000000" alt="Green Icon"
                            class="w-10 h-10 bg-red-600 rounded-full p-2">
                        <div>
                            <p class="font-bold">GREEN</p>
                            <p class="text-zinc-300">Sustainable product development</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>



    <section id="daftar" class="py-16 px-6 md:px-20 bg-red-600 text-white">
        <h2 class="text-3xl font-bold text-center mb-10">Form Pendaftaran</h2>
        <form class="max-w-xl mx-auto space-y-6">
            <input type="text" placeholder="Nama Lengkap" class="w-full p-3 rounded-lg text-black" required />
            <input type="email" placeholder="Email" class="w-full p-3 rounded-lg text-black" required />
            <input type="text" placeholder="Username Instagram/TikTok" class="w-full p-3 rounded-lg text-black"
                required />
            <textarea placeholder="Ceritakan alasan kamu ingin bergabung" class="w-full p-3 rounded-lg text-black"
                rows="4"></textarea>
            <button type="submit"
                class="w-full bg-black hover:bg-zinc-800 text-red-500 font-bold py-3 rounded-lg text-lg transition-all">
                Submit 🚀
            </button>
        </form>
    </section>

<footer class="py-10 px-6 md:px-20 bg-black text-zinc-400 text-sm">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">

        <!-- Kiri: Logo -->
        <div class="flex flex-col items-start">
            <img src="https://tdr-racing.com/assets/logo-b.svg" alt="TDR Logo" class="mb-4">
            <p class="text-xs text-zinc-500">© 2025 TDR High Performance Zone</p>
        </div>

        <!-- Tengah: Address -->
        <div class="text-center md:text-left">
            <h4 class="text-white font-bold mb-2">Address</h4>
            <p class="text-zinc-400 text-sm">
                TDR TECHNOLOGY CENTER<br>
                JL. DR. KRT. Radjiman Widyodiningrat<br>
                Swadaya IV No.9<br>
                Jakarta Timur 13920, Indonesia<br>
                T. 021-4600030 / 0813-1970-2000
            </p>
        </div>

        <!-- Kanan: Social Media -->
        <div class="flex flex-col items-start md:items-end space-y-3">
            <h4 class="text-white font-bold mb-2">Follow Us</h4>
            <div class="flex gap-4">
                <a href="https://instagram.com" target="_blank" class="hover:text-red-500 transition">
                    <img src="https://img.icons8.com/?size=100&id=85154&format=png&color=FFFFFF" alt="Instagram" class="w-6 h-6">
                </a>
                <a href="https://tiktok.com" target="_blank" class="hover:text-red-500 transition">
                    <img src="https://img.icons8.com/?size=100&id=123922&format=png&color=FFFFFF" alt="TikTok" class="w-6 h-6">
                </a>
            </div>
        </div>
    </div>
</footer>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carousel = document.getElementById("event-carousel");
            const nextBtn = document.getElementById("next-btn");
            const prevBtn = document.getElementById("prev-btn");

            if (!carousel) return;

            const cards = carousel.children;
            const totalCards = cards.length;
            const cardsPerPage = 3;
            const totalPages = Math.ceil(totalCards / cardsPerPage);
            let currentPage = 0;

            function updateCarousel() {
                carousel.style.transform = `translateX(-${currentPage * 100}%)`;
                updateButtons();
            }

            function updateButtons() {
                prevBtn.disabled = currentPage === 0;
                nextBtn.disabled = currentPage >= totalPages - 1;
            }

            nextBtn.addEventListener('click', () => {
                if (currentPage < totalPages - 1) {
                    currentPage++;
                    updateCarousel();
                }
            });

            prevBtn.addEventListener('click', () => {
                if (currentPage > 0) {
                    currentPage--;
                    updateCarousel();
                }
            });

            updateCarousel();
        });
    </>
</body>

</html>
