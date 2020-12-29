<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => " Diptanu Chakraborty", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'UI / UX designer, Web-developer, Graphic Designer, Music Producer, Video editor, from Agartala, Tripura INDIA.I have rich experience in website designing as well as building Php Applications. In addition to that I have working experience as a Sound designer & Video Editor.', // set false to total remove
            'separator'    => ' | ',
            'keywords'     => ['UI / UX designer',' Web-developer',' Graphic Designer', 'Music Producer',' Video editor', 'from Agartala','diptanu chakraborty','diptanuchakraborty.in', 'freelancer webdeveloper','freelancer video editor','freelancer music producer','freelancer graphic designer'],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => 'UI / UX designer',' Web-developer',' Graphic Designer', 'Music Producer',' Video editor', 'from Agartala','diptanu chakraborty','diptanuchakraborty.in', 'freelancer webdeveloper','freelancer video editor','freelancer music producer','freelancer graphic designer',
            'bing'      => 'UI / UX designer',' Web-developer',' Graphic Designer', 'Music Producer',' Video editor', 'from Agartala','diptanu chakraborty','diptanuchakraborty.in', 'freelancer webdeveloper','freelancer video editor','freelancer music producer','freelancer graphic designer',
            'alexa'     =>'UI / UX designer',' Web-developer',' Graphic Designer', 'Music Producer',' Video editor', 'from Agartala','diptanu chakraborty','diptanuchakraborty.in', 'freelancer webdeveloper','freelancer video editor','freelancer music producer','freelancer graphic designer',
            'pinterest' => 'UI / UX designer',' Web-developer',' Graphic Designer', 'Music Producer',' Video editor', 'from Agartala','diptanu chakraborty','diptanuchakraborty.in', 'freelancer webdeveloper','freelancer video editor','freelancer music producer','freelancer graphic designer',
            'yandex'    => 'UI / UX designer',' Web-developer',' Graphic Designer', 'Music Producer',' Video editor', 'from Agartala','diptanu chakraborty','diptanuchakraborty.in', 'freelancer webdeveloper','freelancer video editor','freelancer music producer','freelancer graphic designer',
            'norton'    => 'UI / UX designer',' Web-developer',' Graphic Designer', 'Music Producer',' Video editor', 'from Agartala','diptanu chakraborty','diptanuchakraborty.in', 'freelancer webdeveloper','freelancer video editor','freelancer music producer','freelancer graphic designer',
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Diptanu Chakraborty', // set false to total remove
            'description' => 'UI / UX designer, Web-developer, Graphic Designer, Music Producer, Video editor, from Agartala, Tripura INDIA.I have rich experience in website designing as well as building Php Applications. In addition to that I have working experience as a Sound designer & Video Editor.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'site_name'   => 'Diptanu chakraborty',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Diptanu Chakraborty', // set false to total remove
            'description' => 'UI / UX designer, Web-developer, Graphic Designer, Music Producer, Video editor, from Agartala, Tripura INDIA.I have rich experience in website designing as well as building Php Applications. In addition to that I have working experience as a Sound designer & Video Editor.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
