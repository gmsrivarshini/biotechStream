<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

//$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

//$jsonobj = '{ "items": "50", "sentiment_score_definition": "x <= -0.35: Bearish; -0.35 < x <= -0.15: Somewhat-Bearish; -0.15 < x < 0.15: Neutral; 0.15 <= x < 0.35: Somewhat_Bullish; x >= 0.35: Bullish", "relevance_score_definition": "0 < x <= 1, with a higher score indicating higher relevance.", "feed": [ { "title": "EAGLE PHARMACEUTICALS ALERT: Bragar Eagel & Squire, P.C. Reminds Investors that a Class Action Lawsuit Has Been Filed Against Eagle Pharmaceuticals, Inc. and Encourages Investors to Contact the Firm - Eagle Pharmaceuticals ( NASDAQ:EGRX ) ", "url": "https://www.benzinga.com/pressreleases/23/12/g36393055/eagle-pharmaceuticals-alert-bragar-eagel-squire-p-c-reminds-investors-that-a-class-action-lawsuit-", "time_published": "20231227T020000", "authors": [ "Globe Newswire" ], "summary": "NEW YORK, Dec. 26, 2023 ( GLOBE NEWSWIRE ) -- Bragar Eagel & Squire, P.C., a nationally recognized stockholder rights law firm, reminds investors that a class action lawsuit has been filed against Eagle Pharmaceuticals, Inc. ( \"Eagle Pharmaceuticals\" or the \"Company\" ) EGRX in the United States ...", "banner_image": "https://www.benzinga.com/next-assets/images/schema-image-default.png", "source": "Benzinga", "category_within_source": "News", "source_domain": "www.benzinga.com", "topics": [ { "topic": "Mergers & Acquisitions", "relevance_score": "0.108179" }, { "topic": "Life Sciences", "relevance_score": "1.0" }, { "topic": "Financial Markets", "relevance_score": "0.962106" } ], "overall_sentiment_score": -0.038356, "overall_sentiment_label": "Neutral", "ticker_sentiment": [ { "ticker": "EGRX", "relevance_score": "0.430716", "ticker_sentiment_score": "0.037784", "ticker_sentiment_label": "Neutral" } ] } ] }';

$jsonobj = file_get_contents('https://www.alphavantage.co/query?function=NEWS_SENTIMENT&topics=life_sciences&apikey=IKXSQWI8QBUP0SKU');
$obj = json_decode($jsonobj);
$feeds = $obj->feed;

for($i=0; $i<count($feeds); $i++) {
    echo $feeds[$i]->title;
    echo $feeds[$i]->summary;
    echo $feeds[$i]->url;
}


//$feeds = $obj->feed;


// replace the "demo" apikey below with your own key from https://www.alphavantage.co/support/#api-key
//$json = file_get_contents('https://www.alphavantage.co/query?function=NEWS_SENTIMENT&topics=life_sciences&apikey=IKXSQWI8QBUP0SKU');

//$data = json_decode($json,true);
//echo $data->items;

//for($i=0; $i<count($data['feed']); $i++) {
//    echo $data->feed->title;
//}

?>

</body>
</html>