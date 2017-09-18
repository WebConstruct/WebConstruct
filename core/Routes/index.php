<?php

include_once "../../vendor/autoload.php";

$pathToSettings = "../../settings/settings.php";

if (!file_exists($pathToSettings)) {
    throw new SettingsNotImplementedException("You need to create a settings file! See settings/settings.example.php");
}

include_once $pathToSettings;