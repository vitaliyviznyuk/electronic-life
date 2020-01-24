<?php declare(strict_types=1);
/**
 * @author Vitaliy Viznyuk <vitaliyviznyuk@gmail.com>
 * @copyright Copyright (c) 2020 Vitaliy Viznyuk
 */

require __DIR__ . '/vendor/autoload.php';

$map = [
    '#######################',
    '#    #    #          ##',
    '#                     #',
    '#                     #',
    '#        #####        #',
    '##      #   #   ##    #',
    '###        ##    #    #',
    '#          ##    #    #',
    '#          ###   #    #',
    '#   ####              #',
    '#   ##       o        #',
    '#    #            ### #',
    '#    #                #',
    '#######################'
];

sleep(1);

echo json_encode($map, JSON_THROW_ON_ERROR, 512);
