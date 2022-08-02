<!DOCTYPE html>
<html>
<head>
<title>Laravel Currency Exchange Rate Calculator - Tutsmake.com</title> 
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script> 
</head>
<body>
<div class="container mt-5">
<div class="card">
<div class="card-header">
Laravel Currency Exchange Rate Calculator
</div>
<div class="card-body">
<form id="currency-exchange-rate" action="#" method="post" class="form-group">
<div class="row mb-3">
<div class="col-md-4">
<input type="text" name="amount" class="form-control" value="1">  
</div>
<div class="col-md-4">
<select name="from_currency" class="form-control"> 
<option value='EUR'>EUR</option>

<option value='JPY'>JPY</option>

<option value='MYR'>MYR</option>

<option value='SGD'>SGD</option>
<option value='THB'>THB</option>

<option value='USD'>USD</option>

</select>
</div>
<div class="col-md-4">
<select name="to_currency" class="form-control">
    <option value='EUR'>EUR</option>

    <option value='JPY'>JPY</option>
    
    <option value='MYR'>MYR</option>
    
    <option value='SGD'>SGD</option>
    <option value='THB'>THB</option>
    
    <option value='USD'>USD</option>
</select>
</div>
</div>  
<div class="row">
<div class="col-md-4">
<input type="submit" name="submit" id="btnSubmit" class="btn btn-primary " value="Click To Exchange Rate">
</div>
</div>
</form> 
</div>
<div class="card-footer">
<span id="output"></span>
</div>
</div>
</div>

</body>
</html>