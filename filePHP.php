<?php 
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header('Content-Type: application/json');
 
      $arr = array (
                      'name' => "AGP",
                      'data' => array_map('intval', explode(',', '50, 55, 66, 44, 22, 55, 77,80, 42, 55, 78, 55, 65, 35, 78, 45, 11')),
                      'color' => 'yellow',
                      'visible' => boolval(['1'])
                    );

        $series_array[] = $arr;
        $response = json_encode($arr);
 

  $response = json_encode($series_array,JSON_NUMERIC_CHECK);
  echo json_encode($series_array,JSON_NUMERIC_CHECK);

return ($response);

?>
