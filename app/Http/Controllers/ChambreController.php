<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChambreController extends Controller
{
    //
   

    public function send_whatsap($id){
        $phone = '+221704072668';
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://graph.facebook.com/v15.0/112541995236126/messages',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '{
            "messaging_product": "whatsapp",
            "to": "' . $phone . '",
            "type": "template",
            "template": {
                "name": "hello_world",
                "language": {
                    "code": "en_US"
                }
            }
        }',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer EAAEH14Red0ABAAMX45QJXobjo8weTsV6uCkjloEqubHJd3cv8h3CZCUBZAK1qLqBZCjUNZCQgMUFHk23fb9rKZCZC0DZBDtYPQWQVZBZC2U1ubLDGuS8zCSE3vCytWZBLpbY2VHa6KnufE8orZBY8hTCQZCioPaOYBC82xtnFXhTHcZBtMMIvtV8IOVtGHVp8ovAhLEfXzjBjKlHbHQZDZD',
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        echo $response;

            
    }
}
