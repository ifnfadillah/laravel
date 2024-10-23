<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
             <a href="/about"> <dt class="text-base leading-7 text-gray-600">See More</dt></a>
              <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">About</dd>
            </div>
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
              <a href="/blog"><dt class="text-base leading-7 text-gray-600">See More</dt></a>
              <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Blog</dd>
            </div>
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
            <a href="/contact"><dt class="text-base leading-7 text-gray-600">See More</dt></a>
              <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Contact</dd>
            </div>
          </dl>
        </div>
      </div>
      
</body>
</html>