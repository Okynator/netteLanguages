Nette Web Project
=================

Vitajte v Nette Web Projekte! Toto je základná šablóna aplikácie postavená na frameworku Nette, ideálna na rýchly štart nových webových projektov.
O projekte

Táto šablóna obsahuje:
✅ Nette framework s pripravenou štruktúrou
✅ Podporu pre viacjazyčný web
✅ Vzorové nastavenia pre databázu (obsahuje SQL súbor showbet)

Nette je známy PHP framework, oceňovaný pre svoju bezpečnosť, jednoduchosť a vysoký výkon.

Ak vám Nette pomáha, zvážte jeho podporu darom. Ďakujeme! 🚀


Requirements
------------

This Web Project is compatible with Nette 3.2 and requires PHP 8.1.


Installation
------------

To install the Web Project, Composer is the recommended tool. If you're new to Composer,
follow [these instructions](https://doc.nette.org/composer). Then, run:

	composer create-project nette/web-project path/to/install
	cd path/to/install

Ensure the `temp/` and `log/` directories are writable.


Web Server Setup
----------------

To quickly dive in, use PHP's built-in server:

	php -S localhost:8000 -t www

Then, open `http://localhost:8000` in your browser to view the welcome page.

For Apache or Nginx users, configure a virtual host pointing to your project's `www/` directory.

**Important Note:** Ensure `app/`, `config/`, `log/`, and `temp/` directories are not web-accessible.
Refer to [security warning](https://nette.org/security-warning) for more details.


Minimal Skeleton
----------------

For demonstrating issues or similar tasks, rather than starting a new project, use
this [minimal skeleton](https://github.com/nette/web-project/tree/minimal).
