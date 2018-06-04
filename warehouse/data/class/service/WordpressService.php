<?php

class WordpressService
{
    private $basicAuth = array(
        'username' => 'taku',
        'password' => 'S_2ciX8-'
    );

    private $wordpressUrl = 'http://takuyou2018.local/?rest_route=/wp/v2/posts/';

    /**
     * Get post by id or post url
     * @return  array
     */
    public function getPost($content)
    {
        $url = $this->getFullApiUrl($content);

        $context = stream_context_create(array(
            'http' => array(
                'header'  => "Authorization: Basic " . base64_encode("taku:S_2ciX8-")
            )
        ));

        $post = file_get_contents($url, false, $context);

        $post = file_get_contents($url);

        if ($post === false) {
            return array();
        }

        $post = json_decode($post, true);

        return $post;
    }

    protected function getFullApiUrl($content)
    {
        // Id
        if (is_numeric($content)) {
            $appendString = $content;
        }

        if (filter_var($content, FILTER_VALIDATE_URL)) {
            $slug  = $this->extractSlug($content);
            $query = http_build_query($slug);
            $appendString = $query;
        }

        return $this->wordpressUrl . $appendString;
    }

    protected function extractSlug($url)
    {

    }
}