<?php $__env->startSection('title', 'Review Café'); ?>
<?php $__env->startSection('content'); ?>

<h1 class="text-2xl font-bold mb-6 text-amber-800">💬 Semua Review</h1>

<div class="bg-white rounded-xl shadow overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-amber-50 text-amber-800 border-b">
            <tr>
                <th class="px-4 py-3 text-left">User</th>
                <th class="px-4 py-3 text-left">Café</th>
                <th class="px-4 py-3 text-left">Rating</th>
                <th class="px-4 py-3 text-left">Komentar</th>
                <th class="px-4 py-3 text-left">Foto</th>
                <th class="px-4 py-3 text-left">Tanggal</th>
                <th class="px-4 py-3 text-left">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr class="border-t hover:bg-gray-50 transition align-top">

                <td class="px-4 py-3">
                    <div class="font-medium"><?php echo e($review->user->name); ?></div>
                    <div class="text-xs text-gray-400">
                        <?php echo e($review->user->email); ?>

                    </div>
                </td>

                <td class="px-4 py-3">
                    <a href="<?php echo e(route('cafes.show', $review->cafe)); ?>"
                        target="_blank"
                        class="text-amber-700 hover:underline font-medium">
                        <?php echo e($review->cafe->name); ?>

                    </a>
                </td>

                <td class="px-4 py-3">
                    <div class="font-bold text-amber-600">
                        ⭐ <?php echo e($review->avgRating()); ?>/5
                    </div>

                    <div class="text-xs text-gray-400 mt-1 space-y-0.5">
                        <?php if($review->rating_wifi): ?>
                            <div>📶 WiFi: <?php echo e($review->rating_wifi); ?></div>
                        <?php endif; ?>

                        <?php if($review->rating_seat): ?>
                            <div>🪑 Seat: <?php echo e($review->rating_seat); ?></div>
                        <?php endif; ?>

                        <?php if($review->rating_food): ?>
                            <div>🍵 Food: <?php echo e($review->rating_food); ?></div>
                        <?php endif; ?>

                        <?php if($review->rating_ambience): ?>
                            <div>🌿 Ambience: <?php echo e($review->rating_ambience); ?></div>
                        <?php endif; ?>

                        <?php if($review->rating_price): ?>
                            <div>💰 Price: <?php echo e($review->rating_price); ?></div>
                        <?php endif; ?>
                    </div>
                </td>

                <td class="px-4 py-3 max-w-[200px]">
                    <p class="text-xs text-gray-600 line-clamp-3">
                        <?php echo e($review->comment ?: '-'); ?>

                    </p>
                </td>

                <td class="px-4 py-3">
                    <?php if($review->photos->isNotEmpty()): ?>
                        <div class="flex gap-1 flex-wrap">
                            <?php $__currentLoopData = $review->photos->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img
                                    src="<?php echo e(Storage::url($photo->photo_path)); ?>"
                                    class="w-12 h-12 object-cover rounded">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <?php if($review->photos->count() > 3): ?>
                            <p class="text-xs text-gray-400 mt-1">
                                +<?php echo e($review->photos->count() - 3); ?> lagi
                            </p>
                        <?php endif; ?>
                    <?php else: ?>
                        <span class="text-gray-400 text-xs">-</span>
                    <?php endif; ?>
                </td>

                <td class="px-4 py-3 text-xs text-gray-400">
                    <?php echo e($review->created_at->format('d M Y')); ?>

                    <br>
                    <?php echo e($review->created_at->format('H:i')); ?>

                </td>

                <td class="px-4 py-3">
                    <form method="POST"
                        action="<?php echo e(route('admin.reviews.destroy', $review)); ?>"
                        onsubmit="return confirm('Yakin hapus review ini permanen?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button
                            class="w-full bg-red-600 text-white px-3 py-1 rounded text-xs hover:bg-red-700 transition">
                            🗑 Hapus
                        </button>
                    </form>
                </td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="7" class="text-center text-gray-400 py-12">
                    Tidak ada review ditemukan.
                </td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <div class="p-4 border-t">
        <?php echo e($reviews->links()); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\caferate-laravel\resources\views/admin/reviews/index.blade.php ENDPATH**/ ?>