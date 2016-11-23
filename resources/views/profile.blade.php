@extends('layouts.admin')
@section('title','Profile')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->

            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->

            <div class="col-md-3">
                <div class="profile-sidebar" style="width:250px;">
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            <img src="@if(Auth::user()->image == ""){{url('/img/me.jpg')}} @else {{url('/uploads')."/".Auth::user()->image}} @endif" class="img-responsive" alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                {{Auth::user()->name}}
                            </div>

                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->

                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">

                        </div>
                        <!-- END MENU -->
                    </div>
                    <!-- END PORTLET MAIN -->
                    <!-- PORTLET MAIN -->

                    <!-- END PORTLET MAIN -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="portlet light">
                    <div class="portlet-title tabbable-line">
                        <div class="caption caption-md">
                            <i class="icon-globe theme-font hide"></i>
                            <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1_1" data-toggle="tab" aria-expanded="true">Personal Info</a>
                            </li>
                            <li class="">
                                <a href="#tab_1_2" data-toggle="tab" aria-expanded="false">Change Avatar</a>
                            </li>
                            <li class="">
                                <a href="#tab_1_3" data-toggle="tab" aria-expanded="false">Change Password</a>
                            </li>

                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <!-- PERSONAL INFO TAB -->
                            <div class="tab-pane active" id="tab_1_1">
                                <form role="form" action="#">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input id="name" type="text" placeholder="Your name"
                                               value="{{Auth::user()->name}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Mobile Number</label>
                                        <input id="mobile" type="text" value="{{Auth::user()->mobile}}"
                                               placeholder="+8801***********"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Nationality</label>
                                        <select class="form-control" id="nationality">
                                            <option value="ALB">AFGHANISTAN</option>
                                            <option value="DZA">ALGERIAN</option>
                                            <option value="ASM">AMERICAN SAMOAN</option>
                                            <option value="AND">ANDORRAN</option>
                                            <option value="AGO">ANGOLAN</option>
                                            <option value="AIA">ANGUILLAN</option>
                                            <option value="ATA">ANTARTICAN</option>
                                            <option value="ATG">ANTIGUAN, BARBUDAN</option>
                                            <option value="ARG">ARGENTINE</option>
                                            <option value="ARM">ARMENIAN</option>
                                            <option value="ABW">ARUBAN, DUTCH</option>
                                            <option value="AUS">AUSTRALIAN</option>
                                            <option value="AUT">AUSTRIAN</option>
                                            <option value="AZE">AZERIS, AZERBAIJANI</option>
                                            <option value="BHS">BAHAMIAN</option>
                                            <option value="BHR">BAHRAINI</option>
                                            <option selected="selected" value="BGD">BANGLADESHI</option>
                                            <option value="BRB">BARBADIAN, BAJAN</option>
                                            <option value="BLR">BELARUSIAN</option>
                                            <option value="BEL">BELGIAN</option>
                                            <option value="BLZ">BELIZEAN</option>
                                            <option value="BEN">BENINESE</option>
                                            <option value="BMU">BERMUDIAN</option>
                                            <option value="BTN">BHUTANESE</option>
                                            <option value="BOL">BOLIVIAN</option>
                                            <option value="BIH">BOSNIAN, HERZEGOVINIAN</option>
                                            <option value="BWA">MOTSWANA, BATSWANA</option>
                                            <option value="BVT">BOUVET ISLANDER</option>
                                            <option value="BRA">BRAZILLIAN</option>
                                            <option value="IOT">BRITH VIRGIN ISLANDER</option>
                                            <option value="BRN">BRUNEIAN</option>
                                            <option value="BGR">BULGARIAN</option>
                                            <option value="BFA">BURKINABE</option>
                                            <option value="BDI">BURUNDIAN</option>
                                            <option value="KHM">CAMBODIAN</option>
                                            <option value="CMR">CAMEROONIAN</option>
                                            <option value="CAN">CANADIAN</option>
                                            <option value="CPV">CAPE VERDEAN</option>
                                            <option value="CYM">CAYMANIAN</option>
                                            <option value="CAF">CENTRAL AFRICAN</option>
                                            <option value="TCD">CHADIAN</option>
                                            <option value="CHL">CHILEAN</option>
                                            <option value="CHN">CHINESE</option>
                                            <option value="CXR">CHRISTMAS ISLANDER</option>
                                            <option value="CCK">COCOS ISLANDER</option>
                                            <option value="COL">COLOMBIAN</option>
                                            <option value="COM">COMORAN</option>
                                            <option value="COD">CONGOLESE, CONGO</option>
                                            <option value="COG">CONGOLESE, CONGO</option>
                                            <option value="COK">COOK ISLANDER</option>
                                            <option value="CRI">COSTA RICAN</option>
                                            <option value="CIV">IVOIRIAN</option>
                                            <option value="HRV">CROATIAN</option>
                                            <option value="CUB">CUBAN</option>
                                            <option value="CYP">CYPRIOT</option>
                                            <option value="CZE">CZECH</option>
                                            <option value="DNK">DANISH</option>
                                            <option value="DJI">DJIBOUTIAN</option>
                                            <option value="DMA">DOMINICAN</option>
                                            <option value="DOM">DOMINICAN</option>
                                            <option value="TLS">TIMORESE</option>
                                            <option value="ECU">ECUADORIAN</option>
                                            <option value="EGY">EGYPTIAN</option>
                                            <option value="SLV">SALVADORAN</option>
                                            <option value="GNQ">EQUATORIAL GUINEAN, EQUATOGUINEAN</option>
                                            <option value="ERI">ERITREAN</option>
                                            <option value="EST">ESTONIAN</option>
                                            <option value="ETH">ETHIOPIAN</option>
                                            <option value="FLK">FALKLAND ISLAND</option>
                                            <option value="FRO">FAROESE</option>
                                            <option value="FJI">FIJIAN</option>
                                            <option value="FIN">FINNISH</option>
                                            <option value="FRA">FRENCH</option>
                                            <option value="GUF">FRENCH GUIANAN</option>
                                            <option value="PYF">FRENCH POLYNESIAN</option>
                                            <option value="ATF">FRENCH</option>
                                            <option value="GAB">GABONESE</option>
                                            <option value="GMB">GAMBIAN</option>
                                            <option value="GEO">GEORGIAN</option>
                                            <option value="DEU">GERMAN</option>
                                            <option value="GHA">GHANAIAN</option>
                                            <option value="GIB">GIBRALTAR</option>
                                            <option value="GRC">GREEK</option>
                                            <option value="GRL">GREENLANDIC</option>
                                            <option value="GRD">GRENADIAN</option>
                                            <option value="GLP">GUADELOUPEAN</option>
                                            <option value="GUM">GUAMANIAN</option>
                                            <option value="GTM">GUATEMALAN</option>
                                            <option value="GGY">CHANNEL ISLANDER</option>
                                            <option value="GIN">GUINEAN</option>
                                            <option value="GNB">GUINEAN</option>
                                            <option value="GUY">GUYANESE</option>
                                            <option value="HTI">HAITIAN</option>
                                            <option value="HMD">HEARD AND MCDONALD ISLANDSER</option>
                                            <option value="VAT">-</option>
                                            <option value="HND">HONDURAN</option>
                                            <option value="HKG">CHINESE, HONG KONG</option>
                                            <option value="HUN">HUNGARIAN</option>
                                            <option value="ISL">ICELANDIC</option>
                                            <option value="IND">INDIAN</option>
                                            <option value="IDN">INDONESIAN</option>
                                            <option value="IRN">IRANIAN</option>
                                            <option value="IRQ">IRAQI</option>
                                            <option value="IRL">IRISH</option>
                                            <option value="ISR">ISRAELI</option>
                                            <option value="ITA">ITALIAN</option>
                                            <option value="JAM">JAMAICAN</option>
                                            <option value="JPN">JAPANESE</option>
                                            <option value="JEY">CHANNEL ISLANDER</option>
                                            <option value="JOR">JORDANIAN</option>
                                            <option value="KAZ">KAZAKHSTANI</option>
                                            <option value="KEN">KENYAN</option>
                                            <option value="KIR">I-KIRIBATI</option>
                                            <option value="PRK">KOREAN</option>
                                            <option value="KOR">KOREAN</option>
                                            <option value="RKS">KOSOVAN</option>
                                            <option value="KWT">KUWAITI</option>
                                            <option value="KGZ">KYRGYZSTANI</option>
                                            <option value="LAO">LAO, LAOTIAN</option>
                                            <option value="LVA">LATVIAN</option>
                                            <option value="LBN">LEBANESE</option>
                                            <option value="LSO">BASOTHO</option>
                                            <option value="LBR">LIBERIAN</option>
                                            <option value="LBY">LYBYAN</option>
                                            <option value="LIE">LIECHTENSTEIN</option>
                                            <option value="LTU">LITHUANIAN</option>
                                            <option value="LUX">LUXEMBOURG</option>
                                            <option value="MAC">CHINESE</option>
                                            <option value="MKD">MACEDONIAN</option>
                                            <option value="MDG">MALAGASY</option>
                                            <option value="MWI">MALAWIAN</option>
                                            <option value="MYS">MALAYSIAN</option>
                                            <option value="MDV">MALDIVIAN</option>
                                            <option value="MLI">MALIAN</option>
                                            <option value="MLT">MALTESE</option>
                                            <option value="IMN">MANX</option>
                                            <option value="MHL">MARSHALLESE</option>
                                            <option value="MTQ">MAURITANIAN</option>
                                            <option value="MRT">MAURITIAN</option>
                                            <option value="MUS">MAURITIAN</option>
                                            <option value="MYT">MAHORAN</option>
                                            <option value="AFG">AFGHANISTAN</option>
                                            <option value="MEX">MEXICAN</option>
                                            <option value="FSM">MICRONESIAN, CHUUKESE, KOSRAEN, POHNPEIAN, YAPESE
                                            </option>
                                            <option value="MDA">MOLDOVAN</option>
                                            <option value="MCO">MONEGASQUE, MONACAN</option>
                                            <option value="MNG">MONGOLIAN</option>
                                            <option value="MNE">MONTENEGRAN</option>
                                            <option value="MSR">MONTSERRATIAN</option>
                                            <option value="MAR">MOROCCAN</option>
                                            <option value="MOZ">MOZAMBICAN</option>
                                            <option value="MMR">BURMESE</option>
                                            <option value="NAM">NAMIBIAN</option>
                                            <option value="NRU">NAURUAN</option>
                                            <option value="NPL">NEPALESE</option>
                                            <option value="NLD">DUTCH</option>
                                            <option value="ANT">DUTCH ANTILLEAN</option>
                                            <option value="NCL">NEW CALEDONIAN</option>
                                            <option value="NZL">NEW ZEALAND</option>
                                            <option value="NIC">NICARAGUAN</option>
                                            <option value="NER">NIGERIEN</option>
                                            <option value="NGA">NIGERIAN</option>
                                            <option value="NIU">NIEUAN</option>
                                            <option value="NFK">NORFOLK ISLANDER</option>
                                            <option value="MNP">-</option>
                                            <option value="NOR">NORWEGIAN</option>
                                            <option value="OMN">OMANI</option>
                                            <option value="PAK">PAKISTANI</option>
                                            <option value="PLW">PALAUAN</option>
                                            <option value="PSE">PALESTINIAN</option>
                                            <option value="PAN">PANAMIAN</option>
                                            <option value="PNG">PAPUA NEW GUINEAN</option>
                                            <option value="PRY">PARAGUAYAN</option>
                                            <option value="PER">PERUVIAN</option>
                                            <option value="PHL">PHILIPPINE</option>
                                            <option value="PCN">PITCAIRN ISLANDER</option>
                                            <option value="POL">POLISH</option>
                                            <option value="PRT">PORTUGUESE</option>
                                            <option value="PRI">PUERTO RICAN</option>
                                            <option value="QAT">QATARI</option>
                                            <option value="REU">-</option>
                                            <option value="ROU">ROMANIAN</option>
                                            <option value="RUS">RUSSIAN</option>
                                            <option value="RWA">RWANDAN</option>
                                            <option value="SHN">SAINT HELENIAN</option>
                                            <option value="KNA">KITTITIAN, NEVISIAN</option>
                                            <option value="LCA">SAINT LUCIAN</option>
                                            <option value="SPM">FRENCH</option>
                                            <option value="VCT">SAINT VINCENTIAN, VINCENTIAN</option>
                                            <option value="WSM">SAMOAN</option>
                                            <option value="SMR">SAMMARINESE</option>
                                            <option value="STP">SAO TOMEAN</option>
                                            <option value="SAU">SAUDI, SAUDI ARABIAN</option>
                                            <option value="SEN">SENEGALESE</option>
                                            <option value="SRB">SERBIAN</option>
                                            <option value="SYC">SEYCHELLOIS</option>
                                            <option value="SLE">SIERRA LEONEAN</option>
                                            <option value="SGP">SINGAPOREAN</option>
                                            <option value="SVK">SLOVAK</option>
                                            <option value="SVN">SLOVENIAN</option>
                                            <option value="SLB">SOLOMON ISLANDER</option>
                                            <option value="SOM">SOMALI</option>
                                            <option value="ZAF">SOUTH AFRICAN</option>
                                            <option value="SGS">-</option>
                                            <option value="ESP">SPANISH</option>
                                            <option value="LKA">SRI LANKAN</option>
                                            <option value="SDN">SUDANESE</option>
                                            <option value="SUR">SURINAMESE</option>
                                            <option value="SJM">-</option>
                                            <option value="SWZ">SWAZI</option>
                                            <option value="SWE">SWEDISH</option>
                                            <option value="CHE">SWISS</option>
                                            <option value="SYR">SYRIAN</option>
                                            <option value="TWN">TAIWAN</option>
                                            <option value="TJK">TAJIKISTANI</option>
                                            <option value="TZA">TANZANIAN</option>
                                            <option value="THA">THAI</option>
                                            <option value="TGO">TOGOLESE</option>
                                            <option value="TKL">TOKELAUAN</option>
                                            <option value="TON">TONGAN</option>
                                            <option value="TTO">TRINIDADIAN, TOBAGONIAN</option>
                                            <option value="TUN">TUNISIAN</option>
                                            <option value="TUR">TURKISH</option>
                                            <option value="TKM">TURKMENISTANI</option>
                                            <option value="TCA">-</option>
                                            <option value="TUV">TUVALUAN</option>
                                            <option value="UGA">UGANDAN</option>
                                            <option value="UKR">UKRAINIAN</option>
                                            <option value="ARE">EMIRATI</option>
                                            <option value="GBR">BRITISH</option>
                                            <option value="UMI">-</option>
                                            <option value="USA">AMERICAN</option>
                                            <option value="URY">URUGUAYAN</option>
                                            <option value="UZB">UZBEKISTANI</option>
                                            <option value="VUT">NI-VANUATU</option>
                                            <option value="VEN">VENEZUELAN</option>
                                            <option value="VNM">VIETNAMESE</option>
                                            <option value="VGB">VIRGIN ISLANDER</option>
                                            <option value="VIR">VIRGIN ISLANDER</option>
                                            <option value="WLF">WALLISIAN, FUTUNAN, FUTUNA ISLANDER</option>
                                            <option value="ESH">SAHRAWI, SAHRAWIAN, SAHRAOUIAN</option>
                                            <option value="YEM">YEMENI</option>
                                            <option value="YUG">-</option>
                                            <option value="ZMB">ZAMBIAN</option>
                                            <option value="ZWE">ZIMBABWEAN</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Known as</label>
                                        <select id="knownAs" class="form-control">
                                            @foreach(\App\Known::where('identity','as')->get() as $as)
                                                <option value="{{$as->value}}">{{$as->value}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Known at</label>
                                        <select id="knownAt" class="form-control">
                                            @foreach(\App\Known::where('identity','at')->get() as $at)
                                                <option value="{{$at->value}}">{{$at->value}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        <input id="address" type="text" value="" placeholder=""
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Landmark</label>
                                        <input id="landmark" type="text" value="{{Auth::user()->landmark}}"
                                               placeholder=""
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">District</label>
                                        <select id="district" class="form-control">
                                            @if(Auth::user()->district == null)
                                                <option selected>Dahak</option>
                                            @else
                                                <option selected>{{Auth::user()->district}}</option>
                                            @endif
                                            <option>BAGERHAT</option>
                                            <option>BANDARBAN</option>
                                            <option>BARGUNA</option>
                                            <option>BARISAL</option>
                                            <option>BHOLA</option>
                                            <option>BOGRA</option>
                                            <option>BRAHMANBARIA</option>
                                            <option>CHANDPUR</option>
                                            <option>CHAPAINAWABGANJ</option>
                                            <option>CHITTAGONG</option>
                                            <option>CHUADANGA</option>
                                            <option>COMILLA</option>
                                            <option>COX'S BAZAR</option>
                                            <option>DHAKA</option>
                                            <option>DINAJPUR</option>
                                            <option>DUBAI</option>
                                            <option>FARIDPUR</option>
                                            <option>FENI</option>
                                            <option>GAIBANDHA</option>
                                            <option>GAZIPUR</option>
                                            <option>GOPALGANJ</option>
                                            <option>HABIGANJ</option>
                                            <option>JAMALPUR</option>
                                            <option>JESSORE</option>
                                            <option>JHALAKATI</option>
                                            <option>JHENAIDAH</option>
                                            <option>JOYPURHAT</option>
                                            <option>KHAGRACHHARI</option>
                                            <option>KHULNA</option>
                                            <option>KISHOREGANJ</option>
                                            <option>KURIGRAM</option>
                                            <option>KUSHTIA</option>
                                            <option>LAKSHMIPUR</option>
                                            <option>LALMONIRHAT</option>
                                            <option>MADARIPUR</option>
                                            <option>MAGURA</option>
                                            <option>MALAYSIA</option>
                                            <option>MANIKGANJ</option>
                                            <option>MEHERPUR</option>
                                            <option>MOULVIBAZAR</option>
                                            <option>MUNSHIGANJ</option>
                                            <option>MYMENSINGH</option>
                                            <option>NAOGAON</option>
                                            <option>NARAIL</option>
                                            <option>NARAYANGANJ</option>
                                            <option>NARSINGDI</option>
                                            <option>NATORE</option>
                                            <option>NETROKONA</option>
                                            <option>NILPHAMARI</option>
                                            <option>NOAKHALI</option>
                                            <option>PABNA</option>
                                            <option>PANCHAGARH</option>
                                            <option>PATUAKHALI</option>
                                            <option>PIROJPUR</option>
                                            <option>RAJBARI</option>
                                            <option>RAJSHAHI</option>
                                            <option>RANGAMATI</option>
                                            <option>RANGPUR</option>
                                            <option>SATKHIRA</option>
                                            <option>SHARIATPUR</option>
                                            <option>SHERPUR</option>
                                            <option>SIRAJGANJ</option>
                                            <option>SUNAMGANJ</option>
                                            <option>SYLHET</option>
                                            <option>TANGAIL</option>
                                            <option>THAKURGAON</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Area</label>
                                        <select class='form-control' id="area">
                                            <option value="1311">ABDULLAHPUR</option>
                                            <option value="1207">AGARGAON</option>
                                            <option value="1323">AGLA</option>
                                            <option value="1100">AGRA</option>
                                            <option value="1206">AIR HEADQUARTERS</option>
                                            <option value="1230">AJAMPUR</option>
                                            <option value="1330">AL AMIN BAZAR</option>
                                            <option value="1348">AMIN BAZAR</option>
                                            <option value="1320">AOWNA</option>
                                            <option value="1000">ARAMBAG</option>
                                            <option value="1230">ASHKONA</option>
                                            <option value="1211">ASHRAFABAD</option>
                                            <option value="1341">ASHULIA</option>
                                            <option value="1312">ATI BAZAR</option>
                                            <option value="1100">ATI</option>
                                            <option value="1321">AWRANGABAD</option>
                                            <option value="1348">AZAD MUSLIM CLUB</option>
                                            <option value="1348">AZAD PRESS</option>
                                            <option value="1331">BABU BAZAR</option>
                                            <option value="1214">BADDA</option>
                                            <option value="1345">BAF BASE</option>
                                            <option value="1811">BALIA</option>
                                            <option value="1213">BANANI-1213</option>
                                            <option value="1214">BANANI-1214</option>
                                            <option value="1222">BANGABHABAN</option>
                                            <option value="1214">BANGLA ACADEMY</option>
                                            <option value="1100">BANGLA BAZAR</option>
                                            <option value="1214">BANGLADESH AIRFORCE BASE</option>
                                            <option value="1230">BARA BERAID</option>
                                            <option value="1350">BARIGAON</option>
                                            <option value="1345">BARNOL</option>
                                            <option value="1345">BAROS BALI</option>
                                            <option value="1320">BARRAH</option>
                                            <option value="1229">BARUA</option>
                                            <option value="1214">BASABO</option>
                                            <option value="1351">BASE WORKSHOP</option>
                                            <option value="1214">BD SECRETARIAT (LEVEL-1)</option>
                                            <option value="1214">BD SECRETARIAT (LEVEL-2)</option>
                                            <option value="1214">BD SECRETARIAT (LEVEL-3)</option>
                                            <option value="1216">BD SHARIF</option>
                                            <option value="1310">BEOTA</option>
                                            <option value="1313">BHAKURTA</option>
                                            <option value="1214">BIDC TOWN</option>
                                            <option value="1216">BIRULIA</option>
                                            <option value="1349">BKSP</option>
                                            <option value="1219">BONOSREE</option>
                                            <option value="1320">BORDHAN</option>
                                            <option value="1310">BRAMONKRITA</option>
                                            <option value="1214">BRTA</option>
                                            <option value="1211">BUET</option>
                                            <option value="1204">CHALK BAZAR (NOISHO)</option>
                                            <option value="1204">CHALK BAZAR</option>
                                            <option value="1320">CHHOTO BOX NAGAR</option>
                                            <option value="1322">CHOWDHURY BOALI</option>
                                            <option value="1325">CHURAIN</option>
                                            <option value="1331">CIVIL DEFENCE ACADEMY</option>
                                            <option value="1343">CRP CHAPAIN</option>
                                            <option value="1215">DAILY ITTAFAQ (NOISHO)</option>
                                            <option value="1215">DAILY ITTAFAQ</option>
                                            <option value="1341">DAIRY FARM</option>
                                            <option value="1321">DAKSHIN BARRAH</option>
                                            <option value="1230">DAKSHIN KHAN</option>
                                            <option value="1226">DANIA</option>
                                            <option value="1230">DASHERKANDI</option>
                                            <option value="1322">DAUDPUR</option>
                                            <option value="1820">DELDAH</option>
                                            <option value="1360">DEMRA</option>
                                            <option value="1321">DEOTOLA</option>
                                            <option value="1208">DHAKA CANTONMENT (NOISHO)</option>
                                            <option value="1206">DHAKA CANTONMENT</option>
                                            <option value="1321">DHAKA COURT</option>
                                            <option value="1000">DHAKA GPO</option>
                                            <option value="1311">DHAKA JUTE MILLS</option>
                                            <option value="1208">DHAKA MEDICAL COLLEGE</option>
                                            <option value="1208">DHAKA POLYTECHNIC INSTITUTE</option>
                                            <option value="1100">DHAKA SADAR</option>
                                            <option value="1208">DHAKA UNIVERSITY</option>
                                            <option value="1229">DHAKA ZOO</option>
                                            <option value="1350">DHAMRAI</option>
                                            <option value="1349">DHAMSONA</option>
                                            <option value="1209">DHANMONDI</option>
                                            <option value="1340">DHOLLA BAZAR</option>
                                            <option value="1223">DILKUSHA-1223</option>
                                            <option value="1350">DILKUSHA-1350</option>
                                            <option value="1330">DOHAR</option>
                                            <option value="1311">DOLESHWAR</option>
                                            <option value="1236">DONIA</option>
                                            <option value="1350">EIDGAON</option>
                                            <option value="1100">EKURIA</option>
                                            <option value="1349">EPZ</option>
                                            <option value="1313">ETAVARA</option>
                                            <option value="1230">FAIDABAD</option>
                                            <option value="1331">FARASHGANJ</option>
                                            <option value="1331">FARIDABAD</option>
                                            <option value="1320">GALIMPUR</option>
                                            <option value="1207">GANA BHABAN</option>
                                            <option value="1204">GANDARIA</option>
                                            <option value="1800">GANGUTIA</option>
                                            <option value="1229">GAZETTED OFFICERS'' HOSTEL</option>
                                            <option value="1344">GAZIR CHAT ALIYA MADRASA</option>
                                            <option value="1320">GOBINDAPUR</option>
                                            <option value="1219">GORAN</option>
                                            <option value="1229">GREEN ROAD</option>
                                            <option value="1212">GULSHAN</option>
                                            <option value="1214">HABIB NAGAR</option>
                                            <option value="1351">HAJI CAMP</option>
                                            <option value="1330">HARUCHANDI</option>
                                            <option value="1321">HASNABAD</option>
                                            <option value="1322">HAT BARUAKHALI</option>
                                            <option value="1342">HAZRAT SHAHJALAL INTERNATIONAL AIRPORT</option>
                                            <option value="1340">HEMAYETPUR</option>
                                            <option value="1345">HIGH COURT</option>
                                            <option value="1100">IWTA NOISHO</option>
                                            <option value="1100">IWTA</option>
                                            <option value="1345">JADOBPURoption>
                                            <option value="1204">JAGANNATH UNIVERSITY</option>
                                            <option value="1342">JAHANGIRNAGAR UNIVERSITY</option>
                                            <option value="1320">JALAL CHAR</option>
                                            <option value="1800">JALSHA</option>
                                            <option value="1331">JAMAL CHAR</option>
                                            <option value="1342">JATIO SHONGSHOD BHABAN</option>
                                            <option value="1331">JATRABARI</option>
                                            <option value="1209">JIGATALA</option>
                                            <option value="1341">JIRABO</option>
                                            <option value="1322">JOYKRISHNAPUR</option>
                                            <option value="1330">JOYPARA</option>
                                            <option value="1351">KAFRUL</option>
                                            <option value="1351">KALAMPUR</option>
                                            <option value="1313">KALATIYA</option>
                                            <option value="1207">KALYANPUR</option>
                                            <option value="1230">KANCHKURA</option>
                                            <option value="1351">KARJON HALL</option>
                                            <option value="1346">KASHEM COTTON MILLS</option>
                                            <option value="1216">KAZI PARA</option>
                                            <option value="1351">KAZIPARA MADRASA</option>
                                            <option value="1310">KERANIGANJ</option>
                                            <option value="1324">KHALPAR</option>
                                            <option value="1345">KHAMAR BARI</option>
                                            <option value="1321">KHANPUR</option>
                                            <option value="1313">KHARAKANDI</option>
                                            <option value="1219">KHILGAON</option>
                                            <option value="1229">KHILKHET</option>
                                            <option value="1349">KOBIRPUR</option>
                                            <option value="1320">KOINAIL</option>
                                            <option value="1320">KOLAKOPA</option>
                                            <option value="1311">KONDA</option>
                                            <option value="1322">KORPARA</option>
                                            <option value="1321">KUSHUM HATI</option>
                                            <option value="1322">KUTURI</option>
                                            <option value="1331">LAKSHMIBAZAR</option>
                                            <option value="1211">LALBAGH</option>
                                            <option value="1347">LEATHER INSTITIUTE</option>
                                            <option value="1214">MADARTEK</option>
                                            <option value="1216">MADRASA-E-ALIYA</option>
                                            <option value="1230">MAJARSHARIF</option>
                                            <option value="1217">MALIBAGH</option>
                                            <option value="1214">MANDA</option>
                                            <option value="1206">MANIKDI</option>
                                            <option value="1320">MASHAIL</option>
                                            <option value="1214">MATUAIL</option>
                                            <option value="1362">MATUAIL</option>
                                            <option value="1330">MEGHULA</option>
                                            <option value="1320">MELENG</option>
                                            <option value="1214">MERAJ NAGAR</option>
                                            <option value="1207">MIRPUR BAZAR</option>
                                            <option value="1207">MIRPUR CANTONMENT</option>
                                            <option value="1207">MIRPUR NOISHO</option>
                                            <option value="1216">MIRPUR POLICE COMPLEX</option>
                                            <option value="1207">MIRPUR SECTION-11</option>
                                            <option value="1207">MIRPUR SECTION-12</option>
                                            <option value="1216">MIRPUR SECTION-2</option>
                                            <option value="1216">MIRPUR</option>
                                            <option value="1218">MIRPUR</option>
                                            <option value="1344">MIRZANAGAR</option>
                                            <option value="1331">MITFORD</option>
                                            <option value="1217">MOGHBAZAR</option>
                                            <option value="1320">MOHABBATPUR</option>
                                            <option value="1207">MOHAMMADPUR HOUSING ESTATE</option>
                                            <option value="1207">MOHAMMADPUR</option>
                                            <option value="1345">MONGOLBARI</option>
                                            <option value="1340">MOSHURI KHOLA</option>
                                            <option value="1333">MUKSUDPUR</option>
                                            <option value="1800">NABAGRAM</option>
                                            <option value="1216">NAGAR KONDA</option>
                                            <option value="1345">NAGORI</option>
                                            <option value="1205">NAKHALPARA</option>
                                            <option value="1800">NAOGAON BAZAR</option>
                                            <option value="1332">NARISHA</option>
                                            <option value="1205">NAVAL HEAD QUARTER</option>
                                            <option value="1320">NAWABGANJ</option>
                                            <option value="1226">NAWABPUR NOISHO</option>
                                            <option value="1226">NAWABPUR</option>
                                            <option value="1350">NAYAR HAT</option>
                                            <option value="1205">NEW MARKET</option>
                                            <option value="1345">NOIHATI BAZAR</option>
                                            <option value="1236">NOWABPUR NOISHO</option>
                                            <option value="1236">NOWABPUR</option>
                                            <option value="1000">ORDNANCE DEPOT</option>
                                            <option value="1331">PALAMGANJ</option>
                                            <option value="1216">PALLABI</option>
                                            <option value="1311">PAR GANDARIA</option>
                                            <option value="1214">PARADOGAIR</option>
                                            <option value="1320">PARAGRAM</option>
                                            <option value="1349">PATC JIRANI</option>
                                            <option value="1343">PATC SAVAR</option>
                                            <option value="1320">PATILJHAP</option>
                                            <option value="1211">PILKHANA</option>
                                            <option value="1310">POSCHIMODI</option>
                                            <option value="1211">POSTA</option>
                                            <option value="1331">POSTAGOLA</option>
                                            <option value="1211">PUBLIC HEALTH INSTITIUTE</option>
                                            <option value="1310">RAJABARI</option>
                                            <option value="1217">RAJARBAG POLICE LINE</option>
                                            <option value="1340">RAJASHON</option>
                                            <option value="1347">RAJFULBARIA</option>
                                            <option value="1219">RAMPURA</option>
                                            <option value="1209">RAYERBAZAR</option>
                                            <option value="1207">RAZIA SULTANA ROAD</option>
                                            <option value="1347">RESIDENTIAL MODEL SCHOOL</option>
                                            <option value="1310">ROHITPUR</option>
                                            <option value="1822">ROWAIL</option>
                                            <option value="1345">SANARPAR</option>
                                            <option value="1225">SANGSAD BHABAN</option>
                                            <option value="1800">SANORA</option>
                                            <option value="1345">SARULIA</option>
                                            <option value="1361">SARULIA</option>
                                            <option value="1331">SATTAR MATCH WORKS</option>
                                            <option value="1344">SAVAR CANTONMENT</option>
                                            <option value="1340">SAVAR</option>
                                            <option value="1331">SAYDABAD</option>
                                            <option value="1345">SECONDARY EDUCATION BOARD</option>
                                            <option value="1800">SHAHABALISHWAR</option>
                                            <option value="1000">SHAHBAGH</option>
                                            <option value="1310">SHAKTA</option>
                                            <option value="1310">SHAMLAPUR</option>
                                            <option value="1344">SHAN WALIA</option>
                                            <option value="1217">SHANTINAGAR</option>
                                            <option value="1230">SHATARKUL</option>
                                            <option value="1331">SHEIKH BORHANUDDIN COLLEGE</option>
                                            <option value="1207">SHER-E-BANGLA NAGAR</option>
                                            <option value="1322">SHIKARIPARA</option>
                                            <option value="1345">SHIMULIA</option>
                                            <option value="1345">SHOILAIN</option>
                                            <option value="1320">SHOLLA</option>
                                            <option value="1820">SHUAPUR</option>
                                            <option value="1310">SHUVADDA</option>
                                            <option value="1340">SOBHANBAG</option>
                                            <option value="1310">SONAKANDA</option>
                                            <option value="1310">TALEPUR</option>
                                            <option value="1230">TALNA</option>
                                            <option value="1313">TARANAGAR</option>
                                            <option value="1322">TASHULLA BANGLABAZAR</option>
                                            <option value="1311">TEGHORIA</option>
                                            <option value="1215">TEJGAON AIRPORT</option>
                                            <option value="1215">TEJGAON</option>
                                            <option value="1350">TOPER BARI</option>
                                            <option value="1214">TUSHARDHARA</option>
                                            <option value="1230">UJAMPUR</option>
                                            <option value="1349">UTTAR GAZIRCHAT</option>
                                            <option value="1214">UTTAR MANIKDIA</option>
                                            <option value="1230">UTTARA</option>
                                            <option value="1230">UTTARKHAN</option>
                                            <option value="1230">VADALODI</option>
                                            <option value="1310">VAGOIR</option>
                                            <option value="1214">VAID TRANING</option>
                                            <option value="1212">VATARA</option>
                                            <option value="1203">WARI</option>
                                            <option value="1310">ZINZIRA</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Postal Code</label>
                                        <input id="postalCode" type="text" value="" placeholder="Postal Code"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Web Site</label>
                                        <input id="website" type="text" value="" placeholder="Website address"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Facebook ID</label>
                                        <input id="facebookId" type="text" value="" placeholder="Facebook ID"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Occupation</label>
                                        <input id="occupation" type="text" value="{{Auth::user()->occupation}}"
                                               placeholder="Web Developer"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">About</label>
                                        <textarea id="about" class="form-control" rows="3"
                                                  placeholder="">{{Auth::user()->about}}</textarea>
                                    </div>

                                    <div class="margiv-top-10">
                                        <a id="saveProfile" class="btn green-haze">
                                            Save Changes </a>

                                    </div>
                                </form>
                            </div>
                            <!-- END PERSONAL INFO TAB -->
                            <!-- CHANGE AVATAR TAB -->
                            <div class="tab-pane" id="tab_1_2">

                                <form id="uploadimage" method="post" enctype="multipart/form-data">
                                    <label>Select Your Image</label><br/>
                                    <input type="file" name="file"
                                           id="file"/><br>
                                    <input class="btn btn-xs btn-success" type="submit" value="Upload"
                                           id="imgUploadBtn"/>
                                    <input type="hidden" id="image">
                                    <div id="imgMsg"></div>
                                </form>
                                <br>
                                <div class="margiv-top-10">
                                    <a id="saveImage" class="btn green-haze">
                                        Save Image </a>

                                </div>
                            </div>
                            <!-- END CHANGE AVATAR TAB -->
                            <!-- CHANGE PASSWORD TAB -->
                            <div class="tab-pane" id="tab_1_3">
                                <form action="#">
                                    <div class="form-group">
                                        <label class="control-label">Current Password</label>
                                        <input id="oldPassword" type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">New Password</label>
                                        <input id="newPassword" type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Re-type New Password</label>
                                        <input id="rePassword" type="password" class="form-control">
                                    </div>
                                    <div class="margin-top-10">
                                        <a id="savePassword" class="btn green-haze">
                                            Change Password </a>

                                    </div>
                                </form>
                            </div>
                            <!-- END CHANGE PASSWORD TAB -->
                            <!-- PRIVACY SETTINGS TAB -->

                            <!-- END PRIVACY SETTINGS TAB -->
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- END PROFILE CONTENT -->
    </div>

@endsection
@section('js')
    <script>
        $('#area').on('change', function (e) {
            $('#postalCode').val($(this).val());
        });
        $('#saveProfile').click(function () {
            $.ajax({
                type: 'POST',
                url: '{{url('/profile/update/account')}}',
                data: {
                    'name': $('#name').val(),
                    'occupation': $('#occupation').val(),
                    'about': $('#about').val(),
                    'mobile': $('#mobile').val(),
                    'nationality': $('#nationality').val(),
                    'knownAs': $('#knownAs').val(),
                    'knownAt': $('#knownAt').val(),
                    'address': $('#address').val(),
                    'landmark': $('#landmark').val(),
                    'district': $('#district').val(),
                    'area': $('#area').val(),
                    'postalCode': $('#postalCode').val(),
                    'website': $('#website').val(),
                    'facebookId': $('#facebookId').val(),
                    '_token': '{{csrf_token()}}'
                },
                success: function (data) {
                    if (data == 'success') {
//                        swal('Success','Profile information updated');
                        alert('Profile information updated');
                        location.reload();
                    }
                    else {
                        alert(data);
//                        swal('Error',data,'error');
                    }
                },
                error: function (data) {
//                    swal('Error',data,'error');
                    console.log(data.responseText);
                }
            })
        });
        $('#savePassword').click(function () {
            $.ajax({
                type: 'POST',
                url: '{{url('/profile/update/password')}}',
                data: {
                    'oldPass': $('#oldPassword').val(),
                    'newPass': $('#newPassword').val(),
                    'rePass': $('#rePassword').val(),
                    '_token': '{{csrf_token()}}'
                },
                success: function (data) {
                    if (data == 'success') {
                        alert('Password Changed');
//                        swal('Success','Password change','success');
                        location.reload();
                    } else {
                        alert(data);
//                        swal('Error',data,'error');
                    }

                },
                error: function (data) {
                    console.log(data.responseText);
//                    swal('Error',data,'error');
                }
            })
        });

        $('#saveImage').click(function () {
            $.ajax({
                type: 'POST',
                url: '{{url('/profile/update/image')}}',
                data: {
                    'image': $('#image').val(),

                    '_token': '{{csrf_token()}}'
                },
                success: function (data) {
                    if (data == 'success') {
                        alert('Profile picture updated');
//                        swal('Success','Password change','success');
                        location.reload();
                    } else {
                        alert(data);
//                        swal('Error',data,'error');
                    }

                },
                error: function (data) {
                    console.log(data.responseText);
//                    swal('Error',data,'error');
                }
            })
        });

        $("#uploadimage").on('submit', (function (e) {
            e.preventDefault();
            $('#imgMsg').html("Please wait ...");
            $.ajax({
                type: "POST",
                url: "{{url('/image/upload')}}",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    if (data['status'] == 'success') {
                        $('#image').val(data['fileName']);
                        $('#imgMsg').html("Image file uploaded successfully ");
//                        swal('Success!', 'Image File succefully uploaded', 'success');
                        $('#imgPreview').attr('src', 'uploads/' + data['fileName']);
                    }
                    else {
//                        swal('Error!', data, 'error');
                        $('#imgMsg').html("Something went wrong can't upload image");
                    }
                },
                error:function(data){
                    console.log(data.responseText);
                }
            });
        }));
    </script>
@endsection