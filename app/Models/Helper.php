<?php


namespace App\Models;


class Helper extends CoreModel
{
    public static function getActiveLanguages($languagesLocale = null)
    {
        $languages = MBLanguage_codes::where('is_active', 1)->get()->pluck('name', 'id')->toArray();
        $locale = app()->getLocale();

        if (!isset($languages[$locale])) {
            $locale = config('app.fallback_locale');

            if (!isset($languages[$locale])) {
                return $languages;
            }

        }

        $languagesLocale = [$locale => $languages[$locale]] + $languages;

        return $languagesLocale;
    }

}
