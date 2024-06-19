<?php
function format_date_custom($date)
{
    $months = [
        '01' => 'Jan', '02' => 'Feb', '03' => 'Mar', '04' => 'Apr',
        '05' => 'Mei', '06' => 'Jun', '07' => 'Jul', '08' => 'Agu',
        '09' => 'Sep', '10' => 'Okt', '11' => 'Nov', '12' => 'Des'
    ];

    $day   = date("d", strtotime($date));
    $month = $months[date("m", strtotime($date))];
    $year  = date("y", strtotime($date));

    return $day . " " . $month . "'" . $year;
}

$date = '2024-02-03';
format_date_custom($date) // Output:  3 Feb'24
?>

<?php
function format_date_indonesia(string $date): string
{
    $dateObject = \DateTime::createFromFormat('Y-m-d', $date);
    if ($dateObject) {
        $day = $dateObject->format('d');
        $monthName = $dateObject->format('F');
        $year = $dateObject->format('Y');
        $months = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember'
        ];
        $monthName = $months[$monthName] ?? $monthName;

        return $day . ' ' . $monthName . ' ' . $year;
    } else {
        return 'Invalid date format';
    }
}

format_date_indonesia('2024-05-03'); // Output: 03 Mei 2024
?>