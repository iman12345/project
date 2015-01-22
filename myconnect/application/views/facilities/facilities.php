<div id="page-content-wrapper">
<!-- Page Content -->
  <div class="container-fluid" style="font-size:90%;">
  
  <div class="row">
    <div class="col-sm-10">

    <div class="page-header">
      <h1><small>Facilities</small>
        <button style="margin-top:-5px;" type="button" class="btn btn-success btn-md pull-right" data-toggle="modal" data-target="#bookModal">
          <span class="glyphicon glyphicon-calendar"></span> Book a facility
        </button>
      </h1>
    </div>
            
    <div class="well well-sm">
        <div class="row">
          <div class="col-sm-3"><span style="background-color:red;">&nbsp;&nbsp;</span> - Badminton Court</div>
          <div class="col-sm-3"><span style="background-color:green;">&nbsp;&nbsp;</span> - Tenis Court</div>
          <div class="col-sm-3"><span style="background-color:blue;">&nbsp;&nbsp;</span> - Community Room A</div>
          <div class="col-sm-3"><span style="background-color:yellow;">&nbsp;&nbsp;</span> - Community Room B</div>
        </div>
    </div>
	
	<iframe src="<?php echo base_url(); ?>facilities_cal.html" width="100%" height="800" frameborder="0"></iframe>
    
  </div><!-- /.col-sm-10 -->
  
<!-- Modal -->
<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Book a Facility</h4>
      </div><!-- /.modal-header -->
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <label for="bookId">Booking ID -</label> <span class="text-disabled">A108</span>
          </div>

          <div class="form-group">
            <label for="inputCaption">Caption</label>
            <input type="text" class="form-control" id="inputCaption" placeholder="">
          </div>
          
          <div class="form-group">
            <label for="inputDate">Date</label>
            <input type="text" class="form-control" id="facilitiesDate" placeholder="">
          </div>
          
          <div class="form-group">
            <label for="inputDate">Time</label><br />
            <div class="col-sm-6">
            <select name="timeFrom" class="btn btn-default">
              <option>08:00</option>
              <option>08:30</option>
              <option>09:00</option>
              <option>09:30</option>
            </select> 
            -
            <select name="timeTo" class="btn btn-default">
              <option>08:00</option>
              <option>08:30</option>
              <option>09:00</option>
              <option>09:30</option>
            </select>
            </div>
          </div><br />
          <div class="form-group text-right">
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div><!-- /.modal-body -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal fade -->

<script>

$("#facilitiesDate").datepicker();

</script>
