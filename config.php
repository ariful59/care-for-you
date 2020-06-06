<?php

return [
    // Replace with the baseUrl of your site. For example, https://jigsaw-clean-blog.netlify.com
    'baseUrl' => '',
    'production' => false,


    'collections' => [
        // Posts collection sorted by date and in descending order (latest post at the top)
        'posts' => [
            'sort' => '-date'
        ]
    ],
    
    // Number of collection items to show per page
    'perPage' => 5,

    // The email address to send the https://formspree.io/ contact form submissions to
    'email' => 'arifulamindu@gmail.com',

    // The name of the site. This is used in the nav and footer
    'siteName' => 'সোনামণিদের খেলা ঘর',

    // The description of the site. This is used in for the site's default metadata
    'siteDescription' => 'আপনার ছোট সোনামণিদের খেলার মাধ্যমে বিচক্ষণ করে তুলুন',

    // The name of the site Author. Your name! This is used when building the rss feed
    'siteAuthor' => 'Ariful Amin',

    // Social media links/icons that are used in the footer, add as many as you like!
    'socials' => [
        'twitter' => [
            'link' => '#',
            'icon' => 'fab fa-twitter',
        ],
        'facebook' => [
            'link' => 'https://www.facebook.com/arifulaminrumi',
            'icon' => 'fab fa-facebook-f',
        ],
        'rss' => [
            'link' => '#',
            'icon' => 'fas fa-rss',
        ]
//      'another social service' => [
//          'link' => 'link to your account',
//          'icon' => 'font awesome icon https://fontawesome.com/icons?d=gallery&m=free',
//      ]
    ],

    // Google Analytics Tracking Id. For example, UA-123456789-1
    'gaTrackingId' => '',

    // True if you want to show a reading time (e.g 2 min read) or false to hide
    'showReadingTime' => true,

    'readingTime' => function($post) {
        $mins = round(str_word_count(strip_tags($post)) / 200);
        return implode('', array_fill(0, round($mins / 5),'☕')) . ' ' . $mins . ' min read';
    },

    'getExcerpt' => function ($page, $length = 225) {
        $content = $page->excerpt ?? $page->getContent();
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content), '<code>'
        );
        $truncated = substr($cleaned, 0, $length);
        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }
        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },

    'banglaDate' => function ($page, $date) {
        // format date
        $str = date("F j, Y", strtotime($date));

        // translate number
        $str = $page->translateNumber($str);

        // translate day
        $enDay = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $enShortDay = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $bnDay = ['জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'];

        $str = str_replace($enDay, $bnDay, $str);
        return str_replace($enShortDay, $bnDay, $str);
    },

    'translateNumber' => function($page, $number) {
        $enNum = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $bnNum = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
        return str_replace($enNum, $bnNum, $number);
    },
];
