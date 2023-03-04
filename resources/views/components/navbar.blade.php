<!--Nav-->
<!--##########################################################################-->
<nav class="bg-gray-700 fixed w-full z-30 px-24 rounded-b-3xl">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--Icon when menu is closed.Menu open: "hidden", Menu closed: "block"-->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Icon when menu is open. Menu open: "block", Menu closed: "hidden" -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="block h-8 w-auto lg:hidden" src="{{asset('images/logo_white.png')}}" alt="Company">
                    <img class="hidden h-8 w-auto lg:block" src="{{asset('images/logo_white.png')}}" alt="Company">
                </div>
                @yield('navbar')
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <!-- Profile dropdown -->
                <div class="relative ml-3">
                    <button type="button" onclick="document.getElementById('user-menu').classList.toggle('hidden')"
                        class="flex rounded-full bg-gray-800 text-sm">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </button>
                    <div id="user-menu"
                        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-2xl bg-white py-2 text-sm font-medium hidden flex flex-col"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <a href="#" onclick="performAction('Role')" class="flex items-center px-4 py-2 text-gray-700 hover:bg-birumuda rounded-2xl"
                            role="menuitem" tabindex="-1">
                            <img class="h-4 w-auto mr-2" src="{{asset('images/icon_role.png')}}" alt="#">Role: {{ Auth::user()->role }}
                        </a>
                        <a href="#" onclick="performAction('Your Profile')" class="flex items-center px-4 py-2 text-gray-700 hover:bg-birumuda rounded-2xl"
                            role="menuitem" tabindex="-1">
                            <img class="h-3.5 w-auto mr-2" src="{{asset('images/icon_user.png')}}" alt="#">{{ Auth::user()->name }}
                        </a>
                        <a href="#" onclick="performAction('Email')" class="flex items-center px-4 py-2 text-gray-700 hover:bg-birumuda rounded-2xl"
                            role="menuitem" tabindex="-1">
                            <img class="h-3.5 w-auto mr-2" src="{{asset('images/icon_email.png')}}" alt="#">{{ Auth::user()->email }}
                        </a>
                        <a href="{{ route('logoutaksi') }}" onclick="performAction('Sign Out')" class="flex items-center px-4 py-2 text-gray-700 hover:bg-birumuda rounded-2xl text-merah"
                            role="menuitem" tabindex="-1">
                            <img class="h-4 w-auto mr-2" src="{{asset('images/icon_logout.png')}}" alt="#">Sign Out
                        </a>
                    </div>
                </div>

                <script>
                function performAction(action) {
                    console.log(`Performing action: ${action}`);
                    // Do something with the selected action
                    document.getElementById('user-menu').classList.add('hidden');
                }
                </script>

                <!-- End dropdown -->

            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 pt-2 pb-3 hidden">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                aria-current="page">Role: {{ Auth::user()->role }}</a>

            <a href="#"
                class="text-gray-300 hover:bg-birumuda hover:text-white block rounded-md px-3 py-2 text-base font-medium">Dashboard</a>

            <a href="#"
                class="text-gray-300 hover:bg-birumuda hover:text-white block rounded-md px-3 py-2 text-base font-medium">Report</a>

            <a href="#"
                class="text-gray-300 hover:bg-birumuda hover:text-white block rounded-md px-3 py-2 text-base font-medium">Approve</a>
        </div>
    </div>
</nav>

<!--##########################################################################-->


<!--Hero-->
<!--##########################################################################-->
<div class="py-32">
    <div class=" container mx-auto flex flex-wrap flex-col md:flex-row items-center pl-24">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
            <p class="uppercase tracking-loose w-full">Pelaporan Pengaduan Masyarakat</p>
            <h1 class="my-4 text-6xl font-bold leading-tight">
                Report Now
            </h1>
            <p class="leading-normal text-2xl">
                Pemimpin yang baik dan bijaksana adalah yang mampu merealisasikan aspirasi masyarakatnya
            </p>
        </div>
        <!--Right Col-->
        <div class=" w-full md:w-3/5 py-6 text-center">
            <img class="w-full md:w-4/5 z-50" src="{{url('images/animate_chat.gif')}}" />
        </div>
    </div>
</div>
<div class="relative -mt-12 lg:-mt-24">
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <path
                    d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                    opacity="0.100000001"></path>
                <path
                    d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                    opacity="0.100000001"></path>
                <path
                    d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                    id="Path-4" opacity="0.200000003"></path>
            </g>
            <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <path
                    d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                </path>
            </g>
        </g>
    </svg>
</div>
<!--##########################################################################-->
<!-- END OF HERO -->

@yield('contain')