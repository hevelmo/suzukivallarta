<?php

function urlsApi() {
    //Especial Actions
    $new = 'new';
    $del = 'del';
    $set = 'set';
    $get = 'get';
    $snd = "send";
    $add = "add";
    $max = "max";

    //$gdl = 'gdl';
    //$cty = 'country';

    $drv = 'testdrive';
    $fin = 'financiamiento';
    //$srv = "servicio";
    //$rep = "refacciones";
    $cnt = "contacto";
    $job = "bolsa-de-trabajo";
    // newsletter
    $new = "newsletter";

    //Root Api url
    $root = 'api/v1';

    return array(
        // ADD MAX
        //'add_max' => "$root/$add/$max",

        // SEND SERVICES
        //'snd_srv' => "$root/$snd/$srv",

        // SEND REPAIRS
        //'snd_rep' => "$root/$snd/$rep",

        // SEND CONTACT
        'snd_con' => "$root/$snd/$cnt",
        'snd_con_news' => "$root/$snd/$new/$cnt",

        // SEND FINANCING
        'snd_fin' => "$root/$snd/$fin",
        'snd_fin_news' => "$root/$snd/$new/$fin",

        // SEND TESTDRIVE
        'snd_drv' => "$root/$snd/$drv",
        'snd_drvn_news' => "$root/$snd/$new/$drv",

        // SEND JOB BOARD
        "snd_job" => "$root/$snd/$job"
    );
}
