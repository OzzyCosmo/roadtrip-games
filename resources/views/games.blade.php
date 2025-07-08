<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div class="">
    <x-header/>
  </div>

  <div class="justify-center items-center flex flex-col mt-8">
    <h1 class="text-4xl font-bold">Games and Tools -</h1>
    <div class="grid md:grid-cols-2 gap-4 mt-4">
        <a href="/games/service-station-locator">
          <div class="bg-[url('/storage/petrol-station.jpg')] bg-contain border-2 rounded-2xl h-40 w-80 drop-shadow-2xl flex justify-center items-center font-bold text-2xl text-center text-red-400"><span class="drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]"">Service Station <br> Locator </span></div>
        </a>
        <div class="bg-blue-300 rounded-2xl h-40 w-80 drop-shadow-2xl"></div>
        <div class="bg-blue-300 rounded-2xl h-40 w-80 flex justify-center items-center drop-shadow-2xl">placeholder</div>
        <div class="bg-blue-300 rounded-2xl h-40 w-80 flex justify-center items-center drop-shadow-2xl">placeholder</div>
        <div class="bg-blue-300 rounded-2xl h-40 w-80 flex justify-center items-center drop-shadow-2xl">placeholder</div>
        <div class="bg-blue-300 rounded-2xl h-40 w-80 flex justify-center items-center drop-shadow-2xl">placeholder</div>
  </div>
</body>
</html>