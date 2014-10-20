<?php namespace FWM\Uploader\Services; 

use FWM\Uploader\ServiceInterface;
use Illuminate\Foundation\Application;

class S3 implements ServiceInterface {

    /**
     * @var Application
     */
    protected $app;

    /**
     * @param Application $app
     */
    function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param $image
     * @param $destination
     */
    public function uploadImage($image, $destination)
    {
        $s3 = $this->app->make('aws')->get('s3');

        $args = array(
            'Bucket'       => getenv('AWS_S3_BUCKET'),
            'Key'          => $destination,
            'ACL'          => 'public-read',
            'CacheControl' => 'max-age=3153600'
        );

        if (method_exists($image, 'getPathName')):
            // Uploaded File
            $args['SourceFile'] = $image->getPathName();
            $args['ContentType'] = $image->getMimeType();
        else:
            // GD Object
            $args['Body'] = $image;
            $args['ContentType'] = $image->mime();
        endif;

        $s3->putObject($args);
    }


} 