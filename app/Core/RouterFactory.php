<?php

declare(strict_types=1);

namespace App\Core;

use App\Moduls\Universal\Model\LocalsManager;
use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

    public function __construct(
            public LocalsManager $localsManager,
    )
    {}

    public  function createRouter(): RouteList
	{
		$router = new RouteList;

        // Načítanie aktívnych jazykov z databázy
        $languages = $this->localsManager->getLanguages();
        $activeLanguages = array_filter($languages, fn ($lang) => $lang->is_active);
        $languageCodes = implode('|', array_map(fn ($lang) => $lang->code, $activeLanguages));

        // Nastavenie predvoleného jazyka
        $defaultLanguage = 'sk';

        $router->withModule('Admin')
            ->addRoute('[<lang=' . $defaultLanguage . ' ' . $languageCodes . '>/]admin/<presenter>/<action>[/<id>]', 'Dashboard:default');

        $router->withModule('User')
            ->addRoute('[<lang=' . $defaultLanguage . ' ' . $languageCodes . '>/]user/<presenter>/<action>[/<id>]', 'Home:default');

        $router->withModule('Front')
            ->addRoute('[<lang=' . $defaultLanguage . ' ' . $languageCodes . '>/]<presenter>/<action>[/<id>]', 'Home:default');
        return $router;
	}
}
