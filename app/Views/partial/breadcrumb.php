<?php
/**
 * Breadcrumb Navigation Component
 * Displays breadcrumb trail for page navigation
 */
?>

<?php if (isset($breadcrumb) && !empty($breadcrumb)): ?>
    <div class="breadcrumb">
        <a href="<?= base_url('home') ?>" class="breadcrumb-item">
            <svg style="width: 1rem; height: 1rem; vertical-align: -0.125em; margin-right: 0.25rem;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
            </svg>
            <?= lang('Common.home') ?>
        </a>
        <span class="breadcrumb-separator">/</span>

        <?php foreach ($breadcrumb as $index => $item): ?>
            <?php if ($index === count($breadcrumb) - 1): ?>
                <span class="breadcrumb-item active"><?= $item['label'] ?></span>
            <?php else: ?>
                <a href="<?= $item['url'] ?? '#' ?>" class="breadcrumb-item"><?= $item['label'] ?></a>
                <span class="breadcrumb-separator">/</span>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
