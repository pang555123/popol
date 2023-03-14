<section class="work-section work3-section scr-section scr-section5 scr-section5-scr" data-n="5">
  <div class="bg-main bg-main3"></div>
  <div class="bg"></div>
  <div class="work">
    <div class="work-contents">
      <div class="mockup-all">
        <div class="mockup-c">
          <div class="screenshot-c">
          <img src="./img/work/work4/react.png" alt="react 데스크탑이미지"><!-- 컴퓨터안 이미지 -->
          </div><!-- screenshot -->
          <p class="frame-c"></p>
        </div><!-- mockup-c -->
        <div class="mockup-m">
          <div class="screenshot-m">
          <img src="./img/work/work4/react-m.png" alt="react 모바일 이미지"><!-- 컴퓨터안 이미지 -->
          </div><!-- screenshot -->
          <p class="frame-m"></p>
        </div><!-- mockup-m -->
      </div><!-- mockup-all -->

      <div class="mockup-desc">
        <div class="title">
          <h1>DANCE STUDIO</h1>
          <p>Dance Classes</p>
        </div><!-- title -->
        <ul>
          <li>
            <span>TYPE</span>
            <span>NodeJS</span>
          </li>
          <li>
            <span>Period</span>
            <span>5주</span>
          </li>
          <li>
            <span>TOOL</span>
            <span>html5, scss, es6 , jsx</span>
          </li>
          <li>
            <span>Concept</span>
            <span>댄스, 청량함</span>
          </li>
          <li>
            <span>참여도</span>
            <span>30%</span>
          </li>
        </ul>
        <div class="link">
          <button data-n="3">Planning</button>
          <a href="http://pass214900.dothome.co.kr/spw" target="_blank">Website</a>
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
            라우터를 이용한 메뉴구성과 원페이지 형태의 싱글페이지 웹사이트 설계 요령을 습득하였습니다. <br>
            싱글페이지웹 설계시 주의해야 할 최적화 부분 과 컴퍼넌튼 구조화 요령을 이해하였습니다.<br><br>
            다양한 모션 이펙트를 리액트앱에 적용하는 방식으로 <br>
            패럴렉스 , 스크롤 모션 및 svg 필터 효과를 적용한 반응형 모던웹사이트 제작기술을 학습하는데 목적을 두었습니다. </p>
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
            $(`.work3-section .typography`).append(`
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