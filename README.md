# fastway.class.php
Database and class to determine if a suburb/address is serviceable by Fastway Couriers

<p><b>DATABASE ACCURATE 15th October 2015</b>.</p>

# usage
```php
require_once("class.fastway.php");
$fastway = new Fastway();
$canService = $fastway->isServiceable("Booral", "4655");
if ($canService) { print "Yes, serviceable."; }
else { print "No, not serviceable."); }
```

# methods
## isServiceable($suburb, $postcode);
<p><b>Determine if suburb and postcode is in serviceable area</b></p>
<p>$suburb = Suburb to lookup.</p>
<p>$postcode = 4 digit postal code</p>
<p>returns either <b>true</b> or <b>false</b></p>
## byPostcode($postcode)
<p><b>Get an array of entries matching the given postcode</b></p>
<p>$postcode = 4 digit postal code</p>
<p>returns an array in the following format:</p>
```array(
  0 =>
    array(
        "town" => string,
        "postcode" => int,
        "franchisee" => string,
        "deed" => string,
        "satchel" => string
    ),
  1 => array(
        "town" => string,
        "postcode" => int,
        "franchisee" => string,
        "deed" => string,
        "satchel" => string
    )
);
```
## byTown($suburb)
<p><b>Get an array of entries matching the given suburb</b></p>
<p>$suburb = suburb to search by</p>
<p>returns an array in the following format:</p>
```array(
  0 =>
    array(
        "town" => string,
        "postcode" => int,
        "franchisee" => string,
        "deed" => string,
        "satchel" => string
    ),
  1 => array(
        "town" => string,
        "postcode" => int,
        "franchisee" => string,
        "deed" => string,
        "satchel" => string
    )
);
```
# Installation
<p>Import fastway.sql into your MySQL database</p>
<p>Configure the defines at the top of class.fastway.php to match your setup</p>
<p>You're done.<p>
