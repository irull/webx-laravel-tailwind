<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Home</title>
</head>
<body class="selection:bg-pink-600">
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>

  <div class="p-6 max-w-sm mx-auto bg-gray-300 hover:bg-gray-400 rounded-xl shadow-lg flex items-center space-x-4">
    <div class="shrink-0">
      <img class="h-12 w-12" src="/img/logo.svg" alt="ChitChat Logo">
    </div>
    <div>
      <div class="text-xl font-medium text-black">ChitChat</div>
      <p class="text-slate-500 hover:text-slate-300">You have a new message!</p>
    </div>
  </div>

  <blockquote class="text-2xl font-semibold italic text-center text-slate-900 mt-3">
    When you look
    <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-pink-500 relative inline-block">
      <span class="relative text-white">annoyed</span>
    </span>
    all the time, people think that you're busy.
  </blockquote>

  <ul role="list" class="marker:text-sky-400 list-disc pl-5 space-y-3 text-slate-400">
    <li>5 cups chopped Porcini mushrooms</li>
    <li>1/2 cup of olive oil</li>
    <li>3lb of celery</li>
  </ul>

</body>
</html>