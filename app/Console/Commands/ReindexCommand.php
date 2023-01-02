<?php

namespace App\Console\Commands;

use App\Models\Clients;
use Elastic\Elasticsearch\Client;
use Illuminate\Console\Command;

class ReindexCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'search:reindex';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Indexes all articles to Elasticsearch';

    /**
     * Execute the console command.
     *
     * @return int
     */
    private $elasticsearch;

    public function __construct(Client $elasticsearch)
    {
        parent::__construct();

        $this->elasticsearch = $elasticsearch;
    }



    public function handle()
    {
        $this->info('Indexing all articles. This might take a while...');

        foreach (Clients::cursor() as $data)
        {
            $this->elasticsearch->index([
                'index' => $data->getSearchIndex(),
                'type' => $data->getSearchType(),
                'id' => $data->getKey(),
                'body' => $data->toSearchArray(),
            ]);

            // PHPUnit-style feedback
            $this->output->write('.');
        }

        $this->info("\nDone!");
    }

}
