<?php
declare(strict_types=1);

namespace App\Moduls\Universal\Model;

use Nette\Database\Explorer;
use Nette\Localization\Translator;
use Nette\SmartObject;

final class MyTranslator implements Translator
{
    use SmartObject;

    public const

        TABLE_TRANSLATIONS = 'translations';

    public function __construct(
        private string $defaultLang,
        private Explorer $database,
    )
    {}

    public function setLang(string $lang): void

    {
        $this->defaultLang = $lang;
    }

    /**
     * @inheritDoc
     */
    function translate(\Stringable|string $message, ...$parameters): string|\Stringable
    {
        $lang = $this->lang ?? $this->defaultLang;

        // Nájde záznam v tabuľke pre daný kľúč a jazyk
        $translation = $this->database->table(self::TABLE_TRANSLATIONS)
            ->where('key_name', $message)
            ->where('locale', $lang)
            ->fetch();

        return $translation ? $translation->translation : $message;
    }
}