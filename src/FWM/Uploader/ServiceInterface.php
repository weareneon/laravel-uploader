<?php namespace FWM\Uploader; 

interface ServiceInterface {

    /**
     * @param $image
     * @param $destination
     * @return mixed
     */
    public function uploadImage($image, $destination);

} 