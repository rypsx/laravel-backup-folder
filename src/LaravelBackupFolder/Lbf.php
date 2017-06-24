<?php

namespace Rypsx\LaravelBackupFolder;

class Lbf
{
    /**
     * @var string
     */
    public $erreur;

    /**
     * @var string
     */
    public $folderSource;

    /**
     * @var string
     */
    public $folderDest;

    /**
     * @var bool
     */
    public $recursive;

    CONST SOURCE_INVALIDE = "Le répertoire source n'est pas valide";
    CONST DEST_INVALIDE = "Le répertoire de desstination n'est pas valide";
    /**
     * Instancie la classe en récupérant les paramètres et en appelant la fonction principale
     * @param string  $source folder source
     * @param string  $dest   destination folder
     * @param boolean $recur  recursive request
     */
    public function __construct($source, $dest, $recur = true)
    {
        $this->erreur = is_null($source) || !is_string($source) ? self::SOURCE_INVALIDE : null;
        $this->erreur = is_null($dest) || !is_string($dest) ? self::DEST_INVALIDE : null;

        if (is_null($this->erreur)) {
            return $this->erreur;
        } else {
            $this->folderSource = $source;
            $this->folderDest = $dest;
            $this->recursive = $recur;
            return $this->backup();
        }
    }

    /**
     * Formate et retourne les résultats
     * @param  $string $type Le type de résultats voulus
     * @return void
     */
    private function backup()
    {
        $files = scandir(public_path() . $this->folderSource);
        foreach($files as $num => $file) {
            if ($num > 1) {
                if (!copy(public_path() . $this->folderSource . $file, public_path() . $this->folderDest . $file)) {
                    Log::warning('Impossible de copier le fichier '.$file);
                }
            }
        }
        // Need to take in mind : $this->recursive
    }
}
