<div class="col-sm-2 pull-right" style="padding:0;">
      
    <div class="list-group">
      <span class="list-group-item">
        <strong>Promotions</strong>
        <a href="#" class="pull-right">See all</a>
      </span>
      <!------------------------------------->
      <?php foreach($promotions as $row){ ?>
        <a href="#" class="list-group-item">
        <img src="data:image/jpeg;base64,<?php echo base64_encode($row->IMAGE); ?>" alt="title1" class="img-responsive" style="">
        <h4 class="text-center"><?php echo $row->NAME; ?></h4>
        <p class="text-center"><?php echo $row->DESCRIPTION; ?></p>
      </a>
      <?php } ?>
      <!------------------------------------->
      <!--
      <a href="#" class="list-group-item">
        <img src="http://placehold.it/250x200" alt="title1" class="img-responsive" style="">
        <h4 class="text-center">Heading</h4>
        <p class="text-center">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
      </a>
      <a href="#" class="list-group-item">
        <img src="http://placehold.it/250x200" alt="title1" class="img-responsive" style="">
        <h4 class="text-center">Heading</h4>
        <p class="text-center">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
      </a>
    -->
    </div>
    
    <div class="list-group">
      <span class="list-group-item">
        <strong>Local Services</strong>
        <a href="#" class="pull-right">See all</a>
      </span>
      <!------------------------------------->
      <?php foreach($services as $row){ ?>
        <a href="#" class="list-group-item">
        <img src="http://placehold.it/250x200" alt="title1" class="img-responsive" style="">
        <h4 class="text-center"><?php echo $row->NAME; ?></h4>
        <p class="text-center"><?php echo $row->DESCRIPTION; ?></p>
      </a>
      <?php } ?>
      <!------------------------------------->
      <!--
      <a href="#" class="list-group-item">
        <img src="http://placehold.it/250x200" alt="title1" class="img-responsive" style="">
        <h4 class="text-center">Heading</h4>
        <p class="text-center">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
      </a>
      <a href="#" class="list-group-item">
        <img src="http://placehold.it/250x200" alt="title1" class="img-responsive" style="">
        <h4 class="text-center">Heading</h4>
        <p class="text-center">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
      </a>
      -->
    </div>
        
</div><!-- /.col-sm-2 pull-right -->
