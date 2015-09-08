<?php

namespace Rastija;
use Rastija\Resource;


require_once( dirname( __FILE__ ) . '/Service/SearchServices.class.php' );
require_once( dirname( __FILE__ ) . '/Service/LkiisSoapClient.php');
require_once( dirname( __FILE__ ) . '/Service/LkiisResource.php');
require_once( dirname( __FILE__ ) . '/Owl/Uri/AbstractUri.php');
require_once( dirname( __FILE__ ) . '/Owl/Uri/UriFactoryInterface.php');
require_once( dirname( __FILE__ ) . '/Owl/Uri/UriFactory.php');
require_once( dirname( __FILE__ ) . '/Owl/Uri/LemmaUri.php');
require_once( dirname( __FILE__ ) . '/Owl/Uri/DefaultClassUri.php');
require_once( dirname( __FILE__ ) . '/Owl/Uri/LexicalEntryUri.php');
require_once( dirname( __FILE__ ) . '/Owl/Uri/DefaultClassUri.php');
require_once( dirname( __FILE__ ) . '/Owl/LmfClassInterface.php');
require_once( dirname( __FILE__ ) . '/Owl/AbstractLmfClass.php');
require_once( dirname( __FILE__ ) . '/Owl/AbstractLmfForm.php');
require_once( dirname( __FILE__ ) . '/Owl/AbstractRepresentation.php');
require_once( dirname( __FILE__ ) . '/Owl/LmfLexicalEntry.php');
require_once( dirname( __FILE__ ) . '/Owl/LmfLemma.php');
require_once( dirname( __FILE__ ) . '/Owl/LmfWordForm.php');
require_once( dirname( __FILE__ ) . '/Owl/LmfSense.php');
require_once( dirname( __FILE__ ) . '/Owl/LmfEquivalent.php');
require_once( dirname( __FILE__ ) . '/Owl/LmfTextRepresentation.php');
require_once( dirname( __FILE__ ) . '/Owl/LmfDefinition.php');
require_once( dirname( __FILE__ ) . '/Resource/DictionaryInterface.php');
require_once( dirname( __FILE__ ) . '/Resource/AbstractDictionary.php');
require_once( dirname( __FILE__ ) . '/Resource/EnLtDictionary.php');
require_once( dirname( __FILE__ ) . '/Resource/LkiMainCard.php');
require_once( dirname( __FILE__ ) . '/Resource/LkiSecondCard.php');


/* Anglų-Lietuvių kalbų žodynas 62733 įrašai*/
//$dic = new Resource\EnLtDictionary();
//echo $dic->generateLmfOwl();

/* Pagrindinė kartoteka deklaruojama 55933 įrašai, realiai 48823*/
//$card = new Resource\LkiMainCard();
//echo $card->generateLmfOwl();

/* Papildymų kartoteka deklaruojama 561247 įrašai, realiai ???*/
$card = new Resource\LkiSecondCard();
echo $card->generateLmfOwl();