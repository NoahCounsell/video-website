<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
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
        <div class="p-4 md:p-10 w-full h-auto font-extralight">
            <div class="text-4xl text-center md:text-left">Services</div>
            <div class="text-lg text-center md:text-left">No Entry Studio is a company devoted to creating unique videos for companies and indevidials..</div>

            <div class="mt-6 bg-orange-100 p-2">
                <div class="text-2xl text-center md:text-left">Videography</div>
                <div class="pb-1">this is an area we think is supper impportant when growing any presence weather online or elsewhere digital media maters its what draws people in.</div>
                <ul class="list-['-'] ml-5">
                    <li class="pl-2">Music Videos</li>
                    <li class="pl-2">Product comercials</li>
                    <li class="pl-2">Short films about what ever you want ! (15mins max)</li>
                </ul>
            </div>
            <div class="mt-6 bg-blue-100 p-2">
                <div class="text-2xl text-center md:text-left">Photography</div>
                <div class="pb-1">this is an area we think is supper impportant when growing any presence weather online or elsewhere digital media maters its what draws people in.</div>
                <ul class="list-['-'] ml-5">
                    <li class="pl-2">Product Photography</li>
                    <li class="pl-2">Portrature / famaly photos / profile pictures</li>
                    <li class="pl-2">Artist profiles (see 'Deeper Minds')</li>
                </ul>
            </div>
            <div class="mt-6 bg-purple-100 p-2">
                <div class="text-2xl text-center md:text-left">You can tell your friends that...</div>
                <ul class="list-['-'] ml-5">
                    <li class="pl-2 font-extralight">Your videos were shot at 4k 120fps.</li>
                    <li class="pl-2 font-extralight">Your images have a resolotion of 24mp.</li>
                    <li class="pl-2 font-extralight">All the music is royalty free.</li>
                    <li class="pl-2 font-extralight">Your videos where edited using profesional grade software from apple and adobe.</li>
                    <li class="pl-2 font-extralight">All the content is original and created exclusively for you.</li>
                </ul>
            </div>
        </div>
        <script src="" async defer></script>
        <?php include 'footer.php'; ?>
    </body>
</html>