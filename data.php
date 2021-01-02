<?php
    $main_virus = ['Enterovrius'];
    $species_map = ['EV-A', 'EV-B', 'EV-C', 'EV-D', 'RV-A', 'RV-B', 'RV-C'];
    $virus_species = [
        'EV-A' => [
            'CV-A10',
            'CV-A12',
            'CV-A14',
            'CV-A16',
            'CV-A2',
            'CV-A3',
            'CV-A4',
            'CV-A5',
            'CV-A6',
            'CV-A7',
            'CV-A8',
            'CV-A9',
            'EV-A106',
            'EV-A107',
            'EV-A79',
            'EV-A120',
            'EV-A71',
            'EV-A76',
            'EV-A89',
            'EV-A90',
            'EV-A91',
            'EV-A92',
        ],
        'EV-B' => [
            'EV-B100',
            'EV-B101',
            'EV-B106',
            'EV-B69',
            'EV-B73',
            'EV-B74',
            'EV-B75',
            'EV-B77',
            'EV-B80',
            'EV-B81',
            'EV-B82',
            'EV-B83',
            'EV-B84',
            'EV-B85',
            'EV-B86',
            'EV-B87',
            'EV-B88',
            'EV-B97',
            'EV-B98',
            'CV-A9',
            'CV-B1',
            'CV-B2',
            'CV-B3',
            'CV-B4',
            'CV-B5',
            'CV-B6',
            'Echo-11',
            'Echo-12',
            'Echo-13',
            'Echo-14',
            'Echo-15',
            'Echo-16',
            'Echo-17',
            'Echo-18',
            'Echo-19',
            'Echo-2',
            'Echo-20',
            'Echo-21',
            'Echo-24',
            'Echo-25',
            'Echo-26',
            'Echo-27',
            'Echo-29',
            'Echo-3',
            'Echo-30',
            'Echo-31',
            'Echo-32',
            'Echo-33',
            'Echo-4',
            'Echo-5',
            'Echo-6',
            'Echo-7',
            'Echo-9',
        ],
        'EV-C' => [
            'CV-A1',
            'CV-A11',
            'CV-A13',
            'CV-A17',
            'CV-A19',
            'CV-A20',
            'CV-A21',
            'CV-A22',
            'CV-A24',
            'EV-C102',
            'EV-C104',
            'EV-C109',
            'EV-C117',
            'EV-C118',
            'EV-C96',
            'EV-C99',
            'Polio-1',
            'Polio-2',
            'Polio-3',
        ],
        'EV-D' => [
            'EV-D68',
            'EV-D70',
            'EV-D94',
        ],
        'RV-A' => [
            1,
            10,
            100,
            101,
            11,
            12,
            13,
            15,
            16,
            18,
            19,
            20,
            21,
            22,
            23,
            24,
            25,
            28,
            29,
            30,
            31,
            32,
            33,
            34,
            36,
            38,
            39,
            40,
            41,
            43,
            44,
            45,
            46,
            47,
            49,
            50,
            51,
            53,
            54,
            55,
            56,
            57,
            58,
            59,
            60,
            61,
            62,
            63,
            64,
            65,
            66,
            67,
            68,
            7,
            71,
            73,
            74,
            75,
            76,
            77,
            78,
            8,
            80,
            81,
            82,
            85,
            88,
            89,
            9,
            90,
            94,
            95,
            96,
            98,
        ],
        'RV-B' => [
            14,
            17,
            26,
            27,
            3,
            35,
            37,
            4,
            42,
            48,
            5,
            52,
            6,
            69,
            70,
            72,
            79,
            83,
            84,
            86,
            91,
            92,
            93,
            97,
            99,
        ],
        'RV-C' => [
            11,
            2,
            3,
            43,
            47,
            53,
        ],
    ];
    $EVA = [
        'CV-A10',
        'CV-A12',
        'CV-A14',
        'CV-A16',
        'CV-A2',
        'CV-A3',
        'CV-A4',
        'CV-A5',
        'CV-A6',
        'CV-A7',
        'CV-A8',
        'CV-A9',
        'EV-A106',
        'EV-A107',
        'EV-A79',
        'EV-A120',
        'EV-A71',
        'EV-A76',
        'EV-A89',
        'EV-A90',
        'EV-A91',
        'EV-A92',
    ];
    $EVB = [
        'EV-B100',
        'EV-B101',
        'EV-B106',
        'EV-B69',
        'EV-B73',
        'EV-B74',
        'EV-B75',
        'EV-B77',
        'EV-B80',
        'EV-B81',
        'EV-B82',
        'EV-B83',
        'EV-B84',
        'EV-B85',
        'EV-B86',
        'EV-B87',
        'EV-B88',
        'EV-B97',
        'EV-B98',
        'CV-A9',
        'CV-B1',
        'CV-B2',
        'CV-B3',
        'CV-B4',
        'CV-B5',
        'CV-B6',
        'Echo-11',
        'Echo-12',
        'Echo-13',
        'Echo-14',
        'Echo-15',
        'Echo-16',
        'Echo-17',
        'Echo-18',
        'Echo-19',
        'Echo-2',
        'Echo-20',
        'Echo-21',
        'Echo-24',
        'Echo-25',
        'Echo-26',
        'Echo-27',
        'Echo-29',
        'Echo-3',
        'Echo-30',
        'Echo-31',
        'Echo-32',
        'Echo-33',
        'Echo-4',
        'Echo-5',
        'Echo-6',
        'Echo-7',
        'Echo-9',
    ];
    $EVC = [
        'CV-A1',
        'CV-A11',
        'CV-A13',
        'CV-A17',
        'CV-A19',
        'CV-A20',
        'CV-A21',
        'CV-A22',
        'CV-A24',
        'EV-C102',
        'EV-C104',
        'EV-C109',
        'EV-C117',
        'EV-C118',
        'EV-C96',
        'EV-C99',
        'Polio-1',
        'Polio-2',
        'Polio-3',
    ];
    $EVD = [
        'EV-D68',
        'EV-D70',
        'EV-D94',
    ];
    $RVA = [
        1,
        10,
        100,
        101,
        11,
        12,
        13,
        15,
        16,
        18,
        19,
        20,
        21,
        22,
        23,
        24,
        25,
        28,
        29,
        30,
        31,
        32,
        33,
        34,
        36,
        38,
        39,
        40,
        41,
        43,
        44,
        45,
        46,
        47,
        49,
        50,
        51,
        53,
        54,
        55,
        56,
        57,
        58,
        59,
        60,
        61,
        62,
        63,
        64,
        65,
        66,
        67,
        68,
        7,
        71,
        73,
        74,
        75,
        76,
        77,
        78,
        8,
        80,
        81,
        82,
        85,
        88,
        89,
        9,
        90,
        94,
        95,
        96,
        98,
    ];
    $RVB = [
        14,
        17,
        26,
        27,
        3,
        35,
        37,
        4,
        42,
        48,
        5,
        52,
        6,
        69,
        70,
        72,
        79,
        83,
        84,
        86,
        91,
        92,
        93,
        97,
        99,
    ];
    $RVC = [
        11,
        2,
        3,
        43,
        47,
        53,
    ];
    $seg = [
         'VP4', 'VP2', 'VP3', 'VP1', '2A', '2B', '2C', '3A', '3B', '3C', '3D'
    ];
?>
