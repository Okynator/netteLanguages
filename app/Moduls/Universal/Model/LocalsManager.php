<?php
declare(strict_types=1);

namespace App\Moduls\Universal\Model;

final class LocalsManager extends DatabaseManager
{
    /**
     * Načíta aktívne jazyky.
     */
    public function getActiveLanguages(): array
    {
        return $this->getTable(self::TABLE_LANGUAGES)
            ->where('is_active', 1)
            ->fetchAll();
    }

    public function getLanguages(): array
    {
        return $this->getTable(self::TABLE_LANGUAGES)->fetchAll();
    }
}