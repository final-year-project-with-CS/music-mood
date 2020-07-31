<?php

namespace App\Listeners;

use App\Events\UploadedSongEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use GuzzleHttp\Client;
use Exception;

class TrasferFileAPi
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UploadedSongEvent  $event
     * @return void
     */
    public function handle(UploadedSongEvent $event)
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://127.0.0.1:8080',
            // You can set any number of default request options.
            'timeout'  => 0.5,
        ]);
        
        // dd($client);
        try {
          $body = fopen('http://127.0.0.1:8000/songs//changes_1_songs////songs//Rostam_Kibamia.txt', 'r');
          $r =  $client->post('http://127.0.0.1:8080/file', ['file' => $body]);    

        }
        catch (GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
        }
        catch (Exception $e) {
            return $e;
        }


        return response()->json(["results" => $r]);
      
    }
}
