<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<header class="w-full px-4 pt-4 flex items-center justify-between md:pb-4">
    <div
        class="flex items-center gap-2
               mx-auto              
               md:mx-0 md:absolute md:left-1/2 md:-translate-x-1/2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
          <path d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 1 1 6 0h3a.75.75 0 0 0 .75-.75V15Z" />
          <path d="M8.25 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0ZM15.75 6.75a.75.75 0 0 0-.75.75v11.25c0 .087.015.17.042.248a3 3 0 0 1 5.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 0 0-3.732-10.104 1.837 1.837 0 0 0-1.47-.725H15.75Z" />
          <path d="M19.5 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
        </svg>

        <h1 class="text-xl sm:text-2xl select-none">
            <span class="font-bold">RoadTrip</span> Games
        </h1>
    </div>

    <nav class="hidden md:flex md:ml-auto md:pr-20 gap-4">
        <a href="/"
           class="hover:underline line-through decoration-red-600 {{ request()->routeIs('home')  ? 'font-bold' : '' }}">
            Home
        </a>
        <a href="/games"
           class="hover:underline {{ request()->routeIs('games') ? 'font-bold' : '' }}">
            Games and Tools
        </a>
    </nav>
</header>

<nav x-show="open" x-transition
     class="md:hidden flex flex-col items-center gap-2 pb-4 pt-2">
    <hr class="border-black w-full">
     <a href="/"
       class="hover:underline line-through decoration-red-600 {{ request()->routeIs('home')  ? 'font-bold' : '' }}">
        Home
    </a>
    <a href="/games"
       class="hover:underline {{ request()->routeIs('games') ? 'font-bold' : '' }}">
        Games and Tools
    </a>
</nav>
<hr class="border-black w-full">
