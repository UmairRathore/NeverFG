<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Http\Client\ConnectionException;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate XML sitemap';

    public function handle()
    {
        try {
            // Step 1: Authenticate with the website programmatically
            $response = $this->loginToWebsite();

            // Step 2: Crawl through each accessible page
            $crawler = new Crawler($response->body());
            $urls = $this->crawlUrls($crawler);

            // Step 3: Generate and save the sitemap
            $this->generateSitemap($urls);
        } catch (\Exception $e) {
            $this->error('Failed to generate sitemap: ' . $e->getMessage());
        }
    }

    private function loginToWebsite()
    {
        // Perform authentication logic
        return Http::post('http://127.0.0.1:8000/login', [
            'email' => 'admin@gmail.com',
            'password' => '123111',
        ]);
    }

    private function crawlUrls($crawler)
    {
        $urls = [];

        // Extract URLs from the homepage
        $urls[] = 'http://127.0.0.1:8000'; // Homepage URL
        $this->output->writeln('Crawling homepage...');

        // Extract URLs from other pages (example: about page)
        $aboutPageResponse = Http::get('http://127.0.0.1:8000/about');
        $aboutPageCrawler = new Crawler($aboutPageResponse->body());
        $aboutPageUrls = $this->extractUrlsFromPage($aboutPageCrawler);
        $urls = array_merge($urls, $aboutPageUrls);
        $this->output->writeln('Crawling about page...');

        // Add additional URLs you want to include in the sitemap

        return $urls;
    }

    private function extractUrlsFromPage($crawler)
    {
        $urls = [];

        // Extract URLs from the page
        $crawler->filter('a')->each(function ($node) use (&$urls) {
            $url = $node->link()->getUri();
            if ($url !== '#') { // Exclude empty and anchor links
                $urls[] = $url;
            }
        });

        return $urls;
    }

    private function generateSitemap($urls)
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars($url) . '</loc>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        Storage::put('public/sitemap.xml', $xml);

        $this->info('Sitemap generated successfully.');
    }
}
