<style>
    li
    {
        display:inline-block;
    }
    td,table,th
{
	border:3px solid green;
	border:3px solid green;
	border-collapse:collapse;
	//border-radius:10px;
	
}
    table  
{	padding:15px;
	color:green;
	padding:20px;
	border-radius:5px;
	border:2px solid blueviolet;
}
    </style>

<div class="container">
    <h1>Laravel pagination</h1><hr>
	    <table class="table">
	      <thead>
	        <tr>
	          <th scope="col">id</th>
	          <th scope="col">School name</th>
	          <th scope="col">Village</th>
	          <th scope="col">PrincipalName</th>
	        </tr>
	      </thead>
	      <tbody>
	        @foreach($showSchoolData as $data)
           {{-- dd($showSchoolData);--}}
	        <tr>
	          <td>{{$data->id}}</td>
	          <td>{{$data->School}}</td>
	          <td>{{$data->Village}}</td>
	          <td>{{$data->PrincipalName}}</td>
	        </tr>
	        @endforeach
	      </tbody>
	    </table>
    <h5>Pagination:</h5>
   <div> {{ $showSchoolData->links() }}</div>
 </div>