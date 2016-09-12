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
function name_view($name)
{
  $name = preg_replace('/(?<!\ )[A-Z]/', ' $0', $name);
  return strtolower($name);
}
