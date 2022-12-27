<h1>Send Data to Devices Table</h1>

<form action="send" method="POST">
    @csrf
     <input type="text" name="name" placeholder="Enter UserName" > <br> <br>
     <input type="text" name="email" placeholder="Enter Email" > <br> <br>
     <input type="text" name="address" placeholder="Enter Address" > <br> <br>
     <button>Send Data</button>
</form>