@extends('layouts.app')
@section('body')
<!-- component -->
<div class="relative w-full">
    <div class="sticky top-0 flex h-screen items-center justify-center">
      <img src="https://www.stockvault.net/data/2012/10/29/137060/preview16.jpg" class="h-full w-full object-cover" />
      <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 backdrop-blur-xl">
            <!-- component -->
<div class="flex flex-col justify-center h-screen">
	<div
		class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
		<div class="w-full md:w-1/3 bg-white grid place-items-center">
			<img src="https://images.pexels.com/photos/4381392/pexels-photo-4381392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="tailwind logo" class="rounded-xl" />
        </div>
                <div class="w-full md:w-2/3 bg-white flex flex-col p-3">
                    <div class="flex justify-between item-center">
                        <p class="text-gray-500 font-medium hidden md:block">Vacations</p>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <p class="text-gray-600 font-bold text-sm ml-1">
                                4.96
                                <span class="text-gray-500 font-normal">(76 reviews)</span>
                            </p>
                        </div>
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">
                            Superhost</div>
                    </div>
                    <h3 class="font-black text-gray-800 md:text-3xl text-xl">The Majestic and Wonderful Bahamas</h3>
                    <p class="md:text-lg text-gray-500 text-base">The best kept secret of The Bahamas is the country’s sheer
                        size and diversity. With 16 major islands, The Bahamas is an unmatched destination</p>
                    <p class="text-xl font-black text-gray-800">
                        $110
                        <span class="font-normal text-gray-600 text-base">/night</span>
                    </p>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="sticky top-0 flex h-screen items-center justify-center">
      <img src="https://www.stockvault.net/data/2014/10/06/163147/preview16.jpg" class="h-full w-full object-cover" />
  
      <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 p-10 backdrop-blur-xl">
        <!-- component -->
