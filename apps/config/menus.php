<?php

return [
    'index' => [
        'title' => 'Anasayfa',
        'icon' => 'calendar-60',
        'url' => URL,
        'rank' => [0,1,2]
    ],
    'solved' => [
        'title' => 'Çözülmüş Denemeler',
        'icon' => 'wallet-43',
        'url' => URL . 'solved',
        'rank' => [0, 2, 1]
    ],
    'lesson' => [
        'title' => 'Ders',
        'icon' => 'notes',
        'url' => URL . 'lesson',
        'rank' => [0, 1]
    ],
    'statistics' => [
        'title' => 'İstatistik',
        'icon' => 'chart-bar-32',
        'url' => URL . 'statistics',
        'rank' => [0, 2, 1]
    ],
    'question' => [
        'title' => 'Soru',
        'icon' => 'align-center',
        'url' => URL . 'question',
        'rank' => [0, 1]
    ],
    'trial-make' => [
        'title' => 'Deneme',
        'icon' => 'bell-55',
        'url' => URL . 'trial-make',
        'rank' => [0, 1]
    ],
    'user' => [
        'title' => 'Profil',
        'icon' => 'single-02',
        'url' => URL . 'user',
        'rank' => [0, 2, 1]
    ],
    'settings' => [
        'title' => 'Ayarlar',
        'icon' => 'settings',
        'url' => URL . 'user',
        'rank' => [0, 1]
    ],
    'offer' => [
        'title' => 'Öneri/Şikayet',
        'icon' => 'single-02',
        'url' => URL . 'offer',
        'rank' => [0, 2, 1]
    ]
];
