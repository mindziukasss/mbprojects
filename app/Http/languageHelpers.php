<?php


use App\Models\MBLanguage_codes;
use Illuminate\Support\Facades\Schema;

function getActiveLanguages()
{
    if (is_null(Schema::hasTable('mb_language_codes'))) {
        return "DB is empty";
    } else {
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
