<?php

use Cake\Core\Configure;

debug('Was the "Foo" Plugin bootstraped?');

debug(Configure::read('Foo.bootstraped'));
