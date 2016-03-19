<?php
    /*GCM (Google Cloud Messaging)
     * 
     * Package : GCM (Google Cloud Messaging)
     */
    
    class Gcm
    {
        function __construct() {
        
        }
        
        /**
        * Sending Push Notification
        */
        public function send_notification($registatoin_ids, $message) {
           
            // Set POST variables
            $url = 'https://android.googleapis.com/gcm/send';
 
            $fields = array(
                'registration_ids' => $registatoin_ids,
                'data' => $message,
            );
            
            $headers = array(
                'Authorization: key=AIzaSyBjLS6Q8lbkqW-ThnQvv53XMwWXuQ7Ckj0',
                'Content-Type: application/json'
            );
            // Open connection
            $ch = curl_init();
 
            // Set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_URL, $url);
 
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
            // Disabling SSL Certificate support temporarly
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
 
            // Execute post
            $result = curl_exec($ch);
            if ($result === FALSE) {
                $result = 1;
            }
 
            // Close connection
            curl_close($ch);
            return $result;
        }
    }


 
?>