<section id="Kasir">
    <div 
        x-data="{ 
            layoutModeToggle: $persist(true), 
            filterToggle: $persist(true), 
            open: false,
            metode: '',
            nominal: 0,
            total: 68000
        }"
        x-init="$watch('open', value => document.body.classList.toggle('overflow-hidden', value))"
    >

        <!-- =========================
             HEADER
        ========================== -->

        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-5">

            <div class="flex items-center gap-4 min-w-0">

                <div class="w-12 h-12 rounded-2xl bg-primary flex items-center justify-center shrink-0">
                    <i class="bx bx-cart-alt text-2xl text-secondary"></i>
                </div>

                <div class="min-w-0">

                    <div class="flex items-center gap-3">

                        <h1 class="text-black font-black text-2xl">
                            Kasir
                        </h1>

                        <span class="text-sm font-semibold text-gray-400">
                            <?= $total_data ?> Menu
                        </span>

                    </div>

                    <p class="text-sm text-gray-500 font-medium mt-1">
                        Pilih menu untuk membuat pesanan pelanggan.
                    </p>

                </div>

            </div>

            <div class="flex items-center gap-3 shrink-0">

                <a 
                    href="?route=laporan"
                    class="flex items-center justify-center gap-2 px-5 py-3 rounded-xl border-2 border-gray-200/80 bg-white text-gray-700 font-bold text-sm hover:border-primary hover:text-primary transition-all"
                >

                    <i class="bx bx-history text-lg"></i>

                    <span>
                        Riwayat
                    </span>

                </a>

            </div>

        </div>


        <!-- =========================
             MAIN POS
        ========================== -->

        <div class="grid grid-cols-1 xl:grid-cols-[minmax(0,1fr)_400px] gap-6 mt-6 items-start">


            <!-- =========================
                 MENU
            ========================== -->

            <div class="min-w-0 order-2 xl:order-1">

          <div class="bg-white rounded-3xl  overflow-hidden">

    <!-- Search & Filter -->

    <div class="p-5 border-b border-gray-200">

        <div class="flex flex-col md:flex-row gap-3">

            <div class="relative flex-1">

                <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none text-gray-400">

                    <i class="bx bx-search text-xl"></i>

                </div>

                <input 
                    type="search" 
                    name="search" 
                    value="<?= htmlspecialchars($_GET['search'] ?? '') ?>" 
                    oninput="doLiveSearch(this.value)" 
                    class="w-full h-12 pl-11 pr-4 border border-gray-200 rounded-xl text-sm font-semibold text-slate-900 placeholder:text-gray-400 focus:bg-white focus:ring-2 focus:ring-primary outline-none transition-all" 
                    placeholder="Cari nama menu..."
                >

            </div>


            <?php  
                $currentCategory = $_GET['category'] ?? 'Semua';  
  
                $categories = [  
                    'Semua',  
                    'Makanan',  
                    'Minuman',  
                    'Bahan Pokok',  
                    'Kesehatan',  
                    'Kebersihan',  
                    'Ibu & Anak',  
                    'Bumbu Dapur',  
                    'Kosmetik'  
                ];  
            ?>


            <div class="relative w-full md:w-52 shrink-0">

                <select 
                    onchange="window.location.href = '?route=kasir&category=' + encodeURIComponent(this.value)" 
                    class="w-full h-12 px-4 pr-10 border border-gray-200 rounded-xl text-sm font-bold text-gray-700 focus:bg-white focus:ring-2 focus:ring-primary outline-none transition-all appearance-none cursor-pointer" 
                >

                    <?php foreach ($categories as $category): ?>

                        <option 
                            value="<?= htmlspecialchars($category) ?>" 
                            <?= $currentCategory == $category ? 'selected' : '' ?>
                        >
                            <?= htmlspecialchars($category) ?>
                        </option>

                    <?php endforeach; ?>

                </select>


                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-gray-400">

                    <i class="bx bx-chevron-down text-lg"></i>

                </div>

            </div>

        </div>

    </div>

