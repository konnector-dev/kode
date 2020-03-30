<main id="dash" class="flex-1 relative z-0 overflow-y-auto py-6 focus:outline-none" tabindex="0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-600">Dashboard</h1>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <!-- Replace with your content -->
        <div class="py-4">
            <div class="h-96">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <!-- /End replace -->
    </div>
</main>
