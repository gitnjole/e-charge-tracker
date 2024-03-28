<!-- component -->
<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
  <div class="md:flex">
      <div class="md:flex-shrink-0">
      <img class="h-48 w-full object-cover md:w-48" src="images/card-background.jpg" alt="Event image">
      </div>
      <div class="p-8">
      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">E-charge card information</div>
      <p class="block mt-1 text-lg leading-tight font-medium text-black">{{$card->slug}}</p>
      <p class="mt-2 text-gray-500">Card bought from {{$card->store->address}}</p>
      <p class="text-gray-500">Activated at {{$card->activated_at->format('d.m H:i')}}</p>
      <p class="text-gray-500">Last used at {{$card->updated_at->format('d.m H:i')}}</p>
      </div>
  </div>
  </div>

  <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
  <div class="p-8">
      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Credit left</div>
      <p class="text-4xl font-bold">{{$card->amount_left}}</p>
      <p class="mt-2 text-gray-500">Starting amount: {{$card->amount}}</p>
      <p class="mt-2 text-gray-500">Last charge: -20</p>
  </div>
  </div>

  <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
  <div class="p-8 flex items-center">
      <div class="pr-4">
      <p class="text-4xl font-bold">18th</p>
      </div>
      <div>
      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">November, 2023</div>
      <p class="mt-2 text-gray-500 text-sm">9:20 AM - 9: 40 AM</p>
      <p class="mt-2 text-gray-500">Charging details...</p>
      <button class="mt-5 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        View details
      </button>
      </div>
  </div>
  </div>

  <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
  <div class="p-8 flex items-center">
      <div class="pr-4">
      <p class="text-4xl font-bold">18th</p>
      </div>
      <div>
      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">November, 2023</div>
      <p class="mt-2 text-gray-500 text-sm">9:20 AM - 9: 40 AM</p>
      <p class="mt-2 text-gray-500">Charging details...</p>
      <button class="mt-5 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        View details
      </button>
      </div>
  </div>
  </div>
</div>