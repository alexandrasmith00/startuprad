<?php



// GENERATORS
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

function hello_token($length)
{
  // Generate account setup token
  $key = config('app.key');
  if (\Illuminate\Support\Str::startsWith($key, 'base64:')) {
    $key = base64_decode(substr($key, 7));
  }
  $token = hash_hmac('sha256', \Illuminate\Support\Str::random($length), $key);

  return $token;
}

// DISPLAY
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function breakLegalStatus($legal)
{
  $states = array(
    'AL'=>'Alabama',
    'AK'=>'Alaska',
    'AZ'=>'Arizona',
    'AR'=>'Arkansas',
    'CA'=>'California',
    'CO'=>'Colorado',
    'CT'=>'Connecticut',
    'DE'=>'Delaware',
    'DC'=>'District of Columbia',
    'FL'=>'Florida',
    'GA'=>'Georgia',
    'HI'=>'Hawaii',
    'ID'=>'Idaho',
    'IL'=>'Illinois',
    'IN'=>'Indiana',
    'IA'=>'Iowa',
    'KS'=>'Kansas',
    'KY'=>'Kentucky',
    'LA'=>'Louisiana',
    'ME'=>'Maine',
    'MD'=>'Maryland',
    'MA'=>'Massachusetts',
    'MI'=>'Michigan',
    'MN'=>'Minnesota',
    'MS'=>'Mississippi',
    'MO'=>'Missouri',
    'MT'=>'Montana',
    'NE'=>'Nebraska',
    'NV'=>'Nevada',
    'NH'=>'New Hampshire',
    'NJ'=>'New Jersey',
    'NM'=>'New Mexico',
    'NY'=>'New York',
    'NC'=>'North Carolina',
    'ND'=>'North Dakota',
    'OH'=>'Ohio',
    'OK'=>'Oklahoma',
    'OR'=>'Oregon',
    'PA'=>'Pennsylvania',
    'RI'=>'Rhode Island',
    'SC'=>'South Carolina',
    'SD'=>'South Dakota',
    'TN'=>'Tennessee',
    'TX'=>'Texas',
    'UT'=>'Utah',
    'VT'=>'Vermont',
    'VA'=>'Virginia',
    'WA'=>'Washington',
    'WV'=>'West Virginia',
    'WI'=>'Wisconsin',
    'WY'=>'Wyoming',
  );

    foreach ($states as $abbreviation => $state)
    {
      $pos = stripos($legal, $state);
      if ( $pos !== false ) {
        return ['state' => $state, 'type' => trim(explode($state, $legal)[1]) ];
      }
    }



//    return ['state' => , 'type' => ];
}

// DISPLAY
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function name_view($name)
{
  $name = preg_replace('/(?<!\ )[A-Z]/', ' $0', $name);
  return strtolower($name);
}


function linkOut($url) { // Make sure that link actually goes out from site
  if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
    $url = "http://" . $url;
  }
  return $url;
}

// ARRAY HELP
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function resourceHelper($arrayOfObjects, $searchedValue) {

  $arrayOfObjects = $arrayOfObjects->toArray();


  $neededObject = array_filter(
    $arrayOfObjects,
    function ($e) use ($searchedValue) {
      if ($e['descriptor'] == $searchedValue)
        return ($e['value']);
    }
  );

  return $neededObject[0]['value'];



}
