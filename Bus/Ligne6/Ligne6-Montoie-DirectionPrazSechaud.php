<?php
// Julien Muggli
// info@muggli.one

// ID Montoie: 8592080
// ID Praz-Séchaud: 8592101
// Récupération des données
$url = 'http://transport.opendata.ch/v1/connections?from=8592080&to=8592101&limit=1';
$content = file_get_contents($url);
$json = json_decode($content, true);
$now = new datetime();
// Création de la date et heure du jour
$now->setTimezone(new DateTimeZone('Europe/Zurich'));
// Navigation jusqu'au timestamp de départ
$horaire = $json['connections'][0]['from']['departureTimestamp'];
$depart = date_create_from_format('U', $horaire);
$depart->setTimezone(new DateTimeZone('Europe/Zurich'));
// Calcul de la différence du temps
$diff = date_diff($depart, $now);
// Conversion du timestamp Unix en minutes lisibles
$minutes = $diff->days * 24 * 60;
$minutes += $diff->h * 60;
$minutes += $diff->i;
$texte = 'Prochain départ dans ' . $minutes . ' minutes et ' . ($diff->s < 10 ? '0' . $diff->s : $diff->s) . ' secondes depuis Montoie';
// Création de la structure des messages interprétée par LaMetric
$out = array('frames'=>array(
               array('index'=>0,
                     'text'=>'Ligne 6 direction Praz-Séchaud',
                     'icon'=>'a4717')
               ,array('index'=>1,
                     'text'=>$texte,
                     'icon'=>'')
          ));
// Encodage JSON de la réponse
echo json_encode($out, JSON_PRETTY_PRINT);
?>