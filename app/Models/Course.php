<?php
namespace App\Models;

class Course {
    public static function getAsnt9712Courses() {
        return [
            [
                'id' => 'ut',
                'name' => 'Ultrasonic Testing (U.T)',
                'code' => 'UT-9712',
                'level' => 'Level –II / III',
                'duration' => '18 Days',
                'daily_hours' => '8 Hours / Day',
                'standard' => 'ISO 9712:2021 / ASNT 9712',
                'exam_centre' => 'ASNT India facility - Chennai',
                'description' => 'Comprehensive theoretical and practical training on flaw detection, thickness measurement, straight & angle beam testing across all industrial sectors.',
                'techniques' => 'Straight & Angle Beam, Shear Wave',
                'sectors' => 'Welding (Plate, Pipe, Node, Nozzle), Casting (Flange), Forging (Steel Bars, Plate)'
            ],
            [
                'id' => 'rt',
                'name' => 'Radiography Testing (With RTFI)',
                'code' => 'RT-9712',
                'level' => 'Level –II / III',
                'duration' => '15 Days',
                'daily_hours' => '8 Hours / Day',
                'standard' => 'ISO 9712:2021 / ASNT 9712',
                'exam_centre' => 'ASNT India facility - Chennai',
                'description' => 'Radiation safety, exposure calculations, and radiographic film interpretation (RTFI) for welds, castings, and pressure equipment.',
                'techniques' => 'X-Ray, Gamma Ray, RTFI Analysis',
                'sectors' => 'Welding, Casting & Forging Defects'
            ],
            [
                'id' => 'mt',
                'name' => 'Magnetic Particle Testing (M.T)',
                'code' => 'MT-9712',
                'level' => 'Level –II / III',
                'duration' => '5 Days',
                'daily_hours' => '8 Hours / Day',
                'standard' => 'ISO 9712:2021 / ASNT 9712',
                'exam_centre' => 'ASNT India facility - Chennai',
                'description' => 'Surface and sub-surface flaw detection using electromagnetic yokes and stationary test benches with dry and wet fluorescent particles.',
                'techniques' => 'Yoke, Bench Method (Visible & Fluorescent)',
                'sectors' => 'Welding (Plate, Pipe), Casting (Elbow, Reducer), Forging (Plate, Bars)'
            ],
            [
                'id' => 'pt',
                'name' => 'Liquid Penetrant Testing (P.T)',
                'code' => 'PT-9712',
                'level' => 'Level –II / III',
                'duration' => '5 Days',
                'daily_hours' => '8 Hours / Day',
                'standard' => 'ISO 9712:2021 / ASNT 9712',
                'exam_centre' => 'ASNT India facility - Chennai',
                'description' => 'Detection of surface-breaking discontinuities in non-porous materials across all manufacturing and in-service stages.',
                'techniques' => 'Solvent Removable, Water Washable, Post Emulsifiable',
                'sectors' => 'Welding (T-Joint Plate, T-Connection Plate-Pipe), Casting (Tee Fittings, Elbow, Locking Hook), Forging (Lifting Hook, Half Bold Threaded)'
            ],
            [
                'id' => 'vt',
                'name' => 'Visual Inspection Testing (V.T)',
                'code' => 'VT-9712',
                'level' => 'Level –II',
                'duration' => '5 Days',
                'daily_hours' => '8 Hours / Day',
                'standard' => 'ISO 9712:2021 / ASNT 9712',
                'exam_centre' => 'ASNT India facility - Chennai',
                'description' => 'Direct and remote visual inspection of weld profiles, surface alignments, corrosion morphology, and dimensional conformance.',
                'techniques' => 'Direct, Remote, Precision Weld Gauges',
                'sectors' => 'Fabrication, Welds, Pressure Components'
            ]
        ];
    }

    public static function getOtherCourses() {
        return [
            [
                'title' => 'Welding Inspection Courses',
                'category' => 'QA/QC Inspection',
                'badge' => 'Industry Standard',
                'description' => 'Specialized QA/QC training in welding metallurgy, ASME Sec IX, AWS D1.1 codes, WPS/PQR validation, and defect identification.'
            ],
            [
                'title' => 'Painting Inspection Courses',
                'category' => 'Coating Quality Control',
                'badge' => 'SSPC / NACE Standard',
                'description' => 'Industrial surface preparation, blast profile evaluation, dry film thickness (DFT) checks, and anti-corrosive coating inspection.'
            ],
            [
                'title' => 'ASNT Level III Preparatory Masterclass',
                'category' => 'Consultancy & Executive',
                'badge' => 'NDT in PT, MT, UT, RT',
                'description' => 'Preparation for ASNT Level III certification covering Basic, Method examinations, and procedure preparation with senior faculties.'
            ]
        ];
    }

    public static function getPracticalScopeMatrix() {
        return [
            [
                'method' => 'PT',
                'techniques' => 'Solvent Removable, Water washable, post emulsifiable',
                'welding' => 'T-Joint – Plate, T-Connection (Plate – Pipe)',
                'casting' => 'Tee Fittings, Elbow, Locking Hook',
                'forging' => 'Lifting Hook, Half Bold Threaded'
            ],
            [
                'method' => 'MT',
                'techniques' => 'Yoke, Bench',
                'welding' => 'Plate, Pipe',
                'casting' => 'Elbow, Reducer',
                'forging' => 'Plate, Bars'
            ],
            [
                'method' => 'UT',
                'techniques' => 'Straight / Angle',
                'welding' => 'Plate, Pipe, Node, Nozzle',
                'casting' => 'Flange',
                'forging' => 'Steel Bars, Plate'
            ]
        ];
    }
}
