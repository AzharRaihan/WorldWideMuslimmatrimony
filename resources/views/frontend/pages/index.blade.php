@extends('layouts.frontend.master')
@section('title', 'Index')
@push('css')
    
@endpush

<style>
</style>
@section('content')
    <!-- Banner Section Start-->
    <section class="all-body pb-5 pt-2">
        <div class="container">
            <div class="banner">
                <img src="{{ asset('assets/frontend/img/wwmm-banner.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        <form action="{{ route('muslimmatrimony.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="registration">
                    <div class="registration-head">
                        <h5 class="text-center">Muslim Matrimony for Next Generation-Please Register for FREE</h5>
                    </div>
                    <div class="registration-form">
                        
                        <div class="fill fill-common">
                            <div class="common-gap form-group">
                                <label for="" class="label-title">Looking For <span class="req">*</span></label>
                                <select class="form-control @error('lookingfor') is-invalid @enderror" value="{{ old('lookingfor') }}" id="" name="lookingfor">
                                    @foreach ($lookingfor as $looking)
                                        <option>{{ $looking->lookingforname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="common-gap form-group">
                                <label for="" class="label-title">Preference Country of Bride or Groom <span class="req">*</span></label>
                                <select class="form-control @error('preferencecountry') is-invalid @enderror" value={{ old('preferencecountry') }} id="" name="preferencecountry">
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Antigua and Barbuda</option>
                                    <option>Argentina</option>
                                    <option>Armenia</option>
                                    <option>Aruba</option>
                                    <option>Australia</option>
                                    <option>Austria</option>
                                    <option>Azerbaijan</option>
                                    <option>Bahamas, The</option>
                                    <option>Bahrain</option>
                                    <option>Bangladesh</option>
                                    <option>Barbados</option>
                                    <option>Belarus</option>
                                    <option>Belgium</option>
                                    <option>Belize</option>
                                    <option>Benin</option>
                                    <option>Bhutan</option>
                                    <option>Bolivia</option>
                                    <option>Bosnia and Herzegovina</option>
                                    <option>Botswana</option>
                                    <option>Brazil</option>
                                    <option>Brunei</option>
                                    <option>Bulgaria</option>
                                    <option>Burkina Faso</option>
                                    <option>Burma</option>
                                    <option>Burundi</option>
                                    <option>Cambodia</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                    <option>Cabo Verde</option>
                                    <option>Central African Republic</option>
                                    <option>Chad</option>
                                    <option>Chile</option>
                                    <option>China</option>
                                    <option>Colombia</option>
                                    <option>Comoros</option>
                                    <option>Congo, Democratic Republic of the</option>
                                    <option>Congo, Republic of the</option>
                                    <option>Costa Rica</option>
                                    <option>Cote d'Ivoire</option>
                                    <option>Croatia</option>
                                    <option>Cuba</option>
                                    <option>Curacao</option>
                                    <option>Cyprus</option>
                                    <option>Czechia</option>
                                    <option>Denmark</option>
                                    <option>Djibouti</option>
                                    <option>Dominica</option>
                                    <option>Dominican Republic</option>
                                    <option>East Timor</option>
                                    <option>Ecuador</option>
                                    <option>Egypt</option>
                                    <option>El Salvador</option>
                                    <option>Equatorial Guinea</option>
                                    <option>Eritrea</option>
                                    <option>Estonia</option>
                                    <option>Ethiopia</option>
                                    <option>Fiji</option>
                                    <option>Finland</option>
                                    <option>France</option>
                                    <option>Gabon</option>
                                    <option>Gambia, The</option>
                                    <option>Georgia</option>
                                    <option>Germany</option>
                                    <option>Ghana</option>
                                    <option>Greece</option>
                                    <option>Grenada</option>
                                    <option>Guatemala</option>
                                    <option>Guinea</option>
                                    <option>Guinea-Bissau</option>
                                    <option>Guyana</option>
                                    <option>Haiti</option>
                                    <option>Holy See</option>
                                    <option>Honduras</option>
                                    <option>Hong Kong</option>
                                    <option>Hungary</option>
                                    <option>Iceland</option>
                                    <option>India</option>
                                    <option>Indonesia</option>
                                    <option>Iran</option>
                                    <option>Iraq</option>
                                    <option>Ireland</option>
                                    <option>Israel</option>
                                    <option>Italy</option>
                                    <option>Jamaica</option>
                                    <option>Japan</option>
                                    <option>Jordan</option>
                                    <option>Kazakhstan</option>
                                    <option>Kenya</option>
                                    <option>Kiribati</option>
                                    <option>Korea, North</option>
                                    <option>Korea, South</option>
                                    <option>Kosovo</option>
                                    <option>Kuwait</option>
                                    <option>Kyrgyzstan</option>
                                    <option>Laos</option>
                                    <option>Latvia</option>
                                    <option>Lebanon</option>
                                    <option>Lesotho</option>
                                    <option>Liberia</option>
                                    <option>Libya</option>
                                    <option>Liechtenstein</option>
                                    <option>Lithuania</option>
                                    <option>Luxembourg</option>
                                    <option>Macau</option>
                                    <option>Macedonia</option>
                                    <option>Madagascar</option>
                                    <option>Malawi</option>
                                    <option>Malaysia</option>
                                    <option>Maldives</option>
                                    <option>Mali</option>
                                    <option>Malta</option>
                                    <option>Marshall Islands</option>
                                    <option>Mauritania</option>
                                    <option>Mauritius</option>
                                    <option>Mexico</option>
                                    <option>Micronesia</option>
                                    <option>Moldova</option>
                                    <option>Monaco</option>
                                    <option>Mongolia</option>
                                    <option>Montenegro</option>
                                    <option>Morocco</option>
                                    <option>Mozambique</option>
                                    <option>Namibia</option>
                                    <option>Nauru</option>
                                    <option>Nepal</option>
                                    <option>Netherlands</option>
                                    <option>New Zealand</option>
                                    <option>Nicaragua</option>
                                    <option>Niger</option>
                                    <option>Nigeria</option>
                                    <option>North Korea</option>
                                    <option>Norway</option>
                                    <option>Oman</option>
                                    <option>Pakistan</option>
                                    <option>Palau</option>
                                    <option>Palestinian Territories</option>
                                    <option>Panama</option>
                                    <option>Papua New Guinea</option>
                                    <option>Paraguay</option>
                                    <option>Peru</option>
                                    <option>Philippines</option>
                                    <option>Poland</option>
                                    <option>Portugal</option>
                                    <option>Qatar</option>
                                    <option>Romania</option>
                                    <option>Russia</option>
                                    <option>Rwanda</option>
                                    <option>Saint Kitts and Nevis</option>
                                    <option>Saint Lucia</option>
                                    <option>Saint Vincent and the Grenadines</option>
                                    <option>Samoa</option>
                                    <option>San Marino</option>
                                    <option>Sao Tome and Principe</option>
                                    <option>Saudi Arabia</option>
                                    <option>Senegal</option>
                                    <option>Serbia</option>
                                    <option>Seychelles</option>
                                    <option>Sierra Leone</option>
                                    <option>Singapore</option>
                                    <option>Sint Maarten</option>
                                    <option>Slovakia</option>
                                    <option>Slovenia</option>
                                    <option>Solomon Islands</option>
                                    <option>Somalia</option>
                                    <option>South Africa</option>
                                    <option>South Korea</option>
                                    <option>South Sudan</option>
                                    <option>Spain</option>
                                    <option>Sri Lanka</option>
                                    <option>Sudan</option>
                                    <option>Suriname</option>
                                    <option>Swaziland</option>
                                    <option>Sweden</option>
                                    <option>Switzerland</option>
                                    <option>Syria</option>
                                    <option>Taiwan</option>
                                    <option>Tajikistan</option>
                                    <option>Tanzania</option>
                                    <option>Thailand</option>
                                    <option>Timor-Leste</option>
                                    <option>Togo</option>
                                    <option>Tonga</option>
                                    <option>Trinidad and Tobago</option>
                                    <option>Tunisia</option>
                                    <option>Turkey</option>
                                    <option>Turkmenistan</option>
                                    <option>Tuvalu</option>
                                    <option>Uganda</option>
                                    <option>Ukraine</option>
                                    <option>United Arab Emirates</option>
                                    <option>United Kingdom</option>
                                    <option>United States</option>
                                    <option>Uruguay</option>
                                    <option>Uzbekistan</option>
                                    <option>Vanuatu</option>
                                    <option>Venezuela</option>
                                    <option>Vietnam</option>
                                    <option>Yemen</option>
                                    <option>Zambia</option>
                                    <option>Zimbabwe</option>
                                </select>
                            </div>
                        </div>

                        <div class="fill fill-common">
                            <div class="common-gap form-group">
                                <label for="" class="label-title">Your Name (Registering for other) <span class="req">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name">
                            </div>
                            <div class="common-gap form-group">
                                <label for="" class="label-title">Education<span class="req">*</span></label>
                                <input type="text" class="form-control @error('education') is-invalid @enderror" value="{{ old('education') }}" name="education">
                            </div>
                        </div>
                        <div class="fill fill-common">
                            <div class="common-gap form-group">
                                <label for="" class="label-title">Parents Info <span class="req">*</span></label>
                                <input type="text" class="form-control @error('parents_info') is-invalid @enderror" value="{{ old('parents_info') }}" name="parents_info">
                            </div>
                            <div class="common-gap form-group">
                                <label for="" class="label-title">Siblings Info<span class="req">*</span></label>
                                <input type="text" class="form-control  @error('siblings_info') is-invalid @enderror" value="{{ old('parents_info') }}" name="siblings_info">
                            </div>
                        </div>
                        <div class="fill fill-common">
                            <div class="common-gap form-group">
                                <label for="" class="label-title">Home District<span class="req">*</span></label>
                                <input type="text" class="form-control  @error('home_district') is-invalid @enderror" value="{{ old('parents_info') }}" name="home_district">
                            </div>
                            <div class="common-gap form-group">
                                <label for="" class="label-title">Registering for Who?  <span class="req">*</span></label>
                                <select class="form-control  @error('regforwho') is-invalid @enderror" value="{{ old('regforwho') }}" id="" name="regforwho">
                                    @foreach ($regforwho as $regwho)
                                        <option>{{ $regwho->regforwho }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="fill">
                            <div class="form-group">
                                <label for="" class="label-title">Do you have permission from Bride/Groom<span class="req">*</span></label>
                                <div class="checkbox">
                                    <label><input name="permission" type="checkbox" value="yes" class="mr-2">Yes</label>
                                </div>
                                <div class="checkbox">
                                    <label><input name="permission" type="checkbox" value="no" class="mr-2">No</label>
                                </div>
                            </div>
                        </div>


                        
                        <div class="fill fill-common">
                            <div class="common-gap common-gap form-group">
                                <label for="" class="label-title">Bride or Groom First Name<span class="req">*</span></label>
                                <input type="text" class="form-control @error('bg_name') is-invalid @enderror" value="{{ old('bg_name') }}" name="bg_name">
                            </div>
                            <div class="common-gap common-gap form-group">
                                <label for="" class="label-title">Bride or Groom Last Name<span class="req">*</span></label>
                                <input type="text" class="form-control @error('bg_lastname') is-invalid @enderror" value="{{ old('bg_lastname') }}" name="bg_lastname">
                            </div>
                        </div>

                        <div class="fill ">
                            <div class="form-group">
                                <label for="" class="label-title">Street Address<span class="req">*</span></label>
                                <input type="text" class="common-input form-control @error('street_address') is-invalid @enderror" value="{{ old('street_address') }}" name="street_address">
                            </div>
                        </div>

                        <div class="fill ">
                            <div class="form-group">
                                <label for="" class="label-title">Address Line 2</label>
                                <input type="text" class="common-input form-control @error('addressline2') is-invalid @enderror" value="{{ old('addressline2') }}" name="addressline2">
                            </div>
                        </div>

                        <div class="fill fill-common">
                            <div class="common-gap form-group">
                                <label for="" class="label-title">City</label>
                                <input type="text" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" name="city">
                            </div>
                            <div class="common-gap form-group">
                                <label for="" class="label-title">State</label>
                                <select class="form-control" id="" name="state">
                                    <option>Alabama</option>
                                    <option>Alaska</option>
                                    <option>Arizona</option>
                                    <option>Arkansas</option>
                                    <option>California</option>
                                    <option>Colorado</option>
                                    <option>Connecticut</option>
                                    <option>Delaware</option>
                                    <option>Florida</option>
                                    <option>Georgia</option>
                                    <option>Hawaii</option>
                                    <option>Idaho</option>
                                    <option>Illinois</option>
                                    <option>Indiana</option>
                                    <option>Iowa</option>
                                    <option>Kansas</option>
                                    <option>Kentucky</option>
                                    <option>Louisiana</option>
                                    <option>Maine</option>
                                    <option>Maryland</option>
                                    <option>Massachusetts</option>
                                    <option>Michigan</option>
                                    <option>Minnesota</option>
                                    <option>Mississippi</option>
                                    <option>Missouri</option>
                                    <option>Montana</option>
                                    <option>Nebraska</option>
                                    <option>Nevada</option>
                                    <option>New Hampshire</option>
                                    <option>New Jersey</option>
                                    <option>New Mexico</option>
                                    <option>New York</option>
                                    <option>North Carolina</option>
                                    <option>North Dakota</option>
                                    <option>Ohio</option>
                                    <option>Oklahoma</option>
                                    <option>Oregon</option>
                                    <option>Pennsylvania</option>
                                    <option>Rhode Island</option>
                                    <option>South Carolina</option>
                                    <option>South Dakota</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Utah</option>
                                    <option>Vermont</option>
                                    <option>Virginia</option>
                                    <option>Washington</option>
                                    <option>West Virginia</option>
                                    <option>Wisconsin</option>
                                    <option>Wyoming</option>
                                    <option>Washington DC</option>
                                    <option>Dhaka</option>
                                    <option>Chittagong</option>
                                    <option>Mymensingh</option>
                                    <option>Comilla</option>
                                    <option>Barisal</option>
                                    <option>Sirajganj</option>
                                    <option>Noakhali</option>
                                    <option>Sylhet</option>
                                    <option>Faridpur</option>
                                    <option>Narayanganj</option>
                                    <option>Narshingdi</option>
                                    <option>Jessore</option>
                                    <option>Khulna</option>
                                    <option>Dinajpur</option>
                                </select>
                            </div>
                        </div>

                        <div class="fill fill-common">
                            <div class="common-gap  form-group">
                                <label for="" class="label-title">Zip Code</label>
                                <input type="text" class="form-control @error('zip_code') is-invalid @enderror" value="{{ old('zip_code') }}" name="zip_code">
                            </div>
                            <div class="common-gap  form-group">
                                <label for="" class="label-title">Phone Number<span class="req">*</span></label>
                                <input type="number" class="form-control @error('phonenumber') is-invalid @enderror" value="{{ old('phonenumber') }}" name="phonenumber">
                            </div>
                        </div>

                        <div class="fill fill-common ">
                            <div class="common-gap form-group d-flex">
                                <div class="dateofbirts">
                                    <label for="" class="label-title">Date of Birth</label>
                                    <input type="date" class="form-control @error('dateofbirth') is-invalid @enderror" value="{{ old('dateofbirth') }}" name="dateofbirth">
                                </div>
                            </div>
                            <div class="common-gap form-group d-flex">
                                <div class="height">
                                    <label for="" class="label-title">Heights</label>
                                    <input type="text" class="form-control @error('heights') is-invalid @enderror" value="{{ old('heights') }}" name="heights">
                                </div>
                            </div>
                        </div>
                        <div class="fill fill-common">
                            <div class="common-gap form-group">
                                <label for="" class="label-title">Citizenship<span class="req">*</span></label>
                                <select class="form-control" id="" name="citizenship">
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Antigua and Barbuda</option>
                                    <option>Argentina</option>
                                    <option>Armenia</option>
                                    <option>Aruba</option>
                                    <option>Australia</option>
                                    <option>Austria</option>
                                    <option>Azerbaijan</option>
                                    <option>Bahamas, The</option>
                                    <option>Bahrain</option>
                                    <option>Bangladesh</option>
                                    <option>Barbados</option>
                                    <option>Belarus</option>
                                    <option>Belgium</option>
                                    <option>Belize</option>
                                    <option>Benin</option>
                                    <option>Bhutan</option>
                                    <option>Bolivia</option>
                                    <option>Bosnia and Herzegovina</option>
                                    <option>Botswana</option>
                                    <option>Brazil</option>
                                    <option>Brunei</option>
                                    <option>Bulgaria</option>
                                    <option>Burkina Faso</option>
                                    <option>Burma</option>
                                    <option>Burundi</option>
                                    <option>Cambodia</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                    <option>Cabo Verde</option>
                                    <option>Central African Republic</option>
                                    <option>Chad</option>
                                    <option>Chile</option>
                                    <option>China</option>
                                    <option>Colombia</option>
                                    <option>Comoros</option>
                                    <option>Congo, Democratic Republic of the</option>
                                    <option>Congo, Republic of the</option>
                                    <option>Costa Rica</option>
                                    <option>Cote d'Ivoire</option>
                                    <option>Croatia</option>
                                    <option>Cuba</option>
                                    <option>Curacao</option>
                                    <option>Cyprus</option>
                                    <option>Czechia</option>
                                    <option>Denmark</option>
                                    <option>Djibouti</option>
                                    <option>Dominica</option>
                                    <option>Dominican Republic</option>
                                    <option>East Timor</option>
                                    <option>Ecuador</option>
                                    <option>Egypt</option>
                                    <option>El Salvador</option>
                                    <option>Equatorial Guinea</option>
                                    <option>Eritrea</option>
                                    <option>Estonia</option>
                                    <option>Ethiopia</option>
                                    <option>Fiji</option>
                                    <option>Finland</option>
                                    <option>France</option>
                                    <option>Gabon</option>
                                    <option>Gambia, The</option>
                                    <option>Georgia</option>
                                    <option>Germany</option>
                                    <option>Ghana</option>
                                    <option>Greece</option>
                                    <option>Grenada</option>
                                    <option>Guatemala</option>
                                    <option>Guinea</option>
                                    <option>Guinea-Bissau</option>
                                    <option>Guyana</option>
                                    <option>Haiti</option>
                                    <option>Holy See</option>
                                    <option>Honduras</option>
                                    <option>Hong Kong</option>
                                    <option>Hungary</option>
                                    <option>Iceland</option>
                                    <option>India</option>
                                    <option>Indonesia</option>
                                    <option>Iran</option>
                                    <option>Iraq</option>
                                    <option>Ireland</option>
                                    <option>Israel</option>
                                    <option>Italy</option>
                                    <option>Jamaica</option>
                                    <option>Japan</option>
                                    <option>Jordan</option>
                                    <option>Kazakhstan</option>
                                    <option>Kenya</option>
                                    <option>Kiribati</option>
                                    <option>Korea, North</option>
                                    <option>Korea, South</option>
                                    <option>Kosovo</option>
                                    <option>Kuwait</option>
                                    <option>Kyrgyzstan</option>
                                    <option>Laos</option>
                                    <option>Latvia</option>
                                    <option>Lebanon</option>
                                    <option>Lesotho</option>
                                    <option>Liberia</option>
                                    <option>Libya</option>
                                    <option>Liechtenstein</option>
                                    <option>Lithuania</option>
                                    <option>Luxembourg</option>
                                    <option>Macau</option>
                                    <option>Macedonia</option>
                                    <option>Madagascar</option>
                                    <option>Malawi</option>
                                    <option>Malaysia</option>
                                    <option>Maldives</option>
                                    <option>Mali</option>
                                    <option>Malta</option>
                                    <option>Marshall Islands</option>
                                    <option>Mauritania</option>
                                    <option>Mauritius</option>
                                    <option>Mexico</option>
                                    <option>Micronesia</option>
                                    <option>Moldova</option>
                                    <option>Monaco</option>
                                    <option>Mongolia</option>
                                    <option>Montenegro</option>
                                    <option>Morocco</option>
                                    <option>Mozambique</option>
                                    <option>Namibia</option>
                                    <option>Nauru</option>
                                    <option>Nepal</option>
                                    <option>Netherlands</option>
                                    <option>New Zealand</option>
                                    <option>Nicaragua</option>
                                    <option>Niger</option>
                                    <option>Nigeria</option>
                                    <option>North Korea</option>
                                    <option>Norway</option>
                                    <option>Oman</option>
                                    <option>Pakistan</option>
                                    <option>Palau</option>
                                    <option>Palestinian Territories</option>
                                    <option>Panama</option>
                                    <option>Papua New Guinea</option>
                                    <option>Paraguay</option>
                                    <option>Peru</option>
                                    <option>Philippines</option>
                                    <option>Poland</option>
                                    <option>Portugal</option>
                                    <option>Qatar</option>
                                    <option>Romania</option>
                                    <option>Russia</option>
                                    <option>Rwanda</option>
                                    <option>Saint Kitts and Nevis</option>
                                    <option>Saint Lucia</option>
                                    <option>Saint Vincent and the Grenadines</option>
                                    <option>Samoa</option>
                                    <option>San Marino</option>
                                    <option>Sao Tome and Principe</option>
                                    <option>Saudi Arabia</option>
                                    <option>Senegal</option>
                                    <option>Serbia</option>
                                    <option>Seychelles</option>
                                    <option>Sierra Leone</option>
                                    <option>Singapore</option>
                                    <option>Sint Maarten</option>
                                    <option>Slovakia</option>
                                    <option>Slovenia</option>
                                    <option>Solomon Islands</option>
                                    <option>Somalia</option>
                                    <option>South Africa</option>
                                    <option>South Korea</option>
                                    <option>South Sudan</option>
                                    <option>Spain</option>
                                    <option>Sri Lanka</option>
                                    <option>Sudan</option>
                                    <option>Suriname</option>
                                    <option>Swaziland</option>
                                    <option>Sweden</option>
                                    <option>Switzerland</option>
                                    <option>Syria</option>
                                    <option>Taiwan</option>
                                    <option>Tajikistan</option>
                                    <option>Tanzania</option>
                                    <option>Thailand</option>
                                    <option>Timor-Leste</option>
                                    <option>Togo</option>
                                    <option>Tonga</option>
                                    <option>Trinidad and Tobago</option>
                                    <option>Tunisia</option>
                                    <option>Turkey</option>
                                    <option>Turkmenistan</option>
                                    <option>Tuvalu</option>
                                    <option>Uganda</option>
                                    <option>Ukraine</option>
                                    <option>United Arab Emirates</option>
                                    <option>United Kingdom</option>
                                    <option>United States</option>
                                    <option>Uruguay</option>
                                    <option>Uzbekistan</option>
                                    <option>Vanuatu</option>
                                    <option>Venezuela</option>
                                    <option>Vietnam</option>
                                    <option>Yemen</option>
                                    <option>Zambia</option>
                                    <option>Zimbabwe</option>
                                </select>
                            </div>
                            <div class="common-gap form-group">
                                <label for="" class="label-title">Marital Status<span class="req">*</span></label>
                                <select class="form-control @error('maritalstatus') is-invalid @enderror" value="{{ old('maritalstatus') }}" id="" name="maritalstatus">
                                    @foreach($maritalstatus as $maritstatus)
                                        <option>{{ $maritstatus->maritalstatus }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="fill ">
                            <div class="form-group">
                                <label for="" class="label-title">Interest/Hobbies</label>
                                <input class="common-texarea form-control @error('interesthobbies') is-invalid @enderror" value="{{ old('interesthobbies') }}" id="" rows="6" name="interesthobbies">
                            </div>
                        </div>
                        <div class="fill ">
                            <div class="form-group">
                                <label for="" class="label-title">What type of Partner looking for?</label>
                                <input class="common-texarea form-control @error('typepartner') is-invalid @enderror" value="{{ old('typepartner') }}" id="" rows="6" name="typepartner">
                            </div>
                        </div>
                        <div class="fill ">
                            <div class="form-group">
                                <label for="" class="label-title">Email Address <span class="req">*</span></label></label>
                                <input type="email" class="common-input form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email">
                            </div>
                        </div>                   
                        <div class="fill ">
                            <div class="form-group">
                                <label for="" class="label-title">Upload Bride or Groom's Picture <span class="req">*</span></label></label>
                                <input type="file" class="file-input form-control " name="image">
                            </div>
                        </div>
                        <div class="fill">
                            <div class="form-group">
                                <label for=""><h5>Choose your membership level<span class="req">*</span></h5></label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="membership" value="1">FREE Membership
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="fill">
                            <div class="form-group">
                                <label for=""><h5>Terms and Conditions<span class="req">*</span></h5></label>
                                <div class="">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="1" class="mr-2" name="termscondition"><span class="termscondition">You consent to receive communications from us electronically. We will communicate with you by e-mail or phone. You agree that all agreements, notices, disclosures and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing.</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success custom_button">Submit</button>
            </div>
        </form>
    </section>
    <!-- Banner Section End-->
@endsection

@push('js')

<!-- Sweet Aleart -->
<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>



@endpush
    
