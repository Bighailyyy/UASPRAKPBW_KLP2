<?php $__env->startSection('title', 'Daftar Café'); ?>
<?php $__env->startSection('content'); ?>

<div class="mb-6">
    <h1 class="text-3xl font-bold text-amber-800">Temukan Café Favoritmu ☕</h1>
    <p class="text-gray-500 mt-1">Cari tempat nongkrong terbaik berdasarkan kebutuhanmu</p>
</div>


<form method="GET" action="<?php echo e(route('cafes.index')); ?>"
    class="bg-white p-4 rounded-xl shadow mb-6 flex flex-wrap gap-3 items-end">

    <div class="flex-1 min-w-[150px]">
        <label class="block text-xs font-medium text-gray-500 mb-1">Café</label>
        <input type="text" name="search" placeholder="Cari nama cafe..." ...
            value="<?php echo e(request('search')); ?>"
            class="w-full border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-amber-400">
    </div>

    <div>
        <label class="block text-xs font-medium text-gray-500 mb-1">WiFi</label>
        <select name="wifi" class="border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-amber-400">
            <option value="">Semua</option>
            <option value="good"   <?php if(request('wifi')=='good'): echo 'selected'; endif; ?>>📶 Good</option>
            <option value="medium" <?php if(request('wifi')=='medium'): echo 'selected'; endif; ?>>📶 Medium</option>
            <option value="bad"    <?php if(request('wifi')=='bad'): echo 'selected'; endif; ?>>📶 Bad</option>
        </select>
    </div>

    <div>
        <label class="block text-xs font-medium text-gray-500 mb-1">Kebisingan</label>
        <select name="noise" class="border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-amber-400">
            <option value="">Semua</option>
            <option value="quiet"    <?php if(request('noise')=='quiet'): echo 'selected'; endif; ?>>🤫 Quiet</option>
            <option value="moderate" <?php if(request('noise')=='moderate'): echo 'selected'; endif; ?>>🔉 Moderate</option>
            <option value="noisy"    <?php if(request('noise')=='noisy'): echo 'selected'; endif; ?>>🔊 Noisy</option>
        </select>
    </div>

    <div>
        <label class="block text-xs font-medium text-gray-500 mb-1">Colokan</label>
        <select name="outlet" class="border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-amber-400">
            <option value="">Semua</option>
            <option value="many" <?php if(request('outlet')=='many'): echo 'selected'; endif; ?>>🔌 Banyak</option>
            <option value="few"  <?php if(request('outlet')=='few'): echo 'selected'; endif; ?>>🔌 Sedikit</option>
            <option value="none" <?php if(request('outlet')=='none'): echo 'selected'; endif; ?>>❌ Tidak Ada</option>
        </select>
    </div>

    <div class="flex gap-2">
        <button type="submit"
            class="bg-amber-700 text-white px-4 py-2 rounded-lg hover:bg-amber-800 text-sm font-semibold transition">
            🔍 Filter
        </button>
        <a href="<?php echo e(route('cafes.index')); ?>"
            class="bg-gray-100 text-gray-600 px-4 py-2 rounded-lg hover:bg-gray-200 text-sm transition">
            Reset
        </a>
    </div>
</form>


<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php $__empty_1 = true; $__currentLoopData = $cafes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cafe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <a href="<?php echo e(route('cafes.show', $cafe)); ?>"
        class="bg-white rounded-xl shadow hover:shadow-lg transition-all overflow-hidden group">

        <?php if($cafe->thumbnail): ?>
            <img src="<?php echo e(Storage::url($cafe->thumbnail)); ?>"
                class="w-full h-44 object-cover group-hover:scale-105 transition-transform duration-300"
                alt="<?php echo e($cafe->name); ?>">
        <?php else: ?>
            <div class="w-full h-44 bg-gradient-to-br from-amber-100 to-amber-200
                flex items-center justify-center text-5xl">
                ☕
            </div>
        <?php endif; ?>

        <div class="p-4">
            <h2 class="font-bold text-lg text-amber-900 group-hover:text-amber-700 transition">
                <?php echo e($cafe->name); ?>

            </h2>
            <p class="text-sm text-gray-500 mb-3">📍 <?php echo e($cafe->city); ?></p>

            <div class="flex gap-2 flex-wrap text-xs mb-3">
                <?php if($cafe->wifi_quality): ?>
                    <span class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">
                        📶 <?php echo e(ucfirst($cafe->wifi_quality)); ?>

                    </span>
                <?php endif; ?>
                <?php if($cafe->noise_level): ?>
                    <span class="bg-yellow-100 text-yellow-700 px-2 py-0.5 rounded-full">
                        🔊 <?php echo e(ucfirst($cafe->noise_level)); ?>

                    </span>
                <?php endif; ?>
                <?php if($cafe->power_outlet): ?>
                    <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded-full">
                        🔌 <?php echo e(ucfirst($cafe->power_outlet)); ?>

                    </span>
                <?php endif; ?>
            </div>

            <div class="flex justify-between items-center text-xs text-gray-400">
                <span><?php echo e($cafe->approved_reviews_count); ?> review</span>
                <span class="text-amber-600 font-semibold">⭐ <?php echo e($cafe->avgRating() ?: '-'); ?>/5</span>
            </div>

            <?php if($cafe->price_range_min > 0): ?>
            <p class="text-xs text-gray-400 mt-1">
                💰 Rp <?php echo e(number_format($cafe->price_range_min, 0, ',', '.')); ?>

                – Rp <?php echo e(number_format($cafe->price_range_max, 0, ',', '.')); ?>

            </p>
            <?php endif; ?>
        </div>
    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="col-span-3 text-center py-20 text-gray-400">
        <div class="text-5xl mb-3">🔍</div>
        <p class="text-lg">Tidak ada café ditemukan.</p>
        <a href="<?php echo e(route('cafes.index')); ?>" class="text-amber-600 hover:underline text-sm mt-2 block">
            Reset filter
        </a>
    </div>
    <?php endif; ?>
</div>

<div class="mt-8"><?php echo e($cafes->withQueryString()->links()); ?></div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\caferate-laravel\resources\views/cafes/index.blade.php ENDPATH**/ ?>