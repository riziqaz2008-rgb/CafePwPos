<div class="flex flex-col md:flex-row justify-between gap-5">
    <div class="flex gap-x-5 min-w-0">
        <div class="w-13 h-13 rounded-2xl bg-primary border border-indigo-100/80 flex items-center justify-center shrink-0">
            <i class="bx bx-grid text-2xl text-secondary"></i>
        </div>
        <div>
            <div class="flex items-center gap-x-3">
            <h1 class="text-black font-black text-2xl">
                Dashboard
            </h1>
        </div>
        <p class="text-sm text-gray-500 font-medium mt-1.5">
            Kelola pesanan, proses pembayaran, dan cetak struk transaksi.
        </p>
        </div>
    </div>
    <div class="flex flex-row gap-x-3 shrink-0 mt-6 mb-10">
        <a href="?route=laporan"
            id="btnOpenImport"
            type="button"
            data-drawer-target="drawer-bottom-example1"
            data-drawer-show="drawer-bottom-example1"
            data-drawer-placement="bottom"
            aria-controls="drawer-bottom-example1"
            class="w-full h-fit md:w-auto flex items-center justify-center bg-primary text-secondary font-black px-6 py-3 gap-2 rounded-2xl cursor-pointer hover:opacity-90 transition-opacity">
            <i class="bx bx-archive text-lg"></i>
            <span>Laporan</span>
        </a>
    </div>
</div>
<div class="w-full bg-white rounded-2xl border border-gray-200/80 overflow-hidden relative transition-all duration-200">
    <div class="px-7 py-8 md:px-10 md:py-10 flex flex-col lg:flex-row items-center justify-between gap-8">
        <div class="order-2 lg:order-1 flex-1">
            <p class="text-sm font-bold text-primary mb-2">
                Selamat Datang 👋
            </p>
            <h2 class="text-3xl md:text-4xl font-black text-gray-900 leading-tight">
                Selamat datang,
                <span class="text-primary">
                    Super Admin!
                </span>
            </h2>
            <p class="text-sm md:text-base text-gray-400 mt-3 max-w-2xl leading-relaxed">
                Kelola menu, pantau transaksi, dan lihat perkembangan 
                penjualan kedai Anda melalui dashboard KedaiKu.
            </p>
            <div class="flex flex-wrap items-center gap-3 mt-6">
                <a href="?route=kasir" class="inline-flex items-center gap-2 bg-primary text-secondary  px-5 py-3 rounded-2xl text-sm font-bold  hover:bg-primary/90 active:scale-95 transition-all duration-200">
                    <i class="bx bx-cart-alt text-lg"></i>
                    <span>
                        Buka Kasir
                    </span>
                </a>
                <a href="?route=menu" class="inline-flex items-center gap-2 bg-gray-50 text-gray-700 border border-gray-100 px-5 py-3 rounded-2xl text-sm font-bold h3ver:bg-gray-100 active2sc/80ale-95 transition-all duration-200">
                    <i class="bx bx-bowl-hot text-lg"></i>
                    <span>
                        Kelola Menu
                    </span>
                </a>
            </div>
        </div>
        <div class="order-1 lg:order-2 w-full lg:w-auto flex justify-center lg:justify-end">
            <div class="relative w-20 h-20 rounded-2xl bg-primary text-secondary flex items-center justify-center">
                <i class="bx bx-store-alt text-5xl"></i>
            </div>
        </div>
    </div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6 my-8">
    <div class="bg-white p-6 rounded-2xl border border-gray-200/80 flex items-center justify-between">
        <div>
            <p class="text-sm font-semibold text-gray-700 mb-2">Total Pemasukan</p>
            <h2 class="text-3xl font-black text-gray-900 mb-1">1.280.320</h2>
            <p class="text-[11px] text-gray-400 mt-2">
                Pemasukan Harian
            </p>
        </div>
        <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center text-secondary">
            <i class="bx bx-chart-sine text-2xl"></i>
        </div>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-gray-200/80 flex items-center justify-between">
        <div>
            <p class="text-sm font-semibold text-gray-700 mb-2">Total Menu</p>
            <h2 class="text-3xl font-black text-gray-900 mb-1">128</h2>
        </div>
        <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center text-secondary">
            <i class="bx bx-bowl-hot text-2xl"></i>
        </div>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-gray-200/80 flex items-center justify-between">
        <div>
            <p class="text-sm font-semibold text-gray-700 mb-2">Transaksi Hari Ini</p>
            <h2 class="text-3xl font-black text-gray-900 mb-1">42</h2>
            <p class="text-[11px] text-gray-400 mt-2">
                Menu tersedia
            </p>
        </div>
        <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center text-secondary">
            <i class="bx bx-cart-check text-2xl"></i>
        </div>
    </div>
    
</div>
