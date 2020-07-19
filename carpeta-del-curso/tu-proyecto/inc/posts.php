<?php

function get_all_posts(){
    return  [
        [
            'id' => 1,
            'title' => 'Lorem ipsun title 1',
            'excerpt' => 'excerpt test1 nonosdvsdvs dnvsodvns sovnsodvnsodvons vosnvsadvnsadvnposavnsañdvon ',
            'content' => 'contenido de este post1 npsodnvosno nosdvnsdov',
            'published_on' => '2018-11-01 10:15:00'
        ],
        [
            'id' => 2,
            'title' => 'title 2',
            'excerpt' => 'excerpt test2 osefjose nosdnvos snosdnvosdvnsodn osnvosnvdo',
            'content' => 'contenido de este post1 npsodnvosno nonosdvsdvs dnvsodvns  n nosdvnsdov sovnsodvnsodvons vosnvsadvnsadvnposavnsañdvon snovs snovsnvosa tes',
            'published_on' => '2016-05-01 10:35:00'
        ],
        [
            'id' => 3,
            'title' => 'title 3',
            'excerpt' => 'excerpt test3 osefjose nosdnvos snosdnvosdvnsodn osnvosnvdo',
            'content' => 'HELLO WORLD contenido de este post1 npsodnvosno nonosdvsdvs dnvsodvns  n nosdvnsdov sovnsodvnsodvons vosnvsadvnsadvnposavnsañdvon snovs snovsnvosa tes',
            'published_on' => '2016-05-01 10:35:00'
        ]
    ];
}

function get_post( $id_post ){
    foreach( get_all_posts() as $post ){
        if( $post['id'] == $id_post ){
            return $post;
        }
    }
    return false;
}