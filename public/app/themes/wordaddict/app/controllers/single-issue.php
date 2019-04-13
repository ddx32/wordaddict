<?php

namespace App;

use Sober\Controller\Controller;

class SingleIssue extends Controller
{
    /**
     * Return artwork image
     * 
     * @return array
     */
    public function artwork_image()
    {
        $artwork_image = get_field('main_artwork');
        return $artwork_image;
    }

    public function cover_image()
    {
        $cover_image = get_field('issue_cover');
        return $cover_image;
    }

    public function issue_number()
    {
        $issue_number = get_field('issue_number');
        return $issue_number;
    }

    public function release_date()
    {
        $release_date = get_field('release_date');
        return $release_date;
    }
}