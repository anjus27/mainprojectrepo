
<section class="search-banner bg-danger text-white py-5" id="search-banner">
    <div class="container py-5 my-5">
    <div class="row text-center pb-4">
        <div class="col-md-12">
            <h2>Find the New & Used Car in India</h2>
        </div>
    </div>   
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                <div class="col-md-2">
                    <div class="form-group ">
					<label>Select City</label>
					 <td>  <select class="form-control" name="city" id="city" >
                           
						 <option value=0>SELECT city </option>
						 <?php
						  $con = mysqli_connect("localhost", "root", "", "metrofaredb");
													 if (!$con) {
														 echo "Could not connect..Try again";
													 } else {
														 $sql = "SELECT ctid, cityname FROM `tbl_city` WHERE status=1";
														 $result = mysqli_query($con, $sql);
														 //echo "";
														 while ($row = mysqli_fetch_array($result)) {
															 $cityname = $row['cityname'];
															 $ctid = $row['ctid'];
															 echo "<option value='$ctid'>$cityname</option>";
														 }
													 }
													 mysqli_close($con);
													 ?>
							   </select>
					  
                        </div>
                </div>
                
                
               
              
               
                <div class="col-md-2">
                    <button type="button" class="btn btn-dark">Search</button>

                </div>
            </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
</section>




