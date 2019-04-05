<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
 <span>
 <?php  
$myfile = "new7.txt";  
if (is_readable($myfile))  
{ 
    readfile($myfile); 
}
  
else 

{ 
    echo '$myfile is not readable'; 
} 
?>
</span>

  <div class="container">
   <div class="table-responsive">
    <br />
         <button type="checked" name="load_data" id="load_data" class="btn btn-info">Support Details</button> &nbsp;&nbsp;&nbsp;&nbsp;
		 <button type="checked" name="load_data1" id="load_data1" class="btn btn-info">Support Details</button>
        <br />
    <div id="employee_table">
    </div>
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#load_data').click(function(){
  $.ajax({
   url:"data.csv",
   dataType:"text",
   success:function(data)
   {
    var employee_data = data.split(/\r?\n|\r/);
    var table_data = '<table class="table thic-bordered">';
    for(var count = 0; count<employee_data.length; count++)
    {
     var cell_data = employee_data[count].split(",");
     table_data += '<tr>';
     for(var cell_count=0; cell_count<cell_data.length; cell_count++)
     {
      if(count === 0)
      {
       table_data += '<th>'+cell_data[cell_count]+'</th>';
      }
      else
      {
       table_data += '<td>'+cell_data[cell_count]+'</td>';
      }
     }
     table_data += '</tr>';
    }
    table_data += '</table>';
    $('#employee_table').html(table_data);
   }
  });
 });
 
});
</script>
<script>
$(document).ready(function(){
 $('#load_data1').click(function(){
  $.ajax({
   url:"data2.csv",
   dataType:"text",
   success:function(data)
   {
    var employee_data = data.split(/\r?\n|\r/);
    var table_data = '<table class="table thic-bordered">';
    for(var count = 0; count<employee_data.length; count++)
    {
     var cell_data = employee_data[count].split(",");
     table_data += '<tr>';
     for(var cell_count=0; cell_count<cell_data.length; cell_count++)
     {
      if(count === 0)
      {
       table_data += '<th>'+cell_data[cell_count]+'</th>';
      }
      else
      {
       table_data += '<td>'+cell_data[cell_count]+'</td>';
      }
     }
     table_data += '</tr>';
    }
    table_data += '</table>';
    $('#employee_table').html(table_data);
   }
  });
 });
 
});
</script>