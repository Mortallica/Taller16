<?php

namespace App\Http\Controllers;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController

{

    public static $quotes = array("The Black Knight Always Triumphs! - Monty Python",
        "Anyone who has never made a mistake has never tried anything new - Albert Einstein",
        "Never Stop Exploring - The North Face",
        "Be yourself; everyone else is already taken - Oscar Wilde",
        "So many books, so little time - Frank Zappa",
        "Be the change that you wish to see in the world - Mahatma Gandhi",
    );

    public function index()
    {
        $totalQuotes = (count(Controller::$quotes));
        $randomNumber = (rand(0,($totalQuotes-1)));
        $randomQuote = Controller::$quotes[$randomNumber];
        return response()->json(['quote' => $randomQuote, 'server_ip' => gethostbyname(gethostname())]);
    }

    public function randomImg()
    {
        $randomQuoteImg = [];
        $randomNumberImg = (rand(0,(14)));
        $randomQuoteImg["url"] = "https://lumenimages.s3.amazonaws.com/".($randomNumberImg+1).".jpg";
        $randomQuoteImg["title"] = gethostbyname(gethostname());
        return view('image.show')->with("img",$randomQuoteImg);

    }
}
