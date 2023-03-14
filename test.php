<script src="./js/store.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="./css/text.css">
<div class="typography">
  <p class="title">Typography</p>
</div>
<script>
  FontArr1.forEach(function(v) {
    $(`.typography`).append(`
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