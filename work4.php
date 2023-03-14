<section class="work-section work4-section scr-section scr-section6 scr-section6-scr" data-n="6">
  <div class="bg-main bg-main4"></div>
  <div class="bg"></div>
  <div class="work">
    <div class="work-contents">
      <div class="mockup-all">
        <div class="mockup-c">
          <div class="screenshot-c">
          <img src="./img/work/work3/wp.png" alt="react 데스크탑이미지"><!-- 컴퓨터안 이미지 -->
          </div><!-- screenshot -->
          <p class="frame-c"></p>
        </div><!-- mockup-c -->
        <div class="mockup-m">
          <div class="screenshot-m">
          <img src="./img/work/work3/wp-m.png" alt="react 모바일 이미지"><!-- 컴퓨터안 이미지 -->
          </div><!-- screenshot -->
          <p class="frame-m"></p>
        </div><!-- mockup-m -->
      </div><!-- mockup-all -->

      <div class="mockup-desc">
        <div class="title">
          <h1>SITE LOGO</h1>
          <p>트랜드를 선도하는 기업</p>
        </div><!-- title -->
        <ul>
          <li>
            <span>TYPE</span>
            <span>Wordpress</span>
          </li>
          <li>
            <span>Period</span>
            <span>5주</span>
          </li>
          <li>
            <span>TOOL</span>
            <span>php,html,scss,jquery</span>
          </li>
          <li>
            <span>Concept</span>
            <span>기업, 모던함</span>
          </li>
          <li>
            <span>참여도</span>
            <span>30%</span>
          </li>
        </ul>
        <div class="link">
          <button data-n="4">Planning</button>
          <a href="http://pass2149.dothome.co.kr" target="_blank">Website</a>
        </div>
      </div><!-- mockup-desc -->
    </div><!-- work-contents -->
  </div><!-- work1 -->
  <div class="planning">
    <div class="wrap">
      <button>
        <i class="fa-solid fa-xmark"></i>
      </button>
      <div class="main">
        <div class="overview">
          <p class="title">Overview</p>
          <div class="contents">
            <p>
            기존에 상용화된 기업사이트 템플릿을 레퍼런스로 참조하였습니다.<br><br>
            워드프레스기반의 상용화가 가능한 웹사이트 개발과정을 이해하고 <br>
            개발환경 설정에서부터 디자인테마 설계방식과 템플릿 제작방식 부터 <br>
            출판과정을 통해 추후 사이트 관리자가 사이트 수정·관리가 가능한 프로젝트 구축방식을 학습하였습니다. </p>
          </div>
        </div>
        <div class="style-guide">
          <p class="title">Style Guide</p>
          <div class="contents">
            <p>Colors</p>
            <div class="contents-wrap">
              <p>Primary Colors</p>
              <div class="pallete">
                <div class="sky">
                  <em class="color">sky</em>
                  <p class="rgb">RGB <b>142 209 241</b></p>
                  <p class="hex">HEX <b>8ed1f1</b></p>
                </div>
                <div class="dark-blue">
                  <em class="color">dark blue</em>
                  <p class="rgb">RGB <b>58 109 129</b></p>
                  <p class="hex">HEX <b>3a6d81</b></p>
                </div>
                <div class="blue">
                  <em class="color">blue</em>
                  <p class="rgb">RGB <b>78 140 194</b></p>
                  <p class="hex">HEX <b>4e8cc2</b></p>
                </div>
                <div class="light-yellow">
                  <em class="color">light yellow</em>
                  <p class="rgb">RGB <b>254 229 177</b></p>
                  <p class="hex">HEX <b>fee5b1</b></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="typography">
          <p class="title">Typography</p>
        </div>
        <script>
          FontArr2.forEach(function(v) {
            $(`.work4-section .typography`).append(`
              <div class="contents-wrap">
                <p>${v.name1}</p>
                <div class="font ${v.name2}">
                  <div class="category bold">
                    <div class="prev">Aa</div>
                    <div class="txt">
                      <p class="name">${v.name1} ${v.weight1}</p>
                      <p class="abc">${v.desc}</p>
                    </div>
                  </div>
                  <div class="category medium">
                    <div class="prev">Aa</div>
                    <div class="txt">
                      <p class="name">${v.name1} ${v.weight2}</p>
                      <p class="abc">${v.desc}</p>
                    </div>
                  </div>
                  <div class="category regular">
                    <div class="prev">Aa</div>
                    <div class="txt">
                      <p class="name">${v.name1} ${v.weight3}</p>
                      <p class="abc">${v.desc}</p>
                    </div>
                  </div>
                </div>
              </div>  
            `)
          }) //fontarr
        </script>
      </div>
    </div>
  </div>
</section><!-- section-work1 -->