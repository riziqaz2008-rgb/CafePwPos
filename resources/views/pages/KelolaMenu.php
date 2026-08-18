<section id="Barang">

    <div 
        x-data="{ 
            layoutModeToggle: $persist(true), 
            filterToggle: $persist(true), 
            TambahMenu: false, 
            FilterMenu: false, 
            filterOpen: false 
        }"
    >

        <div class="bg-white dark:bg-slate-900 mb-6">

            <div class="pb-6 border-b border-gray-100 dark:border-slate-800">

                <div class="flex flex-col xl:flex-row justify-between gap-8">

                    <div class="min-w-0 flex-1">

                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">

                            <div class="flex items-center gap-4 min-w-0">

                                <div class="hidden w-13 h-13 rounded-2xl bg-primary border border-indigo-100/80 lg:flex items-center justify-center shrink-0 shadow-sm">
                                    <i class="bx bx-bowl-hot text-2xl text-white"></i>
                                </div>

                                <div class="min-w-0">

                                    <div class="flex items-center gap-3 flex-wrap">

                                        <h1 class="text-black dark:text-white font-black text-2xl">
                                            Data Menu
                                        </h1>

                                        <span class="text-sm font-bold text-gray-600 dark:text-gray-400">
                                            ( 0 )
                                        </span>

                                    </div>

                                    <p class="text-sm text-gray-500 font-medium mt-1">
                                        Kelola daftar menu, harga, kategori, dan informasi menu cafe.
                                    </p>

                                </div>

                            </div>


                            <div class="flex items-center gap-3 shrink-0 w-full sm:w-auto">

                                <a 
                                    href="?route=menu/kategori"
                                    class="flex-1 sm:flex-none inline-flex items-center justify-center gap-2 text-gray-700 border border-gray-200 px-7 py-3.5 rounded-xl text-sm font-bold hover:bg-gray-100 active:scale-95 transition-all duration-200 whitespace-nowrap"
                                >
                                    <i class="bx bxs-book-bookmark"></i>
                                    <span>Kategori</span>
                                </a>

                                <button 
                                    type="button"
                                    @click="TambahMenu = true"
                                    class="flex-1 sm:flex-none flex items-center justify-center bg-primary text-white font-black px-5 py-3 gap-2 rounded-xl cursor-pointer whitespace-nowrap shadow-sm hover:opacity-90 transition"
                                >
                                    <span>+ Tambah Menu</span>
                                </button>

                            </div>

                        </div>


                        <div class="mt-8">

                            <div class="flex items-center gap-2 mb-3">

                                <div class="w-1.5 h-5 rounded-full bg-primary"></div>

                                <h2 class="text-sm font-black text-slate-800 dark:text-white">
                                    Pencarian & Filter
                                </h2>

                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-[180px_minmax(0,1fr)] gap-3">

                                <div class="relative">

                                    <select 
                                        id="kategori"
                                        name="kategori"
                                        class="block w-full px-4 py-3 text-sm font-bold text-gray-900 bg-white border border-gray-300 rounded-xl appearance-none focus:ring-1 focus:ring-primary focus:border-primary dark:bg-gray-800 dark:border-gray-700 dark:text-white cursor-pointer transition-all duration-200 outline-0"
                                    >
                                        <option value="Semua">
                                            Semua
                                        </option>

                                        <option value="Makanan">
                                            Makanan
                                        </option>

                                        <option value="Minuman">
                                            Minuman
                                        </option>

                                    </select>

                                    <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center">
                                        <i class="bx bx-chevron-down text-lg text-gray-400"></i>
                                    </div>

                                </div>


                                <div class="flex items-center gap-3 min-w-0">

                                    <button 
                                        type="button"
                                        @click="FilterMenu = true"
                                        class="flex items-center justify-center gap-2 px-4 py-3 rounded-xl text-sm font-bold border border-slate-300 text-slate-700 bg-white dark:bg-slate-800 dark:border-slate-700 dark:text-slate-200 hover:bg-slate-50 transition-all duration-200 shrink-0"
                                    >
                                        <i class="bx bx-filter text-lg"></i>
                                        <span>Filter</span>
                                    </button>


                                    <form 
                                        action=""
                                        method="GET"
                                        class="flex-1 min-w-0"
                                    >

                                        <div class="relative flex items-center gap-2 p-1.5 rounded-xl border-2 border-gray-200/80 dark:border-slate-700 text-slate-900 transition-all focus-within:border-primary bg-white dark:bg-slate-800 min-h-[48px] min-w-0">

                                            <?php $layoutMode = $_GET['layoutMode'] ?? 'table' ?>

                                            <div class="inline-flex items-center gap-1.5 px-2 h-8 border border-gray-200 dark:border-slate-700 rounded-full bg-slate-50/50 dark:bg-slate-900 select-none ml-1 shrink-0">

                                                <a 
                                                    href="?route=menu&layoutMode=table"
                                                    class="<?= $layoutMode == 'table' ? 'cursor-pointer text-primary' : 'cursor-pointer text-gray-400' ?> transition-colors"
                                                >
                                                    <i class="bx bxs-rows"></i>
                                                </a>

                                                <a 
                                                    href="?route=menu&layoutMode=grid"
                                                    class="<?= $layoutMode == 'grid' ? 'cursor-pointer text-primary' : 'cursor-pointer text-gray-400' ?> transition-colors"
                                                >
                                                    <i class="bx bxs-grid"></i>
                                                </a>

                                            </div>


                                            <span class="inline-block w-[1px] h-4 bg-gray-300 dark:bg-slate-700 mx-1 align-middle shrink-0"></span>


                                            <div class="flex items-center text-gray-400 shrink-0">
                                                <i class="bx bx-search text-lg"></i>
                                            </div>


                                            <div class="flex-1 min-w-0">

                                                <input 
                                                    name="search"
                                                    type="search"
                                                    id="search-dropdown"
                                                    oninput="doLiveSearch(this.value)"
                                                    class="px-1 py-0.5 bg-transparent text-slate-900 dark:text-slate-100 text-sm block w-full placeholder:text-gray-400 focus:outline-none font-medium min-w-0"
                                                    placeholder="Cari di KedaiKu..."
                                                >

                                            </div>

                                        </div>

                                    </form>


                                    <button 
                                        id="btn-hexagon"
                                        type="button"
                                        class="relative inline-flex items-center justify-center h-12 w-12 rounded-xl border-2 border-gray-200/80 dark:border-slate-700 hover:border-primary bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 hover:text-primary transition-all shrink-0 cursor-pointer group"
                                    >
                                        <i class="bx bx-hexagon text-2xl text-gray-400 group-hover:text-primary transition-colors"></i>

                                        <span class="absolute -top-1.5 -right-1.5 flex h-4 w-4 items-center justify-center rounded-full bg-primary text-[9px] font-black text-white shadow-xs">
                                            0
                                        </span>

                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <div class="pt-6">

                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-4">

                    <div>

                        <div class="flex items-center gap-2">

                            <div class="w-1.5 h-5 rounded-full bg-primary"></div>

                            <h2 class="text-sm font-black text-slate-800 dark:text-white">
                                Ringkasan Menu
                            </h2>

                        </div>

                        <p class="text-xs text-gray-400 font-medium mt-1 ml-3.5">
                            Informasi singkat mengenai data menu saat ini
                        </p>

                    </div>


                    <div class="hidden sm:flex items-center gap-2 text-xs font-bold text-gray-400">
                        <i class="bx bx-time-five"></i>
                        <span>Data saat ini</span>
                    </div>

                </div>


                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

                    <div class="group bg-primary rounded-2xl p-5 transition-all duration-200">

                        <div class="flex items-start justify-between gap-4">

                            <div class="min-w-0">

                                <p class="text-[10px] font-black text-white/70 uppercase tracking-wider">
                                    Jumlah Menu
                                </p>

                                <h3 class="text-3xl font-black text-white mt-2">
                                    0
                                </h3>

                                <p class="text-xs font-medium text-white/70 mt-1">
                                    Total seluruh menu
                                </p>

                            </div>


                            <div class="w-11 h-11 rounded-xl bg-white flex items-center justify-center shrink-0">
                                <i class="bx bxs-bowl-hot text-xl text-primary"></i>
                            </div>

                        </div>

                    </div>


                    <div class="bg-white dark:bg-slate-800 border border-gray-200/80 dark:border-slate-700 rounded-2xl p-5 transition-all duration-200 hover:ring-1 hover:ring-primary">

                        <div class="flex items-start justify-between gap-4">

                            <div class="min-w-0">

                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-wider">
                                    Kategori
                                </p>

                                <h3 class="text-2xl font-black text-gray-900 dark:text-white mt-2">
                                    0
                                </h3>

                                <p class="text-xs font-medium text-gray-400 mt-1">
                                    Kategori tersedia
                                </p>

                            </div>


                            <div class="w-11 h-11 rounded-xl bg-primary flex items-center justify-center shrink-0">
                                <i class="bx bx-book-bookmark text-xl text-secondary"></i>
                            </div>

                        </div>

                    </div>


                    <div class="bg-white dark:bg-slate-800 border border-gray-200/80 dark:border-slate-700 rounded-2xl p-5 transition-all duration-200 hover:ring-1 hover:ring-primary">

                        <div class="flex items-start justify-between gap-4">

                            <div class="min-w-0">

                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-wider">
                                    Menu Aktif
                                </p>

                                <h3 class="text-2xl font-black text-gray-900 dark:text-white mt-2">
                                    0
                                </h3>

                                <p class="text-xs font-medium text-gray-400 mt-1">
                                    Siap dijual
                                </p>

                            </div>


                            <div class="w-11 h-11 rounded-xl bg-primary flex items-center justify-center shrink-0">
                                <i class="bx bx-check-circle text-xl text-secondary"></i>
                            </div>

                        </div>

                    </div>


                    <div class="bg-white dark:bg-slate-800 border border-gray-200/80 dark:border-slate-700 rounded-2xl p-5 transition-all duration-200 hover:ring-1 hover:ring-primary">

                        <div class="flex items-start justify-between gap-4">

                            <div class="min-w-0">

                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-wider">
                                    Nonaktif
                                </p>

                                <h3 class="text-2xl font-black text-gray-900 dark:text-white mt-2">
                                    0
                                </h3>

                                <p class="text-xs font-medium text-gray-400 mt-1">
                                    Tidak tersedia
                                </p>

                            </div>


                            <div class="w-11 h-11 rounded-xl bg-primary flex items-center justify-center shrink-0">
                                <i class="bx bx-x-circle text-xl text-secondary"></i>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


       <div class="my-6 bg-white dark:bg-slate-950 min-w-0">

            <div class="overflow-y-auto overflow-x-auto p-1 max-h-[700px]">

                <div class="gap-5 min-w-0">

                    <?php if ($layoutMode == 'table'): ?>

                        <div class="w-full overflow-x-auto rounded-2xl">

                            <table
                                id="selection-table"
                                class="w-full min-w-[950px] text-sm mt-3 border border-gray-200 dark:border-slate-800 rounded-2xl overflow-hidden"
                            >

                                <thead>

                                    <tr class="dark:bg-slate-900 text-gray-400 border-b border-gray-200 dark:border-slate-800">

                                        <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">
                                            #
                                        </th>

                                        <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">
                                            Foto
                                        </th>

                                        <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">
                                            Nama
                                        </th>

                                        <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">
                                            Kategori
                                        </th>

                                        <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">
                                            Harga
                                        </th>

                                        <th class="text-center font-medium px-5 py-4 border-r border-gray-200 dark:border-slate-800">
                                            Status
                                        </th>

                                        <th class="text-center font-medium px-5 py-4">
                                            Aksi
                                        </th>

                                    </tr>

                                </thead>

                                <tbody id="body-tabel-barang">

                                    <?php if (!empty($data_barang)): ?>

                                        <?php $no = 1; ?>

                                        <?php foreach ($data_barang as $barang): ?>

                                            <tr class="text-center bg-white dark:bg-slate-950 border-b border-gray-200 dark:border-slate-800 hover:bg-gray-50/60 dark:hover:bg-slate-900/50 transition">

                                                <td class="px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                                    <div class="font-semibold text-gray-900 dark:text-slate-200">
                                                        <?= $no++ ?>
                                                    </div>

                                                </td>

                                                <td class="px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                                    <div class="w-full flex justify-center">

                                                        <div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0">

                                                            <?php
                                                            $namaGambar = trim($barang['gambar_barang']);
                                                            $imagePath = __DIR__ . '/../../../../assets/images/products/' . $namaGambar;
                                                            $imageUrl = '/assets/images/products/' . $namaGambar;
                                                            ?>

                                                            <?php if (!empty($namaGambar) && file_exists($imagePath)): ?>

                                                                <a
                                                                    href="<?= htmlspecialchars($imageUrl) ?>"
                                                                    target="_blank"
                                                                    class="block w-full h-full"
                                                                >

                                                                    <img
                                                                        src="<?= htmlspecialchars($imageUrl) ?>"
                                                                        loading="lazy"
                                                                        class="w-full h-full object-cover hover:scale-110 transition duration-300"
                                                                        alt="<?= htmlspecialchars($barang['nama_barang']) ?>"
                                                                    >

                                                                </a>

                                                            <?php else: ?>

                                                                <div class="w-full h-full flex items-center justify-center bg-gray-100 dark:bg-slate-800">

                                                                    <i class="bx bx-image text-xl text-gray-400"></i>

                                                                </div>

                                                            <?php endif; ?>

                                                        </div>

                                                    </div>

                                                </td>

                                                <td class="px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                                    <div class="flex justify-center items-center gap-2 px-2">

                                                        <span class="text-sm font-bold text-center text-gray-800 dark:text-slate-200 line-clamp-2 leading-snug">
                                                            <?= htmlspecialchars($barang['nama_barang']) ?>
                                                        </span>

                                                    </div>

                                                </td>

                                                <td class="px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                                    <div class="inline-flex items-center gap-2 font-semibold text-gray-700 dark:text-slate-200">

                                                        <div class="flex items-center gap-2 px-6 py-2 rounded-lg dark:bg-slate-900">

                                                            <span class="w-2 h-2 rounded-full bg-primary"></span>

                                                            <div class="text-primary whitespace-nowrap">
                                                                <?= htmlspecialchars($barang['kategori_barang']) ?>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </td>

                                                
                                                <td class="px-5 py-4 border-r border-gray-200 dark:border-slate-800">
                                                    
                                                    <span class="text-slate-900 dark:text-slate-200 font-medium whitespace-nowrap">
                                                        Rp <?= number_format($barang['harga_barang'], 0, ',', '.') ?>
                                                    </span>
                                                    
                                                </td>
                                                
                                                <td class="px-5 py-4 border-r border-gray-200 dark:border-slate-800">

                                                    <div class="inline-flex items-center gap-2 font-semibold text-gray-700 dark:text-slate-200">

                                                        <div class="flex items-center gap-2 px-6 py-2 rounded-lg bg-primary dark:bg-slate-900">

                                                            <div class="text-white whitespace-nowrap">
                                                                Aktif
                                                            </div>

                                                        </div>

                                                    </div>

                                                </td>

                                                <td class="px-5 py-4">

                                                    <div class="flex justify-center items-center gap-2 shrink-0">

                                                        <a
                                                            href="edit.php?id=<?= $barang['id'] ?? '' ?>"
                                                            class="flex items-center justify-center p-3 bg-primary text-white rounded-xl hover:opacity-85 active:scale-95 transition"
                                                            title="Edit Data"
                                                        >
                                                            <i class="bx bxs-pencil text-xl"></i>
                                                        </a>

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

                                        <?php endforeach; ?>

                                    <?php else: ?>

                                        <tr>

                                            <td colspan="7">

                                                <div class="w-full flex flex-col justify-center items-center gap-y-3 p-20 text-gray-500/80">

                                                    <i class="bx bx-bowl-hot text-7xl"></i>

                                                    <h1 class="font-black">
                                                        Data Kosong
                                                    </h1>

                                                </div>

                                            </td>

                                        </tr>

                                    <?php endif; ?>

                                </tbody>

                            </table>

                        </div>

                    <?php elseif ($layoutMode == 'grid'): ?>

                        <div
                            id="grid-barang"
                            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-3"
                        >

                            <?php if (!empty($data_barang)): ?>

                                <?php foreach ($data_barang as $barang): ?>

                                  <div class="bg-white dark:bg-slate-900 p-5 flex flex-col justify-between transition-colors duration-200 min-w-0">

                                    <div class="min-w-0">

                                        <?php 
                                        $namaGambar = trim($barang['gambar_barang']); 
                                        $imagePath = __DIR__ . '/../../../../assets/images/products/' . $namaGambar; 
                                        $imageUrl = '/assets/images/products/' . $namaGambar; 
                                        ?>

                                        <div class="relative w-full h-48 overflow-hidden rounded-xl mb-3 bg-gray-100 dark:bg-slate-800">

                                            <?php if (!empty($namaGambar) && file_exists($imagePath)): ?>

                                                <img 
                                                    src="<?= htmlspecialchars($imageUrl) ?>" 
                                                    loading="lazy" 
                                                    class="w-full h-48 object-cover" 
                                                    alt="<?= htmlspecialchars($barang['nama_barang']) ?>" 
                                                >

                                            <?php else: ?>

                                                <div class="w-full h-full flex items-center justify-center">

                                                    <i class="bx bx-image text-4xl text-gray-300 dark:text-slate-600"></i>

                                                </div>

                                            <?php endif; ?>

                                            <div class="absolute top-2.5 right-2.5 bg-primary text-white text-sm font-bold px-3 py-1.5 rounded-lg flex items-center gap-1.5 shadow max-w-[calc(100%-1.25rem)]">

                                                <span class="w-2 h-2 rounded-full bg-white shrink-0"></span>

                                                <span class="truncate">
                                                    <?= htmlspecialchars($barang['kategori_barang']); ?>
                                                </span>

                                            </div>

                                        </div>

                                        <h2 class="font-black text-slate-900 dark:text-white line-clamp-1 mb-1 text-lg leading-snug">
                                            <?= htmlspecialchars($barang['nama_barang']); ?>
                                        </h2>


                                        <div class="flex items-center gap-2 mt-2">

                                            <span class="w-2 h-2 rounded-full bg-primary"></span>

                                            <span class="text-xs font-black text-primary">
                                                Aktif
                                            </span>

                                        </div>

                                    </div>


                                    <div class="mt-3">

                                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-3 border-t border-gray-100 dark:border-slate-800">

                                            <div class="min-w-0">

                                                <span class="text-[11px] text-slate-400 dark:text-slate-500 block uppercase font-bold tracking-wider mb-0.5">
                                                    Harga
                                                </span>

                                                <span class="text-xl font-black text-slate-900 dark:text-white whitespace-nowrap tracking-tight">
                                                    Rp <?= number_format($barang['harga_barang'], 0, ',', '.') ?>
                                                </span>

                                            </div>


                                            <div class="flex items-center gap-2 shrink-0 w-full sm:w-auto">

                                                <a 
                                                    href="edit.php?id=<?= $barang['id'] ?? '' ?>" 
                                                    class="flex-1 sm:flex-none items-center justify-center p-3 bg-primary text-white rounded-xl hover:opacity-85 active:scale-95 transition flex" 
                                                    title="Edit Data" 
                                                >
                                                    <i class="bx bxs-pencil text-xl"></i>
                                                </a>

                                                <button 
                                                    type="button" 
                                                    class="flex-1 sm:flex-none items-center justify-center p-3 bg-red-500 text-white rounded-xl hover:opacity-85 active:scale-95 transition flex" 
                                                    title="Hapus Data" 
                                                >
                                                    <i class="bx bxs-trash text-xl"></i>
                                                </button>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <?php endforeach; ?>

                            <?php else: ?>

                                <div class="col-span-full w-full flex flex-col justify-center items-center gap-y-3 p-20 text-slate-400 dark:text-slate-600">

                                    <i class="bx bx-bowl-hot text-7xl font-light"></i>

                                    <h1 class="font-bold text-base text-slate-400 dark:text-slate-500">
                                        Data Kosong
                                    </h1>

                                </div>

                            <?php endif; ?>

                        </div>

                    <?php endif; ?>

                </div>

            </div>


            <div class="w-full flex justify-center mt-6 px-2 overflow-x-auto">

                <nav
                    aria-label="Pagination"
                    class="max-w-full"
                >

                    <ul class="w-fit min-w-max flex bg-white dark:bg-slate-900 text-sm p-2 px-4 gap-2 rounded-full">

                        <li>

                            <a
                                href="?page=1"
                                class="hidden sm:flex items-center justify-center rounded-full px-4 h-10 font-medium transition-all pointer-events-none opacity-50 cursor-not-allowed"
                            >
                                Previous
                            </a>

                        </li>

                        <li>

                            <a
                                href="?page=1"
                                class="flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white font-bold"
                            >
                                1
                            </a>

                        </li>

                        <li>

                            <a
                                href="?page=1"
                                class="hidden sm:flex items-center justify-center rounded-full px-4 h-10 font-medium transition-all pointer-events-none opacity-50 cursor-not-allowed"
                            >
                                Next
                            </a>

                        </li>

                    </ul>

                </nav>

            </div>

        </div>


        <div 
            x-show="TambahMenu"
            x-cloak
            @keydown.escape.window="TambahMenu = false"
            class="fixed inset-0 z-999 flex justify-center items-start sm:items-center w-full p-3 sm:p-4 overflow-y-auto"
        >

            <div 
                x-show="TambahMenu"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-slate-950/60 backdrop-blur-[2px]"
                @click="TambahMenu = false"
            ></div>


            <div 
                x-show="TambahMenu"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-95 translate-y-2"
                class="relative p-0 sm:p-4 w-full max-w-5xl max-h-full z-10 my-auto"
            >

                <div class="relative bg-white border border-gray-200 rounded-xl shadow-sm p-4 md:p-6 md:px-12 max-h-[calc(100vh-1.5rem)] sm:max-h-[calc(100vh-2rem)] overflow-y-auto">

                    <div class="my-5 sm:my-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">

                        <div class="flex items-center gap-4 min-w-0">

                            <div class="hidden w-13 h-13 rounded-2xl bg-primary border border-indigo-100/80 lg:flex items-center justify-center shrink-0 shadow-sm">
                                <i class="bx bx-bowl-hot text-2xl text-white"></i>
                            </div>

                            <div class="min-w-0">

                                <div class="flex items-center gap-3 flex-wrap">

                                    <h1 class="text-black dark:text-white font-black text-2xl">
                                        Tambah Menu
                                    </h1>

                                    <span class="text-sm font-bold text-gray-600 dark:text-gray-400">
                                        ( 0 )
                                    </span>

                                </div>

                                <p class="text-sm text-gray-500 font-medium mt-1">
                                    Kelola daftar menu, harga, kategori, dan informasi menu cafe.
                                </p>

                            </div>

                        </div>


                        <button 
                            type="button"
                            @click="TambahMenu = false"
                            class="flex items-center justify-center w-11 h-11 rounded-full bg-primary text-white font-black cursor-pointer hover:bg-blue-700 transition shrink-0"
                        >
                            <span>X</span>
                        </button>

                    </div>


                    <form 
                        action=""
                        method="POST"
                        enctype="multipart/form-data"
                        class="w-full my-4"
                    >

                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-x-6 gap-y-5">

                            <div class="flex flex-col gap-1.5 w-full min-w-0">

                                <label 
                                    for="namaBarang"
                                    class="text-xs font-bold uppercase tracking-wide text-gray-600 ml-1"
                                >
                                    Nama Menu <span class="text-red-500">*</span>
                                </label>

                                <div class="relative flex items-center w-full group">

                                    <div class="absolute left-3.5 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors duration-200">
                                        <i class="bx bx-price-tag-alt text-xl"></i>
                                    </div>

                                    <input 
                                        type="text"
                                        name="namaBarang"
                                        id="namaBarang"
                                        placeholder="Contoh: Nasi Goreng Special"
                                        autocomplete="off"
                                        class="w-full pl-11 pr-4 py-3 bg-white text-slate-900 text-sm font-medium rounded-2xl border-2 border-gray-200/80 focus:outline-none focus:border-primary"
                                        required
                                    >

                                </div>

                            </div>


                            <div class="flex flex-col gap-1.5 w-full min-w-0">

                                <label 
                                    for="hargaJual"
                                    class="text-xs font-bold uppercase tracking-wide text-gray-600 ml-1"
                                >
                                    Harga Jual (Rp) <span class="text-red-500">*</span>
                                </label>

                                <div class="relative flex items-center w-full group">

                                    <div class="absolute left-3.5 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors duration-200">
                                        <i class="bx bx-coin text-xl"></i>
                                    </div>

                                    <input 
                                        type="text"
                                        inputmode="numeric"
                                        name="hargaBarang"
                                        id="hargaJual"
                                        placeholder="Contoh: 50000"
                                        autocomplete="off"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                        class="w-full pl-11 pr-4 py-3 bg-white text-slate-900 text-sm font-medium rounded-2xl border-2 border-gray-200/80 focus:outline-none focus:border-primary"
                                        required
                                    >

                                </div>

                            </div>


                            <div class="flex flex-col gap-1.5 w-full min-w-0">

                                <label 
                                    for="kategoriTambah"
                                    class="text-xs font-bold uppercase tracking-wide text-gray-600 ml-1"
                                >
                                    Kategori <span class="text-red-500">*</span>
                                </label>

                                <div class="relative flex items-center w-full group">

                                    <div class="absolute left-3.5 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors duration-200 z-10">
                                        <i class="bx bx-filter text-xl"></i>
                                    </div>

                                    <select 
                                        name="kategoriBarang"
                                        id="kategoriTambah"
                                        required
                                        class="w-full pl-11 pr-10 py-3 bg-white text-slate-900 text-sm font-medium rounded-2xl border-2 border-gray-200/80 focus:outline-none focus:border-primary appearance-none cursor-pointer"
                                    >

                                        <option value="" disabled selected>
                                            Pilih Kategori Menu
                                        </option>

                                        <option value="makanan">
                                            Makanan
                                        </option>

                                        <option value="minuman">
                                            Minuman
                                        </option>

                                    </select>

                                    <div class="absolute right-3.5 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors duration-200">
                                        <i class="bx bx-chevron-down text-xl"></i>
                                    </div>

                                </div>

                            </div>


                            <div class="flex flex-col gap-1.5 w-full group col-span-1 lg:col-span-2 xl:col-span-3 min-w-0">

                                <label 
                                    for="deskripsi"
                                    class="text-xs font-bold uppercase tracking-wide text-gray-600 ml-1"
                                >
                                    Deskripsi & Catatan
                                </label>

                                <div class="relative flex w-full h-full">

                                    <div class="absolute left-3.5 top-3.5 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors duration-200">
                                        <i class="bx bx-info-octagon text-xl"></i>
                                    </div>

                                    <textarea 
                                        name="deskripsiBarang"
                                        id="deskripsi"
                                        rows="3"
                                        placeholder="Tambahkan deskripsi menu..."
                                        class="w-full pl-11 pr-4 py-3 bg-white text-slate-900 text-sm font-medium rounded-2xl border-2 border-gray-200/80 focus:outline-none focus:border-primary resize-y"
                                    ></textarea>

                                </div>

                            </div>


                            <div class="flex flex-col gap-1.5 w-full col-span-1 lg:col-span-2 xl:col-span-3 min-w-0">

                                <label class="text-xs font-bold uppercase tracking-wide text-gray-600 ml-1">
                                    Foto Menu
                                </label>

                                <label 
                                    for="gambarBarang"
                                    class="relative border-2 border-dashed border-gray-200/90 hover:border-primary group transition-all duration-200 rounded-2xl p-8 flex flex-col items-center justify-center cursor-pointer text-center bg-gray-50/40 hover:bg-gray-50/90 overflow-hidden"
                                >

                                    <div class="flex flex-col items-center justify-center gap-3">

                                        <div class="w-12 h-12 text-white bg-primary rounded-xl flex items-center justify-center">
                                            <i class="bx bx-image-no-background text-2xl"></i>
                                        </div>

                                        <div>

                                            <p class="font-bold text-sm text-slate-800">
                                                Upload Foto Menu
                                            </p>

                                            <p class="text-gray-400 text-xs mt-0.5">
                                                JPG, PNG, WEBP (Maks. 2MB)
                                            </p>

                                        </div>

                                    </div>


                                    <input 
                                        type="file"
                                        id="gambarBarang"
                                        name="gambarBarang"
                                        class="hidden"
                                        accept="image/jpeg,image/png,image/webp"
                                    >

                                </label>

                            </div>

                        </div>


                        <div class="w-full flex flex-col-reverse sm:flex-row justify-end my-6 pt-4 border-t border-gray-100 gap-3">

                            <button 
                                type="button"
                                @click="TambahMenu = false"
                                class="flex items-center justify-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold px-6 py-3 gap-2 rounded-2xl cursor-pointer transition-all active:scale-95 w-full sm:w-auto"
                            >
                                <span>Batal</span>
                            </button>


                            <button 
                                type="submit"
                                class="flex items-center justify-center bg-primary hover:bg-primary/90 text-white font-black px-6 py-3 gap-2 rounded-2xl cursor-pointer transition-all active:scale-95 w-full sm:w-auto"
                            >
                                <i class="bx bx-save text-lg"></i>
                                <span>Simpan Menu</span>
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>


        <div 
            x-show="FilterMenu"
            x-cloak
            @keydown.escape.window="FilterMenu = false"
            class="fixed inset-0 z-999 flex justify-center items-start sm:items-center w-full p-3 sm:p-4 overflow-y-auto"
        >

            <div 
                x-show="FilterMenu"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-slate-950/60 backdrop-blur-[2px]"
                @click="FilterMenu = false"
            ></div>


            <div 
                x-show="FilterMenu"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-95 translate-y-2"
                class="relative p-0 sm:p-4 w-full max-w-5xl max-h-full z-10 my-auto"
            >

                <div class="relative bg-white border border-gray-200 rounded-xl shadow-sm p-4 md:p-6 md:px-12 max-h-[calc(100vh-1.5rem)] sm:max-h-[calc(100vh-2rem)] overflow-y-auto">

                    <div class="my-5 sm:my-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">

                        <div class="flex items-center gap-4 min-w-0">

                            <div class="hidden w-13 h-13 rounded-2xl bg-primary border border-indigo-100/80 lg:flex items-center justify-center shrink-0 shadow-sm">
                                <i class="bx bx-bowl-hot text-2xl text-white"></i>
                            </div>


                            <div class="min-w-0">

                                <div class="flex items-center gap-3 flex-wrap">

                                    <h1 class="text-black dark:text-white font-black text-2xl">
                                        Filter Menu
                                    </h1>

                                    <span class="text-sm font-bold text-gray-600 dark:text-gray-400">
                                        ( 0 )
                                    </span>

                                </div>

                                <p class="text-sm text-gray-500 font-medium mt-1">
                                    Filter harga menu cafe.
                                </p>

                            </div>

                        </div>


                        <button 
                            type="button"
                            @click="FilterMenu = false"
                            class="flex items-center justify-center w-11 h-11 rounded-full bg-primary text-white font-black cursor-pointer hover:bg-blue-700 transition shrink-0"
                        >
                            <span>X</span>
                        </button>

                    </div>


                    <form 
                        action=""
                        method="GET"
                        class="w-full my-4"
                    >

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-6 gap-y-5">

                            <div class="flex flex-col gap-1.5 w-full min-w-0">

                                <label 
                                    for="hargaMinimum"
                                    class="text-xs font-bold uppercase tracking-wide text-gray-600 ml-1"
                                >
                                    Harga Minimum
                                </label>

                                <div class="relative flex items-center w-full group">

                                    <div class="absolute left-3.5 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors duration-200">
                                        <i class="bx bx-coin text-xl"></i>
                                    </div>

                                    <input 
                                        type="text"
                                        inputmode="numeric"
                                        name="harga_min"
                                        id="hargaMinimum"
                                        placeholder="Contoh: 10000"
                                        autocomplete="off"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                        class="w-full pl-11 pr-4 py-3 bg-white text-slate-900 text-sm font-medium rounded-2xl border-2 border-gray-200/80 focus:outline-none focus:border-primary"
                                    >

                                </div>

                            </div>


                            <div class="flex flex-col gap-1.5 w-full min-w-0">

                                <label 
                                    for="hargaMaksimum"
                                    class="text-xs font-bold uppercase tracking-wide text-gray-600 ml-1"
                                >
                                    Harga Maksimum
                                </label>

                                <div class="relative flex items-center w-full group">

                                    <div class="absolute left-3.5 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors duration-200">
                                        <i class="bx bx-coin text-xl"></i>
                                    </div>

                                    <input 
                                        type="text"
                                        inputmode="numeric"
                                        name="harga_max"
                                        id="hargaMaksimum"
                                        placeholder="Contoh: 50000"
                                        autocomplete="off"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                        class="w-full pl-11 pr-4 py-3 bg-white text-slate-900 text-sm font-medium rounded-2xl border-2 border-gray-200/80 focus:outline-none focus:border-primary"
                                    >

                                </div>

                            </div>

                        </div>


                        <div class="w-full flex flex-col-reverse sm:flex-row justify-end my-6 pt-4 border-t border-gray-100 gap-3">

                            <button 
                                type="button"
                                @click="FilterMenu = false"
                                class="flex items-center justify-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold px-6 py-3 gap-2 rounded-2xl cursor-pointer transition-all active:scale-95 w-full sm:w-auto"
                            >
                                <span>Batal</span>
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