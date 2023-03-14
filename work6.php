<section class="work-section work6-section scr-section scr-section8 scr-section8-scr" data-n="8">
  <div class="bg-main bg-main6"></div>
  <div class="bg"></div>
  <div class="work">
    <div class="work-contents">
      <div class="mockup-all">
        <div class="mockup-c">
          <div class="screenshot-c">
            <img src="./img/work/work1/pwa-w.png" alt="kids 데스크탑이미지"><!-- 컴퓨터안 이미지 -->
          </div><!-- screenshot -->
          <p class="frame-c"></p>
        </div><!-- mockup-c -->
        <div class="mockup-m">
          <div class="screenshot-m">
            <img src="./img/work/work1/pwa-m.png" alt=""><!-- 컴퓨터안 이미지 -->
          </div><!-- screenshot -->
          <p class="frame-m"></p>
        </div><!-- mockup-m -->
      </div><!-- mockup-all -->

      <div class="mockup-desc">
        <div class="title">
          <h1>SPW</h1>
          <p>계산해드립니다!</p>
        </div><!-- title -->
        <ul>
          <li>
            <span>TYPE</span>
            <span>nodeJS</span>
          </li>
          <li>
            <span>Period</span>
            <span>2주</span>
          </li>
          <li>
            <span>TOOL</span>
            <span>html, es6, scss, jsx</span>
          </li>
          <li>
            <span>Concept</span>
            <span>귀여움, 계산</span>
          </li>
          <li>
            <span>참여도</span>
            <span>30%</span>
          </li>
        </ul>
        <div class="link">
          <button data-n="6">Planning</button>
          <a href="https://pang555123.github.io/calc/" target="_blank">Website</a>
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
            nodeJS와 create-react-app을 이용하여 개발환경을 구축하였습니다 <br>
            컴포넌트를 구조화하여 화면을 설계하는 방식으로 조건별 컴퍼넌트 출력 요령과 <br>
            컴포넌트 최적화 개념 및 생명주기와 context api를 이용하여 스테이트의 효율적인 관리방식을 학습하였습니다. <br> <br>
            배열과 객체자료 형을 이용하여 화면 구성을 설계하여 프로젝트를 제작하였습니다<br>
            mainfest와 서비스워커를 등록 후 https서버 배포를 통해 오프라인에서도 서비스가 가능한 리액트 기반 프로그레시브웹앱 제작방식을 학습하는 데 목표를 두었습니다.
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
            $(`.work6-section .typography`).append(`
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