<style>
    body {
      background: #e2e8f0;
    }
      *:hover {
        transition: all 150ms ease-in;
      }
    </style>
    
    <div class="antialiased max-w-6xl mx-auto my-12 bg-gray-300 px-8">
      
    
      <div class="relative block md:flex items-center">
        <div class="w-full md:w-1/2 relative z-1 bg-gray-100 rounded shadow-lg overflow-hidden">
          <div class="text-lg font-medium text-green-500 uppercase p-8 text-center border-b border-gray-200 tracking-wide">Pay as you go</div>
          <div class="block sm:flex md:block lg:flex items-center justify-center">
            <div class="mt-8 sm:m-8 md:m-0 md:mt-8 lg:m-8 text-center">
              <div class="inline-flex items-center">
                <span class="text-3xl font-medium">1.4%</span>
                <span class="text-xl text-gray-600 ml-2">+</span>
                <span class="text-xl ml-2">20p</span>
              </div>
              <span class="block text-sm text-gray-600 mt-2">for European cards</span>
            </div>
            <div class="mt-4 mb-8 sm:m-8 md:m-0 md:mt-4 md:mb-8 lg:m-8 text-center">
              <div class="inline-flex items-center">
                <span class="text-3xl font-medium">2.9%</span>
                <span class="text-xl text-gray-600 ml-2">+</span>
                <span class="text-xl ml-2">20p</span>
              </div>
              <span class="block text-sm text-gray-600 mt-2">for non-European cards</span>
            </div>
          </div>
          <div class="flex justify-center mt-3">
            <ul>
              <li class="flex items-center">
                <div class="bg-green-200 rounded-full p-2 fill-current text-green-700">
                  <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-umbrella"><path class="primary" d="M11 3.05V2a1 1 0 0 1 2 0v1.05A10 10 0 0 1 22 13c0 1.33-2 1.33-2 0a2 2 0 1 0-4 0c0 1.33-2 1.33-2 0a2 2 0 1 0-4 0c0 1.33-2 1.33-2 0a2 2 0 1 0-4 0c0 1.33-2 1.33-2 0a10 10 0 0 1 9-9.95z"/><path class="secondary" d="M11 14a1 1 0 0 1 2 0v5a3 3 0 0 1-6 0 1 1 0 0 1 2 0 1 1 0 0 0 2 0v-5z"/></svg>
                </div>
                <span class="text-gray-700 text-lg ml-3">No setup, monthly, or hidden fees</span>
              </li>
              <li class="flex items-center mt-3">
                <div class="bg-green-200 rounded-full p-2 fill-current text-green-700">
                  <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-shopping-bag"><path class="primary" d="M5 8h14a1 1 0 0 1 1 .92l1 12A1 1 0 0 1 20 22H4a1 1 0 0 1-1-1.08l1-12A1 1 0 0 1 5 8z"/><path class="secondary" d="M9 10a1 1 0 0 1-2 0V7a5 5 0 1 1 10 0v3a1 1 0 0 1-2 0V7a3 3 0 0 0-6 0v3z"/></svg>
                </div>
                <span class="text-gray-700 text-lg ml-3">Pay only for what you use</span>
              </li>
              <li class="flex items-center mt-3">
                <div class="bg-green-200 rounded-full p-2 fill-current text-green-700">
                  <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-pie-chart"><path class="primary" d="M14 13h6.78a1 1 0 0 1 .97 1.22A10 10 0 1 1 9.78 2.25a1 1 0 0 1 1.22.97V10a3 3 0 0 0 3 3z"/><path class="secondary" d="M20.78 11H14a1 1 0 0 1-1-1V3.22a1 1 0 0 1 1.22-.97c3.74.85 6.68 3.79 7.53 7.53a1 1 0 0 1-.97 1.22z"/></svg>
                </div>
                <span class="text-gray-700 text-lg ml-3">Real-time fee reporting</span>
              </li>
            </ul>
          </div>
          <a class="block flex items-center justify-center bg-gray-200 hover:bg-gray-300 p-8 text-md font-semibold text-gray-800 uppercase mt-16" href="#">
            <span>Create account</span>
            <span class="font-medium text-gray-700 ml-2">➔</span>
          </a>
        </div>
        <div class="w-full md:w-1/2 relative z-0 px-8 md:px-0 md:py-16">
          <div class="bg-blue-900 text-white rounded-b md:rounded-b-none md:rounded-r shadow-lg overflow-hidden">
            <div class="text-lg font-medium uppercase p-8 text-center border-b border-blue-800 tracking-wide">Enterprise</div>
            <div class="text-center text-sm sm:text-md max-w-sm mx-auto mt-8 text-blue-200 px-8 lg:px-0">
              Stripe offers everything needed to run an online business at scale. Get in touch for details.
            </div>
            <div class="mt-8 border border-blue-800 mx-8 lg:mx-16 flex flex-wrap">
              <div class="flex items-center justify-center w-1/2 text-center p-4 border-r border-b border-blue-800">Account management</div>
              <div class="flex items-center justify-center w-1/2 text-center p-4 border-b border-blue-800">Volume discounts</div>
              <div class="flex items-center justify-center w-1/2 text-center p-4 border-r border-blue-800">Migration assistance</div>
              <div class="flex items-center justify-center w-1/2 text-center p-4">Dedicated support</div>
            </div>
            <a class="block flex items-center justify-center bg-blue-800 hover:bg-blue-700 p-8 text-md font-semibold text-gray-300 uppercase mt-8" href="#">
              <span>Contact sales</span>
              <span class="font-medium text-gray-300 ml-2">➔</span>
            </a>
          </div>
        </div>
      </div>   
    </div>
      </div>
    </div>
  
    <div class="sticky top-0 flex h-screen items-center justify-center">
      <img src="https://www.stockvault.net/data/2016/03/14/187739/preview16.jpg" class="h-full w-full object-cover" />
  
      <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 p-10 backdrop-blur-xl">
        <h2 class="text-2xl font-bold text-white">Third Section</h2>
        <p class="font-sans text-lg text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
      </div>
    </div>
  
    <div class="sticky top-0 flex h-screen items-center justify-center">
      <img src="https://www.stockvault.net/data/2016/03/14/187732/preview16.jpg" class="h-full w-full object-cover" />
  
      <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 p-10 backdrop-blur-xl">
        <h2 class="text-2xl font-bold text-white">Fourth Section</h2>
        <p class="font-sans text-lg text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
      </div>
    </div>
  </div>
@endsection