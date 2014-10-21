<?php namespace FWM\Uploader;

class Helpers {

    /**
     * createFolderPath Creates year-month upload path. 
     * /
    public function createFolderPath()
    {
       return "uploads/".date('Y')."/".date('m')."/";
    }

    /**
     * formatFilename Remove spaces & add a timestamp to files
     * @var string filename
     * @return string formatted filename
     */
    public function formatFilename($filename)
    {
      return time() . "-" . str_replace(" ", "", $filename);
    }

} // class Helpers
