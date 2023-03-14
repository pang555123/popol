<section class="work-section work2-section scr-section scr-section4 scr-section4-scr" data-n="4">
  <div class="bg-main bg-main2"></div>
  <div class="bg"></div>
  <div class="work">
    <div class="work-contents">
      <div class="mockup-all">
        <div class="mockup-c">
          <div class="screenshot-c">
          <img src="./img/work/work6/weapi.png" alt="kids 데스크탑이미지"><!-- 컴퓨터안 이미지 -->
          </div><!-- screenshot -->
          <p class="frame-c"></p>
        </div><!-- mockup-c -->
        <div class="mockup-m">
          <div class="screenshot-m">
          <img src="./img/work/work6/weapi-m.png" alt=""><!-- 컴퓨터안 이미지 -->
          </div><!-- screenshot -->
          <p class="frame-m"></p>
        </div><!-- mockup-m -->
      </div><!-- mockup-all -->

      <div class="mockup-desc">
        <div class="title">
          <h1>Weather App</h1>
          <p>날씨를 알려드려요!</p>
        </div><!-- title -->
        <ul>
          <li>
            <span>TYPE</span>
            <span>ReactApp</span>
          </li>
          <li>
            <span>Period</span>
            <span>2주</span>
          </li>
          <li>
            <span>TOOL</span>
            <span>html, jsx, scss, es6</span>
          </li>
          <li>
            <span>Concept</span>
            <span>날씨, 예보</span>
          </li>
          <li>
            <span>참여도</span>
            <span>30%</span>
          </li>
        </ul>
        <div class="link">
          <button data-n="2">Planning</button>
          <a href="https://pang555123.github.io/weapi/" target="_blank">Website</a>
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
              php환경의 멀티페이지 사이트 개발에 필요한 개발환경 구축 및 탬플릿 구조 설계방식을 학습하고 <br>
              선호도가 높은 소개형 웹사이트(gd웹 선정작)를 레퍼런스로 참고하였습니다. <br><br>
              svg와 스크롤 모션구현을 통해 심미성과 시각적 흥미 요소를 추가하고 <br>
              미디어 쿼리와 제이쿼리를 이용해 다양한 디바이스 환경 최적화 및 UX를 고려한 UI환경을 <br>
              제공할 수 있는 반응형 웹사이트를 제작하는데 목적을 두었습니다. </p>
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
            $(`.work2-section .typography`).append(`
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