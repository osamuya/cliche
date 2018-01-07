<?php
// app/Library/CustomValidator.php
namespace app\Library;

// Datetime package "Carbon" for laravel
use Carbon\Carbon;
// for custom monolog to the app
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Illuminate\Support\Facades\Log;


class CustomValidator extends \Illuminate\Validation\Validator
{
    
    /**
     * Hiragana
     * $this->validate($request, [
            'firstname' => 'required|hiragana',
     * 全角カタカナ以外の文字列をフィルタリング
     */
    public function validateHiragana($attribute, $value, $parameters)
    {
        /* 全角ひらがなにマッチ */
        if (preg_match('/[^ぁ-んー]+$/u', $value) !== 0) {
            return false;
        } else {
            return true;
        }
    }
    
    /**
     * Katakana
     * $this->validate($request, [
            'firstname' => 'required|katakana',
     * 全角カタカナ以外の文字列をフィルタリング
     */
    public function validateKatakana($attribute, $value, $parameters)
    {
        /* 全角カタカナにマッチ */
        if (preg_match('/^[ァ-ヶー]+$/u', $value) !== 0) {
            return true;
        } else {
            return false;
        }
    }
    
    
    /**
     * Test validations
     * 2018-01-07
     *
     *
     */
    
    /* Abesouri */
    public function validateAbesouri($attribute, $value, $parameters)
    {
        /* 安倍総理だったらfalse */
        if (preg_match("/安倍総理/", $value) !== 0) {
            return false;
        }
        return true;
    }
    
    public function validateOdanobunaga($attribute, $value, $parameters)
    {
        /* 安倍総理だったらfalse */
        if (preg_match("/織田信長/", $value) !== 0) {
            return false;
        }
        return true;
    }
}