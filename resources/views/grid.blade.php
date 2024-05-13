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
    <div class="grid grid-cols-4 gap-2">
        <div class="bg-slate-400 col-span-2 col-start-2 ">1</div>
        <div class="bg-slate-400">2</div>
        <div class="bg-slate-400">3</div>
        <div class="bg-slate-400">4</div>
        <div class="bg-slate-400">5</div>

        <div class="grid  grid-cols-subgrid gap-2 col-span-2">
            <div class="col-start-2 bg-slate-400">06</div>
          </div>
        <div class="bg-slate-400">7</div>

    </div>

    <div class="grid gap-4 grid-flow-row-dense grid-cols-3     mt-4">
        <div class="bg-yellow-300">1</div>
        <div class="bg-yellow-300">2</div>
        <div class="bg-yellow-300">3</div>
        <div class="bg-yellow-300">4</div>
        <div class="bg-yellow-300">5</div>
        <div class="grid grid-rows-subgrid gap-4 row-span-3">
            <div class="row-start-2 bg-yellow-300">06</div>
        </div>
        <div class="bg-yellow-300">7</div>
        <div class="bg-yellow-300">8</div>
        <div class="bg-yellow-300">9</div>
    </div>

    <div class="grid grid-flow-col auto-cols-fr gap-3">
        <div class="bg-indigo-500">01</div>
        <div class="bg-indigo-500">02</div>
        <div class="bg-indigo-500">03</div>
      </div>

      <div class="grid justify-items-stretch   gap-3 mt-4 grid-cols-3">
        <div class="bg-slate-400 justify-self-start">01</div>
        <div class="bg-slate-400 justify-self-center">02</div>
        <div class="bg-slate-400 justify-self-end">03</div>
        <div class="bg-slate-400">04</div>
        <div class="bg-slate-400">05</div>
        <div class="bg-slate-400">06</div>
      </div>

      <div class="grid grid-cols-2  mt-7 gap-4 items-end    bg-slate-400 h-48 ">
        <div class="bg-indigo-500 w-1/3  ">01</div>
        <div class="bg-indigo-500 w-1/3">02</div>
        <div class="bg-indigo-500 w-1/3">03</div>
        <div class="bg-indigo-500 w-1/3">04</div>
      </div>

        <div class="flex space-x-10 ">
            <div class="bg-yellow-300 size-24">01</div>
            <div class="bg-yellow-300 size-32">02</div>
            <div class="bg-yellow-300 size-44">03</div>
          </div>
          <p class="font-sans hover:font-serif text-3xl">The quick brown fox ...</p>
          <p class="font-serif ...">The quick brown fox ...</p>
          <p class="font-mono ...">The quick brown fox ...</p>
</body>

</html>
