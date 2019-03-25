<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use GuzzleHttp\Client;

use Storage;

class WeatherOfToday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:today';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get daily information from APIS for the weather in Iceland.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new Client();
    
        $result = $client->request('GET', 'https://apis.is/weather/forecasts/is?stations=1,422');

        Storage::put('public/files/weather.json', $result->getBody()->getContents());
    }
}