</div>

                    <!-- Menu Header -->

                    <div class="flex items-center justify-between px-5 pt-5">

                        <div>

                            <h2 class="font-black text-gray-900">
                                Daftar Menu
                            </h2>

                            <p class="text-xs text-gray-400 mt-1">
                                Pilih menu untuk ditambahkan ke pesanan
                            </p>

                        </div>

                        <div class="flex items-center gap-1 p-1 rounded-xl">

                            <a
                                href="?route=kasir&layoutMode=grid&category=<?= urlencode($currentCategory) ?>"
                                class="w-9 h-9 flex items-center justify-center rounded-lg transition-all <?= ($_GET['layoutMode'] ?? 'grid') == 'grid' ? 'bg-white text-primary shadow-sm' : 'text-gray-400 hover:text-gray-700' ?>"
                            >
                                <i class="bx bxs-grid text-lg"></i>
                            </a>

                            <a
                                href="?route=kasir&layoutMode=table&category=<?= urlencode($currentCategory) ?>"
                                class="w-9 h-9 flex items-center justify-center rounded-lg transition-all <?= ($_GET['layoutMode'] ?? 'grid') == 'table' ? 'bg-white text-primary shadow-sm' : 'text-gray-400 hover:text-gray-700' ?>"
                            >
                                <i class="bx bxs-rows text-lg"></i>
                            </a>

                        </div>

                    </div>

                    <!-- Menu Content -->

                    <div class="p-5">

                        <?php if (!empty($data_barang)): ?>

                            <?php if (($_GET['layoutMode'] ?? 'grid') == 'table'): ?>

                                <!-- Menu Table -->

                                <div class="overflow-x-auto">

                                    <table class="w-full text-left">

                                        <thead>

                                            <tr class="border-b border-gray-200">

                                                <th class="px-4 py-3 text-[11px] font-black text-gray-400 uppercase tracking-wider">
                                                    Menu
                                                </th>

                                                <th class="px-4 py-3 text-[11px] font-black text-gray-400 uppercase tracking-wider">
                                                    Kategori
                                                </th>

                                                <th class="px-4 py-3 text-[11px] font-black text-gray-400 uppercase tracking-wider">
                                                    Harga
                                                </th>

                                                <th class="px-4 py-3 text-[11px] font-black text-gray-400 uppercase tracking-wider text-right">
                                                    Aksi
                                                </th>

                                            </tr>

                                        </thead>

                                        <tbody class="divide-y divide-gray-100">

                                            <?php foreach ($data_barang as $barang): ?>

                                                <?php

                                                    $namaGambar = trim($barang['gambar_barang']);
                                                    $imagePath = __DIR__ . '/../../../../assets/images/products/' . $namaGambar;
                                                    $imageUrl = '/assets/images/products/' . $namaGambar;

                                                ?>

                                                <tr class="group hover/70 transition-all">

                                                    <!-- Menu -->

                                                    <td class="px-4 py-4">

                                                        <div class="flex items-center gap-3 min-w-[220px]">

                                                            <div class="w-12 h-12 rounded-xl overflow-hidden bg-gray-100 shrink-0">

                                                                <?php if (!empty($namaGambar) && file_exists($imagePath)): ?>

                                                                    <img
                                                                        src="<?= htmlspecialchars($imageUrl) ?>"
                                                                        loading="lazy"
                                                                        class="w-full h-full object-cover"
                                                                        alt="<?= htmlspecialchars($barang['nama_barang']) ?>"
                                                                    >

                                                                <?php else: ?>

                                                                    <div class="w-full h-full flex items-center justify-center">

                                                                        <i class="bx bx-image text-2xl text-gray-300"></i>

                                                                    </div>

                                                                <?php endif; ?>

                                                            </div>

                                                            <div class="min-w-0">

                                                                <h3 class="font-black text-gray-900 text-sm truncate">
                                                                    <?= htmlspecialchars($barang['nama_barang']) ?>
                                                                </h3>

                                                                <p class="text-xs text-gray-400 mt-1 truncate max-w-[280px]">
                                                                    <?= !empty($barang['deskripsi_barang']) ? htmlspecialchars($barang['deskripsi_barang']) : 'Menu siap dipesan.' ?>
                                                                </p>

                                                            </div>

                                                        </div>

                                                    </td>


                                                    <!-- Kategori -->

                                                    <td class="px-4 py-4">

                                                        <span class="inline-flex px-2.5 py-1.5 rounded-lg bg-primary/10 text-primary text-[10px] font-black">
                                                            <?= htmlspecialchars($barang['kategori_barang']) ?>
                                                        </span>

                                                    </td>


                                                    <!-- Harga -->

                                                    <td class="px-4 py-4">

                                                        <span class="text-sm font-black text-gray-900 whitespace-nowrap">
                                                            Rp <?= number_format($barang['harga_barang'], 0, ',', '.') ?>
                                                        </span>

                                                    </td>


                                                    <!-- Aksi -->

                                                    <td class="px-4 py-4">

                                                        <div class="flex justify-end">

                                                            <button
                                                                type="button"
                                                                class="w-10 h-10 rounded-xl bg-primary text-secondary flex items-center justify-center hover:opacity-90 active:scale-95 transition-all"
                                                                title="Tambah ke pesanan"
                                                            >

                                                                <i class="bx bx-plus text-xl"></i>

                                                            </button>

                                                        </div>

                                                    </td>

                                                </tr>

                                            <?php endforeach; ?>

                                        </tbody>

                                    </table>

                                </div>


                            <?php else: ?>

                                <!-- Menu Grid -->

                                <div
                                    id="grid-barang"
                                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4"
                                >

                                    <?php foreach ($data_barang as $barang): ?>

                                        <?php

                                            $namaGambar = trim($barang['gambar_barang']);
                                            $imagePath = __DIR__ . '/../../../../assets/images/products/' . $namaGambar;
                                            $imageUrl = '/assets/images/products/' . $namaGambar;

                                        ?>

                                        <div
                                            class="group bg-white  rounded-2xl overflow-hidden hover:border-primary/40 hover:shadow-md transition-all duration-200"
                                        >

                                            <!-- Image -->

                                            <div class="relative h-40 overflow-hidden bg-gray-100">

                                                <?php if (!empty($namaGambar) && file_exists($imagePath)): ?>

                                                    <img
                                                        src="<?= htmlspecialchars($imageUrl) ?>"
                                                        loading="lazy"
                                                        class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                                                        alt="<?= htmlspecialchars($barang['nama_barang']) ?>"
                                                    >

                                                <?php else: ?>

                                                    <div class="w-full h-full flex items-center justify-center">

                                                        <i class="bx bx-image text-4xl text-gray-300"></i>

                                                    </div>

                                                <?php endif; ?>


                                                <div class="absolute top-3 left-3">

                                                    <span class="px-2.5 py-1.5 rounded-lg bg-primary backdrop-blur-sm text-[10px] font-black text-secondary shadow-sm">

                                                        <?= htmlspecialchars($barang['kategori_barang']) ?>

                                                    </span>

                                                </div>

                                            </div>


                                            <!-- Content -->

                                            <div class="p-4">

                                                <h3 class="font-black text-gray-900 text-sm line-clamp-1">

                                                    <?= htmlspecialchars($barang['nama_barang']) ?>

                                                </h3>

                                                <p class="text-xs text-gray-400 mt-1 line-clamp-1">

                                                    <?= !empty($barang['deskripsi_barang']) ? htmlspecialchars($barang['deskripsi_barang']) : 'Menu siap dipesan.' ?>

                                                </p>


                                                <div class="flex items-center justify-between gap-3 mt-4">

                                                    <div class="min-w-0">

                                                        <span class="text-[10px] uppercase tracking-wider font-bold text-gray-400 block">
                                                            Harga
                                                        </span>

                                                        <span class="text-base font-black text-gray-900 whitespace-nowrap">

                                                            Rp <?= number_format($barang['harga_barang'], 0, ',', '.') ?>

                                                        </span>

                                                    </div>


                                                    <button
                                                        type="button"
                                                        class="w-10 h-10 rounded-xl bg-primary text-secondary flex items-center justify-center hover:opacity-90 active:scale-95 transition-all shrink-0"
                                                        title="Tambah ke pesanan"
                                                    >

                                                        <i class="bx bx-plus text-xl"></i>

                                                    </button>

                                                </div>

                                            </div>

                                        </div>

                                    <?php endforeach; ?>

                                </div>

                            <?php endif; ?>

                        <?php else: ?>

                            <div class="min-h-[400px] flex flex-col items-center justify-center text-gray-400">

                                <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-4">

                                    <i class="bx bx-package text-4xl text-gray-300"></i>

                                </div>

                                <h3 class="font-black text-gray-500">
                                    Menu tidak ditemukan
                                </h3>

                                <p class="text-sm mt-1">
                                    Coba gunakan kata kunci atau kategori lain.
                                </p>

                            </div>

                        <?php endif; ?>

                    </div>
               


                <!-- Pagination -->

                <?php if (!empty($data_barang)): ?>

                    <div class="w-full flex justify-center mt-6">

                        <nav aria-label="Pagination">

                            <ul class="flex items-center gap-1.5 bg-white  rounded-full p-2">

                                <li>

                                    <a
                                        href="?route=kasir&page=<?= max(1, $current - 1) ?>"
                                        class="flex items-center justify-center w-9 h-9 rounded-full text-gray-500 transition-all <?= $current <= 1 ? 'pointer-events-none opacity-40' : 'hover:bg-gray-100' ?>"
                                    >
                                        <i class="bx bx-chevron-left"></i>
                                    </a>

                                </li>

                                <li>

                                    <a
                                        href="?route=kasir&page=1"
                                        class="flex items-center justify-center w-9 h-9 rounded-full text-sm <?= $current == 1 ? 'bg-primary text-secondary font-black' : 'text-gray-600 hover:bg-gray-100' ?>"
                                    >
                                        1
                                    </a>

                                </li>

                                <?php if ($last > 1): ?>

                                    <?php
                                        $start = max(2, $current - 1);
                                        $end = min($last - 1, $current + 1);
                                    ?>

                                    <?php if ($current > 3): ?>

                                        <li class="px-1 text-gray-400 text-sm">
                                            ...
                                        </li>

                                    <?php endif; ?>


                                    <?php for ($i = $start; $i <= $end; $i++): ?>

                                        <li>

                                            <a
                                                href="?route=kasir&page=<?= $i ?>"
                                                class="flex items-center justify-center w-9 h-9 rounded-full text-sm transition-all <?= $current == $i ? 'bg-primary text-secondary font-black' : 'text-gray-600 hover:bg-gray-100' ?>"
                                            >
                                                <?= $i ?>
                                            </a>

                                        </li>

                                    <?php endfor; ?>


                                    <?php if ($current < $last - 2): ?>

                                        <li class="px-1 text-gray-400 text-sm">
                                            ...
                                        </li>

                                    <?php endif; ?>


                                    <li>

                                        <a
                                            href="?route=kasir&page=<?= $last ?>"
                                            class="flex items-center justify-center w-9 h-9 rounded-full text-sm transition-all <?= $current == $last ? 'bg-primary text-secondary font-black' : 'text-gray-600 hover:bg-gray-100' ?>"
                                        >
                                            <?= $last ?>
                                        </a>

                                    </li>

                                <?php endif; ?>


                                <li>

                                    <a
                                        href="?route=kasir&page=<?= min($last, $current + 1) ?>"
                                        class="flex items-center justify-center w-9 h-9 rounded-full text-gray-500 transition-all <?= $current >= $last ? 'pointer-events-none opacity-40' : 'hover:bg-gray-100' ?>"
                                    >
                                        <i class="bx bx-chevron-right"></i>
                                    </a>

                                </li>

                            </ul>

                        </nav>

                    </div>

                <?php endif; ?>

            </div>


            <!-- =========================
                 CART
            ========================== -->

            <aside class="w-full xl:sticky xl:top-6 order-1 xl:order-2">

                <div class="bg-white  rounded-3xl overflow-hidden">


                    <!-- Cart Header -->

                    <div class="px-5 py-5 border-b border-gray-100">

                        <div class="flex items-center justify-between">

                            <div>

                                <div class="flex items-center gap-2">

                                    <h2 class="text-lg font-black text-gray-900">
                                        Pesanan
                                    </h2>

                                    <span class="px-2 py-1 rounded-full bg-primary text-white text-[10px] font-black">
                                        3
                                    </span>

                                </div>

                                <p class="text-xs text-gray-400 mt-1">
                                    Daftar menu yang dipilih
                                </p>

                            </div>


                            <button
                                type="button"
                                class="w-9 h-9 rounded-xl flex items-center justify-center text-gray-400 hover:bg-red-50 hover:text-red-500 transition-all"
                                title="Kosongkan pesanan"
                            >

                                <i class="bx bx-trash text-lg"></i>

                            </button>

                        </div>

                    </div>


                    <!-- Cart Items -->

                    <div class="max-h-[360px] overflow-y-auto px-5 py-3 divide-y divide-gray-100">

                        <!-- Item -->

                        <div class="py-4">

                            <div class="flex items-center gap-3">

                                <img
                                    src="/assets/images/products/nasi_goreng.jpg"
                                    class="w-14 h-14 rounded-xl object-cover shrink-0"
                                    alt="Nasi Goreng Spesial"
                                >

                                <div class="flex-1 min-w-0">

                                    <h4 class="font-black text-gray-900 text-sm truncate">
                                        Nasi Goreng Spesial
                                    </h4>

                                    <p class="text-xs font-bold text-primary mt-1">
                                        Rp25.000
                                    </p>

                                </div>

                                <button
                                    type="button"
                                    class="w-7 h-7 flex items-center justify-center text-gray-300 hover:text-red-500 transition-all"
                                >
                                    <i class="bx bx-x text-lg"></i>
                                </button>

                            </div>


                            <div class="flex items-center justify-between mt-3">

                                <span class="text-[11px] text-gray-400 font-medium">
                                    Jumlah
                                </span>

                                <div class="flex items-center gap-2">

                                    <button
                                        type="button"
                                        class="w-7 h-7 rounded-lg bg-gray-100 text-gray-600 flex items-center justify-center hover:bg-gray-200 transition"
                                    >
                                        <i class="bx bx-minus text-xs"></i>
                                    </button>

                                    <span class="w-6 text-center text-sm font-black text-gray-800">
                                        2
                                    </span>

                                    <button
                                        type="button"
                                        class="w-7 h-7 rounded-lg bg-primary text-secondary flex items-center justify-center hover:opacity-90 transition"
                                    >
                                        <i class="bx bx-plus text-xs"></i>
                                    </button>

                                </div>

                            </div>

                        </div>


                        <!-- Item -->

                        <div class="py-4">

                            <div class="flex items-center gap-3">

                                <div class="w-14 h-14 rounded-xl bg-gray-100 flex items-center justify-center shrink-0">

                                    <i class="bx bx-coffee text-2xl text-gray-400"></i>

                                </div>

                                <div class="flex-1 min-w-0">

                                    <h4 class="font-black text-gray-900 text-sm truncate">
                                        Es Kopi Susu
                                    </h4>

                                    <p class="text-xs font-bold text-primary mt-1">
                                        Rp15.000
                                    </p>

                                </div>

                                <button
                                    type="button"
                                    class="w-7 h-7 flex items-center justify-center text-gray-300 hover:text-red-500 transition-all"
                                >
                                    <i class="bx bx-x text-lg"></i>
                                </button>

                            </div>


                            <div class="flex items-center justify-between mt-3">

                                <span class="text-[11px] text-gray-400 font-medium">
                                    Jumlah
                                </span>

                                <div class="flex items-center gap-2">

                                    <button
                                        type="button"
                                        class="w-7 h-7 rounded-lg bg-gray-100 text-gray-600 flex items-center justify-center"
                                    >
                                        <i class="bx bx-minus text-xs"></i>
                                    </button>

                                    <span class="w-6 text-center text-sm font-black text-gray-800">
                                        1
                                    </span>

                                    <button
                                        type="button"
                                        class="w-7 h-7 rounded-lg bg-primary text-secondary flex items-center justify-center"
                                    >
                                        <i class="bx bx-plus text-xs"></i>
                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- Summary -->

                    <div class="border-t border-gray-100 p-5">

                        <div class="space-y-2.5">

                            <div class="flex items-center justify-between text-sm">

                                <span class="text-gray-400">
                                    Subtotal
                                </span>

                                <span class="font-bold text-gray-700">
                                    Rp68.000
                                </span>

                            </div>

                            <div class="flex items-center justify-between text-sm">

                                <span class="text-gray-400">
                                    Diskon
                                </span>

                                <span class="font-bold text-gray-700">
                                    Rp0
                                </span>

                            </div>

                        </div>


                        <div class="flex items-end justify-between mt-5 pt-4 border-t border-dashed border-gray-200">

                            <div>

                                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block">
                                    Total
                                </span>

                                <span class="text-2xl font-black text-gray-900">
                                    Rp68.000
                                </span>

                            </div>

                        </div>


                        <button
                            type="button"
                            @click="open = true"
                            class="w-full h-12 mt-5 flex items-center justify-center gap-2 rounded-xl bg-primary text-secondary font-black hover:opacity-90 active:scale-[.98] transition-all"
                        >

                            <i class="bx bx-wallet text-xl"></i>

                            Bayar Sekarang

                        </button>

                    </div>

                </div>

            </aside>

        </div>


        <!-- =========================
             PAYMENT MODAL
        ========================== -->

        <div
            x-show="open"
            x-cloak
            @keydown.escape.window="open = false"
            class="fixed inset-0 z-999 flex items-center justify-center p-4"
        >

            <!-- Overlay -->

            <div
                x-show="open"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-end="opacity-0"
                class="absolute inset-0 bg-slate-950/60 backdrop-blur-sm"
                @click="open = false"
            ></div>


            <!-- Modal -->

            <div
                x-show="open"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95 translate-y-3"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-end="opacity-0 scale-95 translate-y-3"
                class="relative w-full max-w-xl bg-white rounded-3xl shadow-2xl overflow-hidden"
            >

                <!-- Header -->

                <div class="px-6 py-5 border-b border-gray-100">

                    <div class="flex items-center justify-between">

                        <div class="flex items-center gap-3">

                            <div class="w-11 h-11 rounded-xl bg-primary flex items-center justify-center">

                                <i class="bx bx-receipt text-xl text-secondary"></i>

                            </div>

                            <div>

                                <h2 class="text-lg font-black text-gray-900">
                                    Pembayaran
                                </h2>

                                <p class="text-xs text-gray-400 mt-0.5">
                                    Selesaikan transaksi pelanggan
                                </p>

                            </div>

                        </div>


                        <button
                            type="button"
                            @click="open = false"
                            class="w-9 h-9 rounded-xl flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-700 transition-all"
                        >

                            <i class="bx bx-x text-xl"></i>

                        </button>

                    </div>

                </div>


                                <!-- Payment Content -->

                <div class="p-6">

                    <!-- Total -->

                    <div class="text-center pb-5 border-b border-gray-100">

                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">
                            Total Pembayaran
                        </p>

                        <p class="text-3xl md:text-4xl font-black text-gray-900 mt-1">
                            Rp68.000
                        </p>

                    </div>


                    <!-- Method -->

                    <div class="mt-5">

                        <div class="flex items-center justify-between">

                            <label class="text-xs font-black text-gray-500 uppercase tracking-wider">
                                Metode Pembayaran
                            </label>

                            <span 
                                x-show="metode"
                                x-text="metode"
                                class="text-xs font-bold text-primary"
                            >
                            </span>

                        </div>


                        <div class="grid grid-cols-2 gap-3 mt-3">

                            <!-- Tunai -->

                            <button
                                type="button"
                                @click="metode = 'Tunai'"
                                class="relative p-4 rounded-2xl border-2 text-left transition-all duration-200"
                                :class="metode === 'Tunai'
                                    ? 'border-primary bg-primary/5'
                                    : 'border-gray-200 bg-white hover:border-gray-300'"
                            >

                                <div class="flex items-start justify-between gap-3">

                                    <div>

                                        <p
                                            class="text-sm font-black"
                                            :class="metode === 'Tunai' ? 'text-primary' : 'text-gray-800'"
                                        >
                                            Tunai
                                        </p>

                                        <p class="text-[11px] text-gray-400 mt-1">
                                            Bayar langsung
                                        </p>

                                    </div>


                                    <span
                                        class="w-5 h-5 rounded-full border-2 flex items-center justify-center shrink-0 transition-all"
                                        :class="metode === 'Tunai'
                                            ? 'border-primary'
                                            : 'border-gray-300'"
                                    >

                                        <span
                                            x-show="metode === 'Tunai'"
                                            class="w-2.5 h-2.5 rounded-full bg-primary"
                                        >
                                        </span>

                                    </span>

                                </div>

                            </button>


                            <!-- Hutang -->

                            <button
                                type="button"
                                @click="metode = 'Hutang'"
                                class="relative p-4 rounded-2xl border-2 text-left transition-all duration-200"
                                :class="metode === 'Hutang'
                                    ? 'border-primary bg-primary/5'
                                    : 'border-gray-200 bg-white hover:border-gray-300'"
                            >

                                <div class="flex items-start justify-between gap-3">

                                    <div>

                                        <p
                                            class="text-sm font-black"
                                            :class="metode === 'Hutang' ? 'text-primary' : 'text-gray-800'"
                                        >
                                            Hutang
                                        </p>

                                        <p class="text-[11px] text-gray-400 mt-1">
                                            Bayar kemudian
                                        </p>

                                    </div>


                                    <span
                                        class="w-5 h-5 rounded-full border-2 flex items-center justify-center shrink-0 transition-all"
                                        :class="metode === 'Hutang'
                                            ? 'border-primary'
                                            : 'border-gray-300'"
                                    >

                                        <span
                                            x-show="metode === 'Hutang'"
                                            class="w-2.5 h-2.5 rounded-full bg-primary"
                                        >
                                        </span>

                                    </span>

                                </div>

                            </button>

                        </div>

                    </div>


                    <!-- Empty State -->

                    <div
                        x-show="metode === ''"
                        x-transition
                        class="mt-4 p-4 rounded-2xl text-center"
                    >

                        <p class="text-sm font-semibold text-gray-400">
                            Pilih metode pembayaran untuk melanjutkan.
                        </p>

                    </div>


                    <!-- Tunai -->

                    <div
                        x-show="metode === 'Tunai'"
                        x-transition
                        class="mt-4"
                    >

                        <label class="text-xs font-black text-gray-500 uppercase tracking-wider">
                            Nominal Dibayar
                        </label>

                        <div class="relative mt-2">

                            <span class="absolute left-4 inset-y-0 flex items-center text-gray-400 font-bold">
                                Rp
                            </span>

                            <input
                                type="number"
                                x-model.number="nominal"
                                min="0"
                                class="w-full h-12 pl-11 pr-4 rounded-xl border border-gray-200 text-sm font-bold focus:bg-white focus:ring-2 focus:ring-primary outline-none transition-all"
                                placeholder="Masukkan nominal"
                            >

                        </div>


                        <!-- Quick Nominal -->

                        <div class="grid grid-cols-3 gap-2 mt-3">

                            <button
                                type="button"
                                @click="nominal = 70000"
                                class="h-9 rounded-lg text-xs font-bold text-gray-500 hover:bg-gray-100 transition"
                            >
                                Rp70.000
                            </button>

                            <button
                                type="button"
                                @click="nominal = 100000"
                                class="h-9 rounded-lg text-xs font-bold text-gray-500 hover:bg-gray-100 transition"
                            >
                                Rp100.000
                            </button>

                            <button
                                type="button"
                                @click="nominal = total"
                                class="h-9 rounded-lg text-xs font-bold text-gray-500 hover:bg-gray-100 transition"
                            >
                                Uang Pas
                            </button>

                        </div>


                        <!-- Kembalian -->

                        <div class="mt-4 p-4 rounded-2xl bg-primary/5 flex items-center justify-between">

                            <div>

                                <p class="text-xs font-bold text-gray-400">
                                    Kembalian
                                </p>

                                <p class="text-[11px] text-gray-400 mt-0.5">
                                    Uang kembali pelanggan
                                </p>

                            </div>

                            <span
                                class="text-xl font-black text-primary"
                                x-text="'Rp' + Math.max(0, nominal - total).toLocaleString('id-ID')"
                            >
                                Rp0
                            </span>

                        </div>

                    </div>


                    <!-- Hutang -->

                    <div
                        x-show="metode === 'Hutang'"
                        x-transition
                        class="mt-4"
                    >

                        <label class="text-xs font-black text-gray-500 uppercase tracking-wider">
                            Pelanggan
                        </label>

                        <select
                            class="w-full h-12 mt-2 px-4 rounded-xl border border-gray-200 text-sm font-bold text-gray-700 focus:bg-white focus:ring-2 focus:ring-primary outline-none transition-all"
                        >

                            <option value="" selected disabled>
                                Pilih pelanggan
                            </option>

                            <option value="Udin">
                                Udin
                            </option>

                            <option value="Jamal">
                                Jamal
                            </option>

                        </select>

                    </div>


                    <!-- Confirm -->

                    <button
                        type="button"
                        :disabled="metode === ''"
                        :class="metode === ''
                            ? 'opacity-40 cursor-not-allowed'
                            : 'hover:opacity-90 active:scale-[.98]'"
                        class="w-full h-12 mt-6 rounded-xl bg-primary text-secondary font-black flex items-center justify-center gap-2 transition-all"
                    >

                        <span>
                            Konfirmasi Pembayaran
                        </span>

                    </button>

                </div>
            </div>

        </div>

    </div>
</section>