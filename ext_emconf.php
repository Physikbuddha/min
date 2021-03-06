<?php

/*  | This extension is made with love for TYPO3 CMS and is licensed
 *  | under GNU General Public License.
 *  |
 *  | (c) 2016-2020 Armin Vieweg <armin@v.ieweg.de>
 */

// phpcs:disable
$EM_CONF[$_EXTKEY] = [
    'title' => 'Minifier for TYPO3',
    'description' => 'Extends TYPO3\'s compressor for JS and CSS with minifier. This may save you up to 70% of default compressed file size. Also compresses HTML output of TYPO3. Full composer support.',
    'category' => 'services',
    'author' => 'Armin Vieweg',
    'author_email' => 'armin@v.ieweg.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.9.0',
    'constraints' => [
        'depends' => [
            'php' => '7.2.0-0.0.0',
            'typo3' => '7.6.0-10.9.99',
        ],
        'conflicts' => [
            'tinysource' => ''
        ],
        'suggests' => [],
    ],
];
// phpcs:enable
