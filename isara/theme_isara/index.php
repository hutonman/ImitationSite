<?php 
function my_scripts() {
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

?>


<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Hello, world!</title>
    <?php wp_head(); ?>
  </head>
  <body>

    <section class="hollow"></section>
    <section id="header">
      <div class="head-container">
        <div class="head-left">
          <div class="head-text"><p>バンコクノマドエンジニア育成講座</p></div>
          <div id="title-img"><img src="/wp-content/themes/theme_isara/img/isaralogo.png"></div>
        </div>
        <div class="head-right">
          <i class="fa fa-file-text-o "></i> 
          <a href="">資料請求</a>
        </div>
      </div>
    </section>

    <section id="top">
      <div id="top-content">
        <p>プログラミングで</p>
        <p>人生の安定を手に入れよう</p>
        <div class="img-box"><img src="/wp-content/themes/theme_isara/img/isaralogolarge.png"></div>
        <p>バンコクのノマドエンジニア育成講座</p>
        <p>iSara[イサラ]</p>
      </div>
    </section>

    <section id="top-sub">
      <div class="recruit">
        <p>まずは20日間で、</p>
        <p style="margin-bottom:10px;">月10万円稼げるスキルを手に入れよう。</p>
        <p class="caution">※受講料金は実質0円です。詳しくは資料請求をどうぞ。</p>
        <button>お問い合わせ＆資料請求は<br>こちら</button>
        <div style="margin:20px;">
          <p>第６期生：2019年11月25日 ~ 2019年12月14日</p>
          <p></p>＊締め切りました</p>
        </div>
        <div style="margin:20px;">
          <p>第７期生：2020年2月17日 ~ 2019年3月7日</p>
          <p>＊締め切りました</p>
        </div>
        <div style="margin:20px;">
          <p>第8期生：2020年4月〜5月ごろを予定</p>
          <p>＊締め切りました</p>
        </div>
        <div class="sns" style="margin:20px;">
          <a href="" class="twi"><i class="fa fa-twitter ">ツイート</i> </a>
          <a href="" class="good"><i class="fa fa-thumbs-up ">いいね！</i> </a>
          <a href="" class="share">シェア</a>
        </div>
      </div>
    </section>


    <section id="main">
      <div class="main-contents">

        <div class="howto">
          <div class="contents-title">
            <div class="top-left"></div>
            <h1>ノマドエンジニア育成講座</h1>
            <h1>本当の自由を手に入れるためには？</h1>
            <div class="bottom-right"></div>
          </div>

          <div class="howto-text">
            <br>
            <br>
            <p>エンジニア需要の高まりに伴い、</p>
            <p>プログラミングスクールが増えています。</p>
            <p>しかしそこでの学習の先は、</p>
            <p>提携して決められた就職先に就職すること。</p>
            <br>
            <p>これで本当に良いのですか？</p>
            <p>日本人エンジニアはアメリカと較べて</p>
            <p>給料が格段に低い。</p>
            <br>
            <p>その理由が個々にあり、</p>
            <p>エンジニアは自分の給料を</p>
            <p>コントロールすべきなのです。</p>
            <br>
            <p>スキルを身につけたエンジニアは、</p>
            <p>人生をコントロールすることでより自由に。</p>
            <p>そこで必要なのが<strong class="underline">「稼ぐ力」</strong>です。</p>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>

        <div id="about">
          <div class="about">ABOUT</div>  
          <div class="contents-title">
            <div class="top-left"></div>
            <h1>エンジニアとして</h1>
            <h1>iSara[イサラ]とは</h1>
            <div class="bottom-right"></div>
          </div>

          <div class="about-text">
            <br>
            <br>
            <p>「 稼ぐこと 」にフォーカスした</p>
            <p>Webエンジニア育成講座です。</p>
          </div>

          <div class="skill-box">
            <div class="text">
              <p>稼げるエンジニアに必要な</p>
              <p>５つのスキルとは？</p>
            </div>
            <div class="skill-content">
              <div class="skill">
                <img src="/wp-content/themes/theme_isara/img/skill.jpg" alt="">
                <p>基礎的な</p>
                <p>プログラミングスキル</p>
              </div>
              <div class="skill">
                <img src="/wp-content/themes/theme_isara/img/sales.jpg" alt="">
                <p>案件獲得に必要な</p>
                <p>営業力</p>
              </div>
              <div class="skill">
                <img src="/wp-content/themes/theme_isara/img/document.jpg" alt="">
                <p>見積もり作成から</p>
                <p>納品までの知識</p>
              </div>
              <div class="skill">
                <img src="/wp-content/themes/theme_isara/img/skill.jpg" alt="">
                <p>基礎的な</p>
                <p>プログラミングスキル</p>
              </div>
              <div class="skill">
                <img src="/wp-content/themes/theme_isara/img/skill.jpg" alt="">
                <p>基礎的な</p>
                <p>プログラミングスキル</p>
              </div>
              <div style="clear: left;"></div>
            </div>
          </div>
        </div>

        <div id="steps">
          <div class="steps-content">
            <div class="steps-text">
              <h5>iSaraで</h5>
              <h5>「基本的なプログラミングスキル」は教えません</h5>
              <br>
              <p>基礎的なプログラミングは無料で学べる時代。</p>
              <br>
              <p>iSaraでは、基礎知識学習は</p>
              <p><span>事前課題</span>と<span>チャットサポート</span>のみ</p>
            </div>
            <div class="steps">
              <h5 class="step">STEP.1</h5>
              <p>【バンコク渡航前１ヶ月】</p>
              <p>事前課題で基礎知識を学ぶ</p>
            </div>
            <div class="steps">
              <h5 class="step">STEP.1</h5>
              <p>【バンコク渡航前１ヶ月】</p>
              <p>事前課題で基礎知識を学ぶ</p>
            </div>
            <div class="steps">
              <h5 class="step">STEP.1</h5>
              <p>【バンコク渡航前１ヶ月】</p>
              <p>事前課題で基礎知識を学ぶ</p>
            </div>
          </div>
          <div class="steps-footer">
            <p>スキルアップしてもフリーランスエンジニア</p>
            <p>として食べていくことは難しい。</p>
            <p>フリーランスには <span>プログラミングスキル以外</span>が大切。</p>
          </div>
        </div>

        <div id="study">
          <h1>iSara[イサラ]で学べること</h1>
          <p>iSaraの学習では、エンジニアとして</p>
          <p>「稼ぐ」ために必要な能力を身につけます。</p>
          <div>
            <img src="/wp-content/themes/theme_isara/img/salesskill.jpg" alt="">
            <img src="/wp-content/themes/theme_isara/img/knowledge.jpg" alt="">
            <img src="/wp-content/themes/theme_isara/img/skillup.jpg" alt="">
            <img src="/wp-content/themes/theme_isara/img/freelanceconnection.jpg" alt="">
          </div>
          <p>これらを教えるのがiSaraです。</p>
        </div>

        <div id="merits">
          <div class="contents-title">
            <div class="top-left"></div>
            <h1>他のプログラミングスクールと</h1>
            <h1>ここが違う！</h1>
            <h1>iSara[イサラ]の３つのメリット</h1>
            <div class="bottom-right"></div>
            <br><br>

          </div>

          <div class="merit-contents">
            <div class="merit">
              <div class="merit-img" style="background-image: url(/wp-content/themes/theme_isara/img/learnfromfreelancer.jpg);"></div>
              <h3>現役フリーランスから学べる</h3>
              <p>他のプログラミングスクールとは違い、実際にフリーランスとして活動しているエンジニアが直接講師を勤めます。</p>
            </div>
            <div class="merit">
              <div class="merit-img" style="background-image: url(/wp-content/themes/theme_isara/img/learnfromprojects.jpg);"></div>
              <h3>実践を通じて学べる</h3>
              <p>フリーランスにとって最短の学習方法は「実践」。iSaraでは実案件を通して学びます。現役フリーランサーの案件サポートに加え、クラウドソーシングを活用。初心者の自分じゃ無理と思うかもですが、現役フリーランスがサポートしますので大丈夫。</p>
            </div>
            <div class="merit">
              <div class="merit-img" style="background-image: url(/wp-content/themes/theme_isara/img/actuallyfree.jpg);"></div>
              <h3>授業料が実質０円</h3>
              <p>講座費用258,000円以上の金額が稼げるまで「永久サポート延長」があります。</p>
            </div>

            <div class="support">
              <h3>さらに！帰国後もサポート付き</h3>
              <h4>リモートワーカーのチームを作ることで</h4>
              <h4>受注率、受注単価が大幅に向上します。</h4>
              <p>iSaraは講座が終わって終了ではありません。<br>参加メンバーのチャットグループを作り、帰国後も継続的に案件参加できるようになります。また、チームで働くことで継続的に稼ぎやすい仕組みづくりも構築しております。</p>
            </div>

          </div>

            <p style="font-size: 12px; text-align: center; margin: 20px 10px">
              事前課題ができない人はお断りしております。<br>
              iSaraでは、無料で学べるプログラミング基礎知識は教えません。事前課題一覧はメールで送りつつ、チャットサポートのみ。従って、本気で取り組まないと結果は出ません。
            </p>
        </div>

        <div id="members">
          <h1><i class="fa fa-newspaper-o fa-lg fa-fw "></i> 創業メンバー</h1>
          <p style="font-size: 12px; letter-spacing: 1px; padding-bottom: 100px;">実際にフリーランスとして活躍している<br>
            エンジニアが立ち上げました</p>

          <div class="member">
            <img src="/wp-content/themes/theme_isara/img/keisuke_someya.jpg" alt="">
            <p class="name">フリーランス講師<br><br>
              染谷 佳佑</p>
            <p style="text-align: left; padding: 10px; font-size: 14px;">ISARA (THAILAND) CO.,LTD.の代表です。学生起業の後にリクルートへ就職、その後独立し、海外移住しました。今はフリーランスとしてリモートワークで日本円を稼ぎ、外国通貨に変えて使い、海外を旅してます。営業、ブログPVアップ(最高月間150万PV)、ビジネス構築が専門です。</p>
          </div>
          <div class="member">
            <img src="/wp-content/themes/theme_isara/img/yuki.png" alt="">
            <p class="name">フリーランス講師<br><br>
              成田　雄輝</p>
            <p style="text-align: left; padding: 10px; font-size: 14px;">バンコクのシェアハウスのオーナーをやりながら一年の大半をタイで過ごしています。 大学時代から今に至るまでネットだけで生計を立てているので、自由歴だけは講師陣の中で最長です！ 母親がタイ人という事もありタイには精通してますので、こちらでの生活のサポートはお任せください！</p>
          </div>
          <div class="member">
            <img src="/wp-content/themes/theme_isara/img/shohey.png" alt="">
            <p class="name">フリーランスエンジニア<br><br>
              大滝　昇平</p>
            <p style="text-align: left; padding: 10px; font-size: 14px;">月の半分は東京の会社にリモートで勤めつつ、フリーでも活動しているエンジニアです。Laravel・WordPressでのWeb制作がコアスキル。立ち上げメンバーとしてカリキュラム原案制作に参画し、現在は外部アドバイザーをしています！</p>
          </div>
          <div class="member" style="margin-bottom: 0;">
            <img src="/wp-content/themes/theme_isara/img/manabu.png" alt="">
            <p class="name">フリーランスエンジニア<br><br>
              坂内　学</p>
            <p style="text-align: left; padding: 10px; font-size: 14px;">アドバイザーとして参画しました。新卒で海外就職して１１ヶ月後に退職。今は日本にいたり海外にいたりでゆるくフリーランスをしています。<br>
            <br>
            お仕事はWebマーケティングとプログラミングが専門領域です。</p>
          </div>


        </div>

        <div id="qa">
          <div id="qa-top">
            <div class="qa-title">Q&A</div>
            <div class="contents-title">
              <div class="top-left"></div>
              <h1>ノマドエンジニアとして自由に稼ぐことは</h1>
              <h1>「 本当に 」可能なのか？</h1>
              <div class="bottom-right"></div>
            </div>
          </div>
          <div class="ans">
            <div class="triangle"></div>
            <div style="text-align: center;">
              <p style="font-weight: bold; padding: 5px;">実現可能です</p>
              <p style="font-size: 12px; font-weight: bold;">その証拠に第三者の声を聞いてみました。</p>
              <p style="font-size: 12px; margin: 30px;">※実際にフリーランスエンジニアを採用する企業様から、<br>
              メッセージをいただきました。</p>
            </div>
            <div class="persons">
              <div class="person">
                <div class="person-img"><img src="/wp-content/themes/theme_isara/img/take.jpg"></div>
                <div class="person-txt">
                  <p>リモートワークという言葉がありますが、弊社では何も気にしません。エンジニアに求めるのは、快適なコミュニケーションと信頼と成果物のみ。</p>
                  <p style="text-decoration: underline; font-style: oblique; font-size: 16px;">Kredo IT Abroad . Inc 代表取締役 横田 猛夫</p>
                </div>
              </div>
              <div class="person">
                <div class="person-img"><img src="/wp-content/themes/theme_isara/img/minami_sato.jpg"></div>
                <div class="person-txt">
                  <p>社内でスキルのある人材を採用するのは難しい。外部パートナーとして継続的に依頼できるフリーランスには助かっています。</p>
                  <p style="text-decoration: underline; font-style: oblique; font-size: 16px;">SAPEUR . Inc 代表取締役 佐藤 陽</p>
                </div>
              </div>
              <div class="person">
                <div class="person-img"><img src="/wp-content/themes/theme_isara/img/asada.jpg"></div>
                <div class="person-txt">
                  <p>プログラマーが足りていないときに外部リソースとして、フリーランスに発注しています。今はどこの会社でもエンジニアが不足していますね。</p>
                  <p style="text-decoration: underline; font-style: oblique; font-size: 16px;">株式会社BeautifulWorks 代表取締役 淺田 百合</p>
                </div>
              </div>
            </div>
          </div>



        </div>

        <div id="isara-contents" style="padding-bottom: 30px;">
          <div class="cotents-top">
            <h1>iSara[イサラ]で学べる内容</h1>
            <p>渡航前の事前課題と渡航中に学べることの一覧です。</p>
          </div>
          <div class="study-study">
            <div class="study-wrapper">
              <p>渡航前の事前学習</p>
            </div>
            <div class="study-contents">
              <ul style="list-style: none; margin: 0;">
                <li>０から始めるプログラミング事前学習講座</li>
                <li>参加者グループコミュニティ</li>
                <li>チャットサポート</li>
                <li>事前スカイプコンサル</li>
                <li>環境構築の事前学習</li>
                <li>jQueryの事前学習講座</li>
                <li>Bootstrapの事前講座</li>
                <li>PHP / Mysqlの事前学習講座</li>
                <li>稼ぐためのHTML/CSS講座</li>
                <li>WordPressの事前学習講座</li>
              </ul>
            </div>
          </div>
          <div class="study-study">
            <div class="study-wrapper">
              <p>バンコク渡航中</p>
            </div>
            <div class="study-contents">
              <ul style="list-style: none; margin: 0;">
                <li>フリーランス独立術講座</li>
                <li>実際の実務案件をこなす</li>
                <li>ノマドフリーランス体験</li>
                <li>バンコク生活体験</li>
                <li>クラウドソーシング活用講座</li>
                <li>フリーランスのための営業講座</li>
              </ul>
            </div>
          </div>
        </div>

        <div style="background-color: #016ea9; color: white; padding: 10px;text-align: center;font-weight: bold;">
          <p>講座費用258,000円以上の金額が稼げるまで「永久サポート延長」します。</p>
          <p>つまりリスク０で参加できます。</p>
        </div>

        <div id="flow">
          <div class="flow-top"><i class="fa fa-laptop fa-lg fa-fw "></i> 受講の流れ</div>
          
          <div class="flow-content">
            <div>
              <div class="detail">
                <img src="/wp-content/themes/theme_isara/img/skypeconsulting.png" alt="">Skypeで事前コンサル
              </div>
              <div class="addtxt open">
                <br>
                <p style="font-weight: bold;">現在のスキルの状況、パソコンの環境説明、渡航での注意点を話します。</p>
                <br>
                <p style="font-weight: bold;">簡単なテストあり</p>
                <br>
                <p>iSaraでは受講費以上を稼げることを保障しています。従って、事前コンサル時点で簡単なテストを実施し、場合によってはお断りをしております。（テストの内容はPCの基礎知識に関するテストですので、普段からパソコンを利用する方でしたら問題ありません。テストはもちろん無料ですので、まずはお問い合わせください。）</p>
              </div>
            </div>
          </div>
          
          <div class="flow-content">
            <div>
              <div class="detail">
                <img src="/wp-content/themes/theme_isara/img/preworks.png" alt="">事前課題の提出
              </div>
              <div class="addtxt">
                <br>
                <p style="font-weight: bold;">出発前の１ヶ月前に事前課題を送ります。</p>
                <br>
                <p>０から始めるプログラミング事前学習講座、環境構築の事前学習、jQueryの事前学習講座、Bootstrapの事前学習講座、PHP / Mysqlの事前講座
                </p>
                <br>
                <p style="font-weight: bold;">課題は多いですが、ここで努力が必須です。プログラミングは高付加価値なスキルです。そのためには学習が必須です。回数無制限のチャットサポート付きですので、最初は努力してください。
                </p>
                <p>また、参加者グループコミュニティも作成するので、横の繋がりでモチベーションを高めることもできます。
                </p>
              </div>
            </div>
          </div>
          
          <div class="flow-content">
            <div>
              <div class="detail">
                <img src="/wp-content/themes/theme_isara/img/flight.png" alt="">現地に渡航
              </div>
              <div class="addtxt">
                <br>
                <p style="font-weight: bold;">到着日には空港でお出迎えし、初日のオリエンテーションを行います。滞在先は空港からすぐの出来たてシェアハウス。美味しいタイ料理などもご紹介します。
                </p>
                <br>
                <p style="font-weight: bold;">iSaraは『ノマド』フリーランス養成講座です。楽しいノマド体験ができるよう、バンコクでの生活はこちらでサポートします。</p>
                <br>
              </div>
            </div>
          </div>
          
          <div class="flow-content">
            <div>
              <div class="detail">
                <img src="/wp-content/themes/theme_isara/img/personwithlight.png" alt="">実案件を通して学ぶ
              </div>
              <div class="addtxt">
                <br>
                <p style="font-weight: bold;">現役フリーランスが抱える案件に加え、クラウドソーシングを使って実案件をこなします。
                </p>
                <br>
                <p style="font-weight: bold;">案件獲得のためのメールの書き方や見積りの仕方など、他のプログラミングスクールでは教えてくれない実務スキルを学ぶことができます。
                </p>
                <br>
                <p>＊現役フリーランスがサポートします。
                </p>
              </div>
            </div>
          </div>
          
          <div class="flow-content">
            <div>
              <div class="detail">
                <img src="/wp-content/themes/theme_isara/img/jobsupport.png" alt="">帰国後の仕事獲得サポート付き
              </div>
              <div class="addtxt">
                <br>
                <p style="font-weight: bold;">経験年数の少ないフリーランスが高単価で継続的に仕事受注するコツ、それがチームを組むことです。
                </p>
                <br>
                <p style="font-weight: bold;">iSaraではフリーランスコミュニティを形成し、帰国後のエンジニアでも継続的に稼げる仕組みを提供します。もちろん、個人で十分に稼げるようになった場合はいつでも脱退できますし、制限などは何もありません。
                </p>
                <br>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div id="why">
        <h1>なぜバンコクなのか？</h1>

        <div id="why-contents">
          <p>ここまで見ると、iSaraは日本でも実施可能に見えます。<br>
            しかし、バンコクを選んだのには理由があります。</p>
            <br>
          <ul>
            <li>プログラミングフリーランスの最先端</li>
            <li>水準は日本と同じなのに、生活費が安い（毎月８万円ほど）</li>
            <li>昼、夜共に遊びが充実（稼ぐモチベーションアップと息抜きにGOOD）</li>
            <li>日本人が住みやすい（食事が美味しい / 気候が良い / 親日である</li>
          </ul>
          <p style="font-size: 16px; font-weight: bold;">環境が大切。さらにこの価格が実現できるのが、バンコクなのです。</p>
        </div>
      </div>

      <div id="special">
        <div id="special-top">
          <h5><i class="fa fa-gift fa-lg fa-fw "></i>iSara受講生への参加特典</h5>
          <p><span>講座費用258,000円以上の金額が稼げるまでの</span></p>
          <p><span>「永久サポート延長」</span>を追加します。</p>
          <p>つまり、<span>実質０円</span>です。</p>
        </div>
        <div class="special-container">
          <div class="special-contents">
            <div class="special-left">特典1</div>
            <div class="special-right">参加費以上の金額が稼げるまで「永久サポート」参加費用は実質0円です</div>
          </div>
          <div class="special-contents">
            <div class="special-left">特典2</div>
            <div class="special-right">
              フリーランスエンジニアになる為の動画講義を無料プレゼント</div>
          </div>
          <div class="special-contents">
            <div class="special-left">特典3</div>
            <div class="special-right">フリーランス講師による個別コンサル（渡航前の週１回</div>
          </div>
        </div>
      </div>

      <div id="goal">
        <h5>iSaraは<br>
          ボランティアではありません</h5>

        <p>ここまでみると、実質０円で各種サポートもある、<br>
          特典が多すぎて逆に怪しい。そう思われるかもしれません。<br>
          しかし、iSaraが目指すことは異なります。</p>

          <div class="contents-title">
            <div class="top-left"></div>
            <h1>月１０万円稼げる</h1>
            <h1>エンジニアを輩出し続ける。</h1>
            <div class="bottom-right"></div>
          </div>
          <br><br>
          <p>最大の価値がこれです。<br>
            iSaraの卒業生が稼ぎ続けることで、<br>
            小さな経済が動き始めます。<br>
            ここに最大の価値があり、<br>
            この講座はその序章にすぎません。</p>
      </div>

      <div id="message">
        <h5 style="font-weight: bold;text-align: center;">創業者からのメッセージ</h5>
        <br>
        <p style="font-weight: bold;text-align: center;">「一生もののスキル」を身につけ、<br>
          ノマドライフを楽しもう！</p>
          <br>
        <img src="/wp-content/themes/theme_isara/img/IMG_1139-768x576.jpg" alt="">
        <p>初めまして。「iSara（イサラ）」創業者の染谷佳佑と申します。</p>
        <p>iSaraの開講は、僕達講師陣にとってもとても大きな挑戦です。今回、参加者に圧倒的な価値提供をするために、超少人数制だからできる内容を用意しました。</p>
        
        <ul>
          <li>「Webエンジニアとして稼ぐ」に特化した超実践的カリキュラム</li>
          <li>フリーランスとして生計を立て、いつでも世界中を旅できるスキル、収入のある講師陣のみを厳選</li>
          <li>講座参加者が25万8,000円の参加費以上を稼ぐまでの無期限サポート延長</li>
        </ul>

        <p>ここまでのカリキュラムを備えた講座は、世界で唯一iSaraだけでしょう。 iSaraでプログラミングや営業を学ぶことで、「一生ものの潰しが効くスキル」が身につきます。 もちろん勉強だけでなく、バンコクを楽しめるプログラムも用意しています！</p>
        <p>３ヶ月間徹底的にサポートします。ぜひバンコクでお会いしましょう。</p>
      </div>

      <div id="form">
        <div id="form-top">
          <h5><i class="fa fa-file-text-o fa-lg fa-fw "></i> 資料請求フォーム</h5>
          <p>まずは無料で資料請求からどうぞ。</p>
        </div>
        <div id="form-content">
          <form>
            <input type="text" name="last-name" placeholder="姓">
            <input type="text" name="first-name" placeholder="名">
            <input type="email" name="email" placeholder="メールアドレス">
            <textarea rows="4" placeholder="質問などはこちら（空欄でもOKです）"></textarea>
            <button>送信</button>
          </form>
        </div>
      </div>

      <div id="faq">
        <h1><i class="fa fa-envelope-o fa-lg fa-fw "></i> よくある質問</h1>
        <div id="faq-container">

          <div class="question"><i class="fa fa-question-circle "></i>プログラミングスキルは必要ですか？  </div>
          <div class="answer">いいえ、必要ありません。しかし、iSaraでは参加費以上の金額が稼げることを保障しています。 従って、事前通話面談時点で簡単なテストを実施し、場合によってはお断りをしております。この点だけはご了承ください。</div>

          <div class="question"><i class="fa fa-question-circle "></i>参加費以上に稼げなかったらどうなりますか？  </div>
          <div class="answer">参加費である258,000円以上の金額をトータルで稼ぐまで、無期限でサポート延長いたします。（講座参加後、週30時間以上の実践をすることと、週１回の実践報告をすることが延長条件です。）きちんと学び実践すれば、フリーランスでも収入を作ることは十分に可能です。</div>

          <div class="question"><i class="fa fa-question-circle "></i>滞在中の宿泊先はどうなりますか？  </div>
          <div class="answer">宿泊費用が必要ですが、iSara提携のホステルに宿泊することになりますので心配はありません。</div>

          <div class="question"><i class="fa fa-question-circle "></i>滞在中の食事はどうなりますか？  </div>
          <div class="answer"> 拠点となる新築シェアハウスの周辺に、50バーツ程度の（160円）安価な飲食店が多数あります。 日本食レストランもありますし、出前を取ることも可能です。</div>

          <div class="question"><i class="fa fa-question-circle "></i>追加でかかる費用はありますか？  </div>
          <div class="answer">宿泊費（トータル20000円）と食費（一食150円程度）くらいです。</div>

          <div class="question"><i class="fa fa-question-circle "></i>就職、転職はできますか？  </div>
          <div class="answer">DODAの調査によると、2017年のエンジニアの求人倍率は7.5倍です。これは、人材不足が叫ばれる医療業界（医師：6倍、看護師：3倍）よりも高い数値です。ですのできちんとしたスキルを身につけることができれば、就職・転職には困らないはずです。元リクルートの転職のプロも運営スタッフとして参加しています。</div>

          <div class="question"><i class="fa fa-question-circle "></i>フリーランスにならなければならないのですか？  </div>
          <div class="answer">いいえ、必ずフリーランスにならないといけないわけではありません。 実際に過去の卒業生の方の進路も、独立、副業として続ける、就職するなど様々です。  </div>

          <div class="question"><i class="fa fa-question-circle "></i>ノマドワーカー的に世界を旅しながら働きたいです。可能ですか？  </div>
          <div class="answer">きちんと努力し、スキルを身に着けることができれば可能です。 iSaraは、「好きなときに働き、好きなときに遊ぶ」という人生を送れる人を増やすために開講しました。 ちなみに、講師は全員ノマドワーカーとして、働きながら自由に世界中を旅しています。</div>

          <div class="question"><i class="fa fa-question-circle "></i>学ぶプログラミング言語はなんですか？  </div>
          <div class="answer">HTML / CSS / PHPを学びます。どの言語も需要が高いです。</div>

          <div class="question"><i class="fa fa-question-circle "></i>将来的にwebサービス、アプリ、メディアを作りたいです。  </div>
          <div class="answer">経験してる講師がいますよ。大丈夫です。</div>

          <div class="question"><i class="fa fa-question-circle "></i>次回開催の予定はありますか？  </div>
          <div class="answer">未定です。まずはお問合せください。</div>

          <div class="question"><i class="fa fa-question-circle "></i>海外に出るのが初めてで不安です  </div>
          <div class="answer">講師陣が現地での生活をサポートしますので安心してください。ただしパスポート取得は必要です。</div>

          <div class="question"><i class="fa fa-question-circle "></i>タイ語、英語が一切話せません。参加可能でしょうか。  </div>
          <div class="answer">タイ語スタッフ、英語スタッフがいるのでOKです。日本人、タイ人スタッフがおりますので、期間中のトラブル対応の心配は必要ありません。</div>

          <div class="question"><i class="fa fa-question-circle "></i>治安はどうですか？  </div>
          <div class="answer">バンコクは、東南アジアや南アジアの他の国の都市部と比べると、街中も整備されており、非常に治安の良い街です。日本ほどではないですが、世界でも非常に治安の良い国として知られています。</div>

          <div class="question"><i class="fa fa-question-circle "></i>パソコンは必要ですか？  </div>
          <div class="answer"> はい。ノートPCのご用意が必要です。</div>

        </div>
      </div>
      <?php wp_footer(); ?>
    </section>
    <img src="/openSite/isara//wp-content/themes/theme_isara/img/main.jpg" alt="none">



    <section id="footer">

    </section>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- 読み込むjsファイルの指定 -->
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>