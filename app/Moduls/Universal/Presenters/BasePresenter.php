<?php
declare(strict_types=1);

namespace App\Moduls\Universal\Presenters;

use App\Moduls\Universal\Model\LocalsManager;
use App\Moduls\Universal\Model\MyTranslator;
use Nette\Application\Attributes\Persistent;
use Nette\Application\UI\Presenter;
use Nette\DI\Attributes\Inject;
use Nette\Localization\Translator;

class BasePresenter extends Presenter
{
    #[Persistent] public string $lang = 'sk';
    #[Inject] public Translator $translator;
    #[Inject] public LocalsManager $localsManager;

    protected function startup(): void
    {
        parent::startup();

        // Nastavenie jazyka pre MyTranslator
        if ($this->translator instanceof MyTranslator) {
            $this->translator->setLang($this->lang);
        }

        // Načítanie aktívnych jazykov a ich odovzdanie do šablóny
        $this->template->locals = $this->localsManager->getActiveLanguages();
    }

    protected function beforeRender(): void
    {
        parent::beforeRender();

        // Nastavenie $isLoggedIn pre všetky šablóny
        $this->template->isLoggedIn = $this->getUser()->isLoggedIn();


    }
}