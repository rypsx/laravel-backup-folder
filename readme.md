Laravel Backup Folder
=======================

Ce package exclusivement réservé à Laravel vous permet de copier le contenu d'un répertoire dans un autre destiné à être un backup.
Il s'agit du premier commit. Ce package a été fait en 30 minutes pour des besoins immédiats, mais sera mis à jour dans quelques jours pour une utilisation plus poussée et récursive.

## Utilisation

```php
<?php
	use Rypsx\LaravelBackupFolder\Lbf;

	require __DIR__ . '/../vendor/autoload.php';

	try {
		$source = '/data/toBackup/';
		$dest = '/data/toRestore/';
	    $lbf = new Lbf($source, $dest, true);

	} catch (\Exception $e) {
	    print $e->getMessage();
	}

	var_dump($lbf);
?>
```

## Requis

PHP5

## Composer

Je vous conseille vivement l'utilisation de [Composer](https://getcomposer.org/).
Vous pouvez ajouter ce package en tapant la commande suivante dans votre terminal :

    composer require rypsx/laravel-backup-folder

Ou en éditant le fichier `composer.json`, tel que :

    {
    "require": {
      "rypsx/\laravel-backup-folder": "^1.x"
    }
 
## Packagist

[Packagist Repo URL](https://packagist.org/packages/rypsx/laravel-backup-folder)

## License

**The MIT License (MIT)**

**Copyright (c) 2017 RypsX Dev**

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.