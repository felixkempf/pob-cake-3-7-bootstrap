# pob-cake-3-7-bootstrap
Proof of "Bug" (?) for bootstraping plugins in phpunit with CakePHP 3.7


# Instructions

- clone project
- `composer install`
- `bin/cake server -p 8765`
- visit http://localhost:8765 to see debug output `true`
- `vendor/bin/phpunit --filter testPluginIsBootstrapped` should fail
- 
