<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Str;

class Helper
{
    public static function dateToString(Carbon $date)
    {
        $dateArray = array($date->shortEnglishDayOfWeek, $date->format('j F Y'));
        return implode(" ", $dateArray);
    }

    public static function findURLs($text)
    {
        $pattern = "(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})";
        return preg_replace($pattern, '<a target="_blank" href="$0"><p>$0</p></a>', $text);
    }

    public static function findMail($text)
    {
        $pattern = "/[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,64}/";
        return preg_replace($pattern, '<br><a target="_blank" href="mailto: $0"><p>$0</p></a>', $text);
    }

    public static function parseText($text)
    {
        return self::findURLs(self::findMail($text));
    }

    public static function createSlug($model, $title)
    {
        $slug = Str::slug($title);
        $count = $model::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->get()->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }

    public static function saveImage($img, $destinationPath, $imagename, $size)
    {
        $img->resize($size, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })
            ->save($destinationPath . '/' . $imagename, 90);
    }
}

