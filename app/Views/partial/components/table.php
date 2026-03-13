<?php
/**
 * Modern Data Table Component
 * Responsive table with built-in actions and styling
 * 
 * Usage:
 * $table = [
 *     'columns' => [
 *         ['key' => 'id', 'label' => 'ID', 'sortable' => true],
 *         ['key' => 'name', 'label' => 'Product Name'],
 *         ['key' => 'price', 'label' => 'Price', 'align' => 'right'],
 *         ['key' => 'status', 'label' => 'Status', 'render' => 'badge']
 *     ],
 *     'rows' => $data,
 *     'actions' => [
 *         ['icon' => 'edit', 'label' => 'Edit', 'url' => 'items/edit/'],
 *         ['icon' => 'trash', 'label' => 'Delete', 'class' => 'btn-danger']
 *     ]
 * ]
 */
?>

<div style="overflow-x: auto; border-radius: var(--radius-xl); border: 1px solid var(--border-color);">
    <table class="table" style="margin-bottom: 0;">
        <thead style="background-color: var(--surface-secondary); border-bottom: 2px solid var(--border-color);">
            <tr>
                <?php foreach ($columns ?? [] as $column): ?>
                    <th style="padding: var(--spacing-lg); text-align: <?= $column['align'] ?? 'left' ?>; font-weight: 700;">
                        <?php if ($column['sortable'] ?? false): ?>
                            <a href="#" style="color: var(--primary); text-decoration: none; cursor: pointer; display: flex; align-items: center; gap: 0.5rem;">
                                <?= $column['label'] ?>
                                <svg style="width: 1rem; height: 1rem;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        <?php else: ?>
                            <?= $column['label'] ?>
                        <?php endif; ?>
                    </th>
                <?php endforeach; ?>
                <?php if (!empty($actions ?? [])): ?>
                    <th style="padding: var(--spacing-lg); text-align: center; font-weight: 700;"><?= lang('Common.actions') ?></th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($rows ?? [])): ?>
                <tr>
                    <td colspan="<?= count($columns ?? []) + (empty($actions) ? 0 : 1) ?>" style="padding: 2rem; text-align: center; color: var(--text-tertiary);">
                        <svg style="width: 3rem; height: 3rem; margin-bottom: 1rem; opacity: 0.5;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                        </svg>
                        <p><?= lang('Common.no_data') ?? 'No data available' ?></p>
                    </td>
                </tr>
            <?php else: ?>
                <?php foreach ($rows as $row): ?>
                    <tr style="border-bottom: 1px solid var(--border-color); transition: background-color var(--transition-base);" onmouseover="this.style.backgroundColor='var(--surface-tertiary)'" onmouseout="this.style.backgroundColor='transparent'">
                        <?php foreach ($columns ?? [] as $column): ?>
                            <td style="padding: var(--spacing-lg); text-align: <?= $column['align'] ?? 'left' ?>;">
                                <?php
                                $value = $row[$column['key']] ?? '';

                                if ($column['render'] ?? false === 'badge') {
                                    $badgeColors = [
                                        'active' => ['bg' => '#ecfdf5', 'color' => '#047857'],
                                        'inactive' => ['bg' => '#fee2e2', 'color' => '#991b1b'],
                                        'pending' => ['bg' => '#fef3c7', 'color' => '#b45309'],
                                        'completed' => ['bg' => '#ecfdf5', 'color' => '#047857']
                                    ];
                                    $badgeStyle = $badgeColors[strtolower($value)] ?? ['bg' => '#f3f4f6', 'color' => '#6b7280'];
                                    echo '<span style="background-color: ' . $badgeStyle['bg'] . '; color: ' . $badgeStyle['color'] . '; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 600;">' . $value . '</span>';
                                } elseif ($column['render'] ?? false === 'currency') {
                                    echo '৳ ' . number_format($value, 2);
                                } elseif ($column['render'] ?? false === 'date') {
                                    echo date('M d, Y', strtotime($value));
                                } else {
                                    echo esc($value);
                                }
                                ?>
                            </td>
                        <?php endforeach; ?>
                        <?php if (!empty($actions ?? [])): ?>
                            <td style="padding: var(--spacing-lg); text-align: center;">
                                <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                                    <?php foreach ($actions as $action): ?>
                                        <button class="btn btn-sm btn-secondary" title="<?= $action['label'] ?>" style="width: 2rem; height: 2rem; padding: 0; border-radius: var(--radius-md);">
                                            <svg style="width: 1rem; height: 1rem;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <?php if ($action['icon'] === 'edit'): ?>
                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                <?php elseif ($action['icon'] === 'trash'): ?>
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                <?php elseif ($action['icon'] === 'eye'): ?>
                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                                <?php elseif ($action['icon'] === 'download'): ?>
                                                    <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                <?php else: ?>
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414L7.586 12l-1.293 1.293a1 1 0 001.414 1.414L9 13.414l1.293 1.293a1 1 0 001.414-1.414L10.414 12l1.293-1.293z" clip-rule="evenodd"></path>
                                                <?php endif; ?>
                                            </svg>
                                        </button>
                                    <?php endforeach; ?>
                                </div>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
