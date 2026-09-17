<?php
namespace App\Models;

class Schedule {
    public static function getTrainingSchedule() {
        return [
            [
                'batch_name' => 'Batch 1 (August – September)',
                'schedules' => [
                    [
                        'method' => 'Magnetic Particle Testing (MT)',
                        'training_dates' => '01 - 06 Aug',
                        'exam_date' => '08 & 09 Aug',
                        'location' => 'Training: Trichy | Exam: Chennai'
                    ],
                    [
                        'method' => 'Liquid Penetrant Testing (PT)',
                        'training_dates' => '10 - 16 Aug',
                        'exam_date' => '19 & 20 Aug',
                        'location' => 'Training: Trichy | Exam: Chennai'
                    ],
                    [
                        'method' => 'Ultrasonic Testing (UT)',
                        'training_dates' => '26 Aug - 18 Sep',
                        'exam_date' => '20 & 21 Sep',
                        'location' => 'Training: Trichy | Exam: Chennai'
                    ]
                ]
            ],
            [
                'batch_name' => 'Batch 2 (September – November)',
                'schedules' => [
                    [
                        'method' => 'Magnetic Particle Testing (MT)',
                        'training_dates' => '23 - 27 Sep',
                        'exam_date' => '28 & 30 Sep',
                        'location' => 'Training: Trichy | Exam: Chennai'
                    ],
                    [
                        'method' => 'Liquid Penetrant Testing (PT)',
                        'training_dates' => '01 - 07 Oct',
                        'exam_date' => '09 & 10 Oct',
                        'location' => 'Training: Trichy | Exam: Chennai'
                    ],
                    [
                        'method' => 'Ultrasonic Testing (UT)',
                        'training_dates' => '14 Oct - 09 Nov',
                        'exam_date' => '11 & 12 Nov',
                        'location' => 'Training: Trichy | Exam: Chennai'
                    ]
                ]
            ],
            [
                'batch_name' => 'Batch 3 (November – December)',
                'schedules' => [
                    [
                        'method' => 'Magnetic Particle Testing (MT)',
                        'training_dates' => '14 - 19 Nov',
                        'exam_date' => '20 & 21 Nov',
                        'location' => 'Training: Trichy | Exam: Chennai'
                    ],
                    [
                        'method' => 'Liquid Penetrant Testing (PT)',
                        'training_dates' => '23 - 29 Nov',
                        'exam_date' => '01 & 02 Dec',
                        'location' => 'Training: Trichy | Exam: Chennai'
                    ],
                    [
                        'method' => 'Ultrasonic Testing (UT)',
                        'training_dates' => '04 - 27 Dec',
                        'exam_date' => '29 & 30 Dec',
                        'location' => 'Training: Trichy | Exam: Chennai'
                    ]
                ]
            ]
        ];
    }
}
