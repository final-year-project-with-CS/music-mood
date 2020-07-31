<?php

namespace App\Listeners;

use App\Events\UploadedSongEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use GuzzleHttp\Client;
use App\Abusive;
use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;


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
    public function handle($event)
    {
    
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'http://127.0.0.1:8080/file', [
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => fopen($event->song->song_file, 'r'),
                    'filename'=>'custom_filename.txt'
                ],
            ],
        ]);

        $respond = json_decode((string) $response->getBody(), true);
        $store_abs = Abusive::create([
            'song_id' => $event->song->id,
            'abusive_word' => serialize(explode(',' ,$respond[0]['abusive_words'])),
            'no_words' => $respond[0]['Total_abusive']
        ]);
        return $store_abs;


      
    }
}
