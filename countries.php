<?php


// define("DB_HOST", "localhost"); // Replace with your database host (if not localhost)
// define("DB_USER", "db_user"); // Replace with your database username
// define("DB_PASS", "db_pass"); // Replace with your database password
// define("DB_NAME", "dbname"); // Replace with your databse name


// Create connection
// $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


// if ($conn->connect_errno) {
//     die("Connection error:" . $conn->connect_errno);
// }

// return $conn;




$countriesWithCode = [
    // A Country Names
    'AF' => [
        'name' => 'Afghanistan',
        'nationality' => 'Afghan',
        'dial_code' => '+93',
        'iso_alpha_2' => 'AF',
        'iso_alpha_3' => 'AFG',
        'un_code' => '004'
    ],
    'AX' => [
        'name' => 'Aland Islands',
        'nationality' => 'Aland Islands',
        'dial_code' => '+358',
        'iso_alpha_2' => 'AX',
        'iso_alpha_3' => 'ALA',
        'un_code' => '248'
    ],
    'AL' => [
        'name' => 'Albania',
        'nationality' => 'Albanian',
        'dial_code' => '+355',
        'iso_alpha_2' => 'AL',
        'iso_alpha_3' => 'ALB' 
    ],
    'DZ' => [
        'name' => 'Algeria',
        'nationality' => 'Algerian',
        'dial_code' => '+213',
        'iso_alpha_2' => 'DZ',
        'iso_alpha_3' => 'DZA' 
    ],
    'AS' => [
        'name' => 'American Samoa',
        'nationality' => 'American Saoma',
        'dial_code' => '+1',
        'iso_alpha_2' => 'AS',
        'iso_alpha_3' => 'ASM' 
    ],
    'AD' => [
        'name' => 'Andorra',
        'nationality' => 'Andorran',
        'dial_code' => '+376',
        'iso_alpha_2' => 'AD',
        'iso_alpha_3' => 'AND' 
    ],
    'AO' => [
        'name' => 'Angola',
        'nationality' => 'Angolan',
        'dial_code' => '+244',
        'iso_alpha_2' => 'AO',
        'iso_alpha_3' => 'AGO' 
    ],
    'AI' => [
        'name' => 'Anguilla',
        'nationality' => 'Anguillan',
        'dial_code' => '+1',
        'iso_alpha_2' => 'AI',
        'iso_alpha_3' => 'AIA' 
    ],
    'AQ' => [
        'name' => 'Antarctica',
        'nationality' => 'Antarctican',
        'dial_code' => '+672',
        'iso_alpha_2' => 'AQ',
        'iso_alpha_3' => 'ATA' 
    ],
    'AG' => [
        'name' => 'Antigua And Barbuda',
        'nationality' => 'Antiguans',
        'dial_code' => '+1',
        'iso_alpha_2' => 'AG',
        'iso_alpha_3' => 'ATG' 
    ],
    'AR' => [
        'name' => 'Argentina',
        'nationality' => 'Argentinean',
        'dial_code' => '+54',
        'iso_alpha_2' => 'AR',
        'iso_alpha_3' => 'ARG' 
    ],
    'AM' => [
        'name' => 'Armenia',
        'nationality' => 'Armenian',
        'dial_code' => '+374',
        'iso_alpha_2' => 'AM',
        'iso_alpha_3' => 'ARM' 
    ],
    'AW' => [
        'name' => 'Aruba',
        'nationality' => 'Aruba',
        'dial_code' => '+297',
        'iso_alpha_2' => 'AW',
        'iso_alpha_3' => 'ABW' 
    ],
    'AU' => [
        'name' => 'Australia',
        'nationality' => 'Australian',
        'dial_code' => '+61',
        'iso_alpha_2' => 'AU',
        'iso_alpha_3' => 'AUS' 
    ],
    'AT' => [
        'name' => 'Austria',
        'nationality' => 'Austrian',
        'dial_code' => '+43',
        'iso_alpha_2' => 'AT',
        'iso_alpha_3' => 'AUT' 
    ],
    'AZ' => [
        'name' => 'Azerbaijan',
        'nationality' => 'Azerbaijani',
        'dial_code' => '+994',
        'iso_alpha_2' => 'AZ',
        'iso_alpha_3' => 'AZE' 
    ],

    // B Country Names
    'BS' => [
        'name' => 'Bahamas',
        'nationality' => 'Bahamian',
        'dial_code' => '+1',
        'iso_alpha_2' => 'BS',
        'iso_alpha_3' => 'BHS' 
    ],
    'BH' => [
        'name' => 'Bahrain',
        'nationality' => 'Bahraini',
        'dial_code' => '+973',
        'iso_alpha_2' => 'BH',
        'iso_alpha_3' => 'BHR' 
    ],
    'BD' => [
        'name' => 'Bangladesh',
        'nationality' => 'Bangladeshi',
        'dial_code' => '+880',
        'iso_alpha_2' => 'BD',
        'iso_alpha_3' => 'BGD' 
    ],
    'BB' => [
        'name' => 'Barbados',
        'nationality' => 'Barbudans',
        'dial_code' => '+1',
        'iso_alpha_2' => 'BB',
        'iso_alpha_3' => 'BRB' 
    ],
    'BY' => [
        'name' => 'Belarus',
        'nationality' => 'Belarusian',
        'dial_code' => '+375',
        'iso_alpha_2' => 'BY',
        'iso_alpha_3' => 'BLR' 
    ],
    'BE' => [
        'name' => 'Belgium',
        'nationality' => 'Belgian',
        'dial_code' => '+32',
        'iso_alpha_2' => 'BE',
        'iso_alpha_3' => 'BEL' 
    ],
    'BZ' => [
        'name' => 'Belize',
        'nationality' => 'Belizean',
        'dial_code' => '+501',
        'iso_alpha_2' => 'BZ',
        'iso_alpha_3' => 'BLZ' 
    ],
    'BJ' => [
        'name' => 'Benin',
        'nationality' => 'Beninese',
        'dial_code' => '+229',
        'iso_alpha_2' => 'BJ',
        'iso_alpha_3' => 'BEN' 
    ],
    'BM' => [
        'name' => 'Bermuda',
        'nationality' => 'Bermudan',
        'dial_code' => '+1',
        'iso_alpha_2' => 'BM',
        'iso_alpha_3' => 'BMU' 
    ],
    'BT' => [
        'name' => 'Bhutan',
        'nationality' => 'Bhutanese',
        'dial_code' => '+975',
        'iso_alpha_2' => 'BT',
        'iso_alpha_3' => 'BTN' 
    ],
    'BO' => [
        'name' => 'Bolivia',
        'nationality' => 'Bolivian',
        'dial_code' => '+591',
        'iso_alpha_2' => 'BO',
        'iso_alpha_3' => 'BOL' 
    ],
    'BA' => [
        'name' => 'Bosnia And Herzegovina',
        'nationality' => 'Bosnian',
        'dial_code' => '+387',
        'iso_alpha_2' => 'BA',
        'iso_alpha_3' => 'BIH' 
    ],
    'BW' => [
        'name' => 'Botswana',
        'nationality' => 'Botswananian',
        'dial_code' => '+267',
        'iso_alpha_2' => 'BW',
        'iso_alpha_3' => 'BWA' 
    ],
    'BV' => [
        'name' => 'Bouvet Island',
        'nationality' => 'Bouvet Island',
        'dial_code' => '+47',
        'iso_alpha_2' => 'BV',
        'iso_alpha_3' => 'BVT' 
    ],
    'BR' => [
        'name' => 'Brazil',
        'nationality' => 'Brazilian',
        'dial_code' => '+55',
        'iso_alpha_2' => 'BR',
        'iso_alpha_3' => 'BRA' 
    ],
    'IO' => [
        'name' => 'British Indian Ocean Territory',
        'nationality' => 'British Indian Ocean Territory',
        'dial_code' => '+246',
        'iso_alpha_2' => 'IO',
        'iso_alpha_3' => 'IOT' 
    ],
    'VG' => [
        'name' => 'British Virgin Islands',
        'nationality' => 'British Virgin Islander',
        'dial_code' => '+1',
        'iso_alpha_2' => 'VG',
        'iso_alpha_3' => 'VGB' 
    ],
    'BN' => [
        'name' => 'Brunei Darussalam',
        'nationality' => 'Bruneian',
        'dial_code' => '+673',
        'iso_alpha_2' => 'BN',
        'iso_alpha_3' => 'BRN' 
    ],
    'BG' => [
        'name' => 'Bulgaria',
        'nationality' => 'Bulgarian',
        'dial_code' => '+359',
        'iso_alpha_2' => 'BG',
        'iso_alpha_3' => 'BGR' 
    ],
    'BF' => [
        'name' => 'Burkina Faso',
        'nationality' => 'Burkinabe',
        'dial_code' => '+226',
        'iso_alpha_2' => 'BF',
        'iso_alpha_3' => 'BFA' 
    ],
    'BI' => [
        'name' => 'Burundi',
        'nationality' => 'Burundian',
        'dial_code' => '+257',
        'iso_alpha_2' => 'BI',
        'iso_alpha_3' => 'BDI' 
    ],

    // C Country Names
    'KH' => [
        'name' => 'Cambodia',
        'nationality' => 'Cambodian',
        'dial_code' => '+855',
        'iso_alpha_2' => 'KH',
        'iso_alpha_3' => 'KHM' 
    ],
    'CM' => [
        'name' => 'Cameroon',
        'nationality' => 'Cameroonian',
        'dial_code' => '+237',
        'iso_alpha_2' => 'CM',
        'iso_alpha_3' => 'CMR' 
    ],
    'CA' => [
        'name' => 'Canada',
        'nationality' => 'Canadian',
        'dial_code' => '+1',
        'iso_alpha_2' => 'CA',
        'iso_alpha_3' => 'CAN' 
    ],
    'CV' => [
        'name' => 'Cape Verde',
        'nationality' => 'Cape Verdean',
        'dial_code' => '+238',
        'iso_alpha_2' => 'CV',
        'iso_alpha_3' => 'CPV' 
    ],
    'KY' => [
        'name' => 'Cayman Islands',
        'nationality' => 'Cayman Islands',
        'dial_code' => '+1',
        'iso_alpha_2' => 'KY',
        'iso_alpha_3' => 'CYM' 
    ],
    'CF' => [
        'name' => 'Central African Republic',
        'nationality' => 'Central African',
        'dial_code' => '+236',
        'iso_alpha_2' => 'CF',
        'iso_alpha_3' => 'CAF' 
    ],
    'TD' => [
        'name' => 'Chad',
        'nationality' => 'Chadian',
        'dial_code' => '+235',
        'iso_alpha_2' => 'TD',
        'iso_alpha_3' => 'TCD' 
    ],
    'CL' => [
        'name' => 'Chile',
        'nationality' => 'Chilean',
        'dial_code' => '+56',
        'iso_alpha_2' => 'CL',
        'iso_alpha_3' => 'CHL' 
    ],
    'CN' => [
        'name' => 'China',
        'nationality' => 'Chinese',
        'dial_code' => '+86',
        'iso_alpha_2' => 'CN',
        'iso_alpha_3' => 'CHN' 
    ],
    'CX' => [
        'name' => 'Christmas Island',
        'nationality' => 'Christmas Island',
        'dial_code' => '+61',
        'iso_alpha_2' => 'CX',
        'iso_alpha_3' => 'CXR' 
    ],
    'CC' => [
        'name' => 'Cocos (Keeling) Islands',
        'nationality' => 'Cocos (Keeling) Islands',
        'dial_code' => '+61',
        'iso_alpha_2' => 'CC',
        'iso_alpha_3' => 'CCK' 
    ],
    'CO' => [
        'name' => 'Colombia',
        'nationality' => 'Colombian',
        'dial_code' => '+57',
        'iso_alpha_2' => 'CO',
        'iso_alpha_3' => 'COL' 
    ],
    'KM' => [
        'name' => 'Comoros',
        'nationality' => 'Comoran',
        'dial_code' => '+269',
        'iso_alpha_2' => 'KM',
        'iso_alpha_3' => 'COM' 
    ],
    'CG' => [
        'name' => 'Congo',
        'nationality' => 'Congolese',
        'dial_code' => '+242',
        'iso_alpha_2' => 'CG',
        'iso_alpha_3' => 'COG' 
    ],
    'CK' => [
        'name' => 'Cook Island',
        'nationality' => 'Cook Islander',
        'dial_code' => '+682',
        'iso_alpha_2' => 'CK',
        'iso_alpha_3' => 'COK' 
    ],
    'CR' => [
        'name' => 'Costa Rica',
        'nationality' => 'Costa Rican',
        'dial_code' => '+506',
        'iso_alpha_2' => 'CR',
        'iso_alpha_3' => 'CRI' 
    ],
    'CI' => [
        'name' => 'Cote D\'Ivoire',
        'nationality' => 'Cote D\'Ivoires',
        'dial_code' => '+225',
        'iso_alpha_2' => 'CI',
        'iso_alpha_3' => 'CIV' 
    ],
    'HR' => [
        'name' => 'Croatia',
        'nationality' => 'Croatian',
        'dial_code' => '+385',
        'iso_alpha_2' => 'HR',
        'iso_alpha_3' => 'HRV' 
    ],
    'CU' => [
        'name' => 'Cuba',
        'nationality' => 'Cuban',
        'dial_code' => '+53',
        'iso_alpha_2' => 'CU',
        'iso_alpha_3' => 'CUB' 
    ],
    'CW' => [
        'name' => 'Curacao',
        'nationality' => '****',
        'dial_code' => '+599',
        'iso_alpha_2' => 'CW',
        'iso_alpha_3' => 'CUW' 
    ],
    'CY' => [
        'name' => 'Cyprus',
        'nationality' => 'Cypriot',
        'dial_code' => '+357',
        'iso_alpha_2' => 'CY',
        'iso_alpha_3' => 'CYP' 
    ],
    'CZ' => [
        'name' => 'Czech Republic',
        'nationality' => 'Czech',
        'dial_code' => '+420',
        'iso_alpha_2' => 'CZ',
        'iso_alpha_3' => 'CZE' 
    ],
    'CD' => [
        'name' => 'Democratic Republic of Congo',
        'nationality' => 'Congolese',
        'dial_code' => '+243',
        'iso_alpha_2' => 'CD',
        'iso_alpha_3' => 'COD' 
    ],

    // D Country Names
    'DK' => [
        'name' => 'Denmark',
        'nationality' => 'Danish',
        'dial_code' => '+45',
        'iso_alpha_2' => 'DK',
        'iso_alpha_3' => 'DNK' 
    ],
    'DJ' => [
        'name' => 'Djibouti',
        'nationality' => 'Djibouti',
        'dial_code' => '+253',
        'iso_alpha_2' => 'DJ',
        'iso_alpha_3' => 'DJI' 
    ],
    'DM' => [
        'name' => 'Dominica',
        'nationality' => 'Dominican',
        'dial_code' => '+1',
        'iso_alpha_2' => 'DM',
        'iso_alpha_3' => 'DMA' 
    ],
    'DO' => [
        'name' => 'Dominican Republic',
        'nationality' => 'Dominican Republic',
        'dial_code' => '+1',
        'iso_alpha_2' => 'DO',
        'iso_alpha_3' => 'DOM' 
    ],

    // E Country Names
    'EC' => [
        'name' => 'Ecuador',
        'nationality' => 'Ecuadorean',
        'dial_code' => '+593',
        'iso_alpha_2' => 'EC',
        'iso_alpha_3' => 'ECU' 
    ],
    'EG' => [
        'name' => 'Egypt',
        'nationality' => 'Egyptian',
        'dial_code' => '+20',
        'iso_alpha_2' => 'EG',
        'iso_alpha_3' => 'EGY' 
    ],
    'SV' => [
        'name' => 'El Salvador',
        'nationality' => 'El Salvadorian',
        'dial_code' => '+503',
        'iso_alpha_2' => 'SV',
        'iso_alpha_3' => 'SLV' 
    ],
    'GQ' => [
        'name' => 'Equatorial Guinea',
        'nationality' => 'Equatorial Guinean',
        'dial_code' => '+240',
        'iso_alpha_2' => 'GQ',
        'iso_alpha_3' => 'GNQ' 
    ],
    'ER' => [
        'name' => 'Eritrea',
        'nationality' => 'Eritrean',
        'dial_code' => '+291',
        'iso_alpha_2' => 'ER',
        'iso_alpha_3' => 'ERI' 
    ],
    'EE' => [
        'name' => 'Estonia',
        'nationality' => 'Estonian',
        'dial_code' => '+372',
        'iso_alpha_2' => 'EE',
        'iso_alpha_3' => 'EST' 
    ],
    'ET' => [
        'name' => 'Ethiopia',
        'nationality' => 'Ethiopian',
        'dial_code' => '+251',
        'iso_alpha_2' => 'ET',
        'iso_alpha_3' => 'ETH' 
    ],

    // F Country Names
    'FK' => [
        'name' => 'Falkland Islands (Malvinas)',
        'nationality' => 'Falkland Islands (Malvinas)',
        'dial_code' => '+500',
        'iso_alpha_2' => 'FK',
        'iso_alpha_3' => 'FLK' 
    ],
    'FO' => [
        'name' => 'Faroe Islands',
        'nationality' => 'Faroe Islands',
        'dial_code' => '+298',
        'iso_alpha_2' => 'FO',
        'iso_alpha_3' => 'FRO' 
    ],
    'FJ' => [
        'name' => 'Fiji',
        'nationality' => 'Fijian',
        'dial_code' => '+679',
        'iso_alpha_2' => 'FJ',
        'iso_alpha_3' => 'FJI' 
    ],
    'FI' => [
        'name' => 'Finland',
        'nationality' => 'Finnish',
        'dial_code' => '+358',
        'iso_alpha_2' => 'FI',
        'iso_alpha_3' => 'FIN' 
    ],
    'FR' => [
        'name' => 'France',
        'nationality' => 'French',
        'dial_code' => '+33',
        'iso_alpha_2' => 'FR',
        'iso_alpha_3' => 'FRA' 
    ],
    'GF' => [
        'name' => 'French Guiana',
        'nationality' => 'French Guianese',
        'dial_code' => '+594',
        'iso_alpha_2' => 'GF',
        'iso_alpha_3' => 'GUF' 
    ],
    'PF' => [
        'name' => 'French Polynesia',
        'nationality' => 'French Polynesia',
        'dial_code' => '+689',
        'iso_alpha_2' => 'PF',
        'iso_alpha_3' => 'PYF' 
    ],

    // G Country Names
    'GA' => [
        'name' => 'Gabon',
        'nationality' => 'Gabonese',
        'dial_code' => '+241',
        'iso_alpha_2' => 'GA',
        'iso_alpha_3' => 'GAB' 
    ],
    'GM' => [
        'name' => 'Gambia',
        'nationality' => 'Gambian',
        'dial_code' => '+220',
        'iso_alpha_2' => 'GM',
        'iso_alpha_3' => 'GMB' 
    ],
    'GE' => [
        'name' => 'Georgia',
        'nationality' => 'Georgian',
        'dial_code' => '+995',
        'iso_alpha_2' => 'GE',
        'iso_alpha_3' => 'GEO' 
    ],
    'DE' => [
        'name' => 'Germany',
        'nationality' => 'German',
        'dial_code' => '+49',
        'iso_alpha_2' => 'DE',
        'iso_alpha_3' => 'DEU' 
    ],
    'GH' => [
        'name' => 'Ghana',
        'nationality' => 'Ghanaian',
        'dial_code' => '+233',
        'iso_alpha_2' => 'GH',
        'iso_alpha_3' => 'GHA' 
    ],
    'GI' => [
        'name' => 'Gibraltar',
        'nationality' => 'Gibraltarian',
        'dial_code' => '+350',
        'iso_alpha_2' => 'GI',
        'iso_alpha_3' => 'GIB' 
    ],
    'GR' => [
        'name' => 'Greece',
        'nationality' => 'Greek',
        'dial_code' => '+30',
        'iso_alpha_2' => 'GR',
        'iso_alpha_3' => 'GRC' 
    ],
    'GL' => [
        'name' => 'Greenland',
        'nationality' => 'Greenlandian',
        'dial_code' => '+299',
        'iso_alpha_2' => 'GL',
        'iso_alpha_3' => 'GRL' 
    ],
    'GD' => [
        'name' => 'Grenada',
        'nationality' => 'Grenadian',
        'dial_code' => '+1',
        'iso_alpha_2' => 'GD',
        'iso_alpha_3' => 'GRD' 
    ],
    'GP' => [
        'name' => 'Guadeloupe',
        'nationality' => 'Guadeloupe',
        'dial_code' => '+590',
        'iso_alpha_2' => 'GP',
        'iso_alpha_3' => 'GLP' 
    ],
    'GU' => [
        'name' => 'Guam',
        'nationality' => 'Guamian',
        'dial_code' => '+1',
        'iso_alpha_2' => 'GU',
        'iso_alpha_3' => 'GUM' 
    ],
    'GT' => [
        'name' => 'Guatemala',
        'nationality' => 'Guatemalan',
        'dial_code' => '+502',
        'iso_alpha_2' => 'GT',
        'iso_alpha_3' => 'GTM' 
    ],
    'GG' => [
        'name' => 'Guernsey',
        'nationality' => 'Guerns',
        'dial_code' => '+44',
        'iso_alpha_2' => 'GG',
        'iso_alpha_3' => 'GGY' 
    ],
    'GN' => [
        'name' => 'Guinea',
        'nationality' => 'Guinean',
        'dial_code' => '+224',
        'iso_alpha_2' => 'GN',
        'iso_alpha_3' => 'GIN' 
    ],
    'GW' => [
        'name' => 'Guinea-Bissau',
        'nationality' => 'Bissau-Guinean',
        'dial_code' => '+245',
        'iso_alpha_2' => 'GW',
        'iso_alpha_3' => 'GNB' 
    ],
    'GY' => [
        'name' => 'Guyana',
        'nationality' => 'Guyanese',
        'dial_code' => '+592',
        'iso_alpha_2' => 'GY',
        'iso_alpha_3' => 'GUY' 
    ],

    // H Country Names 
    'HT' => [
        'name' => 'Haiti',
        'nationality' => 'Haitian',
        'dial_code' => '+509',
        'iso_alpha_2' => 'HT',
        'iso_alpha_3' => 'HTI' 
    ],
    'HN' => [
        'name' => 'Honduras',
        'nationality' => 'Honduran',
        'dial_code' => '+504',
        'iso_alpha_2' => 'HN',
        'iso_alpha_3' => 'HND' 
    ],
    'HK' => [
        'name' => 'Hong Kong',
        'nationality' => 'Hong Kong (Chinese)',
        'dial_code' => '+852',
        'iso_alpha_2' => 'HK',
        'iso_alpha_3' => 'HKG' 
    ],
    'HU' => [
        'name' => 'Hungary',
        'nationality' => 'Hungarian',
        'dial_code' => '+36',
        'iso_alpha_2' => 'HU',
        'iso_alpha_3' => 'HUN' 
    ],

    //I Country Names
    'IS' => [
        'name' => 'Iceland',
        'nationality' => 'Icelander',
        'dial_code' => '+354',
        'iso_alpha_2' => 'IS',
        'iso_alpha_3' => 'ISL' 
    ],
    'IN' => [
        'name' => 'India',
        'nationality' => 'Indian',
        'dial_code' => '+91',
        'iso_alpha_2' => 'IN',
        'iso_alpha_3' => 'IND' 
    ],
    'ID' => [
        'name' => 'Indonesia',
        'nationality' => 'Indonesian',
        'dial_code' => '+62',
        'iso_alpha_2' => 'ID',
        'iso_alpha_3' => 'IDN' 
    ],
    'IR' => [
        'name' => 'Iran',
        'nationality' => 'Iranian',
        'dial_code' => '+98',
        'iso_alpha_2' => 'IR',
        'iso_alpha_3' => 'IRN' 
    ],
    'IQ' => [
        'name' => 'Iraq',
        'nationality' => 'Iraqi',
        'dial_code' => '+964',
        'iso_alpha_2' => 'IQ',
        'iso_alpha_3' => 'IRQ' 
    ],
    'IE' => [
        'name' => 'Ireland',
        'nationality' => 'Irish',
        'dial_code' => '+353',
        'iso_alpha_2' => 'IE',
        'iso_alpha_3' => 'IRL' 
    ],
    'IM' => [
        'name' => 'Isle Of Man',
        'nationality' => 'Isle Of Man',
        'dial_code' => '+44',
        'iso_alpha_2' => 'IM',
        'iso_alpha_3' => 'IMN' 
    ],
    'IL' => [
        'name' => 'Israel',
        'nationality' => 'Israeli',
        'dial_code' => '+972',
        'iso_alpha_2' => 'IL',
        'iso_alpha_3' => 'ISR' 
    ],
    'IT' => [
        'name' => 'Italy',
        'nationality' => 'Italian',
        'dial_code' => '+39',
        'iso_alpha_2' => 'IT',
        'iso_alpha_3' => 'ITA' 
    ],

    //J Country Names
    'JM' => [
        'name' => 'Jamaica',
        'nationality' => 'Jamaican',
        'dial_code' => '+1',
        'iso_alpha_2' => 'JM',
        'iso_alpha_3' => 'JAM' 
    ],
    'JP' => [
        'name' => 'Japan',
        'nationality' => 'Japanese',
        'dial_code' => '+81',
        'iso_alpha_2' => 'JP',
        'iso_alpha_3' => 'JPN' 
    ],
    'JE' => [
        'name' => 'Jersey',
        'nationality' => 'Jersey',
        'dial_code' => '+44',
        'iso_alpha_2' => 'JE',
        'iso_alpha_3' => 'JEY' 
    ],
    'JO' => [
        'name' => 'Jordan',
        'nationality' => 'Jordanian',
        'dial_code' => '+962',
        'iso_alpha_2' => 'JO',
        'iso_alpha_3' => 'JOR' 
    ],

    // K Country Names
    'KZ' => [
        'name' => 'Kazakhstan',
        'nationality' => 'Kazakhstani',
        'dial_code' => '+7',
        'iso_alpha_2' => 'KZ',
        'iso_alpha_3' => 'KAZ' 
    ],
    'KE' => [
        'name' => 'Kenya',
        'nationality' => 'Kenyan',
        'dial_code' => '+254',
        'iso_alpha_2' => 'KE',
        'iso_alpha_3' => 'KEN' 
    ],
    'KI' => [
        'name' => 'Kiribati',
        'nationality' => 'Kiribatin',
        'dial_code' => '+686',
        'iso_alpha_2' => 'KI',
        'iso_alpha_3' => 'KIR' 
    ],
    'XK' => [
        'name' => 'Kosovo',
        'nationality' => 'Kosovar',
        'dial_code' => '+383',
        'iso_alpha_2' => 'XK',
        'iso_alpha_3' => 'XXK' 
    ],
    'KR' => [
        'name' => 'Korea South',
        'nationality' => 'Korean (South)',
        'dial_code' => '+82',
        'iso_alpha_2' => 'KR',
        'iso_alpha_3' => 'KOR' 
    ],
    'KP' => [
        'name' => 'Korea North',
        'nationality' => 'Korean (North)',
        'dial_code' => '+850',
        'iso_alpha_2' => 'KP',
        'iso_alpha_3' => 'PRK' 
    ],
    'KW' => [
        'name' => 'Kuwait',
        'nationality' => 'Kuwaiti',
        'dial_code' => '+965',
        'iso_alpha_2' => 'KW',
        'iso_alpha_3' => 'KWT' 
    ],
    'KG' => [
        'name' => 'Kyrgyzstan',
        'nationality' => 'Kyrgyz',
        'dial_code' => '+996',
        'iso_alpha_2' => 'KG',
        'iso_alpha_3' => 'KGZ' 
    ],

    //L Country Names
    'LA' => [
        'name' => 'Lao People\'s Democratic Republic',
        'nationality' => 'Laotians',
        'dial_code' => '+856',
        'iso_alpha_2' => 'LA',
        'iso_alpha_3' => 'LAO' 
    ],
    'LV' => [
        'name' => 'Latvia',
        'nationality' => 'Latvian',
        'dial_code' => '+371',
        'iso_alpha_2' => 'LV',
        'iso_alpha_3' => 'LVA' 
    ],
    'LB' => [
        'name' => 'Lebanon',
        'nationality' => 'Lebanese',
        'dial_code' => '+961',
        'iso_alpha_2' => 'LB',
        'iso_alpha_3' => 'LBN' 
    ],
    'LS' => [
        'name' => 'Lesotho',
        'nationality' => 'Lesothon',
        'dial_code' => '+266',
        'iso_alpha_2' => 'LS',
        'iso_alpha_3' => 'LSO' 
    ],
    'LR' => [
        'name' => 'Liberia',
        'nationality' => 'Liberian',
        'dial_code' => '+231',
        'iso_alpha_2' => 'LR',
        'iso_alpha_3' => 'LBR' 
    ],
    'LY' => [
        'name' => 'Libya',
        'nationality' => 'Libyan',
        'dial_code' => '+218',
        'iso_alpha_2' => 'LY',
        'iso_alpha_3' => 'LBY' 
    ],
    'LI' => [
        'name' => 'Liechtenstein',
        'nationality' => 'Liechtensteiner',
        'dial_code' => '+423',
        'iso_alpha_2' => 'LI',
        'iso_alpha_3' => 'LIE' 
    ],
    'LT' => [
        'name' => 'Lithuania',
        'nationality' => 'Lithuanian',
        'dial_code' => '+370',
        'iso_alpha_2' => 'LT',
        'iso_alpha_3' => 'LTU' 
    ],
    'LU' => [
        'name' => 'Luxembourg',
        'nationality' => 'Luxembourger',
        'dial_code' => '+352',
        'iso_alpha_2' => 'LU',
        'iso_alpha_3' => 'LUX' 
    ],

    // M Country Names
    'MO' => [
        'name' => 'Macao',
        'nationality' => 'Macedonianv',
        'dial_code' => '+853',
        'iso_alpha_2' => 'MO',
        'iso_alpha_3' => 'MAC' 
    ],
    'MK' => [
        'name' => 'Macedonia',
        'nationality' => 'Macedonian',
        'dial_code' => '+389',
        'iso_alpha_2' => 'MK',
        'iso_alpha_3' => 'MKD' 
    ],
    'MG' => [
        'name' => 'Madagascar',
        'nationality' => 'Madagascarian',
        'dial_code' => '+261',
        'iso_alpha_2' => 'MG',
        'iso_alpha_3' => 'MDG' 
    ],
    'MW' => [
        'name' => 'Malawi',
        'nationality' => 'Malawian',
        'dial_code' => '+265',
        'iso_alpha_2' => 'MW',
        'iso_alpha_3' => 'MWI' 
    ],
    'MY' => [
        'name' => 'Malaysia',
        'nationality' => 'Malaysian',
        'dial_code' => '+60',
        'iso_alpha_2' => 'MY',
        'iso_alpha_3' => 'MYS' 
    ],
    'MV' => [
        'name' => 'Maldives',
        'nationality' => 'Maldivan',
        'dial_code' => '+960',
        'iso_alpha_2' => 'MV',
        'iso_alpha_3' => 'MDV' 
    ],
    'ML' => [
        'name' => 'Mali',
        'nationality' => 'Malian',
        'dial_code' => '+223',
        'iso_alpha_2' => 'ML',
        'iso_alpha_3' => 'MLI' 
    ],
    'MT' => [
        'name' => 'Malta',
        'nationality' => 'Maltese',
        'dial_code' => '+356',
        'iso_alpha_2' => 'MT',
        'iso_alpha_3' => 'MLT' 
    ],
    'MH' => [
        'name' => 'Marshall Islands',
        'nationality' => 'Marshallese',
        'dial_code' => '+692',
        'iso_alpha_2' => 'MH',
        'iso_alpha_3' => 'MHL' 
    ],
    'MQ' => [
        'name' => 'Martinique',
        'nationality' => 'Martinicans',
        'dial_code' => '+596',
        'iso_alpha_2' => 'MQ',
        'iso_alpha_3' => 'MTG' 
    ],
    'MR' => [
        'name' => 'Mauritania',
        'nationality' => 'Mauritian',
        'dial_code' => '+222',
        'iso_alpha_2' => 'MR',
        'iso_alpha_3' => 'MRT' 
    ],
    'MU' => [
        'name' => 'Mauritius',
        'nationality' => 'Mauritiusian',
        'dial_code' => '+230',
        'iso_alpha_2' => 'MU',
        'iso_alpha_3' => 'MUS' 
    ],
    'YT' => [
        'name' => 'Mayotte',
        'nationality' => 'Mayottes',
        'dial_code' => '+262',
        'iso_alpha_2' => 'YT',
        'iso_alpha_3' => 'MYT' 
    ],
    'MX' => [
        'name' => 'Mexico',
        'nationality' => 'Mexican',
        'dial_code' => '+52',
        'iso_alpha_2' => 'MX',
        'iso_alpha_3' => 'MEX' 
    ],
    'FM' => [
        'name' => 'Micronesia',
        'nationality' => 'Micronesians',
        'dial_code' => '+691',
        'iso_alpha_2' => 'FM',
        'iso_alpha_3' => 'FSM' 
    ],
    'MD' => [
        'name' => 'Moldova',
        'nationality' => 'Moldovan',
        'dial_code' => '+373',
        'iso_alpha_2' => 'MD',
        'iso_alpha_3' => 'MDA' 
    ],
    'MC' => [
        'name' => 'Monaco',
        'nationality' => 'Monacan',
        'dial_code' => '+377',
        'iso_alpha_2' => 'MC',
        'iso_alpha_3' => 'MCO' 
    ],
    'MN' => [
        'name' => 'Mongolia',
        'nationality' => 'Mongolian',
        'dial_code' => '+976',
        'iso_alpha_2' => 'MN',
        'iso_alpha_3' => 'MNG' 
    ],
    'ME' => [
        'name' => 'Montenegro',
        'nationality' => 'Montenegrin',
        'dial_code' => '+382',
        'iso_alpha_2' => 'ME',
        'iso_alpha_3' => 'MNE' 
    ],
    'MS' => [
        'name' => 'Montserrat',
        'nationality' => 'Montserratan',
        'dial_code' => '+1',
        'iso_alpha_2' => 'MS',
        'iso_alpha_3' => 'MSR' 
    ],
    'MA' => [
        'name' => 'Morocco',
        'nationality' => 'Moroccan',
        'dial_code' => '+212',
        'iso_alpha_2' => 'MA',
        'iso_alpha_3' => 'MAR' 
    ],
    'MZ' => [
        'name' => 'Mozambique',
        'nationality' => 'Mozambican',
        'dial_code' => '+258',
        'iso_alpha_2' => 'MZ',
        'iso_alpha_3' => 'MOZ' 
    ],
    'MM' => [
        'name' => 'Myanmar',
        'nationality' => 'Myanmarian',
        'dial_code' => '+95',
        'iso_alpha_2' => 'MM',
        'iso_alpha_3' => 'MMR' 
    ],

    //N Country Names
    'NA' => [
        'name' => 'Namibia',
        'nationality' => 'Namibian',
        'dial_code' => '+264',
        'iso_alpha_2' => 'NA',
        'iso_alpha_3' => 'NAM' 
    ],
    'NR' => [
        'name' => 'Nauru',
        'nationality' => 'Nauruan',
        'dial_code' => '+264',
        'iso_alpha_2' => 'NR',
        'iso_alpha_3' => 'NRU' 
    ],
    'NP' => [
        'name' => 'Nepal',
        'nationality' => 'Nepalese',
        'dial_code' => '+977',
        'iso_alpha_2' => 'NP',
        'iso_alpha_3' => 'NPL' 
    ],
    'NL' => [
        'name' => 'Netherlands',
        'nationality' => 'Dutch',
        'dial_code' => '+31',
        'iso_alpha_2' => 'NL',
        'iso_alpha_3' => 'NDL' 
    ],
    'AN' => [
        'name' => 'Netherlands Antilles',
        'nationality' => 'Netherlands Antilles',
        'dial_code' => '+599',
        'iso_alpha_2' => 'AN',
        'iso_alpha_3' => 'ANT' 
    ],
    'NC' => [
        'name' => 'New Caledonia',
        'nationality' => 'Caledonian',
        'dial_code' => '+687',
        'iso_alpha_2' => 'NC',
        'iso_alpha_3' => 'NCL' 
    ],
    'NZ' => [
        'name' => 'New Zealand',
        'nationality' => 'New Zealander',
        'dial_code' => '+64',
        'iso_alpha_2' => 'NZ',
        'iso_alpha_3' => 'NZL' 
    ],
    'NI' => [
        'name' => 'Nicaragua',
        'nationality' => 'Nicaraguan',
        'dial_code' => '+505',
        'iso_alpha_2' => 'NI',
        'iso_alpha_3' => 'NIC' 
    ],
    'NE' => [
        'name' => 'Niger',
        'nationality' => 'Nigerien',
        'dial_code' => '+227',
        'iso_alpha_2' => 'NE',
        'iso_alpha_3' => 'NER' 
    ],
    'NG' => [
        'name' => 'Nigeria',
        'nationality' => 'Nigerian',
        'dial_code' => '+234',
        'iso_alpha_2' => 'NG',
        'iso_alpha_3' => 'NGA' 
    ],
    'NU' => [
        'name' => 'Niue',
        'nationality' => 'Niue',
        'dial_code' => '+683',
        'iso_alpha_2' => 'NU',
        'iso_alpha_3' => 'NIU' 
    ],
    'NF' => [
        'name' => 'Norfolk Island',
        'nationality' => 'Norfolk Islander',
        'dial_code' => '+672',
        'iso_alpha_2' => 'NF',
        'iso_alpha_3' => 'NFK' 
    ],
    'MP' => [
        'name' => 'Northern Mariana Islands',
        'nationality' => 'Northern Mariana Islander',
        'dial_code' => '+1',
        'iso_alpha_2' => 'MP',
        'iso_alpha_3' => 'MNP' 
    ],
    'NO' => [
        'name' => 'Norway',
        'nationality' => 'Norwegian',
        'dial_code' => '+47',
        'iso_alpha_2' => 'NO',
        'iso_alpha_3' => 'NOR' 
    ],

    //O Country Names
    'OM' => [
        'name' => 'Oman',
        'nationality' => 'Omani',
        'dial_code' => '+968',
        'iso_alpha_2' => 'OM',
        'iso_alpha_3' => 'OMN' 
    ],

    // P Country Names
    'PK' => [
        'name' => 'Pakistan',
        'nationality' => 'Pakistani',
        'dial_code' => '+92',
        'iso_alpha_2' => 'PK',
        'iso_alpha_3' => 'PAK' 
    ],
    'PW' => [
        'name' => 'Palau',
        'nationality' => 'Palauan',
        'dial_code' => '+680',
        'iso_alpha_2' => 'PW',
        'iso_alpha_3' => 'PLW' 
    ],
    'PS' => [
        'name' => 'Palestine',
        'nationality' => 'Palestinian',
        'dial_code' => '+970',
        'iso_alpha_2' => 'PS',
        'iso_alpha_3' => 'PSE' 
    ],
    'PA' => [
        'name' => 'Panama',
        'nationality' => 'Panamanian',
        'dial_code' => '+507',
        'iso_alpha_2' => 'PA',
        'iso_alpha_3' => 'PAN' 
    ],
    'PG' => [
        'name' => 'Papua New Guinea',
        'nationality' => 'Papua New Guinean',
        'dial_code' => '+675',
        'iso_alpha_2' => 'PG',
        'iso_alpha_3' => 'PNG' 
    ],
    'PY' => [
        'name' => 'Paraguay',
        'nationality' => 'Paraguayan',
        'dial_code' => '+595',
        'iso_alpha_2' => 'PY',
        'iso_alpha_3' => 'PRY' 
    ],
    'PE' => [
        'name' => 'Peru',
        'nationality' => 'Peruvian',
        'dial_code' => '+51',
        'iso_alpha_2' => 'PE',
        'iso_alpha_3' => 'PER' 
    ],
    'PH' => [
        'name' => 'Philippines',
        'nationality' => 'Philippine',
        'dial_code' => '+63',
        'iso_alpha_2' => 'PH',
        'iso_alpha_3' => 'PHL' 
    ],
    'PN' => [
        'name' => 'Pitcairn',
        'nationality' => 'Pitcairn',
        'dial_code' => '+64',
        'iso_alpha_2' => 'PN',
        'iso_alpha_3' => 'PCN' 
    ],
    'PL' => [
        'name' => 'Poland',
        'nationality' => 'Polish',
        'dial_code' => '+48',
        'iso_alpha_2' => 'PL',
        'iso_alpha_3' => 'POL' 
    ],
    'PT' => [
        'name' => 'Portugal',
        'nationality' => 'Portuguese',
        'dial_code' => '+351',
        'iso_alpha_2' => 'PT',
        'iso_alpha_3' => 'PRT' 
    ],
    'PR' => [
        'name' => 'Puerto Rico',
        'nationality' => 'Puerto Rican',
        'dial_code' => '+1',
        'iso_alpha_2' => 'PR',
        'iso_alpha_3' => 'PRI' 
    ],

    // Q Country Names
    'QA' => [
        'name' => 'Qatar',
        'nationality' => 'Qatari',
        'dial_code' => '+974',
        'iso_alpha_2' => 'QA',
        'iso_alpha_3' => 'QAT' 
    ],

    // R Country Names
    'RE' => [
        'name' => 'Reunion',
        'nationality' => 'Reunion',
        'dial_code' => '+262',
        'iso_alpha_2' => 'RE',
        'iso_alpha_3' => 'REU' 
    ],
    'RO' => [
        'name' => 'Romania',
        'nationality' => 'Romanian',
        'dial_code' => '+40',
        'iso_alpha_2' => 'RO',
        'iso_alpha_3' => 'ROU' 
    ],
    'RU' => [
        'name' => 'Russian Federation',
        'nationality' => 'Russian',
        'dial_code' => '+7',
        'iso_alpha_2' => 'RU',
        'iso_alpha_3' => 'RUS' 
    ],
    'RW' => [
        'name' => 'Rwanda',
        'nationality' => 'Rwandan',
        'dial_code' => '+250',
        'iso_alpha_2' => 'RW',
        'iso_alpha_3' => 'RWA' 
    ],

    // S Country Names
    'BL' => [
        'name' => 'Saint Barthelemy',
        'nationality' => 'Saint Barthélemois',
        'dial_code' => '+590',
        'iso_alpha_2' => 'BL',
        'iso_alpha_3' => 'BLM' 
    ],
    'SH' => [
        'name' => 'Saint Helena',
        'nationality' => 'Saint Helenians',
        'dial_code' => '+290',
        'iso_alpha_2' => 'SH',
        'iso_alpha_3' => 'SHN' 
    ],
    'KN' => [
        'name' => 'Saint Kitts And Nevis',
        'nationality' => 'Kittitian/Nevisian',
        'dial_code' => '+1',
        'iso_alpha_2' => 'KN',
        'iso_alpha_3' => 'KNA' 
    ],
    'LC' => [
        'name' => 'Saint Lucia',
        'nationality' => 'Saint Lucian',
        'dial_code' => '+1',
        'iso_alpha_2' => 'LC',
        'iso_alpha_3' => 'LCA' 
    ],
    'MF' => [
        'name' => 'Saint Martin',
        'nationality' => 'Saint Martiner',
        'dial_code' => '+590',
        'iso_alpha_2' => 'MF',
        'iso_alpha_3' => 'MAF' 
    ],
    'PM' => [
        'name' => 'Saint Pierre And Miquelon',
        'nationality' => 'Saint-Pierrais/Miquelonnais',
        'dial_code' => '+508',
        'iso_alpha_2' => 'PM',
        'iso_alpha_3' => 'PSM' 
    ],
    'VC' => [
        'name' => 'Saint Vincent And Grenadines',
        'nationality' => 'Vincentians',
        'dial_code' => '+1',
        'iso_alpha_2' => 'VC',
        'iso_alpha_3' => 'VCT' 
    ],
    'WS' => [
        'name' => 'Samoa',
        'nationality' => 'Samoan',
        'dial_code' => '+685',
        'iso_alpha_2' => 'WS',
        'iso_alpha_3' => 'WSM' 
    ],
    'SM' => [
        'name' => 'San Marino',
        'nationality' => 'San Marinese',
        'dial_code' => '+378',
        'iso_alpha_2' => 'SM',
        'iso_alpha_3' => 'SMR' 
    ],
    'ST' => [
        'name' => 'Sao Tome And Principe',
        'nationality' => 'Sao Tomean',
        'dial_code' => '+239',
        'iso_alpha_2' => 'ST',
        'iso_alpha_3' => 'STP' 
    ],
    'SA' => [
        'name' => 'Saudi Arabia',
        'nationality' => 'Saudi',
        'dial_code' => '+996',
        'iso_alpha_2' => 'SA',
        'iso_alpha_3' => 'SAU' 
    ],
    'SN' => [
        'name' => 'Senegal',
        'nationality' => 'Senegalese',
        'dial_code' => '+221',
        'iso_alpha_2' => 'SN',
        'iso_alpha_3' => 'SEN' 
    ],
    'RS' => [
        'name' => 'Serbia',
        'nationality' => 'Serbian',
        'dial_code' => '+381',
        'iso_alpha_2' => 'RS',
        'iso_alpha_3' => 'SRB' 
    ],
    'SC' => [
        'name' => 'Seychelles',
        'nationality' => 'Seychellois',
        'dial_code' => '+248',
        'iso_alpha_2' => 'SC',
        'iso_alpha_3' => 'SYC' 
    ],
    'SL' => [
        'name' => 'Sierra Leone',
        'nationality' => 'Sierra Leonean',
        'dial_code' => '+232',
        'iso_alpha_2' => 'SL',
        'iso_alpha_3' => 'SLE' 
    ],
    'SG' => [
        'name' => 'Singapore',
        'nationality' => 'Singaporean',
        'dial_code' => '+65',
        'iso_alpha_2' => 'SG',
        'iso_alpha_3' => 'SGP' 
    ],
    'SG' => [
        'name' => 'Sint Maarten',
        'nationality' => 'Sint Maartener',
        'dial_code' => '+1',
        'iso_alpha_2' => 'SX',
        'iso_alpha_3' => 'SXM' 
    ],
    'SK' => [
        'name' => 'Slovakia',
        'nationality' => 'Slovakian',
        'dial_code' => '+421',
        'iso_alpha_2' => 'SK',
        'iso_alpha_3' => 'SVK' 
    ],
    'SI' => [
        'name' => 'Slovenia',
        'nationality' => 'Slovenian',
        'dial_code' => '+386',
        'iso_alpha_2' => 'SI',
        'iso_alpha_3' => 'SVN' 
    ],
    'SB' => [
        'name' => 'Solomon Islands',
        'nationality' => 'Solomon Islander',
        'dial_code' => '+677',
        'iso_alpha_2' => 'SB',
        'iso_alpha_3' => 'SLB' 
    ],
    'SO' => [
        'name' => 'Somalia',
        'nationality' => 'Somali',
        'dial_code' => '+252',
        'iso_alpha_2' => 'SO',
        'iso_alpha_3' => 'SOM' 
    ],
    'ZA' => [
        'name' => 'South Africa',
        'nationality' => 'South African',
        'dial_code' => '+27',
        'iso_alpha_2' => 'ZA',
        'iso_alpha_3' => 'ZAF' 
    ],
    'SS' => [
        'name' => 'South Sudan',
        'nationality' => 'South Sudanese',
        'dial_code' => '+211',
        'iso_alpha_2' => 'SS',
        'iso_alpha_3' => 'SSD' 
    ],
    'ES' => [
        'name' => 'Spain',
        'nationality' => 'Spanish',
        'dial_code' => '+34',
        'iso_alpha_2' => 'ES',
        'iso_alpha_3' => 'ESP' 
    ],
    'LK' => [
        'name' => 'Sri Lanka',
        'nationality' => 'Sri Lankan',
        'dial_code' => '+94',
        'iso_alpha_2' => 'LK',
        'iso_alpha_3' => 'LKA' 
    ],
    'SD' => [
        'name' => 'Sudan',
        'nationality' => 'Sudanese',
        'dial_code' => '+249',
        'iso_alpha_2' => 'SD',
        'iso_alpha_3' => 'SDN' 
    ],
    'SR' => [
        'name' => 'Suriname',
        'nationality' => 'Surinamese',
        'dial_code' => '+597',
        'iso_alpha_2' => 'SR',
        'iso_alpha_3' => 'SUR' 
    ],
    'SJ' => [
        'name' => 'Svalbard And Jan Mayen',
        'nationality' => 'Svalbard And Jan Mayen',
        'dial_code' => '+47',
        'iso_alpha_2' => 'SJ',
        'iso_alpha_3' => 'SJM' 
    ],
    'SZ' => [
        'name' => 'Swaziland',
        'nationality' => 'Swazi',
        'dial_code' => '+268',
        'iso_alpha_2' => 'SZ',
        'iso_alpha_3' => 'SWZ' 
    ],
    'SE' => [
        'name' => 'Sweden',
        'nationality' => 'Swedish',
        'dial_code' => '+46',
        'iso_alpha_2' => 'SE',
        'iso_alpha_3' => 'SWE' 
    ],
    'CH' => [
        'name' => 'Switzerland',
        'nationality' => 'Swiss',
        'dial_code' => '+41',
        'iso_alpha_2' => 'CH',
        'iso_alpha_3' => 'CHE' 
    ],
    'SY' => [
        'name' => 'Syria',
        'nationality' => 'Syrian',
        'dial_code' => '+963',
        'iso_alpha_2' => 'SY',
        'iso_alpha_3' => 'SYR' 
    ],

    // T Country Names
    'TW' => [
        'name' => 'Taiwan',
        'nationality' => 'Taiwanese',
        'dial_code' => '+886',
        'iso_alpha_2' => 'TW',
        'iso_alpha_3' => 'TWN' 
    ],
    'TJ' => [
        'name' => 'Tajikistan',
        'nationality' => 'Tajik',
        'dial_code' => '+992',
        'iso_alpha_2' => 'TJ',
        'iso_alpha_3' => 'TJK' 
    ],
    'TZ' => [
        'name' => 'Tanzania',
        'nationality' => 'Tanzanian',
        'dial_code' => '+255',
        'iso_alpha_2' => 'TZ',
        'iso_alpha_3' => 'TZA' 
    ],
    'TH' => [
        'name' => 'Thailand',
        'nationality' => 'Thai',
        'dial_code' => '+66',
        'iso_alpha_2' => 'TH',
        'iso_alpha_3' => 'THA' 
    ],
    'TL' => [
        'name' => 'Timor-Leste',
        'nationality' => 'Timorese',
        'dial_code' => '+670',
        'iso_alpha_2' => 'TL',
        'iso_alpha_3' => 'TLS' 
    ],
    'TG' => [
        'name' => 'Togo',
        'nationality' => 'Togolese',
        'dial_code' => '+228',
        'iso_alpha_2' => 'TG',
        'iso_alpha_3' => 'TGO' 
    ],
    'TK' => [
        'name' => 'Tokelau',
        'nationality' => 'Tokelau',
        'dial_code' => '+690',
        'iso_alpha_2' => 'TK',
        'iso_alpha_3' => 'TKL' 
    ],
    'TO' => [
        'name' => 'Tonga',
        'nationality' => 'Tongan',
        'dial_code' => '+676',
        'iso_alpha_2' => 'TO',
        'iso_alpha_3' => 'TON' 
    ],
    'TT' => [
        'name' => 'Trinidad And Tobago',
        'nationality' => 'Trinidadian/Tobagonian',
        'dial_code' => '+1',
        'iso_alpha_2' => 'TT',
        'iso_alpha_3' => 'TTO' 
    ],
    'TN' => [
        'name' => 'Tunisia',
        'nationality' => 'Tunisian',
        'dial_code' => '+216',
        'iso_alpha_2' => 'TN',
        'iso_alpha_3' => 'TUN' 
    ],
    'TR' => [
        'name' => 'Turkey',
        'nationality' => 'Turkish',
        'dial_code' => '+90',
        'iso_alpha_2' => 'TR',
        'iso_alpha_3' => 'TUR' 
    ],
    'TM' => [
        'name' => 'Turkmenistan',
        'nationality' => 'Turkmen',
        'dial_code' => '+993',
        'iso_alpha_2' => 'TM',
        'iso_alpha_3' => 'TKM' 
    ],
    'TC' => [
        'name' => 'Turks And Caicos Islands',
        'nationality' => 'Turks And Caicos Islander',
        'dial_code' => '+1',
        'iso_alpha_2' => 'TC',
        'iso_alpha_3' => 'TCA' 
    ],
    'TV' => [
        'name' => 'Tuvalu',
        'nationality' => 'Tuvaluan',
        'dial_code' => '+688',
        'iso_alpha_2' => 'TV',
        'iso_alpha_3' => 'TUV' 
    ],

    // U Country Names
    'UG' => [
        'name' => 'Uganda',
        'nationality' => 'Ugandan',
        'dial_code' => '+256',
        'iso_alpha_2' => 'UG',
        'iso_alpha_3' => 'UGA' 
    ],
    'UA' => [
        'name' => 'Ukraine',
        'nationality' => 'Ukrainian',
        'dial_code' => '+380',
        'iso_alpha_2' => 'UA',
        'iso_alpha_3' => 'UKR' 
    ],
    'AE' => [
        'name' => 'United Arab Emirates',
        'nationality' => 'Emirati',
        'dial_code' => '+971',
        'iso_alpha_2' => 'AE',
        'iso_alpha_3' => 'ARE' 
    ],
    'GB' => [
        'name' => 'United Kingdom',
        'nationality' => 'British',
        'dial_code' => '+44',
        'iso_alpha_2' => 'GB',
        'iso_alpha_3' => 'GBR' 
    ],
    'US' => [
        'name' => 'United States',
        'nationality' => 'American',
        'dial_code' => '+1',
        'iso_alpha_2' => 'US',
        'iso_alpha_3' => 'USA' 
    ],
    'UY' => [
        'name' => 'Uruguay',
        'nationality' => 'Uruguayan',
        'dial_code' => '+598',
        'iso_alpha_2' => 'UY',
        'iso_alpha_3' => 'URY' 
    ],
    'UZ' => [
        'name' => 'Uzbekistan',
        'nationality' => 'Uzbekistani',
        'dial_code' => '+998',
        'iso_alpha_2' => 'UZ',
        'iso_alpha_3' => 'UZB' 
    ],

    // V Country Names
    'VU' => [
        'name' => 'Vanuatu',
        'nationality' => 'Vanuatu',
        'dial_code' => '+678',
        'iso_alpha_2' => 'VU',
        'iso_alpha_3' => 'VUT'
    ],
    'VA' => [
        'name' => 'Vatican City (Holy See)',
        'nationality' => 'Vatican Citizen',
        'dial_code' => '+379',
        'iso_alpha_2' => 'VA',
        'iso_alpha_3' => 'VAT' 
    ],
    'VE' => [
        'name' => 'Venezuela',
        'nationality' => 'Venezuelan',
        'dial_code' => '+58',
        'iso_alpha_2' => 'VE',
        'iso_alpha_3' => 'VEN' 
    ],
    'VN' => [
        'name' => 'Vietnam',
        'nationality' => 'Vietnamese',
        'dial_code' => '+84',
        'iso_alpha_2' => 'VN',
        'iso_alpha_3' => 'VNM' 
    ],
    'VG' => [
        'name' => 'Virgin Islands, British',
        'nationality' => 'Virgin Islands, British',
        'dial_code' => '+1',
        'iso_alpha_2' => 'VG',
        'iso_alpha_3' => 'VGB' 
    ],
    'VI' => [
        'name' => 'Virgin Islands, U.S.',
        'nationality' => 'U.S Virgin Islander',
        'dial_code' => '+1',
        'iso_alpha_2' => 'VI',
        'iso_alpha_3' => 'VIR' 
    ],

    // W Country Names
    'WF' => [
        'name' => 'Wallis And Futuna',
        'nationality' => 'Welsh',
        'dial_code' => '+681',
        'iso_alpha_2' => 'WF',
        'iso_alpha_3' => 'WLF' 
    ],
    'EH' => [
        'name' => 'Western Sahara',
        'nationality' => 'Western Saharan',
        'dial_code' => '+212',
        'iso_alpha_2' => 'EH',
        'iso_alpha_3' => 'ESH' 
    ],

    // Y Country Names
    'YE' => [
        'name' => 'Yemen',
        'nationality' => 'Yemenite',
        'dial_code' => '+967',
        'iso_alpha_2' => 'YE',
        'iso_alpha_3' => 'YEM' 
    ],

    // Z Country Names
    'ZM' => [
        'name' => 'Zambia',
        'nationality' => 'Zambian',
        'dial_code' => '+260',
        'iso_alpha_2' => 'ZM',
        'iso_alpha_3' => 'ZMB' 
    ],
    'ZW' => [
        'name' => 'Zimbabwe',
        'nationality' => 'Zimbabwean',
        'dial_code' => '+263',
        'iso_alpha_2' => 'ZW',
        'iso_alpha_3' => 'ZWE' 
    ],
];




//SCRIPT BELOW INSERTS THE DATA INTO YOUR DATABASE

//Iterate through the array and build the SQL statement
foreach ($countriesWithCode as $code => $data) {
    $name = $data['name'];
    $nationality = $data['nationality'];
    $dial_code = $data['dial_code'];
    $iso_alpha_2 = $data['iso_alpha_2'];
    $iso_alpha_3 = $data['iso_alpha_3'];

    // Insert into the database table using prepared statement
    $addCountry = "INSERT INTO countries (country_name, nationality, dial_code, iso_alpha_2, iso_alpha_3) VALUES (?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($conn, $addCountry)) {
        mysqli_stmt_bind_param($stmt, "sssss", $name, $nationality, $dial_code, $iso_alpha_2, $iso_alpha_3);
        mysqli_stmt_execute($stmt);
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Remove the trailing comma and space
    $addCountry = rtrim($addCountry, ', ');
}


