<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="h-100">
    <div class="flex justify-center">
        <svg class="animate-spin ">

        </svg>
    </div>
            
    <div class="flex justify-center">
        <span class="relative flex h-16 w-16">
          <span
            class="  animate-ping animate-once absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"
          ></span>
          <span
            class="relative inline-flex rounded-full h-16 w-16 bg-blue-500"
          ></span>
        </span>
      </div>
      <div class="flex justify-start">
        <span>


        <div class="animate-pulse  hover:animate-ping rounded-full bg-blue-400 h-16 w-16"></div>

      </div>
    </span>

      <div class="flex justify-center">
        <div class="animate-bounce   rounded-full bg-blue-500 h-16 w-16"></div>

      </div>


      <div class="flex justify-center mt-20">
        <img src="{{ url('storage/images/IMG-20231002-WA0012.jpg') }}" class="scale-150  -translate-x-40 origin-bottom rotate-45  " width="200" height="200" alt="">

        <label>
            <input type="checkbox" class="accent-pink-500" checked> Customized
          </label>

      </div>
</body>
</html>
