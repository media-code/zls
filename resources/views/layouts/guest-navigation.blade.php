<nav x-data="{ open: false }" class="flex z-50 fixed overflow-hidden left-0 flex-col w-full sm:h-auto {{!Route::is('home') ? 'bg-white':''}}"
	:class="{ 'h-full': open }"
>
	<!-- Primary Navigation Menu -->
	<div
		class="w-full flex-shrink max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 "
		:class="{'bg-primary': open}"
	>
		<div class="flex justify-between h-20">
			<div class="flex">
				<!-- Logo -->
				<div class="flex-shrink-0 flex items-center">
					<a class="ml-2" href="{{ route('home') }}">
						<x-application-logo class="block h-10 w-auto fill-current text-grey-600" />
					</a>
				</div>
			</div>

			<div class="hidden sm:-my-px sm:ml-10 sm:flex items-center space-x-3">
				<x-nav-link :href="route('consultancy')" :active="request()->routeIs('consultancy')" class="hover:text-primary">
					consultancy
				</x-nav-link>
				<span>/</span>
				<x-nav-link :href="route('about')" :active="request()->routeIs('about')" class="hover:text-primary">
					about us
				</x-nav-link>
				<span>/</span>
				<x-nav-link :href="route('home')" :active="request()->routeIs('contact')" class="hover:text-primary">
					contact
				</x-nav-link>
			</div>

			<!-- Hamburger -->
			<div class="-mr-2 flex items-center sm:hidden">
				<button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-grey-400 hover:text-grey-500 hover:bg-grey-100 focus:outline-none focus:bg-grey-100 focus:text-grey-500 transition duration-100 ease-in-out">
					<svg class="h-10 w-10" stroke="currentColor" fill="none" viewBox="0 0 24 24">
						<path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
						<path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
			</div>
		</div>
	</div>

	<!-- Responsive Navigation Menu -->
	<div
		:class="{'flex bg-primary bottom-0': open, 'bottom-full hidden': ! open}"
		class="absolute flex-col w-full h-full flex-grow items-center text-center  sm:hidden transition-all duration-500"
		style="transition-timing-function: cubic-bezier(0.18, 0.89, 0.35, 1.1);"
	>
		<div class="flex-shrink w-full">
			<div
				class="w-full flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
				:class="{'bg-primary': open, 'bg-white': ! open}"
			>
				<div class="flex justify-between h-20">
					<div class="flex">
						<!-- Logo -->
						<div class="flex-shrink-0 flex items-center">
							<a class="ml-2" href="{{ route('dashboard') }}">
								<x-application-logo class="block h-10 w-auto fill-current text-grey-600" />
							</a>
						</div>
					</div>

					<!-- Hamburger -->
					<div class="-mr-2 flex items-center sm:hidden">
						<button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-grey-400 hover:text-grey-500 hover:bg-grey-100 focus:outline-none focus:bg-grey-100 focus:text-grey-500 transition duration-150 ease-in-out">
							<svg class="h-10 w-10" stroke="currentColor" fill="none" viewBox="0 0 24 24">
								<path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />
							</svg>
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="flex-grow flex flex-row items-center w-full">
			<div class="flex flex-col w-full items-center">
				<x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
					home
				</x-responsive-nav-link>
				<x-responsive-nav-link
					:href="route('consultancy')"
					:active="request()->routeIs('consultancy')"
				>
					consultancy
				</x-responsive-nav-link>
				<x-responsive-nav-link
					:href="route('about')"
					:active="request()->routeIs('about')"
				>
					about us
				</x-responsive-nav-link>
				<a 
					class="leading-3 uppercase text-base mt-5 font-bold inline-block rounded-full border-2 border-secondary-800 px-8 py-4"
					href="/contact"
					active="request()->routeIs('contact')"
				>
					contact
					<i class="ml-2 fas fa-arrow-right"></i>
				</a>
			</div>
		</div>
	</div>
</nav>
