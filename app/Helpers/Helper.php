<?php

namespace App\Helpers;

use App\Models\Order;

use Carbon\Carbon;

class Helper
{
    public static function generateInvoiceNumber()
    {
        $prefix = 'INV';
        $dateTime = Carbon::now();
        $invDate = $dateTime->format('m').'-'.$dateTime->format('d');
        $number = self::formatNumberWithLeadingZeros(self::getLastOrderCount());

        $format = $prefix."/".$invDate."/".$number;
        return $format;
    }

    public static function getLastOrderCount()
    {
        return Order::where('order_date', Carbon::now()->format('Y-m-d'))->count()+1;
    }

    public static function formatNumberWithLeadingZeros($number, $desiredLength = 4) {
        // Mengubah angka menjadi string
        $numberString = (string)$number;
    
        // Menghitung jumlah karakter yang harus ditambahkan
        $zerosToAdd = $desiredLength - strlen($numberString);
    
        // Jika jumlah karakter yang harus ditambahkan lebih dari 0, tambahkan angka 0 di depannya
        if ($zerosToAdd > 0) {
            $numberString = str_pad($numberString, $desiredLength, '0', STR_PAD_LEFT);
        }
    
        return $numberString;
    }
}