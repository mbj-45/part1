<?php 
    const root = __DIR__.'\\'; 
    const max_file_size = 1024; // 1 Mo max

    // different type des formats 
    const formats = [
        "jpg" => "image/jpg",
        "jpeg" => "image/jpeg",
        "gif" => "image/gif",
        "png" => "image/png"
    ];
    //Different type d'utilisateurs 
    $users = [
        [
            'username'=> 'Rhode',
            'password'=> '12345',
            'formula'=> '',
            'quota'=> 0,
        ],
        [
            'username'=> 'SON',
            'password'=> 'ab4f63f9ac65152575886860dde480a1',
            'formula'=> '',
            'quota'=> 0,
        ],
        [
            'username'=> 'Ebanga',
            'password'=> 'ab4f63f9ac65152575886860dde480a1',
            'formula'=> '',
            'quota'=> 0,
        ]

    ];
?>