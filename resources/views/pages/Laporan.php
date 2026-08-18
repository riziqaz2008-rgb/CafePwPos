<section id="Laporan">

    <div
        x-data="{
            open: false
        }"
        x-init="$watch('open', value => document.body.classList.toggle('overflow-hidden', value))"
    >

        <div class="flex flex-col md:flex-row md:items-center justify-between gap-5">

            <div class="flex items-center gap-x-5">

                <div class="w-13 h-13 rounded-2xl bg-primary flex items-center justify-center shrink-0 shadow-sm">

                    <i class="bx bx-archive text-2xl text-white"></i>

                </div>

                <div>

                    <h1 class="text-2xl font-black text-slate-900">

                        Laporan Penjualan

                    </h1>

                    <p class="text-sm text-slate-500 font-medium mt-1.5">

                        Pantau dan analisis laporan penjualan serta transaksi cafe.

                    </p>

                </div>

            </div>

            <div class="flex flex-row gap-x-3 my-1 shrink-0">

                <button
                    type="button"
                    @click="open = true"
                    class="w-full h-12 md:w-auto flex items-center justify-center bg-primary text-white font-black px-6 gap-2 rounded-xl cursor-pointer hover:opacity-90 transition-opacity"
                >

                    <i class="bx bxs-filter text-lg"></i>

                    <span>

                        Filter

                    </span>

                </button>

            </div>

        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3 gap-5 mt-10 mb-8">

            <div class="bg-white border border-gray-200/80 rounded-2xl p-6">

                <div class="flex items-center justify-between">

                    <div class="w-12 h-12 rounded-xl bg-primary flex items-center justify-center">

                        <i class="bx bx-receipt text-xl text-white"></i>

                    </div>

                    <span class="text-xs font-bold text-gray-400">

                        Transaksi

                    </span>

                </div>

                <div class="mt-5">

                    <p class="text-xs font-bold text-gray-400 uppercase tracking-wide">

                        Total Transaksi

                    </p>

                    <h3 class="text-2xl font-black text-gray-900 mt-1.5">

                        128

                    </h3>

                    <p class="text-xs text-gray-400 mt-1.5">

                        transaksi periode ini

                    </p>

                </div>

            </div>

            <div class="bg-white border border-gray-200/80 rounded-2xl p-6">

                <div class="flex items-center justify-between">

                    <div class="w-12 h-12 rounded-xl bg-primary flex items-center justify-center">

                        <i class="bx bx-chart-sine text-xl text-white"></i>

                    </div>

                    <span class="text-xs font-bold text-gray-400">

                        Pendapatan

                    </span>

                </div>

                <div class="mt-5">

                    <p class="text-xs font-bold text-gray-400 uppercase tracking-wide">

                        Total Pendapatan

                    </p>

                    <h3 class="text-xl sm:text-2xl font-black text-gray-900 mt-1.5">

                        Rp 8.450.000

                    </h3>

                    <p class="text-xs text-gray-400 mt-1.5">

                        dari seluruh transaksi

                    </p>

                </div>

            </div>

            <div class="bg-white border border-gray-200/80 rounded-2xl p-6 sm:col-span-2 lg:col-span-1">

                <div class="flex items-center justify-between">

                    <div class="w-12 h-12 rounded-xl bg-primary flex items-center justify-center">

                        <i class="bx bx-bowl-hot text-xl text-white"></i>

                    </div>

                    <span class="text-xs font-bold text-gray-400">

                        item

                    </span>

                </div>

                <div class="mt-5">

                    <p class="text-xs font-bold text-gray-400 uppercase tracking-wide">

                        Menu Terjual

                    </p>

                    <h3 class="text-2xl font-black text-gray-900 mt-1.5">

                        356

                    </h3>

                    <p class="text-xs text-gray-400 mt-1.5">

                        total item terjual

                    </p>

                </div>

            </div>

        </div>

        <div class="my-6 bg-white dark:bg-slate-950 min-w-0">

            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 mb-5">

                <div>

                    <div class="flex items-center gap-2">

                        <div class="w-1.5 h-5 rounded-full bg-primary"></div>

                        <h2 class="text-sm font-black text-slate-800 dark:text-white">

                            Daftar Penjualan

                        </h2>

                    </div>

                    <p class="text-xs text-gray-400 font-medium mt-1 ml-3.5">

                        Riwayat transaksi penjualan cafe

                    </p>

                </div>

                <div class="relative w-full lg:w-96">

                    <div class="relative flex items-center gap-2 p-1.5 rounded-xl border-2 border-gray-200/80 dark:border-slate-700 text-slate-900 transition-all focus-within:border-primary bg-white dark:bg-slate-800 min-h-[48px]">

                        <div class="flex items-center text-gray-400 shrink-0 ml-2">

                            <i class="bx bx-search text-lg"></i>

                        </div>

                        <div class="flex-1 min-w-0">

                            <input
                                type="search"
                                class="px-1 py-0.5 bg-transparent text-slate-900 dark:text-slate-100 text-sm block w-full placeholder:text-gray-400 focus:outline-none font-medium"
                                placeholder="Cari kode transaksi atau kasir..."
                            >

                        </div>

                    </div>

                </div>

            </div>

            <div class="overflow-y-auto overflow-x-auto p-1 max-h-[700px]">

                <div class="w-full overflow-x-auto rounded-2xl">

                    <table
                        id="selection-table"
                        class="w-full min-w-[900px] text-sm mt-3 border border-gray-200 dark:border-slate-800 rounded-2xl overflow-hidden"
                    >

                        <thead>

                            <tr class="dark:bg-slate-900 text-gray-400 border-b border-gray-200 dark:border-slate-800">

                                <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                    #

                                </th>

                                <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                    Kode Transaksi

                                </th>

                                <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                    Tanggal

                                </th>

                                <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                    Kasir

                                </th>

                                <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                    Pembayaran

                                </th>

                                <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                    Total

                                </th>

                                <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                    Aksi

                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr class="text-center bg-white dark:bg-slate-950 border-b border-gray-200 dark:border-slate-800 hover:bg-gray-50/60 dark:hover:bg-slate-900/50 transition">

                                <td class="px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                    <div class="font-semibold text-gray-900 dark:text-slate-200">

                                        1

                                    </div>

                                </td>

                                <td class="px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                    <div class="flex justify-center">

                                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-primary text-white font-bold whitespace-nowrap">

                                            <span class="w-2 h-2 rounded-full bg-white"></span>

                                            <span>

                                                #TRX001

                                            </span>

                                        </div>

                                    </div>

                                </td>

                                <td class="px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                    <div class="flex justify-center">

                                        <div class="inline-flex items-center gap-2 text-gray-700 dark:text-slate-200 font-medium whitespace-nowrap">

                                            <span>

                                                18-08-2026

                                            </span>

                                        </div>

                                    </div>

                                </td>

                                <td class="px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                    <div class="flex justify-center">

                                        <div class="flex items-center gap-2">

                                            <span class="font-semibold text-gray-700 dark:text-slate-200">

                                                Admin

                                            </span>

                                        </div>

                                    </div>

                                </td>

                                <td class="px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                    <div class="flex justify-center">

                                        <div class="inline-flex items-center gap-2 px-5 py-2 rounded-lg bg-primary">

                                            <span class="w-2 h-2 rounded-full bg-white"></span>

                                            <span class="text-white font-semibold whitespace-nowrap">

                                                Cash

                                            </span>

                                        </div>

                                    </div>

                                </td>

                                <td class="px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                    <span class="text-slate-900 dark:text-slate-200 font-bold whitespace-nowrap">

                                        Rp 75.000

                                    </span>

                                </td>

                                <td class="px-5 py-4">

                                    <div class="flex justify-center items-center gap-2 shrink-0">

                                        <button

                                            type="button"

                                            class="flex items-center justify-center p-3 bg-primary text-white rounded-xl hover:opacity-85 active:scale-95 transition"

                                            title="Lihat Detail"

                                        >

                                            <i class="bx bx-eye text-xl"></i>

                                        </button>

                                        <button

                                            type="button"

                                            class="flex items-center justify-center p-3 bg-red-500 text-white rounded-xl hover:opacity-85 active:scale-95 transition"

                                            title="Hapus Data"

                                        >

                                            <i class="bx bxs-trash text-xl"></i>

                                        </button>

                                    </div>

                                </td>

                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>

        </div>

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

                <div class="relative bg-white border border-gray-200 rounded-2xl shadow-sm p-5 md:p-7 md:px-10">

                    <div class="flex justify-between items-center gap-5 mb-8">

                        <div class="flex items-center gap-4">

                            <div class="hidden w-13 h-13 rounded-2xl bg-primary lg:flex items-center justify-center shrink-0 shadow-sm">

                                <i class="bx bx-filter text-2xl text-white"></i>

                            </div>

                            <div>

                                <h1 class="text-black font-black text-2xl">

                                    Filter Riwayat Transaksi

                                </h1>

                                <p class="text-sm text-gray-500 font-medium mt-1">

                                    Atur periode dan metode pembayaran transaksi.

                                </p>

                            </div>

                        </div>

                        <button
                            type="button"
                            @click="open = false"
                            class="flex items-center justify-center w-10 h-10 rounded-xl bg-slate-100 text-slate-500 font-black cursor-pointer hover:bg-primary hover:text-white transition"
                        >

                            <i class="bx bx-x text-xl"></i>

                        </button>

                    </div>

                    <div class="space-y-6">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                            <div class="space-y-2">

                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-500">

                                    Pembayaran

                                </label>

                                <div class="relative">

                                    <i class="bx bx-credit-card absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-lg"></i>

                                    <select class="w-full h-11 pl-10 pr-8 text-xs sm:text-sm font-medium text-slate-700 border border-slate-200 rounded-xl focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary appearance-none transition-all cursor-pointer">

                                        <option value="">

                                            Semua Pembayaran

                                        </option>

                                        <option value="cash">

                                            Cash

                                        </option>

                                        <option value="qris">

                                            QRIS

                                        </option>

                                        <option value="transfer">

                                            Transfer Bank

                                        </option>

                                        <option value="debit">

                                            Kartu Debit

                                        </option>

                                    </select>

                                    <i class="bx bx-chevron-down absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-lg"></i>

                                </div>

                            </div>

                            <div class="space-y-2">

                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-500">

                                    Kategori

                                </label>

                                <div class="relative">

                                    <i class="bx bx-category absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-lg"></i>

                                    <select class="w-full h-11 pl-10 pr-8 text-xs sm:text-sm font-medium text-slate-700 border border-slate-200 rounded-xl focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary appearance-none transition-all cursor-pointer">

                                        <option value="">

                                            Semua Kategori

                                        </option>

                                        <option value="makanan">

                                            Makanan

                                        </option>

                                        <option value="minuman">

                                            Minuman

                                        </option>

                                        <option value="snack">

                                            Snack

                                        </option>

                                        <option value="dessert">

                                            Dessert

                                        </option>

                                    </select>

                                    <i class="bx bx-chevron-down absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none text-lg"></i>

                                </div>

                            </div>

                        </div>

                        <div class="h-px bg-slate-100"></div>

                        <div class="space-y-2">

                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-500">

                                Rentang Tanggal

                            </label>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                                <div class="relative">

                                    <i class="bx bx-calendar absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-base"></i>

                                    <input
                                        type="date"
                                        class="w-full h-11 pl-10 pr-3 text-xs sm:text-sm font-medium text-slate-700 border border-slate-200 rounded-xl focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all cursor-pointer"
                                    >

                                </div>

                                <div class="relative">

                                    <i class="bx bx-calendar absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-base"></i>

                                    <input
                                        type="date"
                                        class="w-full h-11 pl-10 pr-3 text-xs sm:text-sm font-medium text-slate-700 border border-slate-200 rounded-xl focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all cursor-pointer"
                                    >

                                </div>

                            </div>

                        </div>

                        <div class="flex flex-col-reverse sm:flex-row sm:justify-end gap-3 pt-2">

                            <button
                                type="button"
                                @click="open = false"
                                class="h-11 px-5 rounded-xl border border-slate-200 text-slate-600 text-sm font-bold hover:bg-slate-50 transition"
                            >

                                Batal

                            </button>

                            <button
                                type="button"
                                @click="open = false"
                                class="h-11 px-6 rounded-xl bg-primary text-white text-sm font-bold hover:bg-blue-700 transition"
                            >

                                Terapkan Filter

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>