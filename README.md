# README

Reproduce bug:
1. $ composer install
2. $ symfony serve
3. execute `execute_me.http` w/ xdebug
   1. (optional) change domain/port

PATCH-request will be handled by `\App\ApiPlatform\Handler\ExampleHandler::getItem` (incorrect) instead of 
`\App\ApiPlatform\Handler\ExampleHandler::persist` (correct).
