<?php $__env->startSection('title', 'Tambah Café'); ?>
<?php $__env->startSection('content'); ?>

<div class="max-w-2xl">
    <div class="flex items-center gap-3 mb-6">
        <a href="<?php echo e(route('admin.cafes.index')); ?>" class="text-amber-700 hover:underline text-sm">← Kembali</a>
        <h1 class="text-2xl font-bold text-amber-800">🏪 Tambah Café Baru</h1>
    </div>

    <div class="bg-white rounded-xl shadow p-6">
        <form method="POST" action="<?php echo e(route('admin.cafes.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium mb-1 text-gray-700">
                        Nama Café <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="name" value="<?php echo e(old('name')); ?>"
                        placeholder="Contoh: Kopi Kenangan"
                        class="w-full border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-amber-400
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1 text-gray-700">
                        Kota <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="city" value="<?php echo e(old('city')); ?>"
                        placeholder="Contoh: Banda Aceh"
                        class="w-full border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-amber-400
                            <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 text-gray-700">
                    Alamat <span class="text-red-500">*</span>
                </label>
                <input type="text" name="address" value="<?php echo e(old('address')); ?>"
                    placeholder="Jl. Sudirman No. 10"
                    class="w-full border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-amber-400
                        <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 text-gray-700">Deskripsi</label>
                <textarea name="description" rows="3"
                    placeholder="Ceritakan tentang café ini..."
                    class="w-full border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 resize-none"><?php echo e(old('description')); ?></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium mb-1 text-gray-700">Kualitas WiFi</label>
                    <select name="wifi_quality"
                        class="w-full border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-amber-400">
                        <option value="">Pilih...</option>
                        <option value="good"   <?php if(old('wifi_quality')=='good'): echo 'selected'; endif; ?>>📶 Good</option>
                        <option value="medium" <?php if(old('wifi_quality')=='medium'): echo 'selected'; endif; ?>>📶 Medium</option>
                        <option value="bad"    <?php if(old('wifi_quality')=='bad'): echo 'selected'; endif; ?>>📶 Bad</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1 text-gray-700">Colokan Listrik</label>
                    <select name="power_outlet"
                        class="w-full border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-amber-400">
                        <option value="">Pilih...</option>
                        <option value="many" <?php if(old('power_outlet')=='many'): echo 'selected'; endif; ?>>🔌 Banyak</option>
                        <option value="few"  <?php if(old('power_outlet')=='few'): echo 'selected'; endif; ?>>🔌 Sedikit</option>
                        <option value="none" <?php if(old('power_outlet')=='none'): echo 'selected'; endif; ?>>❌ Tidak Ada</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1 text-gray-700">Tingkat Kebisingan</label>
                    <select name="noise_level"
                        class="w-full border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-amber-400">
                        <option value="">Pilih...</option>
                        <option value="quiet"    <?php if(old('noise_level')=='quiet'): echo 'selected'; endif; ?>>🤫 Quiet</option>
                        <option value="moderate" <?php if(old('noise_level')=='moderate'): echo 'selected'; endif; ?>>🔉 Moderate</option>
                        <option value="noisy"    <?php if(old('noise_level')=='noisy'): echo 'selected'; endif; ?>>🔊 Noisy</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium mb-1 text-gray-700">Harga Minimum (Rp)</label>
                    <input type="number" name="price_range_min"
                        value="<?php echo e(old('price_range_min', 0)); ?>" min="0"
                        class="w-full border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-amber-400">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1 text-gray-700">Harga Maksimum (Rp)</label>
                    <input type="number" name="price_range_max"
                        value="<?php echo e(old('price_range_max', 0)); ?>" min="0"
                        class="w-full border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-amber-400">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1 text-gray-700">Foto Thumbnail</label>
                <input type="file" name="thumbnail" accept="image/*"
                    class="block w-full text-sm text-gray-500 border rounded-lg px-3 py-2
                        file:mr-4 file:py-1 file:px-3 file:rounded file:border-0
                        file:text-sm file:font-semibold file:bg-amber-100 file:text-amber-700
                        hover:file:bg-amber-200">
                <p class="text-xs text-gray-400 mt-1">Format: JPG, PNG, max 2MB</p>
                <?php $__errorArgs = ['thumbnail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium mb-1 text-gray-700">
                    Status <span class="text-red-500">*</span>
                </label>
                <select name="status"
                    class="w-full border rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-amber-400">
                    <option value="active"   <?php if(old('status', 'active')=='active'): echo 'selected'; endif; ?>>✅ Active</option>
                    <option value="inactive" <?php if(old('status')=='inactive'): echo 'selected'; endif; ?>>❌ Inactive</option>
                </select>
            </div>

            <div class="flex gap-3 pt-2 border-t">
                <button type="submit"
                    class="bg-amber-700 text-white px-6 py-2.5 rounded-lg hover:bg-amber-800 font-semibold transition">
                    💾 Simpan Café
                </button>
                <a href="<?php echo e(route('admin.cafes.index')); ?>"
                    class="bg-gray-200 text-gray-700 px-6 py-2.5 rounded-lg hover:bg-gray-300 font-semibold transition">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\caferate-laravel\resources\views/admin/cafes/create.blade.php ENDPATH**/ ?>