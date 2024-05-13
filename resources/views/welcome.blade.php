<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body>

<div class="p-6 max-w-sm mx-auto bg-black text-white rounded-xl shadow-lg flex items-center space-x-4">
  <div class="shrink-0">
    <img class="h-12 w-12" src="/img/logo.svg" alt="ChitChat Logo">
  </div>
  <div>
    <div class="text-xl  text-white font-medium ">ChitChat</div>
    <p class=" text-white">You have a new message!</p>
  </div>
</div>

<div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
    <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:shrink-0" src="/img/erin-lindford.jpg" alt="Woman's Face" />
    <div class="text-center space-y-2 sm:text-left">
      <div class="space-y-0.5">
        <p class="text-lg text-black font-semibold">
          Erin Lindford
        </p>
        <p class="text-slate-500 font-medium">
          Product Engineer
        </p>
      </div>
      <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Message</button>
    </div>
  </div>

  <button class="  hover:bg-purple-900 border hover:text-white border-purple-500 px-4  rounded-full">
    Save changes
  </button>
  <button class="  rounded-xl border border-purple-500 px-4   active:bg-violet-700   focus:ring focus:ring-violet-300 ...">
    Save changes
  </button>

  <a href="#" class="group block max-w-xs mx-auto rounded-lg p-6 bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-900">
    <div class="flex items-center space-x-3">

      <h3 class="text-slate-900 group-hover:text-white text-sm font-semibold">New project</h3>
    </div>
    <p class="text-slate-500 group-hover:text-white text-sm ">Create a new project from a variety of starting templates.</p>
  </a>
  <fieldset>
    <legend>Published status</legend>

    <input id="draft" class="peer/draft" type="radio" name="status" checked />
    <label for="draft" class="peer-checked/draft:text-sky-500">Draft</label>

    <input id="published" class="peer/published" type="radio" name="status" />
    <label for="published" class="peer-checked/published:text-sky-500">Published</label>

    <div class="hidden peer-checked/draft:block">Drafts are only visible to administrators.</div>
    <div class="hidden peer-checked/published:block">Your post will be publicly visible on your site.</div>
  </fieldset>
  <label class="block">
    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
      Email
    </span>
    <input type="email" name="email" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="you@example.com" />
  </label>
  <blockquote class="text-2xl font-semibold italic text-center text-slate-900">
    When you look
    <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-pink-500 relative inline-block">
      <span class="relative text-white">annoyed</span>
    </span>
    all the time, people think that you're busy.
  </blockquote>
  <div class="bg-white dark:bg-slate-900 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
    <div>
      <span class="inline-flex items-center justify-center p-2 bg-indigo-500 rounded-md shadow-lg">
        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><!-- ... --></svg>
      </span>
    </div>
    <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Writes Upside-Down</h3>
    <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
      The Zero Gravity Pen can be used to write in any orientation, including upside-down. It even works in outer space.
    </p>
  </div>

 
  </iframe>
</body>
</html>
