<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" sizes="57x57" href="https://select2.github.io/images/apple-touch-icon-57x57.png?v=699Nxpjr2A">
<link rel="apple-touch-icon" sizes="60x60" href="https://select2.github.io/images/apple-touch-icon-60x60.png?v=699Nxpjr2A">
<link rel="apple-touch-icon" sizes="72x72" href="https://select2.github.io/images/apple-touch-icon-72x72.png?v=699Nxpjr2A">
<link rel="icon" type="image/png" href="https://select2.github.io/images/favicon-32x32.png?v=699Nxpjr2A" sizes="32x32">
<link rel="icon" type="image/png" href="https://select2.github.io/images/favicon-16x16.png?v=699Nxpjr2A" sizes="16x16">
<link rel="manifest" href="https://select2.github.io/images/manifest.json?v=699Nxpjr2A">
<link rel="mask-icon" href="https://select2.github.io/images/safari-pinned-tab.svg?v=699Nxpjr2A" color="#F6F6F6">
<link rel="shortcut icon" href="https://select2.github.io/images/favicon.ico?v=699Nxpjr2A">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/browserconfig.xml?v=699Nxpjr2A">
<meta name="theme-color" content="#f6f6f6">
<title>
  Examples - Select2
</title>
<script type="text/javascript" src="https://select2.github.io/vendor/js/jquery.min.js"></script>
<script type="text/javascript" src="https://select2.github.io/dist/js/select2.full.js"></script>
<script type="text/javascript" src="https://select2.github.io/vendor/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://select2.github.io/vendor/js/prettify.min.js"></script>
<script type="text/javascript" src="https://select2.github.io/vendor/js/anchor.min.js"></script>
<link href="https://select2.github.io/css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="https://select2.github.io/dist/css/select2.min.css" type="text/css" rel="stylesheet" />

<link href="https://select2.github.io/css/font-awesome.css" type="text/css" rel="stylesheet" />
<link href="https://select2.github.io/css/s2-docs.css" type="text/css" rel="stylesheet" >
  </head>
  <body>
<script type="text/javascript" src="https://select2.github.io/vendor/js/placeholders.jquery.min.js"></script>
<script type="text/javascript" src="https://select2.github.io/dist/js/i18n/es.js"></script>
<style type="text/css">
  .img-flag {
    height: 15px;
    width: 18px;
  }
</style>
<div class="container s2-docs-container">
  <div class="row">
    <div class="col-md-9" role="main">
      <section>
  <h1 id="matcher">Customizing how results are matched</h1>
  <div class="s2-example">
    <p>
      Select 1 <select class="js-example-matcher-start js-states form-control" id="s1"></select>
    </p>
      <p>
      Select 2 <select class="js-example-matcher-start js-states form-control" id="s2"></select>
    </p>
  </div>
</section>
    </div>
  </div>
</div>
<select class="js-source-states">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select>

<script type="text/javascript">
//การเทียบค่า
    $(document).ready(function () {
      $('#s1').change(function() {
          var val1 = $(this).find(":selected").val();
          var val2 = $('#s2').find(":selected").val();
          if(val1 == val2){
            alert('ซ้ำ1');
            //อยากให้เป็นอะไรก็ เช่น ค่าว่าง ค่าเริ่มต้น
          }
      });
      $('#s2').change(function() {
          var val1 = $('#s1').find(":selected").val();
          var val2 = $(this).find(":selected").val();
          if(val2 == val1){
            alert('ซ้ำ2');
            //อยากให้เป็นอะไรก็ เช่น ค่าว่าง ค่าเริ่มต้น
          }
      });
    });

//ดึงข้อมูลมาแสดงมีตัดทอนออกให้สั้นลง
  var $states = $(".js-source-states");
  var statesOptions = $states.html();
  $states.remove();
  $(".js-states").append(statesOptions);
  prettyPrint();
  $.fn.select2.amd.require([
    "select2/core",
    "select2/utils",
    "select2/compat/matcher"
  ], function (Select2, Utils, oldMatcher) {
    $.fn.select2.defaults.set("width", "100%");
    // function matchStart (term, text) {
    //   if (text.toUpperCase().indexOf(term.toUpperCase()) == 0) {
    //     return true;
    //   }
    //   return false;
    // }
    // var $matcherStart = $('.js-example-matcher-start');
    // $matcherStart.select2({
    //   matcher: oldMatcher(matchStart)
    // });

  });
</script>
  </body>
</html>