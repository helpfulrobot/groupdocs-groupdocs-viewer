<?php

class groupdocsViewer_Result extends ViewableData
{
    protected $width = false;
    protected $height = false;
    protected $guid = false;

    
    public function __construct($width, $height, $guid)
    {
        $this->width = $width;
        $this->height = $height;
        $this->guid = $guid;
        parent::__construct();
    }
    
    public function forTemplate()
    {
        return "<iframe src='http://apps.groupdocs.com/document-viewer/embed/" . $this->guid . "?&referer=silverstripe/1.0.0' frameborder='0' width='" . $this->width . "' height='" . $this->height ."'></iframe>";
    }
}
