# ClubreadyApi
PHP Class For Clubready API<br>
This is <strong>not</strong> complete yet. <Br>
Author: Thomas Stokes <br>
Returns in json format<br><br>

<strong>Example use:</strong> <br>
<code>
require "ClubreadyApi.php";
</code>
<br>
<code>
$ClubreadyApi = new ClubreadyApi($ApiKey);
</code><br>
<code>
$club_data = $ClubreadyApi->DateAdded($store_id,$from_date,$to_date);
</code>
<br>
<code>
var_dump($club_data);
</code>
