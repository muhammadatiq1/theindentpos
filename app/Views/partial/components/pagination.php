<?php
/**
 * Pagination Component
 * Modern pagination UI for data tables
 * 
 * Usage:
 * $pagination = [
 *     'current_page' => 1,
 *     'total_pages' => 10,
 *     'base_url' => 'items',
 *     'per_page' => 20,
 *     'total_items' => 200
 * ]
 */
?>

<?php if (($total_pages ?? 1) > 1): ?>
    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border-color);">
        <div style="font-size: 0.9rem; color: var(--text-secondary);">
            <?php
            $from = (($current_page ?? 1) - 1) * ($per_page ?? 20) + 1;
            $to = min($current_page * ($per_page ?? 20), $total_items ?? ($total_pages ?? 1) * ($per_page ?? 20));
            $total = $total_items ?? ($total_pages ?? 1) * ($per_page ?? 20);
            ?>
            <?= lang('Common.showing') ?? 'Showing' ?> <strong><?= $from ?></strong> <?= lang('Common.to') ?? 'to' ?> <strong><?= $to ?></strong> <?= lang('Common.of') ?? 'of' ?> <strong><?= $total ?></strong> <?= lang('Common.results') ?? 'results' ?>
        </div>

        <nav style="display: flex; align-items: center; gap: 0.5rem;">
            <!-- Previous Button -->
            <?php if (($current_page ?? 1) > 1): ?>
                <a href="<?= ($base_url ?? 'items') ?>?page=<?= ($current_page ?? 1) - 1 ?>" class="btn btn-sm btn-secondary">
                    <svg style="width: 1rem; height: 1rem;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <?= lang('Common.previous') ?? 'Previous' ?>
                </a>
            <?php else: ?>
                <button class="btn btn-sm btn-secondary" disabled style="opacity: 0.5; cursor: not-allowed;">
                    <svg style="width: 1rem; height: 1rem;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <?= lang('Common.previous') ?? 'Previous' ?>
                </button>
            <?php endif; ?>

            <!-- Page Numbers -->
            <div style="display: flex; align-items: center; gap: 0.25rem;">
                <?php
                $current = $current_page ?? 1;
                $total = $total_pages ?? 1;
                $start = max(1, $current - 2);
                $end = min($total, $current + 2);

                if ($start > 1) {
                    echo '<a href="' . ($base_url ?? 'items') . '?page=1" class="btn btn-sm btn-secondary" style="min-width: 2.5rem; text-align: center;">1</a>';
                    if ($start > 2) {
                        echo '<span style="padding: 0 0.5rem; color: var(--text-tertiary);">...</span>';
                    }
                }

                for ($i = $start; $i <= $end; $i++) {
                    if ($i == $current) {
                        echo '<button class="btn btn-sm btn-primary" style="min-width: 2.5rem; text-align: center;" disabled>' . $i . '</button>';
                    } else {
                        echo '<a href="' . ($base_url ?? 'items') . '?page=' . $i . '" class="btn btn-sm btn-secondary" style="min-width: 2.5rem; text-align: center;">' . $i . '</a>';
                    }
                }

                if ($end < $total) {
                    if ($end < $total - 1) {
                        echo '<span style="padding: 0 0.5rem; color: var(--text-tertiary);">...</span>';
                    }
                    echo '<a href="' . ($base_url ?? 'items') . '?page=' . $total . '" class="btn btn-sm btn-secondary" style="min-width: 2.5rem; text-align: center;">' . $total . '</a>';
                }
                ?>
            </div>

            <!-- Next Button -->
            <?php if (($current_page ?? 1) < ($total_pages ?? 1)): ?>
                <a href="<?= ($base_url ?? 'items') ?>?page=<?= ($current_page ?? 1) + 1 ?>" class="btn btn-sm btn-secondary">
                    <?= lang('Common.next') ?? 'Next' ?>
                    <svg style="width: 1rem; height: 1rem;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            <?php else: ?>
                <button class="btn btn-sm btn-secondary" disabled style="opacity: 0.5; cursor: not-allowed;">
                    <?= lang('Common.next') ?? 'Next' ?>
                    <svg style="width: 1rem; height: 1rem;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            <?php endif; ?>
        </nav>
    </div>
<?php endif; ?>
