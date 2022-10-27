<?php

namespace App\Service;

use Abraham\TwitterOAuth\TwitterOAuth;

class Twitter
{
    private TwitterOAuth $connection;

    public function __construct(
        string $accessToken,
        string $accessTokenSecret,
        string $apiKey,
        string $apiSecret,
    ) {
        $this->connection = new TwitterOAuth($apiKey, $apiSecret, $accessToken, $accessTokenSecret);
        $this->connection->setApiVersion('2');
    }

    /**
     * @param string $query
     * @param int $maxResults
     *
     * @return array
     */
    public function getPosts(string $query, int $maxResults): array
    {
        $result = $this->connection->get('tweets/search/recent', [
            'query' => $query,
            'max_results' => $maxResults,
            'tweet.fields' => 'created_at',
        ]);

        $array = json_decode(json_encode($result), true);

        if (array_key_exists('data', $array)) {
            return $array['data'];
        }

        return [];
    }
}