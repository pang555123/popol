<section class="work-section work1-section scr-section scr-section3 scr-section3-scr" data-n="3">
  <div class="bg-main bg-main1"></div>
  <div class="bg"></div>
  <div class="work">
    <div class="work-contents">
      <div class="mockup-all">
        <div class="mockup-c">
          <div class="screenshot-c">
            <img src="./img/work/work5/team.png" alt="서야궁 데스크탑이미지"><!-- 컴퓨터안 이미지 -->
          </div><!-- screenshot -->
          <p class="frame-c"></p>
        </div><!-- mockup-c -->
        <div class="mockup-m">
          <div class="screenshot-m">
            <img src="./img/work/work5/team-m.png" alt="서양궁 모바일 이미지"><!-- 컴퓨터안 이미지 -->
          </div><!-- screenshot -->
          <p class="frame-m"></p>
        </div><!-- mockup-m -->
      </div><!-- mockup-all -->

      <div class="mockup-desc">
        <div class="title">
          <h1>Seo-ya Palace</h1>
          <p>궁의 아름다움을 경험하는 특별한 감동</p>
        </div><!-- title -->
        <ul>
          <li>
            <span>TYPE</span>
            <span>FullpageWeb</span>
          </li>
          <li>
            <span>Period</span>
            <span>4주</span>
          </li>
          <li>
            <span>TOOL</span>
            <span>PHP, HTML, CSS, JS</span>
          </li>
          <li>
            <span>Concept</span>
            <span>반응형, 문화</span>
          </li>
          <li>
            <span>참여도</span>
            <span>30%</span>
          </li>
        </ul>
        <div class="link">
          <button data-n="1">Planning</button>
          <a href="http://pass214900.dothome.co.kr/서야궁" target="_blank">Website</a>
          <!-- 각자 포폴 링크 -->
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
                <div class="dark-navy">
                  <em class="color">dark navy</em>
                  <p class="rgb">RGB <b>0 10 22</b></p>
                  <p class="hex">HEX <b>000a16</b></p>
                </div>
                <div class="navy">
                  <em class="color">navy</em>
                  <p class="rgb">RGB <b>32 62 95</b></p>
                  <p class="hex">HEX <b>203e5f</b></p>
                </div>
                <div class="yellow">
                  <em class="color">yellow</em>
                  <p class="rgb">RGB <b>255 204 0</b></p>
                  <p class="hex">HEX <b>ffcc00</b></p>
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
          FontArr1.forEach(function(v) {
            $(`.work1-section .typography`).append(`
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