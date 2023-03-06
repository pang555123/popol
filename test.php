<script src="./js/store.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<div class="typography">
  <p class="title">Typography</p>
</div>
<script>
    FontArr.forEach(function(v){
      $(`.typography`).append(`
        <div class="contents-wrap">
          <p>${v.name}</p>
          <div class="font">
            <div class="category bold">
              <div class="prev">Aa</div>
              <div class="txt">
                <p class="name">${v.name} ${v.weight1}</p>
                <p class="abc">${v.desc}</p>
              </div>
            </div>
            <div class="category medium">
              <div class="prev">Aa</div>
              <div class="txt">
                <p class="name">${v.name} ${v.weight2}</p>
                <p class="abc">${v.desc}</p>
              </div>
            </div>
            <div class="category regular">
              <div class="prev">Aa</div>
              <div class="txt">
                <p class="name">${v.name} ${v.weight3}</p>
                <p class="abc">${v.desc}</p>
              </div>
            </div>
          </div>
        </div>  
      `)
    })//fontarr
  </script>