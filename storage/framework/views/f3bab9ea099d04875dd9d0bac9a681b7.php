<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>

<div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow">
    <div class="text-center mb-6">
        <div class="text-4xl mb-2">☕</div>
        <h1 class="text-2xl font-bold text-amber-700">Masuk ke CaféRate</h1>
        <p class="text-gray-500 text-sm mt-1">
            Login untuk review café favoritmu
        </p>
    </div>

    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1 text-gray-700">
                Email
            </label>
            <input
                type="email"
                name="email"
                value="<?php echo e(old('email')); ?>"
                placeholder="email@kamu.com"
                class="w-full border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-400 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1 text-gray-700">
                Password
            </label>
            <input
                type="password"
                name="password"
                placeholder="Password kamu"
                class="w-full border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-amber-400">
        </div>

        <div class="mb-6 flex items-center gap-2">
            <input type="checkbox" name="remember" id="remember" class="rounded">
            <label for="remember" class="text-sm text-gray-600">
                Ingat saya
            </label>
        </div>

        <button
            type="submit"
            class="w-full bg-amber-700 text-white py-2.5 rounded-lg hover:bg-amber-800 font-semibold transition">
            Login
        </button>
    </form>

    <p class="mt-4 text-sm text-center text-gray-600">
        Belum punya akun?
        <a href="<?php echo e(route('register')); ?>"
           class="text-amber-700 hover:underline font-semibold">
            Daftar
        </a>
    </p>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\caferate-laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>