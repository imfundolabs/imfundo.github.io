<?php
	if (isset($_POST['cf_sch_name']) && isset($_POST['cf_stu1_name']) && isset($_POST['cf_stu1_class']) && isset($_POST['cf_tch_name']) && isset($_POST['cf_tch_email']) && isset($_POST['cf_tch_phone'])) {
		$sch_name = $_POST['cf_sch_name'];
		$slot_date = $_POST['cf_slot'];
		$reg_mode = $_POST['cf_mode'];
		$stu1_name = $_POST['cf_stu1_name'];
		$stu1_class = $_POST['cf_stu1_class'];
		$stu1_email = $_POST['cf_stu1_email'];
		$stu1_phone = $_POST['cf_stu1_phone'];
		$stu2_name = $_POST['cf_stu2_name'];
		$stu2_class = $_POST['cf_stu2_class'];
		$stu2_email = $_POST['cf_stu2_email'];
		$stu2_phone = $_POST['cf_stu2_phone'];
		$tch_name = $_POST['cf_tch_name'];
		$tch_email = $_POST['cf_tch_email'];
		$tch_phone = $_POST['cf_tch_phone'];
		
		$mail_to = 'akshat@imfundo.io';
		$subject = 'Robotics101 Registration: '.$sch_name;
		
		$body_message = 'School Name: '.$sch_name."\n\n";
		$body_message .= 'Slot Opted For: '.$slot_date."\n\n";
		$body_message .= 'Registration Mode: '.$reg_mode."\n\n";
		$body_message .= 'Student Name: '.$stu1_name."\n";
		$body_message .= 'Student Class: '.$stu1_class."\n";
		$body_message .= 'Student Phone: '.$stu1_phone."\n";
		$body_message .= 'Student E-Mail: '.$stu1_email."\n\n";
		$body_message .= '2nd Student Name: '.$stu2_name."\n";
		$body_message .= '2nd Student Class: '.$stu2_class."\n";
		$body_message .= '2nd Student Phone: '.$stu2_phone."\n";
		$body_message .= '2nd Student E-Mail: '.$stu2_email."\n\n";
		$body_message .= 'Guardian Name: '.$tch_name."\n";
		$body_message .= 'Guardian Phone: '.$tch_phone."\n";
		$body_message .= 'Guardian E-Mail: '.$tch_email."\n\n";
		
		$headers = 'From: '.$tch_email."\r\n";
		$headers .= 'Reply-To: '.$tch_email."\r\n";
		
		$mail_status = mail($mail_to, $subject, $body_message, $headers);
		
		if ($mail_status) { ?>
			<script language="javascript" type="text/javascript">
				alert('Thank you for your registration. Looking forward to see you at the camp. We will contact you shortly for the payment.');
				window.location = 'robotics101-register.html';
			</script>
		<?php
		}
		else { ?>
			<script language="javascript" type="text/javascript">
				alert('Sorry, registration failed. Please, send an email to akshat@imfundo.io');
				window.location = 'robotics101-register.html';
			</script>
		<?php
		}
	}
	else { ?>
		<script language="javascript" type="text/javascript">
			alert('Sorry, registration failed. Please, send an email to akshat@imfundo.io');
			window.location = 'robotics101-register.html';
		</script>
	<?php
	}
?>