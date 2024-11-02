<?php


use Illuminate\Support\Facades\DB;

class CountrySeeder extends DatabaseSeeder {

    public function run()
    {
       DB::table('countries')->truncate();
       $statement = "INSERT INTO ".env('DB_PREFIX')."`countries` (`id`, `name`, `nationality`, `iso2`, `iso3`, `code`) VALUES
       (1, 'Afghanistan', 'Afghan', 'AF', 'AFG', 93),
       (2, 'Albania', 'Albanian', 'AL', 'ALB', 355),
       (3, 'Algeria', 'Algerian', 'DZ', 'DZA', 213),
       (4, 'American Samoa', 'American Samoan', 'AS', 'ASM', 1684),
       (5, 'Andorra', 'Andorran', 'AD', 'AND', 376),
       (6, 'Angola', 'Angolan', 'AO', 'AGO', 244),
       (7, 'Anguilla', 'Anguillan', 'AI', 'AIA', 1264),
       (9, 'Antigua and Barbuda', 'Antiguan or Barbudan', 'AG', 'ATG', 1268),
       (10, 'Argentina', 'Argentine', 'AR', 'ARG', 54),
       (11, 'Armenia', 'Armenian', 'AM', 'ARM', 374),
       (12, 'Aruba', 'Aruban', 'AW', 'ABW', 297),
       (13, 'Australia', 'Australian', 'AU', 'AUS', 61),
       (14, 'Austria', 'Austrian', 'AT', 'AUT', 43),
       (15, 'Azerbaijan', 'Azerbaijani', 'AZ', 'AZE', 994),
       (16, 'Bahamas', 'Bahamian', 'BS', 'BHS', 1242),
       (17, 'Bahrain', 'Bahraini', 'BH', 'BHR', 973),
       (18, 'Bangladesh', 'Bangladeshi', 'BD', 'BGD', 880),
       (19, 'Barbados', 'Barbadian', 'BB', 'BRB', 1246),
       (20, 'Belarus', 'Belarusian', 'BY', 'BLR', 375),
       (21, 'Belgium', 'Belgian', 'BE', 'BEL', 32),
       (22, 'Belize', 'Belizean', 'BZ', 'BLZ', 501),
       (23, 'Benin', 'Beninese', 'BJ', 'BEN', 229),
       (24, 'Bermuda', 'Bermudian', 'BM', 'BMU', 1441),
       (25, 'Bhutan', 'Bhutanese', 'BT', 'BTN', 975),
       (26, 'Bolivia', 'Bolivian', 'BO', 'BOL', 591),
       (27, 'Bosnia and Herzegovina', 'Bosnian or Herzegovinian', 'BA', 'BIH', 387),
       (28, 'Botswana', 'Botswanan', 'BW', 'BWA', 267),
       (30, 'Brazil', 'Brazilian', 'BR', 'BRA', 55),
       (32, 'Brunei Darussalam', 'Bruneian', 'BN', 'BRN', 673),
       (33, 'Bulgaria', 'Bulgarian', 'BG', 'BGR', 359),
       (34, 'Burkina Faso', 'Burkinabé', 'BF', 'BFA', 226),
       (35, 'Burundi', 'Burundian', 'BI', 'BDI', 257),
       (36, 'Cambodia', 'Cambodian', 'KH', 'KHM', 855),
       (37, 'Cameroon', 'Cameroonian', 'CM', 'CMR', 237),
       (38, 'Canada', 'Canadian', 'CA', 'CAN', 1),
       (39, 'Cape Verde', 'Cape Verde', 'CV', 'CPV', 238),
       (40, 'Cayman Islands', 'Caymanian', 'KY', 'CYM', 1345),
       (41, 'Central African Republic', 'Central African', 'CF', 'CAF', 236),
       (42, 'Chad', 'Chadian', 'TD', 'TCD', 235),
       (43, 'Chile', 'Chilean', 'CL', 'CHL', 56),
       (44, 'China', 'Chinese', 'CN', 'CHN', 86),
       (45, 'Christmas Island', 'Christmas Island', 'CX', NULL, 61),
       (46, 'Cocos (Keeling) Islands', 'Cocos Island', 'CC', NULL, 672),
       (47, 'Colombia', 'Colombian', 'CO', 'COL', 57),
       (48, 'Comoros', 'Comorian', 'KM', 'COM', 269),
       (49, 'Congo', 'Congolese', 'CG', 'COG', 242),
       (50, 'Congo, the Democratic Republic of the', 'Congolese', 'CD', 'COD', 242),
       (51, 'Cook Islands', 'Cook Island', 'CK', 'COK', 682),
       (52, 'Costa Rica', 'Costa Rican', 'CR', 'CRI', 506),
       (53, 'Cote D\'Ivoire', 'Ivorian', 'CI', 'CIV', 225),
       (54, 'Croatia', 'Croatian', 'HR', 'HRV', 385),
       (55, 'Cuba', 'Cuban', 'CU', 'CUB', 53),
       (56, 'Cyprus', 'Cypriot', 'CY', 'CYP', 357),
       (57, 'Czech Republic', 'Czech', 'CZ', 'CZE', 420),
       (58, 'Denmark', 'Danish', 'DK', 'DNK', 45),
       (59, 'Djibouti', 'Djiboutian', 'DJ', 'DJI', 253),
       (60, 'Dominica', 'Dominican', 'DM', 'DMA', 1767),
       (61, 'Dominican Republic', 'Dominican', 'DO', 'DOM', 1809),
       (62, 'Ecuador', 'Ecuadorian', 'EC', 'ECU', 593),
       (63, 'Egypt', 'Egyptian', 'EG', 'EGY', 20),
       (64, 'El Salvador', 'Salvadoran', 'SV', 'SLV', 503),
       (65, 'Equatorial Guinea', 'Equatoguinean', 'GQ', 'GNQ', 240),
       (66, 'Eritrea', 'Eritrean', 'ER', 'ERI', 291),
       (67, 'Estonia', 'Estonian', 'EE', 'EST', 372),
       (68, 'Ethiopia', 'Ethiopian', 'ET', 'ETH', 251),
       (69, 'Falkland Islands (Malvinas)', 'Falkland Island', 'FK', 'FLK', 500),
       (70, 'Faroe Islands', 'Faroese', 'FO', 'FRO', 298),
       (71, 'Fiji', 'Fijian', 'FJ', 'FJI', 679),
       (72, 'Finland', 'Finnish', 'FI', 'FIN', 358),
       (73, 'France', 'French', 'FR', 'FRA', 33),
       (74, 'French Guiana', 'French Guianese', 'GF', 'GUF', 594),
       (75, 'French Polynesia', 'French Polynesian', 'PF', 'PYF', 689),
       (77, 'Gabon', 'Gabonese', 'GA', 'GAB', 241),
       (78, 'Gambia', 'Gambian', 'GM', 'GMB', 220),
       (79, 'Georgia', 'Georgian', 'GE', 'GEO', 995),
       (80, 'Germany', 'German', 'DE', 'DEU', 49),
       (81, 'Ghana', 'Ghanaian', 'GH', 'GHA', 233),
       (82, 'Gibraltar', 'Gibraltar', 'GI', 'GIB', 350),
       (83, 'Greece', 'Hellenic', 'GR', 'GRC', 30),
       (84, 'Greenland', 'Greenlandic', 'GL', 'GRL', 299),
       (85, 'Grenada', 'Grenadian', 'GD', 'GRD', 1473),
       (86, 'Guadeloupe', 'Guadeloupe', 'GP', 'GLP', 590),
       (87, 'Guam', 'Guamanian', 'GU', 'GUM', 1671),
       (88, 'Guatemala', 'Guatemalan', 'GT', 'GTM', 502),
       (89, 'Guinea', 'Guinean', 'GN', 'GIN', 224),
       (90, 'Guinea-Bissau', 'Bissau-Guinean', 'GW', 'GNB', 245),
       (91, 'Guyana', 'Guyanese', 'GY', 'GUY', 592),
       (92, 'Haiti', 'Haitian', 'HT', 'HTI', 509),
       (95, 'Honduras', 'Honduran', 'HN', 'HND', 504),
       (96, 'Hong Kong', 'Hong Kongese', 'HK', 'HKG', 852),
       (97, 'Hungary', 'Hungarian', 'HU', 'HUN', 36),
       (98, 'Iceland', 'Icelandic', 'IS', 'ISL', 354),
       (99, 'India', 'Indian', 'IN', 'IND', 91),
       (100, 'Indonesia', 'Indonesian', 'ID', 'IDN', 62),
       (101, 'Iran, Islamic Republic of', 'Iranian', 'IR', 'IRN', 98),
       (102, 'Iraq', 'Iraqi', 'IQ', 'IRQ', 964),
       (103, 'Ireland', 'Irish', 'IE', 'IRL', 353),
       (104, 'Israel', 'Israeli', 'IL', 'ISR', 972),
       (105, 'Italy', 'Italian', 'IT', 'ITA', 39),
       (106, 'Jamaica', 'Jamaican', 'JM', 'JAM', 1876),
       (107, 'Japan', 'Japanese', 'JP', 'JPN', 81),
       (108, 'Jordan', 'Jordanian', 'JO', 'JOR', 962),
       (109, 'Kazakhstan', 'Kazakhstani', 'KZ', 'KAZ', 7),
       (110, 'Kenya', 'Kenyan', 'KE', 'KEN', 254),
       (111, 'Kiribati', 'I-Kiribati', 'KI', 'KIR', 686),
       (112, 'Korea, Democratic People\'s Republic of', 'North Korean', 'KP', 'PRK', 850),
       (113, 'Korea, Republic of', 'South Korean', 'KR', 'KOR', 82),
       (114, 'Kuwait', 'Kuwaiti', 'KW', 'KWT', 965),
       (115, 'Kyrgyzstan', 'Kyrgyzstani', 'KG', 'KGZ', 996),
       (116, 'Lao People\'s Democratic Republic', 'Laotian', 'LA', 'LAO', 856),
       (117, 'Latvia', 'Latvian', 'LV', 'LVA', 371),
       (118, 'Lebanon', 'Lebanese', 'LB', 'LBN', 961),
       (119, 'Lesotho', 'Basotho', 'LS', 'LSO', 266),
       (120, 'Liberia', 'Liberian', 'LR', 'LBR', 231),
       (121, 'Libyan Arab Jamahiriya', 'Libyan', 'LY', 'LBY', 218),
       (122, 'Liechtenstein', 'Liechtenstein', 'LI', 'LIE', 423),
       (123, 'Lithuania', 'Lithuanian', 'LT', 'LTU', 370),
       (124, 'Luxembourg', 'Luxembourgish', 'LU', 'LUX', 352),
       (125, 'Macao', 'Macanese', 'MO', 'MAC', 853),
       (126, 'Macedonia, the Former Yugoslav Republic of', 'Macedonian', 'MK', 'MKD', 389),
       (127, 'Madagascar', 'Malagasy', 'MG', 'MDG', 261),
       (128, 'Malawi', 'Malawian', 'MW', 'MWI', 265),
       (129, 'Malaysia', 'Malaysian', 'MY', 'MYS', 60),
       (130, 'Maldives', 'Maldivian', 'MV', 'MDV', 960),
       (131, 'Mali', 'Malian', 'ML', 'MLI', 223),
       (132, 'Malta', 'Maltese', 'MT', 'MLT', 356),
       (133, 'Marshall Islands', 'MARSHALL ISLANDS', 'MH', 'MHL', 692),
       (134, 'Martinique', 'Martinican', 'MQ', 'MTQ', 596),
       (135, 'Mauritania', 'Mauritanian', 'MR', 'MRT', 222),
       (136, 'Mauritius', 'Mauritian', 'MU', 'MUS', 230),
       (137, 'Mayotte', 'Mahoran', 'YT', NULL, 269),
       (138, 'Mexico', 'Mexican', 'MX', 'MEX', 52),
       (139, 'Micronesia, Federated States of', 'Micronesian', 'FM', 'FSM', 691),
       (140, 'Moldova, Republic of', 'Moldovan', 'MD', 'MDA', 373),
       (141, 'Monaco', 'Monacan', 'MC', 'MCO', 377),
       (142, 'Mongolia', 'Mongolian', 'MN', 'MNG', 976),
       (143, 'Montserrat', 'Montserratian', 'MS', 'MSR', 1664),
       (144, 'Morocco', 'Moroccan', 'MA', 'MAR', 212),
       (145, 'Mozambique', 'Mozambican', 'MZ', 'MOZ', 258),
       (146, 'Myanmar', 'Burmese', 'MM', 'MMR', 95),
       (147, 'Namibia', 'Namibian', 'NA', 'NAM', 264),
       (148, 'Nauru', 'Nauruan', 'NR', 'NRU', 674),
       (149, 'Nepal', 'Nepali', 'NP', 'NPL', 977),
       (150, 'Netherlands', 'Dutch', 'NL', 'NLD', 31),
       (152, 'New Caledonia', 'New Caledonian', 'NC', 'NCL', 687),
       (153, 'New Zealand', 'New Zealand', 'NZ', 'NZL', 64),
       (154, 'Nicaragua', 'Nicaraguan', 'NI', 'NIC', 505),
       (155, 'Niger', 'Nigerian', 'NE', 'NER', 227),
       (156, 'Nigeria', 'Nigerian', 'NG', 'NGA', 234),
       (157, 'Niue', 'Niuean', 'NU', 'NIU', 683),
       (158, 'Norfolk Island', 'Norfolk Island', 'NF', 'NFK', 672),
       (159, 'Northern Mariana Islands', 'Northern Marianan', 'MP', 'MNP', 1670),
       (160, 'Norway', 'Norwegian', 'NO', 'NOR', 47),
       (161, 'Oman', 'Omani', 'OM', 'OMN', 968),
       (162, 'Pakistan', 'Pakistani', 'PK', 'PAK', 92),
       (163, 'Palau', 'Palauan', 'PW', 'PLW', 680),
       (164, 'Palestinian Territory, Occupied', 'Palestinian', 'PS', NULL, 970),
       (165, 'Panama', 'Panamanian', 'PA', 'PAN', 507),
       (166, 'Papua New Guinea', 'Papuan', 'PG', 'PNG', 675),
       (167, 'Paraguay', 'Paraguayan', 'PY', 'PRY', 595),
       (168, 'Peru', 'Peruvian', 'PE', 'PER', 51),
       (169, 'Philippines', 'Filipino', 'PH', 'PHL', 63),
       (171, 'Poland', 'Polish', 'PL', 'POL', 48),
       (172, 'Portugal', 'Portuguese', 'PT', 'PRT', 351),
       (173, 'Puerto Rico', 'Puerto Rican', 'PR', 'PRI', 1787),
       (174, 'Qatar', 'Qatari', 'QA', 'QAT', 974),
       (175, 'Reunion', 'Reunionese', 'RE', 'REU', 262),
       (176, 'Romania', 'Romanian', 'RO', 'ROM', 40),
       (177, 'Russian Federation', 'Russian', 'RU', 'RUS', 70),
       (178, 'Rwanda', 'Rwandan', 'RW', 'RWA', 250),
       (179, 'Saint Helena', 'Saint Helenian', 'SH', 'SHN', 290),
       (180, 'Saint Kitts and Nevis', 'Kittitian', 'KN', 'KNA', 1869),
       (181, 'Saint Lucia', 'Saint Lucian', 'LC', 'LCA', 1758),
       (182, 'Saint Pierre and Miquelon', 'Saint-Pierrais', 'PM', 'SPM', 508),
       (183, 'Saint Vincent and the Grenadines', 'Saint Vincentian', 'VC', 'VCT', 1784),
       (184, 'Samoa', 'Samoan', 'WS', 'WSM', 684),
       (185, 'San Marino', 'Sammarinese', 'SM', 'SMR', 378),
       (186, 'Sao Tome and Principe', 'Sao Tomean', 'ST', 'STP', 239),
       (187, 'Saudi Arabia', 'Saudi Arabian', 'SA', 'SAU', 966),
       (188, 'Senegal', 'Senegalese', 'SN', 'SEN', 221),
       (189, 'Serbia', 'Serbian', 'CS', NULL, 381),
       (190, 'Seychelles', 'Seychellois', 'SC', 'SYC', 248),
       (191, 'Sierra Leone', 'Sierra Leonean', 'SL', 'SLE', 232),
       (192, 'Singapore', 'Singaporean', 'SG', 'SGP', 65),
       (193, 'Slovakia', 'Slovak', 'SK', 'SVK', 421),
       (194, 'Slovenia', 'Slovenian', 'SI', 'SVN', 386),
       (195, 'Solomon Islands', 'Solomon Island', 'SB', 'SLB', 677),
       (196, 'Somalia', 'Somalian', 'SO', 'SOM', 252),
       (197, 'South Africa', 'South African', 'ZA', 'ZAF', 27),
       (199, 'Spain', 'Spanish', 'ES', 'ESP', 34),
       (200, 'Sri Lanka', 'Sri Lankan', 'LK', 'LKA', 94),
       (201, 'Sudan', 'Sudanese', 'SD', 'SDN', 249),
       (202, 'Suriname', 'Surinamese', 'SR', 'SUR', 597),
       (203, 'Svalbard and Jan Mayen', 'Svalbard', 'SJ', 'SJM', 47),
       (204, 'Swaziland', 'Swazi', 'SZ', 'SWZ', 268),
       (205, 'Sweden', 'Swedish', 'SE', 'SWE', 46),
       (206, 'Switzerland', 'Swiss', 'CH', 'CHE', 41),
       (207, 'Syrian Arab Republic', 'Syrian', 'SY', 'SYR', 963),
       (208, 'Taiwan, Province of China', 'Taiwanese', 'TW', 'TWN', 886),
       (209, 'Tajikistan', 'Tajikistani', 'TJ', 'TJK', 992),
       (210, 'Tanzania, United Republic of', 'Tanzanian', 'TZ', 'TZA', 255),
       (211, 'Thailand', 'Thai', 'TH', 'THA', 66),
       (212, 'Timor-Leste', 'Timorese', 'TL', NULL, 670),
       (213, 'Togo', 'Togolese', 'TG', 'TGO', 228),
       (214, 'Tokelau', 'Tokelauan', 'TK', 'TKL', 690),
       (215, 'Tonga', 'Tongan', 'TO', 'TON', 676),
       (216, 'Trinidad and Tobago', 'Trinidadian', 'TT', 'TTO', 1868),
       (217, 'Tunisia', 'Tunisian', 'TN', 'TUN', 216),
       (218, 'Turkey', 'Turkish', 'TR', 'TUR', 90),
       (219, 'Turkmenistan', 'Turkmen', 'TM', 'TKM', 993),
       (220, 'Turks and Caicos Islands', 'Turks and Caicos Island', 'TC', 'TCA', 1649),
       (221, 'Tuvalu', 'Tuvaluan', 'TV', 'TUV', 688),
       (222, 'Uganda', 'Ugandan', 'UG', 'UGA', 256),
       (223, 'Ukraine', 'Ukrainian', 'UA', 'UKR', 380),
       (224, 'United Arab Emirates', 'Emirati', 'AE', 'ARE', 971),
       (225, 'United Kingdom', 'British', 'GB', 'GBR', 44),
       (226, 'United States', 'American', 'US', 'USA', 1),
       (228, 'Uruguay', 'Uruguayan', 'UY', 'URY', 598),
       (229, 'Uzbekistan', 'Uzbekistani', 'UZ', 'UZB', 998),
       (230, 'Vanuatu', 'Vanuatuan', 'VU', 'VUT', 678),
       (231, 'Venezuela', 'Venezuelan', 'VE', 'VEN', 58),
       (232, 'Viet Nam', 'Vietnamese', 'VN', 'VNM', 84),
       (235, 'Wallis and Futuna', 'Wallis and Futuna', 'WF', 'WLF', 681),
       (236, 'Western Sahara', 'Sahrawi', 'EH', 'ESH', 212),
       (237, 'Yemen', 'Yemeni', 'YE', 'YEM', 967),
       (238, 'Zambia', 'Zambian', 'ZM', 'ZMB', 260),
       (239, 'Zimbabwe', 'Zimbabwean', 'ZW', 'ZWE', 263);";
        DB::unprepared($statement);

    }

}