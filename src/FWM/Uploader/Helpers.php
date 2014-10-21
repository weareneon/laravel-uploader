<?php namespace \FWM\Uploader;

class Helpers {

    public function create_folder_path()
    {
       return "uploads/".date('Y')."/".date('m')."/";
    }

    /**
     * format_filename Remove spaces & add a timestamp to files
     * @var string filename
     * @return string formatted filename
     */
    public function format_filename($filename)
    {
      return time() . "-" . str_replace(" ", "", $filename);
    }

} // class Helpers
