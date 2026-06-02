<?php $__env->startSection('title', 'Kelola Café'); ?>
<?php $__env->startSection('content'); ?>

<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-amber-800">🏪 Kelola Café</h1>
    <a href="<?php echo e(route('admin.cafes.create')); ?>"
        class="bg-amber-700 text-white px-4 py-2 rounded-lg hover:bg-amber-800 font-semibold transition">
        + Tambah Café
    </a>
</div>

<div class="bg-white rounded-xl shadow overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-amber-50 text-amber-800 border-b">
            <tr>
                <th class="px-4 py-3 text-left">Nama</th>
                <th class="px-4 py-3 text-left">Kota</th>
                <th class="px-4 py-3 text-left">WiFi</th>
                <th class="px-4 py-3 text-left">Outlet</th>
                <th class="px-4 py-3 text-left">Status</th>
                <th class="px-4 py-3 text-left">Review</th>
                <th class="px-4 py-3 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $cafes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cafe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr class="border-t hover:bg-gray-50 transition">
                <td class="px-4 py-3">
                    <div class="flex items-center gap-3">
                        <?php if($cafe->thumbnail): ?>
                            <img src="<?php echo e(Storage::url($cafe->thumbnail)); ?>"
                                class="w-10 h-10 rounded-lg object-cover">
                        <?php else: ?>
                            <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center">☕</div>
                        <?php endif; ?>
                        <div>
                            <div class="font-medium text-gray-800"><?php echo e($cafe->name); ?></div>
                            <div class="text-xs text-gray-400 truncate max-w-[180px]"><?php echo e($cafe->address); ?></div>
                        </div>
                    </div>
                </td>
                <td class="px-4 py-3 text-gray-500"><?php echo e($cafe->city); ?></td>
                <td class="px-4 py-3">
                    <?php if($cafe->wifi_quality): ?>
                        <span class="px-2 py-0.5 rounded-full text-xs
                            <?php if($cafe->wifi_quality === 'good'): ?> bg-green-100 text-green-700
                            <?php elseif($cafe->wifi_quality === 'medium'): ?> bg-yellow-100 text-yellow-700
                            <?php else: ?> bg-red-100 text-red-700 <?php endif; ?>">
                            <?php echo e(ucfirst($cafe->wifi_quality)); ?>

                        </span>
                    <?php else: ?>
                        <span class="text-gray-400">-</span>
                    <?php endif; ?>
                </td>
                <td class="px-4 py-3 text-gray-600"><?php echo e(ucfirst($cafe->power_outlet ?? '-')); ?></td>
                <td class="px-4 py-3">
                    <span class="px-2 py-0.5 rounded-full text-xs font-medium
                        <?php if($cafe->status === 'active'): ?> bg-green-100 text-green-700
                        <?php else: ?> bg-red-100 text-red-700 <?php endif; ?>">
                        <?php echo e(ucfirst($cafe->status)); ?>

                    </span>
                </td>
                <td class="px-4 py-3 text-amber-700 font-semibold"><?php echo e($cafe->reviews_count); ?></td>
                <td class="px-4 py-3">
                    <div class="flex gap-2">
                        <a href="<?php echo e(route('cafes.show', $cafe)); ?>" target="_blank"
                            class="bg-gray-100 text-gray-700 px-3 py-1 rounded text-xs hover:bg-gray-200 transition">
                            Lihat
                        </a>
                        <a href="<?php echo e(route('admin.cafes.edit', $cafe)); ?>"
                            class="bg-blue-600 text-white px-3 py-1 rounded text-xs hover:bg-blue-700 transition">
                            Edit
                        </a>
                        <form method="POST" action="<?php echo e(route('admin.cafes.destroy', $cafe)); ?>"
                            onsubmit="return confirm('Yakin ingin menghapus café <?php echo e($cafe->name); ?>? Semua review juga akan terhapus.')">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button class="bg-red-600 text-white px-3 py-1 rounded text-xs hover:bg-red-700 transition">
                                Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="7" class="text-center text-gray-400 py-12">
                    Belum ada café. <a href="<?php echo e(route('admin.cafes.create')); ?>" class="text-amber-600 hover:underline">Tambah sekarang</a>
                </td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <div class="p-4 border-t"><?php echo e($cafes->links()); ?></div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\caferate-laravel\resources\views/admin/cafes/index.blade.php ENDPATH**/ ?>