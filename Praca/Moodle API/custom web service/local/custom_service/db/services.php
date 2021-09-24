<?php

defined('MOODLE_INTERNAL') || die();
$functions = array( // pierwsza z tablic deklaruje funkcje web service, kazda deklaracja ma referencje w funkcji w module ( zwykle module zewnetrznym )
    'local_custom_service_update_courses_lti' => array( // nazwa funkcji webservice, ktorą klient bedzie wołać tutaj: custom_service_update_courses_lti
        'classname' => 'local_custom_service_external',// nazwa klasy, musi znalezc sie w API external
        'methodname' => 'update_courses_lti',          //  nazwa metody w powyższej klasie
        'classpath' => 'local/custom_service/externallib.php', // sciezka do pliku externallib - external functions api
        'description' => 'Update courses LTI to show in Gradebook',
        'type' => 'write', //'write' uyzwane kiedy api dokonuje jakiejkolwiek zmiany w bazie danych, w innych przypadku read
        'ajax' => true, // wolanie przez ajax
    ),
    'local_custom_service_update_courses_sections' => array( // nazwa funkcji webservice, ktorą klient bedzie wołać tutaj: custom_service_update_courses_sections
        'classname' => 'local_custom_service_external',     // nazwa klasy, musi znalezc sie w API external
        'methodname' => 'update_courses_sections',          //  nazwa metody w powyższej klasie
        'classpath' => 'local/custom_service/externallib.php', // sciezka do pliku externallib - external functions api
        'description' => 'Update courses sections title in DB',
        'type' => 'write',
        'ajax' => true,
    )
);

$services = array( // druga tablica deklaruje zbudowane wczesniej - powyzej uslugi
    'M-Star Custom Services' => array( //nazwa usługi
        'functions' => array(
            'local_custom_service_update_courses_lti',
            'local_custom_service_update_courses_sections'
        ),
        'restrictedusers' => 0, // 1 - jesli administrator musi manualnie ustawic ktiry uzytkownik moze uzywac tej uslugi: // (Administration > Plugins > Web services > Manage services > Authorised users)
        'enabled' => 1, // 0 - token podlaczony do tej uslugi nie bedzie dzial
        'shortname' =>'custom_web_services' // krotka nazwa uslugi, ktora mozna uzywac, wlaczajac to uzywanie tokenu
    )
);