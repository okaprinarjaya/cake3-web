<?php
use Cake\Core\Configure;

Configure::write('PROPERTY_TYPES', array(
    'rumah',
    'apartemen'
));

Configure::write('PROPERTY_TYPES_CODE_MAPPING', array(
    'rumah' => 'ho'
));

Configure::write('PROPERTY_TRX_CODE_MAPPING', array(
    'dijual' => 'S',
    'sewa' => 'R'
));

Configure::write('PROPERTY_TYPES_MULTI_LANG_MAPPING', array(
    'rumah' => 'rumah',
    'apartemen' => 'apartemen',
    'house' => 'rumah',
    'apartment' => 'apartemen'
));

Configure::write('PROPERTY_TRX_MULTI_LANG_MAPPING', array(
    'dijual' => 'dijual',
    'sewa' => 'sewa',
    'for-sale' => 'dijual',
    'for-rent' => 'sewa'
));
