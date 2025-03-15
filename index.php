<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .max-w-custom {
      max-width: 900px;
    }
  </style>
</head>
  <body>
    <div class="relative">
      <?php include 'nav.php'; ?>
      <div>
        <div class="relative overflow-hidden">
          <video src="banner.mp4" class="w-full md:h-auto h-[50vh] object-cover" autoplay muted loop id="banner"></video>
        </div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mt-8 text-white font-serif text-center">
          <div class="lg:text-6xl md:text-3xl text-2xl">No Entry Studio.</div>
          <div class="lg:text-xl md:text-xl text-md">We are the next generation of filmmakers</div>
        </div>
      </div>
    </div>

    <div class="max-w-[1400px] mx-auto px-4 py-12 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-extralight text-center mb-8">PASSION PROJECTS</h2>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 p-2">

        <div class="aspect-video">
          <iframe class="w-full h-full" src="https://www.youtube.com/embed/mwXfVvboq0w?si=ttOySSA4n1eYYurI" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <div class="aspect-video">
          <iframe class="w-full h-full" src="https://www.youtube.com/embed/EKaIDnTYeGA?si=SYFvDojx6LNwAsG4" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <div class="aspect-video">
          <iframe class="w-full h-full" src="https://www.youtube.com/embed/-SNJAuhpGK8?si=Vvx52c9IaDIj1cwE" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <div class="aspect-video">
          <iframe class="w-full h-full" src="https://www.youtube.com/embed/ZeeROu3ME1c?si=yw4PuPCE0q7Kqzx5" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <script>
      window.addEventListener('resize', function() {
        if (window.innerWidth >= 768) {
          document.getElementById('menu-toggle').checked = false;
        }
      });
    </script>
    <?php include 'footer.php'; ?>
  </body>
</html>
