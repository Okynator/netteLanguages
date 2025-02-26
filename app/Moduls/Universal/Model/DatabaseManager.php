<?php
declare(strict_types=1);

namespace App\Moduls\Universal\Model;

use Nette\Database\Explorer;
use Nette\Database\Table\Selection;
use Nette\SmartObject;

class DatabaseManager extends ConstManager
{
    use SmartObject;
    public function __construct(
        protected Explorer $database,
    )
    {}

    // Vracia celú tabuľku
    public function getTable(string $tableName): Selection
    {
        return $this->database->table($tableName);
    }
}