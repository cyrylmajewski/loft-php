<form action="/register" method="POST">
    Register:
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
    </div>
	<div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	</div>
    <div class="form-group">
        <label for="exampleInputPassword1">Repeat password</label>
        <input name="repeatPassword" type="password" class="form-control" id="exampleInputPasswordRepeat1" placeholder="Repeat password">
    </div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>
<span>Already registered? <a href="/login">Log in</a></span>
