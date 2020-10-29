<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>edit</title>
        <style>
                    
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

.boton_personalizado{
    text-decoration: none;
    padding: 5px;
    font-weight: 600;
    font-size: 15px;
    color: black;
    background-color: white;
    border-radius: 6px;
    border: 2px solid;
  }
.boton_personalizado2{
    text-decoration: none;
    padding: 5px;
    font-weight: 600;
    font-size: 15px;
    color: #ffffff;
    background-color: blue;
    border-radius: 6px;
  }
.boton_personalizado3{
    text-decoration: none;
    padding: 5px;
    font-weight: 600;
    font-size: 15px;
    color: #ffffff;
    background-color: green;
    border-radius: 6px;
  }
.boton_personalizado4{
    text-decoration: none;
    padding: 5px;
    font-weight: 600;
    font-size: 15px;
    color: #ffffff;
    background-color: red;
    border-radius: 6px;
  }
.boton_personalizado5{
    text-decoration: none;
    padding: 5px;
    font-weight: 600;
    font-size: 15px;
    color: black;
    background-color: yellow;
    border-radius: 6px;
}
.boton_personalizado6{
    text-decoration: none;
    padding: 5px;
    font-weight: 600;
    font-size: 15px;
    color: white;
    background-color: black;
    border-radius: 6px;
}
        </style>
    </head>
    <body>
    <section>
      <h1>Ticket Index</h1>
      <div class="tbl-header">
        <form method="post" action="{{url('ticket/'.$id)}}">
        @method('put')
        @csrf
        <table cellpadding="0" cellspacing="0" border="0">
          <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Date</th>
                <th>Time</th>
                <th>Submit</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
          <tbody>
            <tr>
                <td><input type="text" name="name" value="{{$name}}"/></td>
                <td><input type="number" name="price" value="{{$price}}"/></td>
                <td><input type="date" name="date" value="{{$date}}"/></td>
                <td><input type="time" name="time" value="{{$time}}"/></td>
                <td><input class="boton_personalizado5" type="submit" value="Submit"/></td>
            </tr>
          </tbody>
        </table>
      </div>
    <a class="boton_personalizado6" href="{{url('ticket')}}">Index</a>
    <a class="boton_personalizado2" href="{{url('ticket/'.$id)}}">Show</a>
    <form action="{{url('ticket/'.$id)}}" method="post">
        @method('delete')
        @csrf
        <input type="hidden" name="id" value="{{$id}}"/>
        <input class="boton_personalizado4" type="submit" value="Delete"/>
    </form>
    </section>
    </body>
</html>