<?php

require('vendor/autoload.php');
require('workflows.php');

use ChrisKonnertz\DeepLy\DeepLy;

class Translate {
    private $targetLanguage;
    private $sourceLanguage;
    
    function __construct($targetLanguage) {
        $this->deepLy = new DeepLy();
        $this->targetLanguage = $targetLanguage;
    }

    function getSourceLanguage() {
        $tokens = explode(' ', $this->input);

        if ($tokens[0]
            && strlen($tokens[0]) > 0
            && $this->deepLy->supportsLangCode(strtoupper($tokens[0]))
        ) {
            $lang = strtoupper($tokens[0]);
            array_shift($tokens);

            $this->input = implode(' ', $tokens);
            return strtoupper($lang);
        }

        return DeepLy::LANG_AUTO;
    }

	function getTranslations($input) {
        $this->input = $input;
        $w = new Workflows("xiphe.alfed.deepl");

        try {
            $sourceLanguage = $this->getSourceLanguage();
            $translations = $this->deepLy->proposeTranslations($this->input, $this->targetLanguage, $sourceLanguage);
            $bag = $this->deepLy->getTranslationBag();
            $detectedSourceLanguage = $bag->getSourceLanguage();
            $targetLanguage = $bag->getTargetLanguage();

            $subtext = $this->input;

            if ($targetLanguage !== $this->targetLanguage) {
                throw new Exception('Failed to detect source language.');
            }

            if ($detectedSourceLanguage && strlen($detectedSourceLanguage) > 0) {
                $subtext .= ' (' . $detectedSourceLanguage . ')';
            }

            foreach ($translations as $translation) {
                $w->result(
                    time() . $translation,
                    $translation,
                    $translation,
                    $subtext,
                    strtolower($targetLanguage) . '.png',
                    "yes"
                );
            }
        } catch (\Exception $exception) {
            $w->result(time(), "", $exception->getMessage(), $input, "icon.png", "no");
        }

        return $w->toxml();
	}
}