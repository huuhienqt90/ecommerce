<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';

     /**
     * Get all language codes
     *
     * @author  Hien(Hamilton) H.HO
     * @return array
     */
    public static function getAllLanguageCodes(){
        $languages = static::where('status', 'active')->get();
        $codes = [];
        foreach ($languages as $lang){
            $codes[] = $lang->code;
        }
        return $codes;
    }

    /**
     * Get default language
     *
     * @author  Hien(Hamilton) H.HO
     * @return Language object
     */
    public static function getDefaultLanguage(){
        return static::where('is_default', 1)->first();
    }

    /**
     * Get Language
     * @param  [type] $code [description]
     * @return [type]       [description]
     */
    public static function getLanguage($code) {
        $language = static::where('code', $code)->where('status','active')->first();
        return $language;
    }

    /**
     * Get all languages
     * @return [type] [description]
     */
    public static function getAllLanguages() {
        $languages = static::where('status','active')->get();
        return $languages;
    }
}
