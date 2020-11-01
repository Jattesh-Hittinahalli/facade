<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.get('http://dummy.restapiexample.com/api/v1/employee/1',function(result,state){
           let collection;
           let data=result.data;
           $('h1').append(data)
           for(i=0;i<data.length;i++)
           {
               collection=collection+"<p>Name:"+data[i].employee_name+"</p>"
               
           }
           // $('p').append(collection)
            console.warn(data)
        })
    });
});
</script>
</head>
<body>
    <h1>Profile List</h1>
    <button>fetch ajax data</button>
    <h1></h1>
</body>
</html>