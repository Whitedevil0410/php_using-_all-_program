
<!-- Write a script to demonstrate multiple
inheritance. -->
<!-- interface make program -->
<!DOCTYPE html>
<html>
<head>
    <title>pr_7</title>
</head>
<body>
    <h2>===========================</h2>
    <h2>PRIYANSH MASIYAVA (216090307029)</h2>
    <h2>===========================</h2>
    <?php

      interface AA{
         function f1();
      }

      interface BB{
        function f2();
      }

      class C implements AA,BB{
        function f1(){
          echo " <h2>MASIYAVA</h2>";
        }
        function f2(){
          echo "<h2>PRIYANSH</h2>";
        }
      }
      $ob = new C();
      $ob->f1();
      $ob->f2();
?>    
</body>
</html>
