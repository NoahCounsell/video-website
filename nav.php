<nav class="bg-white p-4 absolute w-full z-10">
        <div class="max-w-7xl mx-auto relative">
          <input type="checkbox" id="menu-toggle" class="hidden peer">
          <div class="flex items-center justify-between">
            <div class="w-auto h-16">
              <img src="no_entry_studio_logo.png" alt="" class="h-full">
            </div>
            <div class="hidden md:flex space-x-8 relative z-20">
              <a href="index.php" class="text-black text-xl font-extralight hover:text-gray-600 transition-colors">Home</a>
              <a href="about.php" class="text-black text-xl font-extralight hover:text-gray-600 transition-colors">About</a>
              <a href="#" class="text-black text-xl font-extralight hover:text-gray-600 transition-colors">Services</a>
              <a href="#" class="text-black text-xl font-extralight hover:text-gray-600 transition-colors">Contact</a>
            </div>
            <div class="md:hidden relative z-20">
              <label for="menu-toggle" class="cursor-pointer text-black block p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
              </label>
            </div>
          </div>
          <div class="hidden peer-checked:block md:hidden mt-4 bg-white relative z-20">
            <a href="index.php" class="block text-black py-3 px-4 text-lg hover:bg-gray-100 transition-colors">Home</a>
            <a href="about.php" class="block text-black py-3 px-4 text-lg hover:bg-gray-100 transition-colors">About</a>
            <a href="#" class="block text-black py-3 px-4 text-lg hover:bg-gray-100 transition-colors">Services</a>
            <a href="#" class="block text-black py-3 px-4 text-lg hover:bg-gray-100 transition-colors">Contact</a>
          </div>
        </div>
      </nav>
<style>
  #menu-toggle:checked ~ #mobile-menu {
    display: block;
  }
</style>
<script>
  window.addEventListener('resize', function() {
    if (window.innerWidth >= 768) {
      document.getElementById('menu-toggle').checked = false;
    }
  });
</script>