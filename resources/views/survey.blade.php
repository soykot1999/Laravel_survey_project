@extends('master')


	<style>

		/* Styling the Body element i.e. Color,
		Font, Alignment */
		body {
			background-color: #05c46b;
			font-family: Verdana;
			text-align: center;
		}

		/* Styling the Form (Color, Padding, Shadow) */
		form {
			background-color: #fff;
			max-width: 800px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
		}

		/* Styling form-control Class */
		.form-control {
			text-align: left;
			margin-bottom: 25px;
		}

		/* Styling form-control Label */
		.form-control label {
			display: block;
			margin-bottom: 10px;
		}

		/* Styling form-control input,
		select, textarea */
		.form-control input,
		.form-control select,
		.form-control textarea {
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			padding: 10px;
			display: block;
			width: 95%;
		}

		/* Styling form-control Radio
		button and Checkbox */
		.form-control input[type="radio"],
		.form-control input[type="checkbox"] {
			display: inline-block;
			width: auto;
		}

		/* Styling Button */
		button {
            height:50px;
			background-color: tomato;
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			font-size: 21px;
			display: block;
			width: 100%;
			margin-top: 50px;
			margin-bottom: 50px;
		}
	</style>
</head>

<body>
	<h1> Survey Form</h1>

	<!-- Create Form -->
	<form id="form">

		<!-- Details -->
		<div class="form-control">
			<label for="name" id="label-name">
				Name
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="name"
				placeholder="Enter your name" />
		</div>


        <!-- inuput  phone number-->

        <div class="form-control">
			<label for="phone" id="label-phone">
				Phone
			</label>

			<!-- Input Type Text -->
			<input type="number"
				id="phone"
				placeholder="Enter your phone number" />
		</div>

        <!-- phone ends here -->
        
        
        <div class="form-control">
			<label for="email" id="label-email">
				Email
			</label>

			<!-- Input Type Email-->
			<input type="email"
				id="email"
				placeholder="Enter your email" />
		</div>

		<div class="form-control">
			<label for="age" id="label-age">
				Age
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="age"
				placeholder="Enter your age" />
		</div>

        <!-- input Father's name  -->

        <div class="form-control">
			<label for="fn" id="label-fn">
				Father's Name
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="fn"
				placeholder="Enter your Father's Name" />
		</div>

        <!-- input Mother's name  -->

        <div class="form-control">
			<label for="mn" id="label-mn">
           Mother's Name
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="mn"
				placeholder="Enter your Mother's Name" />
		</div>

        <!-- job holder Radio Button -->

<div class="form-control">
			<label>
				Are you a job holder?
			</label>

			<!-- Input Type Radio Button -->
			<label for="recommed-1">
				<input type="radio"
					id="recommed-1"
					name="recommed">Yes</input>
			</label>
			<label for="recommed-2">
				<input type="radio"
					id="recommed-2"
					name="recommed">No</input>
			</label>
			
		</div>

		<div class="form-control">
			<label for="comment">
				Any comments 
			</label>

			<!-- multi-line text input control -->
			<textarea name="comment" id="comment"
				placeholder="Enter your comment here">
			</textarea>
		</div>

         <!-- upload ID Card -->

        <div class="form-control">
			<label for="id" id="label-id">
           Upload ID Card
			</label>

			<!-- Input Type Text -->
			<form action="/action_page.php">

        <input type="file" id="img" name="img" accept="image/*">

           </form>
		</div>


  <!-- submit button -->

<div class="form-controll">

 <!-- Multi-line Text Input Control -->
 <button class="btn btn-primary" type="submit" value="submit">
			Submit
		</button>
</div>
          

	</form>
</body>


