<?php namespace FWM\Uploader; 

interface ServiceInterface {

    /**
     * @param $image
     * @param $destination
     * @return mixed
     */
    public function uploadImage($image, $destination);

    /**
     * @return mixed
     */
    public function createFolderPath();

    /**
     * @param $filename
     * @return mixed
     */
    public function formatFilename($filename);

} 