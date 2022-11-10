<?php

namespace Sojebsikder\Html2pdf;

use Exception;
use Illuminate\Support\Facades\Http;

class Html2pdf
{
    /**
     * Specify url for html file
     */
    private $_url = null;

    /**
     * Api url
     */
    private $_api_url = 'https://extra-power.up.railway.app/converter/html2pdf?url=';

    /**
     * Specify html file url
     */
    public function setUrl($url)
    {
        $this->_url = $url;
    }

    private function convert()
    {
        try {
            if ($this->_url) {
                $response = Http::get($this->_api_url . $this->_url);
                return $response;
            } else {
                throw new Exception("Url not provided");
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Download the pdf
     */
    public function download()
    {
        try {
            return response($this->convert(), 200, ['Content-Type' => 'application/pdf',]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Get raw pdf file
     */
    public function getRaw()
    {
        try {
            return $this->convert();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    /**
     * Save pdf as file
     */
    public function saveAs()
    {
        try {
            return $this->convert();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
