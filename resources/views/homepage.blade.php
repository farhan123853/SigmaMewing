<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food & Beverage E-Commerce</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">
  <!-- Header -->
  <header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-green-600">FoodMarket</a>
      <nav class="hidden md:flex space-x-6">
        <a href="#" class="text-gray-600 hover:text-green-600">Home</a>
        <a href="#categories" class="text-gray-600 hover:text-green-600">Categories</a>
        <a href="#about" class="text-gray-600 hover:text-green-600">About</a>
        <a href="#contact" class="text-gray-600 hover:text-green-600">Contact</a>
      </nav>
      <div class="flex items-center space-x-4">
        <a href="register" class="text-gray-600 hover:text-green-600">register</a>
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-cover bg-center h-screen flex items-center justify-center" style="background-image: url('https://source.unsplash.com/featured/?food,beverages');">
    <div class="bg-black bg-opacity-50 p-8 text-center rounded-lg">
      <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Discover Fresh & Delicious Foods</h1>
      <p class="text-lg text-gray-300 mb-6">Explore our wide range of food and beverages, delivered fresh to your doorstep.</p>
      <a href="#categories" class="px-6 py-3 bg-green-600 text-white text-lg rounded hover:bg-green-700">Shop Now</a>
    </div>
  </section>

  <!-- Categories Section -->
  <section id="categories" class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Shop by Categories</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white shadow rounded-lg p-6 text-center">
          <img src="https://source.unsplash.com/100x100/?fruits" alt="Fruits" class="mx-auto mb-4 rounded-full">
          <h3 class="text-xl font-semibold text-gray-700">Fruits</h3>
          <p class="text-gray-500">Fresh and organic fruits for a healthy lifestyle.</p>
        </div>
        <div class="bg-white shadow rounded-lg p-6 text-center">
          <img src="https://source.unsplash.com/100x100/?drinks" alt="Drinks" class="mx-auto mb-4 rounded-full">
          <h3 class="text-xl font-semibold text-gray-700">Drinks</h3>
          <p class="text-gray-500">Refreshing beverages to quench your thirst.</p>
        </div>
        <div class="bg-white shadow rounded-lg p-6 text-center">
          <img src="https://source.unsplash.com/100x100/?snacks" alt="Snacks" class="mx-auto mb-4 rounded-full">
          <h3 class="text-xl font-semibold text-gray-700">Snacks</h3>
          <p class="text-gray-500">Tasty snacks for every occasion.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-16">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-gray-800 mb-6">About Us</h2>
      <p class="text-gray-600">We are committed to delivering the freshest and highest-quality food and beverages directly to your home. Join thousands of satisfied customers who trust FoodMarket for their daily needs.</p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 py-8">
    <div class="container mx-auto px-4 text-center text-white">
      <p>&copy; 2025 FoodMarket. All Rights Reserved.</p>
    </div>
  </footer>
</body>
</html>