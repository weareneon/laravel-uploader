<?php namespace FWM\Uploader;

class Helpers {

    /**
     * Creates year-month upload path.
     */
    public function createFolderPath()
    {
       return "uploads/".date('Y')."/".date('m')."/";
    }

    /**
     * Remove spaces & add a timestamp to files
     * @var string filename
     * @return string formatted filename
     */
    public function formatFilename($filename)
    {
      return time() . "-" . str_replace(" ", "", $filename);
    }

}
