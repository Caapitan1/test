<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

global $USER;
echo "[".$USER->GetID()."] (".$USER->GetLogin().") ".$USER->GetFullName();

echo 123;