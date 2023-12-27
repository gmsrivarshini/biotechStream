<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BioTechStream Wesbite</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <link rel="stylesheet" href="style.css" />
</head>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
  <header>
    <a href="index.html" class="logo">BIO TECH STREAM</a>

    <nav class="navbar">
      <a href="index.html"> HOME </a>
      <a href="#about"> ABOUT </a>
      <a href="#blogs"> BLOGS</a>
      <a href="#diseaseAnalysis"> DISEASE ANALYSIS </a>
      <a href="stocks.php"> NEWS & STOCKS </a>
      <a href="#contact"> CONTACT </a>
    </nav>
  </header>

  <section class="home" id="home">
    <div class="news">
      <h3>Stock News</h3>
      <span>
      <p>
      <?php
        $jsonobj = file_get_contents('https://www.alphavantage.co/query?function=NEWS_SENTIMENT&topics=life_sciences&apikey=IKXSQWI8QBUP0SKU');
        //$jsonobj = '{ "items": "50", "sentiment_score_definition": "x <= -0.35: Bearish; -0.35 < x <= -0.15: Somewhat-Bearish; -0.15 < x < 0.15: Neutral; 0.15 <= x < 0.35: Somewhat_Bullish; x >= 0.35: Bullish", "relevance_score_definition": "0 < x <= 1, with a higher score indicating higher relevance.", "feed": [ { "title": "EAGLE PHARMACEUTICALS ALERT: Bragar Eagel & Squire, P.C. Reminds Investors that a Class Action Lawsuit Has Been Filed Against Eagle Pharmaceuticals, Inc. and Encourages Investors to Contact the Firm - Eagle Pharmaceuticals ( NASDAQ:EGRX ) ", "url": "https://www.benzinga.com/pressreleases/23/12/g36393055/eagle-pharmaceuticals-alert-bragar-eagel-squire-p-c-reminds-investors-that-a-class-action-lawsuit-", "time_published": "20231227T020000", "authors": [ "Globe Newswire" ], "summary": "NEW YORK, Dec. 26, 2023 ( GLOBE NEWSWIRE ) -- Bragar Eagel & Squire, P.C., a nationally recognized stockholder rights law firm, reminds investors that a class action lawsuit has been filed against Eagle Pharmaceuticals, Inc. ( \"Eagle Pharmaceuticals\" or the \"Company\" ) EGRX in the United States ...", "banner_image": "https://www.benzinga.com/next-assets/images/schema-image-default.png", "source": "Benzinga", "category_within_source": "News", "source_domain": "www.benzinga.com", "topics": [ { "topic": "Mergers & Acquisitions", "relevance_score": "0.108179" }, { "topic": "Life Sciences", "relevance_score": "1.0" }, { "topic": "Financial Markets", "relevance_score": "0.962106" } ], "overall_sentiment_score": -0.038356, "overall_sentiment_label": "Neutral", "ticker_sentiment": [ { "ticker": "EGRX", "relevance_score": "0.430716", "ticker_sentiment_score": "0.037784", "ticker_sentiment_label": "Neutral" }] } ] }';

        /*
        $jsonobj = '{
          "items": "50",
          "sentiment_score_definition": "x <= -0.35: Bearish; -0.35 < x <= -0.15: Somewhat-Bearish; -0.15 < x < 0.15: Neutral; 0.15 <= x < 0.35: Somewhat_Bullish; x >= 0.35: Bullish",
          "relevance_score_definition": "0 < x <= 1, with a higher score indicating higher relevance.",
          "feed": [
              {
                  "title": "EAGLE PHARMACEUTICALS ALERT: Bragar Eagel & Squire, P.C. Reminds Investors that a Class Action Lawsuit Has Been Filed Against Eagle Pharmaceuticals, Inc. and Encourages Investors to Contact the Firm - Eagle Pharmaceuticals ( NASDAQ:EGRX ) ",
                  "url": "https://www.benzinga.com/pressreleases/23/12/g36393055/eagle-pharmaceuticals-alert-bragar-eagel-squire-p-c-reminds-investors-that-a-class-action-lawsuit-",
                  "time_published": "20231227T020000",
                  "authors": [
                      "Globe Newswire"
                  ],
                  "summary": "NEW YORK, Dec. 26, 2023 ( GLOBE NEWSWIRE ) -- Bragar Eagel & Squire, P.C., a nationally recognized stockholder rights law firm, reminds investors that a class action lawsuit has been filed against Eagle Pharmaceuticals, Inc. ( \"Eagle Pharmaceuticals\" or the \"Company\" ) EGRX in the United States ...",
                  "banner_image": "https://www.benzinga.com/next-assets/images/schema-image-default.png",
                  "source": "Benzinga",
                  "category_within_source": "News",
                  "source_domain": "www.benzinga.com",
                  "topics": [
                      {
                          "topic": "Mergers & Acquisitions",
                          "relevance_score": "0.108179"
                      },
                      {
                          "topic": "Life Sciences",
                          "relevance_score": "1.0"
                      },
                      {
                          "topic": "Financial Markets",
                          "relevance_score": "0.962106"
                      }
                  ],
                  "overall_sentiment_score": -0.038356,
                  "overall_sentiment_label": "Neutral",
                  "ticker_sentiment": [
                      {
                          "ticker": "EGRX",
                          "relevance_score": "0.430716",
                          "ticker_sentiment_score": "0.037784",
                          "ticker_sentiment_label": "Neutral"
                      }
                  ]
              },
              {
                  "title": "Investor Notice: Robbins LLP Informs Investors of Class Action Filed Against Inspire Medical Systems, Inc. ( INSP ) - Inspire Medical Systems ( NYSE:INSP ) ",
                  "url": "https://www.benzinga.com/pressreleases/23/12/g36392812/investor-notice-robbins-llp-informs-investors-of-class-action-filed-against-inspire-medical-system",
                  "time_published": "20231227T002609",
                  "authors": [
                      "Globe Newswire"
                  ],
                  "summary": "SAN DIEGO, Dec. 26, 2023 ( GLOBE NEWSWIRE ) -- Robbins LLP informs investors that a shareholder filed a class action on behalf of all persons or entities who purchased of Inspire Medical Systems, Inc. INSP common stock between May 3, 2023 and November 7, 2023.",
                  "banner_image": "https://www.benzinga.com/next-assets/images/schema-image-default.png",
                  "source": "Benzinga",
                  "category_within_source": "News",
                  "source_domain": "www.benzinga.com",
                  "topics": [
                      {
                          "topic": "Life Sciences",
                          "relevance_score": "1.0"
                      },
                      {
                          "topic": "Financial Markets",
                          "relevance_score": "0.684621"
                      }
                  ],
                  "overall_sentiment_score": 0.151668,
                  "overall_sentiment_label": "Somewhat-Bullish",
                  "ticker_sentiment": [
                      {
                          "ticker": "INSP",
                          "relevance_score": "0.478198",
                          "ticker_sentiment_score": "0.174327",
                          "ticker_sentiment_label": "Somewhat-Bullish"
                      }
                  ]
              },
              {
                  "title": "Innovent and SanegeneBio Enter Strategic Collaboration to Develop siRNA Drug for the Treatment of Hypertension - PR Newswire",
                  "url": "https://www.prnewswire.com/apac/news-releases/innovent-and-sanegenebio-enter-strategic-collaboration-to-develop-sirna-drug-for-the-treatment-of-hypertension-302022227.html",
                  "time_published": "20231227T000255",
                  "authors": [],
                  "summary": "Innovent and SanegeneBio Enter Strategic Collaboration to Develop siRNA Drug for the Treatment of Hypertension PR ...",
                  "banner_image": null,
                  "source": "PR Newswire",
                  "category_within_source": "n/a",
                  "source_domain": "www.prnewswire.com",
                  "topics": [
                      {
                          "topic": "Life Sciences",
                          "relevance_score": "1.0"
                      }
                  ],
                  "overall_sentiment_score": 0.195829,
                  "overall_sentiment_label": "Somewhat-Bullish",
                  "ticker_sentiment": [
                      {
                          "ticker": "INCY",
                          "relevance_score": "0.078184",
                          "ticker_sentiment_score": "0.058635",
                          "ticker_sentiment_label": "Neutral"
                      },
                      {
                          "ticker": "IVBXF",
                          "relevance_score": "0.078184",
                          "ticker_sentiment_score": "0.059752",
                          "ticker_sentiment_label": "Neutral"
                      },
                      {
                          "ticker": "SNY",
                          "relevance_score": "0.026098",
                          "ticker_sentiment_score": "0.104211",
                          "ticker_sentiment_label": "Neutral"
                      }
                  ]
              },
              {
                  "title": "Innovent and SanegeneBio Enter Strategic Collaboration to Develop siRNA Drug for the Treatment of Hypertension ... - PR Newswire",
                  "url": "https://www.prnewswire.com/news-releases/innovent-and-sanegenebio-enter-strategic-collaboration-to-develop-sirna-drug-for-the-treatment-of-hypertension-302022226.html",
                  "time_published": "20231227T000000",
                  "authors": [],
                  "summary": "Innovent and SanegeneBio Enter Strategic Collaboration to Develop siRNA Drug for the Treatment of Hypertension ... PR ...",
                  "banner_image": null,
                  "source": "PR Newswire",
                  "category_within_source": "n/a",
                  "source_domain": "www.prnewswire.com",
                  "topics": [
                      {
                          "topic": "Life Sciences",
                          "relevance_score": "1.0"
                      }
                  ],
                  "overall_sentiment_score": 0.195829,
                  "overall_sentiment_label": "Somewhat-Bullish",
                  "ticker_sentiment": [
                      {
                          "ticker": "INCY",
                          "relevance_score": "0.078184",
                          "ticker_sentiment_score": "0.058635",
                          "ticker_sentiment_label": "Neutral"
                      },
                      {
                          "ticker": "IVBXF",
                          "relevance_score": "0.078184",
                          "ticker_sentiment_score": "0.059752",
                          "ticker_sentiment_label": "Neutral"
                      },
                      {
                          "ticker": "SNY",
                          "relevance_score": "0.026098",
                          "ticker_sentiment_score": "0.104211",
                          "ticker_sentiment_label": "Neutral"
                      }
                  ]
              },
              {
                  "title": "Innovent and SanegeneBio Enter Strategic Collaboration to Develop siRNA Drug for the Treatment of Hypertension - Innovent Biologics ( OTC:IVBIY ) ",
                  "url": "https://www.benzinga.com/pressreleases/23/12/n36392752/innovent-and-sanegenebio-enter-strategic-collaboration-to-develop-sirna-drug-for-the-treatment-of-",
                  "time_published": "20231227T000000",
                  "authors": [
                      "PRNewswire"
                  ],
                  "summary": "ROCKVILLE, Md. and SUZHOU, China, Dec. 26, 2023 /PRNewswire/ -- Innovent Biologics, Inc. ( \"Innovent\" ) ( HKEX: 01801 ) , a world-class biopharmaceutical company that develops, manufactures and commercializes high quality medicines for the treatment of oncology, autoimmune, metabolic, ...",
                  "banner_image": "https://www.benzinga.com/next-assets/images/schema-image-default.png",
                  "source": "Benzinga",
                  "category_within_source": "News",
                  "source_domain": "www.benzinga.com",
                  "topics": [
                      {
                          "topic": "Life Sciences",
                          "relevance_score": "1.0"
                      }
                  ],
                  "overall_sentiment_score": 0.198216,
                  "overall_sentiment_label": "Somewhat-Bullish",
                  "ticker_sentiment": [
                      {
                          "ticker": "INCY",
                          "relevance_score": "0.079392",
                          "ticker_sentiment_score": "0.058784",
                          "ticker_sentiment_label": "Neutral"
                      },
                      {
                          "ticker": "IVBXF",
                          "relevance_score": "0.026503",
                          "ticker_sentiment_score": "0.072861",
                          "ticker_sentiment_label": "Neutral"
                      },
                      {
                          "ticker": "SNY",
                          "relevance_score": "0.026503",
                          "ticker_sentiment_score": "0.104374",
                          "ticker_sentiment_label": "Neutral"
                      }
                  ]
              },
              {
                  "title": "INSPIRE MEDICAL SYSTEMS, INC. SHAREHOLDER ALERT: Bernstein Liebhard LLP Announces that a Securities Class Action Lawsuit Has Been Filed Against Inspire Medical Systems, Inc. ( NYSE: INSP ) - Inspire Medical Systems ( NYSE:INSP ) ",
                  "url": "https://www.benzinga.com/pressreleases/23/12/g36392656/inspire-medical-systems-inc-shareholder-alert-bernstein-liebhard-llp-announces-that-a-securities-c",
                  "time_published": "20231226T233000",
                  "authors": [
                      "Globe Newswire"
                  ],
                  "summary": "NEW YORK, Dec. 26, 2023 ( GLOBE NEWSWIRE ) -- Bernstein Liebhard LLP: Do you, or did you, own shares of Inspire Medical Systems, Inc. INSP? Did you purchase your shares between May 3, 2023 and November 7, 2023, inclusive? Did you lose money in your investment in Inspire Medical Systems, Inc.?",
                  "banner_image": "https://www.benzinga.com/next-assets/images/schema-image-default.png",
                  "source": "Benzinga",
                  "category_within_source": "News",
                  "source_domain": "www.benzinga.com",
                  "topics": [
                      {
                          "topic": "Life Sciences",
                          "relevance_score": "1.0"
                      },
                      {
                          "topic": "Financial Markets",
                          "relevance_score": "0.905476"
                      },
                      {
                          "topic": "Earnings",
                          "relevance_score": "0.360215"
                      },
                      {
                          "topic": "Mergers & Acquisitions",
                          "relevance_score": "0.108179"
                      }
                  ],
                  "overall_sentiment_score": 0.180887,
                  "overall_sentiment_label": "Somewhat-Bullish",
                  "ticker_sentiment": [
                      {
                          "ticker": "INSP",
                          "relevance_score": "0.405651",
                          "ticker_sentiment_score": "0.140427",
                          "ticker_sentiment_label": "Neutral"
                      }
                  ]
              },
              {
                  "title": "PainReform Announces Exercise of Warrants for Approximately $1.3 Million in Gross Proceeds - PainReform ( NASDAQ:PRFX ) ",
                  "url": "https://www.benzinga.com/pressreleases/23/12/g36392557/painreform-announces-exercise-of-warrants-for-approximately-1-3-million-in-gross-proceeds",
                  "time_published": "20231226T230058",
                  "authors": [
                      "Globe Newswire"
                  ],
                  "summary": "TEL AVIV, Israel, Dec. 26, 2023 ( GLOBE NEWSWIRE ) -- PainReform Ltd.",
                  "banner_image": "https://www.benzinga.com/next-assets/images/schema-image-default.png",
                  "source": "Benzinga",
                  "category_within_source": "News",
                  "source_domain": "www.benzinga.com",
                  "topics": [
                      {
                          "topic": "Life Sciences",
                          "relevance_score": "1.0"
                      },
                      {
                          "topic": "Financial Markets",
                          "relevance_score": "0.744043"
                      }
                  ],
                  "overall_sentiment_score": 0.196705,
                  "overall_sentiment_label": "Somewhat-Bullish",
                  "ticker_sentiment": [
                      {
                          "ticker": "PRFX",
                          "relevance_score": "0.304585",
                          "ticker_sentiment_score": "0.217383",
                          "ticker_sentiment_label": "Somewhat-Bullish"
                      }
                  ]
              },
              {
                  "title": "PainReform Announces Exercise of Warrants for Approximately $1.3 Million in Gross Proceeds",
                  "url": "https://www.globenewswire.com/news-release/2023/12/26/2801183/0/en/PainReform-Announces-Exercise-of-Warrants-for-Approximately-1-3-Million-in-Gross-Proceeds.html",
                  "time_published": "20231226T230000",
                  "authors": [
                      "PainReform Ltd"
                  ],
                  "summary": "TEL AVIV, Israel, Dec. 26, 2023 ( GLOBE NEWSWIRE ) -- PainReform Ltd. ( Nasdaq: PRFX ) ( \"PainReform\" or the \"Company\" ) , a clinical-stage specialty pharmaceutical company focused on the reformulation of established therapeutics, today announced the entry into a definitive agreement for the ...",
                  "banner_image": "https://ml.globenewswire.com/Resource/Download/26041366-4c41-4bb3-a1da-6c516bd9cb6b",
                  "source": "GlobeNewswire",
                  "category_within_source": "n/a",
                  "source_domain": "www.globenewswire.com",
                  "topics": [
                      {
                          "topic": "Life Sciences",
                          "relevance_score": "1.0"
                      },
                      {
                          "topic": "Financial Markets",
                          "relevance_score": "0.614606"
                      }
                  ],
                  "overall_sentiment_score": 0.201422,
                  "overall_sentiment_label": "Somewhat-Bullish",
                  "ticker_sentiment": [
                      {
                          "ticker": "PRFX",
                          "relevance_score": "0.27454",
                          "ticker_sentiment_score": "0.204676",
                          "ticker_sentiment_label": "Somewhat-Bullish"
                      }
                  ]
              },
              {
                  "title": "Coherus BioSciences Stock Is Soaring After-Hours - Heres Why - Coherus BioSciences ( NASDAQ:CHRS ) ",
                  "url": "https://www.benzinga.com/news/23/12/36391214/coherus-biosciences-stock-is-soaring-after-hours-heres-why",
                  "time_published": "20231226T213053",
                  "authors": [
                      "Ryan Gustafson"
                  ],
                  "summary": "Coherus BioSciences, Inc. CHRS shares are trading higher in Tuesdas after-hours session following the compans announcement of the U.S. Food and Drug Administration ( FDA ) approval of UDENYCA ONBODY for pegfilgrastim-cbqv.",
                  "banner_image": "https://cdn.benzinga.com/files/images/story/2023/12/26/injection-866555_1280.jpg?width=1200&height=800&fit=crop",
                  "source": "Benzinga",
                  "category_within_source": "News",
                  "source_domain": "www.benzinga.com",
                  "topics": [
                      {
                          "topic": "Life Sciences",
                          "relevance_score": "1.0"
                      },
                      {
                          "topic": "Financial Markets",
                          "relevance_score": "0.108179"
                      }
                  ],
                  "overall_sentiment_score": 0.284475,
                  "overall_sentiment_label": "Somewhat-Bullish",
                  "ticker_sentiment": [
                      {
                          "ticker": "CHRS",
                          "relevance_score": "0.612033",
                          "ticker_sentiment_score": "0.511397",
                          "ticker_sentiment_label": "Bullish"
                      }
                  ]
              },
              {
                  "title": "iRhythm Technologies to Present at the 42nd Annual J.P. Morgan Healthcare Conference - iRhythm Technologies ( NASDAQ:IRTC ) ",
                  "url": "https://www.benzinga.com/pressreleases/23/12/g36391243/irhythm-technologies-to-present-at-the-42nd-annual-j-p-morgan-healthcare-conference",
                  "time_published": "20231226T213000",
                  "authors": [
                      "Globe Newswire"
                  ],
                  "summary": "SAN FRANCISCO, Dec. 26, 2023 ( GLOBE NEWSWIRE ) -- iRhythm Technologies, Inc. IRTC, a leading digital health care company focused on creating trusted solutions that detect, predict, and prevent disease, today announced the company will be participating in the upcoming 42nd Annual J.P.",
                  "banner_image": "https://www.benzinga.com/next-assets/images/schema-image-default.png",
                  "source": "Benzinga",
                  "category_within_source": "News",
                  "source_domain": "www.benzinga.com",
                  "topics": [
                      {
                          "topic": "Life Sciences",
                          "relevance_score": "1.0"
                      }
                  ],
                  "overall_sentiment_score": 0.542736,
                  "overall_sentiment_label": "Bullish",
                  "ticker_sentiment": [
                      {
                          "ticker": "DSSMY",
                          "relevance_score": "0.199037",
                          "ticker_sentiment_score": "0.0",
                          "ticker_sentiment_label": "Neutral"
                      },
                      {
                          "ticker": "IRTC",
                          "relevance_score": "0.550532",
                          "ticker_sentiment_score": "0.831286",
                          "ticker_sentiment_label": "Bullish"
                      }
                  ]
              },
              {
                  "title": "iRhythm Technologies to Present at the 42nd Annual J.P. Morgan Healthcare Conference",
                  "url": "https://www.globenewswire.com/news-release/2023/12/26/2801169/0/en/iRhythm-Technologies-to-Present-at-the-42nd-Annual-J-P-Morgan-Healthcare-Conference.html",
                  "time_published": "20231226T213000",
                  "authors": [
                      "iRhythm"
                  ],
                  "summary": "SAN FRANCISCO, Dec. 26, 2023 ( GLOBE NEWSWIRE ) -- iRhythm Technologies, Inc. ( NASDAQ:IRTC ) , a leading digital health care company focused on creating trusted solutions that detect, predict, and prevent disease, today announced the company will be participating in the upcoming 42nd Annual J.P.",
                  "banner_image": "https://ml.globenewswire.com/Resource/Download/e2eba87d-aa8b-4436-9f66-9ebf27f727e5",
                  "source": "GlobeNewswire",
                  "category_within_source": "n/a",
                  "source_domain": "www.globenewswire.com",
                  "topics": [
                      {
                          "topic": "Life Sciences",
                          "relevance_score": "1.0"
                      }
                  ],
                  "overall_sentiment_score": 0.611008,
                  "overall_sentiment_label": "Bullish",
                  "ticker_sentiment": [
                      {
                          "ticker": "IRTC",
                          "relevance_score": "0.229149",
                          "ticker_sentiment_score": "0.509578",
                          "ticker_sentiment_label": "Bullish"
                      }
                  ]
              },
              {
                  "title": "S&P 500 Notches Fresh 2-Year High: How 2023s Rally Compares To Recent Years",
                  "url": "https://www.forbes.com/sites/dereksaul/2023/12/26/sp-500-notches-fresh-2-year-high-how-2023s-rally-compares-to-recent-years/",
                  "time_published": "20231226T211755",
                  "authors": [
                      "Derek Saul"
                  ],
                  "summary": "Major stock indexes gained again Tuesday, marching toward a strong, but far from historic, year for investors. as the Dow Jones Industrial Average registered its highest closing price ever and the S&P 500 and Nasdaq Composite closed at their highest prices since January 2022.",
                  "banner_image": "https://imageio.forbes.com/specials-images/imageserve/658b41cd66901b707bc19db8/0x0.jpg?format=jpg&crop=1450,815,x0,y0,safe&height=900&width=1600&fit=bounds",
                  "source": "Forbes",
                  "category_within_source": "n/a",
                  "source_domain": "www.forbes.com",
                  "topics": [
                      {
                          "topic": "Economy - Monetary",
                          "relevance_score": "0.158519"
                      },
                      {
                          "topic": "Life Sciences",
                          "relevance_score": "1.0"
                      },
                      {
                          "topic": "Financial Markets",
                          "relevance_score": "0.266143"
                      }
                  ],
                  "overall_sentiment_score": 0.14529,
                  "overall_sentiment_label": "Neutral",
                  "ticker_sentiment": [
                      {
                          "ticker": "MRNA",
                          "relevance_score": "0.080458",
                          "ticker_sentiment_score": "-0.016847",
                          "ticker_sentiment_label": "Neutral"
                      },
                      {
                          "ticker": "PFE",
                          "relevance_score": "0.080458",
                          "ticker_sentiment_score": "-0.016847",
                          "ticker_sentiment_label": "Neutral"
                      }
                  ]
              }
          ]
      }';

      */
        $obj = json_decode($jsonobj);
        $feeds = $obj->feed;

        for($i=0; $i < 10; $i++) {
            echo  "<li>";
            echo $feeds[$i]->title;
            echo "<a href=" . $feeds[$i]->url . "> more information </a>";
            echo "</li>";
        }
      ?>
      </span>
      </p>
    </div>
  </section>

</body>

</html>