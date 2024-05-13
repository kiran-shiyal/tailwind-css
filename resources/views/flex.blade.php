<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="flex  flex-col gap-3 md:flex-row">
        <div class="basis-1/4 w-60 md:basis-1/5 bg-slate-400">01</div>
        <div class="basis-1/4 bg-fuchsia-400">02</div>
        <div class="basis-1/2 bg-cyan-300">03</div>
      </div>

      <div class="flex gap-4 mt-4 ">
        <div class="flex-none w-14 bg-fuchsia-400">
          01
        </div>
        <div class="flex-1  w-64 bg-fuchsia-400">
          02
        </div>
        <div class="flex-initial w-32 bg-fuchsia-400">
          03
        </div>
      </div>

      <div class="flex mt-3   justify-between   flex-wrap">
        <div class="flex-none w-14 h-14   bg-cyan-300 ">
          01
        </div>
        <div class=" w-64 h-14   bg-cyan-300">
          02
        </div>
        <div class="flex-none w-14 h-14    bg-cyan-300">
          03
        </div>
      </div>

      <div class="flex justify-center flex-wrap gap-x-2 mt-4">
        <div class="bg-violet-500  w-32">01</div>
        <div class="bg-violet-500 w-32">02</div>
        <div class="bg-violet-500 w-60">03</div>
      </div>

</body>
</html>
