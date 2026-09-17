<?php
namespace App\Models;

class Service {
    public static function getAllServices() {
        return [
            [
                'id' => 'tpi',
                'title' => 'Third Party Inspection (TPI) Services',
                'badge' => 'ISO 9001:2015 / BHEL Approved',
                'description' => 'Independent, accredited quality surveillance ensuring asset integrity, structural compliance, and fabrication code adherence across major industrial projects.',
                'features' => [
                    'Boiler & Pressure Vessels inspection (ASME Sec VIII / IBR)',
                    'In-service cross-country pipeline inspection',
                    'Sand Blasting & Industrial Painting inspection',
                    'Heavy Structural job & weldment verification'
                ]
            ],
            [
                'id' => 'wqt',
                'title' => 'Welder Qualification Test (WQT)',
                'badge' => 'ASME Sec IX / AWS D1.1',
                'description' => 'Comprehensive qualification and certification of industrial welders across diverse processes and exotic alloys up to 50mm thickness.',
                'features' => [
                    'SMAW, GMAW (MIG/MAG), GTAW (TIG) and SAW processes',
                    'Plate, pipe, and nozzle test assemblies',
                    'Thickness up to 50mm MS High Tensile, SS & Carbon Steel',
                    'Mechanical testing (bend/tensile) and NDT evaluation'
                ]
            ],
            [
                'id' => 'ndt-inspection',
                'title' => 'NDT Inspection Services (UT, RT, MT, PT, RTFI)',
                'badge' => 'Pre & In-Service Multi-Sector',
                'description' => 'Precision flaw detection for plant equipment, welds, castings, and forgings producing zero deleterious effect on stressed structures.',
                'features' => [
                    'Ultrasonic Testing (UT) & Thickness Gauging',
                    'Radiographic Testing (RT) & Film Interpretation (RTFI)',
                    'Magnetic Particle Testing (MT) & Liquid Penetrant Testing (PT)',
                    'Visual Inspection Test (VT) with precision gauges'
                ]
            ],
            [
                'id' => 'welding-inspection',
                'title' => 'Welding & Painting Inspection Services',
                'badge' => 'Quality Assurance & Quality Control',
                'description' => 'Complete QA/QC surveillance during fabrication and erection, including WPS/PQR review and protective coating compliance.',
                'features' => [
                    'WPS and PQR documentation & qualification',
                    'Raw material traceability & test report review',
                    'Surface preparation & Dry Film Thickness (DFT) verification',
                    'Final Quality Dossier & compliance certification'
                ]
            ]
        ];
    }
}
