<section id="MetodeTransaksi">

    <div
        x-data="{
            layoutModeToggle: $persist(true),
            filterToggle: $persist(true),
            TambahMetode: false,
            FilterMetode: false
        }"
    >

        <div class="bg-white dark:bg-slate-900 mb-6">

            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-5 pb-6 border-b border-gray-100 dark:border-slate-800">

                <div class="flex items-center gap-4 min-w-0">

                    <div class="hidden sm:flex w-13 h-13 rounded-2xl bg-primary border border-indigo-100/80 items-center justify-center shrink-0 shadow-sm">
                        <i class="bx bx-credit-card text-2xl text-white"></i>
                    </div>

                    <div class="min-w-0">

                        <div class="flex items-center gap-3 flex-wrap">

                            <h1 class="text-black dark:text-white font-black text-2xl">
                                Metode Transaksi
                            </h1>

                            <span class="text-sm font-bold text-gray-600 dark:text-gray-400">
                                ( 0 )
                            </span>

                        </div>

                        <p class="text-sm text-gray-500 font-medium mt-1">
                            Kelola metode pembayaran yang tersedia pada transaksi cafe.
                        </p>

                    </div>

                </div>


                <button
                    type="button"
                    @click="TambahMetode = true"
                    class="w-full lg:w-auto flex items-center justify-center bg-primary text-white font-black px-5 py-3 gap-2 rounded-xl cursor-pointer shadow-sm hover:opacity-90 active:scale-95 transition-all duration-200"
                >
                    <i class="bx bx-plus text-lg"></i>
                    <span>Tambah Metode</span>
                </button>

            </div>

        </div>


        <div class="bg-white dark:bg-slate-900 border border-gray-200/80 dark:border-slate-700 rounded-2xl overflow-hidden mb-7">

            <div class="p-5 sm:p-6">

                <div class="flex items-center justify-between gap-4 mb-5">

                    <div>

                        <div class="flex items-center gap-2">

                            <div class="w-1.5 h-5 rounded-full bg-primary"></div>

                            <p class="text-sm font-black text-slate-800 dark:text-white">
                                Ringkasan Metode
                            </p>

                        </div>

                        <p class="text-xs text-gray-400 font-medium mt-1 ml-3.5">
                            Informasi metode pembayaran yang tersedia
                        </p>

                    </div>

                    <i class="bx bx-credit-card text-2xl text-gray-200 dark:text-slate-700"></i>

                </div>


                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                    <div class="flex items-center gap-4 p-4 sm:p-5 rounded-2xl dark:bg-slate-800/60 dark:border-slate-700 min-h-[104px]">

                        <div class="flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-primary border border-primary/10 shrink-0">
                            <i class="bx bxs-credit-card text-2xl text-secondary"></i>
                        </div>

                        <div class="min-w-0">

                            <p class="text-[10px] uppercase tracking-wider font-black text-gray-400">
                                Total tersedia
                            </p>

                            <div class="flex items-end gap-2 mt-1 flex-wrap">

                                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white leading-none">
                                    0
                                </h2>

                                <span class="text-xs font-bold text-gray-400 mb-0.5">
                                    metode pembayaran
                                </span>

                            </div>

                        </div>

                    </div>


                    <div class="flex items-center gap-4 p-4 sm:p-5 rounded-2xl dark:bg-slate-800/60 dark:border-slate-700 min-h-[104px]">

                        <div class="flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-primary border border-primary/10 shrink-0">
                            <i class="bx bx-check-circle text-2xl text-secondary"></i>
                        </div>

                        <div class="min-w-0">

                            <p class="text-[10px] uppercase tracking-wider font-black text-gray-400">
                                Metode aktif
                            </p>

                            <div class="flex items-end gap-2 mt-1 flex-wrap">

                                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white leading-none">
                                    0
                                </h2>

                                <span class="text-xs font-bold text-gray-400 mb-0.5">
                                    metode aktif
                                </span>

                            </div>

                        </div>

                    </div>


                    <div class="flex items-center gap-4 p-4 sm:p-5 rounded-2xl dark:bg-slate-800/60 dark:border-slate-700 min-h-[104px]">

                        <div class="flex items-center justify-center w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-primary border border-primary/10 shrink-0">
                            <i class="bx bx-star text-2xl text-secondary"></i>
                        </div>

                        <div class="min-w-0">

                            <p class="text-[10px] uppercase tracking-wider font-black text-gray-400">
                                Metode utama
                            </p>

                            <div class="flex items-end gap-2 mt-1 flex-wrap">

                                <h2 class="text-2xl font-black text-slate-900 dark:text-white leading-none">
                                    -
                                </h2>

                                <span class="text-xs font-bold text-gray-400 mb-0.5">
                                    belum tersedia
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div>

            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 mb-5">

                <div>

                    <div class="flex items-center gap-2">

                        <div class="w-1.5 h-5 rounded-full bg-primary"></div>

                        <h2 class="text-sm font-black text-slate-800 dark:text-white">
                            Daftar Metode Pembayaran
                        </h2>

                    </div>

                    <p class="text-xs text-gray-400 font-medium mt-1 ml-3.5">
                        Metode pembayaran yang dapat digunakan kasir
                    </p>

                </div>


                <div class="flex flex-col sm:flex-row gap-3 w-full lg:w-auto">

                    <div class="relative flex-1 sm:w-80 lg:w-[420px]">

                        <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none">
                            <i class="bx bx-search text-xl text-gray-400"></i>
                        </div>

                        <input
                            type="search"
                            oninput="doLiveSearch(this.value)"
                            placeholder="Cari metode transaksi..."
                            class="w-full h-12 pl-12 pr-4 bg-white dark:bg-slate-800 border-2 border-gray-200/80 dark:border-slate-700 rounded-xl text-sm font-medium text-slate-900 dark:text-white placeholder:text-gray-400 focus:outline-none focus:border-primary transition-all"
                        >

                    </div>


                    <button
                        type="button"
                        @click="FilterMetode = true"
                        class="h-12 flex items-center justify-center gap-2 px-6 rounded-xl text-sm font-bold border border-slate-300 text-slate-700 bg-white dark:bg-slate-800 dark:border-slate-700 dark:text-slate-200 hover:bg-slate-50 transition-all duration-200 shrink-0"
                    >
                        <i class="bx bx-filter text-xl"></i>
                        <span>Filter</span>
                    </button>

                </div>

            </div>


            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">

                <div class="group bg-white dark:bg-slate-900 border border-gray-200/80 dark:border-slate-700 rounded-2xl overflow-hidden hover:ring-1 hover:ring-primary outline-0 hover:border-primary transition-all duration-200">

                    <div class="p-7">

                        <div class="flex items-center justify-between gap-5">

                            <div class="min-w-0">

                                <div class="flex items-center gap-3 flex-wrap">

                                    <h3 class="text-xl font-black text-slate-900 dark:text-white truncate">
                                        QRIS
                                    </h3>

                                    <span class="text-[10px] font-black uppercase tracking-wider px-3 py-1.5 rounded-lg bg-primary text-secondary">
                                        Utama
                                    </span>

                                </div>

                            </div>


                            <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-primary text-secondary text-xs font-black shrink-0">

                                <span class="w-2 h-2 rounded-full bg-secondary"></span>

                                Aktif

                            </span>

                        </div>


                        <div class="mt-5">

                            <p class="text-sm text-gray-400 font-medium leading-relaxed">
                                Pembayaran melalui QRIS
                            </p>

                        </div>


                        <div class="flex items-end justify-between gap-5 mt-7 pt-5 border-t border-gray-100 dark:border-slate-800">

                            <div>

                                <p class="text-[11px] uppercase font-bold tracking-wider text-gray-400">
                                    Penggunaan
                                </p>

                                <p class="text-xl font-black text-slate-800 dark:text-white mt-1">

                                    0

                                    <span class="text-sm font-bold text-gray-400">
                                        transaksi
                                    </span>

                                </p>

                            </div>


                            <div class="flex items-center gap-3">

                                <button
                                    type="button"
                                    class="w-11 h-11 flex items-center justify-center rounded-xl bg-primary text-white hover:opacity-85 active:scale-95 transition"
                                    title="Edit Metode"
                                >
                                    <i class="bx bxs-pencil text-lg"></i>
                                </button>

                                <button
                                    type="button"
                                    class="w-11 h-11 flex items-center justify-center rounded-xl bg-red-500 text-white hover:opacity-85 active:scale-95 transition"
                                    title="Hapus Metode"
                                >
                                    <i class="bx bxs-trash text-lg"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>


        <div
            x-show="TambahMetode"
            x-cloak
            @keydown.escape.window="TambahMetode = false"
            class="fixed inset-0 z-999 flex justify-center items-start sm:items-center w-full p-3 sm:p-4 overflow-y-auto"
        >

            <div
                x-show="TambahMetode"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-slate-950/60 backdrop-blur-[2px]"
                @click="TambahMetode = false"
            ></div>


            <div
                x-show="TambahMetode"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-95 translate-y-2"
                class="relative p-0 sm:p-4 w-full max-w-4xl max-h-full z-10 my-auto"
            >

                <div class="relative bg-white dark:bg-slate-900 border border-gray-200 dark:border-slate-800 rounded-xl shadow-sm p-4 md:p-6 md:px-10 max-h-[calc(100vh-1.5rem)] sm:max-h-[calc(100vh-2rem)] overflow-y-auto">

                    <div class="my-4 sm:my-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">

                        <div class="flex items-center gap-4 min-w-0">

                            <div class="hidden w-13 h-13 rounded-2xl bg-primary border border-indigo-100/80 lg:flex items-center justify-center shrink-0 shadow-sm">
                                <i class="bx bx-credit-card text-2xl text-white"></i>
                            </div>

                            <div class="min-w-0">

                                <div class="flex items-center gap-3 flex-wrap">

                                    <h1 class="text-black dark:text-white font-black text-2xl">
                                        Tambah Metode Pembayaran
                                    </h1>

                                </div>

                                <p class="text-sm text-gray-500 font-medium mt-1">
                                    Tambahkan metode pembayaran baru untuk transaksi cafe.
                                </p>

                            </div>

                        </div>


                        <button
                            type="button"
                            @click="TambahMetode = false"
                            class="flex items-center justify-center w-11 h-11 rounded-full bg-primary text-white font-black cursor-pointer hover:bg-blue-700 transition shrink-0"
                        >
                            <span>X</span>
                        </button>

                    </div>


                    <form action="" method="POST" class="w-full my-4">

                        <div class="flex flex-col gap-5">

                            <div class="flex flex-col gap-1.5 w-full min-w-0">

                                <label
                                    for="namaMetode"
                                    class="text-xs font-bold uppercase tracking-wide text-gray-600 dark:text-gray-400 ml-1"
                                >
                                    Nama Metode <span class="text-red-500">*</span>
                                </label>

                                <div class="relative flex items-center w-full group">

                                    <div class="absolute left-3.5 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors duration-200">
                                        <i class="bx bx-credit-card text-xl"></i>
                                    </div>

                                    <input
                                        type="text"
                                        name="namaMetode"
                                        id="namaMetode"
                                        placeholder="Contoh: QRIS, Cash, Transfer Bank"
                                        autocomplete="off"
                                        class="w-full pl-11 pr-4 py-3 bg-white dark:bg-slate-800 text-slate-900 dark:text-white text-sm font-medium rounded-2xl border-2 border-gray-200/80 dark:border-slate-700 focus:outline-none focus:border-primary transition-all"
                                        required
                                    >

                                </div>

                            </div>


                            <div class="flex flex-col gap-1.5 w-full group min-w-0">

                                <label
                                    for="deskripsiMetode"
                                    class="text-xs font-bold uppercase tracking-wide text-gray-600 dark:text-gray-400 ml-1"
                                >
                                    Deskripsi
                                </label>

                                <div class="relative flex w-full h-full">

                                    <div class="absolute left-3.5 top-3.5 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors duration-200">
                                        <i class="bx bx-info-octagon text-xl"></i>
                                    </div>

                                    <textarea
                                        name="deskripsiMetode"
                                        id="deskripsiMetode"
                                        rows="3"
                                        placeholder="Jelaskan penggunaan metode pembayaran ini..."
                                        class="w-full pl-11 pr-4 py-3 bg-white dark:bg-slate-800 text-slate-900 dark:text-white text-sm font-medium rounded-2xl border-2 border-gray-200/80 dark:border-slate-700 focus:outline-none focus:border-primary resize-y transition-all"
                                    ></textarea>

                                </div>

                            </div>


                            <div
                                x-data="{ statusAktif: true }"
                                class="flex items-center justify-between p-4 rounded-2xl border-2 border-gray-200/80 dark:border-slate-700"
                            >

                                <div class="min-w-0">

                                    <p class="text-sm font-black text-slate-800 dark:text-white">
                                        Status Aktif
                                    </p>

                                    <p class="text-xs text-gray-400 mt-1">
                                        Metode dapat digunakan oleh kasir.
                                    </p>

                                </div>


                                <button
                                    type="button"
                                    @click="statusAktif = !statusAktif"
                                    :class="statusAktif ? 'bg-primary' : 'bg-gray-300 dark:bg-slate-600'"
                                    class="relative w-11 h-6 rounded-full shrink-0 ml-4 transition-colors duration-200"
                                >

                                    <span
                                        :class="statusAktif ? 'right-1' : 'left-1'"
                                        class="absolute top-1 w-4 h-4 rounded-full bg-white transition-all duration-200"
                                    ></span>

                                </button>

                            </div>

                        </div>


                        <div class="w-full flex flex-col-reverse sm:flex-row justify-end my-5 pt-4 border-t border-gray-100 dark:border-slate-800 gap-3">

                            <button
                                type="button"
                                @click="TambahMetode = false"
                                class="flex items-center justify-center bg-gray-100 dark:bg-slate-800 hover:bg-gray-200 dark:hover:bg-slate-700 text-gray-700 dark:text-gray-300 font-bold px-6 py-3 gap-2 rounded-2xl cursor-pointer transition-all active:scale-95 w-full sm:w-auto"
                            >
                                <span>Batal</span>
                            </button>

                            <button
                                type="submit"
                                class="flex items-center justify-center bg-primary hover:bg-primary/90 text-white font-black px-6 py-3 gap-2 rounded-2xl cursor-pointer transition-all active:scale-95 w-full sm:w-auto"
                            >
                                <i class="bx bx-save text-lg"></i>
                                <span>Simpan Metode</span>
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>


        <div
            x-show="FilterMetode"
            x-cloak
            @keydown.escape.window="FilterMetode = false"
            class="fixed inset-0 z-999 flex justify-center items-start sm:items-center w-full p-3 sm:p-4 overflow-y-auto"
        >

            <div
                x-show="FilterMetode"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-slate-950/60 backdrop-blur-[2px]"
                @click="FilterMetode = false"
            ></div>


            <div
                x-show="FilterMetode"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-95 translate-y-2"
                class="relative p-0 sm:p-4 w-full max-w-2xl max-h-full z-10 my-auto"
            >

                <div class="relative bg-white dark:bg-slate-900 border border-gray-200 dark:border-slate-800 rounded-xl shadow-sm p-4 md:p-6 md:px-10 max-h-[calc(100vh-1.5rem)] sm:max-h-[calc(100vh-2rem)] overflow-y-auto">

                    <div class="my-4 sm:my-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">

                        <div class="flex items-center gap-4 min-w-0">

                            <div class="hidden w-13 h-13 rounded-2xl bg-primary border border-indigo-100/80 lg:flex items-center justify-center shrink-0 shadow-sm">
                                <i class="bx bx-filter text-2xl text-white"></i>
                            </div>

                            <div class="min-w-0">

                                <div class="flex items-center gap-3 flex-wrap">

                                    <h1 class="text-black dark:text-white font-black text-2xl">
                                        Filter Metode
                                    </h1>

                                    <span class="text-sm font-bold text-gray-600 dark:text-gray-400">
                                        ( 0 )
                                    </span>

                                </div>

                                <p class="text-sm text-gray-500 font-medium mt-1">
                                    Atur tampilan fitur metode pembayaran.
                                </p>

                            </div>

                        </div>


                        <button
                            type="button"
                            @click="FilterMetode = false"
                            class="flex items-center justify-center w-11 h-11 rounded-full bg-primary text-white font-black cursor-pointer hover:bg-blue-700 transition shrink-0"
                        >
                            <span>X</span>
                        </button>

                    </div>


                    <form action="" method="GET" class="w-full my-4">

                        <div class="flex flex-col gap-5">

                            <div class="flex flex-col gap-1.5 w-full min-w-0">

                                <label class="text-xs font-bold uppercase tracking-wide text-gray-600 dark:text-gray-400 ml-1">
                                    Status Metode
                                </label>

                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">

                                    <button
                                        type="button"
                                        class="flex items-center justify-center bg-primary text-white font-black px-6 py-3 gap-2 rounded-2xl cursor-pointer transition-all active:scale-95"
                                    >
                                        Semua
                                    </button>

                                    <button
                                        type="button"
                                        class="flex items-center justify-center bg-white dark:bg-slate-800 text-gray-500 dark:text-gray-300 font-bold px-6 py-3 gap-2 rounded-2xl border-2 border-gray-200/80 dark:border-slate-700 hover:border-primary hover:text-primary transition-all active:scale-95"
                                    >
                                        Aktif
                                    </button>

                                    <button
                                        type="button"
                                        class="flex items-center justify-center bg-white dark:bg-slate-800 text-gray-500 dark:text-gray-300 font-bold px-6 py-3 gap-2 rounded-2xl border-2 border-gray-200/80 dark:border-slate-700 hover:border-primary hover:text-primary transition-all active:scale-95"
                                    >
                                        Nonaktif
                                    </button>

                                </div>

                            </div>


                            <div class="flex flex-col gap-1.5 w-full min-w-0">

                                <label class="text-xs font-bold uppercase tracking-wide text-gray-600 dark:text-gray-400 ml-1">
                                    Penggunaan
                                </label>

                                <div class="relative flex items-center w-full group">

                                    <select
                                        class="w-full pl-4 pr-10 py-3 bg-white dark:bg-slate-800 text-slate-900 dark:text-white text-sm font-medium rounded-2xl border-2 border-gray-200/80 dark:border-slate-700 focus:outline-none focus:border-primary appearance-none cursor-pointer"
                                    >
                                        <option value="">Semua Penggunaan</option>
                                        <option value="terbanyak">Paling Banyak Digunakan</option>
                                        <option value="tersedikit">Paling Sedikit Digunakan</option>
                                    </select>

                                    <div class="absolute right-3.5 flex items-center pointer-events-none text-gray-400">
                                        <i class="bx bx-chevron-down text-xl"></i>
                                    </div>

                                </div>

                            </div>


                            <div
                                x-data="{ hanyaUtama: false }"
                                class="flex items-center justify-between p-4 rounded-2xl border-2 border-gray-200/80 dark:border-slate-700"
                            >

                                <div class="min-w-0">

                                    <p class="text-sm font-black text-slate-800 dark:text-white">
                                        Hanya Metode Utama
                                    </p>

                                    <p class="text-xs text-gray-400 mt-1">
                                        Tampilkan metode yang ditandai utama.
                                    </p>

                                </div>


                                <button
                                    type="button"
                                    @click="hanyaUtama = !hanyaUtama"
                                    :class="hanyaUtama ? 'bg-primary' : 'bg-gray-300 dark:bg-slate-600'"
                                    class="relative w-11 h-6 rounded-full shrink-0 ml-4 transition-colors duration-200"
                                >

                                    <span
                                        :class="hanyaUtama ? 'right-1' : 'left-1'"
                                        class="absolute top-1 w-4 h-4 rounded-full bg-white transition-all duration-200"
                                    ></span>

                                </button>

                            </div>

                        </div>


                        <div class="w-full flex flex-col-reverse sm:flex-row justify-between my-5 pt-4 border-t border-gray-100 dark:border-slate-800 gap-3">

                            <button
                                type="button"
                                @click="FilterMetode = false"
                                class="flex items-center justify-center bg-gray-100 dark:bg-slate-800 hover:bg-gray-200 dark:hover:bg-slate-700 text-gray-700 dark:text-gray-300 font-bold px-6 py-3 gap-2 rounded-2xl cursor-pointer transition-all active:scale-95 w-full sm:w-auto"
                            >
                                <span>Reset Filter</span>
                            </button>

                            <button
                                type="submit"
                                class="flex items-center justify-center bg-primary hover:bg-primary/90 text-white font-black px-6 py-3 gap-2 rounded-2xl cursor-pointer transition-all active:scale-95 w-full sm:w-auto"
                            >
                                <i class="bx bx-filter-alt text-lg"></i>
                                <span>Terapkan Filter</span>
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>