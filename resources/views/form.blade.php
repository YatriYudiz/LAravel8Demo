<Html>  
<Head>  
<title> Session Demo </title>  
</Head>  
<Body>  
<form method="Post" action="{{route('forms.store')}}">  
@csrf  
<div><label for="Name">Name</label>  
<input type="text" name="username"> </div><br/>  
<div><button type="submit">Submit </button></div>  
</form>  
</body>  