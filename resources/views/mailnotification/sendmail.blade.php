@component('mail::message')


<h1 style="text-align: center">Muslim Matrimoni Registration</h1>

<strong>Name : </strong> {{ $data->bg_name }} <br>

<strong>Email : </strong> {{ $data->email }} <br>

<strong>Education : </strong> {{ $data->education }} <br>

<strong>Parents Info : </strong> {{ $data->parents_info }} <br>

<strong>Siblings Info : </strong> {{ $data->siblings_info }} <br>

<strong>Home District : </strong> {{ $data->home_district }} <br>

<strong>Phone Number : </strong> {{ $data->phonenumber }} <br>

<strong>Looking for : </strong> {{ $data->lookingfor }} <br>

<strong>Permission : </strong> {{ $data->permission }} <br>

<strong>Preference country : </strong> {{ $data->preferencecountry }} <br>

<strong>Registering for Who : </strong> {{ $data->regforwho }} <br>

<strong>Bride or Groom First Name : </strong> {{ $data->bg_name }} <br>

<strong>Bride or Groom Last Name : </strong> {{ $data->bg_lastname }} <br>

<strong>Address : </strong> {{ $data->street_address }} <br>

<strong>Address Line 2 : </strong> {{ $data->addressline2 }} <br>

<strong>City : </strong> {{ $data->city }} <br>

<strong>State : </strong> {{ $data->state }} <br>

<strong>Date of birth : </strong> {{ $data->dateofbirth }} <br>

<strong>Heights : </strong> {{ $data->heights }} <br>

<strong>Citizenship : </strong> {{ $data->citizenship }} <br>

<strong>Marital status : </strong> {{ $data->maritalstatus }} <br>

<strong>Interest hobbies : </strong> {{ $data->interesthobbies }} <br>

<strong>Membership : </strong> {{ $data->membership ? 'Free Membership' : '' }} <br>

<strong>Term's Condition : </strong> {{ $data->termscondition ? 'Agree' : 'Not Agree' }} <br>


@endcomponent