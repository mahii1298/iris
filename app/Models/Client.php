<?php
namespace App\Models;

class Client {
    public static function getAllClients() {
        return [
            ['name' => 'ALSTOM', 'location' => 'Gujarat', 'category' => 'Heavy Engineering / Transit'],
            ['name' => 'EXPLEO Solutions Limited', 'location' => 'Bangalore', 'category' => 'Engineering Technology'],
            ['name' => 'L&T', 'location' => 'Coimbatore & Odisha', 'category' => 'Infrastructure / Defense'],
            ['name' => 'ZFRANE AUTOMOTIVE India Pvt Ltd', 'location' => 'Trichy', 'category' => 'Automotive Component Manufacturing'],
            ['name' => 'TREAT CLUSTER', 'location' => 'Trichy (Tiruchirappalli Engineering and Technology)', 'category' => 'Industrial Cluster'],
            ['name' => 'Velmurugan Industries', 'location' => 'Trichy', 'category' => 'Boiler & Fabrication'],
            ['name' => 'E Square Energy Equipments Pvt Ltd', 'location' => 'Tamil Nadu', 'category' => 'Energy Infrastructure'],
            ['name' => 'Shree Shraavana Engineering', 'location' => 'Trichy', 'category' => 'Precision Engineering'],
            ['name' => 'Meclin Infras Private Limited', 'location' => 'Trichy', 'category' => 'Infrastructure & Fabrication'],
            ['name' => 'T.N.E.B - Sruliyar Hydroelectric Power Plant', 'location' => 'Theni', 'category' => 'Power Generation'],
            ['name' => 'HAL Offshore Private Limited', 'location' => 'Thiruvarur', 'category' => 'Offshore / Marine Energy'],
            ['name' => 'WALCHAND Industries', 'location' => 'Pune', 'category' => 'Heavy Industry & Defense'],
            ['name' => 'T.N.E.B Chengalrayan Co-op. Sugar Mills', 'location' => 'Villupuram', 'category' => 'Sugar / Processing Mills'],
            ['name' => 'SICGILSOL India Pvt. Ltd', 'location' => 'Trichy', 'category' => 'Industrial Gas & Plants'],
            ['name' => 'Five Star Industries', 'location' => 'Trichy', 'category' => 'Fabrication & Engineering'],
            ['name' => 'R.M.K Engineering Industry', 'location' => 'Trichy', 'category' => 'Equipment Manufacturing'],
            ['name' => 'Metal Care Engineering', 'location' => 'Trichy', 'category' => 'NDT / Metallurgical Services'],
            ['name' => 'RIBO INDUSTRIES PVT, LTD', 'location' => 'Pudukottai', 'category' => 'Manufacturing'],
            ['name' => 'IOCL', 'location' => 'Kumbakonam', 'category' => 'Oil & Petrochemicals'],
            ['name' => 'Vethaa Milk Factory', 'location' => 'Musiri', 'category' => 'Food & Dairy Processing']
        ];
    }
}
