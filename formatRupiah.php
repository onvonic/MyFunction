<?php
function formatRupiah(int $amount): string
{
    $formattedAmount = number_format($amount, 2, ',', '.');
    return 'Rp ' . $formattedAmount;
}

formatRupiah(253000); // Output: Rp 253.000,00
