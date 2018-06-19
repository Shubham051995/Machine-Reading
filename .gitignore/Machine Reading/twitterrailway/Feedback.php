<?php
        define('DBHOST','localhost');
        define('DBUSERNAME','root');
        define('DBPASSWORD','');
        define('DBNAME','railway_data');
        define('TWEETTABLE','feedback_analysis');

        require_once('TwitterAPIExchange.php');

        /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
        $settings = array(
        'oauth_access_token' => "952824165555253249-R1oeAIhWtMnV0HKNtn0XrW21YpjQ0Jf",
        'oauth_access_token_secret' => "GPgWZ6iZSJtesN7Y5xaIIk5a9TqD4GLVAIAUrjmpzBPkL",
        'consumer_key' => "IL5LTieDdqUeirCFTx0XEtKv9",
        'consumer_secret' => "0w7rJe056H4a5geSBNIROOlGsyQGTtbQx7Y49rPSvTX5CFzWOL");
        
        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        $requestMethod = "GET"; 
        $getfield = '?screen_name=RailwayArya&count=20';
        $twitter = new TwitterAPIExchange($settings);
        $string = json_decode($twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest(),$assoc = TRUE);
        foreach($string as $items){
            $conn = new mysqli(DBHOST,DBUSERNAME,DBPASSWORD,DBNAME);
            if (preg_match("/ainteanance/i", $items['text'])||preg_match("/lean/i", $items['text'])||preg_match("/Track/i", $items['text'])||preg_match("/Track/i", $items['text'])||preg_match("/Roads/i", $items['text'])||preg_match("/Buildings/i", $items['text'])||preg_match("/Bridges/i", $items['text'])||preg_match("/Water supply/i", $items['text']))
             
               {
                $id="Engineering Department";}
            elseif(preg_match("/lectricity/i", $items['text'])||preg_match("/fan/i", $items['text'])||preg_match("/switch/i", $items['text'])||preg_match("/light/i", $items['text'])||preg_match("/equipment/i", $items['text'])) {
                $id="Electrical Engineering Department";
            }
            elseif (preg_match("/connectivity/i", $items['text'])||preg_match("/connect/i", $items['text'])||preg_match("/wifi/i", $items['text'])) {
                $id="Signal & Telecommunication Engineering Department";
            }
            elseif (preg_match("/timing/i", $items['text'])||preg_match("/late/i", $items['text'])||preg_match("/early/i", $items['text'])||preg_match("/delay/i", $items['text'])) {
                $id="Operating and Traffic (Transportation) Department";
            }
            elseif (preg_match("/booking/i", $items['text'])||preg_match("/ticket/i", $items['text'])||preg_match("/payment/i", $items['text'])||preg_match("/goods/i", $items['text'])||preg_match("/parcel/i", $items['text'])) {
                $id="Commercial Department";
            }
            elseif (preg_match("/accident/i", $items['text'])||preg_match("/emergency/i", $items['text'])||preg_match("/help/i", $items['text'])||preg_match("/problem/i", $items['text'])) {
                $id="Medical Department";
            }
            elseif (preg_match("/food/i", $items['text'])||preg_match("/catering/i", $items['text'])||preg_match("/beds/i", $items['text'])||preg_match("/vending/i", $items['text'])) {
                $id="Stores Department";
            }
            elseif(preg_match("/staff/i", $items['text'])||preg_match("/bribe/i", $items['text'])||preg_match("/corrupt/i", $items['text'])||preg_match("/working/i", $items['text'])) {
                $id="Personnel Department";
            }
            elseif (preg_match("/saftey/i", $items['text'])||preg_match("/theft/i", $items['text'])||preg_match("/discomfort/i", $items['text'])) {
                $id="Security Department";
            }
            $string=$items['text'];
              if(preg_match("/RT/i", $string)){
                $string=str_replace("RT","",$string);
              }
              $userTimezone = new DateTimeZone('Asia/Kolkata');
            $gmtTimezone = new DateTimeZone('GMT');
            $myDateTime = new DateTime($items['created_at'], $gmtTimezone);
            $offset = $userTimezone->getOffset($myDateTime);
            $myInterval=DateInterval::createFromDateString((string)$offset . 'seconds');
            $myDateTime->add($myInterval);
            $result = $myDateTime->format('Y-m-d H:i:s');
            $sql='INSERT INTO `feedback_analysis` (name,text,status,id,created_at) VALUES ("'.$items['user']['name'].'","'.$string.'","Not_approved","'.$id.'","'.$result.'");';
            if ($conn->query($sql) === TRUE) {
                 echo "New record created successfully";
             } else {
               echo "Error: " . $sql . "<br>" . $conn->error;
                } 
           
        }
                       
?>