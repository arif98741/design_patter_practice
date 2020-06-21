<?php


namespace App;


class FacebookAdapter implements SocialMediaAdapter
{
    private $facebook;


    /**
     * FacebookAdapter constructor.
     * @param Facebook $facebook
     */
    public function __construct(Facebook $facebook)
    {
        $this->facebook = $facebook;
    }

    public function post()
    {
        // TODO: Implement post() method.
    }
}