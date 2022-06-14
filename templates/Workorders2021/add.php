<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Workorders2021 $workorders2021
 */


use Cake\Datasource\ConnectionManager;
use Cake\View\Helper\FormHelper;
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>

<li><?= $this->Html->link(__('View Workorders (2021)'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<style>

 /* Dropdown Button */
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

/* The search field */
#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

/* The search field when it gets focus/clicked on */
#myInput:focus {outline: 3px solid #ddd;}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  border: 1px solid #ddd;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.request-form {
  border-style: solid;
  border-width: 1px;
  border-color: #333333;
  border-radius: 15px;
  padding: 50px;
  border-width-left: 0px;
  border-width-right: 0px;
  margin-top: 10px;
  margin-bottom: 10px;
  box-shadow: 5px 5px 20px #333333;
 
}

.page-header {
  display: none;
}

.myform-group {
   border-radius: 25px;
   border-style: solid;
   border-width: 1px;
   border-color: #333333;
   box-shadow: 5px 5px 10px #333333;
   width: 70%;   
   padding: 30px;
   margin-top: 5px;
   margin-bottom: 10px;
}

.mylabel {
  padding-bottom: 5px;
}

.myform-h5 {
  padding-bottom: 20px;
}

.myform-row {
  padding-bottom: 20px;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;} 

</style>


<div class="workorders2021 form content">

    <form class="request-form form-group" name="Workorders2021" id="workorders2021" method="POST" action="add.php">    

        <h3>New Service Request</h3>

	<div class="row myform-row">

	   <div class="col-md-6">

            <fieldset class="form-group myform-group">

		<legend><h5 class="myform-h5">Chamber Name</h5></legend>

                <select name="chamber_name_select" class="form-select" id="chamber_name_select">

   	            <option value="">What Chamber Needs A Technician?</option>

	            <?php

		        ConnectionManager::drop('default');

		        $dsn = 'mysql://cryo_admin:75EZnesty3@dbase.cryocenter.us/Datacubes';

		        ConnectionManager::setConfig('default', ['url' => $dsn]);

		        $connection = ConnectionManager::get('default');

		        $query = "SELECT * FROM chambers";

		        $results = $connection->execute($query)->fetchAll('assoc');

 			foreach ($results as $key => $value)
                        {

                            $chamber_name = $value['chamber_name'];
 
		    ?>

		            <option value="<?= $chamber_name ?>"><?= $chamber_name ?></option>

	             <?php

		         }

		     ?>

	        </select>


	<script>

		var chamber_name_select_element = document.querySelector('#chamber_name_select');

		dselect(chamber_name_select_element, {
			search: true
		});

	</script>

       </div>

    </fieldset>
    

    <fieldset class="form-group myform-group">

       

	    <div class="col-md-6">

	       <legend><h5 class="myform-h5">Work Order Type</h5></legend>

               <input type="radio" id="work_order_type" name="work_order_type" value="external">

	       <label for="work_order_type">
		   External (SAN #)
	       </label>

		<br>
		<br>

	       <input type="radio" id="work_order_type" name="work_order_type" value="internal">

		<label for="work_order_type">
		    Internal (WO #)
		</label>

	    </div>

    </fieldset>

    

    <fieldset class="form-group myform-group">


	<div class="row myform-row">

            <div class="col-md-8">

	         <legend><h5 class="myform-h5">Appointment Details</h5></legend>
	    
	    </div>

	</div>

        <div class="row myform-row">

            <div class="col-md-4">

                <label class="mylabel" for="date_requested">Date Requested</label>

                <?php echo $this->Form->date('date_requested') ?>

           </div>

           <div class="col-md-4">

                <label class="mylabel" for="time_requested">Time Requested</label>

                <?php echo $this->Form->time('time_requested') ?>

           </div>

        </div>






		<?php echo $this->Form->input('description', ['type' => 'textarea', 'label' => false, 'placeholder'=> 'Please list all items that need to be addressed during the service appointment...', 'escape' => false,'class' =>'comment', 'rows' => '10', 'cols' => '20']); ?>

           </div>

	</div>



	</div>

        <div class="row myform-row">

	    <div class="col-md-4">


        </div>
            echo $this->Form->control('description');
            echo $this->Form->control('staff_support_contact');
            echo $this->Form->control('date_requested');
            echo $this->Form->control('time_reqested');
            echo $this->Form->control('not_to_exceed');
            echo $this->Form->control('warranty_coverage');
            
            
            
            echo $this->Form->control('estimated_service_duration');
            echo $this->Form->control('freshdesk_ticket_num');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
