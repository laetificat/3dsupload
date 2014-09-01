<?php

class UploadController extends BaseController
{

    protected $sDestination;
    protected $sFilename;
    protected $sExtension;

    public function index()
    {

        return View::make('index');

    }

    public function Upload()
    {

        $aInput = Input::all();

        if (Input::hasFile('image'))
        {

//            $oFile = Input::file('image');
            $sDestination = 'uploads/';
            $sFilename = Input::file('image')->getClientOriginalName();
            $sExtention = Input::file('image')->getClientOriginalExtension();

            Input::file('image')->move($sDestination, $sFilename);

            return $sDestination . $sFilename;

        } else {

            return 'failed';

        }

    }

}