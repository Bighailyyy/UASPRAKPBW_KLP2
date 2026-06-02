<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CaféRate - <?php echo $__env->yieldContent('title', 'Temukan Café Terbaik'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<nav class="bg-amber-700 text-white px-6 py-4 flex justify-between items-center shadow-md">
    <a href="<?php echo e(route('cafes.index')); ?>" class="text-xl font-bold tracking-wide">☕ CaféRate</a>
    <div class="flex gap-4 items-center">
        <?php if(auth()->guard()->check()): ?>
            <?php if(auth()->user()->isAdmin()): ?>
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="hover:underline text-sm">Admin Panel</a>
            <?php endif; ?>
            <span class="text-sm opacity-80"><?php echo e(auth()->user()->name); ?></span>
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <button class="bg-white text-amber-700 px-3 py-1 rounded hover:bg-amber-100 text-sm font-semibold">Logout</button>
            </form>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="hover:underline text-sm">Login</a>
            <a href="<?php echo e(route('register')); ?>" class="bg-white text-amber-700 px-3 py-1 rounded hover:bg-amber-100 text-sm font-semibold">Daftar</a>
        <?php endif; ?>
    </div>
</nav>

<main class="max-w-6xl mx-auto px-4 py-8">
    <?php if(session('success')): ?>
        <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-800 rounded">
            ✅ <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <?php if(session('error')): ?>
        <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-800 rounded">
            ❌ <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>
    <?php echo $__env->yieldContent('content'); ?>
</main>

<footer class="text-center text-gray-400 text-xs py-6 mt-8 border-t">
    © <?php echo e(date('Y')); ?> CaféRate 
</footer>

</body>
</html>
<?php /**PATH C:\caferate-laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>