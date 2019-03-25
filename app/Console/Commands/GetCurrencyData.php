<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use GuzzleHttp\Client;

use Storage;

class GetCurrencyData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:today';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get Currency rade from Arion Bank.';

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
    
        $result = $client->request('GET', 'https://apis.is/currency/arion');

        Storage::put('public/files/currency.json', $result->getBody()->getContents());
    }
}
