<section id="Kategorikategori">

    <div x-data="{
        layoutModeToggle: $persist(true),
        filterToggle: $persist(true),
        open: false
    }">

        <?php $layoutMode = $_GET['layoutMode'] ?? 'table'; ?>

        <div class="bg-white dark:bg-slate-900 mb-6">

            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 pb-6 border-b border-gray-100 dark:border-slate-800">

                <div class="flex items-center gap-4 min-w-0">

                    <div class="hidden sm:flex w-13 h-13 rounded-2xl bg-primary items-center justify-center shrink-0">
                        <i class="bx bx-book-bookmark text-2xl text-secondary"></i>
                    </div>

                    <div class="min-w-0">

                        <div class="flex items-center gap-3 flex-wrap">

                            <a
                                href="?route=menu"
                                class="text-2xl font-black text-slate-900 dark:text-white hover:text-primary transition-colors"
                            >
                                Kelola Menu
                            </a>

                            <div class="w-1 h-1 rounded-full bg-gray-300"></div>

                            <span class="text-sm font-bold text-primary">
                                Kategori
                            </span>

                            <span class="text-sm font-bold text-gray-400">
                                (0)
                            </span>

                        </div>

                        <p class="text-sm text-gray-500 font-medium mt-1">
                            Kelola kategori menu cafe dengan mudah.
                        </p>

                    </div>

                </div>

                <div class="flex items-center gap-2 w-full lg:w-auto">

                    <button
                        type="button"
                        @click="open = true"
                        class="flex-1 flex items-center justify-center bg-primary text-white font-black px-5 py-3 gap-2 rounded-xl cursor-pointer whitespace-nowrap shadow-sm hover:opacity-90 transition"
                    >
                        <i class="bx bx-plus text-lg"></i>
                        <span>Tambah Kategori</span>
                    </button>

                </div>

            </div>

            <div class="pt-6">

                <div class="flex items-center justify-between mb-4">

                    <div>
                        <h2 class="text-sm font-black text-slate-800 dark:text-white">
                            Ringkasan Kategori
                        </h2>

                        <p class="text-xs text-gray-400 font-medium mt-0.5">
                            Informasi kategori menu saat ini
                        </p>
                    </div>

                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">

                    <div class="dark:bg-slate-800/60 border border-gray-200/80 dark:border-slate-700 rounded-2xl p-5">

                        <div class="flex items-center justify-between gap-4">

                            <div>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wide">
                                    Total Kategori
                                </p>

                                <h3 class="text-2xl font-black text-gray-900 dark:text-white mt-1">
                                    0
                                </h3>

                                <p class="text-xs text-gray-400 mt-1">
                                    Kategori tersedia
                                </p>
                            </div>

                            <div class="w-11 h-11 rounded-xl bg-primary flex items-center justify-center shrink-0">
                                <i class="bx bx-book-bookmark text-xl text-secondary"></i>
                            </div>

                        </div>

                    </div>

                    <div class="dark:bg-slate-800/60 border border-gray-200/80 dark:border-slate-700 rounded-2xl p-5">

                        <div class="flex items-center justify-between gap-4">

                            <div>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wide">
                                    Menu Aktif
                                </p>

                                <h3 class="text-2xl font-black text-gray-900 dark:text-white mt-1">
                                    0
                                </h3>

                                <p class="text-xs text-gray-400 mt-1">
                                    Kategori sedang digunakan
                                </p>
                            </div>

                            <div class="w-11 h-11 rounded-xl bg-primary flex items-center justify-center shrink-0">
                                <i class="bx bx-check-circle text-xl text-secondary"></i>
                            </div>

                        </div>

                    </div>

                    <div class="col-span-full xl:col-span-1 dark:bg-slate-800/60 border border-gray-200/80 dark:border-slate-700 rounded-2xl p-5">

                        <div class="flex items-center justify-between gap-4">

                            <div>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wide">
                                    Status Sistem
                                </p>

                                <h3 class="text-2xl font-black text-gray-900 dark:text-white mt-1">
                                    Aktif
                                </h3>

                                <p class="text-xs text-gray-400 mt-1">
                                    Sistem kategori siap digunakan
                                </p>
                            </div>

                            <div class="w-11 h-11 rounded-xl bg-primary flex items-center justify-center shrink-0">
                                <i class="bx bx-check-circle text-xl text-secondary"></i>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="pt-6">

                <div class="flex items-center gap-3">

                    <div class="relative flex-1 min-w-0">

                        <form action="" method="GET">

                            <div class="relative flex items-center gap-3 p-1.5 rounded-xl border-2 border-gray-200/80 dark:border-slate-700 bg-white dark:bg-slate-800 focus-within:border-primary transition-all min-h-[48px]">

                                <div class="flex items-center text-gray-400 pl-2 shrink-0">
                                    <i class="bx bx-search text-lg"></i>
                                </div>

                                <input
                                    name="search"
                                    type="search"
                                    id="search-dropdown"
                                    oninput="doLiveSearch(this.value)"
                                    class="flex-1 px-1 py-1 bg-transparent text-slate-900 dark:text-slate-100 text-sm placeholder:text-gray-400 focus:outline-none font-medium min-w-0"
                                    placeholder="Cari kategori..."
                                >

                            </div>

                        </form>

                    </div>

                    <div class="flex items-center gap-2 shrink-0">

                        <div class="inline-flex items-center gap-1.5 px-2 h-12 border border-gray-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800">

                            <div class="inline-flex items-center gap-1.5 px-2 h-8 border border-gray-200 dark:border-slate-700 rounded-full bg-slate-50/50 dark:bg-slate-900 select-none">

                                <a
                                    href="?route=menu/kategori&layoutMode=table"
                                    class="<?= $layoutMode == 'table' ? 'text-primary' : 'text-gray-400' ?> transition-colors"
                                >
                                    <i class="bx bxs-rows"></i>
                                </a>

                                <a
                                    href="?route=menu/kategori&layoutMode=grid"
                                    class="<?= $layoutMode == 'grid' ? 'text-primary' : 'text-gray-400' ?> transition-colors"
                                >
                                    <i class="bx bxs-grid"></i>
                                </a>

                            </div>

                        </div>

                        <button
                            id="btn-hexagon"
                            type="button"
                            class="relative inline-flex items-center justify-center h-12 w-12 rounded-xl border-2 border-gray-200/80 dark:border-slate-700 hover:border-primary bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 hover:text-primary transition-all shrink-0 cursor-pointer group"
                        >
                            <i class="bx bx-hexagon text-2xl text-gray-400 group-hover:text-primary transition-colors"></i>

                            <span class="absolute -top-1.5 -right-1.5 flex h-4 w-4 items-center justify-center rounded-full bg-primary text-[9px] font-black text-secondary">
                                0
                            </span>
                        </button>

                    </div>

                </div>

            </div>

        </div>

        <div class="my-6 bg-white dark:bg-slate-950">

            <div class="overflow-y-scroll p-1 max-h-[700px]">

                <?php if ($layoutMode == 'table'): ?>

                    <div class="overflow-hidden">

                        <table id="selection-table" class="w-full text-sm">

                            <thead>

                                <tr class="dark:bg-slate-900 text-gray-400 border-b border-gray-200 dark:border-slate-800">

                                    <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">
                                        #
                                    </th>

                                    <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">
                                        Nama Kategori
                                    </th>

                                    <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">
                                        Status
                                    </th>

                                    <th class="text-center font-medium px-5 py-4">
                                        Aksi
                                    </th>

                                </tr>

                            </thead>

                            <tbody id="body-tabel-kategori">

                                <tr>

                                    <td colspan="4">

                                        <div class="w-full flex flex-col justify-center items-center gap-y-3 p-20 text-gray-500/50">

                                            <i class="bx bx-book-bookmark text-7xl"></i>

                                            <h1 class="font-black">
                                                Data Kosong
                                            </h1>

                                            <p class="text-sm font-medium text-gray-400">
                                                Belum ada kategori yang tersedia.
                                            </p>

                                        </div>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                <?php elseif ($layoutMode == 'grid'): ?>

                    <div id="grid-kategori" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

                        <div class="col-span-full w-full flex flex-col justify-center items-center gap-y-3 p-20 text-slate-400 dark:text-slate-600">

                            <i class="bx bx-book-bookmark text-7xl font-light"></i>

                            <h1 class="font-bold text-base text-slate-400 dark:text-slate-500">
                                Data Kosong
                            </h1>

                            <p class="text-sm font-medium text-slate-400">
                                Belum ada kategori yang tersedia.
                            </p>

                        </div>

                    </div>

                <?php endif; ?>

            </div>

            <div class="w-full flex justify-center mt-6">

                <nav aria-label="Pagination">

                    <ul class="w-fit flex bg-white dark:bg-slate-900 text-sm p-2 px-4 gap-2 rounded-full">

                        <li>
                            <a
                                href="?page=1"
                                class="flex items-center justify-center rounded-full px-4 h-10 font-medium opacity-50 cursor-not-allowed pointer-events-none"
                            >
                                Previous
                            </a>
                        </li>

                        <li>
                            <a
                                href="?page=1"
                                class="flex items-center justify-center w-10 h-10 rounded-full bg-primary text-secondary font-bold"
                            >
                                1
                            </a>
                        </li>

                        <li>
                            <a
                                href="?page=1"
                                class="flex items-center justify-center rounded-full px-4 h-10 font-medium opacity-50 cursor-not-allowed pointer-events-none"
                            >
                                Next
                            </a>
                        </li>

                    </ul>

                </nav>

            </div>

        </div>

        <div x-init="$watch('open', value => document.body.classList.toggle('overflow-hidden', value))">

            <div
                x-show="open"
                x-cloak
                @keydown.escape.window="open = false"
                class="fixed inset-0 z-999 flex justify-center items-center w-full p-4 overflow-y-auto"
            >

                <div
                    x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 bg-slate-950/60 backdrop-blur-[2px]"
                    @click="open = false"
                ></div>

                <div
                    x-show="open"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                    x-transition:leave-end="opacity-0 scale-95 translate-y-2"
                    class="relative p-4 w-full max-w-4xl max-h-full z-10 my-auto"
                >

                    <div class="relative bg-white border border-gray-200 rounded-xl shadow-sm p-4 md:p-6 md:px-12">

                        <div class="my-8 flex justify-between items-center">

                            <div class="flex items-center gap-4">

                                <div class="hidden w-13 h-13 rounded-2xl bg-primary lg:flex items-center justify-center shrink-0 shadow-sm">
                                    <i class="bx bx-bookmark-plus text-2xl text-secondary"></i>
                                </div>

                                <div>

                                    <h1 class="text-black font-black text-2xl">
                                        Tambah Kategori
                                    </h1>

                                    <p class="text-sm text-gray-500 font-medium mt-1">
                                        Kelola kategori menu cafe.
                                    </p>

                                </div>

                            </div>

                            <button
                                type="button"
                                @click="open = false"
                                class="flex items-center justify-center w-11 h-11 rounded-full bg-primary text-secondary font-black cursor-pointer hover:bg-blue-700 transition"
                            >
                                <span>X</span>
                            </button>

                        </div>

                        <form action="" method="POST" class="w-full my-4">

                            <div class="grid grid-cols-1 gap-5">

                                <div class="flex flex-col gap-1.5 w-full">

                                    <label
                                        for="namaKategori"
                                        class="text-xs font-bold uppercase tracking-wide text-gray-600 ml-1"
                                    >
                                        Nama Kategori
                                        <span class="text-red-500">*</span>
                                    </label>

                                    <div class="relative flex items-center w-full group">

                                        <div class="absolute left-3.5 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors duration-200">
                                            <i class="bx bx-bookmark text-xl"></i>
                                        </div>

                                        <input
                                            type="text"
                                            name="namaKategori"
                                            id="namaKategori"
                                            placeholder="Contoh: Makanan"
                                            autocomplete="off"
                                            class="w-full pl-11 pr-4 py-3 bg-white text-slate-900 text-sm font-medium rounded-2xl border-2 border-gray-200/80 focus:outline-none focus:border-primary"
                                            required
                                        >

                                    </div>

                                </div>

                            </div>

                            <div class="w-full flex justify-end my-6 pt-4 border-t border-gray-100 gap-3">

                                <button
                                    type="button"
                                    @click="open = false"
                                    class="flex items-center justify-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold px-6 py-3 gap-2 rounded-2xl cursor-pointer transition-all active:scale-95"
                                >
                                    <span>Batal</span>
                                </button>

                                <button
                                    type="submit"
                                    class="flex items-center justify-center bg-primary hover:bg-primary/90 text-secondary font-black px-6 py-3 gap-2 rounded-2xl cursor-pointer transition-all active:scale-95"
                                >
                                    <i class="bx bx-save text-lg"></i>
                                    <span>Simpan Kategori</span>
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>