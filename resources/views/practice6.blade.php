 <!DOCTYPE html>
 <html lang="en" class="scroll-smooth">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
 </head>
 <body class="h-[1200px]">

    <button class="cursor-move pointer-events-auto  bg-blue-500 p-2 rounded-md w-60 ">hover me</button>
 <input type="text" class="border border-gray-600 bg-sky-200 px-2 hover:cursor-pointer  caret-red-600 focus:outline-none focus:ring mt-5 ml-32" placeholder="enter a name">
 <header class="flex flex-col items-center
 gap-y-7 mt-5">
<h1 class="text-6xl text-green-500
 bg-white rounded-full
 px-7 py-5 ">
GeeksforGeeks
</h1>
<p class="text-4xl">
Smooth Scrolling using Tailwind CSS
</p>
<ul class="flex gap-x-10 text-xl">
<a href="#section1"
class="text-green-700 bg-green-100
    rounded-md p-2 outline-none
    outline-offset-0 hover:text-white
    hover:bg-green-700 hover:outline-2
    hover:outline-white transition-al
    l duration-300">
Section 1
</a>
<a href="#section2"
class="text-green-700 bg-green-100
    rounded-md p-2 outline-none
    outline-offset-0 hover:text-white
    hover:bg-green-700 hover:outline-2
    hover:outline-white transition-all
    duration-300">
Section 2
</a>
<a href="#section3"
class="text-green-700 bg-green-100 rounded-md
    p-2 outline-none outline-offset-0
    hover:text-white hover:bg-green-700
    hover:outline-2 hover:outline-white
    transition-all duration-300">
Section 3
</a>
</ul>
</header>

<main class="flex flex-col gap-y-10 p-10">
<section id="section1"
class="h-screen flex items-center
      justify-center text-7xl
      bg-blue-500 rounded-xl">
<h1>Section 1</h1>
</section>

<section id="section2" class="h-screen flex items-center
                    justify-center text-7xl
                    bg-yellow-500 rounded-xl">
<h1>Section 2</h1>
</section>

<section id="section3" class="h-screen flex items-center
                    justify-center text-7xl
                    bg-purple-500 rounded-xl">
<h1>Section 3</h1>
</section>
</main>
 </body>
 </html>
