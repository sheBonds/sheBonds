

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- e.g.: render a search input: -->
<script>fatsecret.writeHolder("search");</script>

<!-- e.g.: render the name of a food: -->
<script>fatsecret.writeHolder("foodtitle");</script>

<!-- e.g.: render a food nutrition panel: -->
<script>fatsecret.writeHolder("nutritionpanel");</script>

    <script src="https://platform.fatsecret.com/js?key=3e0fde7885f64ba6af7b1adcbfe15415&auto_nav=false"></script>
    <!-- Latest compiled and minified CSS -->

<style type="text/css">
  
  .fatsecret_home_summary_label{

    color:white;
  }

  .fatsecret_subheading .fatsecret_home_heading{
     color:white;
  }

  .fatsecret_home_summary{
 color:white;

  }

  
</style>
</head>
<body>

  <a href="home.php">home</a>
<div id="my_container" class="fatsecret_container">
  

</div>


















<script type="text/javascript">



 fatsecret.setContainer("my_container");
 fatsecret.setCanvas("home");





fatsecret.addRef("search", "search");
fatsecret.addRef("foodtitle", "food_title");
fatsecret.addRef("nutritionpanel", "nutrition_panel");

</script>
</body>
</html>