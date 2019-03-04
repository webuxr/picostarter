---
title: PHP
description: A place to test PHP code snippets.
author: Ryan R. Smith
date: 2019-02-27 @ 17:59:00
time: 17:59:00
robots: noindex,nofollow
template: index
#shortcut: 'command+p,ctrl+p'
---

## %meta.title%
This is a single line of text with some **bold text too**. But the following text is a snippet of PHP code:

```
if ($namespace === $pathSlug)                 /* If the same, use $namespace AS the $pathSlug for resource paths */
{
  $indexPath = $indexUrlPath . $namespace;    /* ex: /sites/pages/bf ...or............. /sites/promos/clearance */
  $mediaPath = $mediaUrlPath . $namespace;    /* ex: /sites/media/pages/bf ...or....... /sites/media/promos/clearance */
}
elseif ($namespace !== $pathSlug)             /* If not same, use $pathSlug for resource paths */
{
  $indexPath = $indexUrlPath . $pathSlug;     /* ex: /sites/pages/policy/shipping ...or......... /sites/promos/rebates/shure */
  $mediaPath = $mediaUrlPath . $pathSlug;     /* ex: /sites/media/pages/policy/shipping ...or... /sites/media/promos/rebates/shure */
}
else // Otherwise, use the default values for resource paths
{
  $indexPath = $indexUrlPath;                 /* ex: /sites/pages */
  $mediaPath = $mediaUrlPath;                 /* ex: /sites/media/pages */
}
```

## Date and Time
Details about getting and setting date/time can be found on the [PHP.net site](http://php.net/manual/en/function.strftime.php) or [MSDN](http://msdn.microsoft.com/en-us/library/fe06s4ak.aspx).

Here are a few common examples:
```
%F %T                        /* 2019-02-21 21:34:17 */

%D %T                        /* 02/21/19 21:34:17 */

%l:%S %P %Z                  /* 1:22 pm Central Standard Time */

%l:%S %p %z                  /* 1:22 PM -0600 */

%F @ %l:%M %P                /* 2019-02-21 @ 4:28 pm */

%x                           /* 02/02/2019 */

%m-%e-%Y                     /* 02-02-2019 */

%Y-%m-%e                     /* 2019-02-02 */

%I:%M:%S %p                  /* 04:04:11 PM */

%I:%M:%S %P                  /* 04:04:11 pm */

%F @ %l:%S %P %Z             /* 2019-02-21 @ 1:22 pm Central Standard Time */

%b %e, %Y @ %l:%S %P %Z      /* Feb 2, 2019 @ 1:22 pm Central Standard Time */

%a, %b %e, %Y @ %l:%S %P %Z  /* Tue, Feb 2, 2019 @ 1:22 pm Central Standard Time */

%a, %b %d, %Y @ %l:%M %P     /* Tue, Feb 28, 2019 @ 4:28 pm */
```

Try this is you'd like to dynamically set date and/or time within a PHP file:

```
$tzoneId = 'America/Chicago';
$scriptTzGet = date_default_timezone_get();
$scriptTzSet = date_default_timezone_set($tzoneId);

$date = date_create(); // Now()
$todayNow = date_timestamp_get($date); // Current timestamp.
```

## Timezone

If you want the 3-letter timezone abbreviation try this snippet:

**Example 1:**
```
date_default_timezone_set('Europe/Sofia');
echo date_default_timezone_get(); // Europe/Sofia
echo ' => '.date('T'); // => EET
```

**Example 2:**
```
$dateTime = new DateTime();
$dateTime->setTimeZone(new DateTimeZone('America/Havana'));
echo $dateTime->format('T');
```

**Example 3 (more involved?):**
```
function get_timezone_abbreviation($timezone_id) {
  if($timezone_id){
    $abb_list = timezone_abbreviations_list();

    $abb_array = array();
    foreach ($abb_list as $abb_key => $abb_val) {
      foreach ($abb_val as $key => $value) {
        $value['abb'] = $abb_key;
        array_push($abb_array, $value);
      }
    }

    foreach ($abb_array as $key => $value) {
      if($value['timezone_id'] == $timezone_id){
        return strtoupper($value['abb']);
      }
    }
  }
  return false;
}
```

All 3 of these examples were found here on [StackOverflow](https://stackoverflow.com/questions/5362628/how-to-get-the-names-and-abbreviations-of-a-time-zone-in-php).
