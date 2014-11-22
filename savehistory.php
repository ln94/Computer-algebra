<HTML>
<BODY>
<?php
  $date = $_GET["date"]; 
  $expr = $_GET["expr"];
  $success = $_GET["success"];
  
  $initfile = "inittex.tex";
  $finalfile = "history.tex";
  
  $initfile2 = "inittex2.tex";
  $finalfile2 = "history2.tex";
  
  $par = "\par";
  $newl = "\n";
  
  $date = str_replace("_"," ",$date);
  $date = str_replace("plus","+",$date);
  $expr = str_replace("plus","+",$expr);
  $expr = str_replace("*"," \cdot ",$expr);
    
  file_put_contents($initfile, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile, $par, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile, "Date: ", FILE_APPEND|LOCK_EX);
  file_put_contents($initfile, $date, FILE_APPEND|LOCK_EX);
    
  file_put_contents($initfile, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile, $par, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile, "Expression: $", FILE_APPEND|LOCK_EX);
  file_put_contents($initfile, $expr, FILE_APPEND|LOCK_EX); 
  file_put_contents($initfile, "$", FILE_APPEND|LOCK_EX); 
    
  file_put_contents($initfile, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile, $par, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile, "Build: ", FILE_APPEND|LOCK_EX);
  file_put_contents($initfile, ($success == "true")? "yes" : "no", FILE_APPEND|LOCK_EX);
  
  file_put_contents($initfile2, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile2, $par, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile2, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile2, "Date: ", FILE_APPEND|LOCK_EX);
  file_put_contents($initfile2, $date, FILE_APPEND|LOCK_EX);
    
  file_put_contents($initfile2, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile2, $par, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile2, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile2, "Expression: $", FILE_APPEND|LOCK_EX);
  file_put_contents($initfile2, $expr, FILE_APPEND|LOCK_EX); 
  file_put_contents($initfile2, "$", FILE_APPEND|LOCK_EX); 
    
  file_put_contents($initfile2, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile2, $par, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile2, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile2, "Build: ", FILE_APPEND|LOCK_EX);
  file_put_contents($initfile2, ($success == "true")? "yes" : "no", FILE_APPEND|LOCK_EX);
  
  if ($success == "true")
  {
    $tree = $_GET["tree"];
    $tree = str_replace("plus","+",$tree);
    file_put_contents($initfile, $newl, FILE_APPEND|LOCK_EX);
    file_put_contents($initfile, $par, FILE_APPEND|LOCK_EX);
    file_put_contents($initfile, $newl, FILE_APPEND|LOCK_EX);
    file_put_contents($initfile, "Tree: ", FILE_APPEND|LOCK_EX);
    file_put_contents($initfile, $newl, FILE_APPEND|LOCK_EX);
    file_put_contents($initfile, "\qtreecenterfalse", FILE_APPEND|LOCK_EX);
    file_put_contents($initfile, $newl, FILE_APPEND|LOCK_EX);
    file_put_contents($initfile, $tree, FILE_APPEND|LOCK_EX);
  }
    
  file_put_contents($initfile, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile, "\bigskip", FILE_APPEND|LOCK_EX);
  file_put_contents($initfile, $newl, FILE_APPEND|LOCK_EX);
  
  file_put_contents($initfile2, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($initfile2, "\bigskip", FILE_APPEND|LOCK_EX);
  file_put_contents($initfile2, $newl, FILE_APPEND|LOCK_EX);
    
  exec("cp $initfile $finalfile");
  file_put_contents($finalfile, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($finalfile, "\end{document}", FILE_APPEND|LOCK_EX);
  
  exec("cp $initfile2 $finalfile2");
  file_put_contents($finalfile2, $newl, FILE_APPEND|LOCK_EX);
  file_put_contents($finalfile2, "\end{document}", FILE_APPEND|LOCK_EX);
  
?>
</BODY>
</HTML>