<section id="SideBar" x-data="{ sidebarOpen: $persist(false), dashboardOpen: $persist(false), dashboardOpen2: $persist(false), dashboardOpen3: $persist(false) }">
    <aside
    id="MainBodySideBar"
    class="bg-white border-e border-gray-200/80 sticky top-0 left-0 h-screen overflow-hidden transition-all duration-500
        ease-[cubic-bezier(.22,1,.36,1)] max-lg:-translate-x-full max-lg:w-0 lg:translate-x-0"
    :class="sidebarOpen ? 'lg:w-72' : 'lg:w-24'">
        <div class="flex flex-col h-full px-5 overflow-y-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
            <div @click="sidebarOpen = !sidebarOpen;
            if (!sidebarOpen) {
                dashboardOpen = false;
            }"
            class="sticky top-0 w-full bg-white group px-2 py-6 flex justify-start items-center cursor-pointer transition-all duration-300 z-[999]">
            <svg class="group-hover:hidden fill-primary w-9 h-9 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 600"> 
                <defs> 
                    <clipPath id="element_clip"> 
                        <rect width="500" height="600" x="0" y="0"></rect> 
                    </clipPath> 
                </defs> 
                <g clip-path="url(#element_clip)"> 
                    <g transform="matrix(-1.4576, 0, 0, 1.4576, 265.367, 317.039)"> 
                        <path fill="fill-primary" d="M124.872,-2.098 C121.933,-31.071 121.463,-58.981 113.863,-83.37 C81.313,-222.739 -107.797,-222.6 -145.633,-84.076 C-201.448,150.349 133.689,84.831 124.872,-2.098z"></path> 
                        <path fill="fill-primary" d="M-9.994,160.678 C7.798,54.302 -74.528,-129.561 -145.633,-84.076 C-151.149,-63.764 -172.644,34.713 -119.418,131.246 C-95.27,175.043 -27.933,217.214 -9.994,160.678z"></path> 
                        <path fill="fill-primary" d="M-9.994,160.677 C51.057,211.092 133.831,189.493 94.958,103.345 C94.958,103.345 29.176,-50.213 -20.944,-22.834 C-74.722,6.544 -64.237,96.151 -9.994,160.677z"></path> 
                        <path fill="fill-primary" d="M100.242,105.752 C100.242,105.757 100.242,105.736 100.242,105.736 C156.154,126.169 161.723,86.208 149.883,66.353 C112.421,3.534 128.201,-32.828 113.863,-83.37 C81.313,-222.739 -15.528,40.717 100.242,105.752z"></path> 
                    </g> 
                    <g transform="matrix(1.4576, 0, 0, 1.4576, 281.292, 263.3)"> 
                        <path fill="#fff" d="M-18.456,-0.001 C-18.456,11.057 -16.138,29.607 -0.615,29.607 C-0.615,29.607 -0.612,29.607 -0.612,29.607 C11.327,29.607 18.456,18.54 18.456,-0.001 C18.456,-9.814 16.48,-17.707 12.741,-22.831 C9.459,-27.328 4.807,-29.607 -0.615,-29.607 C-6.037,-29.607 -10.3,-27.363 -13.28,-22.94 C-16.667,-17.913 -18.456,-9.98 -18.456,-0.001z"></path> 
                    </g> 
                    <g transform="matrix(1.4576, 0, 0, 1.4576, 347.189, 263.3)"> 
                        <path fill="#fff" d="M-18.456,-0.001 C-18.456,11.057 -16.138,29.607 -0.615,29.607 C-0.615,29.607 -0.612,29.607 -0.612,29.607 C11.327,29.607 18.456,18.54 18.456,-0.001 C18.456,-9.814 16.48,-17.707 12.741,-22.831 C9.459,-27.328 4.807,-29.607 -0.615,-29.607 C-6.037,-29.607 -10.3,-27.363 -13.28,-22.94 C-16.667,-17.913 -18.456,-9.98 -18.456,-0.001z"></path> 
                    </g> 
                </g> 
            </svg>
            <div class="hidden group-hover:flex items-center">
                <i class="bx bx-dock-left text-xl"></i>
            </div>    
                <div x-show="sidebarOpen" x-transition class="font-black ms-3">Kedai<span class="text-primary">Ku</span></div>
            </div>
            <ul class="flex flex-col w-full flex-1 my-5">
                <div class="w-full">            
                    <div x-show="sidebarOpen" x-transition class="px-4 mb-2 text-[11px] font-bold uppercase tracking-wider text-gray-400">
                        Menu Utama
                    </div>

                    <li>
                        <a href="?route=dashboard" class="gap-3 <?= $route === 'dashboard'
                                ? 'flex items-center bg-primary text-secondary px-4 py-4 rounded-2xl' : 'flex items-center text-slate-800 px-4 py-4 rounded-2xl hover:bg-black/5 duration-300 transition-all ease-in-out' ?>">
                            <i class="bx bx-grid text-2xl shrink-0"></i>
                            <span x-show="sidebarOpen" x-transition class="font-semibold whitespace-nowrap">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <li>
                        <button
                            type="button"
                            @click="dashboardOpen = !dashboardOpen"
                            class="w-full justify-between <?= $route === 'menu' || $route === 'menu/kategori' || $route === 'menu/aktivirtas'
                                ? 'flex items-center bg-primary text-secondary px-4 py-4 rounded-2xl' : 'flex items-center text-slate-800 px-4 py-4 rounded-2xl hover:bg-black/5 duration-300 transition-all ease-in-out' ?>">

                            <div class="flex items-center gap-3">
                                <i class="bx bx-dish text-2xl shrink-0"></i>
                                <span x-show="sidebarOpen" x-transition
                                    class="font-semibold whitespace-nowrap">
                                    Kelola Menu
                                </span>
                            </div>

                            <i x-show="sidebarOpen" x-transition class="bx bx-chevron-down text-xl transition-transform duration-300"
                            :class="dashboardOpen ? 'rotate-180' : ''"></i>
                        </button>

                        <div class="grid transition-all duration-300 ease-out"
                            :class="dashboardOpen && sidebarOpen ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">

                            <div class="overflow-hidden">
                                <div class="ml-5 mt-2 pl-4 border-l-2 border-gray-100 space-y-1">
                                    <a href="?route=menu" class="<?= $route === 'menu'
                                        ? 'flex items-center gap-x-3 font-medium text-primary px-4 py-4 rounded-2xl' : 'flex items-center gap-3 px-4 py-3 rounded-lg text-slate-800 hover:bg-black/5 transition-all' ?>">
                                        <i class="bx bx-bowl-hot text-lg shrink-0"></i>
                                        <span x-show="sidebarOpen" x-transition class="whitespace-nowrap">
                                            Data Menu
                                        </span>
                                    </a>
                                    <a href="?route=menu/kategori" class="<?= $route === 'menu/kategori'
                                        ? 'flex items-center gap-x-3 font-medium text-primary px-4 py-4 rounded-2xl' : 'flex items-center gap-3 px-4 py-3 rounded-lg text-slate-800 hover:bg-black/5 transition-all' ?>">
                                        <i class="bx bx-book-bookmark text-lg shrink-0"></i>
                                        <span x-show="sidebarOpen" x-transition class="whitespace-nowrap">
                                            Data Kategori
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="?route=transaksi" class="gap-3 <?= $route === 'transaksi'
                                ? 'flex items-center bg-primary text-secondary px-4 py-4 rounded-2xl' : 'flex items-center text-slate-800 px-4 py-4 rounded-2xl hover:bg-black/5 duration-300 transition-all ease-in-out' ?>">
                            <i class="bx bx-wallet text-2xl shrink-0"></i>
                            <span x-show="sidebarOpen" x-transition class="font-semibold whitespace-nowrap">
                                Metode Transaksi
                            </span>
                        </a>
                    </li>
                    <div class="w-full h-0.5 bg-gray-200/50 my-6 px-3"></div>
                        <li class="mb-6">
                                
                            <a href="?route=kasir" class="text-primary gap-3 <?= $route === 'kasir'
                                    ? 'flex items-center bg-primary text-secondary px-4 py-4 rounded-2xl' : 'flex items-center bg-primary/10  text-primary px-4 py-4 rounded-2xl hover:bg-black/5 duration-300 transition-all ease-in-out' ?>">
                                <div class="relative shrink-0">
                                    <i class="bx bx-cart text-xl"></i>
                                </div>
                                <span x-show="sidebarOpen" x-transition  class="font-semibold whitespace-nowrap">
                                    Kasir | POS
                                </span>
                            </a>

                        </li>
                    <div class="w-full h-0.5 bg-gray-200/50 my-6 px-3"></div>
                </div>

                <div class="w-full">
                    <div x-show="sidebarOpen" x-transition class="px-4 mb-2 text-[11px] font-bold uppercase tracking-wider text-gray-400">
                        Manajemen
                    </div>

                    <li>
                        <button
                            type="button"
                            @click="dashboardOpen3 = !dashboardOpen3"
                            class="w-full justify-between <?= $route === 'pengguna' || $route === 'karyawan' || $route === 'hak/akses'
                                ? 'flex items-center bg-primary text-secondary px-4 py-4 rounded-2xl' : 'flex items-center text-slate-800 px-4 py-4 rounded-2xl hover:bg-black/5 duration-300 transition-all ease-in-out' ?>">

                            <div class="flex items-center gap-3">
                                <i class="bx bx-group text-2xl shrink-0"></i>
                                <span x-show="sidebarOpen" x-transition
                                    class="font-semibold whitespace-nowrap">
                                    Pengguna
                                </span>
                            </div>

                            <i x-show="sidebarOpen" x-transition class="bx bx-chevron-down text-xl transition-transform duration-300"
                            :class="dashboardOpen3 ? 'rotate-180' : ''"></i>
                        </button>

                        <div class="grid transition-all duration-300 ease-out"
                            :class="dashboardOpen3 && sidebarOpen ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">

                            <div class="overflow-hidden">
                                <div class="ml-5 mt-2 pl-4 border-l-2 border-gray-100 space-y-1">
                                    <a href="?route=pelanggan" class="<?= $route === 'pelanggan'
                                        ? 'flex items-center gap-x-3 font-medium text-primary px-4 py-4 rounded-2xl' : 'flex items-center gap-3 px-4 py-3 rounded-lg text-slate-800 hover:bg-black/5 transition-all' ?>">
                                        <i class="bx bx-user text-lg shrink-0"></i>
                                        <span x-show="sidebarOpen" x-transition class="whitespace-nowrap">
                                            Data Pelanggan
                                        </span>
                                    </a>
                                    <a href="?route=karyawan" class="<?= $route === 'karyawan'
                                        ? 'flex items-center gap-x-3 font-medium text-primary px-4 py-4 rounded-2xl' : 'flex items-center gap-3 px-4 py-3 rounded-lg text-slate-800 hover:bg-black/5 transition-all' ?>">
                                        <i class="bx bx-user-id-card text-lg shrink-0"></i>
                                        <span x-show="sidebarOpen" x-transition class="whitespace-nowrap">
                                            Data Karyawan
                                        </span>
                                    </a>
                                    <a href="?route=hak/akses" class="<?= $route === 'hak/akses'
                                        ? 'flex items-center gap-x-3 font-medium text-primary px-4 py-4 rounded-2xl' : 'flex items-center gap-3 px-4 py-3 rounded-lg text-slate-800 hover:bg-black/5 transition-all' ?>">
                                        <i class="bx bx-shield text-lg shrink-0"></i>
                                        <span x-show="sidebarOpen" x-transition class="whitespace-nowrap">
                                            Hak Akses | Role
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="?route=laporan" class="gap-3 <?= $route === 'laporan'
                                ? 'flex items-center bg-primary text-secondary px-4 py-4 rounded-2xl' : 'flex items-center text-slate-800 px-4 py-4 rounded-2xl hover:bg-black/5 duration-300 transition-all ease-in-out' ?>">
                            <div class="relative shrink-0">
                                <i class="bx bx-archive text-xl"></i>
                            </div>
                            <span x-show="sidebarOpen" x-transition class="font-semibold whitespace-nowrap">
                                Laporan
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="?route=pengaturan" class="gap-3 <?= $route === 'pengaturan'
                                ? 'flex items-center bg-primary text-secondary px-4 py-4 rounded-2xl' : 'flex items-center text-slate-800 px-4 py-4 rounded-2xl hover:bg-black/5 duration-300 transition-all ease-in-out' ?>">
                            <div class="relative shrink-0">
                                <i class="bx bx-hexagon text-xl"></i>
                                <span class="absolute -top-2 -right-1.5 flex h-3.5 w-3.5 items-center justify-center rounded-full bg-primary text-[9px] font-semibold text-secondary">
                                    5
                                </span>
                            </div>
                            <span x-show="sidebarOpen" x-transition  class="font-semibold whitespace-nowrap">
                                Pengaturan
                            </span>
                        </a>
                    </li>
                </div>
                <div class="w-full h-0.5 bg-gray-200/50 my-6 px-3"></div>
            </ul>
            <div class="bg-white sticky bottom-0 py-8">
                <div class="hidden xl:flex items-center space-x-4">
                    <img src="/assets/images/riziq.jpeg" class="w-11 h-11 rounded-full ring-2 ring-primary">
                    <div class="flex flex-col text-left">
                        <span x-show="sidebarOpen" x-transition class="text-[10px] font-black text-primary uppercase tracking-widest leading-none">Super Admin</span>
                        <span x-show="sidebarOpen" x-transition class="text-sm font-black text-slate-900 mt-1.5 leading-none">Achmad Riziq Al Azzim</span>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div id="drawer" class="fixed top-20 left-0 right-0 bg-white dark:bg-neutral-950 shadow-xl lg:hidden translate-y-full transition-all duration-500 h-screen px-6 py-8 ease-[cubic-bezier(.22,1,.36,1)] flex flex-col z-[99999]">

        <div class="flex-1 text-xl font-semibold text-black space-y-2 overflow-y-auto pb-4">    
            <a href="?route=dashboard" class="drawer-item group flex items-center justify-between w-full text-left py-4 px-6 text-xl font-semibold text-gray-900 hover:text-secondary hover:bg-primary dark:hover:bg-blue-600/15 dark:text-gray-200 rounded-2xl opacity-0 -translate-x-10 scale-95 transition-all duration-300">
                <div class="flex items-center gap-4">
                    <i class='bx bx-dashboard-alt text-2xl'></i>
                    <span>Dashboard</span>
                </div>
                <i class='bx bx-chevron-right text-2xl opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all duration-300'></i>
            </a>

            <a href="?route=barang" class="drawer-item group flex items-center justify-between w-full text-left py-4 px-6 text-xl font-semibold text-gray-900 hover:text-secondary hover:bg-primary dark:hover:bg-blue-600/15 dark:text-gray-200 rounded-2xl opacity-0 -translate-x-10 scale-95 transition-all duration-300">
                <div class="flex items-center gap-4">
                    <i class='bx bx-box text-2xl'></i>
                    <span>Kelola Menu</span>
                </div>
                <i class='bx bx-chevron-right text-2xl opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all duration-300'></i>
            </a>

            <a href="?route=user" class="drawer-item group flex items-center justify-between w-full text-left py-4 px-6 text-xl font-semibold text-gray-900 hover:text-secondary hover:bg-primary dark:hover:bg-blue-600/15 dark:text-gray-200 rounded-2xl opacity-0 -translate-x-10 scale-95 transition-all duration-300">
                <div class="flex items-center gap-4">
                    <i class='bx bx-group text-2xl'></i>
                    <span>Pengguna</span>
                </div>
                <i class='bx bx-chevron-right text-2xl opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all duration-300'></i>
            </a>

            <div class="w-full h-0.5 bg-gray-100 dark:bg-neutral-900 my-4 drawer-item opacity-0"></div>

            <a href="?route=kasir" class="drawer-item group flex items-center justify-between w-full text-left py-4 px-6 text-xl font-semibold text-gray-900 hover:text-secondary hover:bg-primary dark:hover:bg-blue-600/15 dark:text-gray-200 rounded-2xl opacity-0 -translate-x-10 scale-95 transition-all duration-300">
                <div class="flex items-center gap-4">
                    <i class='bx bx-basket text-2xl'></i>
                    <span>Kasir | POS</span>
                </div>
                <i class='bx bx-chevron-right text-2xl opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all duration-300'></i>
            </a>

            <a href="?route=laporan" class="drawer-item group flex items-center justify-between w-full text-left py-4 px-6 text-xl font-semibold text-gray-900 hover:text-secondary hover:bg-primary dark:hover:bg-blue-600/15 dark:text-gray-200 rounded-2xl opacity-0 -translate-x-10 scale-95 transition-all duration-300">
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <i class='bx bx-file-report text-2xl'></i>
                        <span class="absolute -top-1 -right-1 flex h-4 w-4 items-center justify-center rounded-full bg-blue-600 text-[10px] font-semibold text-secondary">1</span>
                    </div>
                    <span>Laporan</span>
                </div>
                <i class='bx bx-chevron-right text-2xl opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all duration-300'></i>
            </a>

            <a href="?route=settings" class="drawer-item group flex items-center justify-between w-full text-left py-4 px-6 text-xl font-semibold text-gray-900 hover:text-secondary hover:bg-primary dark:hover:bg-blue-600/15 dark:text-gray-200 rounded-2xl opacity-0 -translate-x-10 scale-95 transition-all duration-300">
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <i class='bx bx-hexagon text-2xl'></i>
                        <span class="absolute -top-1 -right-1 flex h-4 w-4 items-center justify-center rounded-full bg-blue-600 text-[10px] font-semibold text-secondary">5</span>
                    </div>
                    <span>Pengaturan</span>
                </div>
                <i class='bx bx-chevron-right text-2xl opacity-0 translate-x-0 group-hover:opacity-100 group-hover:translate-x-2 transition-all duration-300'></i>
            </a>
        </div>

        <div class="drawer-bottom mt-auto border-t border-gray-200 dark:border-neutral-900 pt-6 pb-20">
            <a href="logout.php" class="group relative flex items-center justify-center gap-3 w-full px-7 py-4 bg-primary text-secondary font-semibold rounded-2xl overflow-hidden transition-all duration-300 hover:bg-red-600 active:scale-[0.98] shadow-md">
                <span>Keluar</span>
                <i class="bx bx-menu text-2xl transition-transform duration-300 group-hover:translate-x-1"></i>
            </a>
        </div>
    </div>
</section>