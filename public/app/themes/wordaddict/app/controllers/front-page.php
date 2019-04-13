<?php

namespace App;

use WP_Query;
use Sober\Controller\Controller;

class FrontPage extends Controller
{
    /**
     * Return the latest issue
     * 
     * @return array
     */
    public function latestissue()
    {
        $issue = new WP_Query([
            'post_type' => 'issue',
            'posts_per_page' => 1
        ]);

        return $issue;
    }

    public function past_issues()
    {
        $issues = new WP_Query([
            'post_type' => 'issue',
            'offset' => 1
        ]);

        return $issues;
    }
}
