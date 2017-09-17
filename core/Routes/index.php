<?php

include_once "../../vendor/autoload.php";

include_once "../../settings/settings.example.php";

$schema = new \WebConstruct\Application\PagesSchema();
try
{
    $schema->updateSchemas();
} catch (Exception $exception)
{
    print "<pre>";
    print $exception->getMessage();
}