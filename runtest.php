<?php

require_once('palcheck.class.php');

// short text
$shortstring = "oceanaeco";

// long text
$longstring = "LoremipsumdolorsitametconsecteturadipiscingelitProincongueaeratvelpulvinarSuspendisseveltellusconguevariuspurussedinterdummassaSedconsecteturduisagittisestvolutpatlaciniaProinfermentumlaoreetplaceratUtnecdoloripsumPraesentsedmollisodioVivamuseuarcunecauguelaoreetauctorSedegestasquamegetfelisplaceratutgravidaenimfacilisisMorbifringillatortorpurusatempornuncmattisvitaeMorbimattistinciduntnislutfermentumodioauctoracDonecmolestieeuismodnislsitametullamcorperleoviverraetIntegervelitseminterdumaliberoquissuscipitviverraestSedpretiumeununcinposuereMaecenasrisusestconvallismalesuadaconsequatateuismodeumetusQuisquehendreritinenimvitaemollisMaurislaciniatortorurnaegethendreritjustoaccumsaneuSuspendisseaporttitorerosMorbieleifendleovitaevulputatesuscipitligulanibhvolutpatmagnaacmalesuadalacusodiocongueestMaurissitametnuncplaceratconsecteturodioidullamcorperloremFuscetempusmaurisintortorultricieslobortisaccumsannisivehiculaVivamusfermentumelitvitaeloremluctusetornareurnarhoncusAeneanquisrhoncusaugueNamfacilisisidmiegetporttitorPraesenteleifendtempusorciatdapibustellussollicitudinetNullaamassapretiumpharetraestutsodalesarcuCrasfeugiatiaculislacusutrhoncusSedultricesesteupharetrasodalesSedquiselitidloremsempereuismodnonnonipsumNamgravidavestibulumloremutrutrumPellentesquesemperauguemolestiepharetraullamcorperurnanequeultricesnisinonviverranulladiaminanteSedaliquetnisivelquammalesuadaullamcorperNamconsecteturfeugiatultricesInegetcommododuiDuisconvallisgravidanequeNullamquisduidolorNullaporttitorurnaatpurusullamcorperaliquamAeneaneratenimgravidaidnibhettempuspharetranislSedfaucibusnibhathendreritrhoncusquamnislhendreritvelitnonlaciniaipsumanteatnislNullaportaorciconvallismimollisblanditDonecpharetraacaugueincursusInvolutpatlobortisminoninterdumEtiamportaidduisedauctorNullamarcuestvehiculaatturpismollisfaucibusconvallistortorMorbiblandituterateulaciniaMaecenasvelvenenatisnequeAeneansitametrhoncusnequeidbibendumnuncCrasornareligulafermentumtinciduntporttitorQuisquesuscipitipsumvitaenequevestibulumadipiscingtempuserattristiqueInacerosnecnullapretiumtristiqueegetegeturnaQuisqueportaeroserosnonsemperduitinciduntaPraesentutipsumnibhNullaegestasanteullamcorperbibendumvolutpatNullafacilisiUtsemperelitpurusnonpharetraorciconvallisquisVestibulumegestasantenullaidtincidunttortorsuscipitquisPhasellustinciduntipsumsitametlaciniavehiculafelisnequeinterdumloremutullamcorpernisinisleuestInterdumetmalesuadafamesacanteipsumprimisinfaucibusDonecvitaeleoeuismodfringillamiuttempusenimNuncpretiumpretiumarcuegetauctorMaecenasvitaeconsecteturarcuDonecsedanteatorcivolutpatlobortis";

$palcheck = new palcheck();


echo "\n\nTesting with a short string: \n\n";

// first test 

for ($i = 1; $i <= 10000; $i++) {

   $palcheck->startTimer();
   $palcheck->isPalindrome1($shortstring, strlen($shortstring));
   $palcheck->endTimer();

}
echo "Test 1 isPalindrome1 function: " . $palcheck->getAvgTime() . "\n";

$palcheck->clearTimes();

// second test 

for ($i = 1; $i <= 10000; $i++) {

   $palcheck->startTimer();
   $palcheck->isPalindrome2($shortstring);
   $palcheck->endTimer();

}
echo "Test 2 isPalindrome2 function: " . $palcheck->getAvgTime() . "\n";

$palcheck->clearTimes();

echo "\n\nTesting with a long string: \n\n";

// third test 

for ($i = 1; $i <= 10000; $i++) {

   $palcheck->startTimer();
   $palcheck->isPalindrome1($longstring, strlen($longstring));
   $palcheck->endTimer();

}
echo "Test 3 isPalindrome1 function:  " . $palcheck->getAvgTime() . "\n";

$palcheck->clearTimes();

// fourth test 

for ($i = 1; $i <= 10000; $i++) {

   $palcheck->startTimer();
   $palcheck->isPalindrome2($shortstring);
   $palcheck->endTimer();

}
echo "Test 4 isPalindrome2 function:  " . $palcheck->getAvgTime() . "\n";

$palcheck->clearTimes();