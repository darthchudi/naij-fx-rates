<?php

namespace App\Http\Controllers;
use Carbon\Carbon as Carbon;
use Symfony\Component\DomCrawler\Crawler as Crawler;
use App\Rates;
use Illuminate\Http\Request;

class ScrappingController extends Controller
{
    public function get_rates(){
    $data = [];
    $html = file_get_contents('https://abokifx.com/');
    $crawler = new Crawler($html);
    $row = $crawler->filterXPath('//table/thead')->nextAll()->filterXPath('//tr');
    $data['date'] = $row->filterXPath('//td')->eq(0)->text();
    $data['dollars'] = $row->filterXPath('//td')->eq(1)->text();
    $data['pounds'] = $row->filterXPath('//td')->eq(2)->text();
    // $data = json_encode($data);
    $date = $data['date'];

    $dollars = $data['dollars'];
    $pounds = $data['pounds'];

    $dollars = explode('/',$dollars);
    $pounds = explode('/',$pounds);

    $dollars_buy = $dollars[0];
    $pounds_buy = $pounds[0];

    $dollars_sell = $dollars[1];
    $pounds_sell = $pounds[1];

    $this->insert($date,$dollars_buy,$dollars_sell,$pounds_buy,$pounds_sell);
  }

  public function insert($date,$dollar_buy,$dollar_sell,$pounds_buy,$pounds_sell){
      $rate = new Rates();
      
      $check_rate = $rate->where('Date',date("Y-m-d"))->first();
      if($check_rate){
        $this->update_rate($check_rate,$date,$dollar_buy,$dollar_sell,$pounds_buy,$pounds_sell);
      }else{
        $rate->Date =  $date;
        $rate->Dollar_BUY = $dollar_buy;
        $rate->Dollar_SELL = $dollar_sell;
        $rate->Pounds_BUY = $pounds_buy;
        $rate->Pounds_SELL =  $pounds_sell;
        $rate->save();  
      }
      
  }


  public function update_rate($data_rate,$date,$dollar_buy,$dollar_sell,$pounds_buy,$pounds_sell){
    $rate = new Rates();
    $date = Carbon::parse($data_rate->created_at);
    $now = Carbon::now();
    $time_diff = $date->diffInHours($now);
        if($time_diff >= 8){
        $update_rate = $rate->where('Date',date("Y-m-d"));
        $update_rate->Date =  $date;
        $update_rate->Dollar_BUY = $dollar_buy;
        $update_rate->Dollar_SELL = $dollar_sell;
        $update_rate->Pounds_BUY = $pounds_buy;
        $update_rate->Pounds_SELL =  $pounds_sell;
        $update_rate->save();

        }  
    }

}
